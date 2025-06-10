@extends('layouts.webSite')
@section('title', 'Contact Us')
@php
    $elements = \App\Models\WebSiteElements::where('status', '1')->get();
    $elementData = $elements->pluck('element_details', 'element')->toArray();
@endphp
@section('content')
    <!-- banner section -->
    <div class="about-banner">
        <div class="about-banner_image">
            <img src="assets/img/vox/vox-001.jpg" alt="img" />
        </div>
        <div class="about-banner_content">
            <div class="about-banner_text">
                <h3>Contact Us</h3>
                <p>Our Values" invites you on a captivating voyage through our company's story.</p>
            </div>
        </div>
    </div>
    <!-- banner section -->
    <div id="about">
        <div class="default-content pt-4 pb-4">
            <div class="custom-container">
                <!-- Contact Area Strat -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="site_title">
                            <h3>Get in touch</h3>
                        </div>
                        <div class="contact-details">
                            <label>Corporate Office:</label>
                            <p class="mb-3">{!! $elementData['address_office'] ?? 'D65, Udyog Vihar Phase 5, Gurugram, Haryana, 122016' !!}</p>
                            <label>Showroom:</label>
                            <p class="mb-3">{!! $elementData['address_showroom'] ??
                                '18-3, Arjun Gali, Radhey Puri Extension, Krishna Nagar, New Delhi-110051' !!}</p>
                            <label>Phone No:</label>
                            <p class="mb-3"><a href="tel:{!! $elementData['mobile'] ?? '+91 882 635 4100' !!}"
                                    class="mb-2">{!! $elementData['mobile'] ?? '+91 882 635 4100' !!}</a></p>
                            <label>E-mail:</label>
                            <p class="mb-3"><a
                                    href="mailto:{!! $elementData['mail'] ?? 'sthirtacorp@gmail.com' !!}">{!! strip_tags($elementData['mail'] ?? 'sthirtacorp@gmail.com') !!}</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a
                                    href="mailto:{!! $elementData['mail_sales'] ?? 'sales1@sthirtacorp.in' !!}">{!! $elementData['mail_sales'] ?? 'sales1@sthirtacorp.in' !!}</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form-area mb-2">
                            <div class="contact-box_right_box">
                                <div class="contact-box_form_box">
                                    <form method="POST" action="">
                                        <!-- about section top title -->
                                        @csrf
                                        <div
                                            class="about-section_toptitle geox-section_toptitle our-section_toptitle contact-section_toptitle">
                                            <h3 class="webfixf">Take the next step</h3>
                                        </div>
                                        <!-- Sthirta Corpsection title -->
                                        <div
                                            class="about-section_title geox-section_title our-section_title contact-section_title">
                                            <h2 class="webfixf-in">Contact Us</h2>
                                        </div>
                                        <div class="contact-box_contant">
                                            <div class="contact-box_contant_g">
                                                <div class="contact-box_group">
                                                    <input type="text" name="first_name" placeholder="Frist Name" />
                                                </div>
                                                <div class="contact-box_group">
                                                    <input type="text" name="last_name" placeholder="Last Name" />
                                                </div>
                                            </div>
                                            <div class="contact-box_group">
                                                <input type="email" name="email" placeholder="Email Address" />
                                            </div>
                                            <div class="contact-box_group">
                                                <input type="text" name="company_name" placeholder="Company Address" />
                                            </div>

                                            <div class="contact-box_group">
                                                <input type="tel" name="phone_number" placeholder="Phone Number" />
                                            </div>
                                            <div class="contact-box_group">
                                                <textarea type="text" name="message" placeholder="Tell us more about your project, needs, and timelines"
                                                    rows="5"></textarea>
                                            </div>
                                            <div class="main-one">
                                                <div class="main-two">
                                                    <div class="col-md-12 col-sm-12 mb-3">
                                                        <label class="form-label" for="captcha">Captcha</label>
                                                        <span class="text-danger">*</span>
                                                        <input class="form-control" type="text" id="captcha"
                                                            label="Captcha" name="captcha" required="required"
                                                            placeholder="Captcha">
                                                    </div>
                                                </div>

                                                <div class="captcha-container"
                                                    style="display: flex;justify-content: center">
                                                    <div class="captcha-image mt-2">
                                                        <img src="{{ captcha_src() }}" class="img-thumbnail"
                                                            id="captcha_img_id">
                                                    </div>
                                                    <div class="captcha-refresh mt-2">
                                                        <button type="button" class="btn default-btns font-weight-bold"
                                                            onclick="refreshCapthca('captcha_img_id','captcha')">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                                                            </svg>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-box_group mt-2">
                                                <input type="submit" id="submitForm" name="submit" value="submit" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $("form").on("submit", function(e) {
                                        e.preventDefault();
                                        var form = new FormData(this);
                                        $.ajax({
                                            type: 'POST',
                                            url: '{{ route('saveContactUsDetails') }}',
                                            data: form,
                                            cache: false,
                                            contentType: false,
                                            processData: false,
                                            success: function(response) {
                                                alert("Thank for Contacting Us ,We will contact you shortly");
                                                window.location.reload();
                                                
                                            },
                                            error: function(xhr) {
                                                if (xhr.status === 422) {
                                                    const errors = xhr.responseJSON.errors;
                                                    const allMessages = Object.values(errors).flat().join('<br>');
                                                    alert(allMessages);
                                                } else {
                                                    alert("Something went wrong");
                                                }
                                            }
                                        });
                                    });
                                });

                                (function() {
                                    'use strict';
                                    window.addEventListener('load', function() {
                                        var forms = document.getElementsByClassName('needs-validation');
                                        var validation = Array.prototype.filter.call(forms, function(form) {
                                            form.addEventListener('submit', function(event) {
                                                if (form.checkValidity() === false) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }
                                                form.classList.add('was-validated');
                                            }, false);
                                        });
                                    }, false);
                                })();
                            </script>
                        </div>
                    </div>
                </div>
                <!-- Contact Area End -->
            </div>
        </div>
    </div>
    <div class="footer-map-section">
        <div class="map-item">
            {{-- <div class="map-item-detail">
            <label>Showroom:</label>
            <p class="mb-2">18-3, Arjun Gali, Radhey Puri Extension, Krishna Nagar, New Delhi-110051</p>
        </div> --}}
            <iframe
                src="{!! strip_tags($elementData['map_link'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.21175602761!2d77.2895794755536!3d28.653377575653426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb348efa70c3%3A0x276235369875fd54!2sSthirtaCorp%20Showroom!5e0!3m2!1sen!2sin!4v1711397939793!5m2!1sen!2sin')!!}"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
