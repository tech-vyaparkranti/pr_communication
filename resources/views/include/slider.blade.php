<!-- main Video Section -->
<div class="video-banner">
  <div class="video-block">
    <div class="swiper main-slider">
      <div class="swiper-wrapper">
        @foreach ($sliders as $slide )
        <div class="swiper-slide">
          <img class="img-fluid" width="" height="" alt="Image" src="{{ asset($slide->image) }}" />
          <div class="video-content">
          {{-- <!-- <span>Adiyogi Global</span>
          <h3>Grow with Innovation: Solutions for Sustainable Farming</h3>
            <a href="{{ route('contactUs') }}" aria-label="Explore The World">Get in touch</a> --> --}}
          </div>
        </div> 
        @endforeach
        <div class="swiper-slide">
          <img class="img-fluid" width="" height="" alt="Image" src="./assets/img/Banner Pic 1.jpg" />
          <div class="video-content">
          <!-- <span>Adiyogi Global</span>
          <h3>Grow with Innovation: Solutions for Sustainable Farming</h3>
            <a href="{{ route('contactUs') }}" aria-label="Explore The World">Get in touch</a> -->
          </div>
        </div> 
        <div class="swiper-slide">
          <img class="img-fluid" width="" height="" alt="Image" src="./assets/img/Banner Pic 2.jpg" />
          <div class="video-content">
          <!-- <span>Adiyogi Global</span>
          <h3>Grow with Innovation: Solutions for Sustainable Farming</h3> -->
            <!-- <a href="{{ route('contactUs') }}" aria-label="Explore The World">Get in touch</a> -->
          </div>
        </div> 
        <div class="swiper-slide">
          <img class="img-fluid" width="" height="" alt="Image" src="./assets/img/Banner Pic 3.jpg" />
          <div class="video-content">
          <!-- <span>Adiyogi Global</span>
          <h3>Grow with Innovation: Solutions for Sustainable Farming</h3> -->
            <!-- <a href="{{ route('contactUs') }}" aria-label="Explore The World">Get in touch</a> -->
          </div>
        </div> 
        <div class="swiper-slide">
          <img class="img-fluid" width="" height="" alt="Image" src="./assets/img/Banner Pic 4.jpg" />
          <div class="video-content">
          <!-- <span>Adiyogi Global</span>
          <h3>Grow with Innovation: Solutions for Sustainable Farming</h3> -->
            <!-- <a href="{{ route('contactUs') }}" aria-label="Explore The World">Get in touch</a> -->
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
