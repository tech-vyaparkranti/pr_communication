<div class="sticky-navigation">
    <div class="custom-container">
    <ul class="sticky-content p-0 m-0">
            <li><a href="mailto:{{ $email_1??"info@adiyogiglobal.com" }}"><i class="fa fa-envelope"></i>&nbsp;<span>{{ $email_1??"info@adiyogiglobal.com" }}</span></a></li>
            <li><a href="tel:+91{{ isset($contact_us_contact_number)?str_replace(" ","",$contact_us_contact_number):"+919266747031" }}"><i class="fa fa-phone"></i>&nbsp;<span>{{ $contact_us_contact_number??"+91 926 674 7031" }}</span></a></li>
        </ul>
        <div class="gtranslate_wrapper"></div>
    </div>
</div> 
<!-- Header section Start -->
<header class="main-header">
    <div class="header-contaner">
        <div class="logo-section">
            <div class="mobile-bars" hidden></div>
            <a href="{{ url('/') }}" aria-level="Main logo"><img src="{{ asset($Logo??"./assets/img/logo.png") }}" class="img-fluid" width="120" height="90" alt="Home Styler"></a>
        </div>
        <div class="slide-navigation">
            <div class="navbar-wrapper">
                <ul class="navbar-block">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('aboutUs') }}">About Us</a> </li>
                    <li><a href="{{ route('productPage') }}">Products</a></li> 
                    <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                </ul>
            </div>
            <ul class="social-media">
                <li><a href="{!! $facebook_link ?? 'https://www.facebook.com/adiyogiglobal' !!}" aria-label="Read more about Adiyogiglobal  facebook"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="{!! $linkedin_link ?? '/' !!}" aria-label="Read more about Adiyogiglobal  Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="{!! $instagram_link ?? 'https://www.instagram.com/adiyogi_global/' !!}" aria-label="Read more about Adiyogiglobal  Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="{!! $youtube_link ?? 'https://www.youtube.com/@AdiyogiGlobal' !!}" aria-label="Read more about Adiyogiglobal  Youtube"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</header>
