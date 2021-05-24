@extends('layout.master')

@section('title')
    {{ "SYMFLOW 심플로우 > 소개 > 심플로우" }}
@endsection

@section('include_css')
    <link rel="stylesheet" href="{{ asset('/css/user/sub.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/user/contents.css') }}">
@endsection

@section('content')
    {{View::make('user.include.location')->with(['gnb'=>$gnb, 'lnb'=>$lnb])}}

    <article class="content">
        <section class="headline wrap">
            <div class="mb70">
                <h1>온라인 청중응답 시스템 - 심플로우</h1>
                <p>인터넷 주소 접속만으로 간편하게 실시간 소통하는 종합 솔루션</p>
            </div>
        </section>

        <section class="symflow01">
            <div class="wrap clearfix">
                <div class="left">
                    <h3>IT&BASIC의 심플로우(SYMFLOW)<span>심포니(Symphony)’의 ‘심(Sym)’ 과 ‘플로우(Flow)’의 합성어</span></h3>
                    <div>
                        <p>
                            국내 최초로 교육시장의 Needs를 반영하여 개발된 실시간 소통 솔루션입니다.<br>
                            1대 다수의 소통을 원활하게 이루는 것을 목표로 방송, 해외강연 등 온라인에서 활용할 수 있게 꾸준히 개선되었습니다.<br>
                            특히, 2020년 웨비나 기능을 추가한 신개념 심플로우를 선보였습니다.
                        </p>
                        <div class="mt30">
                            <a href="https://edu.symflow.com/" target="_blank">데모버전 보기</a>
                            <a href="/account">계정 사용 신청하기</a>
                        </div>
                    </div>
                </div>
                <div class="right"><img src="{{ asset('/img/sub/imgSymflow01.png') }}" alt="" style="display: block"></div>
            </div>
        </section>

        <section class="symflow01 headline wrap mt100">
            <div class="line mb30">
                <h2>50,000명 이상 동시 접속 성공,  <span>신SW상품 대상, </span>GS인증 1등급</h2>
            </div>
            <div class="text_box text_box01">
                <p class="text-left">
                    심플로우는 불특정 다수의 접속을 상정하여 별도 프로그램이나 앱 설치 없이 사용할 수 있으며, 2021년 현재 약 50,000회의 이벤트를 진행하였고, 11,246,000건의 PV를 자랑합니다.
                    실제 사용 시 <strong>50,000명 이상 동시 접속</strong>도 문제없이 수용하였으며(2020년 SK이천포럼 진행 성공) 관련 <strong>분산 처리 특허기술(제10-1738667호)을 보유</strong>하고 있습니다.
                    또한, 제품에 대해 <strong>과학기술정보통신부 장관상을 수상</strong>과 <strong>GS 1등급 인증</strong>을 받는 등 기술적 우수성을 인정받았습니다.
                </p>
                <div class="mt20">
                    <a href="https://sw.tta.or.kr/product/prod_gsce_view.jsp?num=5941&pa=cb09239aeba1973694e1a19ad149d59f" target="_blank">GS인증 1등급</a>
                    <a href="https://itnbasic.com/?uid=70&mod=document&page_id=43" target="_blank">신SW상품 대상</a>
                </div>
            </div>

            <div class="n4 clearfix skill4 mt100">
                <dl>
                    <dt><img src="{{ asset('/img/sub/iconSymflow01_01.png') }}" alt=""></dt>
                    <dd>동시접속<strong>50,000명</strong></dd>
                </dl>
                <dl>
                    <dt><img src="/img/sub/iconSymflow01_02.png" alt=""></dt>
                    <dd>분산 처리<strong>특허기술</strong></dd>
                </dl>
                <dl>
                    <dt><img src="/img/sub/iconSymflow01_03.png" alt=""></dt>
                    <dd>신SW상품<strong>대상</strong></dd>
                </dl>
                <dl>
                    <dt><img src="/img/sub/iconSymflow01_04.png" alt=""></dt>
                    <dd>인증<strong>GS 1등급</strong></dd>
                </dl>
            </div>
        </section>

        <section class="symflow bg_half mt70 pb50">
            <div class="wrap">
                <div class="n6 clearfix">
                    <dl>
                        <dt><img src="/img/sub/imgSymflow02_01.jpg" alt=""></dt>
                        <dd>과기부 장관상</dd>
                    </dl>
                    <dl>
                        <dt><img src="/img/sub/imgSymflow02_02.jpg" alt=""></dt>
                        <dd>GS 1등급 인증</dd>
                    </dl>
                    <dl>
                        <dt><img src="/img/sub/imgSymflow02_03.jpg" alt=""></dt>
                        <dd>실시간 컨텐츠 제공 특허증</dd>
                    </dl>
                    <dl>
                        <dt><img src="/img/sub/imgSymflow02_04.jpg" alt=""></dt>
                        <dd>데이터 분산처리 특허증</dd>
                    </dl>
                    <dl>
                        <dt><img src="/img/sub/imgSymflow02_05.jpg" alt=""></dt>
                        <dd>기술역량 우수기업 인증</dd>
                    </dl>

                    <dl>
                        <dt><img src="/img/sub/imgSymflow02_06.jpg" alt=""></dt>
                        <dd>클라우드 서비스 인증</dd>
                    </dl>
                </div>
            </div>
        </section>

        <section class="headline headline01 wrap mt100 pt95 mt100">
            <div class="skill mb85">
                <h2 class="mb30">심플로우의 <span>4가지 주요기능</span></h2>
                <ul class="container">
                    <li><div>자유로운<br> 화면구성이 가능한<br> <strong>웨비나</strong></div></li>
                    <li><div>편리하고<br> 효과적인 강연 진행<br> <strong>발표기능</strong></div></li>
                    <li><div>사전 설문,<br> 퀴즈/설문을 실시간 출제<br> <strong>다운플로우</strong></div></li>
                    <li><div>청중들이<br> 질문과 추천하는<br> <strong>업플로우</strong></div></li>
                </ul>
            </div>
        </section>

        <section class="headline clearfix mt100 pt95 gray">
            <div class="wrap">
                <h2 class="title mb30">‘심포니(Symphony)’의 ‘심(Sym)’ 과 ‘플로우(Flow)’의 합성어로<br><span>‘함께 공감하여 흐름을 만들어 가는 것’</span>을 의미합니다.</h2>
                <div class="webinar01 n3 symflow clearfix mb85">
                    <dl>
                        <dt>별도의 장비나 APP 설치 無</dt>
                        <dd>
                            <ol class="clearfix">
                                <li>기술적으로는 ‘Html5’로 구성된 웹앱 형태</li>
                                <li>별도의 장비나 APP을 설치할 필요 없음</li>
                                <li>전용 인터넷 주소에 접속하여 100% 활용 가능</li>
                            </ol>
                        </dd>
                    </dl>
                    <dl>
                        <dt>발표자료 사전등록, 관리</dt>
                        <dd>
                            <ol class="clearfix">
                                <li>발표자는 발표 시나리오에 맞는 설문내용을 미리 준비</li>
                                <li>발표 자료를 관리 가능</li>
                            </ol>
                        </dd>
                    </dl>
                    <dl>
                        <dt>누구나 저비용으로 편리하게 사용</dt>
                        <dd>
                            <ol class="clearfix">
                                <li>저렴한 비용으로 간편하게 사용 가능</li>
                                <li>일반 청중들은 인터넷에 접속할 수 있는 기기만 있다면 누구나 사용 가능</li>
                            </ol>
                        </dd>
                    </dl>
                </div>
            </div>
        </section>
    </article>
@endsection
