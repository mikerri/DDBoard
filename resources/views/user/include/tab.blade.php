<?php $tabMenus[$tnb-1]['on'] = "active"; ?>
<ul>
    @foreach($tabMenus as $tabMenu)
    <li class="{{ $tabMenu['on'] ?? '' }}"><a href="{{ $tabMenu['path'] }}">{{ $tabMenu['title'] }}</a></li>
    @endforeach
</ul>
