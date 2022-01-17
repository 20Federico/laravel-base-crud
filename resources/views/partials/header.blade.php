@php

$navLinks= [
        ["linkName"=> 'CHARACTERS', "route_name"=> 'characters.index'],
        ["linkName"=> 'COMICS', "route_name"=> 'comics.index'],
        ["linkName"=> 'MOVIES', "route_name"=> 'movies.index'],
        ["linkName"=> 'TV', "route_name"=> 'tv.index'],
        ["linkName"=> 'GAMES', "route_name"=> 'games.index'],
        ["linkName"=> 'COLLECTIBLES', "route_name"=> 'collectibles.index'],
        ["linkName"=> 'VIDEOS', "route_name"=> 'videos.index'],
        ["linkName"=> 'FANS', "route_name"=> 'fans.index'],
        ["linkName"=> 'NEWS', "route_name"=> 'news.index'],
        ["linkName"=> 'SHOP', "route_name"=> 'shop.index']
];
$activeRouteName = Request::route()->getName();
@endphp

<header>
  <nav class="container">
    <a href="{{route('home.index')}}">
      <img src="{{asset('img/dc-logo.png')}}" alt="dc logo">
    </a>
    <ul>
      @foreach ($navLinks as $link)
      <li>
        <a class="{{$link['linkName'] === 'SHOP' ? 'dropdown-toggle' : ''}} {{$link['route_name'] === $activeRouteName ? 'active' : '' }}" href="#">{{ $link['linkName'] }}</a>
      </li>
      @endforeach
    </ul>
  </nav>

  <div class="banner">
  </div>
</header>