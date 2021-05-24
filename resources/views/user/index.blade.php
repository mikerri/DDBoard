@extends('layout.master')

@section('include_css')
    <link rel="stylesheet" href="{{ asset('/css/user/main.css') }}">
@endsection

@section('banner')
    {{View::make('user.include.banner')}}
@endsection

@section('content')
<div class="visual">
    <div class="clearfix">
        <div class="visual_list">
            <div>
                <img src="{{ asset('/img/main/imgVisual01.jpg') }}" alt="">
                <div class="text">
                    <h2>Presentation</h2>
                    <p>실시간으로 스트리밍되는 화면(동영상) 동기화로 청중들과 편리하고 효과적인 강연을 진행합니다.</p>
                    <a href="/content/function2"><span>자세히 보기</span><img src="{{ asset('/img/main/iconVisual.png') }}" alt=""></a>
                    <ul>
                        <li><img src="{{ asset('/img/main/iconVisual01_01.png') }}" alt=""><span>동영상</span></li>
                        <li><img src="{{ asset('/img/main/iconVisual01_02.png') }}" alt=""><span>발표자료</span></li>
                        <li><img src="{{ asset('/img/main/iconVisual01_03.png') }}" alt=""><span>시간기록</span></li>
                        <li><img src="{{ asset('/img/main/iconVisual01_04.png') }}" alt=""><span>발표리모콘</span></li>
                    </ul>
                </div>
                <div class="img">
                    <div class="one"><img src="{{ asset('/img/main/imgVisual01_01.png') }}" alt=""></div>
                    <div class="two">
                        <a href="https://edu.symflow.com/sl" target="_blank"><img src="{{ asset('/img/main/imgVisual01_02.png') }}" alt=""></a>
                    </div>
                    <div class="three"><img src="{{ asset('/img/main/imgVisual01_03.png') }}" alt=""></div>
                </div>
            </div>
            <div>
                <img src="{{ asset('/img/main/imgVisual02.jpg') }}" alt="">
                <div class="text">
                    <h2>DownFlow</h2>
                    <p>발표자가 청중에게 주관식 또는 객관식의 퀴즈와 설문을 실시간으로 출제하는 기능입니다.</p>
                    <a href="/content/function3"><span>자세히 보기</span><img src="{{ asset('/img/main/iconVisual.png') }}" alt=""></a>
                    <ul>
                        <li><img src="{{ asset('/img/main/iconVisual02_01.png') }}" alt=""><span>퀴즈</span></li>
                        <li><img src="{{ asset('/img/main/iconVisual02_02.png') }}" alt=""><span>설문</span></li>
                        <li><img src="{{ asset('/img/main/iconVisual02_03.png') }}" alt=""><span>잔여시간 알림</span></li>
                        <li><img src="{{ asset('/img/main/iconVisual02_04.png') }}" alt=""><span>응답자 수</span></li>
                    </ul>
                </div>
                <div class="img">
                    <div class="one01"><img src="{{ asset('/img/main/imgVisual02_01.png') }}" alt=""></div>
                    <div class="two01"><img src="{{ asset('/img/main/imgVisual02_02.png') }}" alt=""></div>
                    <div class="three01"><a href="https://edu.symflow.com/dn" target="_blank"><img src="{{ asset('/img/main/imgVisual02_03.png') }}" alt=""></a></div>
                </div>
            </div>
            <div>
                <img src="{{ asset('/img/main/imgVisual03.jpg') }}" alt="">
                <div class="text">
                    <h2>UpFlow</h2>
                    <p>청중이 강사에게 질문할 수 있는 기능으로 강연 중에 전송이 가능하며 답글 및 추천 기능도 제공합니다.</p>
                    <a href="/content/function4"><span>자세히 보기</span><img src="{{ asset('/img/main/iconVisual.png') }}" alt=""></a>
                    <ul>
                        <li><img src="{{ asset('/img/main/iconVisual03_01.png') }}" alt=""><span>발표자 추가</span></li>
                        <li><img src="{{ asset('/img/main/iconVisual03_02.png') }}" alt=""><span>발표자 수정</span></li>
                        <li><img src="{{ asset('/img/main/iconVisual03_03.png') }}" alt=""><span>추천</span></li>
                        <li><img src="{{ asset('/img/main/iconVisual03_04.png') }}" alt=""><span>답글</span></li>
                    </ul>
                </div>
                <div class="img">
                    <div class="one01"><img src="{{ asset('/img/main/imgVisual03_01.png') }}" alt=""></div>
                    <div class="two02"><img src="{{ asset('/img/main/imgVisual03_02.png') }}" alt=""></div>
                    <div class="three02"><a href="https://edu.symflow.com/up" target="_blank"><img src="{{ asset('/img/main/imgVisual03_03.png') }}" alt=""></a></div>
                    <div class="four02"><img src="{{ asset('/img/main/imgVisual03_04.png') }}" alt=""></div>
                </div>
            </div>
        </div>
        <script>
            $('.visual_list').slick({
                dots: true,
                arrows: true,
                autoplay: true,
                speed: 1200,
                fade: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            });
        </script>
    </div>
