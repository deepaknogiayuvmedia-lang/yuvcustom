<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yuvmedia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/websiteAssets/images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/websiteAssets/images/logo.png') }}">

    <!-- Google font (font-family: 'Josefin Sans', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/technologies.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/customnitesh.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/niteshresponsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.18/dist/lenis.css">
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
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ route('homepage') }}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Our Story
                                        </a>
                                        <ul class="dropdown-menu customdropdown">
                                            <li>
                                                <a class="dropdown-item customdrodownitem" href="{{ route('about') }}">About Us</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem" href="{{ route('ourteam') }}">Our Team</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu customdropdown">
                                            <li>
                                                <a class="dropdown-item customdrodownitem" href="{{ route('seo') }}">SEO</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem"
                                                    href="{{ route('socialmedia') }}">Social Media</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem"
                                                    href="{{ route('whatsappmarketing') }}">Whatsapp
                                                    Marketing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem"
                                                    href="{{ route('videoproduction') }}">Video Production</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem"
                                                    href="{{ route('webdevelopment') }}">Web Development</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem"
                                                    href="{{ route('designingservices') }}">Designing
                                                    Services</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem"
                                                    href="{{ route('performancemedia') }}">Performance
                                                    Media</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem"
                                                    href="{{ route('marketplaceexpertise') }}">Marketplace
                                                    Expertise</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem"
                                                    href="{{ route('influencermarketing') }}">Influencer
                                                    Marketing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item customdrodownitem"
                                                    href="{{ route('googlebusinessprofile') }}">Google Business
                                                    Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('work')}}">Work</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('partners') }}">Partners</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.yuvmedia.com/">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.yuvmedia.com/jobs">Career</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="p-3 hideInMobile">
                        <a class="btn btn-outline-primary hire-us-btn questrial-regular" href="#">Hire Us!</a>
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
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('homepage') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Our Story
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('ourteam') }}">Our Team</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">

                                <li>
                                    <a class="dropdown-item" href="{{ route('homepage') }}">SEO</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('about') }}">Social Media</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('homepage') }}">Whatsapp
                                        Marketing</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('homepage') }}">Video
                                        Production</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('homepage') }}">Web
                                        Development</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('homepage') }}">Designing
                                        Services</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('homepage') }}">Performance
                                        Media</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('contact') }}">Marketplace
                                        Expertise</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('contact') }}">Influencer
                                        Marketing</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('contact') }}">Google Business
                                        Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
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
                                        <a href="{{ route('homepage') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ route('ourteam') }}">Our Team</a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ route('work') }}">Work</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('partners') }}">Partners</a>
                                    </li>
                                    <li>
                                        <a href="https://www.yuvmedia.com/">Blog</a>
                                    </li>
                                    <li>
                                        <a href="https://www.yuvmedia.com/jobs">Career</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </section>
                            <!--// Single Widget -->


                            <!-- Single Widget -->
                            <section class="col-md-3 widget widget-quick-links">
                                <h5 class="widget-title">Quick Links</h5>
                                <ul class="ps-0">
                                    <li>
                                        <a href="{{ route('seo') }}">SEO</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('socialmedia') }}">Social Media</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('whatsappmarketing') }}">Whatsapp Marketing</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('videoproduction') }}">Video Production</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('webdevelopment') }}">Web Development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('designingservices') }}">Designing Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('performancemedia') }}">Performance Media</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('marketplaceexpertise') }}">Marketplace Expertise</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('influencermarketing') }}">Influencer Marketing</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('googlebusinessprofile') }}">Google Business Profile</a>
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
                                        <a href="mailto://admin@yuvmedia.com">admin@yuvmedia.com</a>
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
                                        <p>B17, Second Floor, Above Royal Bakers, Glitz circle, Ramnagar Road, Ajmer,
                                            Rajasthan, 305001 </p>
                                    </div>

                                    <div class="social-icons social-icons--rounded">
                                        <ul class="d-flex ps-0">
                                            <li class="facebook me-3">
                                                <a href="https://www.facebook.com/yuvmedia">
                                                    <i class="bi bi-facebook fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="twitter me-3">
                                                <a href="https://twitter.com/YUVMEDIA2">
                                                    <i class="bi bi-twitter fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="instagram me-3">
                                                <a href="https://www.instagram.com/yuv_media/">
                                                    <i class="bi bi-instagram fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus me-3">
                                                <a href="https://www.youtube.com/channel/UCb4NWy8AA0pnzTnUDntiGyw">
                                                    <i class="bi bi-youtube fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus me-3">
                                                <a href="https://www.linkedin.com/company/yuvmedia/">
                                                    <i class="bi bi-linkedin fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus me-3">
                                                <a href="https://www.pinterest.ca/yuvmedia/_created/">
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
                                <div class="footer-area__logo">
                                    <a href="{{ route('homepage') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/logo.png') }}"
                                            alt="footer logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="copyright text-end">
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
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>


        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script src="{{ asset('assets/websiteAssets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/websiteAssets/js/main.js') }}"></script>
        <script src="{{ asset('assets/websiteAssets/js/canvas.js') }}"></script>
        <script>
            AOS.init();
        </script>
        <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
        <script src="{{ asset('assets/websiteAssets/js/lenis.js') }}"></script> 
        {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script> --}}
</body>


</html>