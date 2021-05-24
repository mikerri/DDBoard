@extends('layout.master')

@section('title')
    {{ "SYMFLOW 심플로우 > 주요기능 > 심플로우" }}
@endsection

@section('include_css')
    <link rel="stylesheet" href="{{ asset('/css/user/sub.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/user/contents.css') }}">
@endsection

@section('content')
    {{View::make('user.include.location')->with(['gnb'=>$gnb, 'lnb'=>$lnb, 'tnb'=>$tnb])}}

    <article class="content">
        <section class="headline wrap">
            <div class="mb70">
                <h1>
                    @if($tnb == 1)
                        효율적이며 자유로운 화면 재구성 (Webinar)
                    @elseif($tnb == 2)
                        편하고 효과적인 강의 및 발표 진행 (Presentation)
                    @elseif($tnb == 3)
                        발표자가 청중에게 (Downflow)
                    @elseif($tnb == 4)
                        청중이 발표자에게 (Upflow)
                    @endif
                </h1>
                <p>
                    @if($tnb == 1)
                        라이브 스트리밍 화면에 질의응답, 퀴즈, 설문, 발표자료 등을 포함한 화면으로 재구성
                    @elseif($tnb == 2)
                        실시간으로 스트리밍되는 화면(동영상) 동기화로 청중들과 편리하고 효과적인 강연을 진행
                    @elseif($tnb == 3)
                        발표전에 사전 설문, 발표 중에 주관식 또는 객관식의 퀴즈와 설문을 실시간으로 출제
                    @elseif($tnb == 4)
                        청중들의 질문을 한 곳에서 볼 수 있는 Upflow로 추천 기능과 답변 기능 등을 제공
                    @endif
                </p>
            </div>
            <div class="tabMenu mb45">
                {{View::make('user.include.tab')->with(['tnb'=>$tnb, 'tabMenus'=>config('menu')[$gnb-1]['sub'][$lnb-1]['tab']])}}
            </div>

            <div class="img">
                <img src="/img/sub/imgWebinar_02.jpg" alt="">
            </div>
            <ul class="mobiePro green">
                <li><img src="/img/sub/imgWebinar01_01.jpg" alt="zoom"></li>
                <li><img src="/img/sub/imgWebinar01_02.jpg" alt="webex"></li>
                <li><img src="/img/sub/imgWebinar01_03.jpg" alt="Google Meet"></li>
                <li><img src="/img/sub/imgWebinar01_04.jpg" alt="YouTube"></li>
            </ul>

            @if($tnb == 2)
                <div class="text_box">
                    <h3 class="mb20">강의를 위한 모드입니다.</h3>
                    <ol>
                        <li>최대한 편하고 효과적으로 강의를 진행할수 있습니다. 강사 모드일때 메뉴버튼은 사라지고 접속주소로 대체됩니다. </li>
                        <li>발표 버튼에서 슬라이드 포커싱과 수정이 가능하며, Downflow와 Upflow에서 설문/퀴즈, 질문들을 발표자가 원하는 곳에 포커싱 할 수 있습니다.</li>
                        <li>청중들도 강사 모드로 접속을 하면 발표자가 포커싱하는 곳으로 청중들의 화면도 이동합니다.</li>
                    </ol>
                </div>
            @elseif($tnb == 3)
                <div class="text_box">
                    <h3 class="mb20">발표에 대한 이해도와 집중/참여율을 위한 모드입니다.</h3>
                    <ol>
                        <li>'청중들은 어떤 생각을 하는 걸까?', '강의를 잘 이해하는 걸까?' 청중들에게 궁금한 내용들을 다운플로우 기능을 사용하여 확인할 수 있습니다.</li>
                        <li>다운플로우를 사용하면 청중들의 생각을 빠르고 쉽게 그리고 간편하고 정확하게 알 수 있습니다.</li>
                    </ol>
                </div>
            @elseif($tnb == 4)
                <div class="text_box">
                    <h3 class="mb20">청중들이 강의 도중 언제나 질문을 할 수 있는 모드입니다.</h3>
                    <ol>
                        <li>청중들은 업플로우를 이용해서 발표자에게 궁금한 여러 가지 질문들을 할 수 있습니다.</li>
                        <li>청중들은 서로의 질문에 추천을 누를 수 있으며, 추천수에 따라 질문의 순위를 정할 수 있습니다.</li>
                        <li>청중들의 모든 질문을 한곳에서 볼 수 있으며, 강연 도중 직접 답변 또는 추후에 따로 답을 올릴 수 있습니다.</li>
                    </ol>
                </div>
            @endif
        </section>

    @if($tnb == 1)
        <!-- 웨비나 -->
        <section class="headline headline01 wrap clearfix mt100 pt95">
            <div class="line mb30">
                <h2>01. 고객사에 알맞는 <span>발표자료형</span>은? </h2>
                <p>강의를 위한 모드로 발표자료와 발표자 등으로 구성된 라이브 스트리밍 화면</p>
            </div>
            <div class="webinar01 n3 clearfix">
                <dl>
                    <dt><div><img src="/img/sub/imgWebinar02_01.png" alt=""></div>강연영상+강연정보, 발표자료</dt>
                    <dd>강연제목 및 로고, 발표자 성명/직위 등<br>내용 추가 가능</dd>
                </dl>
                <dl>
                    <dt><div><img src="/img/sub/imgWebinar02_02.png" alt=""></div>강연영상, 발표자료</dt>
                    <dd>발표자의 영상을 상하좌우로<br>위치 변경 가능</dd>
                </dl>
                <dl>
                    <dt><div><img src="/img/sub/imgWebinar02_03.png" alt=""></div>발표자료</dt>
                    <dd>발표자 영상 없이 목소리와 <br>발표자료만으로 강연을 진행</dd>
                </dl>
            </div>
        </section>

        <section class="headline headline01 wrap mt100 pt95">
            <div class="line mb30">
                <h2>02. 집중도를 높이려면 <span>영상형</span> </h2>
                <p>디바이스 화면에서 발표자의 발표 영상에 집중하기 적합한 화면</p>
            </div>
            <div class="webinar01 clearfix n2">
                <dl>
                    <dt><div><img src="/img/sub/imgWebinar03_01.png" alt=""></div>강연영상, 강연정보</dt>
                    <dd>강연영상과 강연에 관한 정보를 상시 노출 </dd>
                </dl>
                <dl>
                    <dt><div><img src="/img/sub/imgWebinar03_02.png" alt=""></div>강연영상, 퀴즈, 질의응답</dt>
                    <dd>강연진행중 영상에서 즉석 퀴즈와 질의 응답 가능</dd>
                </dl>
            </div>
        </section>

        <section class="headline headline01 wrap mt100 pb140 pt95">
            <div class="line mb30">
                <h2>03. 참여율을 높이려면 <span>퀴즈와 질의응답</span>? </h2>
                <p>강연 중 즉석 퀴즈와 참여자가 올린 질의에 응답하여 참여도를 유도</p>
            </div>
            <div class="webinar01 n3 clearfix">
                <dl>
                    <dt><div><img src="/img/sub/imgWebinar04_01.png" alt=""></div></dt>
                    <dd class="blind">강연에 관련된 즉석 퀴즈 노출</dd>
                </dl>
                <dl>
                    <dt><div><img src="/img/sub/imgWebinar04_02.png" alt=""></div></dt>
                    <dd class="blind">퀴즈를 설명하는 영상 노출</dd>
                </dl>
                <dl>
                    <dt><div><img src="/img/sub/imgWebinar04_03.png" alt=""></div></dt>
                    <dd class="blind">퀴즈 노출</dd>
                </dl>
            </div>
        </section>

        <section id="headline" class="headline headline01 gray gray01 pb100">
            <h1>행사현장</h1>
            <div class="wrap pt95 mb30" style="text-align:left">
                <h1>인적자원개발 컨퍼런스 <br>모든 세션에서 심플로우 웨비나가 사용되었습니다.</h1>
                <p>9월 10일과 11일, 양일에 걸친 온라인(비대면) 행사로 HRD 분야의 명사들을 발표자로 초빙하여 <br>정부의 직업능력개발정책, HRD 최신 동향 및 이슈 등 인적자원개발과 관련한 다양한 사례를 가지고 국민과 소통하고 공감대를 이룬 대규모의 행사였습니다.</p>
            </div>
            <div class="wrap">
                <div class="visual_list01">
                    <div><img src="/img/sub/imgWebinar05_01.jpg" alt="인적자원개발 컨퍼런스"></div>
                    <div><img src="/img/sub/imgWebinar05_02.jpg" alt="인적자원개발 컨퍼런스"></div>
                    <div><img src="/img/sub/imgWebinar05_03.jpg" alt="인적자원개발 컨퍼런스"></div>
                    <div><img src="/img/sub/imgWebinar05_04.jpg" alt="인적자원개발 컨퍼런스"></div>
                </div>
                <p class="mb70">인적자원개발 컴퍼런스 행사에서 <u style="color:#092c51">IT&BASIC 심플로우 웨비나</u> 사용은 물론 기획, 디렉팅, 영상 촬영/전환/송출 등 전반적인 작업에 모두 참여하였습니다. </p>
                <script>
                    $('.visual_list01').slick({
                        dots: false,
                        arrows: true,
                        autoplay: true,
                        speed: 1200,
                        fade: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    });
                </script>

                <div class="webinar01 n4 clearfix">
                    <dl>
                        <dt><img src="/img/sub/imgWebinar06_01.jpg" alt=""></dt>
                        <dd>발표자료형</dd>
                    </dl>
                    <dl>
                        <dt><img src="/img/sub/imgWebinar06_02.jpg" alt=""></dt>
                        <dd>영상형, 질의응답</dd>
                    </dl>
                    <dl>
                        <dt><img src="/img/sub/imgWebinar06_03.jpg" alt=""></dt>
                        <dd>영상형</dd>
                    </dl>
                    <dl>
                        <dt><img src="/img/sub/imgWebinar06_04.jpg" alt=""></dt>
                        <dd>질의응답</dd>
                    </dl>
                </div>
            </div>
        </section>
    @elseif($tnb == 2)
        <!-- 발표기능 -->
        <section class="headline headline01 wrap mt100 pt95">
            <div class="line mb30">
                <h2>01. 발표를 위한 모드 <span>Presentation</span></h2>
                <p>강사 모드 화면, 발표 화면, 참여 화면 등 발표에 최적화된 다양한 화면을 제공</p>
            </div>

            <div class="webinar01 n3 clearfix">
                <dl>
                    <dt><div><img src="/img/sub/imgPresentation02_01.jpg" alt=""></div>P모드 접속시</dt>
                    <dd>P모드 처음 접속시 행사 타이틀 이미지와 접속 QR코드, <br>청중들이 패널토의에 참여할 수 있는 심플로우 접속 URL 노출</dd>
                </dl>

                <dl>
                    <dt><div><img src="/img/sub/imgPresentation02_02.jpg" alt=""></div>P모드 질문 송출</dt>
                    <dd>패널들의 질문 중 하나를 선택하여 행사에 송출한 후 <br>발표자가 질문에 대한 답변을 진행</dd>
                </dl>

                <dl>
                    <dt><div><img src="/img/sub/imgPresentation02_03.jpg" alt=""></div>P모드 설문/퀴즈 송출</dt>
                    <dd>설문 또는 퀴즈를 행사장에 송출하며 <br>객관식과 주관식, 시간/응답자 기록 가능</dd>
                </dl>
            </div>
        </section>

        <section class="headline headline01 wrap mt100 pt95">
            <div class="line mb30">
                <h2>02. Presentation <span>주요기능</span></h2>
                <p>편하고 효과적으로 강의를 진행할 수 있도록 자료 등록, 시간기록, 리모콘 기능 등을 제공</p>
            </div>

            <div class="webinar01 n4 clearfix">
                <div>
                    <div><img src="/img/sub/imgPresentation03_01.jpg" alt=""></div>
                    <p>① 동영상 등록</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[등록한 동영상 송출]</p>
                    <div><img src="/img/sub/imgPresentation03_05.jpg" alt=""></div>
                </div>

                <div>
                    <div><img src="/img/sub/imgPresentation03_02.jpg" alt=""></div>
                    <p>② 발표자료 등록</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[등록한 발표자료 송출]</p>
                    <div><img src="/img/sub/imgPresentation03_06.jpg" alt=""></div>
                </div>

                <div>
                    <div><img src="/img/sub/imgPresentation03_03.jpg" alt=""></div>
                    <p>③ 발표페이지별 시간 확인</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[시간기록은 페이지 이동시 자동 종료]</p>
                    <div><img src="/img/sub/imgPresentation03_07.jpg" alt=""></div>
                </div>

                <div>
                    <div><img src="/img/sub/imgPresentation03_04.jpg" alt=""></div>
                    <p>④ 발표리모콘으로 P모드 송출 순서 변경</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[P모드에서 송출자료 변경 모습 확인]</p>
                    <div><img src="/img/sub/imgPresentation03_08.jpg" alt=""></div>
                </div>
            </div>
        </section>

        <section class="headline headline01 clearfix wrap mt100 pt95 pb140">
            <div class="line mb30">
                <h2>03. Presentation <span>관련 동영상</span></h2>
                <p>Presentation을 사용하여 발표를 효율적으로 할 수 있는 영상</p>
            </div>

            <iframe src="https://player.vimeo.com/video/166946071?title=0&byline=0&portrait=0" width="1300" height="300" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Presentation Mode" allowfullscreen></iframe>
        </section>

        <section id="headline" class="headline headline01 gray gray01 pb100">
            <h1>ONLINE SYMFLOW</h1>
            <div class="wrap pt95 mb30" style="text-align:left">
                <h1>심플로우 온라인 시스템 도입 사례</h1>
                <p>심플로우의 온라인강의는 인터넷이 되는곳 어디서든 접속이 가능 합니다.<br>가정집, 카페, 독서실, 대중교통 등 인터넷만 된다면, 앱설치 없이 부여된 주소만 입력하면 접속할 수 있습니다.</p>
            </div>
            <div class="wrap">
                <div class="webinar01 online n3 clearfix">
                    <dl>
                        <dt><div><img src="/img/sub/imgPresentation05_01.jpg" alt=""></div><span>YOUTUBE</span> 온라인 강의</dt>
                        <dd>온라인 강의가 도입된 심플로우 사용사례. <br>유튜브 온라인 강의 시청 중에 다양한 질문을 올릴 수 있고, 교수와 학생들이 실시간으로 소통 가능.</dd>
                    </dl>

                    <dl>
                        <dt><div><img src="/img/sub/imgPresentation05_02.jpg" alt=""></div><span>KBS 올댓뮤직</span> 온라인 소규모 대담.</dt>
                        <dd>온라인 소규모대담에 사용된 사례. <br>손을 들지않고 익명 또는 기명으로 질문.</dd>
                    </dl>

                    <dl>
                        <dt><div><img src="/img/sub/imgPresentation05_03.jpg" alt=""></div><span>MBC 100분토론</span> 온라인 시민토론</dt>
                        <dd>온라인 강의와 비슷한 형태로 온라인 시민토론에 사용된 사례. <br>TV시청자들이 토론단에게 질문할 수 있도록 도입.</dd>
                    </dl>
                </div>
            </div>
        </section>
    @elseif($tnb == 3)
        <!-- 다운플로우 -->
        <section class="headline headline01 wrap mt100 pt95">
            <div class="line mb30">
                <h2>01. 발표에 대한 이해와 참여를 위한 모드 <span>Downflow</span></h2>
                <p>발표전에 사전 설문조사, 발표 중에 (돌발)퀴즈와 설문 등을 출제</p>
            </div>
            <div class="webinar01 n3 clearfix">
                <dl>
                    <dt><div><img src="/img/sub/imgDownflow02_01.jpg" alt=""></div>객관식 퀴즈/설문</dt>
                    <dd>객관식은 답변항목을 가로형과 세로형으로 선택 가능 <br>복수응답, 기타응답 등의 기능을 제공 </dd>
                </dl>
                <dl>
                    <dt><div><img src="/img/sub/imgDownflow02_02.jpg" alt=""></div>주관식 퀴즈/설문</dt>
                    <dd>객관식과 동일하게 문제 제목에 이미지 등록이 가능 <br>여러 개의 단어를 정답으로 등록 가능</dd>
                </dl>
                <dl>
                    <dt><div><img src="/img/sub/imgDownflow02_03.jpg" alt=""></div>메시지</dt>
                    <dd>파란색 박스가 표시되지 않으며, <br>응답도 할 수 없는 단순한 메시지 박스를 출제</dd>
                </dl>
            </div>
        </section>

        <section class="headline headline01 wrap mt100 pt95">
            <div class="line mb30">
                <h2>02. Downflow <span>주요기능</span></h2>
                <p>퀴즈와 설문을 진행할 수 있도록 출제, 잔여시간 알림, 응답자 수 등을 제공</p>
            </div>
            <div class="webinar01 n4 clearfix">
                <div>
                    <div><img src="/img/sub/imgDownflow03_01.jpg" alt=""></div>
                    <p>① 객관식 문제 등록</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[객관식 문제 출제]</p>
                    <div><img src="/img/sub/imgDownflow03_05.jpg" alt=""></div>
                </div>
                <div>
                    <div><img src="/img/sub/imgDownflow03_02.jpg" alt=""></div>
                    <p>② 주관식 문제 등록</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[주관식 문제 출제]</p>
                    <div><img src="/img/sub/imgDownflow03_06.jpg" alt=""></div>
                </div>
                <div>
                    <div><img src="/img/sub/imgDownflow03_03.jpg" alt=""></div>
                    <p>③ 시간 제한 설정</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[잔여시간 알림]</p>
                    <div><img src="/img/sub/imgDownflow03_07.jpg" alt=""></div>
                </div>
                <div>
                    <div><img src="/img/sub/imgDownflow03_04.jpg" alt=""></div>
                    <p>④ 퀴즈, 설문 응답자 수</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[
                        응답자 수 자동 카운트]</p>
                    <div><img src="/img/sub/imgDownflow03_08.jpg" alt=""></div>
                </div>
            </div>
        </section>

        <section class="headline headline01 clearfix wrap mt100 pt95 pb140">
            <div class="line mb30">
                <h2>03. Downflow <span>관련 동영상</span></h2>
                <p>Downflow을 사용하여 발표 진행을 효율적으로 할 수 있는 영상</p>
            </div>
            <iframe src="https://player.vimeo.com/video/167233083?title=0&byline=0&portrait=0" width="1300" height="300" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Presentation Mode" allowfullscreen></iframe>
        </section>

        <section id="headline" class="headline headline01 gray gray01 pb100">
            <h1>ONLINE SYMFLOW</h1>
            <div class="wrap pt95 mb30" style="text-align:left">
                <h1>심플로우 온라인 시스템 도입 사례</h1>
                <p>심플로우의 온라인강의는 인터넷이 되는곳 어디서든 접속이 가능 합니다.<br>가정집, 카페, 독서실, 대중교통 등 인터넷만 된다면, 앱설치 없이 부여된 주소만 입력하면 접속할 수 있습니다.</p>
            </div>
            <div class="wrap">
                <div class="webinar01 online n3 clearfix">
                    <dl>
                        <dt><div><img src="/img/sub/imgPresentation05_01.jpg" alt=""></div><span>YOUTUBE</span> 온라인 강의</dt>
                        <dd>온라인 강의가 도입된 심플로우 사용사례. <br>유튜브 온라인 강의 시청 중에 다양한 질문을 올릴 수 있고, 교수와 학생들이 실시간으로 소통 가능.</dd>
                    </dl>

                    <dl>
                        <dt><div><img src="/img/sub/imgPresentation05_02.jpg" alt=""></div><span>KBS 올댓뮤직</span> 온라인 소규모 대담.</dt>
                        <dd>온라인 소규모대담에 사용된 사례. <br>손을 들지않고 익명 또는 기명으로 질문.</dd>
                    </dl>

                    <dl>
                        <dt><div><img src="/img/sub/imgPresentation05_03.jpg" alt=""></div><span>MBC 100분토론</span> 온라인 시민토론</dt>
                        <dd>온라인 강의와 비슷한 형태로 온라인 시민토론에 사용된 사례. <br>TV시청자들이 토론단에게 질문할 수 있도록 도입.</dd>
                    </dl>
                </div>
            </div>
        </section>
    @elseif($tnb == 4)
        <!-- 업플로우 -->
        <section class="headline headline01 wrap mt100 pt95">
            <div class="line mb30">
                <h2>01. 발표에 대한 이해와 참여를 위한 모드 <span>Downflow</span></h2>
                <p>발표전에 사전 설문조사, 발표 중에 (돌발)퀴즈와 설문 등을 출제</p>
            </div>
            <div class="webinar01 n3 clearfix">
                <dl>
                    <dt><div><img src="/img/sub/imgDownflow02_01.jpg" alt=""></div>객관식 퀴즈/설문</dt>
                    <dd>객관식은 답변항목을 가로형과 세로형으로 선택 가능 <br>복수응답, 기타응답 등의 기능을 제공 </dd>
                </dl>
                <dl>
                    <dt><div><img src="/img/sub/imgDownflow02_02.jpg" alt=""></div>주관식 퀴즈/설문</dt>
                    <dd>객관식과 동일하게 문제 제목에 이미지 등록이 가능 <br>여러 개의 단어를 정답으로 등록 가능</dd>
                </dl>
                <dl>
                    <dt><div><img src="/img/sub/imgDownflow02_03.jpg" alt=""></div>메시지</dt>
                    <dd>파란색 박스가 표시되지 않으며, <br>응답도 할 수 없는 단순한 메시지 박스를 출제</dd>
                </dl>
            </div>
        </section>

        <section class="headline headline01 wrap mt100 pt95">
            <div class="line mb30">
                <h2>02. Downflow <span>주요기능</span></h2>
                <p>퀴즈와 설문을 진행할 수 있도록 출제, 잔여시간 알림, 응답자 수 등을 제공</p>
            </div>
            <div class="webinar01 n4 clearfix">
                <div>
                    <div><img src="/img/sub/imgDownflow03_01.jpg" alt=""></div>
                    <p>① 객관식 문제 등록</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[객관식 문제 출제]</p>
                    <div><img src="/img/sub/imgDownflow03_05.jpg" alt=""></div>
                </div>
                <div>
                    <div><img src="/img/sub/imgDownflow03_02.jpg" alt=""></div>
                    <p>② 주관식 문제 등록</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[주관식 문제 출제]</p>
                    <div><img src="/img/sub/imgDownflow03_06.jpg" alt=""></div>
                </div>
                <div>
                    <div><img src="/img/sub/imgDownflow03_03.jpg" alt=""></div>
                    <p>③ 시간 제한 설정</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[잔여시간 알림]</p>
                    <div><img src="/img/sub/imgDownflow03_07.jpg" alt=""></div>
                </div>
                <div>
                    <div><img src="/img/sub/imgDownflow03_04.jpg" alt=""></div>
                    <p>④ 퀴즈, 설문 응답자 수</p>
                    <div class="after"><div><img src="/img/sub/iconArrow.png" alt=""></div></div>
                    <p>[응답자 수 자동 카운트]</p>
                    <div><img src="/img/sub/imgDownflow03_08.jpg" alt=""></div>
                </div>
            </div>
        </section>

        <section class="headline headline01 clearfix wrap mt100 pt95 pb140">
            <div class="line mb30">
                <h2>03. Downflow <span>관련 동영상</span></h2>
                <p>Downflow을 사용하여 발표 진행을 효율적으로 할 수 있는 영상</p>
            </div>
            <iframe src="https://player.vimeo.com/video/167233083?title=0&byline=0&portrait=0" width="1300" height="300" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Presentation Mode" allowfullscreen></iframe>
        </section>

        <section id="headline" class="headline headline01 gray gray01 pb100">
            <h1>ONLINE SYMFLOW</h1>
            <div class="wrap pt95 mb30" style="text-align:left">
                <h1>심플로우 온라인 시스템 도입 사례</h1>
                <p>심플로우의 온라인강의는 인터넷이 되는곳 어디서든 접속이 가능 합니다.<br>가정집, 카페, 독서실, 대중교통 등 인터넷만 된다면, 앱설치 없이 부여된 주소만 입력하면 접속할 수 있습니다.</p>
            </div>
            <div class="wrap">
                <div class="webinar01 online n3 clearfix">
                    <dl>
                        <dt><div><img src="/img/sub/imgPresentation05_01.jpg" alt=""></div><span>YOUTUBE</span> 온라인 강의</dt>
                        <dd>온라인 강의가 도입된 심플로우 사용사례. <br>유튜브 온라인 강의 시청 중에 다양한 질문을 올릴 수 있고, 교수와 학생들이 실시간으로 소통 가능.</dd>
                    </dl>
                    <dl>
                        <dt><div><img src="/img/sub/imgPresentation05_02.jpg" alt=""></div><span>KBS 올댓뮤직</span> 온라인 소규모 대담.</dt>
                        <dd>온라인 소규모대담에 사용된 사례. <br>손을 들지않고 익명 또는 기명으로 질문.</dd>
                    </dl>
                    <dl>
                        <dt><div><img src="/img/sub/imgPresentation05_03.jpg" alt=""></div><span>MBC 100분토론</span> 온라인 시민토론</dt>
                        <dd>온라인 강의와 비슷한 형태로 온라인 시민토론에 사용된 사례. <br>TV시청자들이 토론단에게 질문할 수 있도록 도입.</dd>
                    </dl>
                </div>
            </div>
        </section>
    @endif
    </article>
@endsection
