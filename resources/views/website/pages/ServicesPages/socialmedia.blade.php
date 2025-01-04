@extends('website.layout.websitemain')
@section('title', 'Web Development | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-2 position-relative" id="socialmediasection">
        <div class="container py-5">
            <div class="row">
                <div class="text-center socialmedheading">
                    Grow Your Brand Image With <span class="socialmedheadingsub">Social Media</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap socialmedsecondhead">
                        From Instagram To Facebook To Twitter To Youtube, We’re The Superhero Behind The Success Of Hundreds
                        Of Industry-leading Social Accounts.
                    </p>
                </div>
                <div class="text-center fs-6">
                    <p class="text-wrap fw-bold">
                        Let Your Brand Shine
                    </p>
                </div>
                <div class="d-flex justify-content-center flex-wrap">
                    <div class="me-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-primary">Contact Us <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container  py-5">
            <div class="row align-items-center">
                <div class="col-md-6 p-3 p-md-5">
                    <div class="text-start fs-2 fw-bold text-capitalize position-relative">
                        Amplify Your Brand's Reach with Social Media Expertise
                        <span class="qouteicon">
                            <svg viewBox="0 0 35 33" class="fill-current text-black qoutesvg">
                                <path
                                    d="M.107 19.722a5.088 5.088 0 0 1 1.617-.084c2.663.763 5.34 1.396 7.927 2.372 3.876 1.473 7.713 3.052 11.444 4.837a19.71 19.71 0 0 1 4.204 3.052 1.732 1.732 0 0 1 .374 1.633 1.8 1.8 0 0 1-1.564.64 15.77 15.77 0 0 1-3.754-1.22 691.449 691.449 0 0 1-14.686-7.301c-1.93-1-3.785-2.136-5.669-3.212l.107-.717ZM16.708 0c.539.134 1.053.35 1.526.64 2.052 1.84 4.173 3.632 6.05 5.647 2.823 3.051 5.547 6.172 8.133 9.414a20.022 20.022 0 0 1 2.41 4.623 1.755 1.755 0 0 1-.396 1.633 1.8 1.8 0 0 1-1.686-.114 16.124 16.124 0 0 1-2.853-2.77 725.989 725.989 0 0 1-9.919-13.107c-1.289-1.732-2.449-3.578-3.662-5.34L16.708 0Z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Social media is a powerful tool to connect with your audience, build brand awareness, and drive
                            engagement. Our team of experts will help you create a strong social media presence.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            We tailor our strategies to your unique business needs, ensuring that your social media efforts
                            align with your overall marketing goals and deliver measurable results.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  seobbtn">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 p-3 p-md-5">
                    <img class="seoimage "
                        src="{{ asset('assets/websiteAssets/images/services/social-media-marketing.webp') }}"
                        alt="seo">
                </div>
            </div>
        </div>
    </section>

    <section class="py-2 position-relative">
        <div class="container  py-5">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 p-3 p-md-5 ">
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/social-first-india.jpg') }}"
                        alt="seo">
                </div>
                <div class="col-md-6 p-3 p-md-5 ">
                    <div class="text-start fs-2 fw-bold text-capitalize position-relative">
                        Social-first strategies, for our social-first world
                        <span class="qouteicon">
                            <svg viewBox="0 0 35 33" class="fill-current text-black qoutesvg">
                                <path
                                    d="M.107 19.722a5.088 5.088 0 0 1 1.617-.084c2.663.763 5.34 1.396 7.927 2.372 3.876 1.473 7.713 3.052 11.444 4.837a19.71 19.71 0 0 1 4.204 3.052 1.732 1.732 0 0 1 .374 1.633 1.8 1.8 0 0 1-1.564.64 15.77 15.77 0 0 1-3.754-1.22 691.449 691.449 0 0 1-14.686-7.301c-1.93-1-3.785-2.136-5.669-3.212l.107-.717ZM16.708 0c.539.134 1.053.35 1.526.64 2.052 1.84 4.173 3.632 6.05 5.647 2.823 3.051 5.547 6.172 8.133 9.414a20.022 20.022 0 0 1 2.41 4.623 1.755 1.755 0 0 1-.396 1.633 1.8 1.8 0 0 1-1.686-.114 16.124 16.124 0 0 1-2.853-2.77 725.989 725.989 0 0 1-9.919-13.107c-1.289-1.732-2.449-3.578-3.662-5.34L16.708 0Z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap">
                            We work with brands that are looking to lead their industry and thrive in this
                            social-firstworld.
                        </p>
                        <p>
                            We're not here to tick boxes but to push the boundaries, deliver significant brand growth and
                            captivate your audience with social-first content. We focus on outcomes, not outputs.
                        </p>
                        <p>
                            We've designed our team to ensure we're ready for all challenges. It includes strategists,
                            community & channel managers, content creators, videographers, designers, paid social experts,
                            influencer managers and analytics leads.
                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  seobbtn">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-md-6 p-3 p-md-5">
                    <div class="text-start fs-2 fw-bold text-capitalize position-relative">
                        Platform-specific social content
                        <span class="qouteicon">
                            <svg viewBox="0 0 35 33" class="fill-current text-black qoutesvg">
                                <path
                                    d="M.107 19.722a5.088 5.088 0 0 1 1.617-.084c2.663.763 5.34 1.396 7.927 2.372 3.876 1.473 7.713 3.052 11.444 4.837a19.71 19.71 0 0 1 4.204 3.052 1.732 1.732 0 0 1 .374 1.633 1.8 1.8 0 0 1-1.564.64 15.77 15.77 0 0 1-3.754-1.22 691.449 691.449 0 0 1-14.686-7.301c-1.93-1-3.785-2.136-5.669-3.212l.107-.717ZM16.708 0c.539.134 1.053.35 1.526.64 2.052 1.84 4.173 3.632 6.05 5.647 2.823 3.051 5.547 6.172 8.133 9.414a20.022 20.022 0 0 1 2.41 4.623 1.755 1.755 0 0 1-.396 1.633 1.8 1.8 0 0 1-1.686-.114 16.124 16.124 0 0 1-2.853-2.77 725.989 725.989 0 0 1-9.919-13.107c-1.289-1.732-2.449-3.578-3.662-5.34L16.708 0Z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap">
                            We know each algorithm inside and out. They're all different, and so they should be treated that
                            way.
                        </p>
                        <p>
                            Creating content for specific platforms is vital for growth, rather than a cookie-cutter
                            approach of re-posting everywhere. Our strategists and planners are built to deliver narratives
                            that align with the individual platform algorithms.
                        </p>
                        <p>
                            Our team has both the technical and creative capabilities to ensure we're delivering content
                            that adapts to algorithm changes.
                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-primary">
                                Get In Touch To See How We Can Help You <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 p-3 p-md-5">
                    <img class="seoimage img-fluid"
                        src="{{ asset('assets/websiteAssets/images/services/Platform-specific-social-content.jpg') }}"
                        alt="seo">
                </div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-md-6 p-3 p-md-5">
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/data-driven.png') }}"
                        alt="seo">
                </div>
                <div class="col-md-6 p-3 p-md-5">
                    <div class="text-start fs-2 fw-bold text-capitalize position-relative">
                        We take a data-driven approach to social
                        <span class="qouteicon">
                            <svg viewBox="0 0 35 33" class="fill-current text-black qoutesvg">
                                <path
                                    d="M.107 19.722a5.088 5.088 0 0 1 1.617-.084c2.663.763 5.34 1.396 7.927 2.372 3.876 1.473 7.713 3.052 11.444 4.837a19.71 19.71 0 0 1 4.204 3.052 1.732 1.732 0 0 1 .374 1.633 1.8 1.8 0 0 1-1.564.64 15.77 15.77 0 0 1-3.754-1.22 691.449 691.449 0 0 1-14.686-7.301c-1.93-1-3.785-2.136-5.669-3.212l.107-.717ZM16.708 0c.539.134 1.053.35 1.526.64 2.052 1.84 4.173 3.632 6.05 5.647 2.823 3.051 5.547 6.172 8.133 9.414a20.022 20.022 0 0 1 2.41 4.623 1.755 1.755 0 0 1-.396 1.633 1.8 1.8 0 0 1-1.686-.114 16.124 16.124 0 0 1-2.853-2.77 725.989 725.989 0 0 1-9.919-13.107c-1.289-1.732-2.449-3.578-3.662-5.34L16.708 0Z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap">
                            Data-driven strategies combined with our creativity are exactly why we've been able to win
                            awards such as Best Large Social Agency and deliver incredible results time and time again.
                        </p>
                        <p>
                            A lot of social agencies and brands create content for the sake of it without any reasoning
                            behind what they're creating.
                        </p>
                        <p>
                            We dive deep into content analysis and why each piece is either performing or underperforming.
                            This leads us to make adjustments to our content plans on a weekly and monthly and overarching
                            strategy on a quarterly basis.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  seobbtn">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="py-2 position-relative">
        <div class="container  py-5">
            <div class="fs-2 fw-bold mb-4">
                Our full-service Social offering...
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="serviceSlider" class="owl-carousel">
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Channel & Community Management</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text fw-bold">
                                        We manage your brands channels and community
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Content Strategy and Planning
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Content Creation
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Community Management
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Copywriting and Scheduling
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Social Housekeeping
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Content Creation</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text fw-bold">
                                        We produce social-first content for your channels
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Social-first Video (Instagram, Reels)
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            User-Generated Content, Feed, Stories, Pins
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Graphic Design, Motion and Animation
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Social Campaigns
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Paid Social</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text fw-bold">
                                        We manage Paid Social campaigns that drive awareness and conversion
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Paid Social Management
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Media Planning, Buying, Analytics, A/B Testing and more
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Paid Social Creative (Design and Video)
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Ongoing Optimisation
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Reporting and Insights
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Influencer & UGC</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text fw-bold">
                                        We deliver Influencer Campaigns and Content Creators
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            End-to-end Campaign Management
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Brand Awareness and Direct Response Objectives
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Micro, Macro, Celebrity Influencer Campaigns
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            UGC Content for Organic & Paid Social
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Reporting & Insights</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text fw-bold">
                                        We build bespoke reporting solutions for our clients
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Bespoke Build Reports
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Social Listening
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Platform & Consumer Insights
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Competitor Analysis
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Social Audits
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-2 position-relative">
        <div class="container py-2">
            <div class="text-start socialmedheading">
                Checkout our latest <br />
                Social content
            </div>
            <div class="swiper-container swiper-full-mobile swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper py-4">
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/3.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/4.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/5.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/6.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/7.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/8.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/9.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/10.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/11.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/12.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/13.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/14.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/15.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/websiteAssets/images/socialmedia/16.jpg') }}" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="bannerbg position-relative py-5">
        <div class="container py-5 justify-content-center ">
            <div class="row">
                <div class="text-center socialmedheadingsecthree">
                    Why <span class="socialmedheadingsubsecthree">Yuvmedia</span>
                </div>

            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/packaging.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Meta Business Partner</p>
                            <p class="card-text text-start text-wrap">We're recognised as a Meta Business Partner and have
                                agency reps & relationships with all the major social platforms.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacards h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/talking.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Specialists</p>
                            <p class="card-text text-start text-wrap">Our team consists of Social Strategists, Content
                                Creators, Videographers, Influencer Managers & Analysts - ensuring we have specialists for
                                every requirement.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/target-audience.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Engaging social-first content</p>
                            <p class="card-text text-start text-wrap">We know how to create engaging social-first content
                                for each social algorithm whilst building your brand and driving ROI.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2 gy-4">
                <div class="col-md-4">
                    <div class="socialmediacards h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/conversation.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Design & build custom reports</p>
                            <p class="card-text text-start text-wrap">We design & build custom reports that align with your
                                business goals, priorities and core KPIs.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/socialmediamarting.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Social transformation</p>
                            <p class="card-text text-start text-wrap">Whether you're looking to take your brand through a
                                social transformation, need a trusted pair of hands to grow your socials, or have a lack of
                                resource internally - we can help you.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bannerbg position-relative py-5">
        <div class="container py-5 justify-content-center ">
            <div class="row">
                <div class="text-center socialmedheadingsecthree">
                    Focus <span class="socialmedheadingsubsecthree">Areas</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap socialmedsecondheadsecthree">
                        When you partner with us, you gain more than just a video; you
                        receive a captivating story that
                        aligns with your brand’s vision.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/packaging.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">A Perfectly Set Brand Image</p>
                            <p class="card-text text-start text-wrap">We prioritize
                                maintaining your brand's image and
                                consumer trust above all else, ensuring they align with your
                                brand values.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/talking.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Get People Talking</p>
                            <p class="card-text text-start text-wrap">We can help you
                                achieve your desired brand
                                recognition
                                by precisely placing and highlighting your brand's unique
                                products or qualities.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/target-audience.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Target Audience</p>
                            <p class="card-text text-start text-wrap">Understanding your
                                social media target audience is
                                one
                                of the most important aspects of social media marketing.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2 gy-4">
                <div class="col-md-4">
                    <div class="socialmediacards h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/conversation.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">The Right Communication</p>
                            <p class="card-text text-start text-wrap">Tell us your brand
                                story, and we'll bring it to life.
                                We'll take that knowledge and convey the same message as
                                effectively as possible.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/socialmediamarting.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">The Perfect Social Media
                                Marketing Recipe</p>
                            <p class="card-text text-start text-wrap">We have the perfect
                                ingredients to cook the ultimate
                                social media marketing dish with high-impact campaigns for
                                your brand.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacards h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/template.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">The Perfect Brand Template</p>
                            <p class="card-text text-start text-wrap">Bring your brand's
                                vision to life with our custom
                                templates and designs. We'll capture your brand's unique
                                personality carefully.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>


    <script>
        var swiperMobile = new Swiper('.swiper-container.swiper-full-mobile', {
            slidesPerView: 5,
            spaceBetween: 50,
            slideToClickedSlide: true,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 2000,
            },
            keyboard: {
                enabled: true,
                onlyInViewport: true,
            },
            breakpoints: {

                640: {
                    freemode: true,
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                320: {
                    freemode: true,
                    slidesPerView: 1,
                    spaceBetween: 20,
                }
            }
        });
    </script>
@endsection
