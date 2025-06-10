@extends('layouts.webSite')
@section('title', 'About Us')
@section('content')
<!-- banner section -->
<div class="about-banner">
    <div class="about-banner_image">
        <img src="assets/img/vox/vox-001.jpg" alt="img" />
    </div>
    <div class="about-banner_content">
        <div class="about-banner_text">
            <h3>Sthirtacorp's Legacy of Leadership and Innovation</h3>
            <p>Our Journey, Our Values" invites you on a captivating voyage through our company's story.</p>
        </div>
    </div>
</div>
<!-- banner section -->
<!-- about us extra section -->
<section class="anout-exra">
    <div class="anout-exra_wrapper ">
        <div class="row">
            <div class="col-md-6">
                <div class="anout-exra_content_block">
                    <div class="anout-exra_content">
                        <h3>About Sthirta Corp</h3>
                        <p>With <b>14+ years</b> of experience in the <b>Building Material Industry</b> behind us. We set out to bring the best of premium craftmanship to our clients. It is the amalgamation of this experience and understanding that resulted in the birth of <b>Sthirta Corp.</b> The one stop solution for premium building material solutions. Our alliance with each brand we represent is borne out of our understanding and longstanding experience.</p>
                        <p>We are currently, <b>Channel partners</b> with <b>Tostem India</b>, manufacturing pre-engineered doors and windows . An exclusive range of products which not only enhances the overall aesthetics and give flexibility to the architects and the designers, but is also backed with solid features and superior quality. We are proud to announce a range of premium brands like <b>Greenlam</b>, <b>SLOAN</b> and <b>Vox</b> now are available with Us.</p>
                        <p><b>Headquartered</b> in the Millennium City, <b>Gurgaon</b>, we are serving a wide range clients across the country, Our strong brand portfolio makes sure that we meet the expectations and desires of <b>our clients</b> at every step of the way. From doors, windows to surfaces and lighting, we have it all covered.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-0 pr-0">
                <div class="anout-exra_img">
                    <img src="assets/img/vox/vox-about.jpg" alt="Website" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us extra section -->
<!-- about us manage risk appartment -->
{{-- <section class="manage_risk">
    <div class="manage_risk_container">
        <div class="manage_risk_wrapper">
            <div class= col-md-4 col-sm-6 col-12 "
                </div>
            </div>
            <div class= col-md-4 col-sm-6 col-12 "umbing systems, we’ve spent more than a century pioneering smart, water-saving restroom solutions that are built to last a lifetime. Our global team of engineers has developed technologies that improve water e!ciency without compromising design, quality, a"ordability or performance.We understand the dynamic relationship between the world’s water management systems and its water ecosystems. </p>
                    <p> We have partnered with healthcare establishments, restaurants, hotels, academic institutions, residential and commercial buildings, and other facilities around the world to save millions of liters of water with low flow, water free and reclaimed water technology.</p>
                    
                    <div class= col-md-4 col-sm-6 col-12 "                  </div>
                </div>
            </div>
            <div class= col-md-4 col-sm-6 col-12 "
                    <p>Powered by Responsible Practices Sloan </p>
                </div>
                <div class= col-md-4 col-sm-6 col-12 "
                    <p>Powered by Sthirta Corp</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="anout-exra bg-white pt-4 pb-3">
    <div class="about-section_title pro-profile_title mb-5">
        <h2 class="webfixf-in">Why Choose Us?</h2>
    </div>
    <div class="default-content pt-4 pb-5">
        <div class="custom-container">
            <div class="row">
                <div class="mb-3 col-md-4 col-sm-6 col-12 ">
                    <div class="aboutus-cards">
                        <img src="assets/img/solution-oriented.jpg"  class="img-fluid w-100" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Solution oriented</p>
                    </div>
                </div>
                <div class="mb-3 col-md-4 col-sm-6 col-12 picture-item">
                    <div class="aboutus-cards">
                        <img src="assets/img/skilled-team.jpg"  class="img-fluid w-100" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Skilled team</p>
                    </div>
                </div>
                <div class="mb-3 col-md-4 col-sm-6 col-12 picture-item" data-groups='["greenlam"]'>
                    <div class="aboutus-cards">
                        <img src="assets/img/end-to-end.jpg"  class="img-fluid w-100" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">End to end assistance</p>
                    </div>
                </div>
                <div class="mb-3 col-md-4 col-sm-6 col-12 picture-item">
                    <div class="aboutus-cards">
                        <img src="assets/img/strong-customer-reference.jpg"  class="img-fluid w-100" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Strong Customer Reference</p>
                    </div>
                </div>
                <div class="mb-3 col-md-4 col-sm-6 col-12 picture-item">
                    <div class="aboutus-cards">
                        <img src="assets/img/expert-advice.jpg"  class="img-fluid w-100" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Expert Advice & Support</p>
                    </div>
                </div>
                <div class="mb-3 col-md-4 col-sm-6 col-12 picture-item">
                    <div class="aboutus-cards">
                        <img src="assets/img/responsive-customer-service.jpeg"  class="img-fluid w-100" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Responsive Customer Service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about timeline -->
@endsection