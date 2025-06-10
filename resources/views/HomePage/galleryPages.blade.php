@extends('layouts.webSite')
@section('title', 'Gallery')
@section('content')
<!-- banner section -->
<div class="promo-banner">
    <div class="promo-banner_image">
        <img src="assets/img/hp-slide.jpg" alt="img" />
    </div>
    <div class="promo-banner_content">
        <div class="promo-banner_inner_wrappers">
            <div class="promo-banner_text">
                <h3>Gallery</h3>
                <p>Glimpse of Achievement & Happiness</p>
                <div class="promo-banner_action">
                    <a href="{{ route('contactUs') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner section -->
<div id="galley">
    <div class="default-content pt-4 pb-5">
        <div class="custom-container">
            <div class="shuffle_wrapper text-center pt-3 pb-4">
                <button class="default-btn" id='all'><span>All</span></button>
                 @foreach ($category as $item)
                  <button class="default-btn" id='btn-{{$item->slug}}'><span>{{$item->title}}</span></button>
                 @endforeach
                {{-- <button class="default-btn" id='btn-tostem'><span>Tostem</span></button>
                <button class="default-btn" id='btn-greenlam'><span>Greenlam</span></button>
                <button class="default-btn" id='btn-sloan'><span>Sloan</span></button>
                <button class="default-btn" id='btn-vox'><span>Vox</span></button> --}}
            </div>

            <div class="row my-shuffle-container">
                @foreach ($galleries as $gallery)
                    @if($gallery->local_image)
                        <div class="mb-3 grid-col col-6 col-md-3 col-sm-4 picture-item" data-groups='["{{ strtolower($gallery->filter_category) }}"]'>
                            <div class="service-card-item">
                                <img src="{{ asset($gallery->local_image) }}" class="img-fluid" alt="{{ $gallery->alternate_text }}">
                                {{-- <p class="service-shor-detail">{{ $gallery->alternate_text }}</p> --}}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            
        </div>
    </div>
</div>
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/6.1.0/shuffle.min.js"></script>
<script>
    var gallary_page = window.location.pathname;
    var split_name = gallary_page.split("/").pop();

    const getpage = () => {
        const Shuffle = window.Shuffle;
        const element = document.querySelector('.my-shuffle-container');
        const shuffleInstance = new Shuffle(element, {
            itemSelector: '.picture-item'
        });

        // Show all
        $("#all").on("click", function () {
            shuffleInstance.filter();
        });

        // Dynamically bind button clicks based on category
        @foreach ($category as $item)
            $("#btn-{{ $item->slug }}").on("click", function () {
                shuffleInstance.filter("{{ strtolower($item->title) }}");
            });
        @endforeach
    };

    if (split_name === 'gallery') {
        getpage();
    }
</script>

@endsection