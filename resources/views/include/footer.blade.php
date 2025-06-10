{{-- Recognitions --}}

<!-- <section class="recognitions pt-5 pb-4">
    <div class="custom-container">
        <div class="site-title pb-3">
            <h2 class="text-center">Recognitions</h2>
        </div>
        <div class="recognitions-self swiper">
            <div class="swiper-wrapper">
                @if(!empty($Recognitions))
                @foreach ($Recognitions as $RecoRow)
                <div class="swiper-slide mb-4">
                    <div class="destinations-new">
                        <div class="destinations-inner">
                            <div>
                            <img src="{{ url($RecoRow->image) }}" class="img-fluid" width="300" height="400"  alt="Lakshadweep">
                        </div> -->
                            <!-- <span class="destinations-title">Certificate-1</span> -->
                        <!-- </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="swiper-slide mb-4">
                    <div class="destinations-new">
                        <div class="destinations-inner">
                            <img src="assets/img/fssai.png" class="img-fluid" width="300" height="400" alt="India Gate"> -->
                            <!-- <span class="destinations-title">Certificate-2</span> -->
                        <!-- </div>
                    </div>
                </div>
                <div class="swiper-slide mb-4">
                    <div class="destinations-new">
                        <div class="destinations-inner">
                            <img src="assets/img/ministry.png" class="img-fluid" width="300" height="400" alt="Hawamahal"> -->
                            <!-- <span class="destinations-title">Certificate-3</span> -->
                        <!-- </div>
                    </div>
                </div>
                @endif


            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section> -->
{{-- Recognitions End --}}
<!-- Footer Section -->
<footer class="footer-section pt-4 pb-4">
    <div class="custom-container">
        <div class="row">
            <div class="col-md-5 mb-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <div class="footer-logo-inner">
                            <img src="{{ asset($Logo??"./assets/img/logo.png") }}" class="img-fluid" width="130" height="86" alt="RNcommunication " >
                            {{-- <div id="TA_rated501" class="TA_rated"><ul id="JjXmgm" class="TA_links VuYcLdHeKQX"><li id="Vri6iTpTKUC" class="IZw2R90i"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g304551-d15224458-Reviews-The_Luxury_Travel-New_Delhi_National_Capital_Territory_of_Delhi.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=501&amp;locationId=15224458&amp;lang=en_US&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script> --}}
                        </div>
                        <p><b>{!! $footer_logo_name ?? 'Adiyogi Global'!!}</b></p>
                        <ul class="social-media mt-4">
                        <li><a href="{!! $facebook_link ?? 'https://www.facebook.com/RNcommunication' !!}" aria-label="Read more about RNcommunication  facebook"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="{!! $linkedin_link ?? '/' !!}" aria-label="Read more about RNcommunication  Linkedin"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="{!! $instagram_link ?? 'https://www.instagram.com/adiyogi_global' !!}" aria-label="Read more about RNcommunication  Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="{!! $youtube_link ?? 'https://www.youtube.com/@RNcommunication' !!}" aria-label="Read more about RNcommunication  Youtube"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                        {{-- <p class="text-center mb-0"><img style="max-width: 100%" src="assets/img/msme.png" alt="RNcommunication " width="100%" height="" /></p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="footer-item">
                    <h5 class="footer-title">Quick Link</h5>
                    <ul>
                        <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                        <li><a href="{{ route('termsConditions') }}">Terms & Conditions</a></li>
                        <!-- {{-- <li><a href="{{ route('shippingDeliverypolicy') }}">Shipping & Delivery Policy</a></li>
                        <li><a href="{{ route('CancellationRefundPolicy') }}">Cancellation & Refund Policy</a></li> --}} -->
                        <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                       
                        <li><a href="{{ route('productPage') }}">Services</a></li>
                        
                        <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                        <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="footer-item">
                    <h5 class="footer-title">Contact Information</h5>
                    <div class="footer-contact">
                        <div class="footer-item pb-3">
                            <label>Company E-mail:</label>
                            <p class="footer-email"><i class="fa-solid fa-envelope"></i>&nbsp;<a  href="mailto:{{ $email_1??"sales@RNcommunication.com" }}" style="font-weight:bold;font-size:16px;">{{ $email_2??"sales@RNcommunication.com" }}  <br><br> &nbsp; &nbsp; {{ $email_1??"info@RNcommunication.com" }} </a>
                        </div>
                        <div class="footer-item pb-3">
                            <label>Contact No:</label>
                            <p><i class="fa-solid fa-phone"></i>&nbsp;<a href="tel:+91{{ isset($contact_us_contact_number)?str_replace(" ","",$contact_us_contact_number):"+91987654321" }}">{{ $contact_us_contact_number??"+91-987654321" }}</a></p>
                        </div>
                        <div class="footer-item pb-3">
                            <label>Address:</label>
                            <p>{!! $address ?? 'najafgarh' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    
</footer>

<div class="copyright-section text-center p-3">&copy; <script>document.write( new Date().getFullYear() );</script>{{ isset($WebSetting['0']->copyright_txt) ? $WebSetting['0']->copyright_txt : '© 2024 All Rights Reserved by RNcommunication ' }}   & Developed by <a href="https://vyaparkranti.com/" class="text-white" aria-label="Digital Markating" alt="Vyapar Kranti">Vyapar kranti</a></div>
<!-- Footer Section End-->

