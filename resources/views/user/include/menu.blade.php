<?php
$menus = config('menu');
$menus = array_splice($menus, 0, 7);
?>
@if(isset($menus))
<nav>
    <ul>
        @foreach($menus as $menu)
        <li>
            <a href="{{$menu['path']}}">{{$menu['title']}}</a>
            @if(isset($menu['sub']))
            <ul>
                @foreach($menu['sub'] as $subMenu)
                <li>
                    <a href="{{$subMenu['path']}}">{{$subMenu['title']}}</a>
                    @if(isset($subMenu['tab']))
                    <ul>
                        @foreach($subMenu['tab'] as $tabMenu)
                        <li><a href="{{$tabMenu['path']}}">{{$tabMenu['title']}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
</nav>
@endif
