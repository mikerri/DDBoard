<?php
$menus = config('menu');

$title = $subTitle = $tabTitle = "";
$lnbMenus = $tabMenus = array();

$title = $menus[$gnb-1]['title'];
$menus[$gnb-1]['on'] = "active";

if(isset($menus[$gnb-1]['sub'])) {
    $lnbMenus = $menus[$gnb-1]['sub'];
    $subTitle = $lnbMenus[$lnb-1]['title'];
    $lnbMenus[$lnb-1]['on'] = "active";
}
if(isset($lnbMenus[$lnb-1]['tab'])) {
    $tabMenus = $lnbMenus[$lnb-1]['tab'];
    $tabTitle = $tabMenus[$tnb-1]['title'];
}
?>

<div class="visual">
    <div class="text">
        <h2>{{ $title }}</h2>

        @if(isset($lnb))
        <ul>
            @foreach($lnbMenus as $lnb)
            <li class="{{ $lnb['on'] ?? '' }}"><a href="{{ $lnb['path'] }}">{{ $lnb['title'] }}</a></li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="clearfix">
        <div class="visual_list">
            <div style="background-image:url({{asset('/img/sub/imgVisual01.jpg')}})"></div>
            <div style="background-image:url({{asset('/img/sub/imgVisual02.jpg')}})"></div>
            <div style="background-image:url({{asset('/img/sub/imgVisual04.jpg')}})"></div>
            <div style="background-image:url({{asset('/img/sub/imgVisual03.jpg')}})"></div>
        </div>
        <script>
            $('.visual_list').slick({
                dots: false,
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

<div class="location">
    <ul class="wrap">
        <li><a href="{{ route('home') }}" class="home"><em class="blind">메인화면으로 이동</em></a></li>

        <li class="d1">
            <button type="button" title="메뉴펼치기"><span>{{ $title }}</span></button>
            @if(isset($lnb))
            <div class="sub">
                <ul>
                    @foreach($menus as $gnb)
                    <li class="{{ $gnb['on'] ?? '' }}"><a href="{{ $gnb['path'] }}">{{ $gnb['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endif
        </li>

        @if(isset($lnb))
        <li class="d1">
            <button type="button" title="메뉴펼치기"><span>{{ $subTitle }}</span></button>
            <div class="sub">
                <ul>
                @foreach($lnbMenus as $lnb)
                <li class="{{ $lnb['on'] ?? '' }}"><a href="{{ $lnb['path'] }}">{{ $lnb['title'] }}</a></li>
                @endforeach
                </ul>
            </div>
        </li>
        @endif

        @if(isset($tnb))
        <li class="d1">
            <button type="button" title="메뉴펼치기"><span>{{ $tabTitle }}</span></button>
            <div class="sub">
                {{ View::make('user.include.tab')->with(['tnb'=>$tnb, 'tabMenus'=>$tabMenus]) }}
            </div>
        </li>
        @endif
    </ul>
</div>