</div>

<!-- s: 게시판: Gallery -->
<div class="gallery left">
    <div class="wrap clearfix">
        <div class="title">
            <h2>Gallery</h2>
            <p class="text">온라인 교육, 워크샵, 강연의 해답을 제공합니다.</p>
            <ul class="pc">
                <li><a href="/board/gallery"><img src="{{ asset('/img/main/icon01.png') }}" alt=""><span style="color:#d61e53">전체보기</span></a></li>
                <li><a href="/estimate"><img src="{{ asset('/img/main/icon02.png') }}" alt=""><span>견적문의 바로가기</span></a></li>
                <li><a href="/price"><img src="{{ asset('/img/main/icon03.png') }}" alt=""><span>요금제 및 가격책정</span></a></li>
            </ul>
            <p class="link mobile"><a href="/board/gallery">more +</a></p>
        </div>
        <div class="gallery-board">
            <div class="gallery_list">
                <a href="">
                    <div class="img" style="background-image:url({{ asset('/img/main/imgGallery01.jpg') }});">
                        <img src="/img/main/bgGallery.gif" alt="">
                    </div>
                    <div class="text">
                        <span>웨비나, 현장지원</span>
                        <div>
                            <h3>NCS 기업활용 컨설팅 온라인 사업설명회 안내</h3>
                            <dl>
                                <dt>일시</dt>
                                <dd>01.29 (금)</dd>
                            </dl>
                            <dl>
                                <dt>방법</dt>
                                <dd>온라인 화상중계</dd>
                            </dl>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="img" style="background-image:url({{ asset('/img/main/imgGallery03.jpg') }});">
                        <img src="/img/main/bgGallery.gif" alt="">
                    </div>
                    <div class="text">
                        <span>심플로우, 현장지원</span>
                        <div>
                            <h3>제1회 대한민국도시포럼</h3>
                            <dl>
                                <dt>일시</dt>
                                <dd>11.25 (수)</dd>
                            </dl>
                            <dl>
                                <dt>방법</dt>
                                <dd>온라인 화상중계</dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <script>
            $('.gallery_list').slick({
                dots: true,
                arrows: true,
                autoplay: true,
                speed: 1000,
                slidesToShow: 2,
                slidesToScroll: 1,
                dotsClass: 'custom_paging',
                customPaging: function (slider, i) {
                    return  (i + 1) + '/' + slider.slideCount;
                },
                responsive: [ // 반응형 웹 구현 옵션
                    {
                        breakpoint: 1440,
                        settings: {
                            slidesToShow:3
                        }
                    },
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow:2
                        }
                    },
                    {
                        breakpoint: 550,
                        settings: {
                            slidesToShow:1
                        }
                    }
                ]
            });
        </script>
    </div>
</div>
<!-- e: 게시판: Gallery -->

