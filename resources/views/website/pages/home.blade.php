@extends('website.layout.websitemain')
@section('title', 'Home | ' . config('app.name'))
@section('content')

<!-- happy diwali -->
<style>
    #startFireworksBtn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
        font-size: 1.2rem;
        padding: 0.6rem 1rem;
        cursor: pointer;
        background: #ff0;
        border: 2px solid #000;
        border-radius: 8px;
    }

    .firework-rocket {
        position: absolute;
        bottom: 0;
        width: 8px;
        height: 8px;
        transform: translateX(0);
        pointer-events: none;
    }

    .firework-rocket-inner {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        margin-left: 2px;
    }

    .firework-spark {
        position: absolute;
        width: 4px;
        height: 4px;
        border-radius: 2px;
        pointer-events: none;
        opacity: 0.8;
    }

    .firework-fragment {
        position: absolute;
        width: 6px;
        height: 6px;
        border-radius: 3px;
        opacity: 0.9;
        pointer-events: none;
    }




    .fireworks {
        list-style-type: none;
        padding: 0;

        li {
            display: inline-block;
            margin: 20px;
            height: 50px;
            width: 50px;
            border-radius: 500px;
            position: relative;
            background-color: #8D6E63;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);

            &::before {
                content: "";
                position: absolute;
                height: 100%;
                background-color: #ffffff;
                width: 100%;
                border-radius: 500px;
                top: -40%;
                left: -30%;
            }

            &::after {
                content: "";
                position: absolute;
                height: 100%;
                background-color: #fff;
                width: 100%;
                border-radius: 500px;
                top: -40%;
                right: -30%;
            }

            span {
                display: inline-block;
                height: 20px;
                width: 20px;
                position: absolute;
                left: 0;
                right: 0;
                margin: auto;
                z-index: 1;
                border-bottom-left-radius: 50px;
                border-bottom-right-radius: 50px;
                border-top-right-radius: 50px;
                transform: rotate(45deg);
                animation: fire 0.3s ease infinite;
            }
        }


    }

    li:nth-child(1) span {
        animation-delay: 0.5s;
    }

    li:nth-child(2) span {
        animation-delay: 1s;
    }

    li:nth-child(3) span {
        animation-delay: 1.5s;
    }

    li:nth-child(4) span {
        animation-delay: 2s;
    }

    li:nth-child(5) span {
        animation-delay: 2.5s;
    }

    li:nth-child(6) span {
        animation-delay: 3s;
    }

    @keyframes fire {

        0%,
        100% {
            transform: rotate(55deg);
            width: 20px;
            background: linear-gradient(90deg, orange, orangered);
        }

        50% {
            transform: rotate(35deg);
            width: 18px;
            background: linear-gradient(90deg, orangered, orange);
        }
    }
</style>
<!-- end diwali -->
<!--Hero Section Starts-->
<canvas id="gradient-canvas"></canvas>
<section class="hero-section pt-md-5">

    <div class="container" id="fireworks-container">
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
                                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Book a Free 1-to-1
                                        Meeting
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
                                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Book a Free 1-to-1
                                        Meeting
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
                                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Book a Free 1-to-1
                                        Meeting
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
                                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Book a Free 1-to-1
                                        Meeting
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
<!-- 
        <ul class="fireworks">
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
        </ul> -->
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
                    <div class="row g-3 justify-content-start mt-2">
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
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/odoolerning.png') }}"
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
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/6.jpg') }}"
                                alt="service bg" class="img-fluid" style="width: 150px; padding: 16px 0px;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Stratup India</div>
                                <p class="subtitlecert">Growing Startup Company</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">
                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/nsdc.webp') }}"
                                alt="service bg" class="img-fluid" style="width: 150px;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">NSDC Certified</div>
                                <p class="subtitlecert">Transforming the Skill Landscape</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/entrepreneur.webp') }}"
                                alt="service bg" class="img-fluid entre" style="width: 150px;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Entrepreneur</div>
                                <p class="subtitlecert">Top Digital Marketing Agency India</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">
                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/Logo-ISO-27001.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">ISO/IEC (27001:2022)</div>
                                <p class="subtitlecert">ISO Certified Company</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">
                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/forbes1-logo.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Forbes India</div>
                                <p class="subtitlecert">Best SEO Company</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/clutch.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Clutch</div>
                                <p class="subtitlecert">Top Digital Marketing Agency</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/fitsmallbusiness.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Fit Small Business</div>
                                <p class="subtitlecert">Top Digital Marketing Agency</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/goodfirms.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Good Firms</div>
                                <p class="subtitlecert">Best SEO Company In India</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/plerdy.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Plerdy</div>
                                <p class="subtitlecert">Top SEO Experts</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/g2.webp') }}" alt="service bg"
                                class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">G2</div>
                                <p class="subtitlecert">Best Local SEO Agency</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/software-world.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Software World</div>
                                <p class="subtitlecert">Best Marketing Consultant</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 px-0">
                    <div class="row m-2 certlogosection  align-items-center">

                        <div class="col-md-5 text-center">
                            <img src="{{ asset('assets/websiteAssets/images/certilogos/clouds.webp') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body ">
                                <div class="card-title fw-bold">Clouds Ways</div>
                                <p class="subtitlecert">Best SEO Company in World</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</section>
<!--Hero Section Ends-->

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
                                    {{-- <div class="card me-4">
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
                                </div> --}}
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

                                <div class="card">
                                    <a href="{{ route('designingservices') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/branding1.webp') }}"
                                            class="card-img-top" alt="Brand Design">
                                        <div class="card-body">
                                            <h6 class="card-title">Brand Design</h6>
                                            <p class="card-text text-black">Craft a memorable brand with visual
                                                identity, scalable kits, and strategic storytelling tools.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ route('designingservices') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/Graphic-Design.webp') }}"
                                            class="card-img-top" alt="Brand Design">
                                        <div class="card-body">
                                            <h6 class="card-title">Product Design</h6>
                                            <p class="card-text text-black">Crafting innovative, user-centric designs that blend functionality with aesthetics.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ route('designingservices') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/services/branding.webp') }}"
                                            class="card-img-top" alt="Brand Design">
                                        <div class="card-body">
                                            <h6 class="card-title">Logo Design</h6>
                                            <p class="card-text text-black">Designing impactful logos that capture vision, values, and personality.
                                            </p>
                                        </div>
                                    </a>
                                </div>
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
                {{-- <div class="card">
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
            </div> --}}
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

            <div class="card">
                <a href="{{ route('designingservices') }}">
                    <img src="{{ asset('assets/websiteAssets/images/services/branding1.webp') }}"
                        class="card-img-top" alt="Brand Design">
                    <div class="card-body">
                        <h6 class="card-title">Brand Design</h6>
                        <p class="card-text text-black">Craft a memorable brand with visual identity, scalable kits, and strategic storytelling tools.
                        </p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="{{ route('designingservices') }}">
                    <img src="{{ asset('assets/websiteAssets/images/services/Graphic-Design.webp') }}"
                        class="card-img-top" alt="Product Design">
                    <div class="card-body">
                        <h6 class="card-title">Product Design</h6>
                        <p class="card-text text-black">Crafting innovative, user-centric designs that blend functionality with aesthetics.
                        </p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="{{ route('designingservices') }}">
                    <img src="{{ asset('assets/websiteAssets/images/services/branding.webp') }}"
                        class="card-img-top" alt="Logo Design">
                    <div class="card-body">
                        <h6 class="card-title">Logo Design</h6>
                        <p class="card-text text-black">Designing impactful logos that capture vision, values, and personality.
                        </p>
                    </div>
                </a>
            </div>
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
                        <source src="{{ asset('assets/websiteAssets/images/videos/YM_Reel_1.mp4') }}"
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





