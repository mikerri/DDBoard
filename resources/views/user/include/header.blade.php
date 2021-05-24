<header id="topBar">
    <div class="wrap clearfix">
        <h1>
            <a href="{{route('home')}}"><img src="{{ asset('/img/common/imgLogo.png') }}" alt="SYMFLOW" class="pc"><img src="{{ asset('/img/common/imgLogo_s.png') }}" alt="SYMFLOW" class="mobile"></a>
        </h1>

        <div class="btn">
            <a href="javascript:void(0)" id="menuMoreBtn">
                <span><i>메뉴보기</i></span>
                <em><i></i><i></i></em>
            </a>
        </div>

        <aside class="clearfix">
            <ul class="clearfix">
                @unless(session()->get('user'))
                <li><a href="{{ route('login'). '?nextUrl='. Request::getRequestUri() }}"><i class="icon-user"></i> 로그인</a></li>
                <li><a href="{{ route('register') }}">회원가입</a></li>
                @else
                    @if(session()->get('admin'))
                        <li><a href="{{ route('admin.index') }}">관리자 모드</a></li>
                    @endif
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">로그 아웃</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </li>
                @endunless
            </ul>
        </aside>

        {{ View::make('user.include.menu') }}
        <div class="allmenu">{{ View::make('user.include.menu') }}</div>
    </div>
</header>
<script>
    $(document).ready(function(){
        //GNB
        $('nav > ul > li > a').on('mouseenter focusin', function(){
            $(this).parent('li').addClass('on').siblings('li').removeClass('on');
            $('header').addClass('on');
        });
        $('body > div').on('mouseenter focusin', function(){
            $('header').removeClass('on');
            $('nav>ul>li').removeClass('on');
        });

        // ALL MENU
        $('header .btn a').append('<em><i></i><i></i></em>');
        $('header .btn a').on('click',function(){
            $(this).toggleClass('active');
            $('header .allmenu').toggleClass('active');
            $("body").toggleClass('on');
            return false;
        });

        //LNB
        $('.location > ul > li > button').click(function(){
            $(this).parent('li').toggleClass('on').siblings('li').removeClass('on');
        });
        $('body > .content').on('mouseenter focusin', function(){
            $('.location>ul>li').removeClass('on');
        });
    })
</script>
