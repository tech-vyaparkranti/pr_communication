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

    <a href="#" class="compact-enquiry-btn" data-bs-toggle="modal" data-bs-target="#compactEnquiryModal">
        <i class="fas fa-envelope"></i>
        <span>Enquire</span>
    </a>

    <!-- Right-Sliding Enquiry Modal -->
    <div class="modal slide-right fade" id="compactEnquiryModal" tabindex="-1" aria-labelledby="compactEnquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content compact-modal-content">
                <div class="modal-header compact-modal-header">
                    <div>
                        <div class="compact-section-subtitle">
                            <h6>Get In Touch</h6>
                        </div>
                        <div>
                            <h5 class="modal-title compact-modal-title" id="compactEnquiryModalLabel">Quick Enquiry</h5>
                        </div>
                    </div>
                    <button type="button" class="btn-close compact-close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body compact-modal-body">
                    <form enctype="multipart/form-data" method="POST" id="compactContactForm">
                        <div class="compact-form-row">
                            <div>
                                <input type="text" name="first_name" class="compact-form-input" placeholder="First Name" required />
                            </div>
                            <div>
                                <input type="text" name="last_name" class="compact-form-input" placeholder="Last Name" required />
                            </div>
                        </div>

                        <div class="compact-form-group">
                            <input type="email" name="email" class="compact-form-input" placeholder="Email Address" required />
                        </div>

                        <div class="compact-form-group">
                            <input type="text" name="company_name" class="compact-form-input" placeholder="Company Name" />
                        </div>

                        <div class="compact-form-group">
                            <input type="tel" name="phone_number" id="compactPhoneNumber" class="compact-form-input" placeholder="Phone Number" required />
                        </div>

                        <div class="compact-form-group">
                            <textarea name="message" class="compact-form-textarea" placeholder="Brief message" rows="3" required></textarea>
                        </div>

                        <div class="compact-captcha-section">
                            <div>
                                <input type="text" id="compactCaptcha" name="captcha" class="compact-form-input" required placeholder="Enter Code" />
                            </div>
                            <div class="compact-captcha-display">
                                <div class="compact-captcha-code" id="compactCaptchaDisplay">
                                    ABC123
                                </div>
                                <button type="button" class="compact-refresh-btn" onclick="refreshCompactCaptcha()">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </div>
                        </div>

                        <div class="compact-button-row">
                            <button type="button" class="compact-cancel-btn" data-bs-dismiss="modal">
                                <i class="fas fa-times me-1"></i>Cancel
                            </button>
                            <button type="submit" class="compact-submit-btn">
                                <i class="fas fa-paper-plane me-1"></i>Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Alert -->
    {{-- <div class="alert alert-success alert-dismissible fade compact-success-alert" role="alert" id="compactSuccessAlert">
        <i class="fas fa-check-circle me-2"></i>
        <strong>Success!</strong> Your enquiry has been submitted.
        <button type="button" class="btn-close" onclick="hideCompactAlert()"></button>
    </div> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        // Generate random captcha
        function generateCompactCaptcha() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let captcha = '';
            for (let i = 0; i < 5; i++) {
                captcha += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            return captcha;
        }

        // Current captcha value
        let compactCurrentCaptcha = generateCompactCaptcha();
        document.getElementById('compactCaptchaDisplay').textContent = compactCurrentCaptcha;

        // Refresh captcha function
        function refreshCompactCaptcha() {
            compactCurrentCaptcha = generateCompactCaptcha();
            document.getElementById('compactCaptchaDisplay').textContent = compactCurrentCaptcha;
            document.getElementById('compactCaptcha').value = '';
        }

        // Form submission
        document.getElementById('compactContactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const captchaInput = document.getElementById('compactCaptcha').value;

            // Validate captcha
            if (captchaInput !== compactCurrentCaptcha) {
                alert('Captcha code is incorrect. Please try again.');
                refreshCompactCaptcha();
                return;
            }

            // Validate required fields
            const firstName = formData.get('first_name');
            const lastName = formData.get('last_name');
            const email = formData.get('email');
            const phone = formData.get('phone_number');
            const message = formData.get('message');

            if (!firstName || !lastName || !email || !phone || !message) {
                alert('Please fill in all required fields.');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Phone validation
            const phoneRegex = /^[\+]?[1-9][\d]{9,15}$/;
            if (!phoneRegex.test(phone.replace(/\s/g, ''))) {
                alert('Please enter a valid phone number.');
                return;
            }

            // Simulate form submission
            console.log('Compact form submitted with data:', {
                first_name: firstName,
                last_name: lastName,
                email: email,
                company_name: formData.get('company_name'),
                phone_number: phone,
                message: message,
                captcha: captchaInput
            });

            // Close modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('compactEnquiryModal'));
            modal.hide();

            // Show success message
            showCompactSuccessAlert();

            // Reset form and captcha
            this.reset();
            refreshCompactCaptcha();
        });

        function showCompactSuccessAlert() {
            const alert = document.getElementById('compactSuccessAlert');
            alert.style.display = 'block';
            alert.classList.add('show');

            // Auto hide after 4 seconds
            setTimeout(() => {
                hideCompactAlert();
            }, 4000);
        }

        function hideCompactAlert() {
            const alert = document.getElementById('compactSuccessAlert');
            alert.classList.remove('show');
            setTimeout(() => {
                alert.style.display = 'none';
            }, 150);
        }

        // Button hover effect
        const compactEnquiryBtn = document.querySelector('.compact-enquiry-btn');
        const compactOriginalText = compactEnquiryBtn.innerHTML;

        compactEnquiryBtn.addEventListener('mouseenter', function() {
            this.innerHTML = '<i class="fas fa-paper-plane"></i><span>Click!</span>';
        });

        compactEnquiryBtn.addEventListener('mouseleave', function() {
            this.innerHTML = compactOriginalText;
        });

        // Initialize captcha on page load
        window.addEventListener('load', function() {
            refreshCompactCaptcha();
        });
    </script>
</footer>

<div class="copyright-section text-center p-3">&copy; <script>document.write( new Date().getFullYear() );</script>{{ isset($WebSetting['0']->copyright_txt) ? $WebSetting['0']->copyright_txt : '© 2024 All Rights Reserved by RNcommunication ' }}   & Developed by <a href="https://vyaparkranti.com/" class="text-white" aria-label="Digital Markating" alt="Vyapar Kranti">Vyapar kranti</a></div>
<!-- Footer Section End-->
<style>
        /* Demo content */
        .demo-page-content {
            height: 120vh;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .demo-page-content h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 3rem;
            font-weight: bold;
        }

        .demo-page-content p {
            color: #666;
            font-size: 18px;
            max-width: 600px;
            line-height: 1.6;
        }

        /* Floating Enquiry Button */
         .compact-enquiry-btn {
    position: fixed;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
    background: linear-gradient(135deg, #ff6b35, #f7931e);
    border: none;
    border-radius: 50px 0 0 50px; /* Only round left corners */
    padding: 12px 24px 12px 16px; /* More padding on right to account for edge */
    color: white;
    font-weight: bold;
    font-size: 14px;
    box-shadow: 0 4px 20px rgba(255, 107, 53, 0.4);
    cursor: pointer;
    transition: all 0.3s ease;
    animation: compact-pulse 3s infinite;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
     /* Vertical text from right to left */
    text-orientation: mixed;
    white-space: nowrap;
    margin-right: -1px; /* Slightly overlap edge */
}

/* Hover effect */
.compact-enquiry-btn:hover {
    right: 4px; /* Slide out slightly on hover */
    box-shadow: 0 6px 25px rgba(255, 107, 53, 0.5);
}

/* Optional: Adjust icon positioning */
.compact-enquiry-btn .icon {
    transform: rotate(90deg);
}

        /* .compact-enquiry-btn:hover {
            transform: translateY(-50%) scale(1.05);
            box-shadow: 0 6px 25px rgba(255, 107, 53, 0.6);
            color: white;
            text-decoration: none;
        } */

        @keyframes compact-pulse {
            0% {
                box-shadow: 0 4px 20px rgba(255, 107, 53, 0.4);
            }
            50% {
                box-shadow: 0 4px 30px rgba(255, 107, 53, 0.7);
            }
            100% {
                box-shadow: 0 4px 20px rgba(255, 107, 53, 0.4);
            }
        }

        /* Right-sliding Modal */
        .modal.slide-right .modal-dialog {
            position: fixed;
            right: 0;
            top: 0;
            height: 100vh;
            margin: 0;
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }

        .modal.slide-right.show .modal-dialog {
            transform: translateX(0);
        }

        .compact-modal-content {
            border-radius: 0;
            border: none;
            height: 100vh;
            overflow-y: auto;
            max-width: 500px;
            min-width: 400px;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        }

        .compact-modal-header {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            color: white;
            border-bottom: none;
            padding: 20px;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .compact-modal-title {
            font-weight: bold;
            font-size: 1.25rem;
            margin: 0;
        }

        .compact-close-btn {
            filter: invert(1);
            font-size: 1.2rem;
        }

        .compact-modal-body {
            padding: 30px 20px;
            background: white;
        }

        /* Form Styling */
        .compact-form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }

        .compact-form-group {
            margin-bottom: 20px;
        }

        .compact-form-input,
        .compact-form-textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        .compact-form-input:focus,
        .compact-form-textarea:focus {
            outline: none;
            border-color: #ff6b35;
            background-color: white;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.15);
        }

        .compact-captcha-section {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 15px;
            align-items: center;
            margin-bottom: 20px;
        }

        .compact-captcha-display {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .compact-captcha-code {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 12px 16px;
            border-radius: 8px;
            font-family: monospace;
            font-weight: bold;
            color: #333;
            min-width: 90px;
            text-align: center;
            font-size: 16px;
            border: 2px solid #dee2e6;
        }

        .compact-refresh-btn {
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .compact-refresh-btn:hover {
            background: linear-gradient(135deg, #495057, #343a40);
            transform: translateY(-1px);
        }

        /* Button Layout */
        .compact-button-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 30px;
        }

        .compact-submit-btn {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px 24px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .compact-cancel-btn {
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px 24px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .compact-submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        }

        .compact-cancel-btn:hover {
            background: linear-gradient(135deg, #495057, #343a40);
            transform: translateY(-2px);
        }

        /* Section titles */
        .compact-section-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 12px;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .compact-section-title {
            color: #ff6b35;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        /* Success Alert */
        .compact-success-alert {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            display: none;
            max-width: 350px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 5px 20px rgba(25, 135, 84, 0.3);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .compact-enquiry-btn {
                right: 15px;
                padding: 10px 16px;
                font-size: 12px;
            }

            .compact-modal-content {
                min-width: 100vw;
                max-width: 100vw;
            }

            .compact-form-row,
            .compact-captcha-section,
            .compact-button-row {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .compact-modal-body {
                padding: 20px 15px;
            }

            .demo-page-content h1 {
                font-size: 2rem;
            }
        }

        /* Custom backdrop for right slide */
        .modal.slide-right .modal-backdrop {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .modal.slide-right.show .modal-backdrop {
            opacity: 0.5;
        }
    </style>