<!-- core-team -->

{{-- <section class="core-team py-5"> --}}
{{-- <div class="container">
                <div class="row">
                    <div class="globaltxtcolor text-start ">
                        Core Team
                    </div>
                    <div class=" text-start fs-3 fw-bold">
                        Behind every successful project is our talented, committed core team.
                    </div>
                    <p class=" text-start">
                        We seek our thrill from making brands and businesses in diversified domains reach their right audience.
                        With every conversion and each sale, we strive to set new standards for your business as well as
                        ourselves.
                    </p>
                </div>
            </div> --}}
{{-- <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div id="core-team" class="owl-carousel"> --}}

{{-- khivraj sir --}}
{{-- <div class="item">
                                        <div class="flip">
                                            <div class="corecard border-0">
                                                <div class="face front">
                                                    <div class="inner">
                                                        <div class="shadow-effect corebox flip rounded-3">
                                                            <div class=" ">
                                                                <img class="img-circle rounded-3" width="50px"
                                                                    src="{{ asset('assets/websiteAssets/images/team/new/Khivraj-sir.webp') }}"
alt="client">
</div>
<div class="authorbox rounded-3">
    <div class="testimonial-name d-flex  text-white">
        <div>
            <div class="fs-6 ">Co-Founder & MD</div>
            <div class="author">Mr. Khivraj Sain</div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="face back">
    <div class="inner p-3">
        <div>
            <p>“Business has only two functions- marketing and innovation.”</p>
        </div>
        <div class="testimonial-name d-flex mt-auto text-black">
            <div>
                <div class="fs-6 ">Co-Founder & MD</div>
                <div class="author">Mr. Khivraj Sain</div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div> --}}

{{-- Kunal Basin sir --}}
{{-- <div class="item">
                                        <div class="flip">
                                            <div class="corecard border-0">
                                                <div class="face front">
                                                    <div class="inner">
                                                        <div class="shadow-effect corebox flip rounded-3">
                                                            <div class=" ">
                                                                <img class="img-circle rounded-3" width="50px"
                                                                    src="{{ asset('assets/websiteAssets/images/team/new/kunal-basin.webp') }}"
alt="client">
</div>
<div class="authorbox rounded-3">
    <div class="testimonial-name d-flex  text-white">
        <div>
            <div class="fs-6 ">Business Development Manager</div>
            <div class="author">Mr. Kunal Basin</div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="face back">
    <div class="inner p-3">
        <div>
            <p>“Business has only two functions- marketing and innovation.”</p>
        </div>
        <div class="testimonial-name d-flex mt-auto text-black">
            <div>
                <div class="fs-6 ">Business Development Manager</div>
                <div class="author">Mr. Kunal Basin</div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div> --}}

{{-- Kishan gopal --}}
{{-- <div class="item">
                                        <div class="flip">
                                            <div class="corecard border-0">

                                                <div class="face front">
                                                    <div class="inner">
                                                        <div class="shadow-effect corebox flip rounded-3">
                                                            <div class=" ">
                                                                <img class="img-circle rounded-3" width="50px"
                                                                    src="{{ asset('assets/websiteAssets/images/team/new/kishangopal.webp') }}"
alt="client">
</div>
<div class="authorbox rounded-3">
    <div class="testimonial-name d-flex  text-white">
        <div>
            <div class="fs-6 ">Operations Manager</div>
            <div class="author">Mr. Kishan Gopal</div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="face back">
    <div class="inner p-3">
        <div>
            <p>“Business has only two functions- marketing and innovation.”</p>
        </div>
        <div class="testimonial-name d-flex mt-auto text-black">
            <div>
                <div class="fs-6 ">Operations Manager</div>
                <div class="author">Mr. Kishan Gopal</div>
            </div>
        </div>

    </div>
</div>
</div>
</div>

</div> --}}

{{-- Nilesh gupta --}}
{{-- <div class="item">
                                        <div class="flip">
                                            <div class="corecard border-0">

                                                <div class="face front">
                                                    <div class="inner">
                                                        <div class="shadow-effect corebox flip rounded-3">
                                                            <div class=" ">
                                                                <img class="img-circle rounded-3" width="50px"
                                                                    src="{{ asset('assets/websiteAssets/images/team/new/Nilesh-Sir.webp') }}"
alt="client">
</div>
<div class="authorbox rounded-3">
    <div class="testimonial-name d-flex  text-white">
        <div>
            <div class="fs-6 ">Office Admin</div>
            <div class="author">Mr. Nilesh Gupta</div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="face back">
    <div class="inner p-3">
        <div>
            <p>“Business has only two functions- marketing and innovation.”</p>
        </div>
        <div class="testimonial-name d-flex mt-auto text-black">
            <div>
                <div class="fs-6 ">Office Admin</div>
                <div class="author">Mr. Nilesh Gupta</div>
            </div>
        </div>

    </div>
</div>
</div>
</div>

</div> --}}

{{-- Manohar sir --}}
{{-- <div class="item">
                                        <div class="flip">
                                            <div class="corecard border-0">
                                                <div class="face front">
                                                    <div class="inner">
                                                        <div class="shadow-effect corebox flip rounded-3">
                                                            <div class=" ">
                                                                <img class="img-circle rounded-3" width="50px"
                                                                    src="{{ asset('assets/websiteAssets/images/team/new/Manohar-sir.webp') }}"
alt="client">
</div>
<div class="authorbox rounded-3">
    <div class="testimonial-name d-flex  text-white">
        <div>
            <div class="author">Mr. Manohar Singhh</div>
            <div class="fs-6 ">Project Manager</div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="face back">
    <div class="inner p-3">
        <div>
            <p>“Business has only two functions- marketing and innovation.”</p>
        </div>
        <div class="testimonial-name d-flex mt-auto text-black">
            <div>
                <div class="author">Mr. Manohar Singh</div>
                <div class="fs-6 ">Project Manager</div>
            </div>
        </div>

    </div>
</div>
</div>
</div>

</div> --}}