<div class="function bg text-center">
    <div class="wrap">
        <h3>변화하는 시장에 빠르게 대처하고, 편리함과<br>호환성이 뛰어나며 실시간 응답확인이 가능한 심플로우입니다.</h3>
        <ul>
            <li><img src="{{ asset('/img/main/iconFunction01.png') }}" alt=""><span>실시간 질의 응답확인 서비스<br>(질문, 퀴즈/설문)</span></li>
            <li><img src="{{ asset('/img/main/iconFunction02.png') }}" alt=""><span>별도의 앱(APP)을 설치할<br>필요가 없는 시스템</span></li>
            <li><img src="{{ asset('/img/main/iconFunction03.png') }}" alt=""><span>다양한 기기와 브라우저에서<br>사용되는 뛰어난 호환성</span></li>
        </ul>
        <a href="/content/introduction" class="btn">심플로우 소개</a>
    </div>
    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 100) {
                $(".function").addClass("active");
            } else {
                $(".function").removeClass("active");
            }
        });
    </script>
</div>

<div class="movie text-center">
    <div class="wrap">
        <h3><img src="{{ asset('/img/main/iconMovie.jpg') }}" alt=""><br>함께해요! SYMFLOW</h3>
        <ul>
            <li>
                <a href="https://vimeo.com/491919099" target="_blank">
                    <img src="{{ asset('/img/main/btnMovie01.jpg') }}" alt="">
                    <div>
                        <img src="{{ asset('/img/main/iconSymflow.png') }}" alt="">
                        <span>심플로우웨비나 소개</span>
                        <img src="{{ asset('/img/main/iconMovie.png') }}" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="https://vimeo.com/407567803" target="_blank">
                    <img src="{{ asset('/img/main/btnMovie02.jpg') }}" alt="">
                    <div>
                        <img src="{{ asset('/img/main/iconSymflow.png') }}" alt="">
                        <span>심플로우 화상강의체험</span>
                        <img src="{{ asset('/img/main/iconMovie.png') }}" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="https://youtu.be/ejquIXznoj8" target="_blank">
                    <img src="{{ asset('/img/main/btnMovie03.jpg') }}" alt="">
                    <div>
                        <img src="{{ asset('/img/main/iconSymflow.png') }}" alt="">
                        <span>최고의 라이브 질의응답 서비스</span>
                        <img src="{{ asset('/img/main/iconMovie.png') }}" alt="">
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- s: 게시판: 홍보영상 -->
<div class="promotion left">
    <div class="wrap clearfix">
        <div class="title">
            <h2>홍보영상</h2>
            <p class="link"><a href="/board/movie">more +</a></p>
        </div>
        <ul>
            <li><a href="">교육참여를 높이는 기업교육 트렌드! 심플로우</a><span>21.01.03</span></li>
        </ul>
    </div>
</div>
<script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 500) {
            $(".movie").addClass("active");
            $(".promotion").addClass("active");
        } else {
            $(".movie").removeClass("active");
            $(".promotion").removeClass("active");
        }
    });
</script>
<!-- e: 게시판: 홍보영상 -->

<div class="itnbasic bg bg01 text-center">
    <div class="wrap">
        <h3>우리는 ‘IT’기술을 통해<br> 소통할 수있는 세상을 만듭니다. </h3>
        <p>인사이트 넘치는 아이디어를 모아 더 많은 사람들이 확인하고 활용 할 수 있도록<br> Interactive Communication에 집중합니다.</p>
        <a href="https://itnbasic.com/" target="_blank" class="btn">IT&BASIC 회사소개</a>
    </div>
</div>
<div class="btnSite text-center">
    <div class="wrap">
        <ul>
            <li><a href="/"><strong>심플로우</strong>(온라인 청중응답시스템)</a></li>
            <li><a href="https://www.symoffice.kr" target="_blank"><strong>심오피스</strong>(조직개발 솔루션)</a></li>
            <li><a href="https://www.symclass.kr/" target="_blank"><strong>심클래스</strong>(청소년 학습성향 솔루션)</a></li>
            <li><a href="https://itnbasic.com/?page_id=65/#post-65" target="_blank"><strong>심플로우ev</strong>(심사 및 평가 전문 서비스)</a></li>
        </ul>
    </div>
</div>
@endsection
