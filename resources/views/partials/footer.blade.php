@php
  $moreInfoLists= [
          [
            "title"=> 'DC COMICS',
            "links"=> [
              [
                "name"=> 'Characters',
                "href"=> '#',
              ],
              [
                "name"=> 'Comics',
                "href"=> '#',
              ],
              [
                "name"=> 'Movies',
                "href"=> '#',
              ],
              [
                "name"=> 'TV',
                "href"=> '#',
              ],
              [
                "name"=> 'Games',
                "href"=> '#',
              ],
              [
                "name"=> 'Videos',
                "href"=> '#',
              ],
              [
                "name"=> 'News',
                "href"=> '#',
              ],
            ]
          ],
          [
            "title"=> 'SHOP',
            "links"=> [
              [
                "name"=> 'Shop DC',
                "href"=> '#',
              ],
              [
                "name"=> 'Shop DC Collectibles',
                "href"=> '#',
              ],
            ]
          ],
          [
            "title"=> 'DC',
            "links"=> [
              [
                "name"=> 'Terms Of Use',
                "href"=> '#',
              ],
              [
                "name"=> 'Privacy policy(New)',
                "href"=> '#',
              ],
              [
                "name"=> 'Ad Choices',
                "href"=> '#',
              ],
              [
                "name"=> 'Advertising',
                "href"=> '#',
              ],
              [
                "name"=> 'Jobs',
                "href"=> '#',
              ],
              [
                "name"=> 'Subscriptions',
                "href"=> '#',
              ],
              [
                "name"=> 'Talent Workshops',
                "href"=> '#',
              ],
              [
                "name"=> 'CPSC Certificates',
                "href"=> '#',
              ],
              [
                "name"=> 'Ratings',
                "href"=> '#',
              ],
              [
                "name"=> 'Shop Help',
                "href"=> '#',
              ],
              [
                "name"=> 'Contact Us',
                "href"=> '#',
              ],
            ]
          ],
          [
            "title"=> 'SITES',
            "links"=> [
              [
                "name"=> 'DC',
                "href"=> '#',
              ],
              [
                "name"=> 'MAD Magazine',
                "href"=> '#',
              ],
              [
                "name"=> 'DC Kids',
                "href"=> '#',
              ],
              [
                "name"=> 'DC Universe',
                "href"=> '#',
              ],
              [
                "name"=> 'DC Power Visa',
                "href"=> '#',
              ],
            ]
          ],
        ];

  $socialList= [
          [
            "name"=> 'facebook',
            "href"=> '#',
            "imgSrc"=> 'footer-facebook.png'
          ],
          [
            "name"=> 'twitter',
            "href"=> '#',
            "imgSrc"=> 'footer-twitter.png'
          ],
          [
            "name"=> 'youtube',
            "href"=> '#',
            "imgSrc"=> 'footer-youtube.png'
          ],
          [
            "name"=> 'pinterest',
            "href"=> '#',
            "imgSrc"=> 'footer-pinterest.png'
          ],
          [
            "name"=> 'periscope',
            "href"=> '#',
            "imgSrc"=> 'footer-periscope.png'
          ]
  ];
@endphp

<footer>
  <div class="company_more_info">
    <div class="container">
      <div class="info_container">
        @foreach ($moreInfoLists as $list)
        <div class="list" >
          <h3>{{ $list["title"] }}</h3>
          <ul>
            @foreach ($list["links"] as $link)
            <li><a href="{{$link["href"]}}">{{$link["name"]}}</a></li>
            @endforeach
          </ul>
        </div>
        @endforeach
      </div>
      <div class="logo_bg_container"></div>
    </div>
  </div>

  <div class="footer_foot">
    <div class="container">
      <button class="btn_outline_primary">SIGN-UP NOW!</button>
      <div>
        <div class="social_container">
          FOLLOW US
          <div class="social_list">
            @foreach ($socialList as $social)
            <a href="{{$social["href"]}}">
              <img src="{{"../img/" . $social["imgSrc"]}}" alt="{{$social["name"]}}" >
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>