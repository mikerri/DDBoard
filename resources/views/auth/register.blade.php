@extends('layout.master')

@section('title')
    {{ "SYMFLOW 심플로우 > 회원관리 > 회원가입" }}
@endsection

@section('include_css')
    <link rel="stylesheet" href="{{ asset('/css/user/sub.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/user/contents.css') }}">
@endsection

@section('content')
    {{View::make('user.include.location')->with(['gnb'=>$gnb, 'lnb'=>$lnb])}}

    <div class="panel-body row">
        <form class="contents col-md-8 col-md-offset-2" id="userForm" name="userForm" role="form" method="POST" action="{{ route('register') }}" onsubmit="return onsubmit;">
            {{ csrf_field() }}
            <input type="hidden" name="agreePrivacy" value="{{ isset($agreePrivacy) ? $agreePrivacy : old('agreePrivacy') }}">
            <input type="hidden" name="agreeStipulation" value="{{ isset($agreeStipulation) ? $agreeStipulation : old('agreeStipulation') }}">

            <div class="col-md-12 mb15">
                <div class="help bg-info">
                    회원가입약관 및 개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.
                </div>
            </div>
            <section id="fregister_term">
                <h2>회원가입약관</h2>
                <div class="form-group mg5">
                    <textarea readonly>{{ cache('config.join')->stipulation }}</textarea>
                    <fieldset class="fregister_agree">
                        <label for="agreeStipulation">회원가입약관의 내용에 동의합니다.</label>
                        <input type="checkbox" id="agreeStipulation" name="agreeStipulation" value="1">
                    </fieldset>
                </div>
            </section>
            <section id="fregister_private">
                <h2>개인정보처리방침안내</h2>
                <div class="form-group mg5">
                    <textarea readonly>{{ cache('config.join')->privacy }}</textarea>
                    <fieldset class="fregister_agree">
                        <label for="agreePrivacy">개인정보처리방침안내의 내용에 동의합니다.</label>
                        <input type="checkbox" id="agreePrivacy" name="agreePrivacy" value="1">
                    </fieldset>
                </div>
            </section>

            <div class="form-group @if($errors->has('email'))has-error @endif">
                <label for="email">이메일</label>
                <input id="email" type="email" name="email" class="form-control" value="{{ isset($email) ? $email : old('email') }}" placeholder="이메일 주소를 입력하세요" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('password'))has-error @endif">
                <label for="password">비밀번호</label>
                <input id="password" type="password" name="password" class="form-control" placeholder="비밀번호를 입력하세요" required>

                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
            </div>

            <div class="form-group @if($errors->has('password_confirmation'))has-error @endif">
                <label for="password">비밀번호 확인</label>
                <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="비밀번호를 한번 더 입력하세요" required>

                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('name'))has-error @endif">
                <label for="name">이름</label>
                <input id="name" type="text" name="name" class="form-control" value="{{ isset($name) ? $name : old('name') }}" placeholder="이름을 입력하세요" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
                <p class="help-block">
                    {{-- 공백없이 한글, 영문, 숫자만 입력 가능<br> --}}
                    {{-- (한글2자, 영문4자 이상, Emoji 포함 가능)<br> --}}
                    (한글2자, 영문4자 이상)<br>
                </p>
            </div>

            <div class="form-group @if($errors->has('hp'))has-error @endif">
                <label for="hp">연락처</label>
                <input id="hp" type="text" name="hp" class="form-control" value="{{ isset($hp) ? $hp : old('hp') }}" placeholder="연락처를 입력하세요">

                @if ($errors->has('hp'))
                <span class="help-block">
                    <strong>{{ $errors->first('hp') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-block btn-sir submitBtn">회원가입</button>
            </div>
        </form>
    </div>
@endsection
