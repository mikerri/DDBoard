@extends('layout.master')

@section('title')
    {{ "SYMFLOW 심플로우 > 회원관리 > 로그인" }}
@endsection

@section('include_css')
    <link rel="stylesheet" href="{{ asset('/css/user/sub.css') }}">
@endsection

@section('content')
    {{View::make('user.include.location')->with(['gnb'=>$gnb, 'lnb'=>$lnb])}}

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group mg5 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email"><span class="sr-only">이메일</span></label>
                    <input type="email" class="form-control sr-only-input" id="email" name="email" value="{{ old('email') }}" placeholder="이메일 주소를 입력하세요" required autofocus>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group mg5 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password"><span class="sr-only">비밀번호</span></label>
                    <input type="password" class="form-control sr-only-input" id="password" name="password" placeholder="비밀번호를 입력하세요" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-xs-7">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
                                자동 로그인
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-5">
                        <div class="password_search">
                            <p class="text-right">
                                <a href="">비밀번호 재설정</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-sir">로그인</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
