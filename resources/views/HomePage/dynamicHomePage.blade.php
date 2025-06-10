@extends('layouts.webSite')
@section('title', 'Adiyogi Global ')
@section('content')
    {{-- @include('include.navigation') --}}
    @include('include.slider')

    <!-- aboutus Section -->
    <div class="destinations pt-5 pb-2">
        <div class="custom-container">
            <!-- <div class="site-title">
                <h2 class="text-center">About Us</h2>
            </div>
            <div class="about-image">
                <img src="./assets/img/chilli.jpg" alt="" style="object-fit: cover;
                
    height: 300px;
    width: 400px;">
                <div class="about-text">
            <p >{!! isset($aboutText['0']->sort_about_us) ? $aboutText['0']->sort_about_us : 'Please fill about data from admin panel.'  !!}</p>
</div>
</div> -->
<div class="col-md-12 mb-4 offerings-container">
<div class="site-title">
                <h2  class="text-center">About Us</h2>
            </div>
                    <div class="offerings-block">
                        <div class="offerings-content" >
                       <p class="text-justify">{!! $home_about_content ?? 'Adiyogi Global is dedicated to providing healthy, high-quality products to customers worldwide. With
                        over 12 years of experience, we source the finest goods directly from top farmers and manufacturers
                        across India. Our commitment to quality and transparency ensures that every product meets the highest
                        standards of purity and freshness. We take pride in earning the trust of our customers through
                        exceptional service and a deep dedication to their well-being. At Adiyogi Global, we bring the best of
                        India to the world, always prioritizing quality and care.Customer trust is the foundation of Adiyogi Global. We are committed to earning and maintaining this
                        trust through transparency, integrity, and exceptional service. From your first interaction with us, we
                        aim to provide a seamless and satisfying experience.' !!}</p>
                      
                        </div>
                        <div class="offerings-figure"data-aos="fade-right">
                            <img src="{{ asset($home_about_image ?? './assets/img/Random Pics.jpeg') }}" class="img-fluid rounded" width="" height="" alt="Bikaner">
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
    <!-- About Section End
    <section class="chairperson">
        <div class="custom-container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="chairperson-figure pb-5">
                        <?php if(!empty($getChairManData['0']->image)) { ?>
                        <img src="<?php echo url($getChairManData['0']->image)?>" width="" height="" class="img-fluid" alt="Chairperson's" />
                        <?php } else{ ?>
                            <img src="assets/img/Mukesh-Kumar-Pandey-ji.png" width="" height="" class="img-fluid" alt="Chairperson's" />
                            <?php } ?>
                    </div>
                </div>
                <div class="col-md-8">
            <?php if(!empty($getChairManData['0']->message)) { ?>
                <div class="chairperson-content">
                    <h3>Message from Chairperson’s Desk</h3>
                    <p><b>Welcome!</b><br>
                       {!! $getChairManData['0']->message  !!}</b><br><span>(<?php echo $getChairManData['0']->name?>)</span></p>getChairManData
                </div>
                <?php } else { ?>
                    <div class="chairperson-content">
                        <h3>Message from Chairperson’s Desk</h3>
                        <p><b>Welcome!</b><br>
                            I am immensely proud of the journey KRISHIDHA FPO has undertaken. We started with a vision to empower our fellow farmers and transform their livelihoods. Today, seeing hundreds of families thriving under our umbrella fills me with immense satisfaction. Our commitment is unwavering. We will continue to work relentlessly to provide our farmers with the resources, knowledge, and support they need to achieve agricultural success. Join us on this journey of growth and prosperity!<br><b>Warm regards,</b><br><span>(Mr. Mukesh Kumar Pandey)</span></p>getChairManData
                    </div>
                 <?php }?>

                </div>
            </div>
        </div>
    </section> -->

    <!-- Destinations Section -->
    <div class="destinations pt-5 pb-4" data-aos="fade-up">
        <div class="custom-container">
            <div class="site-title pb-4">
                <h2 class="text-center">Our Products</h2>
            </div>
            <div class="swiper we-offer">
                <div class="swiper-wrapper">
                    @foreach ($home_products as $item )
                    <div class="swiper-slide">
                        <div class="destinations-block">
                            <div class="destinations-figure">
                                <img src="{{ asset($item->image) }}" class="img-fluid" width="" height="" alt="Destinations">
                            </div>
                            <span class="destinations-title mh-auto text-center">{{$item->heading_top}}</span>
                        </div>
            </div>
                    @endforeach
                <div class="swiper-slide">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="./assets/img/Basmati rice.jpeg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Basmati Rice</span>
                            </div>
                </div>
                
                <div class="swiper-slide">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="./assets/img/Ground Spice.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Ground Spices</span>
                            </div>
                </div>
                <div class="swiper-slide">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="./assets/img/Fruit & Vegitables 2.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Fresh Fruits & Vegetables</span>
                            </div>
                </div>
                <div class="swiper-slide">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="./assets/img/Non Basmati Rice 2.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Non Basmati Rice</span>
                            </div>
                </div>
                <div class="swiper-slide">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="./assets/img/fresh-fruits-berries-.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Fresh Fruits</span>
                            </div>
                </div>
            </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="view-button text-center pt-4">
                <a href="{{ route('productPage') }}">Know more</a>
            </div>
        </div>
    </div>
    <!-- Destinations Section End -->

     <!-- Destinations Section -->
     <!-- <div class="destinations pt-5 pb-2">
        <div class="custom-container">
            <div class="site-title pb-0">
                <h2 class="text-center">Glimpse of Product</h2>
                <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="./assets/img/chilli.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Chilli</span>
                            </div>
                {{-- <p class="text-center">Embark on unforgettable journeys to exotic destinations with our expertly crafted travel experiences.</p> --}}
            </div>
            <div class="swiper glimpse">
                <div class="swiper-wrapper">
                    @if (!empty($getAllProduts))
                        @foreach ($getAllProduts as $product)
                            <div class="swiper-slide mb-4">
                                <div class="destinations-block">
                                    <div style="width: auto;height: 150px; overflow: hidden;">
                                        <img src="{{ url($product->p_img) }}" class="img-fluid"
                                        alt="{!! $product->p_name !!}" style="width: 100%;height: 100%; object-fit: cover;">
                                    </div>
                                    <span class="destinations-title mh-auto text-center">{!! $product->p_name !!}</span>
                                </div>
                            </div>
                        @endforeach
                        @else
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="./assets/img/chilli.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Chilli</span>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="assets/img/Wheat.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Wheat</span>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="assets/img/tomato.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Tomato</span>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="assets/img/main-peas.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Peas</span>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="assets/img/Paddy.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Paddy</span>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="destinations-block">
                                <div class="destinations-figure">
                                    <img src="assets/img/Vermicompost.jpg" class="img-fluid" width="" height="" alt="Destinations">
                                </div>
                                <span class="destinations-title mh-auto text-center">Vermicompost</span>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div> -->
    <!-- Destinations Section End -->

    <!-- {{-- Testimonial Section  --}}
    <section class="testimonial pt-5 pb-4">
        <div class="custom-container">
            <div class="site-title pb-3">
                <h2 class="text-center">Testimonial</h2>
                <p class="text-center text-white">Include quotes or stories from farmers who have benefited from <b>KRISHIDHA FPO's</b> services.</p>
            </div>
            <div class="swiper testimonials mb-5">
                <div class="swiper-wrapper" id="testimonialsData">

   @if(isset($testimonial))
   @foreach ($testimonial as $testimonialValue)

   <div class="swiper-slide">
    <div class="testimonials-block text-center">
        <div class="testimonials-title"><?=$testimonialValue->client_name?><span> </span></div>
        <p class="text-justify"><?=$testimonialValue->review_text?></p>
    </div>
</div>
@endforeach
@endif
</div>
</div>
 Why Choose Us Section Starts -->
<section class="our-service pt-5 pb-5">
    <div class="custom-container">
        <div class="section-heading mb-4">
            <h2 class="text-center">Why chose us</h2>
        </div>
        <div class="row" id="ourServices">
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-solid fa-sliders"></i></div>
                    <div class="our-content">
                        <p class="mb-0 text-center">Premium Quality Products</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-solid fa-award"></i></div>
                    <div class="our-content">
                        
                        <p class="mb-0 text-center">Extensive Range</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-regular fa-star"></i></div>
                    <div class="our-content">
                        
                        <p class="mb-0 text-center">Trusted Sourcing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-solid fa-headphones"></i></div>
                    <div class="our-content">
                       
                        <p class="mb-0 text-center">Global Standards</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-solid fa-fire"></i></div>
                    <div class="our-content">
                        
                        <p class="mb-0 text-center">Sustainable Practices</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="our-block">
                    <div class="our-block-figure"><i class="fa-solid fa-wallet"></i></div>
                    <div class="our-content">
                       
                        <p class="mb-0 text-center">Customer-Centric Approach</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us Section Ends -->

        <!-- </div>
    </section> --> 
    <!-- <section class="our_partner pt-5 pb-2">
        <div class="custom-container">
            <div class="site-title pb-3">
                <h2 class="text-center">Our Partner</h2>
            </div>
            <div class="row">
                @if(!empty($partnersImages))
                @foreach ($partnersImages as $PartnerRow)
                <div class="col-4">
                    <div style="width:auto;height:150px;overflow:hidden;">
                        <img src="{{ url($PartnerRow->image) }}" alt="deHaat"  class="img-fluid" />
                    </div>
                </div>
                @endforeach
                 @else
                 <div class="col-4">
                    <img src="assets/img/deHaat-logo.png" alt="deHaat" width="200" height="" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="assets/img/amrit.jpg" alt="deHaat" width="200" height="" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="assets/img/guiding.jpg" alt="deHaat" width="200" height="" class="img-fluid" />
                </div>
                 @endif

            </div>
        </div>
    </section> -->
    <!-- {{-- Testimonial Section End  --}} -->
@endsection
<style>
    .about-image{
        display:flex;
    }
    .about-text{
        display:end;
    }
    
.our_services-title + p {font: 400 14px/normal var(--font-josefin);color: rgb(var(--black-color));}
.our_services-title + p{margin-bottom: 10px; display: -webkit-box;max-width: 100%;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;}

.custom-container, .header-contaner{
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}
#ourServices {
    justify-content: center;
}
 .our-block {
   
    padding: 1rem;
    transition: var(--transition);
    cursor: pointer;
    background-color: #fff;
    position: relative;
    z-index: 0;
    min-height: 100px;
}
.our-block::before {
    transition: var(--transition);
    content: '';
    position: absolute;
    top: 0rem;
    right: 0rem;
    bottom: 0rem;
    left: 0rem;
    background-color: #fff;
    box-shadow: 0px 0px 15px -5px rgb(0 0 0 / 30%);
    z-index: -1;
}
.our-block:hover:before {
    top: -0.4rem;
    right: -0.4rem;
    bottom: -0.4rem;
    left: -0.4rem;
}
.our-block-figure > svg {
    font-size: 30px;
    color: var(--primary-bg);
    transition: var(--transition);
    position: relative;
    left: 0;
    top: 0;
}
.our-block-figure {
    float: left;
    position: relative;
    transition: var(--transition);
}
.our-block-figure::after {
    content: '';
    position: absolute;
    left: -1rem;
    top: -1rem;
    width: calc(100% + 2rem);
    height: calc(100% + 2rem);
    background-color: rgba(1,0,102,255);
    border: 5px solid rgba(1,0,102,255);
    border-bottom-right-radius: 100%;
    transform: scale(0) translate(-100%, -100%);
    transition: var(--transition);
    z-index: -1;
}
.our-block:hover > .our-content h4.our-title{color: rgba(1,0,102,255);font-weight: 700;}
.our-block:hover .our-block-figure > svg {
    color: #fff;
    top: -5px;
    left: -5px;
}
.our-block:hover .our-block-figure::after {
    transform: scale(1) translate(0%, 0%);
}
.our-block:hover {
    border-color:rgba(1,0,102,255) ;
}
 .our-block:hover:before {
    background-color: #fff;
    top: 0rem;
    bottom: 0rem;
    right: 0rem;
    left: 0rem;
}
.our-block > .our-content {
    margin-left: 50px;
    text-align: left;
    margin-top:14px;
}
.our-block > .our-content h4.our-title {
    font: 500 16px/normal var(--lato-font);
    margin-bottom: 10px;
    color: var(--primary-bg);
    transition: var(--transition);
}
.our-content p {
    font-size: 15px;
    line-height: 20px;
} 
    </style>
@section('script')
    <script>
        let site_url = '{{ url('/') }}';
    </script>
    {{-- <script src="js/homePage.js?v=2"></script> --}}
@endsection

