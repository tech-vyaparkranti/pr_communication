<div class="main-wrapper">
    <!-- header section -->
    @php
        $elements = \App\Models\WebSiteElements::where('status','1')->get();
        $elementData = $elements->pluck('element_details', 'element')->toArray();
        $brand = \App\Models\BrandPortfolio::where('status',1)->get();

    @endphp
    <header class="header-wrapper home">
        <div class="header-container">
            <div class="header-inner_wrapper">
                <div class="header-left_navigation">
                    <!-- brand logo -->
                    <div class="brand_wrapper">
                        <a href="{{ url('/') }}" aria-level="Main logo"><img src="{!! asset($elementData['logo'] ?? 'assets/img/logo.png') !!}" class="img-fluid" width="" height="" alt="SthirtaCorp"/></a>
                    </div>
                    <!-- brand logo -->
                    <!-- header navigation -->
                    <div class="header_navigation">
                        <div class="header-inner_list">
                            <ul class="nav-list">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                <li><a href="{{ route('product') }}">Product & Solution</a>
                                  <ul class="sublinks">
                                    @foreach ($brand as $item)
                                    <li><a href="{{ route('product-brand',[$item->slug]) }}">{{$item->title}}</a></li>
                                    @endforeach
                                    {{-- <li><a href="{{ route('tostem') }}">Tostem</a></li>
                                    <li class="inner-sublinks"><a href="{{ route('greenlam') }}">Greenlam</a>
                                        <ul class="sublinks">
                                            <li><a href="{{ route('greenlam') }}/#mikasa-doors"> Mikasa Doors</a></li>
                                            <li><a href="{{ route('greenlam') }}/#mikasa-floors"> Mikasa Floors</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="{{ route('vox') }}">Vox</a></li>
                                    <li><a href="{{ route('sloan') }}">Sloan</a></li> --}}
                                  </ul>
                                </li>
                                <li><a href="{{ route('galleryPages') }}">Gallery</a></li>
                                <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- header navigation -->
                </div>
                <!-- right navigation -->
                <div class="header-right_navigation">
                    <!-- navigation hamburgur -->
                    <div class="hamburgur-file">
                        <div class="menu-btn">
                            <div class="menu-btn__burger"></div>
                        </div>
                    </div>
                    <div class="right_navigation_container">
                        <ul class="social-media">
                            <li><a href="{!! strip_tags($elementData['facebook_link'] ?? 'https://www.facebook.com/Sthirtacorp/') !!}"
                                target="_blank"
                                aria-label="Read more about Sthirta Corp facebook">
                               <i class="fa fa-facebook"></i>
                             </a></li>
                            <li><a href="{!! strip_tags($elementData['instagram_link'] ?? 'https://www.instagram.com/sthirtacorp/?hl=en') !!}" target="_blank" aria-label="Read more about Sthirta Corp Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{!! strip_tags($elementData['linkedin_link'] ?? 'https://www.linkedin.com/in/sthirta-corp-a47591226') !!}" target="_blank" aria-label="Read more about Sthirta Corp Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{!! strip_tags($elementData['youtube_link'] ?? 'https://www.youtube.com/@sthirtacorp') !!}" target="_blank" aria-label="Read more about Sthirta Corp Youtube"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="https://wa.me/{!! strip_tags($elementData['whatsapp_number'] ?? '+918826354100') !!}" target="_blank" aria-label="Read more about Sthirta Corp WhatsApp"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- right navigation -->
            </div>
        </div>
    </header>
    <!-- header section -->