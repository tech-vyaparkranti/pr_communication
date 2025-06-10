@php
    // Fetch all active website elements from the database
    $elements = \App\Models\WebSiteElements::where('status', '1')->get();
    // Convert them into an associative array for easy lookup (element_name => element_details)
    $elementData = $elements->pluck('element_details', 'element')->toArray();

    // ---- THIS IS THE KEY PART FOR YOUR SINGLE IMAGE ----
    // Assume you have an entry in your WebSiteElements table
    // with 'element' column named 'main_banner_image_url' (or any name you prefer)
    // and its 'element_details' column containing the path to your image.
    $bannerImageUrl = $elementData['main_banner_image_url'] ?? null;

    // Optional: Define a fallback image URL in case the database entry is missing or empty
    $fallbackImageUrl = asset('images/default_banner.jpg'); // Make sure this path exists in your public directory
@endphp

<section class="home-banner">
    <div class="home-banner_wrapper">
        <div class="home-banner_image">
            {{-- Display the banner image --}}
            @if ($bannerImageUrl)
                {{-- If an image URL is found in the database, use it --}}
                <img src="{{ asset($bannerImageUrl) }}" alt="Home Banner" class="banner-background-image">
            @else
                {{-- If no image URL is found, display the fallback image --}}
                <img src="{{ $fallbackImageUrl }}" alt="Default Home Banner" class="banner-background-image">
                <p style="text-align: center; color: red; position: absolute; z-index: 2;">
                    Banner image not found in database. Showing default.
                </p>
            @endif

            {{-- CSS for the banner image --}}
            <style>
                /* Container for the banner image */
                .home-banner_image {
                    position: relative;
                    width: 100%;
                    height: 100vh; /* Full viewport height */
                    overflow: hidden;
                    display: flex; /* Use flexbox to center image within the container */
                    justify-content: center;
                    align-items: center;
                }

                /* Styling for the actual image to cover the background */
                .banner-background-image {
                    width: 100%;
                    height: 100%;
                    object-fit: cover; /* Ensures the image covers the entire container without distortion */
                    object-position: center; /* Centers the image within the container */
                    position: absolute; /* Allows other content (like the gradient) to layer on top */
                    top: 0;
                    left: 0;
                }

                /* Optional gradient overlay on top of the image */
                .home-banner_image::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    /* Adjust this gradient color to match your theme */
                    background: linear-gradient(to bottom, rgb(var(--blue-color) / 65%), rgba(0, 0, 0, 0));
                    z-index: 1; /* Place gradient above the image */
                    pointer-events: none; /* Allows clicks on content above the gradient */
                }
            </style>
        </div>
    </div>

    <div class="home-banner_content">
        <div class="home-banner_inner_wrapper">
            <div class="home-banner_text">
                <h3> {!! $elementData['banner_title'] ?? 'Building Dream with quality for enduring structures.' !!}</h3>
                <p>{!! $elementData['banner_content'] ??
                    ' Elevate your projects with top-quality building materials designed for durability and aesthetic appeal.' !!}</p>
                {{-- The "Watch Video" link below might be removed or changed if there's no video --}}
                <h5><a href="#">Watch Video <span><i class="lni lni-play"></i></span></a></h5>
            </div>
        </div>
    </div>
</section>