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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/customnitesh.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/niteshresponsive.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <div class="page-content">
        <div class="container-fluid p-0">
            <div class="container d-flex justify-content-around">

                <div class="px-3">
                    <a class="navbar-brand d-flex align-items-center" href="#">
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
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
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
                                    <a class="nav-link" href="{{ route('partners')}}">Partners</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Career</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="p-3">
                    <a class="btn btn-outline-primary hire-us-btn questrial-regular" href="#">Hire Us!</a>
                </div>
                <div class="mobile-toggle hideOnDesktop">

                    <a class="text-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <i class="bi bi-list fs-2"></i>
                    </a>


                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('homepage') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
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
                                    <li>
                                        <a href="{{ route('homepage') }}">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">Work</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">Partners</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">Career</a>
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
                                        <a href="{{ route('homepage') }}">SEO</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">Social Media</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">Whatsapp Marketing</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">Video Production</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">Web Development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">Designing Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">Performance Media</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Marketplace Expertise</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Influencer Marketing</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Google Business Profile</a>
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
                                                <a href="https://www.facebook.com/">
                                                    <i class="bi bi-facebook fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="twitter me-3">
                                                <a href="https://twitter.com/">
                                                    <i class="bi bi-twitter fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="instagram me-3">
                                                <a href="https://www.instagram.com/">
                                                    <i class="bi bi-instagram fs-4"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus me-3">
                                                <a href="https://youtube.com/">
                                                    <i class="bi bi-youtube fs-4"></i>
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

        <script src="{{ asset('assets/websiteAssets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/websiteAssets/js/main.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            document.querySelectorAll('section').forEach(function (section) {
                section.setAttribute('data-aos', 'fade-up');
                section.setAttribute('data-aos-duration', '1000');
            });
            AOS.init();
        </script>

</body>


</html>