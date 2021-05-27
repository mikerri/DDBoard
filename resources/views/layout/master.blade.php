<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

    <meta property="og:title" content="심플로우(SYMFLOW)">
    <meta property="og:site_name" content="심플로우(SYMFLOW)에 참여하세요.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="www.symflow.com">
    <meta property="og:image" content="//www.symflow.com/img/symflow_logo_20201023.jpg">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="210">
    <meta property="og:description" content="심플로우, 소통이 필요한 모든곳에~,GS인증 1등급,웨비나,화상,실시간응답,이벤트,양방향소통,쌍방향소통">

    <meta name="description" content="심플로우, 소통이 필요한 모든곳에~,GS인증 1등급,웨비나,화상,실시간응답,이벤트,양방향소통,쌍방향소통">
    <meta name="author" content="아이티앤베이직,IT&BASIC">
    <meta name="keywords" content="심플로우,SYMFLOW,symflow,웨비나,webinar,GS인증1등급,화상,실시간응답,양방향웨비나,쌍방향웨비나,양방향소통,쌍뱡항소통,쌍방향온라인교육,세미나,프리젠테이션,업플로우,다운플로우,ZOOM,줌,웹엑스,WEBEX,이벤트,EVENT,event,행사,비대면,컨퍼런스,학회,미팅,온라인수업,양방향수업,쌍방향수업,이벤트진행,이벤트행사,컨퍼런스행사,비대면행사,비대면,온라인세미나,양방향세미나,쌍방향세미나,학회발표,사내행사,온라인행사,양방향행사,쌍방향행사">
    <meta name="google-site-verification" content="JPZ_EzhI49GAvNc_27pd3Z8mkCRNL0Vyxk_QyqKpyog">
    <meta name="naver-site-verification" content="f20217b80d8523ef453e15983d76ec44a70e7ca7">

    <title>심플로우 @yield('title','SYMFLOW:웨비나:실시간 온라인교육,세미나,행사,이벤트')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="{{ asset('/js/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/js/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/user/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/user/layout.css') }}">
    @yield('include_css')

    <!--[if lt IE 9]-->
    <script src="{{ asset('/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/js/respond.min.js') }}"></script>
    <!--[endif]-->

    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/js/go-top.js') }}"></script>
    @yield('include_script')
</head>
<body>
    @yield('banner')

    {{View::make('user.include.header')}}

    @yield('content')

    {{View::make('user.include.footer')}}
</body>
</html>
