<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @php
    use App\Models\MetaSetting;
    $metadetails = MetaSetting::where('page', request()->route()->getName())->first();
    $keywords = optional($metadetails)->keywords;
    $keywordsArray = is_string($keywords) ? json_decode($keywords, true) : $keywords;
    @endphp
    <title>{{ $metadetails->metatitle ?? 'YUVMEDIA - Next Level Partner' }}</title>
    <meta property="og:image" content="{{ asset('assets/websiteAssets/images/favicon.ico') }}">
    <meta property="og:image:alt" content="Yuvmedia - Next Level Partner">
    <meta name="description" content="{{ optional($metadetails)->metadescription }}">
    <meta name="keywords" content="{{ is_array($keywordsArray) ? implode(', ', array_map('ucfirst', $keywordsArray)) : ucfirst($keywordsArray) }}">
    <meta name="author" content="{{ $metadetails->authorname ?? 'Yuvmedia' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/websiteAssets/images/Favicon-yuvin.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/websiteAssets/images/Favicon-yuvin.png') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/technologies.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/customnitesh.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/niteshresponsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/lenis.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/semantic.min.css') }}">
    <style>
        .no-copy {
            position: relative;
        }

        .no-copy::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: transparent;
            z-index: 10;
        }

    </style>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NVBWSLZW');

    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVBWSLZW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="page-content">
        <div class="container-fluid p-0">
            <div class="container-fluid p-0 sticky-header">
                <div class="container d-flex justify-content-around align-items-center">

                    <div class="px-3">
                        <a class="navbar-brand d-flex align-items-center" href="{{ route('homepage') }}">
                            <img src="{{ asset('assets/websiteAssets/images/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    @if (!request()->routeIs('usa'))
                    <nav class="navbar navbar-expand-lg bg-transparent">
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <div class="px-3">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}" href="{{ route('homepage') }}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle {{ request()->routeIs('about') || request()->routeIs('ourteam') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Our Story
                                        </a>
                                        <ul class="dropdown-menu customdropdown">
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('ourteam') ? 'active' : '' }}" href="{{ route('ourteam') }}">Our Team</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('lifeatyuvmedia') ? 'active' : '' }}" href="{{ route('lifeatyuvmedia') }}">Life @ Yuvmedia</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle {{ request()->routeIs('seo') || request()->routeIs('socialmedia') || request()->routeIs('whatsappmarketing') || request()->routeIs('videoproduction') || request()->routeIs('webdevelopment') || request()->routeIs('designingservices') || request()->routeIs('performancemedia') || request()->routeIs('marketplaceexpertise') || request()->routeIs('influencermarketing') || request()->routeIs('googlebusinessprofile') || request()->routeIs('erpservices') || request()->routeIs('emailmarketing') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu customdropdown">
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('seo') ? 'active' : '' }}" href="{{ route('seo') }}">SEO</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('socialmedia') ? 'active' : '' }}" href="{{ route('socialmedia') }}">Social Media</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('whatsappmarketing') ? 'active' : '' }}" href="{{ route('whatsappmarketing') }}">Whatsapp Marketing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('videoproduction') ? 'active' : '' }}" href="{{ route('videoproduction') }}">Video Production</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('webdevelopment') ? 'active' : '' }}" href="{{ route('webdevelopment') }}">Web & App Development</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('designingservices') ? 'active' : '' }}" href="{{ route('designingservices') }}">Designing Services</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('performancemedia') ? 'active' : '' }}" href="{{ route('performancemedia') }}">Performance Media</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('marketplaceexpertise') ? 'active' : '' }}" href="{{ route('marketplaceexpertise') }}">Marketplace
                                                    Expertise</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('influencermarketing') ? 'active' : '' }}" href="{{ route('influencermarketing') }}">Influencer
                                                    Marketing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('googlebusinessprofile') ? 'active' : '' }}" href="{{ route('googlebusinessprofile') }}">Google Business
                                                    Profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('erpservices') ? 'active' : '' }}" href="{{ route('erpservices') }}">ERP Services</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('emailmarketing') ? 'active' : '' }}" href="{{ route('emailmarketing') }}">Email Marketing</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('clients') ? 'active' : '' }}" href="{{ route('clients') }}">Clients</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('blogs') ? 'active' : '' }}" href="{{ route('blogs') }}">Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('partners') ? 'active' : '' }}" href="{{ route('partners') }}">Partners</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('casestudies') ? 'active' : '' }}" href="{{ route('casestudies') }}">Case Studies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}" href="{{ route('career') }}">Career</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class=" ">
                        {{-- <a class="btn btn-outline-primary hire-us-btn questrial-regular"
                                href="{{ route('contact') }}">Hire Us!</a> --}}
                        <a class="btn btn-outline-primary hire-us-btn questrial-regular" href="tel:918824269821"><i class="bi bi-telephone"></i> Call Now</a>
                    </div>
                    <div class="mobile-toggle hideInDesktop">

                        <a class="text-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            <i class="bi bi-list fs-2"></i>
                        </a>

                    </div>
                    @endif
                    {{-- @if (request()->routeIs('usa'))
                    <div class=" ">
                        <a class="btn btn-outline-primary hire-us-btn questrial-regular"
                                href="{{ route('contact') }}">Hire Us!</a>
                        <a class="btn btn-outline-primary hire-us-btn questrial-regular" href="tel:918824269821"><i class="bi bi-telephone"></i> Call Now</a>
                    </div>
                    @endif --}}

                </div>
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <div class="px-3">
                        <a class="navbar-brand d-flex align-items-center" href="{{ route('homepage') }}">
                            <img src="{{ asset('assets/websiteAssets/images/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mobileMenu">

                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}" aria-current="page" href="{{ route('homepage') }}"><img src="{{ asset('/assets/websiteAssets/images/menu/home.png') }}" alt="home" class="me-2">Home</a>
                        </li>

                        <div class="accordion" id="ourStoryAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingStory">

                                    <button class="accordion-button {{ request()->routeIs('about') || request()->routeIs('ourteam') ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStory" aria-expanded="{{ request()->routeIs('about') || request()->routeIs('ourteam') ? 'true' : 'false' }}" aria-controls="collapseStory">
                                        <img src="{{ asset('/assets/websiteAssets/images/menu/open-book.png') }}" alt="home" class="me-2"> Our Story
                                    </button>
                                </h2>
                                <div id="collapseStory" class="accordion-collapse collapse {{ request()->routeIs('about') || request()->routeIs('ourteam') ? 'show' : '' }}" aria-labelledby="headingStory" data-bs-parent="#ourStoryAccordion">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="d-block py-2 px-3 {{ request()->routeIs('about') ? 'fw-bold text-primary' : '' }}" href="{{ route('about') }}">About Us</a>
                                            </li>
                                            <li>
                                                <a class="d-block py-2 px-3 {{ request()->routeIs('ourteam') ? 'fw-bold text-primary' : '' }}" href="{{ route('ourteam') }}">Our Team</a>
                                            </li>
                                            <li>
                                                <a class="d-block py-2 px-3 {{ request()->routeIs('lifeatyuvmedia') ? 'fw-bold text-primary' : '' }}" href="{{ route('lifeatyuvmedia') }}">Life @ Yuvmedia</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion" id="servicesAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingServices">
                                    <button class="accordion-button {{ request()->routeIs('seo') || request()->routeIs('socialmedia') || request()->routeIs('whatsappmarketing') || request()->routeIs('videoproduction') || request()->routeIs('webdevelopment') || request()->routeIs('designingservices') || request()->routeIs('performancemedia') || request()->routeIs('marketplaceexpertise') || request()->routeIs('influencermarketing') || request()->routeIs('googlebusinessprofile') || request()->routeIs('erpservices') || request()->routeIs('emailmarketing') ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseServices" aria-expanded="{{ request()->routeIs('seo') || request()->routeIs('socialmedia') || request()->routeIs('whatsappmarketing') || request()->routeIs('videoproduction') || request()->routeIs('webdevelopment') || request()->routeIs('designingservices') || request()->routeIs('performancemedia') || request()->routeIs('marketplaceexpertise') || request()->routeIs('influencermarketing') || request()->routeIs('googlebusinessprofile') || request()->routeIs('erpservices') || request()->routeIs('emailmarketing') ? 'true' : 'false' }}" aria-controls="collapseServices">
                                        <img src="{{ asset('/assets/websiteAssets/images/menu/services.png') }}" alt="home" class="me-2"> Services
                                    </button>
                                </h2>
                                <div id="collapseServices" class="accordion-collapse collapse {{ request()->routeIs('seo') || request()->routeIs('socialmedia') || request()->routeIs('whatsappmarketing') || request()->routeIs('videoproduction') || request()->routeIs('webdevelopment') || request()->routeIs('designingservices') || request()->routeIs('performancemedia') || request()->routeIs('marketplaceexpertise') || request()->routeIs('influencermarketing') || request()->routeIs('googlebusinessprofile') || request()->routeIs('erpservices') || request()->routeIs('emailmarketing') ? 'show' : '' }}" aria-labelledby="headingServices" data-bs-parent="#servicesAccordion">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled">
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('seo') ? 'fw-bold text-primary' : '' }}" href="{{ route('seo') }}">SEO</a></li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('socialmedia') ? 'fw-bold text-primary' : '' }}" href="{{ route('socialmedia') }}">Social Media</a></li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('whatsappmarketing') ? 'fw-bold text-primary' : '' }}" href="{{ route('whatsappmarketing') }}">Whatsapp Marketing</a>
                                            </li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('videoproduction') ? 'fw-bold text-primary' : '' }}" href="{{ route('videoproduction') }}">Video Production</a></li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('webdevelopment') ? 'fw-bold text-primary' : '' }}" href="{{ route('webdevelopment') }}">Web & App Development</a></li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('designingservices') ? 'fw-bold text-primary' : '' }}" href="{{ route('designingservices') }}">Designing Services</a>
                                            </li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('performancemedia') ? 'fw-bold text-primary' : '' }}" href="{{ route('performancemedia') }}">Performance Media</a></li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('marketplaceexpertise') ? 'fw-bold text-primary' : '' }}" href="{{ route('marketplaceexpertise') }}">Marketplace
                                                    Expertise</a></li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('influencermarketing') ? 'fw-bold text-primary' : '' }}" href="{{ route('influencermarketing') }}">Influencer
                                                    Marketing</a>
                                            </li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('googlebusinessprofile') ? 'fw-bold text-primary' : '' }}" href="{{ route('googlebusinessprofile') }}">Google Business
                                                    Profile</a></li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('erpservices') ? 'fw-bold text-primary' : '' }}" href="{{ route('erpservices') }}">ERP Services</a></li>
                                            <li><a class="d-block py-2 px-3 {{ request()->routeIs('emailmarketing') ? 'fw-bold text-primary' : '' }}" href="{{ route('emailmarketing') }}">Email Marketing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('partners') ? 'active' : '' }}" href="{{ route('partners') }}"><img src="{{ asset('/assets/websiteAssets/images/menu/handshake.png') }}" alt="home" class="me-2">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('partners') ? 'active' : '' }}" href="{{ route('clients') }}"><img src="{{ asset('/assets/websiteAssets/images/menu/Clients.png') }}" alt="home" class="me-2">Clients</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}" href="{{ route('career') }}"><img src="{{ asset('/assets/websiteAssets/images/menu/career.png') }}" alt="home" class="me-2">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}"><img src="{{ asset('/assets/websiteAssets/images/menu/contact.png') }}" alt="home" class="me-2">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex justify-content-start flex-md-row flex-column  w-100 ">
                    <div class="m-3 text-center">
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg w-100">Book a Free 1-to-1
                            Meeting
                            <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="offcanvas-footer border-top pt-2">
                    <div class="copyright text-center">
                        Copyright © Yuvnexus digital Pvt. Ltd.<br /> All Rights Reserved
                    </div>
                </div>
            </div>
            <!--Header Ends-->


            @yield('content')


            <!-- Footer Area -->
            <footer id="footer" class="footer-area fixed--footer py-5">
                @if (!request()->routeIs('usa'))
                <!-- Footer Widgets Area -->
                <div class="footer-area__widgets section-padding--md bg--dark--light py-5">
                    <div class="container">

                        <div class="row widget-area footer--widgets">



                            <!-- Single Widget -->
                            <section class="col-lg-3 col-md-6 widget widget-quick-links">
                                <h5 class="widget-title">Quick Links</h5>
                                <ul class="ps-0">
                                    <li>
                                        <a class="{{ request()->routeIs('homepage') ? 'active' : '' }}" href="{{ route('homepage') }}">Home</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('ourteam') ? 'active' : '' }}" href="{{ route('ourteam') }}">Our Team</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('lifeatyuvmedia') ? 'active' : '' }}" href="{{ route('lifeatyuvmedia') }}">Life @ Yuvmedia</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('partners') ? 'active' : '' }}" href="{{ route('partners') }}">Partners</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('career') ? 'active' : '' }}" href="{{ route('career') }}">Career</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('privacypolicy') ? 'active' : '' }}" href="{{ route('privacypolicy') }}">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('termsservices') ? 'active' : '' }}" href="{{ route('termsservices') }}">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </section>
                            <!--// Single Widget -->


                            <!-- Single Widget -->
                            <section class="col-lg-3 col-md-6 widget widget-quick-links">
                                <h5 class="widget-title">Services</h5>
                                <ul class="ps-0">
                                    <li>
                                        <a class="{{ request()->routeIs('seo') ? 'active' : '' }}" href="{{ route('seo') }}">SEO</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('socialmedia') ? 'active' : '' }}" href="{{ route('socialmedia') }}">Social Media</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('whatsappmarketing') ? 'active' : '' }}" href="{{ route('whatsappmarketing') }}">Whatsapp Marketing</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('videoproduction') ? 'active' : '' }}" href="{{ route('videoproduction') }}">Video Production</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('webdevelopment') ? 'active' : '' }}" href="{{ route('webdevelopment') }}">Web & App Development</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('designingservices') ? 'active' : '' }}" href="{{ route('designingservices') }}">Designing Services</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('performancemedia') ? 'active' : '' }}" href="{{ route('performancemedia') }}">Performance Media</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('marketplaceexpertise') ? 'active' : '' }}" href="{{ route('marketplaceexpertise') }}">Marketplace Expertise</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('influencermarketing') ? 'active' : '' }}" href="{{ route('influencermarketing') }}">Influencer Marketing</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('googlebusinessprofile') ? 'active' : '' }}" href="{{ route('googlebusinessprofile') }}">Google Business
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('erpservices') ? 'active' : '' }}" href="{{ route('erpservices') }}">ERP Services</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('emailmarketing') ? 'active' : '' }}" href="{{ route('emailmarketing') }}">Email Marketing</a>
                                    </li>
                                </ul>
                            </section>
                            <!--// Single Widget -->


                            <!-- Single Widget -->
                            <section class="col-lg-3 col-md-6 widget widget-contact-info">
                                <h5 class="widget-title">Reach Us
                                </h5>
                                <ul class="ps-0">
                                    <h6>For Support:</h6>
                                    <li>
                                        <a href="mailto://support@yuvmedia.com">support@yuvmedia.com</a>
                                    </li>
                                    <li>
                                        <a href="tel://+918078671648">+91-8078671648</a>
                                    </li>
                                </ul>
                                <ul class="ps-0">
                                    <h6>For Sales:</h6>
                                    <li>
                                        <a href="mailto://sales@yuvmedia.com">sales@yuvmedia.com</a>
                                    </li>
                                    <li>
                                        <a href="tel://+918824269821">+91-8824269821</a>
                                    </li>
                                </ul>
                            </section>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class=" col-lg-3 col-md-6 widget widget-about ">

                                <div class=" mt-2">
                                    <div>
                                        <h5 class="widget-title">Address</h5>
                                        <h6>YUVNEXUS DIGITAL PRIVATE LIMITED</h6>
                                        <p>B17, Second Floor, Above Royal Bakers, Glitz circle, Ramnagar Road,
                                            Ajmer,
                                            Rajasthan, 305001 </p>
                                    </div>

                                    <div class="social-icons social-icons--rounded">
                                        <ul class="d-flex ps-0">
                                            <li class="facebook me-3">
                                                <a href="https://www.facebook.com/yuvmedia" style="color: #3b5998;">
                                                    <i class="bi bi-facebook fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="twitter me-3">
                                                <a href="https://twitter.com/YUVMEDIA2" style="color: #1DA1F2;">
                                                    <i class="bi bi-twitter fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="instagram me-3">
                                                <a href="https://www.instagram.com/yuv_media/" style="color: #E1306C;">
                                                    <i class="bi bi-instagram fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="youtube me-3">
                                                <a href="https://www.youtube.com/channel/UCb4NWy8AA0pnzTnUDntiGyw" style="color: #FF0000;">
                                                    <i class="bi bi-youtube fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin me-3">
                                                <a href="https://www.linkedin.com/company/yuvmedia/" style="color: #0077B5;">
                                                    <i class="bi bi-linkedin fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="pinterest me-3">
                                                <a href="https://www.pinterest.ca/yuvmedia/_created/" style="color: #E60023;">
                                                    <i class="bi bi-pinterest fs-4"></i>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="hideInDesktop">
                                    <div class="d-flex justify-content-start flex-md-row flex-column staticbtn w-100 ">
                                        <div class="m-3 text-center">
                                            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg w-100">Book a Free 1-to-1 Meeting
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div>
                                        {{-- <div class="floating-buttons">
                                                <a href="https://wa.me/918824269821" target="_blank"
                                                    class="floating-whatsapp">
                                                    <img src="{{ asset('assets/websiteAssets/images/whatsapp-icon.png') }}"
                                        alt="WhatsApp"> whatsapp
                                        </a>
                                        <a href="tel:+918824269821" class="floating-call">
                                            <img src="{{ asset('assets/websiteAssets/images/call-icon.png') }}" alt="Call">call
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <!--// Single Widget -->
                    </div>
                </div>
        </div>
        <!--// Footer Widgets Area -->
        @endif
        <!-- Footer Copyright Area -->
        <div class="footer-area__copyright bg--dark mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-area__logo text-md-start text-center">
                            <a href="{{ route('homepage') }}">
                                <img src="{{ asset('assets/websiteAssets/images/logo.png') }}" alt="footer logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 d-grid align-items-center">
                        <div class="copyright text-md-end text-center">
                            Copyright © Yuvnexus digital Pvt. Ltd. All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Footer Copyright Area -->

        </footer>
        <!-- //Footer Area -->
        {{-- <script defer="defer" type="text/javascript" src="https://yuvmedia-india.odoo.com/im_livechat/loader/2"></script>

            <script defer="defer" type="text/javascript" src="https://yuvmedia-india.odoo.com/im_livechat/assets_embed.js"></script> --}}
        {{-- <div class="no-copy">
            <p>This content is protected and cannot be copied easily.</p>
        </div> --}}
    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->

    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/websiteAssets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/websiteAssets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/websiteAssets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/websiteAssets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/websiteAssets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/websiteAssets/js/main.js') }}"></script>
    <script src="{{ asset('assets/websiteAssets/js/canvas.js') }}"></script>
    <script>
        AOS.init();

    </script>

    <script src="{{ asset('assets/websiteAssets/js/lenis.min.js') }}"></script>
    <script src="{{ asset('assets/websiteAssets/js/lenis.js') }}"></script>

    <!-- Add reCAPTCHA Script -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lfs-N4qAAAAADWA3ThxAMH5he0DS92qATavjOCy"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lfs-N4qAAAAADWA3ThxAMH5he0DS92qATavjOCy', {
                action: 'submit'
            }).then(function(token) {
                document.getElementById('contact-form').insertAdjacentHTML('beforeend'
                    , `<input type="hidden" name="g-recaptcha-response" value="${token}">`);
            });
        });

    </script>
    {{-- <script defer="defer" type="text/javascript" src="https://yuvmedia-india.odoo.com/im_livechat/loader/2"></script>

        <script defer="defer" type="text/javascript" src="https://yuvmedia-india.odoo.com/im_livechat/assets_embed.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script> --}}

    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script> --}}
    <script>
        // Disable right-click (desktop)
        // document.addEventListener('contextmenu', function(e) {
        //     e.preventDefault();
        // }, false);

        // // Disable text selection (desktop & mobile)
        // document.addEventListener('selectstart', function(e) {
        //     e.preventDefault();
        // }, false);

        // // Disable copy event (desktop & mobile)
        // document.addEventListener('copy', function(e) {
        //     e.preventDefault();
        //     alert("Copying is disabled on this site!");
        // }, false);

        // // Disable cut event
        // document.addEventListener('cut', function(e) {
        //     e.preventDefault();
        // }, false);

        // // Disable common shortcuts (Windows + Mac)
        // document.addEventListener('keydown', function(e) {
        //     if ((e.ctrlKey || e.metaKey) && ['c', 'u', 's', 'x', 'p'].includes(e.key.toLowerCase())) {
        //         e.preventDefault();
        //         alert("This action is disabled!");
        //     }
        // });

        // // Extra protection for mobile: disable long-press menu
        // document.addEventListener('touchstart', function(e) {
        //     if (e.touches.length > 1) {
        //         e.preventDefault();
        //     }
        // }, {
        //     passive: false
        // });

        // document.addEventListener('touchend', function(e) {
        //     if (e.touches.length > 1) {
        //         e.preventDefault();
        //     }
        // }, {
        //     passive: false
        // });

    </script>
</body>


</html>
