@extends('layouts.webSite')
@section('title', ucfirst(strtolower($brandName)))
@section('meta_title')
    @if (!empty($metaTitle))
        {{$metaTitle}}
    @else
        {{ ucfirst(strtolower($brandName)) }} - SthirtaCorp India Solutions
    @endif
@endsection

{{-- Dynamic Meta Description --}}
@section('meta_description')
    @if (!empty($metaDescription))
        {{$metaDescription}}
    @else
        Explore the exclusive range of {{ ucfirst(strtolower($brandName)) }} products from SthirtaCorp.
    @endif
@endsection
@section('content')
    <!-- banner section -->
    <div class="about-banner">
        <div class="about-banner_image">
            <img src="{{ asset($bannerImage ? $bannerImage : 'assets/img/tostem/tostem-banner.png') }}" width=""
                height="" class="img-fluid" alt="img" />
        </div>
        <div class="about-banner_content">
            <div class="about-banner_text">
                <h3>{{ ucfirst(strtolower($brandName)) }}</h3>
                <p>{!! $description
                    ? $description
                    : `Our Journey, Our Values" invites you on a captivating voyage through our company's story.` !!}</p>
            </div>
        </div>
    </div>
    <!-- banner section -->
    <!-- about us extra section -->
    @if ($serviceData->isNotEmpty())
        @foreach ($serviceData as $index => $service)
            <section class="anout-exra {{ $index % 2 == 0 ? 'bg-white' : '' }}">
                <div class="anout-exra_wrapper {{ $index % 2 != 0 ? 'custom-container' : '' }}">
                    <div class="row align-items-center">
                        @if ($index % 2 == 0)
                            {{-- Text Left, Media Right --}}
                            <div class="col-md-6">
                                <div class="anout-exra_content_block">
                                    <div class="anout-exra_content">
                                        <h2>{{ $service->title }}</h2>
                                        {!! $service->description !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-0 pr-0">
                                <div class="anout-exra_img">
                                    @php
                                        $youtubeId = null;
                                        if ($service->video_link) {
                                            preg_match(
                                                '/(?:v=|\/embed\/|\.be\/)([a-zA-Z0-9_-]+)/',
                                                $service->video_link,
                                                $matches,
                                            );
                                            $youtubeId = $matches[1] ?? null;
                                        }
                                    @endphp

                                    @if ($youtubeId)
                                        <iframe width="100%" height="315"
                                            src="https://www.youtube.com/embed/{{ $youtubeId }}" frameborder="0"
                                            allowfullscreen></iframe>
                                    @else
                                        <img src="{{ asset($service->image) }}" class="img-fluid"
                                            alt="{{ $service->title }}">
                                    @endif
                                </div>
                            </div>
                        @else
                            {{-- Media Left, Text Right --}}
                            <div class="col-md-6 pl-0 pr-0">
                                <div class="anout-exra_img">
                                    @php
                                        $youtubeId = null;
                                        if ($service->video_link) {
                                            preg_match(
                                                '/(?:v=|\/embed\/|\.be\/)([a-zA-Z0-9_-]+)/',
                                                $service->video_link,
                                                $matches,
                                            );
                                            $youtubeId = $matches[1] ?? null;
                                        }
                                    @endphp

                                    @if ($youtubeId)
                                        <h1> present</h1>
                                        <iframe width="100%" height="315"
                                            src="https://www.youtube.com/embed/{{ $youtubeId }}" frameborder="0"
                                            allowfullscreen></iframe>
                                    @else
                                        <img src="{{ asset($service->image) }}" class="img-fluid"
                                            alt="{{ $service->title }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="anout-exra_content_block">
                                    <div class="anout-exra_content">
                                        <h2>{{ $service->title }}</h2>
                                        {!! $service->description !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @endforeach
    @else
        <section class="anout-exra bg-white">
            <div class="anout-exra_wrapper ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="anout-exra_content_block">
                            <div class="anout-exra_content">
                                <h2>Tostem</h2>
                                <h3>The global leader in pre-engineered window systems</h3>
                                <p>A better home is made up of surprisingly simple things – doors and windows that connect
                                    you with the world outside; interiors and exteriors that bring spaces to life.</p>
                                <p>Recognized as the industry leader, TOSTEM manufactures a comprehensive range of Window &
                                    Door solutions. With over 50 years of experience in developing innovative products that
                                    not only anticipates the needs of our society tomorrow, but equally meets the current
                                    needs of clients and consumers in different countries and climates.</p>

                                <h3>Leader in pre-engineered windows</h3>
                                <p>Last mile quality often takes a back seat in the rush to complete a project. One simple
                                    answer to the problem is to manufacture the entire window at the factory and only
                                    assemble it onsite. This ensures that installation time is compressed and last mile
                                    quality is also achieved. It is a well thought out Japanese innovation to suit the
                                    requirements of housing projects in countries like India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-0 pr-0">
                        <div class="anout-exra_img">
                            <img src="{{ asset('assets/img/tostem/tostem-grid.png') }}" width="" height=""
                                class="img-fluid" alt="Website" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="anout-exra">
            <div class="anout-exra_wrapper custom-container">
                <div class="row">
                    <div class="col-md-6 column-order mb-4">
                        <div class="anout-exra_content_block">
                            <div class="anout-exra_content">
                                <h2>Making better homes a reality for everyone, everywhere</h2>
                                <p>Every person on the planet dreams of a better home. LIXIL makes that possible with
                                    pioneering water and housing products. Born in 2011 through the merger of five of
                                    Japan's most successful building materials and housing companies, we draw on our
                                    Japanese heritage to create world-leading technology and high-quality products that
                                    transform homes. We make things that matter to all sorts of different people, to the
                                    many communities we are part of, and to sustainably support the world we live in. Today,
                                    our approach comes to life through some of the most trusted global brands in our
                                    industry, including TOSTEM, GROHE, American Standard, and INAX. We are proud that our
                                    products touch the lives of more than a billion people every day, but believe we have
                                    the potential to still do so much more.</p>
                                <div class="tostem-logo-group">
                                    <img src="{{ asset('assets/img/tostem/tostem-logo.png') }}" class="img-fluid"
                                        alt="Tostem" width="" height="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-0 pr-0">
                        <div class="anout-exra_img">
                            <img src="{{ asset('assets/img/tostem/group.jpg') }}" width="" height=""
                                class="img-fluid" alt="Website" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($serviceData->isNotEmpty())
        <section class="footer_document pt-2 pb-5 mt-3">
            <div class="custom-container">
                <div class="about-section_title pro-profile_title mb-4">
                    <h2 class="webfixf-in">{{ ucfirst(strtolower($brandName)) }} E Catalogue</h2>
                    {{-- <p class="webfixf">Premium aluminum doors & windows</p> --}}
                </div>
                <div class="footer_doc_link text-center">

                    {{-- @php
                        $noFileFound = $serviceData->every(function ($service) {
                            return !$service->files; 
                        });
                    @endphp
                    @foreach ($serviceData as $index => $service)
                        @if ($service->files)
                            <a href="{{ asset('brand_service_files/' . $service->files) }}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>{{ $service->title ?? 'View PDF' }}</span>
                            </a>
                        @endif
                    @endforeach
                    @if ($noFileFound)
                        <h5 style="color: rgb(131, 141, 186)">No File Found</h5>
                    @endif --}}
                    {{-- <a href="assets/img/pdf/tostem/tostem-e-catalogue-2021.pdf"><img src="assets/img/PDF_file_icon.png" height="" width="" class="img-fluid" alt="PDF"/><span>Tostem E Catalogue 2021</span></a> --}}

                    @switch($brandName)
                        @case('Lingel')
                            <a href="{{asset('lingel/LINGLE BROCHURE FINAL.pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>LINGLE BROCHURE FINAL</span>
                            </a>
                            <a href="{{asset('lingel/Velux Intro Flyer.pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>Velux Intro Flyer</span>
                            </a>
                            <a href="{{asset('lingel/Wintergarden -1_241127_193712.pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>Wintergarden </span>
                            </a>
                        @break

                        @case('TOTO')
                            <a href="{{asset('ToTo/Master_Catalogue_2024 (2).pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>Master Catalogue</span>
                            </a>
                        @break

                        @case('System Outdoors')
                            <a href="{{asset('systemPdf/Retract by Systems 2024.pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>Retract by Systems Catalogue</span>
                            </a>
                        @break

                        @case('VOX')
                            <a href="{{asset('vox/Infratop Catalog.pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>Infratop Catalogue</span>
                            </a>
                            <a href="{{asset('vox/Max 3 Catalog.pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>Max 3 Catalogue</span>
                            </a>
                            <a href="{{asset('vox/VOX FRONTO BROCHURE for Print.pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>FRONTO BROCHURE Catalogue</span>
                            </a>
                            <a href="{{asset('vox/VOX PPT - flooring.pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>Vox PPT</span>
                            </a>
                        @break

                        @case('Stonelam')
                            <a href="{{asset('storelam/Brochure 4-2-2025   116+4 low.pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>Stonelam Catalogue</span>
                            </a>
                        @break

                        @default
                            <h5 style="color: rgb(131, 141, 186)">Sthirta Site Pictures</h5>
                            <a href="{{asset('storelam/SITE PICTURES 2.pdf')}}" target="_blank">
                                <img src="{{ asset('assets/img/PDF_file_icon.png') }}" class="img-fluid" alt="PDF" />
                                <span>Sthirta Site </span>
                            </a>
                    @endswitch

                </div>

            </div>
        </section>
    @endif


    <!-- Tostem extra section -->
@endsection
