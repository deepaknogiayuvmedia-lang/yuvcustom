@extends('website.layout.websitemain')
@section('title', 'USA | ' . config('app.name'))
@section('content')

    <style>
        .domains .certlogosection {

            background-color: #ffffff6e;
            border-bottom: 5px solid var(--gmb-color) #568aef;
            padding: 0.5rem;
            border-radius: 10px;
            /* box-shadow: 0px 10px 5px #e9e5e5a3; */
            transition: 0.3s ease-in-out;
        }

        .domains .certlogosection img {
            width: 100px;
        }

        .fixed-button {
            position: fixed;
            bottom: 20px;
            right: 40%;
            z-index: 9999;
        }

        @media (max-width: 768px) {
            .fixed-button {
                bottom: 15px;
                right: 55px;
            }

            .entre {
                margin: 30px 0 10px 0;
            }

            .domains .certlogosection img {
                width: 80px;
            }

            .domains .subtitlecert {
                font-size: 14px;
            }
        }
    </style>

    <!--Hero Section Starts-->
    <canvas id="gradient-canvas"></canvas>
    <section class="hero-section pt-md-5">

        <div class="container">
            <div class="row py-md-3 pt-0">
                <div class="hero-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-md-6 hero-content">
                                <h1 class="heroheading fw-bolder globaltxtcolor">Reach Smarter, Engage Deeper & Scale </h1>
                                <h3 class="herosubheading fw-bolder">Faster With Integrated Media, Technology & Marketing
                                    Solutions</h3>
                                <div class="stats-section mt-3 mb-3">
                                    <div class="row ">
                                        <div class="col-md-12 stat-item d-none">
                                            <div class="text-md-start text-center">
                                                <p>5+ Years in Business | 7000+ Projects Delivered | 1000+ Happy Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start flex-md-row flex-column">
                                    <div class="mb-3 text-center">
                                        <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg">Schedule Your Free Consultation
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 hero-image">
                                <img src="{{ asset('assets/websiteAssets/images/techs/1.webp') }}" alt="Hero Image">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-md-6 hero-content">
                                <h1 class="globaltxtcolor heroheading fw-bolder text-capitalize">Build Scalable Digital
                                    Experiences With</h1>
                                <h3 class="herosubheading fw-bolder text-capitalize"> Custom Web & App Development Tailored
                                    for Business Growth</h3>
                                <div class="stats-section mt-3 mb-3">
                                    <div class="row ">
                                        <div class="col-md-12 stat-item d-none">
                                            <div class="text-md-start text-center">
                                                <p>5+ Years in Business | 7000+ Projects Delivered | 1000+ Happy Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start flex-md-row flex-column">
                                    <div class="mb-3 text-center ">
                                        <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg">Schedule Your Free Consultation
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 hero-image">
                                <img src="{{ asset('assets/websiteAssets/images/techs/2.webp') }}" alt="Hero Image">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-md-6 hero-content">
                                <h1 class="globaltxtcolor heroheading  fw-bolder text-capitalize">Maximize Your Brand Reach
                                    Across </h1>
                                <h3 class="herosubheading fw-bolder text-capitalize">E-Commerce Platforms With Marketplace
                                    Strategy & Automation</h3>
                                <div class="stats-section mt-3 mb-3">
                                    <div class="row ">
                                        <div class="col-md-12 stat-item d-none">
                                            <div class="text-md-start text-center">
                                                <p>5+ Years in Business | 7000+ Projects Delivered | 1000+ Happy Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start flex-md-row flex-column">
                                    <div class="mb-3 text-center ">
                                        <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg">Schedule Your Free Consultation
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 hero-image">
                                <img src="{{ asset('assets/websiteAssets/images/techs/3.webp') }}" alt="Hero Image">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-md-6 hero-content">
                                <h1 class="globaltxtcolor heroheading fw-bolder text-capitalize">Tell Powerful Brand Stories
                                    With </h1>
                                <h3 class="herosubheading fw-bolder text-capitalize">Visual Design, Motion Graphics &
                                    Production-Ready Videos</h3>
                                <div class="stats-section mt-3 mb-3">
                                    <div class="row ">
                                        <div class="col-md-12 stat-item d-none">
                                            <div class="text-md-start text-center">
                                                <p>5+ Years in Business | 7000+ Projects Delivered | 1000+ Happy Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start flex-md-row flex-column">
                                    <div class="mb-3 text-center ">
                                        <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg">Schedule Your Free Consultation
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 hero-image">
                                <img src="{{ asset('assets/websiteAssets/images/techs/4.webp') }}" alt="Hero Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div
                class="row hereBox bg-white py-md-3 py-1 mt-3 rounded-4 align-items-center border-primary border-start border-2">
                <div class=" d-flex align-items-center heretext">
                    <img src="{{ asset('assets/websiteAssets/images/navigatoinIcon.png') }}" alt="navigatoinIcon"
                        class="me-2">
                    I'm here for
                </div>
                <div class="col-lg-10 col-md-9 col-12">
                    <div class="d-flex justify-content-start action-btn">
                        <div id="servicestabs" class="owl-carousel">
                            <a href="{{ route('designingservices') }}">
                                Design
                            </a>
                            <a href="{{ route('socialmedia') }}">
                                Social Media Marketing
                            </a>
                            <a href="{{ route('webdevelopment') }}">
                                Web & App Development
                            </a>
                            <a href="{{ route('performancemedia') }}">
                                Performance Media
                            </a>
                            <a href="{{ route('videoproduction') }}">
                                Video Production
                            </a>
                            <a href="{{ route('performancemedia') }}">
                                Social Media
                            </a>
                            <a href="{{ route('seo') }}">
                                SEO
                            </a>
                            <a href="{{ route('marketplaceexpertise') }}">
                                Marketplace Management
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-end d-md-none hideInMobile">
                    <a href="#servicesanchor" class="text-secondary text-decoration-none">
                        //Find the best service for your business
                    </a>
                </div>

            </div>
        </div>


        <div class="container">
            <div class="row col-lg-12">

            </div>
            <div class="container mt-4 position-relative">
                <div class="row">
                    <h2 class="globaltxtcolor text-start fs-3">
                        Awards & Affiliations
                    </h2>
                    <div class="col-lg-12">
                        <div class="row g-3 justify-content-center mt-2">
                            <div class="col-6 col-md-3 col-lg-2 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/websiteAssets/images/certilogos/1.jpg') }}"
                                    class="img-fluid rounded-4" alt="Award 1">
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 d-flex align-items-center justify-content-center">
                                <a href="https://www.google.com/partners/agency?id=2709071831" target="_blank"><img
                                        src="{{ asset('assets/websiteAssets/images/certilogos/7.jpg') }}"
                                        class="img-fluid rounded-4" alt="Award 2"></a>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/websiteAssets/images/certilogos/3.jpg') }}"
                                    class="img-fluid rounded-4" alt="Award 4">
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/websiteAssets/images/certilogos/4.jpg') }}"
                                    class="img-fluid rounded-4" alt="Award 4">
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/websiteAssets/images/certilogos/5.jpg') }}"
                                    class="img-fluid rounded-4" alt="Award 5">
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/websiteAssets/images/certilogos/6.jpg') }}"
                                    class="img-fluid rounded-4" alt="Award 6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero Section Ends-->

    <section class="py-5 domains position-relative px-3">
        <div class="container">
            <div class="row">
                <div class="globaltxtcolor p-2">
                    Award-Winning Digital Marketing Company
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/forbes1-logo.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Forbes India</div>
                                <p class="subtitlecert">Best SEO Company</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/entrepreneur.webp') }}"
                                alt="service bg" class="img-fluid entre">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Entrepreneur</div>
                                <p class="subtitlecert">Top Digital Marketing Agency India</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/clutch.webp') }}" alt="service bg"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Clutch</div>
                                <p class="subtitlecert">Top Digital Marketing Agency</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/fitsmallbusiness.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Fit Small Business</div>
                                <p class="subtitlecert">Top Digital Marketing Agency</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/goodfirms.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Good Firms</div>
                                <p class="subtitlecert">Best SEO Company In India</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/plerdy.webp') }}" alt="service bg"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Plerdy</div>
                                <p class="subtitlecert">Top SEO Experts</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/g2.webp') }}" alt="service bg"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title fw-bold">G2</div>
                                <p class="subtitlecert">Best Local SEO Agency</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/software-world.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Software World</div>
                                <p class="subtitlecert">Best Marketing Consultant</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/clouds.webp') }}" alt="service bg"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Clouds Ways</div>
                                <p class="subtitlecert">Best SEO Company in World</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-start flex-md-row flex-column">
                <div class="mb-3 text-center">
                    <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg">Schedule Your Free Consultation
                        <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- services --}}
    <section>
        <div class="container py-5 ">
            <div class="row">
                <h2 class="globaltxtcolor text-start fs-3">
                    The YUV Framework: <span style=" -webkit-text-fill-color: black; font-weight: 500;"> Unified Digital
                        Solutions Across Digital Media, Technology & Marketing </span>
                </h2>
                <div class="text-start">
                    <p>
                        We transform your business through a connected ecosystem of creative design, smart development, and
                        strategic marketing. From AI-integrated SEO to scalable web solutions and media strategy, we align
                        every touchpoint to your brand’s growth journey.
                    </p>
                    <p>5+ Years in Business | 7000+ Projects Delivered | 1000+ Happy Clients</p>
                </div>
            </div>
            <div class="row hideInMobile">
                <div>
                    <div class=" service-space service-space--small"></div>
                    <div class="service-cards" id="servicesanchor">

                        {{-- Digital marketing --}}
                        <div class="service-card" data-index="0">
                            <div class="service-card__inner">
                                <div class="service-card__content bluePurpelGradient">
                                    <h1 class="service-card__title">Digital Marketing</h1>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-underline my-3" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="performance-tab" data-bs-toggle="tab"
                                                data-bs-target="#performance-tab-pane" type="button" role="tab"
                                                aria-controls="performance-tab-pane" aria-selected="true">Media Planning &
                                                Buying</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="seo-tab" data-bs-toggle="tab"
                                                data-bs-target="#seo-tab-pane" type="button" role="tab"
                                                aria-controls="seo-tab-pane" aria-selected="false">AI-Powered SEO</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="social-tab" data-bs-toggle="tab"
                                                data-bs-target="#social-tab-pane" type="button" role="tab"
                                                aria-controls="social-tab-pane" aria-selected="false">Strategic Social
                                                Media Growth</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="online-tab" data-bs-toggle="tab"
                                                data-bs-target="#online-tab-pane" type="button" role="tab"
                                                aria-controls="online-tab-pane" aria-selected="false">Earned
                                                Media</button>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        {{-- performance marketing --}}
                                        <div class="tab-pane active" id="performance-tab-pane" role="tabpanel"
                                            aria-labelledby="performance-tab" tabindex="0">
                                            <div class="d-flex my-3 justify-content-around pmarketing">
                                                <div class="card">
                                                    <a href="{{ route('performancemedia') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/google-ad.webp') }}"
                                                            class="card-img-top" alt="google-ad">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Google Ads</h6>
                                                            <p class="card-text text-black">
                                                                Run high-intent Google campaigns with smart bidding and
                                                                keyword-targeted ad placements.
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card">
                                                    <a href="{{ route('performancemedia') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/meta ad.webp') }}"
                                                            class="card-img-top" alt="Facebook Ads">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Meta Ads</h6>
                                                            <p class="card-text text-black">Unlock growth on Facebook,
                                                                Instagram, WhatsApp using conversion-led ad segmentation
                                                                tools.</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card">
                                                    <a href="{{ route('performancemedia') }}">

                                                        <img src="{{ asset('assets/websiteAssets/images/services/mgid.webp') }}"
                                                            class="card-img-top" alt="mgid">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Native Ads</h6>
                                                            <p class="card-text text-black">Use native ad placements for
                                                                low-cost customer acquisition with contextual targeting
                                                                strategy.</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card">
                                                    <a href="{{ route('performancemedia') }}">


                                                        <img src="{{ asset('assets/websiteAssets/images/services/marketplace ads.webp') }}"
                                                            class="card-img-top" alt="marketplace ads">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Marketplace Ads</h6>
                                                            <p class="card-text text-black">Promote your products on
                                                                Amazon, Ebay & more with automated marketplace ad
                                                                campaigns.
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- seo --}}
                                        <div class="tab-pane" id="seo-tab-pane" role="tabpanel"
                                            aria-labelledby="seo-tab" tabindex="0">
                                            <div class="d-flex my-3 justify-content-start pmarketing">
                                                <div class="card me-4">
                                                    <a href="{{ route('seo') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/SEO.webp') }}"
                                                            class="card-img-top" alt="SEO">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Semantic SEO Optimization</h6>
                                                            <p class="card-text text-black">Rank higher with NLP content,
                                                                schema, and audits designed for semantic search and Google
                                                                algorithms.</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card me-4">
                                                    <a href="{{ route('googlebusinessprofile') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/GBP.webp') }}"
                                                            class="card-img-top" alt="GBP">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Google Business Profile 3.0</h6>
                                                            <p class="card-text text-black">Boost local visibility via
                                                                AI-powered reviews, voice search ranking & advanced GBP
                                                                optimization tools.</p>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                        {{-- social media --}}
                                        <div class="tab-pane" id="social-tab-pane" role="tabpanel"
                                            aria-labelledby="social-tab" tabindex="0">
                                            <div class="d-flex my-3 justify-content-around pmarketing">
                                                <div class="card">
                                                    <a href="{{ route('socialmedia') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/FaceBook.webp') }}"
                                                            class="card-img-top" alt="Facebook">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Facebook</h6>
                                                            <p class="card-text text-black">Drive engagement with ad
                                                                creatives, retargeting, and community-focused content
                                                                strategies.
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card">
                                                    <a href="{{ route('socialmedia') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/Instagram.webp') }}"
                                                            class="card-img-top" alt="Instagram">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Instagram</h6>
                                                            <p class="card-text text-black">Boost reach and conversions
                                                                using reels, carousels, influencer content, and visual
                                                                storytelling.
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card">
                                                    <a href="{{ route('socialmedia') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/linkedIn.webp') }}"
                                                            class="card-img-top" alt="LinkedIn">
                                                        <div class="card-body">
                                                            <h6 class="card-title">LinkedIn</h6>
                                                            <p class="card-text text-black">Generate quality B2B leads
                                                                through thought leadership posts and targeted InMail ad
                                                                campaigns.
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card">
                                                    <a href="{{ route('socialmedia') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/youtube.webp') }}"
                                                            class="card-img-top" alt="Youtube">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Youtube</h6>
                                                            <p class="card-text text-black">Improve rankings with SEO
                                                                metadata and boost watch time using long-form video
                                                                storytelling.</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Online marketing --}}
                                        <div class="tab-pane" id="online-tab-pane" role="tabpanel"
                                            aria-labelledby="online-tab" tabindex="0">
                                            <div class="d-flex my-3 justify-content-start pmarketing">
                                                <div class="card me-4">
                                                    <a href="{{ route('influencermarketing') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/influncer marketing.webp') }}"
                                                            class="card-img-top" alt="Influencer Marketing">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Influencer Marketing</h6>
                                                            <p class="card-text text-black">Drive authentic engagement by
                                                                partnering with creators your audience already follows &
                                                                trusts.</p>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="card me-4">
                                                    <a href="{{ route('whatsappmarketing') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/whatsapp marketing.webp') }}"
                                                            class="card-img-top" alt="Whatsapp Marketing">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Whatsapp Marketing</h6>
                                                            <p class="card-text text-black">Use click-to-chat, catalog ads
                                                                & automation via official WhatsApp Business API for
                                                                conversions.
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="card me-4">
                                                    <a href="{{ route('emailmarketing') }}">
                                                        <img src="{{ asset('assets/websiteAssets/images/services/E-Mail.webp') }}"
                                                            class="card-img-top" alt="Email Marketing">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Email Marketing</h6>
                                                            <p class="card-text text-black">Automate lifecycle emails using
                                                                AI-tested subject lines & behavior-based audience
                                                                segmentation.
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Marketplace Management --}}
                        <div class="service-card" data-index="1">
                            <div class="service-card__inner">
                                <div class="service-card__content greenBLueGradient">
                                    <h1 class="service-card__title">Marketplace Management</h1>

                                    <div class="d-flex my-3 justify-content-around pmarketing">
                                        <div class="card">
                                            <a href="{{ route('marketplaceexpertise') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/amazon.webp') }}"
                                                    class="card-img-top" alt="Amazon">
                                                <div class="card-body">
                                                    <h6 class="card-title">Amazon</h6>
                                                    <p class="card-text text-black">Boost product sales with AI listing
                                                        optimization and ad strategies for high conversions.
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{ route('marketplaceexpertise') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/ebay.png') }}"
                                                    class="card-img-top" alt="Ebay">
                                                <div class="card-body">
                                                    <h6 class="card-title">Ebay</h6>
                                                    <p class="card-text text-black">Win the buy box and improve rankings
                                                        using SEO listings and competitive pricing tactics.
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{ route('marketplaceexpertise') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/wallmart.jpg') }}"
                                                    class="card-img-top" alt="Wallmart">
                                                <div class="card-body">
                                                    <h6 class="card-title">Wallmart</h6>
                                                    <p class="card-text text-black">Onboard fast with commission-based ads
                                                        and low-cost campaigns for rising marketplace sellers.
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{ route('marketplaceexpertise') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/Etsy.webp') }}"
                                                    class="card-img-top" alt="Etsy">
                                                <div class="card-body">
                                                    <h6 class="card-title">Etsy</h6>
                                                    <p class="card-text text-black">Stand out globally with SEO-rich
                                                        listings, brand storytelling, and creative product content.
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Graphic Design --}}
                        <div class="service-card" data-index="2">
                            <div class="service-card__inner">
                                <div class="service-card__content orangeGreenGradient">
                                    <h1 class="service-card__title">Design</h1>

                                    <div class="d-flex my-3 justify-content-start pdesgin">
                                        <div class="card me-4">
                                            <a href="{{ route('designingservices') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/Graphic-Design.webp') }}"
                                                    class="card-img-top" alt="Creative Designing">
                                                <div class="card-body">
                                                    <h6 class="card-title">Creative Designing</h6>
                                                    <p class="card-text text-black">Design scroll-stopping creatives that
                                                        boost conversions and reflect your unique brand identity.
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card me-4">
                                            <a href="{{ route('designingservices') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/ui ux.webp') }}"
                                                    class="card-img-top" alt="Video Production">
                                                <div class="card-body">
                                                    <h6 class="card-title">UI/UX Design
                                                    </h6>
                                                    <p class="card-text text-black">Build intuitive user flows with
                                                        wireframes, prototypes, and responsive UI for all screen sizes.</p>
                                                </div>
                                            </a>
                                        </div>

                                        {{-- <div class="card">
                                            <a href="{{ route('designingservices') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/branding1.webp') }}"
                                                    class="card-img-top" alt="Brand Designing">
                                                <div class="card-body">
                                                    <h6 class="card-title">Brand Designing</h6>
                                                    <p class="card-text text-black">Craft a memorable brand with visual
                                                        identity, scalable kits, and strategic storytelling tools.
                                                    </p>
                                                </div>
                                            </a>
                                        </div> --}}
                                    </div>


                                </div>
                            </div>
                        </div>

                        {{-- Video Production --}}
                        <div class="service-card" data-index="3">
                            <div class="service-card__inner">
                                <div class="service-card__content greenBLueGradient">
                                    <h1 class="service-card__title">Video Production</h1>

                                    <div class="d-flex my-3 justify-content-around pmarketing">
                                        <div class="card">
                                            <a href="{{ route('videoproduction') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/vfx compositing.jpg') }}"
                                                    class="card-img-top" alt="VFX & Compositing">
                                                <div class="card-body">
                                                    <h6 class="card-title">VFX & CGI Compositing</h6>
                                                    <p class="card-text text-black">Add cinematic depth with high-end
                                                        transitions and advanced CGI for impactful storytelling.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{ route('videoproduction') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/video editing.webp') }}"
                                                    class="card-img-top" alt="Video Editing">
                                                <div class="card-body">
                                                    <h6 class="card-title">Video Editing</h6>
                                                    <p class="card-text text-black">Create narrative edits with motion
                                                        graphics and ideal runtime for better viewer retention.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{ route('videoproduction') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/pre production.webp') }}"
                                                    class="card-img-top" alt="Pre-Production">
                                                <div class="card-body">
                                                    <h6 class="card-title">Pre-Production</h6>
                                                    <p class="card-text text-black">Plan scripts, storyboards, budgets &
                                                        logistics—complete creative prep under one workflow.
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{ route('videoproduction') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/3d animation.webp') }}"
                                                    class="card-img-top" alt="3D Animation & Modeling">
                                                <div class="card-body">
                                                    <h6 class="card-title">3D Animation & Modeling</h6>
                                                    <p class="card-text text-black">Design lifelike 3D models and animation
                                                        for product ads, explainers, games & social reels.
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        {{-- <div class="card">
                                            <a href="{{ route('videoproduction') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/color grading.webp') }}"
                                                    class="card-img-top" alt="Color Grading">
                                                <div class="card-body">
                                                    <h6 class="card-title">Color Grading</h6>
                                                    <p class="card-text text-black">Enhance brand visuals with consistent
                                                        tones and cinematic grading across all video formats.</p>
                                                </div>
                                            </a>
                                        </div> --}}

                                        {{-- <div class="card">
                                            <a href="{{ route('videoproduction') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/Product-Photoshoot.jpg') }}"
                                                    class="card-img-top" alt="Product Shoot">
                                                <div class="card-body">
                                                    <h6 class="card-title">Product Shoot</h6>
                                                    <p class="card-text text-black">Capture the Essence of Your Brand – We
                                                        ensure your
                                                        products look their best with top-tier photography, perfect for
                                                        e-commerce, marketing, and branding.</p>
                                                </div>
                                            </a>
                                        </div> --}}
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Development Services --}}
                        <div class="service-card" data-index="4">
                            <div class="service-card__inner">
                                <div class="service-card__content purpelYellowGradient">
                                    <h1 class="service-card__title">Development</h1>
                                    <div class="d-flex my-3 justify-content-around pmarketing">
                                        <div class="card">
                                            <a href="{{ route('webdevelopment') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/Web-Devlopment.webp') }}"
                                                    class="card-img-top" alt="Web Development">
                                                <div class="card-body">
                                                    <h6 class="card-title">Web Development</h6>
                                                    <p class="card-text text-black">Fast, responsive, SEO-optimized
                                                        websites with CMS integration & design system use.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{ route('webdevelopment') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/App-Devlopment.webp') }}"
                                                    class="card-img-top" alt="App Development">
                                                <div class="card-body">
                                                    <h6 class="card-title">App Development</h6>
                                                    <p class="card-text text-black">Cross-platform apps using Flutter,
                                                        React Native, and performance analytics.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{ route('webdevelopment') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/software-integration.png') }}"
                                                    class="card-img-top" alt="Software Integrations">
                                                <div class="card-body">
                                                    <h6 class="card-title">Software Integrations</h6>
                                                    <p class="card-text text-black">Seamlessly connect CRM, ERP, payment
                                                        systems & APIs into one ecosystem.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="{{ route('erpservices') }}">
                                                <img src="{{ asset('assets/websiteAssets/images/services/CRM.webp') }}"
                                                    class="card-img-top" alt="CRM (Odoo, Salesforce)">
                                                <div class="card-body">
                                                    <h6 class="card-title">ERP Solutions (Odoo, Salesforce)</h6>
                                                    <p class="card-text text-black">Optimize business workflows using
                                                        Salesforce, Odoo & custom dashboards.
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="service-space"></div> --}}
                </div>
            </div>

            <div class="row p-2 hideInDesktop">
                <div class="p-0">
                    <h1 class="service-card__title">Digital Marketing</h1>

                    <!-- Nav tabs -->
                    <ul class="nav nav-underline my-3 mobileNav" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="performance2-tab" data-bs-toggle="tab"
                                data-bs-target="#performance2-tab-pane" type="button" role="tab"
                                aria-controls="performance2-tab-pane" aria-selected="true">Media Planning &
                                Buying</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seo-tab2" data-bs-toggle="tab" data-bs-target="#seo-tab2-pane"
                                type="button" role="tab" aria-controls="seo-tab2-pane"
                                aria-selected="false">AI-Powered SEO</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="social-tab2" data-bs-toggle="tab"
                                data-bs-target="#social-tab2-pane" type="button" role="tab"
                                aria-controls="social-tab2-pane" aria-selected="false">Strategic Social Media
                                Growth</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="online-tab2" data-bs-toggle="tab"
                                data-bs-target="#online-tab2-pane" type="button" role="tab"
                                aria-controls="online-tab2-pane" aria-selected="false">Earned Media</button>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content px-0">
                        {{-- performance marketing --}}
                        <div class="tab-pane active" id="performance2-tab-pane" role="tabpanel"
                            aria-labelledby="performance2-tab" tabindex="0">
                            <div class="d-flex my-3 justify-content-around flex-wrap servicescards">
                                <div class="card">
                                    <a href="{{ route('performancemedia') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/google-ad.webp') }}"
                                            class="card-img-top" alt="google-ad">
                                        <div class="card-body">
                                            <h6 class="card-title">Google Ads</h6>
                                            <p class="card-text text-black">
                                                Run high-intent Google campaigns with smart bidding and keyword-targeted ad
                                                placements.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ route('performancemedia') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/meta ad.webp') }}"
                                            class="card-img-top" alt="Facebook Ads">
                                        <div class="card-body">
                                            <h6 class="card-title">Meta Ads</h6>
                                            <p class="card-text text-black">Unlock growth on Facebook, Instagram, WhatsApp
                                                using conversion-led ad segmentation tools.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ route('performancemedia') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/mgid.webp') }}"
                                            class="card-img-top" alt="mgid">
                                        <div class="card-body">
                                            <h6 class="card-title">Native Ads</h6>
                                            <p class="card-text text-black">Use native ad placements for low-cost customer
                                                acquisition with contextual targeting strategy.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ route('performancemedia') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/marketplace ads.webp') }}"
                                            class="card-img-top" alt="marketplace ads">
                                        <div class="card-body">
                                            <h6 class="card-title">Marketplace Ads</h6>
                                            <p class="card-text text-black">Promote your products on Amazon, Ebay & more
                                                with automated marketplace ad campaigns.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- seo --}}
                        <div class="tab-pane" id="seo-tab2-pane" role="tabpanel" aria-labelledby="seo-tab2"
                            tabindex="0">
                            <div class="d-flex my-3 justify-content-start flex-wrap servicescards">
                                <div class="card">
                                    <a href="{{ route('seo') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/SEO.webp') }}"
                                            class="card-img-top" alt="SEO">
                                        <div class="card-body">
                                            <h6 class="card-title">Semantic SEO Optimization</h6>
                                            <p class="card-text text-black">Rank higher with NLP content, schema, and
                                                audits designed for semantic search and Google algorithms.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ route('googlebusinessprofile') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/GBP.webp') }}"
                                            class="card-img-top" alt="GBP">
                                        <div class="card-body">
                                            <h6 class="card-title">Google Business Profile 3.0</h6>
                                            <p class="card-text text-black">Boost local visibility via AI-powered reviews,
                                                voice search ranking & advanced GBP optimization tools.</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                        {{-- social media --}}
                        <div class="tab-pane" id="social-tab2-pane" role="tabpanel" aria-labelledby="social-tab2"
                            tabindex="0">
                            <div class="d-flex my-3 justify-content-around flex-wrap servicescards">
                                <div class="card">
                                    <a href="{{ route('socialmedia') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/FaceBook.webp') }}"
                                            class="card-img-top" alt="Facebook">
                                        <div class="card-body">
                                            <h6 class="card-title">Facebook</h6>
                                            <p class="card-text text-black">Drive engagement with ad creatives,
                                                retargeting, and community-focused content strategies.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ route('socialmedia') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/Instagram.webp') }}"
                                            class="card-img-top" alt="Instagram">
                                        <div class="card-body">
                                            <h6 class="card-title">Instagram</h6>
                                            <p class="card-text text-black">Boost reach and conversions using reels,
                                                carousels, influencer content, and visual storytelling.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ route('socialmedia') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/linkedIn.webp') }}"
                                            class="card-img-top" alt="LinkedIn">
                                        <div class="card-body">
                                            <h6 class="card-title">LinkedIn</h6>
                                            <p class="card-text text-black">Generate quality B2B leads through thought
                                                leadership posts and targeted InMail ad campaigns.

                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ route('socialmedia') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/youtube.webp') }}"
                                            class="card-img-top" alt="Youtube">
                                        <div class="card-body">
                                            <h6 class="card-title">Youtube</h6>
                                            <p class="card-text text-black">Improve rankings with SEO metadata and boost
                                                watch time using long-form video storytelling.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Online marketing --}}
                        <div class="tab-pane" id="online-tab2-pane" role="tabpanel" aria-labelledby="online-tab2"
                            tabindex="0">
                            <div class="d-flex my-3 justify-content-start flex-wrap servicescards">
                                <div class="card ">
                                    <a href="{{ route('influencermarketing') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/influncer marketing.webp') }}"
                                            class="card-img-top" alt="Influencer Marketing">
                                        <div class="card-body">
                                            <h6 class="card-title">Influencer Marketing</h6>
                                            <p class="card-text text-black">Drive authentic engagement by partnering with
                                                creators your audience already follows & trusts.</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card ">
                                    <a href="{{ route('whatsappmarketing') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/whatsapp marketing.webp') }}"
                                            class="card-img-top" alt="Whatsapp Marketing">
                                        <div class="card-body">
                                            <h6 class="card-title">Whatsapp Marketing</h6>
                                            <p class="card-text text-black">Use click-to-chat, catalog ads & automation via
                                                official WhatsApp Business API for conversions.
                                            </p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card ">
                                    <a href="{{ route('emailmarketing') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/E-Mail.webp') }}"
                                            class="card-img-top" alt="Email Marketing">
                                        <div class="card-body">
                                            <h6 class="card-title">Email Marketing</h6>
                                            <p class="card-text text-black">Automate lifecycle emails using AI-tested
                                                subject lines & behavior-based audience segmentation.
                                            </p>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h1 class="service-card__title">Marketplace Management</h1>

                    <div class="d-flex my-3 justify-content-around flex-wrap servicescards">
                        <div class="card">
                            <a href="{{ route('marketplaceexpertise') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/amazon.webp') }}"
                                    class="card-img-top" alt="Amazon">
                                <div class="card-body">
                                    <h6 class="card-title">Amazon</h6>
                                    <p class="card-text text-black">Boost product sales with AI listing optimization and ad
                                        strategies for high conversions.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('marketplaceexpertise') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/ebay.png') }}"
                                    class="card-img-top" alt="Ebay">
                                <div class="card-body">
                                    <h6 class="card-title">Ebay</h6>
                                    <p class="card-text text-black">Win the buy box and improve rankings using SEO listings
                                        and competitive pricing tactics.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('marketplaceexpertise') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/wallmart.jpg') }}"
                                    class="card-img-top" alt="Wallmart">
                                <div class="card-body">
                                    <h6 class="card-title">Wallmart</h6>
                                    <p class="card-text text-black">Onboard fast with commission-based ads and low-cost
                                        campaigns for rising marketplace sellers.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('marketplaceexpertise') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/Etsy.webp') }}"
                                    class="card-img-top" alt="Etsy">
                                <div class="card-body">
                                    <h6 class="card-title">Etsy</h6>
                                    <p class="card-text text-black">Stand out globally with SEO-rich listings, brand
                                        storytelling, and creative product content.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <h1 class="service-card__title">Design</h1>

                    <div class="d-flex my-3 justify-content-start flex-wrap servicescards">
                        <div class="card">
                            <a href="{{ route('designingservices') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/Graphic-Design.webp') }}"
                                    class="card-img-top" alt="Creative Designing">
                                <div class="card-body">
                                    <h6 class="card-title">Creative Designing</h6>
                                    <p class="card-text text-black">Design scroll-stopping creatives that boost conversions
                                        and reflect your unique brand identity.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('designingservices') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/ui ux.webp') }}"
                                    class="card-img-top" alt="Video Production">
                                <div class="card-body">
                                    <h6 class="card-title">UI/UX Design
                                    </h6>
                                    <p class="card-text text-black">Build intuitive user flows with wireframes, prototypes,
                                        and responsive UI for all screen sizes.</p>
                                </div>
                            </a>
                        </div>

                        {{-- <div class="card">
                            <a href="{{ route('designingservices') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/branding1.webp') }}"
                                    class="card-img-top" alt="Brand Designing">
                                <div class="card-body">
                                    <h6 class="card-title">Brand Designing</h6>
                                    <p class="card-text text-black">Craft a memorable brand with visual identity, scalable kits, and strategic storytelling tools.
                                    </p>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>

                <div>
                    <h1 class="service-card__title">Video Production</h1>

                    <div class="d-flex my-3 justify-content-around flex-wrap servicescards">
                        <div class="card">
                            <a href="{{ route('videoproduction') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/vfx compositing.jpg') }}"
                                    class="card-img-top" alt="VFX & Compositing">
                                <div class="card-body">
                                    <h6 class="card-title">VFX & Compositing</h6>
                                    <p class="card-text text-black">Add cinematic depth with high-end transitions and
                                        advanced CGI for impactful storytelling.</p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('videoproduction') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/video editing.webp') }}"
                                    class="card-img-top" alt="Video Editing">
                                <div class="card-body">
                                    <h6 class="card-title">Video Editing</h6>
                                    <p class="card-text text-black">Create narrative edits with motion graphics and ideal
                                        runtime for better viewer retention</p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('videoproduction') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/pre production.webp') }}"
                                    class="card-img-top" alt="Pre-Production">
                                <div class="card-body">
                                    <h6 class="card-title">Pre-Production</h6>
                                    <p class="card-text text-black">Plan scripts, storyboards, budgets & logistics—complete
                                        creative prep under one workflow.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('videoproduction') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/3d animation.webp') }}"
                                    class="card-img-top" alt="3D Animation & Modeling">
                                <div class="card-body">
                                    <h6 class="card-title">3D Animation & Modeling</h6>
                                    <p class="card-text text-black">Design lifelike 3D models and animation for product
                                        ads, explainers, games & social reels.

                                    </p>
                                </div>
                            </a>
                        </div>
                        {{-- <div class="card">
                            <a href="{{ route('videoproduction') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/color grading.webp') }}"
                                    class="card-img-top" alt="Color Grading">
                                <div class="card-body">
                                    <h6 class="card-title">Color Grading</h6>
                                    <p class="card-text text-black">Enhance brand visuals with consistent tones and cinematic grading across all video formats.</p>
                                </div>
                            </a>
                        </div> --}}

                        {{-- <div class="card">
                            <a href="{{ route('videoproduction') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/Product-Photoshoot.jpg') }}"
                                    class="card-img-top" alt="Product Shoot">
                                <div class="card-body">
                                    <h6 class="card-title">Product Shoot</h6>
                                    <p class="card-text text-black">Capture the Essence of Your Brand – We ensure your
                                        products look their best with top-tier photography, perfect for
                                        e-commerce, marketing, and branding.</p>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>

                <div>
                    <h1 class="service-card__title">Development</h1>
                    <div class="d-flex my-3 justify-content-around flex-wrap servicescards">
                        <div class="card">
                            <a href="{{ route('webdevelopment') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/Web-Devlopment.webp') }}"
                                    class="card-img-top" alt="Web Development">
                                <div class="card-body">
                                    <h6 class="card-title">Web Development</h6>
                                    <p class="card-text text-black">Fast, responsive, SEO-optimized websites with CMS
                                        integration & design system use.</p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('webdevelopment') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/App-Devlopment.webp') }}"
                                    class="card-img-top" alt="App Development">
                                <div class="card-body">
                                    <h6 class="card-title">App Development</h6>
                                    <p class="card-text text-black">Cross-platform apps using Flutter, React Native, and
                                        performance analytics.</p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('webdevelopment') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/software-integration.png') }}"
                                    class="card-img-top" alt="Software Integrations">
                                <div class="card-body">
                                    <h6 class="card-title">Software Integrations</h6>
                                    <p class="card-text text-black">Seamlessly connect CRM, ERP, payment systems & APIs
                                        into one ecosystem.</p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('erpservices') }}">
                                <img src="{{ asset('assets/websiteAssets/images/services/CRM.webp') }}"
                                    class="card-img-top" alt="CRM (Odoo, Salesforce)">
                                <div class="card-body">
                                    <h6 class="card-title">ERP Solutions (Odoo, Salesforce)</h6>
                                    <p class="card-text text-black">Optimize business workflows using Salesforce, Odoo &
                                        custom dashboards.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- our work -->
    <section>
        <div class="container py-5 ">
            <div class="row">
                <div class="globaltxtcolor text-start ">
                    Our Work
                </div>
                <div class=" text-start fs-2 fw-bold">
                    Driving growth across every industry in the nation.
                </div>
                <div class="text-start">
                    <p>
                        We seek our thrill from making brands and businesses in diversified domains reach their right
                        audience.
                        With every conversion and each sale, we strive to set new standards for your business as well as
                        ourselves.
                    </p>
                </div>
            </div>

            <div class="container my-5 ourworkk">
                <div class="row align-items-center position-relative">
                    <!-- Left Video & Text -->
                    <div class="col-lg-8 video-wrapper">
                        {{-- <p class="section-text mb-3">
                            <span class="highlight">Creative</span> storytelling and branding.
                        </p> --}}
                        <video autoplay muted loop playsinline controls controlsList="nodownload">
                            <source
                                src="{{ asset('assets/websiteAssets/images/videos/YM_Reel_1.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Floating Video -->
                    <div class="col-lg-4 video-floating">
                        <video autoplay muted loop playsinline controls controlsList="nodownload">
                            <source src="{{ asset('assets/websiteAssets/images/videos/YM_Reel_2.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        {{-- <div class="section-text mt-2">
                            Flawless <span class="highlight">digital marketing</span> execution.
                        </div> --}}
                    </div>
                </div>
            </div>




            <div class="row industry">
                <div class="inds_cat_set owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1296px;">

                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can travel">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/travel.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Travel</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Tour and Travel" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/travel-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can trans">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/transportation.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Transportation</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Transportation" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/transportation-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can banking">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/banking.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Banking</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Banking" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/banking-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can healthc">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/healthcare.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Healthcare</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Healthcare" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/healthcare-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can enterta">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/entertainment.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Entertainment</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Entertainment" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/entertainment-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can educat">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/education.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Education</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img width="196" height="469" alt="Education"
                                                    src="assets/websiteAssets/images/businesses/education-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can business">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/business.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Business</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img width="196" height="469" alt="Business"
                                                    src="assets/websiteAssets/images/businesses/business-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can food">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/food.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Food</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img width="196" height="469" alt="Food"
                                                    src="assets/websiteAssets/images/businesses/food-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can job_car">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/job-career.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Job/Career</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Job Career" width="238" height="487"
                                                    src="assets/websiteAssets/images/businesses/job-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can fit_nes">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/fitness.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Fitness</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Life Style" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/fitness-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- Tech tools section --}}
    <section class="position-relative  technologies-sec aos-init aos-animate " data-aos-duration="1200"
        data-aos-delay="000">
        <div class="technical-stack-section">
            <div class="container">

                <div class="text-start globaltxtcolor">
                    Technologies We Use
                </div>
                <div class=" text-start fs-4 fw-bold ">
                    Your Growth, Backed by Smart Technology
                </div>
                <p class="pb-md-5">Building connected digital experiences through adaptive and AI-first technologies.</p>

                <div class="technical-stack-inn mt-5 mt-md-3">
                    <div class="technical-stack-main">
                        <div class="technical-main-div">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <div class="technical-main-mdl">
                                        <div class="technical-main-img aos-init aos-animate">
                                            <span>
                                                <img class="perfmatters-lazy entered pmloaded" data-ll-status="loaded"
                                                    src="{{ asset('assets/websiteAssets/images/technology-image.png') }}"
                                                    alt="technology-image">
                                            </span>
                                        </div>
                                        <div class="technical-tk-ul">
                                            <ul>
                                                <li class="frontend aos-init aos-animate" data-aos="fade-right">
                                                    <a href="javascript:;">Development</a>
                                                    <ul>
                                                        <li class="css3">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="laravel style"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/laravel.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/laravel.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="html5">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="react-native"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/react-native.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/react-native.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="javascript">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="javascript language"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/javascript-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/javascript-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="angular">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="android icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/android-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/android-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="react">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="android icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/react-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/react-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="less">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="flutter icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/flutter-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/flutter-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="jquery">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="ios icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/ios-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/ios-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="backend aos-init aos-animate" data-aos="fade-down">
                                                    <a href="javascript:;">Digital Marketing</a>
                                                    <ul>
                                                        <li class="php">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="Google-Analytics technology"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/Google-Analytics.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/Google-Analytics.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="codeigniter">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="ahrefs icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/ahrefs.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/ahrefs.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="drupal">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="HubSpot icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/HubSpot.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/HubSpot.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="joomla">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="Canva frameworks"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/Canva.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/Canva.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="laravel">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="Jasper development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/Jasper.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/Jasper.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="magento">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="buffer technology"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/buffer.webp"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/buffer.webp') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="mysql">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="Hootsuite language"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/Hootsuite.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/Hootsuite.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="nodejs">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="Meta development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/Meta.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/Meta.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="rubyonrails">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="SEMrush on rails"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/SEMrush.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/SEMrush.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="shopify">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="shopify development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/Mailchimp.webp"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/Mailchimp.webp') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mobile-app aos-init aos-animate" data-aos="fade-left">
                                                    <a href="javascript:;">Seller</a>
                                                    <ul>
                                                        <li class="android">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="Amazon development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/Amazon.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/Amazon.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="ios">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="flipkart development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/ebaylogo.webp"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/ebaylogo.webp') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="flutter">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="flutter development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/myntra.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/myntra.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="kotlin">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="walmartlogo"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/walmartlogo.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/walmartlogo.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="react-native">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="react native developers"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/Shiprocket.webp"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/Shiprocket.webp') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="swift">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="swift logo"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/nimbus.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/nimbus.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="ui-ux-design aos-init aos-animate" data-aos="fade-up">
                                                    <a href="javascript:;">Design</a>
                                                    <ul>

                                                        <li class="adobe-xd">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="adobe-xd "
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/adobe-xd-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/adobe-xd-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="illustrator">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="adobe illustrator logo"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/adobe-illustrator-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/adobe-illustrator-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="photoshop">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="adobe photoshop"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/adobe-photoshop-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/adobe-photoshop-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="figma">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="figma image"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/figma-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/figma-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="coraldraw">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="coraldraw"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/coraldraw.jpg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/coraldraw.jpg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="video-editing-logo aos-init aos-animate" data-aos="fade-up">
                                                    <a href="javascript:;">Video Production</a>
                                                    <ul>
                                                        <li class="adobe-premiere">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="adobe premiere"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/adobe_premiere_pro.webp"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/adobe_premiere_pro.webp') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="after-effects">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="after effects"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/adobe-after-effects.webp"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/adobe-after-effects.webp') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="final-cut-pro">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="final cut pro"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/blender3d.webp"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/blender3d.webp') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="canva-logo">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="nuke"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/nukelogo.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/nukelogo.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="davinci-logo">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="davinci"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/davinci_resolve.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/davinci_resolve.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3"></div>
                            </div>
                        </div>

                        <div class="technical-stack-ul">
                            <ul>
                                <li class="adobe-xd aos-init aos-animate" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="900">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="adobe xd image" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/adobe-xd-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/adobe-xd-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="android aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="600">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="android development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/Amazon.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/Amazon.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="angularjs aos-init aos-animate" data-aos="fade-left"
                                    data-aos-duration="1600" data-aos-delay="700">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="angular development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/android-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/android-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="aws aos-init aos-animate" data-aos="fade-right" data-aos-duration="1600"
                                    data-aos-delay="400">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="amazon " class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/amazon-web-services-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/amazon-web-services-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="codeigniter aos-init aos-animate" data-aos="fade-up"
                                    data-aos-duration="1600" data-aos-delay="800">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="ci image" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/ahrefs.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/ahrefs.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="css3 aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="500">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="css 3" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/laravel.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/laravel.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="drupal aos-init" data-aos="fade-left" data-aos-duration="1600"
                                    data-aos-delay="400">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="drupal development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/HubSpot.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/HubSpot.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="flutter aos-init aos-animate" data-aos="fade-right"
                                    data-aos-duration="1600" data-aos-delay="200">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="flutter development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/myntra.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/myntra.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="html5 aos-init" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="html 5 " class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/react-native.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/react-native.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="illustrator aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="000">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="illustrator" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/adobe-illustrator-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/adobe-illustrator-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="ios aos-init" data-aos="fade-left" data-aos-duration="1600"
                                    data-aos-delay="300">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="ios development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/ebaylogo.webp"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/ebaylogo.webp') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="shopify aos-init" data-aos="fade-right" data-aos-duration="1600"
                                    data-aos-delay="300">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="shopify development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/Mailchimp.webp"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/Mailchimp.webp') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="javascript aos-init" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="javascript" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/javascript-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/javascript-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="joomla aos-init aos-animate" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="200">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="joomla development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/Canva.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/Canva.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="jquery aos-init" data-aos="fade-left" data-aos-duration="1600"
                                    data-aos-delay="100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="jquery" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/ios-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/ios-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="kotlin aos-init" data-aos="fade-right" data-aos-duration="1600"
                                    data-aos-delay="500">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="kotlin " class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/walmartlogo.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/walmartlogo.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="laravel aos-init aos-animate" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="700">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="laravel developers" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/Jasper.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/Jasper.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="less aos-init aos-animate" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="400">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="less" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/flutter-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/flutter-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="magento aos-init aos-animate" data-aos="fade-left" data-aos-duration="1600"
                                    data-aos-delay="1000">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="magento" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/buffer.webp"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/buffer.webp') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="mongodb aos-init aos-animate" data-aos="fade-right"
                                    data-aos-duration="1600" data-aos-delay="1100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="mangodb" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/mongodb.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/mongodb.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="mysql aos-init" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="600">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="mysql" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/Hootsuite.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/Hootsuite.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="nodejs aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="500">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="nodejs " class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/Meta.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/Meta.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="photoshop aos-init aos-animate" data-aos="fade-left"
                                    data-aos-duration="1600" data-aos-delay="700">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="adobe photoshop" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/adobe-photoshop-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/adobe-photoshop-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="php aos-init" data-aos="fade-right" data-aos-duration="1600"
                                    data-aos-delay="800">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="php developers" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/Google-Analytics.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/Google-Analytics.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="react aos-init" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="400">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="react developers" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/react-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/react-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="react-native aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="300">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="react native developers" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/Shiprocket.webp"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/Shiprocket.webp') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="rubyonrails aos-init" data-aos="fade-left" data-aos-duration="1600"
                                    data-aos-delay="900">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="ruby on rails" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/SEMrush.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/SEMrush.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="swift aos-init aos-animate" data-aos="fade-right" data-aos-duration="1600"
                                    data-aos-delay="1000">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="swift" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/nimbus.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/nimbus.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="figma aos-init" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="figma" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/figma-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/figma-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="wordpress aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="00">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="wordpress development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/wordpress-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/wordpress-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                {{-- <li class="adobe-premiere aos-init aos-animate" data-aos="fade-up"
                                    data-aos-duration="1600" data-aos-delay="1100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="adobe premiere" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/adobe-premiere-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/adobe-premiere-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="after-effects aos-init aos-animate" data-aos="fade-down"
                                    data-aos-duration="1600" data-aos-delay="1200">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="after effects" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/after-effects-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/after-effects-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="final-cut-pro aos-init aos-animate" data-aos="fade-left"
                                    data-aos-duration="1600" data-aos-delay="1300">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="final cut pro" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/final-cut-pro-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/final-cut-pro-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="canva-logo aos-init aos-animate" data-aos="fade-right"
                                    data-aos-duration="1600" data-aos-delay="1400">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="canva logo" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/Canva.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/Canva.png') }}">
                                        </span>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    <!-- TESTIMONIALS -->
    <section class="testimonials py-5 bannerbg">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="globaltxtcolor">
                        Testimonials
                    </div>
                    <div class=" text-start fs-3 fw-bold">
                        Hear what scaling brands have to say.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div id="customers-testimonials" class="owl-carousel">

                        <!--TESTIMONIAL 1 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                </div>
                                <p class="pt-3">
                                    "We were struggling with online visibility until we partnered with Yuvmedia. Their team
                                    revamped our website and implemented a targeted social media strategy that brought in a
                                    steady flow of new patients. Their expertise and dedication are truly unmatched!"
                                </p>
                                <div class=" ">
                                    <div class="testimonial-name d-flex  ">
                                        {{-- <div class="me-2 ">
                                        <img class="img-circle rounded-pill" width="50px"
                                            src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                            alt="client">
                                    </div> --}}
                                        <div>
                                            <div class="author">Ravi Mehta</div>
                                            <div class="fs-6 text-secondary">Sharda Dental Care</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--END OF TESTIMONIAL 1 -->
                        <!--TESTIMONIAL 2 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                </div>
                                <p class="pt-3">
                                    "Yuvmedia helped us overcome scalability challenges with a personalized digital
                                    marketing approach. Their PPC campaigns and social media management were game-changers
                                    for our clinic. We’re now reaching a wider audience and seeing significant growth in
                                    lead generation."
                                </p>
                                <div class=" ">
                                    <div class="testimonial-name d-flex  ">
                                        {{-- <div class="me-2 ">
                                        <img class="img-circle rounded-pill" width="50px"
                                            src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                            alt="client">
                                    </div> --}}
                                        <div>
                                            <div class="author">Sonal Patel</div>
                                            <div class="fs-6 text-secondary">Parihar IVF</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--END OF TESTIMONIAL 2 -->
                        <!--TESTIMONIAL 3 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                </div>
                                <p class="pt-3">
                                    "We partnered with Yuvmedia for SEO and digital branding, and the results have been
                                    exceptional. Our organic traffic grew by 150%, and we’ve seen a dramatic improvement in
                                    patient inquiries. Their attention to detail and strategic planning really set them
                                    apart."
                                </p>
                                <div class=" ">
                                    <div class="testimonial-name d-flex  ">
                                        {{-- <div class="me-2 ">
                                        <img class="img-circle rounded-pill" width="50px"
                                            src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                            alt="client">
                                    </div> --}}
                                        <div>
                                            <div class="author">Arjun Verma</div>
                                            <div class="fs-6 text-secondary">Panch Kalyan Ayurveda</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--END OF TESTIMONIAL 3 -->
                        <!--TESTIMONIAL 4 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                </div>
                                <p class="pt-3">
                                    "Yuvmedia redesigned our website and implemented an effective SEO strategy that boosted
                                    our online presence. We’ve seen a 50% increase in organic traffic and much higher
                                    engagement with potential patients. Their team is knowledgeable and delivers results."
                                </p>
                                <div class=" ">
                                    <div class="testimonial-name d-flex  ">
                                        {{-- <div class="me-2 ">
                                        <img class="img-circle rounded-pill" width="50px"
                                            src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                            alt="client">
                                    </div> --}}
                                        <div>
                                            <div class="author">Neha Khanna</div>
                                            <div class="fs-6 text-secondary">Umedha Eye Hospital</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--END OF TESTIMONIAL 4 -->
                        <!--TESTIMONIAL 4 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                </div>
                                <p class="pt-3">
                                    "Yuvmedia transformed our digital presence. Thanks to their comprehensive SEO and
                                    digital strategy, we saw a 300% increase in search engine rankings. Their team is
                                    professional, responsive, and always a step ahead in anticipating our needs. Highly
                                    recommended!"
                                </p>
                                <div class=" ">
                                    <div class="testimonial-name d-flex  ">
                                        {{-- <div class="me-2 ">
                                        <img class="img-circle rounded-pill" width="50px"
                                            src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                            alt="client">
                                    </div> --}}
                                        <div>
                                            <div class="author">Anjali Sharma</div>
                                            <div class="fs-6 text-secondary">RK Hospital</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--END OF TESTIMONIAL 4 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF TESTIMONIALS -->

    {{-- <section class="contact_bg">
        <div class="container-fluid py-3 " style="background-color: #032A3E">
            <div class="container ">

                <div class="ms-lg-5 ps-lg-5 ms-md-2 ps-md-2 d-none">
                    <h1 class="text-white fw-bold">Contact us</h1>
                </div>
            </div>
        </div>
        <div class="container py-5 mb-md-5">

            <div class="row">
                <div class="col-lg-6 col-md-4" style="z-index: 10">
                    <div class="d-flex justify-content-start align-items-center h-100">

                        <p class="contact-msg fw-bold">
                            Let’s Talk
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="formcustomcard contactForm rounded-3 p-4 bg-white position-relative"
                        style="z-index: 10">
                        <div class="fw-bold mb-3">
                            Fill Out the form and we will
                            contact you
                        </div>
                        <div>
                            <form action="{{ route('send.inquiry') }}" id="contact-form" method="post">
                                @csrf
                                <div class="">
                                    <div class="card-body">
                                        <div class="row gy-4">
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label class="form-label">Your First Name <span
                                                            class="text-danger fs-5">*</span> </label>
                                                    <input type="text" name="username"
                                                        class="form-control customforminput"
                                                        placeholder="Enter Your First Name" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label class="form-label">Your Brand Name <span
                                                            class="text-danger fs-5">*</span> </label>
                                                    <input required type="text" name="brandname"
                                                        class="form-control customforminput"
                                                        placeholder="Enter Your Brand Name" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label class="form-label">Email <span
                                                            class="text-danger fs-5">*</span> </label>
                                                    <input required type="email" name="email"
                                                        class="form-control customforminput" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label class="form-label">Phone/Mobile <span
                                                            class="text-danger fs-5">*</span> </label>
                                                    <input type="tel" name="phone"
                                                        class="form-control customforminput"
                                                        placeholder="Enter Phone/Mobile" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label class="form-label">Your Website </label>
                                                    <input type="text" name="website"
                                                        class="form-control customforminput"
                                                        placeholder="Enter Your Website link">
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="labelid">Your Industry <span
                                                            class="text-danger fs-5">*</span> </label>
                                                    <select name="industry" class="form-select customforminput"
                                                        id="servicetypeid" required>
                                                        <option value="" selected>--select industry--</option>
                                                        <option value="Services">E-Commerce</option>
                                                        <option value="Consulting">Fantasy Games</option>
                                                        <option value="Consulting">Tour & Travel</option>
                                                        <option value="Consulting">Finance</option>
                                                        <option value="Consulting">Hospitality</option>
                                                        <option value="Consulting">Healthcare</option>
                                                        <option value="Consulting">Interior Designing & Architect</option>
                                                        <option value="Consulting">Education</option>
                                                        <option value="Consulting">Real E-State</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="labelid">Your Service <span
                                                            class="text-danger fs-5">*</span> </label>
                                                    <select name="servicedropdown" class="form-select customforminput"
                                                        id="servicetypeid" required>
                                                        <option value="" selected>--select service--</option>
                                                        <option value="SEO">SEO</option>
                                                        <option value="Social Media">Social Media</option>
                                                        <option value="Whatsapp Marketing">Whatsapp Marketing</option>
                                                        <option value="Video Production">Video Production</option>
                                                        <option value="Web Development">Web Development</option>
                                                        <option value="Designing Services">Designing Services</option>
                                                        <option value="Performance Media">Performance Media</option>
                                                        <option value="Marketplace Expertise">Marketplace Expertise
                                                        </option>
                                                        <option value="Influencer Marketing">Influencer Marketing</option>
                                                        <option value="Google Business Profile">Google Business Profile
                                                        </option>
                                                        <option value="ERP Services">ERP Services</option>
                                                        <option value="Email Marketing">Email Marketing</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="example-text-input" class="">Please tell about
                                                        your business </label>
                                                    <textarea class="form-control customforminput" placeholder="Please tell about your business" name="message"
                                                        type="textarea" rows="3" value="" id="example-text-input"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="formcustomcardfooter">
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn formbtn">Book a 30-minute Free
                                                Consultation</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}

    {{-- <section class="container pt-5 ">
        <h5 class="widget-title fs-3 fw-bold">Contact Us</h5>
        <div class="row widget widget-contact-info px-3">
            <div class="col-lg-4 col-md-6">
                <ul class="ps-0">
                    <h5 class="widget-title">For Support:</h5>
                    <li>
                        <a href="mailto://support@yuvmedia.com">support@yuvmedia.com</a>
                    </li>
                    <li>
                        <a href="tel://+918078671648">+91-8078671648</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <ul class="ps-0">
                    <h5 class="widget-title">For Sales:</h5>
                    <li>
                        <a href="mailto://sales@yuvmedia.com">sales@yuvmedia.com</a>
                    </li>
                    <li>
                        <a href="tel://+918824269821">+91-8824269821</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="widget-title">Address</h5>
                <div class="ps-0">
                    <h6>YUVNEXUS DIGITAL PRIVATE LIMITED</h6>
                    <p>B17, Second Floor, Above Royal Bakers, Glitz circle, Ramnagar Road,
                        Ajmer,
                        Rajasthan, 305001 </p>
                </div>
            </div>
        </div>


    </section> --}}


    <div class="fixed-button">
        <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg">
            Schedule Your Free Consultation <i class="bi bi-arrow-right"></i>
        </a>
    </div>


    <!-- stack effect  -->
    <script src="https://unpkg.com/aatjs/dist/aat.min.js"></script>
    <script>
        const {
            valueAtPercentage
        } = aat
        const ScrollObserver = aat.ScrollObserver
        const cardsContainer = document.querySelector('.service-cards')
        const cards = document.querySelectorAll('.service-card')
        cardsContainer.style.setProperty('--cards-count', cards.length)
        cardsContainer.style.setProperty(
            '--card-height', `${cards[0].clientHeight}px`
        )
        Array.from(cards).forEach((card, index) => {
            const offsetTop = 20 + index * 20
            card.style.paddingTop = `${offsetTop}px`
            if (index === cards.length - 1) {
                return
            }
            const toScale = 1 - (cards.length - 1 - index) * 0.1
            const nextCard = cards[index + 1]
            const cardInner = card.querySelector('.service-card__inner')
            ScrollObserver.Element(nextCard, {
                offsetTop,
                offsetBottom: window.innerHeight - card.clientHeight
            }).onScroll(({
                percentageY
            }) => {
                cardInner.style.scale = valueAtPercentage({
                    from: 1,
                    to: toScale,
                    percentage: percentageY
                })
                cardInner.style.filter = `brightness(${valueAtPercentage({
                from: 1,
                to: 0.6,
                percentage: percentageY
            })})`
            })
        })
    </script>



    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logo-slider").appendChild(copy);
    </script>

@endsection
