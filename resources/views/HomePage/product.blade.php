@extends('layouts.webSite')
@section('title', 'Product & Solutions')
@section('content')
    <!-- banner section -->
    <div class="promo-banner">
        <div class="promo-banner_image">
            <img src="assets/img/hp-slide.jpg" alt="img" />
        </div>
        <div class="promo-banner_content">
            <div class="promo-banner_inner_wrapper">
                <div class="promo-banner_text">
                    <h3>Your one-stop destination for premium materials supply, ensuring your projects stand strong and shine bright.</h3>
                    <p>Empowering construction projects with superior quality materials for lasting durability and supreme expertise.</p>
                    <div class="promo-banner_action">
                        <a href="{{ route('contactUs') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section -->

    <!-- </section> -->

    <div class="manage-promo">
        <div class="manage-promo_container">
            <div class="row">
                <div class="col-md-4">
                    <!-- about section top title -->
                    <div class="manage-promo_titles">
                        <div class="manage-promo_toptitle">
                            <h3 class="webfixf">OUR Solution</h3>
                        </div>
                        <!-- geox section title -->
                        <div class="manage-promo_title">
                            <h2 class="webfixf-in">Elevating Construction<br> with Quality Materials</h2>
                            <p class="webfixf">Your one-stop destination for premium building materials, ensuring your projects stand strong and shine bright.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="manage-promo_contant manage-promo_contant_mobile">
                        <div class="swiper-containers  swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="about-section_slide_wrapper ">
                                        <img src="assets/img/tostem.png" />
                                        <div class="manage-promo_contant-content">
                                            <h3 class="webfixf">Tostem</h3>
                                            <p class="webfixf">The global leader in pre-engineered window systems.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="about-section_slide_wrapper">
                                        <img src="assets/img/greenlam_laminates.png" />
                                        <div class=" manage-promo_contant-content ">
                                            <h3 class="webfixf">Greenlam</h3>
                                            <p class="webfixf">Mikasa Real Wood Floors No.1 surfacing solutions brand.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="about-section_slide_wrapper ">
                                        <img src="assets/img/sloan.png" alt="img" />
                                        <div class="manage-promo_contant-content ">
                                            <h3 class="webfixf">Sloan </h3>
                                            <p class="webfixf">Innovation generation. A pioneer in plumbing technology.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="about-section_slide_wrapper ">
                                        <img src="assets/img/vox.png" alt="img" />
                                        <div class="manage-promo_contant-content ">
                                            <h3 class="webfixf">Vox </h3>
                                            <p class="webfixf">Facade systems No.1 surfacing solutions brand.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination custom_pagination"></div>
                        </div>
                    </div>
                    <div class="manage-promo_contant manage-promo_contant_desktop">
                        <div class="manage-promo_contant_box">
                            <div class="manage-promo_contant_img">
                                <img src="assets/img/tostem.png" alt="Website" />
                            </div>
                            <div class="manage-promo_contant-content">
                                <h3>Tostem</h3>
                                <p>The global leader in pre-engineered window systems.</p>
                            </div>
                        </div>
                        <div class="manage-promo_contant_box">
                            <div class="manage-promo_contant_img">
                                <img src="assets/img/greenlam_laminates.png" alt="Website" />
                            </div>
                            <div class="manage-promo_contant-content">
                                <h3>Greenlam </h3>
                                <p>Mikasa Real Wood Floors No.1 surfacing solutions brand.</p>
                            </div>
                        </div>
                        <div class="manage-promo_contant_box">
                            <div class="manage-promo_contant_img">
                                <img src="assets/img/sloan.png" alt="Website" />
                            </div>
                            <div class="manage-promo_contant-content">
                                <h3>Sloan</h3>
                                <p>Innovation generation. A pioneer in plumbing technology.</p>
                            </div>
                        </div>
                        <div class="manage-promo_contant_box">
                            <div class="manage-promo_contant_img">
                                <img src="assets/img/vox.png" alt="Website" />
                            </div>
                            <div class="manage-promo_contant-content">
                                <h3>Vox</h3>
                                <p>Facade systems No.1 surfacing solutions brand.</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!-- product banner  -->

    <!-- product page split section  -->
    <div class="promo-split">
        <div class="promo-split_wrapper row">
            <div class="col-md-6 pl-0 pr-0">
                <div class="promo-split_left_banner">
                    <img src="assets/img/greenlam-vox.jpg" alt="img" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="split_wrapper promo-split-right_banner">
                    <div class="split_wrapper_box">
                        <h3>Tostem</h3>
                        <p><i>The global leader in pre-engineered window systems</i></p>
                        <p>A better home is made up of surprisingly simple things – doors and windows that connect you with the world outside; interiors and exteriors that bring spaces to life.</p>
                        <div class="geox-section_content_action our-section_content_action">
                            <a href="{{ route('tostem') }}">Kenow more<span><i class="lni lni-arrow-top-right"></i></span></a>
                        </div>
                    </div>
                    <div class="split_wrapper_box ">
                        <h3>Greenlam</h3>
                        <p><i>Mikasa Real Wood Floors</i></p>
                        <p><b>Greenlam</b> is the place where passion meets excellence, creating what can be best described as hallmarks of quality and elegance. The top laminate company in India.</p>
                        <div class="geox-section_content_action our-section_content_action">
                            <a href="{{ route('greenlam') }}">Kenow more<span><i class="lni lni-arrow-top-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product page split section  -->
    <div class="promo-split">
        <div class="promo-split_wrapper row">
            <div class="col-md-6">
                <div class="split_wrapper promo-split-right_banner">
                    <div class="split_wrapper_box ">
                        <h3>Sloan</h3>
                        <p><i>A pioneer in plumbing technology.</i></p>
                        <p>Powered by responsible practices <b>sloan</b> continues to build a global brand synonymous with <b>sustainability, energy conservation</b> and <b>water efficient products,</b> with green innovations that include solar powered technologies and all-in-one sink systems. It also ups its game in upscale commercial restroom design, with more stylish and contemporary product options that are as beautiful as they are sustainable.</p>
                        <div class="geox-section_content_action our-section_content_action">
                            <a href="{{ route('sloan') }}">Kenow more<span><i class="lni lni-arrow-top-right"></i></span></a>
                        </div>
                    </div>
                    <div class="split_wrapper_box ">
                        <h3>Vox</h3>
                        <p><i>Facade systems</i></p>
                        <p><b>VOX</b> is one of the most innovative brands involved in designing, manufacturing and distributing furniture, home furnishings and building materials in Europe.</p>
                        <div class="geox-section_content_action our-section_content_action">
                            <a href="{{ route('vox') }}">Kenow more<span><i class="lni lni-arrow-top-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-0 pr-0 order-md-0">
                <div class="promo-split_left_banner">
                    <img src="assets/img/vox-sloan.jpg" alt="img" />
                </div>
            </div>
        </div>
    </div>

    <!-- product extra section -->
    <section class="promo-extra">
        <div class="promo-split_slide_box">
            <div class="promo-extra_container">
                <div class="promo-extra_border">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="promo-extra_wrrap">
                            <span class="promo-extra_number">01</span>
                            <h3>Accurate & Reliable</h3>
                            <p>At <b>Sthirta Corp</b>, we pride ourselves on our unwavering commitment to accuracy and reliability. With every delivery, we guarantee precise measurements, consistent quality, and dependable service, empowering you to build with confidence and peace of mind.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promo-extra_wrrap">
                            <span class="promo-extra_number">02</span>
                            <h3>Innovative Approach</h3>
                            <p>Innovation is our cornerstone. From cutting-edge materials to advanced delivery solutions, we're constantly pushing boundaries to bring you the latest in construction technology. Partner with us and stay ahead with innovative building solutions tailored to your needs.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promo-extra_wrrap">
                            <span class="promo-extra_number">03</span>
                            <h3>Globally Accepted Designs</h3>
                            <p>Embrace global standards with our creative solutions. Our curated selection of Products blends international trends with local needs, ensuring your projects stand out while meeting worldwide standards for quality and creativity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- product extra section -->
@endsection