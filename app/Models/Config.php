<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Config extends Model
{
    use HasFactory;

    // 타임스탬프 created_at & updated_at 컬럼 자동 저장 안하기
    public $timestamps = false;

    // json형태로 저장된 설정을 배열형태로 변환하는 메소드
    public function getConfigJson($config) {
        return json_decode($config->vars);
    }

    // 환경 설정 항목별 생성 함수 연결
    public function createConfigByOne($configName): Config
    {
        switch ($configName) {
            case 'homepage':
                return $this->createConfigHomepage();
            case 'board':
                return $this->createConfigBoard();
            case 'join':
                return $this->createConfigJoin();
            case 'sns':
                return $this->createConfigSns();
            case 'extra':
                return $this->createConfigExtra();
            default:
                # code...
                break;
        }
    }

    // 회원 가입 설정을 config 테이블에 추가한다.
    // 기본 메일 환경 설정을 config 테이블에 추가한다.
    public function createConfigHomepage(): Config
    {
        $configArr = array (
            'title' => config('site.title'),
            'openDate' => config('site.openDate'),
            'newDel' => config('site.newDel'),
            'memoDel' => config('site.memoDel'),
            'newRows' => config('site.newRows'),
            'pageRows' => config('site.pageRows'),
            // 'mobilePageRows' => config('site.mobilePageRows'),
            // 'writePages' => config('site.writePages'),
            // 'mobilePages' => config('site.mobilePages'),
            'newSkin' => config('site.newSkin'),
            'searchSkin' => config('site.searchSkin'),
            'useCopyLog' => config('site.useCopyLog'),
            'analytics' => config('site.analytics'),
            'addMeta' => config('site.addMeta'),
            'emailUse' => config('site.emailUse'),
            'adminEmail' => config('site.adminEmail'),
            'adminEmailName' => config('site.adminEmailName'),
            'emailCertify' => config('site.emailCertify'),
            'formmailIsMember' => config('site.formmailIsMember'),
        );

        return $this->saveConfigByOne('config.homepage', $configArr);
    }

    // 게시판 기본 설정을 config 테이블에 추가한다.
    // 게시판 글 작성 시 메일 설정을 config 테이블에 추가한다.
    // 개별 스킨 설정 가져오기
    public function createConfigBoard(): Config
    {
        $configArr = array (
            'linkTarget' => config('site.linkTarget'),
            'imageExtension' => config('site.imageExtension'),
            'flashExtension' => config('site.flashExtension'),
            'movieExtension' => config('site.movieExtension'),
            'filter' => config('site.filter'),
            'emailWriteSuperAdmin' => config('site.emailWriteSuperAdmin'),
            'emailWriteGroupAdmin' => config('site.emailWriteGroupAdmin'),
            'emailWriteBoardAdmin' => config('site.emailWriteBoardAdmin'),
            'emailWriter' => config('site.emailWriter'),
            'emailAllCommenter' => config('site.emailAllCommenter'),
            'skin' => config('site.boardSkin'),
        );

        return $this->saveConfigByOne('config.board', $configArr);
    }

    // 회원 가입 설정을 config 테이블에 추가한다.
    // 회원가입 시 메일 설정을 config 테이블에 추가한다.
    public function createConfigJoin(): Config
    {
        $configArr = array (
            'name' => config('site.name'),
            'tel' => config('site.tel'),
            'hp' => config('site.hp'),
            'joinLevel' => config('site.joinLevel'),
            'leaveDay' => config('site.leaveDay'),
            'banId' => config('site.banId'),
            'stipulation' => config('site.stipulation'),
            'privacy' => config('site.privacy'),
            'passwordPolicyUpper' => config('site.passwordPolicyUpper'),
            'passwordPolicyNumber' => config('site.passwordPolicyNumber'),
            'passwordPolicySpecial' => config('site.passwordPolicySpecial'),
            'passwordPolicyDigits' => config('site.passwordPolicyDigits'),
            'emailJoinSuperAdmin' => config('site.emailJoinSuperAdmin'),
            'emailJoinUser' => config('site.emailJoinUser'),
        );

        return $this->saveConfigByOne('config.join', $configArr);
    }

    // SNS 설정 가져오기
    public function createConfigSns(): Config
    {
        $configArr = array (
            'kakaoKey' => null,
            'kakaoSecret' => null,
            'kakaoRedirect' => null,
            'naverKey' => null,
            'naverSecret' => null,
            'naverRedirect' => null,
            'facebookKey' => null,
            'facebookSecret' => null,
            'facebookRedirect' => null,
            'googleKey' => null,
            'googleSecret' => null,
            'googleRedirect' => null,
        );

        return $this->saveConfigByOne('config.sns', $configArr);
    }

    // 여분필드 설정 가져오기
    public function createConfigExtra(): Config
    {
        $configArr = [];
        for($i=1; $i<=10; $i++) {
            $configArr = Arr::add($configArr, "subj_$i", null);
            $configArr = Arr::add($configArr, "value_$i", null);
        }

        return $this->saveConfigByOne('config.extra', $configArr);
    }

    // configs 테이블에 해당 row를 추가한다.
    public function saveConfigByOne($name, $configArr): Config
    {
        $config = new Config();
        $config->name = $name;
        $config->vars = json_encode($configArr, JSON_UNESCAPED_UNICODE);
        $config->save();
        return $config;
    }

    // 설정을 수정한다.
    public function updateConfig($data, $name='', $theme=0)
    {
        // DB엔 안들어가는 값은 데이터 배열에서 제외한다.
        $data = array_except($data, ['_token', '_method']);
        if($name) {
            Cache::forget("config.$name");
            return $this->updateConfigByOne($name, $data);
        }

        // 설정이 변경될 때 캐시를 지운다.
        Cache::forget("config.homepage");
        Cache::forget("config.board");
        Cache::forget("config.join");
        Cache::forget("config.sns");
        Cache::forget("config.extra");

        $configData = [
            'title' => $data['title'],
            'openDate' => $data['openDate'],
            'newDel' => $data['newDel'],
            'memoDel' => $data['memoDel'],
            'newRows' => $data['newRows'],
            'pageRows' => $data['pageRows'],
            // 'mobilePageRows' => $data['title'],
            // 'writePages' => $data['writePages'],
            // 'mobilePages' => $data['title'],
            'pointTerm' => $data['pointTerm'],
            'analytics' => $data['analytics'],
            'addMeta' => $data['addMeta'],
            'emailUse' => isset($data['emailUse']) ? $data['emailUse'] : 0,
            'adminEmail' => $data['adminEmail'],
            'adminEmailName' => $data['adminEmailName'],
            'emailCertify' => isset($data['emailCertify']) ? $data['emailCertify'] : 0,
            'formmailIsMember' => isset($data['formmailIsMember']) ? $data['formmailIsMember'] : 0,
        ];
        $this->updateConfigByOne('homepage', $configData);

        $configData = [
            'linkTarget' => $data['linkTarget'],
            'imageExtension' => $data['imageExtension'],
            'flashExtension' => $data['flashExtension'],
            'movieExtension' => $data['movieExtension'],
            'filter' => [ 0 => $data['filter'] ],
            'emailWriteSuperAdmin' => isset($data['emailWriteSuperAdmin']) ? $data['emailWriteSuperAdmin'] : 0,
            'emailWriteGroupAdmin' => isset($data['emailWriteGroupAdmin']) ? $data['emailWriteGroupAdmin'] : 0,
            'emailWriteBoardAdmin' => isset($data['emailWriteBoardAdmin']) ? $data['emailWriteBoardAdmin'] : 0,
            'emailWriter' => isset($data['emailWriter']) ? $data['emailWriter'] : 0,
            'emailAllCommenter' => isset($data['emailAllCommenter']) ? $data['emailAllCommenter'] : 0,
        ];
        $this->updateConfigByOne('board', $configData);

        $configData = [
            'name' => $data['name'],
            'tel' => $data['tel'],
            'hp' => $data['hp'],
            'joinLevel' => $data['joinLevel'],
            'leaveDay' => $data['leaveDay'],
            'banId' => [ 0 => $data['banId'] ],
            'stipulation' => $data['stipulation'],
            'privacy' => $data['privacy'],
            'passwordPolicyDigits' => $data['passwordPolicyDigits'],
            'passwordPolicySpecial' => isset($data['passwordPolicySpecial']) ? $data['passwordPolicySpecial'] : 0,
            'passwordPolicyUpper' => isset($data['passwordPolicyUpper']) ? $data['passwordPolicyUpper'] : 0,
            'passwordPolicyNumber' => isset($data['passwordPolicyNumber']) ? $data['passwordPolicyNumber'] : 0,
            'emailJoinSuperAdmin' => isset($data['emailJoinSuperAdmin']) ? $data['emailJoinSuperAdmin'] : 0,
            'emailJoinUser' => isset($data['emailJoinUser']) ? $data['emailJoinUser'] : 0,
        ];
        $this->updateConfigByOne('join', $configData);

        $configData = [
            'naverKey' => isset($data['naverKey']) ? $data['naverKey'] : null,
            'naverSecret' => isset($data['naverSecret']) ? $data['naverSecret'] : null,
            'naverRedirect' => isset($data['naverRedirect']) ? $data['naverRedirect'] : null,
            'kakaoKey' => isset($data['kakaoKey']) ? $data['kakaoKey'] : null,
            'kakaoSecret' => isset($data['kakaoSecret']) ? $data['kakaoSecret'] : null,
            'kakaoRedirect' => isset($data['kakaoRedirect']) ? $data['kakaoRedirect'] : null,
            'facebookKey' => isset($data['facebookKey']) ? $data['facebookKey'] : null,
            'facebookSecret' => isset($data['facebookSecret']) ? $data['facebookSecret'] : null,
            'facebookRedirect' => isset($data['facebookRedirect']) ? $data['facebookRedirect'] : null,
            'googleKey' => isset($data['googleKey']) ? $data['googleKey'] : null,
            'googleSecret' => isset($data['googleSecret']) ? $data['googleSecret'] : null,
            'googleRedirect' => isset($data['googleRedirect']) ? $data['googleRedirect'] : null,
        ];
        $this->updateConfigByOne('sns', $configData);

        $configData = [];
        for($i=1; $i<=10; $i++) {
            $configData = array_add($configData, "subj_$i", isset($data["subj_$i"]) ? $data["subj_$i"] : null);
            $configData = array_add($configData, "value_$i", isset($data["value_$i"]) ? $data["value_$i"] : null);
        }
        return $this->updateConfigByOne('extra', $configData);
    }

    public function updateConfigByOne($name, $data)
    {
        $config = Config::where('name', 'config.'. $name)->first();

        // json 형식으로 되어 있는 설정값을 배열로 바꾼다.
        $originalData = json_decode($config->vars, true);

        // 업데이트할 설정값을 원래 설정 값에 덮어 씌운다.
        foreach($data as $key => $value) {
            $originalData[$key] = $data[$key];
        }

        // 다시 json 형식으로 바꿔서 config 테이블에 저장한다.
        $config->vars = json_encode($originalData, JSON_UNESCAPED_UNICODE);

        return $config->save();
    }
}
