@extends('website.layout.websitemain')
@section('title', 'Google My Business | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-5 position-relative" style="background-color: #ffffff">
        <div class="container py-5">
            <div class=" row">
                <div class="col-md-6">
                    <div class="text-start gmbheading">
                        Optimize Your Online Presence with <span class="text-primary fw-bold">Google My Business</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap gmbsecondhead">
                            YUVMEDIA is committed to managing your Google My Business (GMB) profile strategically to attract
                            your target audience and generate real results for your business. Our complete GMB packages are
                            designed to optimize every aspect of your listing, guaranteeing increased visibility and
                            engagement.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap gmbsecondhead">
                            Choose YUVMEDIA GMB management services for comprehensive listing management, keyword
                            optimization, post-GMB listing audits, competitor analysis, and local keyword research.
                            Establishing a robust presence on Google My Business is essential for businesses aiming to
                            increase revenue and build trust with their audience.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg gmbbtn">Get Started for Free <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 position-relative px-5">
                    <div class="ion-hero-ambient-video ">

                        <video class="ion-hero-ambient-video__container" autoplay="" playsinline="" muted="true"
                            preload="auto">
                            <source
                                src="https://www.gstatic.com/marketing-cms/ads/ed/2b/3cb6fb6d4b9fa85a58897f24c4bd/overview-en-in.mp4"
                                type="video/mp4">
                        </video>
                        <div class="ion-animation-control">
                            <button class="play hidden" aria-label="Play animation">
                                <svg role="presentation" width="28" height="28" viewBox="0 0 28 28">
                                    <path fill="#5f6368"
                                        d="M.666 14C.666 6.64 6.639.667 13.999.667S27.333 6.64 27.333 14s-5.974 13.333-13.334 13.333C6.64 27.333.666 21.36.666 14Zm18.667 0-8-6v12l8-6Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="tooltip">
                                <p class="tooltip-content">Play animation</p>
                            </div>
                            <button class="pause" aria-label="Pause animation">
                                <svg role="presentation" width="28" height="28" viewBox="0 0 28 28">
                                    <path fill="#5f6368" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 .667C6.64.667.665 6.64.665 14s5.973 13.333 13.333 13.333S27.333 21.36 27.333 14 21.359.667 13.999.667Zm-1.334 18.666H9.999V8.667h2.667v10.666Zm2.667 0h2.666V8.667h-2.666v10.666Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="tooltip">
                                <p class="tooltip-content">Pause animation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative ">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center gmbheading">
                    Take charge of your first impression

                </div>
                <div class="text-center py-2">
                    <p class="text-wrap gmbsecondhead">
                        Highlight essential info and show what makes your business unique, right on your Business Profile.
                    </p>
                </div>


                <!-- Accordion Section -->
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <div class="tab-content">
                        <div class="accordion " id="accordionExample">
                            <div class="accordion-item rounded-4 mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                        onclick="switchTab('v-pills-home-tab');">
                                        Add essential info
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Add information like your phone number, operating hours, and health and safety
                                        measures, so customers know what to expect.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-4 mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                        onclick="switchTab('v-pills-profile-tab');">
                                        Share photos, your logo, and more
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Show your business’s personality with photos, a cover image, your logo, and more to
                                        stand out to customers.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-4 mb-3 ">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3"
                                        onclick="switchTab('v-pills-3-tab');">
                                        Show who you are
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Add attributes like women-led so people can learn more about your business.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab Section -->
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3 d-none" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab"
                                aria-controls="v-pills-home" aria-selected="true"
                                onclick="switchAccordion('#collapseOne');">
                                Home
                            </button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false"
                                onclick="switchAccordion('#collapseTwo');">
                                Profile
                            </button>
                            <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3"
                                aria-selected="false" onclick="switchAccordion('#collapse3');">
                                Profile
                            </button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="w-75">
                                    <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/1f/dc/9c81c95b4cdc88db098c53855d6d/img-1.png=n-w1008-h1002-rw"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="w-75">
                                    <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/be/47/4b57ceb047faa66261121a9b7b02/img-2.png=n-w1008-h1002-rw"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="w-75">
                                    <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/89/75/6d58c53746078041b2d47587cea3/img-3.png=n-w1008-h1002-rw"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center gmbheading">
                    Take charge of your first impression

                </div>
                <div class="text-center py-2">
                    <p class="text-wrap gmbsecondhead">
                        Highlight essential info and show what makes your business unique, right on your Business Profile.
                    </p>
                </div>
                <div class="col-md-6 position-relative">
                    <div class="position-sticky" style="top: calc(-259px + 50vh);">

                        <h2>Show what you offer,<br /> from menu dishes to services.</h2>
                        <p>Whether you’re a restaurant, store, or service provider,<br /> your profile helps customers do
                            business<br />
                            with you easily and directly with menus, quotes, and more.
                        </p>
                        <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-primary">Get Started for Free <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="p-5 mb-3 rounded-3 bg-white shadow-sm text-center fade-in-box">
                        <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/89/e1/c9ef029444f0bdf061cf5a9becb2/img-8.png=n-w898-h922-rw"
                            alt="" class="img-fluid mb-3">
                        <h4>
                            Accept food orders and more
                        </h4>
                        <p>
                            Take orders for delivery and pickup and let customers make reservations. Even add your menu,
                            so people can discover your best dishes.
                        </p>
                    </div>
                    <div class="p-5 mb-3 rounded-3 bg-white shadow-sm text-center fade-in-box">
                        <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/eb/96/2faae1e34b2f9afd8282a80ea4c4/img-9.png=n-w782-h887-rw"
                            alt="" class="img-fluid mb-3">
                        <h4>
                            Offer more ways to shop
                        </h4>
                        <p>
                            Show whether you offer options like curbside pickup or delivery.
                        </p>
                    </div>
                    <div class="p-5 mb-3 rounded-3 bg-white shadow-sm text-center fade-in-box">
                        <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/d3/10/21f17ceb4ff3849c450eafbf8cba/img-10.png=n-w934-h887-rw"
                            alt="" class="img-fluid mb-3">
                        <h4>
                            Offer your services
                        </h4>
                        <p>
                            Show a list of your business services and provide online quotes, so customers get the info they
                            need to choose you.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container  py-5 justify-content-center">
            <div id="gbpslider" class="owl-carousel owl-theme">
                <div class="item p-2">
                    <div class="row justify-content-center p-5 shadow-sm rounded-4 bg-white">
                        <div class="col-md-6">
                            <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/a0/79/b7ef86af4938a239380d4e06cedc/img-12.png=c-s2004-rw"
                                alt="service bg" class="img-fluid rounded-4">
                        </div>
                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                            <div class="fs-4 fw-bold">
                                “With Google, even small businesses like us can think big.”
                            </div>
                            <div>Krishne Tassels-Bengaluru, Karnataka</div>
                        </div>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="row justify-content-center p-5 shadow-sm rounded-4 bg-white">
                        <div class="col-md-6">
                            <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/a1/ba/a9f421644c22bba7dda759cfc884/img-13.png=c-s2004-rw"
                                alt="service bg" class="img-fluid rounded-4">
                        </div>
                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                            <div class="fs-4 fw-bold">
                                “Our top priority was to spread our visibility to the new people
                                that are coming in to the city. We did this with Google My
                                Business.”
                            </div>
                            <div>Ram Asrey Sweets-Lucknow, Uttar Pradesh</div>
                        </div>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="row justify-content-center p-5 shadow-sm rounded-4 bg-white">
                        <div class="col-md-6">
                            <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/16/4a/8b57944e42e3bbfa44ff2702cc99/img-14.png=c-s2004-rw"
                                alt="service bg" class="img-fluid rounded-4">
                        </div>
                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                            <div class="fs-4 fw-bold">
                                “Since we created our online presence with Google, I have
                                provided work for 500 artisans. We offer them much-needed
                                revenue and this allows their craft to survive. Google has
                                literally made the lives of so many people here.”
                            </div>
                            <div>Bharath Arts and Crafts-Channapatna, Karnataka</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative ">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center gmbheading">
                    Discover the Benefits of Partnering with a <span class="fw-bold text-primary">Google My Business Service
                        Provider</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap gmbsecondhead">
                        Managing your Google My Business profile can be time-consuming, but partnering with a professional
                        service provider ensures your business gets the attention it deserves.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/online-presence.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Establishing your online presence has never been easier.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/google-maps.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Ensure your customers can easily find you on Google Maps with a fully
                                optimized profile.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/verified.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Highlight key business details such as operating hours and contact
                                numbers.
                            </p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/customer-satisfaction.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Build a strong reputation through positive client feedback.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/performance-boost.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Drive more visitors to your website with our expert Google My Business
                                services.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/monitoring.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Track customer interactions, measure performance, and make data-driven
                                improvements!</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap fw-bold bg-success-subtle rounded-4">
                        Feel the impact of YUVMEDIA GMB Services and elevate your business to new heights while you
                        concentrate on what you do best.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 position-relative bannerbg">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center gmbheadingsecthree">
                    Complete Optimization for Your <span class="fw-bold text-primary">Google My Business Page</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap gmbsecondheadsecthree">
                        Maximize your local business potential with a fully optimized Google My Business profile. From
                        keyword analysis to strategic audits and engaging campaigns, we ensure your business stands out in
                        local search results.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-3">
                    <div class="gmbcardssecthree">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/competitive-analysis.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Keyword and Competitor Analysis</p>
                            <p class="card-text text-start text-wrap">We analyze your competitors' GMB and optimize your
                                GMB with keywords to improve you ranking.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gmbcardssecthree">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/audit.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Audit Of GMB Listing</p>
                            <p class="card-text text-start text-wrap">Our professionals conduct multiple GMB listing audits
                                to develop a strategy for your business growth.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gmbcardssecthree">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/social-marketing.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Executing Campaign</p>
                            <p class="card-text text-start text-wrap">High-quality citations with contextual links for your
                                business. and make GMB profile for target audience.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gmbcardssecthree">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/monthly-reporting.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Weekly and Monthly Reporting</p>
                            <p class="card-text text-start text-wrap">We transparently work with our clients, providing
                                them with weekly and monthly reports of their insights.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.querySelector('.ion-hero-ambient-video__container');
            const playButton = document.querySelector('.ion-animation-control .play');
            const pauseButton = document.querySelector('.ion-animation-control .pause');

            playButton.addEventListener('click', function() {
                video.play();
                playButton.classList.add('hidden');
                pauseButton.classList.remove('hidden');
            });

            pauseButton.addEventListener('click', function() {
                video.pause();
                playButton.classList.remove('hidden');
                pauseButton.classList.add('hidden');
            });
        });
    </script>

    <script>
        function switchTab(tabId) {
            // Switch to the corresponding tab
            document.getElementById(tabId).click();
        }

        function switchAccordion(accordionId) {
            // Collapse all other accordions first
            const allAccordions = document.querySelectorAll('.accordion-collapse');
            allAccordions.forEach((accordion) => {
                if (accordion.id !== accordionId.replace('#', '')) {
                    accordion.classList.remove('show');
                }
            });

            // Open the target accordion
            const targetAccordion = document.querySelector(accordionId);
            if (targetAccordion) {
                targetAccordion.classList.add('show');
            }
        }
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fadeInBoxes = document.querySelectorAll('.fade-in-box');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            fadeInBoxes.forEach(box => {
                observer.observe(box);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#gbpslider').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000, // Adjust timing if needed
                autoplayHoverPause: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>

@endsection
