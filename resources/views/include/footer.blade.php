 <!-- footer section -->
 <footer>
     @php
         $elements = \App\Models\WebSiteElements::where('status', '1')->get();
         $elementData = $elements->pluck('element_details', 'element')->toArray();
         $brand = \App\Models\BrandPortfolio::where('status', 1)->get();
     @endphp
     <div class="footer-container">
         <div class="footer-wrapper row">
             <div class="col-md-4 mb-3 order-sm-0">
                 <div class="footer-wrapper_logo">
                     <a href="{{ url('/') }}" aria-label="SthirtaCorp"><img src="{!! asset($elementData['logo'] ?? 'assets/img/logo.png') !!}"
                             alt="logo" /></a>
                 </div>
                 <div class="footer-wrapper_box_title">
                     <h3>Subscribe for Periodic Updates</h3>
                     <p>Receive news, announcements and reports</p>
                 </div>
                 <div class="footer-wrapper_box_form mb-3">
                     <form id="formsubmit">
                         @csrf
                         <div class="subscription_box">
                             <input type="email" name="email" placeholder="E-mail ID" required>

                             <div class="action_sub">
                                 <input type="submit" value="Update me" style="height: 42px" />
                             </div>
                             <div class="main-one">
                                <div class="captcha-row">
                                  <div class="captcha-input">
                                    <input class="form-control" type="text" id="captcha" label="Captcha"
                                      name="captcha" required="required" placeholder="Captcha">
                                  </div>
                                  
                                  <div class="captcha-image">
                                    <img src="{{ captcha_src() }}" class="img-thumbnail" id="captcha_img_id" alt="Captcha image">
                                  </div>
                                  
                                  <div class="captcha-refresh">
                                    <button type="button" class="refresh-btn"
                                      onclick="refreshCapthca('captcha_img_id','captcha')">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                        <path
                                          d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                                        <path fill-rule="evenodd"
                                          d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                                      </svg>
                                    </button>
                                  </div>
                                </div>
                              </div>

                         </div>
                     </form>
                     <script>
                         $(document).ready(function() {
                             $("#formsubmit").on("submit", function(e) {
                                 e.preventDefault();
                                 var form = new FormData(this);
                                 $.ajax({
                                     type: 'POST',
                                     url: '{{ route('saveSubscribe') }}',
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
                     </script>
                 </div>
                 <div class="footer-followus">
                     <span>Follow Us</span>
                     <span><a href="{!! strip_tags($elementData['facebook_link'] ?? 'https://www.facebook.com/Sthirtacorp/') !!}" target="_blank"
                             aria-label="Read more about Sthirta Corp facebook">
                             <i class="fa fa-facebook"></i>
                         </a></span>
                     <span><a href="{!! strip_tags($elementData['instagram_link'] ?? 'https://www.instagram.com/sthirtacorp/?hl=en') !!}" target="_blank"
                             aria-label="Read more about Sthirta Corp Instagram"><i
                                 class="fa fa-instagram"></i></a></span>
                     <span><a href="{!! strip_tags($elementData['linkedin_link'] ?? 'https://www.linkedin.com/in/sthirta-corp-a47591226') !!}" target="_blank"
                             aria-label="Read more about Sthirta Corp Linkedin"><i
                                 class="fa fa-linkedin"></i></a></span>
                     <span><a href="{!! strip_tags($elementData['youtube_link'] ?? 'https://www.youtube.com/@sthirtacorp') !!}" target="_blank"
                             aria-label="Read more about Sthirta Corp Youtube"><i
                                 class="fa fa-youtube-play"></i></a></span>
                     <span><a href="https://wa.me/{!! strip_tags($elementData['whatsapp_number'] ?? '+918826354100') !!}" target="_blank"
                             aria-label="Read more about Sthirta Corp WhatsApp"><i
                                 class="fa fa-whatsapp"></i></a></span>
                 </div>

             </div>
             <div class="col-md-2 col-6 mb-3 text-left">
                 <div class="footer-wrapper_box">
                     <div class="footer-wrapper_box_title">
                         <h3>Navigations</h3>
                     </div>
                     <ul class="footer-wrapper_box_list">
                         @foreach ($brand as $item)
                             <li><a href="{{ route('product-brand', [$item->slug]) }}">{{ $item->title }}</a></li>
                         @endforeach
                     </ul>
                 </div>
             </div>
             <div class="col-md-2 col-6 mb-3 text-left">
                 <div class="footer-wrapper_box">
                     <div class="footer-wrapper_box_title">
                         <h3>Quick Links</h3>
                     </div>
                     <ul class="footer-wrapper_box_list">
                         <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                         <li><a href="{{ route('galleryPages') }}">Gallery</a></li>
                         {{-- <li><a href="{{ url('/') }}">Terms &amp; Conditions</a></li> --}}
                         <li><a href="{{ url('/') }}">Privacy Policy</a></li>
                         <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                         {{-- <li><a href="{{ url('/') }}">Cancellation & refund policy</a></li> --}}
                         {{-- <li><a href="{{ url('/') }}">Shipping & delivery policy</a></li> --}}
                     </ul>
                 </div>
             </div>
             <div class="col-md-4 mb-3 order-sm-1 text-left">
                 <div class="footer-wrapper_box">
                     <div class="footer-wrapper_box_title">
                         <h3>Contact Us</h3>
                     </div>
                     <div class="footer-wrapper_box_add">
                         <label>Corporate Office:</label>
                         <p class="mb-2">{!! $elementData['address_office'] ?? 'D65, Udyog Vihar Phase 5, Gurugram, Haryana, 122016' !!}</p>
                         <label>Showroom:</label>
                         <p class="mb-2">{!! $elementData['address_showroom'] ??
                             '18-3, Arjun Gali, Radhey Puri Extension, Krishna Nagar, New Delhi-110051' !!}</p>
                         <label>Phone No:</label>
                         <p><a href="tel:{!! $elementData['mobile'] ?? '+91 882 635 4100' !!}" class="mb-2">{!! $elementData['mobile'] ?? '+91 882 635 4100' !!}</a></p>
                         <label>E-mail:</label>
                         <p class="mail"><a
                                 href="mailto:{!! $elementData['mail'] ?? 'sthirtacorp@gmail.com' !!}">{!! strip_tags($elementData['mail'] ?? 'sthirtacorp@gmail.com') !!}</a>
                                 {{-- &nbsp;&nbsp;/&nbsp;&nbsp;
                             <a href="mailto:{!! $elementData['mail_sales'] ?? 'sales1@sthirtacorp.in' !!}">{!! $elementData['mail_sales'] ?? 'sales1@sthirtacorp.in' !!}</a> --}}
                         </p>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </footer>
 <style>
     .mail a {
         display: inline !important;
         white-space: nowrap;
     }
 </style>
 <!-- footer section -->
 <!-- footer strip section -->
 <section class="fooeter-strip">
     <div class="fooeter-strip_container">
         <p class="text-center">&copy;
             <script>
                 document.write(new Date().getFullYear());
             </script> All Rights Reserved by Sthirta Corp Pvt. Ltd. & Developed by <a
                 href="https://www.vyaparkranti.com">Vyapar kranti</a>
         </p>
     </div>
 </section>
 <!-- footer strip section -->
 <input id="enquiry" hidden type="checkbox" />
 <section class="enquiry-form">
     <label for="enquiry" class="enquiry-button">Enquire now</label>
     <div class="enquiry-container">
         <div class="contact-box_right_box">
             <div class="contact-box_form_box">
                 <form enctype="multipart/form-data" method="POST" id="contactUsForm" action="javascript:">
                     @csrf
                     <!-- about section top title -->
                     <div
                         class="about-section_toptitle geox-section_toptitle our-section_toptitle contact-section_toptitle">
                         <h3 class="webfixf">Take the next step</h3>
                     </div>
                     <!-- Sthirta Corpsection title -->
                     <div class="about-section_title geox-section_title our-section_title contact-section_title">
                         <h2 class="webfixf-in">Enquire now</h2>
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
                             <input type="text" name="company_name" placeholder="Site Address" />
                         </div>

                         <div class="contact-box_group">
                             <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" />
                         </div>
                         <div class="contact-box_group">
                             <textarea type="text" name="message" placeholder="Tell us more about your project, needs, and timelines"
                                 rows="5"></textarea>
                         </div>
                         <div class="contact-box_contant_g">
                             <div class="contact-box_group">
                                 <input type="text" id="captcha" type="text" label="Captcha" name="captcha"
                                     required placeholder="Captcha" />
                             </div>
                             <div class="contact-box_group">
                                 <div class="row p-0">
                                     <div class="col-md-9">
                                         <img src="{{ captcha_src() }}" class="img-thumbnail h-100"
                                             id="captcha_id"/>
                                     </div>
                                     <div class="col-md-3 p-0">
                                         <button type="button"
                                             class="btn default-btn btn-block font-weight-bold btn-dark"
                                             onclick="refreshCapthca('captcha_id','captcha')">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                                 <path
                                                     d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                                                 <path fill-rule="evenodd"
                                                     d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                                             </svg>
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="contact-box_group">
                             <input type="submit" name="submit" value="submit" />
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
     <style>
        .captcha-row {
          display: flex;
          align-items: center;
          gap: 10px;
          margin-top: 10px;
        }
        
        .captcha-input {
          flex: 1;
        }
        
        .captcha-image {
          display: flex;
          align-items: center;
        }
        
        .captcha-refresh {
          display: flex;
          align-items: center;
        }
        
        .refresh-btn {
          background-color: white;
          border: 1px solid #dee2e6;
          padding: 6px 12px;
          border-radius: 4px;
        }
      </style>
 </section>
 </div>