{{-- Rudraksh sir --}}
{{-- <div class="item">
                                        <div class="flip">
                                            <div class="corecard border-0">

                                                <div class="face front">
                                                    <div class="inner">
                                                        <div class="shadow-effect corebox flip rounded-3">
                                                            <div class=" ">
                                                                <img class="img-circle rounded-3" width="50px"
                                                                    src="{{ asset('assets/websiteAssets/images/team/new/Rudraksh.webp') }}"
alt="client">
</div>
<div class="authorbox rounded-3">
    <div class="testimonial-name d-flex  text-white">
        <div>
            <div class="author">Mr. Rudraksh Singh</div>
            <div class="fs-6 ">Creative Design Manager</div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="face back">
    <div class="inner p-3">
        <div>
            <p>“Business has only two functions- marketing and innovation.”</p>
        </div>
        <div class="testimonial-name d-flex mt-auto text-black">
            <div>
                <div class="author">Mr. Rudraksh Singh</div>
                <div class="fs-6 ">Creative Design Manager</div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div> --}}

{{-- Leera ma'am --}}
{{-- <div class="item">
                                        <div class="flip">
                                            <div class="corecard border-0">
                                                <div class="face front">
                                                    <div class="inner">
                                                        <div class="shadow-effect corebox flip rounded-3">
                                                            <div class=" ">
                                                                <img class="img-circle rounded-3" width="50px"
                                                                    src="{{ asset('assets/websiteAssets/images/team/new/Leera.webp') }}"
alt="client">
</div>
<div class="authorbox rounded-3">
    <div class="testimonial-name d-flex  text-white">
        <div>
            <div class="author">Ms. Leera Ramesh</div>
            <div class="fs-6 ">Project Manager</div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="face back">
    <div class="inner p-3">
        <div>
            <p>“Business has only two functions- marketing and innovation.”</p>
        </div>
        <div class="testimonial-name d-flex mt-auto text-black">
            <div>
                <div class="author">Ms. Leera Ramesh</div>
                <div class="fs-6 ">Project Manager</div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div> --}}

{{-- </div>
                </div>
            </div>
        </div>
    </section> --}}
<!-- END OF core-team -->




{{-- services --}}
{{-- <section>
        <div class="container py-5  servicesbox">

            <div class="row">
                <div class="col-md-6 text-wrap">
                    <h1 class="globaltxtcolor">Powering every industry. Powering all disruptors.</h1>
                </div>
            </div>
            <div class="row p-3">
                <!-- Nav tabs -->
                <ul class="nav nav-underline servicesbox" id="myTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                            type="button" role="tab">E-Commerce</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                            type="button" role="tab">Travel</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                            type="button" role="tab">Real Estate</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4"
                            type="button" role="tab">Hospitality</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5"
                            type="button" role="tab">Healthcare</button>
                    </li>
                </ul>

                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade  show active" id="tab1" role="tabpanel">
                        <div class="row p-3 py-5 p-md-5 border rounded-3 servicebg"
                            style="background-image: url('assets/websiteAssets/images/services/services1.webp'); background-position: bottom; background-size: cover;">


                            <div class="col-lg-4 col-md-6 p-3 my-5 bg-white rounded-3">
                                <div class="serviceBanner">
                                    <h4>Empower your <br /> e-commerce business </h4>
                                    <p>
                                        With our advanced digital solutions to enhance user experience, increase sales,
                                        drive traffic, and streamline operations for better growth and efficiency.
                                    </p>
                                    <a href="{{ route('contact') }}" class="btn btn-primary ">Book a Free 1-to-1
Meeting <i class="bi bi-arrow-right"></i></a>
</div>
</div>
<div class="col-md-8"></div>

</div>
</div>
<div class="tab-pane fade  " id="tab2" role="tabpanel">
    <div class="row p-3 py-5 p-md-5 border rounded-3 servicebg"
        style="background-image: url('assets/websiteAssets/images/services/travelIndustry.webp'); background-position: top; background-size: cover;">


        <div class="col-lg-4 col-md-6 p-3 my-5 bg-white rounded-3">
            <div class="serviceBanner">
                <h4>Empower your <br /> travel business </h4>
                <p>
                    Manage bookings effortlessly with one dashboard, boosting customer satisfaction and
                    revenue.
                </p>

                <a href="{{ route('contact') }}" class="btn btn-primary ">Book a Free 1-to-1
                    Meeting <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-md-8"></div>

    </div>
</div>
<div class="tab-pane fade  " id="tab3" role="tabpanel">
    <div class="row p-3 py-5 p-md-5 border rounded-3 servicebg"
        style="background-image: url('assets/websiteAssets/images/services/realestate-industry.webp'); background-position: center; background-size: cover;">


        <div class="col-lg-4 col-md-6 p-3 my-5 bg-white rounded-3">
            <div class="serviceBanner">
                <h4>Transforming Real Estate <br /> with Digital Excellence </h4>
                <p>
                    Boost property sales and client engagement with tailored marketing and IT solutions
                    designed to elevate your real estate business.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary">Book a Free 1-to-1
                    Meeting <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-md-8"></div>

    </div>
</div>
<div class="tab-pane fade  " id="tab4" role="tabpanel">
    <div class="row p-3 py-5 p-md-5 border rounded-3 servicebg"
        style="background-image: url('assets/websiteAssets/images/services/hospitality-industry.webp');  background-position: top; background-size: cover;">


        <div class="col-lg-4 col-md-6 p-3 my-5 bg-white rounded-3">
            <div class="serviceBanner">
                <h4>Elevating Hospitality <br /> Through Digital Innovation</h4>
                <p>
                    Enhance guest experiences and drive bookings with cutting-edge marketing and IT
                    solutions tailored for the hospitality industry.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary">Book a Free 1-to-1
                    Meeting <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-md-8"></div>

    </div>
</div>
<div class="tab-pane fade  " id="tab5" role="tabpanel">
    <div class="row p-3 py-5 p-md-5 border rounded-3 servicebg"
        style="background-image: url('assets/websiteAssets/images/services/healthcare-industry.webp'); background-position: 0 -130px; background-size: cover;">


        <div class="col-lg-4 col-md-6 p-3 my-5 bg-white rounded-3">
            <div class="serviceBanner">
                <h4>Revolutionizing Healthcare <br /> with Technology and Marketing </h4>
                <p>
                    Improve patient engagement and streamline operations with customized digital
                    solutions designed for the healthcare industry.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary">Book a Free 1-to-1
                    Meeting <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-md-8"></div>

    </div>
</div>
</div>

</div>
</div>
</section> --}}



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
                                                                <img alt="ebay"
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
                                                                <img alt="wallmart"
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

<section class="contact_bg">
    <div class="container-fluid py-3 " style="background-color: #032A3E">
        <div class="container ">

            <div class="ms-lg-5 ps-lg-5 ms-md-2 ps-md-2 d-none">
                <h1 class="text-white fw-bold">Contact us</h1>
            </div>
        </div>
    </div>
    <div class="container py-5 mb-md-5">

        <div class="row justify-content-center">
            {{-- <div class="col-lg-6 col-md-4" style="z-index: 10">
                    <div class="d-flex justify-content-start align-items-center h-100">

                        <p class="contact-msg fw-bold">
                            Let’s Talk
                        </p>
                    </div>
                </div> --}}
            <div class="col-lg-8 col-md-8 py-5">
                <div class="formcustomcard  rounded-3 py-5 bg-white position-relative" style="z-index: 10">
                    <div class="text-center">
                        <h2 class=" fw-bold mb-4 fs-3 " style="color: #000088">Are you ready to level up your growth? <u
                                class="fw-bold">Let's Talk!</u></h2>
                        <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                            <a href="tel:+918824269821" class="btn btn-danger btn-lg"> <i
                                    class="bi bi-telephone"></i> Schedule a Meeting</a>
                            <a href="https://wa.me/918824269821" class="btn btn-success btn-lg"><i
                                    class="bi bi-whatsapp"></i> Chat on WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 col-md-8">
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
    </div> --}}
    </div>
    </div>

