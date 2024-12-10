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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google font (font-family: 'Josefin Sans', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/websiteAssets/css/responsive.css') }}">


</head>

<body>

    <div class="page-content">
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <div class="px-3">
                        <a class="navbar-brand d-flex align-items-center" href="#">
                            <img src="{{ asset('assets/websiteAssets/images/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="px-3">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
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
                    <div class="px-3">
                        <a class="btn btn-outline-primary hire-us-btn questrial-regular" href="#">Hire Us!</a>
                    </div>
                </div>
            </div>
        </nav>
        <!--Header Ends-->


        @yield('content')


        <!-- Footer Area -->
        <footer id="footer" class="footer-area fixed--footer">

            <!-- Footer Widgets Area -->
            <div class="footer-area__widgets section-padding--md bg--dark--light">
                <div class="container">

                    {{-- <div class="widget-area footer--widgets"> --}}

                    <!-- Single Widget -->
                    {{-- <section class="widget widget-twitter-feed">
                            
                            <div class="col-lg-12">
                                <div class="footer-area__logo text-center">
                                    <a href="{{ route('homepage') }}">
                                        <img src="{{ asset('assets/websiteAssets/images/logo.png') }}" alt="footer logo"
                                            width="150px">
                                    </a>
                                </div>
                            </div>
                        </section> --}}
                    <!--// Single Widget -->
                    <!-- Single Widget -->
                    {{-- <section class="widget widget-about d-flex">
                            <div>

                                <h5 class="widget-title">ABOUT DBA Consultancy</h5>
                                <p>DBA Consultancy is your trusted partner for comprehensive tax and legal solutions. With a
                                    focus on accuracy, reliability, and personalized support, we simplify complex processes
                                    to ensure your peace of mind. </p>
                                </div>

                            <div class="social-icons social-icons--rounded">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://www.instagram.com/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://plus.google.com/discover">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section> --}}
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    {{-- <section class="widget widget-quick-links">
                            <h5 class="widget-title">QUICK LINKS</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('services')}}">Our Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('features')}}">Features</a>
                                </li>
                                <li>
                                    <a href="{{ route('about')}}">About Us</a>
                                </li>

                                <li>
                                    <a href="{{ route('contact')}}">Contact Us</a>
                                </li>
                            </ul>
                        </section> --}}
                    <!--// Single Widget -->


                    <!-- Single Widget -->
                    {{-- <section class="widget widget-contact-info">
                            <h5 class="widget-title">Contact Info</h5>
                            <ul>
                                <li>
                                    <p>Ajmer</p>
                                </li>
                                <li>
                                    <p>
                                        <a href="callto://+00812568987789">+008 12568 987 789</a>
                                    </p>
                                    <p>
                                        <a href="callto://+00835687567458">+008 35687 567 458</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="mailto://info@dbaconsultancy.in">admin@yuvmedia.in</a>
                                    </p>
                                    <p>
                                        <a href="mailto://info@dbaconsultancy.in">www.yuvmedia.in</a>
                                    </p>
                                </li>
                            </ul>
                        </section> --}}
                    <!--// Single Widget -->

                    {{-- </div> --}}
                </div>
            </div>
            <!--// Footer Widgets Area -->

            <!-- Footer Copyright Area -->
           <!-- <div class="footer-area__copyright bg--dark">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright text-center">
                                ©COPYRIGHT, ALL RIGHTS RESERVED BY
                                <a href="#">Yuvmedia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--// Footer Copyright Area -->

        </footer>
        <!-- //Footer Area -->

    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/marqee.js"></script>

</body>


</html>
