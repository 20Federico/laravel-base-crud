@php
  $infoList= [
          [
            "title"=> 'DIGITAL COMICS',
            "imgSrc"=> 'buy-comics-digital-comics.png',
            "href"=> '#',
          ],
          [
            "title"=> 'DC MERCHANDISE',
            "imgSrc"=> 'buy-comics-merchandise.png',
            "href"=> '#',
          ],
          [
            "title"=> 'SUBSCRIPTION',
            "imgSrc"=> 'buy-comics-subscriptions.png',
            "href"=> '#',
          ],
          [
            "title"=> 'COMIC SHOP LOCATOR',
            "imgSrc"=> 'buy-comics-shop-locator.png',
            "href"=> '#',
          ],
          [
            "title"=> 'DC POWER VISA',
            "imgSrc"=> 'buy-dc-power-visa.svg',
            "href"=> '#',
          ]
];
@endphp

<div class="company_info">
  <div class="container">
    @foreach ($infoList as $info)
    <div class="element">
      <img src="{{ asset("img/" . $info["imgSrc"]) }}" />
      <a href="{{ $info["href"]}}">{{ $info["title"] }}</a>
    </div>
    @endforeach
  </div>
</div>