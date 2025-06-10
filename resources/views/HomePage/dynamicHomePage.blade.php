@extends('layouts.webSite')
@section('title', 'Sthirta Corp')
@section('content')
    {{-- @include('include.navigation') --}}
    @include('include.slider')
    <!-- home about section -->
    <section class="about-section">
        <div class="about-container">
            <div class="about-container_wrapper">
                <!-- about section top title -->
                <div class="about-section_toptitle">
                    <h3 class="webfixf">About Us</h3>
                </div>
                <!-- about section title -->
                <div class="about-section_title">
                    <h2 class="webfixf-in">{!! $elementData['about_title'] ?? 'Elevating structures, enriching lives' !!}</h2>
                    <p class="webfixf">{!! $elementData['about_content'] ??
                        'With <b>14+ years</b> of experience in the <b>Building Material Industry</b> behind us. We set out to bring the best of premium craftmanship to our clients. It is the amalgamation of this experience and understanding that resulted in the birth of <b>Sthirta Corp.</b> The one stop for premium building material solutions. Our alliance with each brand we represent is borne out of our understanding and longstanding experience.</p>' !!}
                </div>
                <!-- about section content -->
                <div class="about-section_content">
                    <div class="about-section_content_wrapper">
                        <!-- Swiper -->
                        <div class="swiper-containers  swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="about-section_slide_wrapper">
                                        <img src="assets/img/3-png.png" />
                                        <div class="about-section_slide_content">
                                            <h2 class="webfixf">Accurate & Reliable</h2>
                                            <p class="webfixf">At <b>Sthirta Corp</b>, we pride ourselves on our unwavering
                                                commitment to accuracy and reliability. With every delivery, we guarantee
                                                precise measurements, consistent quality, empowering you to build with
                                                confidence and peace of mind.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="about-section_slide_wrapper">
                                        <img src="assets/img/1-png.png" />
                                        <div class="about-section_slide_content">
                                            <h2 class="webfixf">Innovative Approach</h2>
                                            <p class="webfixf">Innovation is our cornerstone. From cutting-edge materials to
                                                advanced delivery solutions, we're constantly pushing boundaries to bring
                                                you the latest in construction technology.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="about-section_slide_wrapper">
                                        <img src="assets/img/2-png.png" alt="img" />
                                        <div class="about-section_slide_content">
                                            <h2 class="webfixf">Globally Accepted Designs</h2>
                                            <p class="webfixf">Embrace global standards with our creative solutions. Our
                                                curated selection of Products blends international trends with local needs,
                                                ensuring your projects stand out while meeting worldwide standards for
                                                quality and creativity.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination custom_pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home about section -->
    <!-- home proparty profile section -->
    <section class="pro-profile">
        <div class="pro-profile_container">
            <div class="pro-profile_wrapper">
                <!-- pro-profile section title -->
                <div class="about-section_title pro-profile_title">
                    <h2 class="webfixf-in">Brand Association</h2>
                    <p class="webfixf">{!! $elementData['brand_content'] ??
                        "We're here to ensure your building projects thrive. Your project success is our priority. Reach out to our dedicated customer support team for personalized assistance with all your needs.</p>" !!}
                </div>
                <!-- slide proparty wrapper -->
                <div class="pro-profile_slide_wrapper">
                    <div class="pro-profile_slide-container swiper-container">
                        <div class="swiper-wrapper">
                            @if ($brandAssociation)
                                @php
                                    $images = json_decode($brandAssociation->image);
                                @endphp
                                @foreach ($images as $brand)
                                    <div class="swiper-slide">
                                        <div class="pro-profile_slide_box">
                                            <div class="pro-profile_slide_inner_box">
                                                <div class="pro-profile_slide_left_box">
                                                    <div class="pro-profile_slide_img">
                                                        <img src="{{ asset($brand) }}" alt="img"
                                                            style="height: 400px;width:550px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide">
                                    <div class="pro-profile_slide_box">
                                        <div class="pro-profile_slide_inner_box">
                                            <div class="pro-profile_slide_left_box">
                                                <div class="pro-profile_slide_img">
                                                    <img src="assets/img/greenlam/pexels-photo-6801926.jpg"
                                                        alt="img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pro-profile_slide_box">
                                        <div class="pro-profile_slide_inner_box">
                                            <div class="pro-profile_slide_left_box">
                                                <div class="pro-profile_slide_img">
                                                    <img src="assets/img/greenlam/ours-contents.jpg" alt="img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pro-profile_slide_box">
                                        <div class="pro-profile_slide_inner_box">
                                            <div class="pro-profile_slide_left_box">
                                                <div class="pro-profile_slide_img">
                                                    <img src="assets/img/tostem/tostem-banner.jpg" alt="img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pro-profile_slide_box">
                                        <div class="pro-profile_slide_inner_box">
                                            <div class="pro-profile_slide_left_box">
                                                <div class="pro-profile_slide_img">
                                                    <img src="assets/img/vox/home-2.jpg" alt="img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pro-profile_slide_box">
                                        <div class="pro-profile_slide_inner_box">
                                            <div class="pro-profile_slide_left_box">
                                                <div class="pro-profile_slide_img">
                                                    <img src="assets/img/sloan/sloan.jpg" alt="img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- home proparty profile section -->
    <!-- Sthirta Corpsection -->
    <section class="geox-section">
        <div class="geox-section_container">
            <div class="geox-section_wrapper">
                <!-- about section top title -->
                <div class="about-section_toptitle geox-section_toptitle">
                    <h3 class="webfixf">Brand portfolio</h3>
                </div>
                <!-- Sthirta Corpsection title -->
                <div class="about-section_title geox-section_title">
                    <h2 class="webfixf-in">High Quality Products & Solutions</h2>
                    <p class="webfixf">Uncompromising quality, built into every product, every time.</p>
                </div>
                <div class="geox-section_content">
                    <div class="geox-section_content_wrapper">
                        @if ($brandPortfolio->isNotEmpty())
                            @foreach ($brandPortfolio as $brand)
                                <div class="geox-section_box">
                                    <a href="{{ route('product-brand', [$brand->slug]) }}"
                                        class="d-block geox-section_Inner_box">
                                        <img src="{{ asset($brand->icon) }}" alt="Website" />
                                        <div class="geox-section_content_box">
                                            <h3 class="webfixf">{{ $brand->title }}</h3>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="geox-section_box">
                                <a href="{{ route('product-brand', ['slug']) }}" class="d-block geox-section_Inner_box">
                                    <img src="assets/img/tostem-new.png" alt="Website" />
                                    <div class="geox-section_content_box">
                                        <h3 class="webfixf">Tostem</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="geox-section_box">
                                <a href="{{ route('greenlam') }}" class="d-block geox-section_Inner_box">
                                    <img src="assets/img/greenlam_laminates-new.png" alt="Website" />
                                    <div class="geox-section_content_box">
                                        <h3 class="webfixf">Greenlam – Mikasa</h3>
                                    </div>
                                </a>
                            </div>
                            {{-- <div class="geox-section_box">
                        <a href="{{ route('sloan') }}" class="d-block geox-section_Inner_box">
                            <img src="assets/img/sloan-new.png" alt="Website" />
                            <div class="geox-section_content_box">
                                <h3 class="webfixf">Sloan</h3>
                            </div>
                        </a>
                    </div> --}}
                            <div class="geox-section_box">
                                <a href="{{ route('vox') }}" class="d-block geox-section_Inner_box">
                                    <img src="assets/img/vox-new.png" alt="Website" />
                                    <div class="geox-section_content_box">
                                        <h3 class="webfixf">Vox</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="geox-section_box">
                                <a href="{{ route('sloan') }}" class="d-block geox-section_Inner_box">
                                    <img src="assets/img/sloan-new.png" alt="Website" />
                                    <div class="geox-section_content_box">
                                        <h3 class="webfixf">Sloan</h3>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="geox-section_content_action">
                        <a href="{{ route('product') }}">Know more <span><i
                                    class="lni lni-arrow-top-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sthirta Corpsection -->
    <!-- our solution section -->
    <section class="our-section">
        <div class="our-section_container">
            <div class="our-section_wrapper">
                <!-- about section top title -->
                <div class="about-section_toptitle geox-section_toptitle our-section_toptitle">
                    <h3 class="webfixf">Overview</h3>
                </div>
                <!-- Sthirta Corpsection title -->
                <div class="about-section_title geox-section_title our-section_title">
                    <h2 class="webfixf-in">Elevating <br>Construction with Quality Materials</h2>
                    <p class="webfixf">Providing top-quality materials for every project, we're your trusted partner in
                        construction excellence</p>
                </div>
            </div>
        </div>
        <div class="our-section_image">
            <div class="our-section_image_container">
                <div class="our-section_image_box our-section_image_box_frist">

                    @php
                        $videoLink = $overView_Video->video_link ?? '';
                        $videoId = '';

                        if (
                            preg_match(
                                '/(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([^\s&?\/]+)/',
                                $videoLink,
                                $matches,
                            )
                        ) {
                            $videoId = $matches[1];
                        }
                    @endphp

                    @if ($videoId)
                        <iframe width="100%" height=""
                            src="https://www.youtube.com/embed/{{ $videoId }}?color=white&showinfo=0&controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    @else
                        <iframe width="100%" height=""
                            src="https://www.youtube.com/embed/sxUEBoO4uac?color=white&showinfo=0&controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    @endif

                </div>
                <div class="our-section_image_box our-section_image_box_2nd">
                    <div class="service-card swiper">
                        <div class="swiper-wrapper">
                            @if ($overView->isNotEmpty())
                                @foreach ($overView as $item)
                                    <div class="swiper-slide">
                                        <div class="service-card-item">
                                            <img src="{{ asset($item->image) }}" alt="img" class="img-fluid w-100"
                                                style="min-height: 350px; max-height:350px" />
                                            <p class="service-shor-detail">{{ $item->title }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide">
                                    <div class="service-card-item">
                                        <img src="assets/img/fea-img-416x647.jpg" alt="img"
                                            class="img-fluid w-100" />
                                        <p class="service-shor-detail">Providing top-quality materials for every project
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card-item">
                                        <img src="assets/img/fea-img-416x647.jpg" alt="img"
                                            class="img-fluid w-100" />
                                        <p class="service-shor-detail">Providing top-quality materials for every project
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card-item">
                                        <img src="assets/img/fea-img-416x647.jpg" alt="img"
                                            class="img-fluid w-100" />
                                        <p class="service-shor-detail">Providing top-quality materials for every project
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card-item">
                                        <img src="assets/img/fea-img-416x647.jpg" alt="img"
                                            class="img-fluid w-100" />
                                        <p class="service-shor-detail">Providing top-quality materials for every project
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- <img src="assets/img/fea-img-416x647.jpg" alt="img" /> --}}
                </div>
            </div>
        </div>
        <div class="our-section_container">
            <div class="our-section_wrapper">
                <!-- about section top title -->
                <div class="about-section_toptitle geox-section_toptitle our-section_toptitle">
                    <h3 class="webfixf">Client Testimonials</h3>
                </div>
                <!-- Sthirta Corpsection title -->
                <div class="about-section_title geox-section_title our-section_title">
                    <p class="webfixf"> {!! $elementData['client_testimonial_content'] ??
                        'Their exceptional range of building materials exceeded my expectations, making my project a seamless success' !!}</p>
                </div>
                <div class="swiper-container mt-5" id="testimonials">

                    <div class="swiper-wrapper">
                        @if ($clientTestimonial->isNotempty())
                            @foreach ($clientTestimonial as $testimonial)
                                <div class="swiper-slide geox-section_box our-section_box ">
                                    <div class="geox-section_Inner_box">
                                        @php
                                            $youtubeId = null;
                                            if ($testimonial->video_link) {
                                                preg_match(
                                                    '/(?:v=|\/embed\/|\.be\/)([a-zA-Z0-9_-]+)/',
                                                    $testimonial->video_link,
                                                    $matches,
                                                );
                                                $youtubeId = $matches[1] ?? null;
                                            }
                                        @endphp
                                        @if ($youtubeId)
                                            <div class="our-section_Inner_box">
                                                <iframe width="100%" height=""
                                                    src="https://www.youtube.com/embed/{{ $youtubeId }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                        @else
                                            <div class="our-section_Inner_box">
                                                <iframe width="100%" height=""
                                                    src="{{ $testimonial->video_link }}" title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                        @endif

                                        <div class="geox-section_content_box">
                                            <h3 class="webfixf">Testimonial - {{ $testimonial->client_name }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide geox-section_box our-section_box ">
                                <div class="geox-section_Inner_box">
                                    <div class="our-section_Inner_box">
                                        <iframe width="100%" height=""
                                            src="https://www.youtube.com/embed/5cJIi-MJRS4?si=e_hogG7SBoA6Doox?color=white&showinfo=0&controls=0"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="geox-section_content_box">
                                        <h3 class="webfixf">Testimonial - Praful Jain</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide geox-section_box our-section_box ">
                                <div class="geox-section_Inner_box">
                                    <div class="our-section_Inner_box">
                                        <iframe width="100%" height=""
                                            src="https://www.youtube.com/embed/LwRGHC90VYA?si=vepMDeIact3Eqgjt?color=white&showinfo=0&controls=0"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="geox-section_content_box">
                                        <h3 class="webfixf">Testimonial - Ritu Jain</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide geox-section_box our-section_box ">
                                <div class="geox-section_Inner_box">
                                    <div class="our-section_Inner_box">
                                        <iframe width="100%" height=""
                                            src="https://www.youtube.com/embed/vldeg4yFEHc?si=dGRoHmo8-BciJQrk?color=white&showinfo=0&controls=0"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="geox-section_content_box">
                                        <h3 class="webfixf">Testimonial - Saksham Jain</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- our solution section -->
    <!-- home contact box section -->
    {{-- <section class="contact-box">
    <div class="contact-box_container">
        <div class="contact-box_wrapper">
            <div class="contact-box_left_box">
                <div class="contact-box_box">
                    <!-- about section top title -->
                    <div class="about-section_toptitle geox-section_toptitle">
                        <h3 class="webfixf">Section</h3>
                    </div>
                    <!-- Sthirta Corpsection title -->
                    <div class="about-section_title geox-section_title">
                        <h2 class="webfixf-in">Company customer types belief, Lorem Ipsum is not simply random text.</h2>
                        <p class="webfixf">Ecopia leverages artificial intelligence (“AI”) to mine geospatial big data, rapidly generating HD Vector Maps at-scale, all with the accuracy of a trained GIS professional. Our HD Vector Maps are trusted foundational layers embedded into critical applications around the world.</p>
                    </div>
                </div>
            </div>
            <div class="contact-box_right_box">
                <div class="contact-box_form_box">
                    <form method="POST" action="">
                        <!-- about section top title -->
                        <div class="about-section_toptitle geox-section_toptitle our-section_toptitle contact-section_toptitle">
                            <h3 class="webfixf">Take the next step</h3>
                        </div>
                        <!-- Sthirta Corpsection title -->
                        <div class="about-section_title geox-section_title our-section_title contact-section_title">
                            <h2 class="webfixf-in">Contact Us</h2>
                        </div>
                        <div class="contact-box_contant">
                            <div class="contact-box_contant_g">
                                <div class="contact-box_group">
                                    <input type="text" name="fname" placeholder="Frist Name" />
                                </div>
                                <div class="contact-box_group">
                                    <input type="text" name="lname" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="contact-box_group">
                                <input type="email" name="email" placeholder="Email Address" />
                            </div>
                            <div class="contact-box_group">
                                <input type="text" name="cname" placeholder="Company Name" />
                            </div>

                            <div class="contact-box_group">
                                <input type="tel" name="tel" placeholder="Phone Number" />
                            </div>
                            <div class="contact-box_group">
                                <textarea type="text" name="textarea" placeholder="Tell us more about your project, needs, and timelines" rows="5" ></textarea>
                            </div>
                            <div class="contact-box_group">
                                <input type="submit" name="submit" value="submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- home contact box section -->

    <!-- Modal Structure -->
    <div id="contactModal" class="modal-overlay">
        <div class="modal-container">
            <!-- Image Section -->
            <div class="modal-image-section">
                <div
                    style="width: 100%; max-width: 400px; aspect-ratio: 1/1; background-color: #BFDBFE; border-radius: 0.5rem; overflow: hidden;height:400px">
                    <img src="{{ asset('./assets/img/Untitled design (5).jpg') }}" alt="Contact us"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>

            <!-- Form Section -->
            <div class="modal-form-section">
                <button class="close-btn" onclick="closeModal()">×</button>

                <div style="margin-bottom: 1.5rem;">
                    <h2 style="font-size: 1.5rem; font-weight: 700; color: #1F2937; margin-bottom: 0.5rem;">Enquiry Now
                    </h2>
                    <p style="color: #4B5563;">Fill out the form below and we'll get back to you soon!</p>
                </div>

                <form id="contactForm" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone_number" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" rows="3" class="form-textarea" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="captcha_enquiry_form" class="form-label">Captcha</label>
                        <input type="text" id="captcha_enquiry_form" name="captcha" class="form-input" required
                            placeholder="Enter Captcha">

                        <div style="display: flex; align-items: center; gap: 1rem; margin-top: 0.5rem;">
                            <img class="img-thumbnail" style="max-width: 150px;" src="{{ captcha_src() }}"
                                id="captcha_img_id_enquiry_form" alt="captcha">

                            <button type="button" class="btn btn-icon btn-light"
                                onclick="refreshCapthca('captcha_img_id_enquiry_form','captcha_enquiry_form')">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </div>
                    </div>


                    <button type="submit" class="submit-btn mb-5">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal functionality -->
    <!-- Modal Popup CSS -->
    <style>
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            overflow-y: auto;
        }

        .modal-container {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 800px;

            overflow: hidden;
            display: flex;
            flex-direction: column;
            max-height: 100vh;
            /* Prevent modal from exceeding screen */
            overflow-y: auto;
        }

        @media (min-width: 768px) {
            .modal-container {
                flex-direction: row;
                /* Side-by-side only on desktop */
                max-height: 80vh;
                /* Adjust height for large screens */
            }
        }

        .modal-image-section {
            width: 100%;
            background-color: #EFF6FF;
            /* blue-50 */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        @media (min-width: 768px) {
            .modal-image-section {
                width: 50%;
            }
        }

        .modal-form-section {
            width: 100%;
            padding: 1.5rem;
            position: relative;
        }

        @media (min-width: 768px) {
            .modal-form-section {
                width: 50%;
            }
        }

        .close-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: #6B7280;
            /* gray-500 */
        }

        .close-btn:hover {
            color: #374151;
            /* gray-700 */
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
            /* gray-700 */
            margin-bottom: 0.25rem;
        }

        .form-input {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #D1D5DB;
            /* gray-300 */
            border-radius: 0.375rem;
        }

        .form-input:focus {
            outline: none;
            border-color: #3B82F6;
            /* blue-500 */
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
        }

        .form-textarea {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #D1D5DB;
            /* gray-300 */
            border-radius: 0.375rem;
            resize: vertical;
        }

        .form-textarea:focus {
            outline: none;
            border-color: #3B82F6;
            /* blue-500 */
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
        }

        .submit-btn {
            width: 100%;
            background-color: #2563EB;
            /* blue-600 */
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.375rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #1D4ED8;
            /* blue-700 */
        }
    </style>
@endsection
@section('script')
    <script>
        let site_url = '{{ url('/') }}';
    </script>
    <script src="js/homePage.js"></script>
    <script></script>
    <script>
        // Show modal after 20 seconds
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                document.getElementById('contactModal').style.display = 'flex';
            }, 20000);
        });

        // Close modal function
        function closeModal() {
            $("#contactForm")[0].reset();
            document.getElementById('contactModal').style.display = 'none';
        }

        // Refresh CAPTCHA
        function refreshCapthca(imgId, inputId) {
            const baseUrl = "{{ url('captcha/default') }}";
            document.getElementById(imgId).src = baseUrl + "?" + Math.random();
            document.getElementById(inputId).value = "";
        }

        // Form submit handler with AJAX
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            // Optional quick check if captcha is empty
            const captchaValue = $('#captcha_enquiry_form').val().trim();
            if (!captchaValue) {
                errorMessage("Please enter the captcha.");
                return;
            }

            $('#submitButton').attr('disabled', true); // disable button

            $.ajax({
                type: 'POST',
                url: "{{ route('saveEnquiry') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status) {
                        toastr.success(response.message);
                        closeModal();
                    } else {
                        errorMessage(response.message ?? "Something went wrong.");
                        $('#submitButton').attr('disabled', false);
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;
                        if (errors?.captcha) {
                            toastr.error(errors.captcha[0]); // show "Invalid captcha"
                        } else {
                            toastr.error(response.message);
                        }
                        // Refresh CAPTCHA
                        refreshCapthca('captcha_img_id_enquiry_form', 'captcha_enquiry_form');
                    } else {
                        toastr.error("Something went wrong.");
                    }
                    $('#submitButton').attr('disabled', false);
                }
            });
        });

        // Close modal when clicking outside
        document.getElementById('contactModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
@endsection
