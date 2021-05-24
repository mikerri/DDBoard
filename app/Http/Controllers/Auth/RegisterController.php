<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Notice;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public $config;

    public function __construct()
    {
        $this->middleware('guest');
        $this->config = cache("config.join") ? : json_decode(Config::where('name', 'config.join')->first()->vars);
    }

    // 회원 가입 수행
    public function register(Request $request)
    {
        $rules = [
            'agreeStipulation' => 'required',
            'agreePrivacy' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'name' => 'required|name_length:2,4|alpha_dash',
            'password' => $this->getPasswordRuleByConfigPolicy(),
            'password_confirmation' => 'required',
        ];
        $messages = [
            'agreeStipulation.required' => ':attribute에 동의해야 회원가입을 진행할 수 있습니다.',
            'agreePrivacy.required' => ':attribute에 동의해야 회원가입을 진행할 수 있습니다.',
            'email.required' => '이메일을 입력해 주세요.',
            'email.email' => '이메일에 올바른 Email양식으로 입력해 주세요.',
            'email.max' => '이메일은 :max자리를 넘길 수 없습니다.',
            'email.unique' => '이미 등록된 이메일입니다. 다른 이메일을 입력해 주세요.',
            'password.required' => '비밀번호를 입력해 주세요.',
            'password.confirmed' => '비밀번호 확인에 동일하게 입력해 주세요.',
            'password.regex' => $this->addPasswordMessages(),
            'password_confirmation.required' => '비밀번호 확인을 입력해 주세요.',
            'name.required' => '이름을 입력해 주세요.',
            'name.name_length' => '이름의 길이는 한글 :half자, 영문 :min자 이상이어야 합니다.',
            'name.alpha_dash' => '이름에 영문자, 한글, 숫자, 대쉬(-), 언더스코어(_)만 입력해 주세요.',
        ];
        $attributes = [
            'agreeStipulation' => '회원가입약관',
            'agreePrivacy' => '개인정보처리방침안내',
        ];

        $validator = $this->validate($request, $rules, $messages, $attributes);
        if($validator->fails()) {
            return redirect(route('register', $request->except(['password', 'password_confirmation', '_token', 'g-recaptcha-response'])))->withErrors($validator);
        }

        $user = $this->joinUser($request);
        if(!$this->config->emailCertify) {
            Auth::login($user);
        }

        return redirect(route('welcome', [
            'name' => $user->name,
            'email' => $user->email,
        ]));
    }

    // 회원 가입
    public function joinUser($request)
    {
        $nowDate = Carbon::now()->toDateString();

        $userInfo = [
            'email' => getEmailAddress($request->get('email')),
            'password' => $request->filled('password') ? bcrypt($request->get('password')) : '',
            'name' => $request->filled('name') ? cleanXssTags(trim($request->name)) : null,
            'hp' =>  $request->filled('hp') ? trim($request->hp) : null,
            'adult' => $request->filled('adult') ? $request->adult : 0,
            'mailing' => 0,
            'open' => 1,
            'open_date' => $nowDate,
            'today_login' => Carbon::now(),
            'login_ip' => $request->ip(),
            'ip' => $request->ip(),
            'certify' => $request->filled('certify') ? $request->certify : null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // 이메일 인증을 사용할 경우 + 소셜 가입이 아닌 경우
        if($this->config->emailCertify && !session()->get('userFromSocial')) {
            $addUserInfo = [
                'email_certify' => null,
                'level' => 1,   // 인증하기 전 회원 레벨은 1
            ];
            $userInfo = array_collapse([$userInfo, $addUserInfo]);
        }
        else {    // 이메일 인증을 사용하지 않을 경우 || 소셜 가입인 경우
            $addUserInfo = [
                'email_certify' => Carbon::now(),
                'level' => $this->config->joinLevel,
            ];
            $userInfo = array_collapse([$userInfo, $addUserInfo]);
        }

        // 회원정보로 유저를 추가한다.
        $userId = User::insertGetId($userInfo);
        $user = User::find($userId);

//        $notice = new Notice();
//        // 회원 가입 축하 메일 발송 (인증도 포함되어 있음)
//        if($this->config->emailJoinUser) {
//            $notice->sendCongratulateJoin($user);
//        }
//        // 최고관리자에게 회원 가입 알림 메일 발송
//        if($this->config->emailJoinSuperAdmin) {
//            $notice->sendJoinNotice($user);
//        }

        return $user;
    }

    function getPasswordRuleByConfigPolicy(): array
    {
        $rulePieces = array();
        $ruleString = array();
        $ruleArr = [
            'required', 'confirmed',
        ];
        $index = 0;
        if($this->config->passwordPolicyUpper == 1) {     // 대문자를 1개 이상 포함할 때
            $rulePieces[$index] = '(?=.*[A-Z])';
            $index++;
        }
        if($this->config->passwordPolicyNumber == 1) {     // 숫자를 1개 이상 포함할 때
            $rulePieces[$index] = '(?=.*\d)';
            $index++;
        }
        if($this->config->passwordPolicySpecial == 1) {     // 특수문자를 1개 이상 포함할 때
            $rulePieces[$index] = '(?=.*[~`!@#$%^&*()\-_=+])';
            $index++;
        }

        // 비밀번호 규칙 정규식 조합
        $ruleString = '/^(?=.*[a-z])' . implode($rulePieces) . '.{' . $this->config->passwordPolicyDigits . ',}/';

        array_push($ruleArr,  'regex:' . $ruleString);

        return $ruleArr;
    }

    // 비밀번호 조합 정책에 따른 유효성 검사 메세지 추가
    function addPasswordMessages(): string
    {
        $message = "";

        if ($this->config->passwordPolicyUpper) {
            $message .= '대문자 1개 이상';
        }
        if($this->config->passwordPolicyNumber) {
            if($message) $message .= ', ';
            $message .= '숫자 1개 이상';
        }
        if($this->config->passwordPolicySpecial) {
            if($message) $message .= ', ';
            $message .= '특수문자 1개 이상';
        }
        if($message) {
            $message .= '이 포함된 ';
        }
        $message .= $this->config->passwordPolicyDigits. '자리 이상의 문자열로 입력해 주세요.';

        return $message;
    }
}
