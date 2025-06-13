@extends('layouts.webSite')

@section('title', 'Services')

@section('content')
<div class="information-page-slider">
    <div class="information-content">
        <h1><a href="{{ url('/') }}">Home</a><span>Product</span></h1>
    </div>
</div>

<div id="about">
    <div class="default-content products-page pt-5 pb-3">
        <div class="custom-container">
            <div class="site-title pb-3">
                <h2 class="text-center">Our Services</h2>
            </div>
            <div class="midd-content">
                <div class="row">
                    @forelse ($services as $item)
                    <div class="col-md-12 mb-4 offerings-container">
                        <div class="offerings-block">
                            <div class="offerings-content">
                                <div class="offerings-content-inner">
                                    <h3>{{ $item->heading_top }}</h3>
                                    <p class="text-justify">{{ $item->heading_middle }}</p>
                                    <a href="javascript:void(0)" type="button" data-bs-toggle="modal"
                                       data-bs-target="#enquery-pop"><i class="fa fa-link" aria-hidden="true"></i> Enquiry Now</a>
                                </div>
                            </div>
                            <div class="offerings-figure" data-aos="zoom-in-up">
                                <img src="{{ asset($item->image) }}" class="img-fluid rounded" alt="{{ $item->heading_top }}">
                            </div>
                        </div>
                    </div>
                    @empty
                    {{-- Static Service 1 --}}
                    <div class="col-md-12 mb-4 offerings-container">
                        <div class="offerings-block">
                            <div class="offerings-content">
                                <div class="offerings-content-inner">
                                    <h3>Global Export Solutions</h3>
                                    <p class="text-justify">We provide reliable export services for agricultural and industrial goods, ensuring safe and on-time delivery worldwide.</p>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquery-pop">
                                        <i class="fa fa-link" aria-hidden="true"></i> Enquiry Now
                                    </a>
                                </div>
                            </div>
                            <div class="offerings-figure" data-aos="zoom-in-up">
                                <img src="{{ asset('images/static/export.jpg') }}" class="img-fluid rounded" alt="Global Export Solutions">
                            </div>
                        </div>
                    </div>

                    {{-- Static Service 2 --}}
                    <div class="col-md-12 mb-4 offerings-container">
                        <div class="offerings-block">
                            <div class="offerings-content">
                                <div class="offerings-content-inner">
                                    <h3>Custom Packaging Services</h3>
                                    <p class="text-justify">Our custom packaging solutions are tailored to meet the specific requirements of your product and brand identity.</p>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquery-pop">
                                        <i class="fa fa-link" aria-hidden="true"></i> Enquiry Now
                                    </a>
                                </div>
                            </div>
                            <div class="offerings-figure" data-aos="zoom-in-up">
                                <img src="{{ asset('images/static/packaging.jpg') }}" class="img-fluid rounded" alt="Custom Packaging Services">
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.enquiry-modal')
@endsection

@section('script')
<script>
    $("#contactUsForm").on("submit", function () {
        var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
        $("#country_code_id").val("+" + phone_number.getSelectedCountryData().dialCode);

        var form = new FormData(this);
        $("#submitButton").attr("disabled", true);

        $.ajax({
            type: 'post',
            url: '{{ route('saveContactUsDetails') }}',
            data: form,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status) {
                    successMessage(response.message, true);
                } else {
                    errorMessage(response.message ?? "Something went wrong.");
                    $("#submitButton").attr("disabled", false);
                    refreshCapthca('captcha_img_id', 'captcha');
                }
            },
            error: function () {
                errorMessage("Something went wrong.");
                $("#submitButton").attr("disabled", false);
                refreshCapthca('captcha_img_id', 'captcha');
            }
        });
    });

    var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
        separateDialCode: true,
        preferredCountries: ["in"],
        hiddenInput: "full",
        utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
    });
</script>
@endsection
