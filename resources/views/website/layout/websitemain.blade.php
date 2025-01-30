<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yuvmedia</title>
    <meta name="description" content="">
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
    <script defer="defer" type="text/javascript" src="https://yuvmedia-india.odoo.com/im_livechat/loader/2"></script>

    <script defer="defer" type="text/javascript" src="https://yuvmedia-india.odoo.com/im_livechat/assets_embed.js"></script>
</head>

<body>
    <div class="page-content">
        <div class="container-fluid p-0">
            <div class="container-fluid p-0 sticky-header">
                <div class="container d-flex justify-content-around align-items-center">

                    <div class="px-3">
                        <a class="navbar-brand d-flex align-items-center" href="{{ route('homepage') }}">
                            <img src="{{ asset('assets/websiteAssets/images/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-transparent">
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <div class="px-3">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}"  href="{{ route('homepage') }}">Home</a>
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
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('webdevelopment') ? 'active' : '' }}" href="{{ route('webdevelopment') }}">Web Development</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('designingservices') ? 'active' : '' }}" href="{{ route('designingservices') }}">Designing Services</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('performancemedia') ? 'active' : '' }}" href="{{ route('performancemedia') }}">Performance Media</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('marketplaceexpertise') ? 'active' : '' }}" href="{{ route('marketplaceexpertise') }}">Marketplace Expertise</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('influencermarketing') ? 'active' : '' }}" href="{{ route('influencermarketing') }}">Influencer Marketing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem {{ request()->routeIs('googlebusinessprofile') ? 'active' : '' }}" href="{{ route('googlebusinessprofile') }}">Google Business Profile</a>
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
                                        <a class="nav-link {{ request()->routeIs('partners') ? 'active' : '' }}" href="{{ route('partners') }}">Partners</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}" href="https://www.yuvmedia.com/jobs">Career</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="p-3 hideInMobile">
                        <a class="btn btn-outline-primary hire-us-btn questrial-regular" href="{{ route('contact') }}">Hire Us!</a>
                    </div>
                    <div class="mobile-toggle hideInDesktop">

                        <a class="text-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">
                            <i class="bi bi-list fs-2"></i>
                        </a>



                    </div>
                </div>
            </div>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    {{-- <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mobileMenu">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}" aria-current="page" href="{{ route('homepage') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('about') || request()->routeIs('ourteam') ? 'active' : '' }}" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Our Story
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('ourteam') ? 'active' : '' }}" href="{{ route('ourteam') }}">Our Team</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('seo') || request()->routeIs('socialmedia') || request()->routeIs('whatsappmarketing') || request()->routeIs('videoproduction') || request()->routeIs('webdevelopment') || request()->routeIs('designingservices') || request()->routeIs('performancemedia') || request()->routeIs('marketplaceexpertise') || request()->routeIs('influencermarketing') || request()->routeIs('googlebusinessprofile') ? 'active' : '' }}" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('seo') ? 'active' : '' }}" href="{{ route('seo') }}">SEO</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('socialmedia') ? 'active' : '' }}" href="{{ route('socialmedia') }}">Social Media</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('whatsappmarketing') ? 'active' : '' }}" href="{{ route('whatsappmarketing') }}">Whatsapp Marketing</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('videoproduction') ? 'active' : '' }}" href="{{ route('videoproduction') }}">Video Production</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('webdevelopment') ? 'active' : '' }}" href="{{ route('webdevelopment') }}">Web Development</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('designingservices') ? 'active' : '' }}" href="{{ route('designingservices') }}">Designing Services</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('performancemedia') ? 'active' : '' }}" href="{{ route('performancemedia') }}">Performance Media</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('marketplaceexpertise') ? 'active' : '' }}" href="{{ route('marketplaceexpertise') }}">Marketplace Expertise</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('influencermarketing') ? 'active' : '' }}" href="{{ route('influencermarketing') }}">Influencer Marketing</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->routeIs('googlebusinessprofile') ? 'active' : '' }}" href="{{ route('googlebusinessprofile') }}">Google Business Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item  {{ request()->routeIs('erpservices') ? 'active' : '' }}" href="{{ route('erpservices') }}">ERP Services</a>
                                </li>
                                <li>
                                    <a class="dropdown-item  {{ request()->routeIs('emailmarketing') ? 'active' : '' }}" href="{{ route('emailmarketing') }}">Email Marketing</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Work</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('partners') ? 'active' : '' }}" href="{{ route('partners') }}">Partners</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="https://www.yuvmedia.com/">Blog</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}" href="https://www.yuvmedia.com/jobs">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Header Ends-->


            @yield('content')


            <!-- Footer Area -->
            <footer id="footer" class="footer-area fixed--footer py-5">

                <!-- Footer Widgets Area -->
                <div class="footer-area__widgets section-padding--md bg--dark--light py-5">
                    <div class="container">

                        <div class="row widget-area footer--widgets">



                            <!-- Single Widget -->
                            <section class="col-md-3 widget widget-quick-links">
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
                                        <a class="{{ request()->routeIs('partners') ? 'active' : '' }}" href="{{ route('partners') }}">Partners</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('career') ? 'active' : '' }}" href="https://www.yuvmedia.com/jobs">Career</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </section>
                            <!--// Single Widget -->


                            <!-- Single Widget -->
                            <section class="col-md-3 widget widget-quick-links">
                                <h5 class="widget-title">Quick Links</h5>
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
                                        <a class="{{ request()->routeIs('webdevelopment') ? 'active' : '' }}" href="{{ route('webdevelopment') }}">Web Development</a>
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
                                        <a class="{{ request()->routeIs('googlebusinessprofile') ? 'active' : '' }}" href="{{ route('googlebusinessprofile') }}">Google Business Profile</a>
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
                            <section class="col-md-3 widget widget-contact-info">
                                <h5 class="widget-title">Reach Us
                                </h5>
                                <ul class="ps-0">
                                    <li>
                                        <a href="callto://+918078671648">+91-8078671648</a>
                                    </li>
                                    <li>
                                        <a href="mailto://support@yuvmedia.com">support@yuvmedia.com</a>
                                        <a href="mailto://sales@yuvmedia.com">sales@yuvmedia.com</a>
                                    </li>
                                </ul>
                            </section>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class=" col-md-3 widget widget-about ">

                                <div class=" mt-2">
                                    <div>
                                        <h5 class="widget-title">Address</h5>
                                        <h6>YUVNEXUS DIGITAL PRIVATE LIMITED</h6>
                                        <p>B17, Second Floor, Above Royal Bakers, Glitz circle, Ramnagar Road, Ajmer,
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

                            </div>
                            <!--// Single Widget -->

                        </div>
                    </div>
                </div>
                <!--// Footer Widgets Area -->

                <!-- Footer Copyright Area -->
                <div class="footer-area__copyright bg--dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="footer-area__logo text-md-start text-center">
                                    <a href="{{ route('homepage') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/logo.png') }}"
                                            alt="footer logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 d-grid align-items-center">
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

        </div>
        <!-- //Main wrapper -->

        <!-- JS Files -->
        
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script> --}}

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script> --}}

        {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script> --}}
</body>


</html>