</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tone@next/build/Tone.min.js"></script>

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
        '--card-height', `700px`
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
    /* =========================================
    FIREWORKS DATA (the main show)
========================================= */

    const fireworksData = [
        // Initial Launches
        {
            left: '10%',
            color: '#FF5733',
            explosionType: 'circle',
            size: 'large',
            launchTime: 0
        },
        {
            left: '90%',
            color: '#FFC300',
            explosionType: 'star',
            size: 'medium',
            launchTime: 400
        },

        // T = 3,000 ms (Quad Launch)
        {
            left: '15%',
            color: '#DAF7A6',
            explosionType: 'double-spiral',
            size: 'small',
            launchTime: 3000
        },
        {
            left: '25%',
            color: '#33FF57',
            explosionType: 'wave',
            size: 'medium',
            launchTime: 3400
        },
        {
            left: '35%',
            color: '#33FFF5',
            explosionType: 'heart',
            size: 'medium',
            launchTime: 3800
        },
        {
            left: '45%',
            color: '#3357FF',
            explosionType: 'swirl',
            size: 'large',
            launchTime: 4200
        },

        // T = 6,000 ms (Triple Launch)
        {
            left: '20%',
            color: '#8E44AD',
            explosionType: 'flower',
            size: 'large',
            launchTime: 6000
        },
        {
            left: '50%',
            color: '#FF33A8',
            explosionType: 'random-burst',
            size: 'small',
            launchTime: 6400
        },
        {
            left: '80%',
            color: '#FF8C33',
            explosionType: 'circle',
            size: 'medium',
            launchTime: 6800
        },

        // T = 9,000 ms (Pair Launch)
        {
            left: '30%',
            color: '#33FFBD',
            explosionType: 'ring-of-rings',
            size: 'medium',
            launchTime: 9000
        },
        {
            left: '70%',
            color: '#FF3333',
            explosionType: 'spiral',
            size: 'large',
            launchTime: 9400
        },

        // T = 12,000 ms (Triple Launch)
        {
            left: '35%',
            color: '#FF33F6',
            explosionType: 'triple-star',
            size: 'large',
            launchTime: 12000
        },
        {
            left: '55%',
            color: '#33FF8C',
            explosionType: 'flurry',
            size: 'small',
            launchTime: 12400
        },
        {
            left: '75%',
            color: '#FFBD33',
            explosionType: 'heart',
            size: 'medium',
            launchTime: 12800
        },

        // T = 15,000 ms (Quad Launch)
        {
            left: '10%',
            color: '#3375FF',
            explosionType: 'random-burst',
            size: 'large',
            launchTime: 15000
        },
        {
            left: '30%',
            color: '#FF33EC',
            explosionType: 'ring-of-rings',
            size: 'large',
            launchTime: 15400
        },
        {
            left: '50%',
            color: '#33FF8C',
            explosionType: 'triple-star',
            size: 'large',
            launchTime: 15800
        },
        {
            left: '70%',
            color: '#FFC733',
            explosionType: 'spiral',
            size: 'large',
            launchTime: 16200
        },

        // T = 18,000 ms (Pair Launch)
        {
            left: '20%',
            color: '#33D4FF',
            explosionType: 'flower',
            size: 'medium',
            launchTime: 18000
        },
        {
            left: '80%',
            color: '#FF3333',
            explosionType: 'swirl',
            size: 'large',
            launchTime: 18400
        },

        // T = 21,000 ms (Triple Launch)
        {
            left: '25%',
            color: '#FF5733',
            explosionType: 'wave',
            size: 'small',
            launchTime: 21000
        },
        {
            left: '50%',
            color: '#FFC300',
            explosionType: 'spiral',
            size: 'medium',
            launchTime: 21400
        },
        {
            left: '75%',
            color: '#DAF7A6',
            explosionType: 'heart',
            size: 'large',
            launchTime: 21800
        },

        // T = 24,000 ms (Pair Launch)
        {
            left: '15%',
            color: '#33FF57',
            explosionType: 'double-spiral',
            size: 'medium',
            launchTime: 24000
        },
        {
            left: '85%',
            color: '#33FFF5',
            explosionType: 'random-burst',
            size: 'small',
            launchTime: 24400
        },

        // T = 27,000 ms (Triple Launch)
        {
            left: '30%',
            color: '#3357FF',
            explosionType: 'swirl',
            size: 'large',
            launchTime: 27000
        },
        {
            left: '60%',
            color: '#8E44AD',
            explosionType: 'flower',
            size: 'medium',
            launchTime: 27400
        },
        {
            left: '90%',
            color: '#FF33A8',
            explosionType: 'triple-star',
            size: 'small',
            launchTime: 27800
        },

        // T = 30,000 ms (Quad Launch)
        {
            left: '10%',
            color: '#FF8C33',
            explosionType: 'ring-of-rings',
            size: 'large',
            launchTime: 30000
        },
        {
            left: '25%',
            color: '#33FFBD',
            explosionType: 'flurry',
            size: 'medium',
            launchTime: 30400
        },
        {
            left: '50%',
            color: '#FF3333',
            explosionType: 'heart',
            size: 'large',
            launchTime: 30800
        },
        {
            left: '75%',
            color: '#FF33F6',
            explosionType: 'spiral',
            size: 'large',
            launchTime: 31200
        },

        // T = 33,000 ms (Triple Launch)
        {
            left: '15%',
            color: '#33FF8C',
            explosionType: 'random-burst',
            size: 'medium',
            launchTime: 33000
        },
        {
            left: '50%',
            color: '#FFBD33',
            explosionType: 'star',
            size: 'small',
            launchTime: 33400
        },
        {
            left: '85%',
            color: '#3375FF',
            explosionType: 'double-spiral',
            size: 'large',
            launchTime: 33800
        },

        // T = 36,000 ms (Pair Launch)
        {
            left: '20%',
            color: '#FF33EC',
            explosionType: 'wave',
            size: 'medium',
            launchTime: 36000
        },
        {
            left: '80%',
            color: '#33D4FF',
            explosionType: 'flurry',
            size: 'small',
            launchTime: 36400
        },

        // T = 39,000 ms (Triple Launch)
        {
            left: '25%',
            color: '#FF5733',
            explosionType: 'spiral',
            size: 'large',
            launchTime: 39000
        },
        {
            left: '55%',
            color: '#FFC300',
            explosionType: 'random-burst',
            size: 'medium',
            launchTime: 39400
        },
        {
            left: '75%',
            color: '#DAF7A6',
            explosionType: 'flower',
            size: 'small',
            launchTime: 39800
        },

        // T = 42,000 ms (Pair Launch)
        {
            left: '10%',
            color: '#33FF57',
            explosionType: 'ring-of-rings',
            size: 'large',
            launchTime: 42000
        },
        {
            left: '90%',
            color: '#33FFF5',
            explosionType: 'triple-star',
            size: 'large',
            launchTime: 42400
        },

        // T = 45,000 ms (Triple Launch)
        {
            left: '20%',
            color: '#3357FF',
            explosionType: 'swirl',
            size: 'medium',
            launchTime: 45000
        },
        {
            left: '50%',
            color: '#8E44AD',
            explosionType: 'double-spiral',
            size: 'large',
            launchTime: 45400
        },
        {
            left: '80%',
            color: '#FF33A8',
            explosionType: 'heart',
            size: 'small',
            launchTime: 45800
        },

        // T = 48,000 ms (Pair Launch)
        {
            left: '30%',
            color: '#FF8C33',
            explosionType: 'flower',
            size: 'medium',
            launchTime: 48000
        },
        {
            left: '70%',
            color: '#33FFBD',
            explosionType: 'wave',
            size: 'large',
            launchTime: 48400
        },

        // T = 51,000 ms (Triple Launch)
        {
            left: '15%',
            color: '#FF3333',
            explosionType: 'circle',
            size: 'large',
            launchTime: 51000
        },
        {
            left: '45%',
            color: '#FF33F6',
            explosionType: 'star',
            size: 'medium',
            launchTime: 51400
        },
        {
            left: '75%',
            color: '#33FF8C',
            explosionType: 'double-spiral',
            size: 'small',
            launchTime: 51800
        },

        // T = 54,000 ms (Pair Launch)
        {
            left: '25%',
            color: '#FFBD33',
            explosionType: 'flurry',
            size: 'medium',
            launchTime: 54000
        },
        {
            left: '85%',
            color: '#3375FF',
            explosionType: 'spiral',
            size: 'large',
            launchTime: 54400
        },

        // T = 57,000 ms (Triple Launch)
        {
            left: '20%',
            color: '#FF33EC',
            explosionType: 'heart',
            size: 'medium',
            launchTime: 57000
        },
        {
            left: '50%',
            color: '#33D4FF',
            explosionType: 'swirl',
            size: 'large',
            launchTime: 57400
        },
        {
            left: '80%',
            color: '#FF5733',
            explosionType: 'triple-star',
            size: 'small',
            launchTime: 57800
        },

        // T = 60,000 ms (Quad Launch)
        {
            left: '10%',
            color: '#FFC300',
            explosionType: 'ring-of-rings',
            size: 'large',
            launchTime: 60000
        },
        {
            left: '30%',
            color: '#DAF7A6',
            explosionType: 'flurry',
            size: 'medium',
            launchTime: 60400
        },
        {
            left: '50%',
            color: '#33FF57',
            explosionType: 'heart',
            size: 'large',
            launchTime: 60800
        },
        {
            left: '70%',
            color: '#33FFF5',
            explosionType: 'spiral',
            size: 'large',
            launchTime: 61200
        },

        // T = 63,000 ms (Grand Finale Begins)
        {
            left: '15%',
            color: '#3357FF',
            explosionType: 'random-burst',
            size: 'large',
            launchTime: 63000
        },
        {
            left: '25%',
            color: '#8E44AD',
            explosionType: 'ring-of-rings',
            size: 'large',
            launchTime: 63400
        },
        {
            left: '40%',
            color: '#FF33A8',
            explosionType: 'triple-star',
            size: 'large',
            launchTime: 63800
        },
        {
            left: '55%',
            color: '#FF8C33',
            explosionType: 'heart',
            size: 'large',
            launchTime: 64200
        },
        {
            left: '70%',
            color: '#33FFBD',
            explosionType: 'double-spiral',
            size: 'large',
            launchTime: 64600
        },
        {
            left: '85%',
            color: '#33FF57',
            explosionType: 'star',
            size: 'large',
            launchTime: 65000
        },
        {
            left: '95%',
            color: '#33FFF5',
            explosionType: 'flurry',
            size: 'large',
            launchTime: 65400
        },

        // T = 66,000 ms (Finale Continuation)
        {
            left: '5%',
            color: '#FF5733',
            explosionType: 'galaxy',
            size: 'large',
            launchTime: 66000
        },
        {
            left: '20%',
            color: '#FFC300',
            explosionType: 'flower',
            size: 'large',
            launchTime: 66400
        },
        {
            left: '40%',
            color: '#DAF7A6',
            explosionType: 'ring-of-rings',
            size: 'large',
            launchTime: 66800
        },
        {
            left: '60%',
            color: '#33FF57',
            explosionType: 'triple-star',
            size: 'large',
            launchTime: 67200
        },
        {
            left: '80%',
            color: '#33FFF5',
            explosionType: 'swirl',
            size: 'large',
            launchTime: 67600
        },
        {
            left: '95%',
            color: '#3357FF',
            explosionType: 'double-spiral',
            size: 'large',
            launchTime: 68000
        },

        // T = 69,000 ms (Ultimate Grand Finale)
        {
            left: '5%',
            color: '#8E44AD',
            explosionType: 'galaxy',
            size: 'large',
            launchTime: 69000
        },
        {
            left: '25%',
            color: '#FF33A8',
            explosionType: 'heart',
            size: 'large',
            launchTime: 69400
        },
        {
            left: '45%',
            color: '#FF8C33',
            explosionType: 'ring-of-rings',
            size: 'large',
            launchTime: 69800
        },
        {
            left: '65%',
            color: '#33FFBD',
            explosionType: 'triple-star',
            size: 'large',
            launchTime: 70200
        },
        {
            left: '85%',
            color: '#FF5733',
            explosionType: 'swirl',
            size: 'large',
            launchTime: 70600
        },
        {
            left: '95%',
            color: '#FFC300',
            explosionType: 'double-spiral',
            size: 'large',
            launchTime: 71000
        },
    ];

    /* =========================================
          "RANDOM FIREWORKS" (SILENT)
    ========================================= */

    let randomFireworksInterval;

    function startRandomFireworks() {
        // Create interval so that every few seconds we launch a silent rocket
        randomFireworksInterval = setInterval(() => {
            launchRocketSilent();
        }, 2000);
    }

    // Launch a rocket with random parameters, *no sound*
    function launchRocketSilent() {
        const container = document.getElementById('fireworks-container');

        // random left between 10% and 90%
        const leftVal = Math.floor(Math.random() * 80) + 10;
        // pick a color
        const colors = ['#FF4C4C', '#FFD24C', '#4CFF4C', '#4C4CFF', '#FF4CFF', '#FFFFFF', '#00FFFF', '#FFA500'];
        const color = colors[Math.floor(Math.random() * colors.length)];
        // random pattern
        const patterns = ['circle', 'star', 'swirl', 'double-spiral', 'flower', 'random-burst'];
        const explosionType = patterns[Math.floor(Math.random() * patterns.length)];
        // random size
        const sizes = ['small', 'medium', 'large'];
        const size = sizes[Math.floor(Math.random() * sizes.length)];

        // Create rocket element
        const rocketEl = document.createElement('div');
        rocketEl.className = 'firework-rocket';
        rocketEl.style.left = leftVal + '%';

        const rocketInner = document.createElement('div');
        rocketInner.className = 'firework-rocket-inner';
        rocketInner.style.backgroundColor = color;
        rocketEl.appendChild(rocketInner);
        container.appendChild(rocketEl);

        // random apex between 30vh and 60vh
        const apex = 30 + Math.random() * 30;
        // random travel time
        const travelTime = 1000 + Math.random() * 800;

        rocketEl.animate(
            [{
                    transform: 'translate(-50%, 0)'
                },
                {
                    transform: `translate(-50%, -${apex}vh)`
                },
            ], {
                duration: travelTime,
                easing: 'ease-out',
                fill: 'forwards',
            }
        );

        // Create a trail of sparks behind the rocket
        const trailInterval = setInterval(() => {
            createSpark(container, rocketEl, color);
        }, 60);

        // When rocket reaches apex, explode (SILENT)
        setTimeout(() => {
            clearInterval(trailInterval);
            explodeSilent(container, rocketEl, color, explosionType, size);
        }, travelTime);
    }

    function explodeSilent(container, rocketEl, color, explosionType, size) {
        const rect = rocketEl.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;
        rocketEl.remove();

        // No sound here for the silent version

        const pattern = getExplosionPattern(explosionType);
        let fragmentCount = 40;
        if (size === 'small') fragmentCount = 25;
        if (size === 'large') fragmentCount = 60;
        // (medium default is 40)

        for (let i = 0; i < fragmentCount; i++) {
            const angle = pattern.angles && pattern.angles.length ?
                pattern.angles[i % pattern.angles.length] :
                Math.random() * 2 * Math.PI;

            const magnitude = pattern.magnitude && pattern.magnitude.length ?
                pattern.magnitude[i % pattern.magnitude.length] :
                1;

            createFragment(container, centerX, centerY, color, angle, size, magnitude);
        }
    }

    /* =========================================
         MAIN FIREWORK SHOW (WITH SOUND)
    ========================================= */

    function startMainFireworkShow() {
        // Remove the random fireworks
        clearInterval(randomFireworksInterval);

        // We'll re-use the same container
        const container = document.getElementById('fireworks-container');

        // For each item in fireworksData, schedule a rocket (with sound)
        fireworksData.forEach((data) => {
            setTimeout(async () => {
                // 1) Fire stage sound
                await playFireStageSound(data.size);
                launchRocketWithSound(container, data);
            }, data.launchTime);
        });

        // Find the max launch time from the data:
        const maxLaunchTime = Math.max(...fireworksData.map((d) => d.launchTime));
        // We'll add an extra 4s for the finale
        const finaleTime = maxLaunchTime + 4000;

        // Launch grand finale rocket
        setTimeout(async () => {
            await playFireStageSound('ultra');
            launchGrandFinaleRocket(container);
        }, finaleTime);
    }

    /* =========================================
             CORE ROCKET + EXPLOSION
    ========================================= */

    function launchRocketWithSound(container, {
        left,
        color,
        explosionType,
        size
    }) {
        const rocketEl = document.createElement('div');
        rocketEl.className = 'firework-rocket';
        rocketEl.style.left = left;

        const rocketInner = document.createElement('div');
        rocketInner.className = 'firework-rocket-inner';
        rocketInner.style.backgroundColor = color;
        rocketEl.appendChild(rocketInner);
        container.appendChild(rocketEl);

        // random apex
        const apex = 40 + Math.random() * 40;
        const travelTime = 1500 + Math.random() * 500;

        rocketEl.animate(
            [{
                    transform: 'translate(-50%, 0)'
                },
                {
                    transform: `translate(-50%, -${apex}vh)`
                },
            ], {
                duration: travelTime,
                easing: 'ease-out',
                fill: 'forwards',
            }
        );

        // Create a trail
        const trailInterval = setInterval(() => {
            createSpark(container, rocketEl, color);
        }, 60);

        // explode
        setTimeout(() => {
            clearInterval(trailInterval);
            explodeWithSound(container, rocketEl, color, explosionType, size);
        }, travelTime);
    }

    function explodeWithSound(container, rocketEl, color, explosionType, size) {
        const rect = rocketEl.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;
        rocketEl.remove();

        // Explosion sound
        playExplosionSound(size);

        const pattern = getExplosionPattern(explosionType);
        let fragmentCount = 50;
        if (size === 'small') fragmentCount = 30;
        if (size === 'large') fragmentCount = 80;
        if (size === 'ultra') fragmentCount = 120;
        // (medium default is 50)

        for (let i = 0; i < fragmentCount; i++) {
            const angle = pattern.angles && pattern.angles.length ?
                pattern.angles[i % pattern.angles.length] :
                Math.random() * 2 * Math.PI;

            const magnitude = pattern.magnitude && pattern.magnitude.length ?
                pattern.magnitude[i % pattern.magnitude.length] :
                1;

            createFragment(container, centerX, centerY, color, angle, size, magnitude);
        }
    }

    /* ==================
        GRAND FINALE
    ================== */

    function launchGrandFinaleRocket(container) {
        const left = '50%';
        const color = '#FFFFFF';

        const rocketEl = document.createElement('div');
        rocketEl.className = 'firework-rocket';
        rocketEl.style.left = left;

        const rocketInner = document.createElement('div');
        rocketInner.className = 'firework-rocket-inner';
        rocketInner.style.backgroundColor = color;
        rocketEl.appendChild(rocketInner);
        container.appendChild(rocketEl);

        // slight arc
        const driftX = (Math.random() - 0.5) * 40;
        const travelTime = 2200;
        rocketEl.animate(
            [{
                    offset: 0,
                    transform: 'translate(-50%, 0)'
                },
                {
                    offset: 0.3,
                    transform: `translate(calc(-50% + ${driftX/2}px), -20vh)`
                },
                {
                    offset: 0.6,
                    transform: `translate(calc(-50% + ${driftX}px), -45vh)`
                },
                {
                    offset: 1,
                    transform: 'translate(-50%, -70vh)'
                },
            ], {
                duration: travelTime,
                easing: 'cubic-bezier(0.25, 0.45, 0.45, 0.95)',
                fill: 'forwards',
            }
        );

        const trailInterval = setInterval(() => {
            createSpark(container, rocketEl, color);
        }, 60);

        setTimeout(() => {
            clearInterval(trailInterval);
            bigSlowExplosion(container, rocketEl);
        }, travelTime);
    }

    function bigSlowExplosion(container, rocketEl) {
        const rect = rocketEl.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;
        rocketEl.remove();

        // Big "ultra" sound
        playExplosionSound('ultra');

        const fragmentCount = 500;
        for (let i = 0; i < fragmentCount; i++) {
            const angle = Math.random() * 2 * Math.PI;
            const radius = 300 + Math.random() * 400; // large spread
            const rainDistance = 700 + Math.random() * 500; // how far they fall
            const targetX = Math.cos(angle) * radius;
            const targetY = Math.sin(angle) * radius;

            const fragment = document.createElement('div');
            fragment.className = 'firework-fragment';
            fragment.style.backgroundColor = '#FFFFFF';
            fragment.style.left = `${centerX}px`;
            fragment.style.top = `${centerY}px`;
            fragment.style.width = '3px';
            fragment.style.height = '3px';
            fragment.style.borderRadius = '50%';
            container.appendChild(fragment);

            const animDuration = 12000 + Math.random() * 6000;

            fragment.animate(
                [{
                        offset: 0,
                        transform: `translate(0,0) scale(0)`,
                        opacity: 0,
                    },
                    {
                        offset: 0.1,
                        transform: `translate(${targetX * 0.8}px, ${targetY * 0.8}px) scale(2)`,
                        opacity: 1,
                    },
                    {
                        offset: 0.2,
                        transform: `translate(${targetX}px, ${targetY}px) scale(1.7)`,
                        opacity: 1,
                    },
                    {
                        offset: 0.35,
                        transform: `translate(${targetX}px, ${targetY + rainDistance * 0.1}px) scale(1.3)`,
                        opacity: 0.95,
                    },
                    {
                        offset: 0.5,
                        transform: `translate(${targetX}px, ${targetY + rainDistance * 0.3}px) scale(1.1)`,
                        opacity: 0.8,
                    },
                    {
                        offset: 0.65,
                        transform: `translate(${targetX}px, ${targetY + rainDistance * 0.55}px) scale(0.9)`,
                        opacity: 0.6,
                    },
                    {
                        offset: 0.8,
                        transform: `translate(${targetX}px, ${targetY + rainDistance * 0.8}px) scale(0.8)`,
                        opacity: 0.3,
                    },
                    {
                        offset: 1,
                        transform: `translate(${targetX}px, ${targetY + rainDistance}px) scale(0.6)`,
                        opacity: 0,
                    },
                ], {
                    duration: animDuration,
                    easing: 'cubic-bezier(0.25, 0.5, 0.25, 1)',
                    fill: 'forwards',
                }
            );

            setTimeout(() => {
                fragment.remove();
            }, animDuration + 500);
        }
    }

    /* =========================================
     SHARED HELPERS (spark, fragment, patterns)
    ========================================= */

    function createSpark(container, rocketEl, color) {
        const rect = rocketEl.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;

        const spark = document.createElement('div');
        spark.className = 'firework-spark';
        spark.style.backgroundColor = color;
        spark.style.left = `${centerX}px`;
        spark.style.top = `${centerY}px`;
        container.appendChild(spark);

        spark.animate(
            [{
                    transform: 'translate(0,0)',
                    opacity: 1
                },
                {
                    transform: 'translate(0, 15px)',
                    opacity: 0
                },
            ], {
                duration: 500,
                easing: 'ease-out',
                fill: 'forwards',
            }
        );

        setTimeout(() => {
            spark.remove();
        }, 600);
    }

    function createFragment(container, x, y, color, angle, size, magnitude) {
        const fragment = document.createElement('div');
        fragment.className = 'firework-fragment';
        fragment.style.backgroundColor = color;
        fragment.style.left = `${x}px`;
        fragment.style.top = `${y}px`;
        container.appendChild(fragment);

        // Speed based on size
        const baseVelocity = size === 'small' ? 2 : size === 'large' ? 4 : 3;
        const velocity = baseVelocity * magnitude;
        const offsetX = Math.cos(angle) * velocity * 100;
        const offsetY = Math.sin(angle) * velocity * 100;
        const duration = 2000 + Math.random() * 800;

        fragment.animate(
            [{
                    transform: 'translate(0,0) scale(1)',
                    opacity: 1
                },
                {
                    transform: `translate(${offsetX}px, ${offsetY}px) scale(0.3)`,
                    opacity: 0
                },
            ], {
                duration,
                easing: 'ease-out',
                fill: 'forwards',
            }
        );

        setTimeout(() => {
            fragment.remove();
        }, duration + 100);
    }

    function getExplosionPattern(type) {
        // Original "circle" pattern
        if (type === 'circle') {
            const angles = Array.from({
                length: 30
            }, (_, i) => (i / 30) * 2 * Math.PI)
            return {
                angles
            }
        }

        // Original "star" pattern
        if (type === 'star') {
            const angles = []
            for (let i = 0; i < 15; i++) {
                angles.push((i / 15) * 2 * Math.PI)
                angles.push(((i + 0.2) / 15) * 2 * Math.PI)
            }
            return {
                angles
            }
        }

        if (type === 'double-spiral') {
            // Two interwoven spirals
            const angles = []
            for (let i = 0; i < 40; i++) {
                angles.push((i / 10) * Math.PI)
            }
            const magnitude = angles.map((val, idx) => (idx % 2 === 0 ? 1 : 2))
            return {
                angles,
                magnitude
            }
        }

        if (type === 'cross') {
            // Shots at 0°, 90°, 180°, 270°
            const angles = [0, Math.PI / 2, Math.PI, (3 * Math.PI) / 2]
            // Duplicate multiple times
            const repeated = []
            const repeats = 10
            for (let r = 0; r < repeats; r++) {
                repeated.push(...angles)
            }
            return {
                angles: repeated
            }
        }

        if (type === 'swirl') {
            // Spiral swirl
            const angles = []
            for (let i = 0; i < 60; i++) {
                angles.push(i * 0.2)
            }
            const magnitude = angles.map((_, i) => 0.5 + i * 0.05)
            return {
                angles,
                magnitude
            }
        }

        if (type === 'flower') {
            // Petal-like
            const angles = []
            const magnitude = []
            for (let i = 0; i < 36; i++) {
                angles.push((2 * Math.PI * i) / 36)
                magnitude.push(i % 2 === 0 ? 1.2 : 0.7)
            }
            return {
                angles,
                magnitude
            }
        }

        if (type === 'heart') {
            // Heart shape approximation
            const angles = []
            for (let i = 0; i < 50; i++) {
                const t = (i / 25) * Math.PI
                angles.push(t)
            }
            const magnitude = angles.map(() => 1 + Math.random() * 1)
            return {
                angles,
                magnitude
            }
        }

        if (type === 'ring-of-rings') {
            // Concentric circles
            const angles = []
            const magnitude = []
            for (let ring = 1; ring <= 3; ring++) {
                for (let i = 0; i < 20; i++) {
                    angles.push((2 * Math.PI * i) / 20)
                    magnitude.push(ring)
                }
            }
            return {
                angles,
                magnitude
            }
        }

        if (type === 'diamond') {
            // Diamond-like pattern
            const baseAngles = [Math.PI / 4, (3 * Math.PI) / 4, (5 * Math.PI) / 4, (7 * Math.PI) / 4]
            const angles = []
            for (let i = 0; i < 10; i++) {
                angles.push(...baseAngles)
            }
            return {
                angles
            }
        }

        if (type === 'hexagon') {
            // 6 main angles repeated
            const angles = []
            const baseAngles = [0, Math.PI / 3, (2 * Math.PI) / 3, Math.PI, (4 * Math.PI) / 3, (5 * Math.PI) / 3]
            for (let i = 0; i < 10; i++) {
                angles.push(...baseAngles)
            }
            return {
                angles
            }
        }

        if (type === 'spiral') {
            // One continuous spiral
            const angles = []
            for (let i = 0; i < 50; i++) {
                angles.push(i * 0.3)
            }
            const magnitude = angles.map((_, i) => 0.4 + i * 0.1)
            return {
                angles,
                magnitude
            }
        }

        if (type === 'flurry') {
            // Random bursts with slight grouping
            const angles = Array.from({
                length: 60
            }, () => Math.random() * 2 * Math.PI)
            const magnitude = angles.map(() => 0.5 + Math.random() * 1.5)
            return {
                angles,
                magnitude
            }
        }

        if (type === 'triple-star') {
            // 3 star patterns combined
            const angles = []
            for (let s = 0; s < 3; s++) {
                for (let i = 0; i < 15; i++) {
                    angles.push((i / 15) * 2 * Math.PI)
                    angles.push(((i + 0.2) / 15) * 2 * Math.PI)
                }
            }
            return {
                angles
            }
        }

        if (type === 'random-burst') {
            // 50 random angles + random magnitudes
            const angles = Array.from({
                length: 50
            }, () => Math.random() * 2 * Math.PI)
            const magnitude = Array.from({
                length: 50
            }, () => 0.5 + Math.random() * 2)
            return {
                angles,
                magnitude
            }
        }

        if (type === 'wave') {
            // Sine wave distribution of angles
            const angles = []
            const magnitude = []
            for (let i = 0; i < 40; i++) {
                const a = (i / 40) * 2 * Math.PI
                angles.push(a)
                magnitude.push(1 + Math.sin(a * 4))
            }
            return {
                angles,
                magnitude
            }
        }

        // Default random scatter
        const angles = Array.from({
            length: 30
        }, () => Math.random() * 2 * Math.PI);
        const magnitude = Array.from({
            length: 30
        }, () => 0.5 + Math.random() * 1.5);
        return {
            angles,
            magnitude
        };
    }

    /* ====================
        AUDIO: TONE.JS
    ==================== */

    async function playFireStageSound(size) {
        if (Tone.context.state !== 'running') {
            await Tone.start();
        }

        const now = Tone.now();

        // Brown noise (brief rumble)
        const noiseFilter = new Tone.Filter({
            frequency: 80,
            type: 'lowpass',
            rolloff: -12,
        }).toDestination();

        const fireNoise = new Tone.NoiseSynth({
            volume: 20,
            noise: {
                type: 'brown'
            },
            envelope: {
                attack: 0.05,
                decay: 0.7,
                sustain: 0.0,
                release: 0.3,
            },
        }).connect(noiseFilter);

        fireNoise.triggerAttackRelease(1, now);

        // Sub oscillator
        const subOsc = new Tone.Oscillator({
            type: 'sine',
            frequency: 60,
            volume: -5,
        });
        const subEnv = new Tone.AmplitudeEnvelope({
            attack: 0.0,
            decay: 0.4,
            sustain: 0.0,
            release: 0.3,
        }).toDestination();

        subOsc.connect(subEnv);
        subOsc.start(now);

        // Adjust for size
        if (size === 'small') {
            subOsc.volume.value = -10;
            subOsc.frequency.setValueAtTime(55, now);
        } else if (size === 'medium') {
            subOsc.volume.value = -5; // original
            subOsc.frequency.setValueAtTime(60, now);
        } else if (size === 'large') {
            subOsc.volume.value = -2;
            subOsc.frequency.setValueAtTime(65, now);
        } else if (size === 'ultra') {
            subOsc.volume.value = 0;
            subOsc.frequency.setValueAtTime(70, now);
        }

        subOsc.frequency.linearRampToValueAtTime(20, now + 0.4);
        subEnv.triggerAttackRelease(1.2, now);
        subOsc.stop(now + 1.2);

        setTimeout(() => {
            fireNoise.dispose();
            noiseFilter.dispose();
            subOsc.dispose();
            subEnv.dispose();
        }, 2000);
    }

    async function playExplosionSound(size) {
        if (Tone.context.state !== 'running') {
            await Tone.start();
        }

        const now = Tone.now();

        // Reverb
        const mainReverb = new Tone.Reverb({
            decay: 1.8,
            wet: 0.4,
        }).toDestination();

        const subReverb = new Tone.Reverb({
            decay: 2.5,
            wet: 0.5,
        }).toDestination();

        // “Crack” noise
        const explodeSynth = new Tone.NoiseSynth({
            volume: -10,
            noise: {
                type: 'white'
            },
            envelope: {
                attack: 0.0,
                decay: 0.3,
                sustain: 0.0,
                release: 0.2,
            },
        }).connect(mainReverb);

        explodeSynth.triggerAttackRelease(0.5, now);

        // Sub-Bass “BOOM”
        const subDistortion = new Tone.Distortion({
            distortion: 0.2,
            wet: 0.5,
        });

        const subOsc = new Tone.Oscillator({
            type: 'sine',
            frequency: 100,
            volume: -6,
        });

        const subEnv = new Tone.AmplitudeEnvelope({
            attack: 0.0,
            decay: 0.5,
            sustain: 0.2,
            release: 1.5,
        });

        subOsc.connect(subDistortion);
        subDistortion.connect(subEnv);
        subEnv.connect(subReverb);

        subOsc.start(now);

        // Adjust for size
        if (size === 'small') {
            subOsc.volume.value = -12;
            subOsc.frequency.setValueAtTime(90, now);
        } else if (size === 'medium') {
            subOsc.volume.value = -6;
            subOsc.frequency.setValueAtTime(100, now);
        } else if (size === 'large') {
            subOsc.volume.value = -3;
            subOsc.frequency.setValueAtTime(110, now);
        } else if (size === 'ultra') {
            subOsc.volume.value = 0;
            subOsc.frequency.setValueAtTime(120, now);
        }

        subOsc.frequency.linearRampToValueAtTime(30, now + 0.3);
        subEnv.triggerAttackRelease(1.8, now);
        subOsc.stop(now + 2.0);

        // Sparkle
        const sparkleFilter = new Tone.Filter({
            frequency: 8000,
            type: 'highpass',
        }).connect(mainReverb);

        const sparkleSynth = new Tone.NoiseSynth({
            volume: -20,
            noise: {
                type: 'white'
            },
            envelope: {
                attack: 0.0,
                decay: 0.2,
                sustain: 0.0,
                release: 0.2,
            },
        }).connect(sparkleFilter);

        sparkleSynth.triggerAttackRelease(0.3, now + 0.1);

        setTimeout(() => {
            explodeSynth.dispose();
            sparkleSynth.dispose();
            subDistortion.dispose();
            subOsc.dispose();
            subEnv.dispose();
            mainReverb.dispose();
            subReverb.dispose();
        }, 3000);
    }
    /* =========================================
        8) PAGE LOAD + BUTTON CLICK
       ========================================= */
    window.addEventListener('DOMContentLoaded', () => {
        // 1) Start silent fireworks
         startRandomFireworks();
        startMainFireworkShow();
    });
   
</script>

@endsection