@extends('website.layout.websitemain')
@section('title', 'Social Media | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-2 position-relative" id="socialmediasection">
        <div class="container py-4 py-md-5 ">
            <div class="row">
                <div class="text-center socialmedheading">
                    Make Your Brand More Visible <br />
                    <span class="globaltxtcolor fs-2"> Social Media Marketing Power</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap socialmedsecondhead">
                        From Instagram Reels to Facebook Ads, from X (Twitter) Trends to YouTube Shorts — we’re the creative
                        growth partners fueling viral campaigns, boosting engagement, and driving measurable ROI for
                        hundreds of top-performing brands.
                    </p>
                </div>
                <div class="text-center fs-6">
                    <p class="text-wrap fw-bold">
                        Turn Likes into Leads, Followers into Customers!
                    </p>
                </div>
                <div class="d-flex justify-content-center flex-wrap">
                    <div class="me-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-primary">Book a call <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container  py-4 py-md-5 ">
            <div class="row align-items-center">
                <div class="col-md-6 p-3 p-lg-5">
                    <div class="text-start fs-2 fw-bold text-capitalize position-relative">
                        More Reach, More Engagement, More Sales!
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
                            The single-minded objective behind Our Social Media Marketing Services is to position your brand
                            at the center of online conversations.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            By leveraging data-driven strategies and creative storytelling, we help you connect with your
                            target audience, increase brand awareness, and drive meaningful engagement. From content
                            creation to community management, we ensure your brand stays relevant, builds trust, and
                            ultimately converts followers into loyal customers.

                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  seobbtn">Let’s turn social interactions into
                                real business growth! <i class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 ">
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/smm/smm.webp') }}"
                        alt="seo">
                </div>
            </div>
        </div>
    </section>

    <section class="py-2 position-relative">
        <div class="container  py-4 py-md-5 ">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 p-3 p-lg-5 ">
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/social-first-india.jpg') }}"
                        alt="seo">
                </div>
                <div class="col-md-6 p-3 p-lg-5 ">
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

                    {{-- <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  seobbtn">Book a call <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                    </div> --}}
                </div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-md-6 p-3 p-lg-5">
                    <div class="text-start fs-2 fw-bold text-capitalize position-relative">
                        Engage Your Audience with Platform-Specific Content
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
                            Each social media platform has its own unique algorithm and user behaviour and we know exactly
                            how to leverage these details to your advantage.
                        </p>
                        <p>
                            Our platform-specific content strategies are designed to make sure your brand stands out and
                            engages your target audience effectively on every platform.
                        </p>
                        <p>
                            From creating visually appealing posts on Instagram to sharing detailed, thought-provoking
                            articles on LinkedIn, we tailor each piece of content to align with the platform’s strengths and
                            your audience’s needs.
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
                <div class="col-md-6 p-3 p-lg-5">
                    <img class="seoimage img-fluid"
                        src="{{ asset('assets/websiteAssets/images/services/Platform-specific-social-content.jpg') }}"
                        alt="seo">
                </div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-md-6 p-3 p-lg-5">
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/smm/datadriven.png') }}"
                        alt="seo">
                </div>
                <div class="col-md-6 p-3 p-lg-5">
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
                            We take a data-driven approach to social media, ensuring that every decision we make is backed
                            by valuable insights.
                        </p>
                        <p>
                            By analyzing trends, user behavior, and performance metrics, we create strategies that resonate
                            with your audience and drive results.
                        </p>
                        <p>
                            Our goal is to optimize every campaign, maximize engagement, and help your brand grow with
                            measurable outcomes. With data as our foundation, we ensure that your social media efforts are
                            always aligned with your business objectives.
                        </p>
                    </div>
                    {{-- <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  seobbtn">Book a call <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </section>


    <section class="py-2 position-relative">
        <div class="container  py-4 py-md-5 ">
            <div class="fs-2 fw-bold mb-4">
                Power-Packed Social Media Solutions to Scale Your Brand
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="serviceSlider" class="owl-carousel">
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Smart Content Strategy & Calendar</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We build AI-powered content calendars that align with your brand voice and goals,
                                        ensuring consistent visibility and engagement.
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Short-Form Video First (Reels, TikTok, Shorts)
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            UGC & Community-Centric Content
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Motion Graphics, AR/VR Filters, Memes
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Trend-Based Social Campaigns
                                        </li>
                                    </ul>

                                    <p class="card-text">
                                        Plan smarter — Let’s design your content roadmap today!
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Creative Design & Paid Social Growth</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Our design team blends storytelling with data-driven insights to create
                                        scroll-stopping visuals and ROI-driven campaigns.
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            AI-Enhanced Design & Video Creative
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Paid Social Management & Programmatic Ads
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Media Planning, A/B Testing, Predictive Analytics
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Continuous Optimization & Insightful Reporting
                                        </li>

                                    </ul>
                                    <p class="card-text">
                                        Turn ideas into impact — Launch your next winning campaign with us!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Engagement, Community & Influencers</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We foster authentic connections that turn followers into loyal advocates.
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            End-to-End Campaign Management
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Brand Awareness + Conversion Objectives
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Micro, Nano & Celebrity Influencer Campaigns
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            UGC Activation for Organic & Paid Growth
                                        </li>
                                    </ul>
                                    <p class="card-text">
                                        Grow your community — Start building stronger engagement now!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Paid Ads That Convert</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We run hyper-targeted, performance-driven social ads that maximize ROI, attract the
                                        right audience, and boost brand visibility.
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            AI-Optimized Targeting & Retargeting
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Social Listening & Consumer Insights
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Competitor Benchmarking
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            In-Depth Social Audits
                                        </li>
                                    </ul>
                                    <p class="card-text">
                                        Amplify your reach — Launch high-impact ad campaigns today!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Hashtag Research & Trend Mapping</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We identify trending, relevant hashtags to increase discoverability, engagement, and
                                        content reach across platforms.
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Bespoke Hashtag Reports
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Social Listening Tools
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Consumer Behavior Insights
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Competitor Analysis & Gap Reports
                                        </li>
                                    </ul>
                                    <p class="card-text">
                                        Be seen where it matters — Unlock the hashtags your audience follows!
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Weekly Performance Monitoring</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We track and optimize your social media presence with weekly reports that highlight
                                        growth, engagement, and improvement opportunities.
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Custom Growth Reports
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Platform & Consumer Insights
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Competitive Landscape Analysis
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Continuous Social Audits
                                        </li>
                                    </ul>
                                    <p class="card-text">Stay ahead of the curve — Get actionable insights every week!</p>

                                </div>
                            </div>
                        </div>
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Brand Theme & Font Design</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We craft a cohesive brand identity with tailored fonts, visuals, and design elements
                                        that reflect your personality across all platforms. This ensures a polished,
                                        professional, and recognizable presence.
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Bespoke Brand Reports
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Social Listening & Consumer Insights
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Competitor Benchmarking
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Consistent Cross-Platform Styling
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Social Audits
                                        </li>
                                    </ul>
                                    <p class="card-text">
                                        Stand out with a strong brand identity — Let’s design your signature look!
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Competitor Analysis & Insights</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We decode your competitors’ social strategies to uncover growth opportunities,
                                        benchmark performance, and position your brand ahead in the market.
                                    </p>
                                    <ul class="p-0">
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Data-Driven Strategy & Content Planning
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Competitor Content Mapping
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Community & Engagement Tracking
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Copywriting Style & Scheduling Gaps
                                        </li>
                                        <li class="flex">
                                            <i class="bi bi-patch-check-fill text-success"></i>
                                            Social Housekeeping & Optimizations
                                        </li>

                                    </ul>
                                    <p class="card-text">
                                        Outsmart the competition — Discover hidden opportunities today!
                                    </p>
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
            <div class="text-start fs-1 fw-bold">
                See What’s New in Our Social Content Portfolio
            </div>
            <div class="slick-slider">
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/17.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/18.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/19.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/20.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/21.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/22.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/23.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/1.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/3.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/4.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/5.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/6.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/7.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/8.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/9.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/10.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/11.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/12.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/13.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/14.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/15.jpg') }}" alt="">
                </div>
                <div>
                    <img class="img-fluid p-3 rounded-5 "
                        src="{{ asset('assets/websiteAssets/images/socialmedia/16.jpg') }}" alt="">
                </div>
            </div>


        </div>
    </section>


    <section class=" position-relative py-4 py-md-5 ">
        <div class="container py-4 py-md-5  justify-content-center ">
            <div class="row">
                <div class="text-center socialmedheadingsecthree">
                    What Makes <span class="fw-bold text-primary">Yuvmedia Different?</span>
                </div>

            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/packaging.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Meta-Certified Partner</p>
                            <p class="card-text text-start text-wrap">Recognized as a Meta Business Partner, we access
                                exclusive tools, insights, and direct platform support to boost performance and ROI.</p>

                            <p class="card-text text-start text-wrap">
                                Unlock growth with a certified partner!
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacards h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/talking.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Specialist Team</p>
                            <p class="card-text text-start text-wrap">From Social Strategists and Videographers to
                                Influencer Managers and Analysts—our experts deliver end-to-end social success.</p>
                            <p class="card-text text-start text-wrap">Scale faster with our specialist squad!</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/target-audience.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Social-First Content</p>
                            <p class="card-text text-start text-wrap">We create platform-optimized, algorithm-friendly
                                content that drives conversations, cultural relevance, and measurable ROI.</p>
                            <p class="card-text text-start text-wrap">Let’s craft content that converts!</p>

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
                            <p class="fw-bold text-start">Custom Reports</p>
                            <p class="card-text text-start text-wrap">We design KPI-focused reports aligned with your brand
                                goals—giving clarity on performance, engagement, and conversions.</p>
                            <p class="card-text text-start text-wrap">See what matters — get your custom report!</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/socialmediamarting.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Social Transformation</p>
                            <p class="card-text text-start text-wrap">From scaling communities to embedding social into
                                your business DNA—we guide your brand through real digital transformation.
                            </p>
                            <p class="card-text text-start text-wrap">Future-proof your brand today!

                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class=" position-relative py-4 py-md-5 ">
        <div class="container py-4 py-md-5  justify-content-center ">
            <div class="row">
                <div class="text-center socialmedheadingsecthree">
                    Sectors We Empower as <span class="fw-bold text-primary">a Future-Ready Social Media Agency</span>
                </div>

            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start d-flex align-items-center d-flex align-items-center">
                            <img src="{{ asset('assets/websiteAssets/images/services/smm/Healthcare & Wellness.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start ms-3">Healthcare & Wellness</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacards h-100">
                        <div class="card-body text-start d-flex align-items-center">
                            <img src="{{ asset('assets/websiteAssets/images/services/smm/E-commerce & Retail.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start ms-3">E-commerce & Retail</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start d-flex align-items-center">
                            <img src="{{ asset('assets/websiteAssets/images/services/smm/Education & EdTech.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start ms-3">Education & EdTech</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2 gy-4">
                <div class="col-md-4">
                    <div class="socialmediacards h-100">
                        <div class="card-body text-start d-flex align-items-center">
                            <img src="{{ asset('assets/websiteAssets/images/services/smm/Travel & Hospitality.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start ms-3">Travel & Hospitality</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start d-flex align-items-center">
                            <img src="{{ asset('assets/websiteAssets/images/services/smm/Real Estate.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start ms-3">Real Estate</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start d-flex align-items-center">
                            <img src="{{ asset('assets/websiteAssets/images/services/smm/Technology, FinTech & Finance.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start ms-3">Technology, FinTech & Finance</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start d-flex align-items-center">
                            <img src="{{ asset('assets/websiteAssets/images/services/smm/Legal, Professional & B2B.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start ms-3">Legal, Professional & B2B</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start d-flex align-items-center">
                            <img src="{{ asset('assets/websiteAssets/images/services/smm/automotive.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start ms-3">Automotive & EV Brands</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start d-flex align-items-center">
                            <img src="{{ asset('assets/websiteAssets/images/services/smm/woman.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start ms-3">Digital Fashion & Metaverse Brands</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start d-flex align-items-center">
                            <img src="{{ asset('assets/websiteAssets/images/services/smm/shop-bag.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start ms-3">Creator Economy & Social Commerce</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class=" position-relative py-4 py-md-5 ">
        <div class="container py-4 py-md-5  justify-content-center ">
            <div class="row">
                <div class="text-center socialmedheadingsecthree">
                    Focus <span class="fw-bold text-primary">Areas</span>
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
                            <p class="fw-bold text-start">A Perfect Brand Image:</p>
                            <p class="card-text text-start text-wrap">
                                We help shape a consistent and compelling brand identity across all social platforms,
                                ensuring your brand speaks with one unified voice, making a lasting impression on your
                                audience.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/talking.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Get People Talking</p>
                            <p class="card-text text-start text-wrap">
                                Our social media strategies are designed to initiate meaningful conversations with your
                                audience, turning passive viewers into active participants and brand advocates.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/target-audience.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Target Audience Expertise</p>
                            <p class="card-text text-start text-wrap">We leverage deep insights into your target audience,
                                ensuring that each post, ad, and interaction resonates with the right people at the right
                                time for maximum engagement.</p>

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
                            <p class="fw-bold text-start">Effective Communication:</p>
                            <p class="card-text text-start text-wrap">With a focus on clear and impactful messaging, we
                                make sure your brand communicates effectively with your audience, building trust and
                                fostering loyalty.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/socialmediamarting.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">High-Impact Campaigns:</p>
                            <p class="card-text text-start text-wrap">Our creative social campaigns are designed to deliver
                                maximum impact, helping you achieve your goals by increasing brand visibility, engagement,
                                and conversions.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacards h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/template.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Custom Branding Templates:</p>
                            <p class="card-text text-start text-wrap">We create custom templates that align with your
                                brand’s aesthetic and message, ensuring your content stands out with professional and
                                visually appealing designs across all social channels.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5 position-relative bannerbg">
        <div class="container  py-4 py-md-5 ">
            <div class="fs-2 fw-bold mb-4">
                Trusted Voices: Client Success Stories with Yuvmedia
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="testimonialsSlider" class="owl-carousel owl-theme">
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="card-body">
                                    <p class="card-text">
                                        "Since teaming up with Yuvmedia, our social engagement skyrocketed within months.
                                        We’re not only seeing more leads but also stronger customer trust. Their data-driven
                                        strategies and creative storytelling truly make our brand shine online."
                                    </p>
                                    <div class="fw-bold">
                                        - David R., Retail Business Owner
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="card-body">
                                    <p class="card-text">
                                        "The Yuvmedia team helped us scale with AI-powered targeting and social-first
                                        campaigns. Our ROI doubled, and we’re finally connecting with the right audience at
                                        the right time."
                                    </p>
                                    <div class="fw-bold">
                                        — Sonia M., EdTech Founder
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="card-body">
                                    <p class="card-text">
                                        "What stood out most was their focus on community-led growth and authentic content.
                                        We’ve built a stronger digital presence and seen measurable results faster than
                                        expected."
                                    </p>
                                    <div class="fw-bold">
                                        — Karan S., Real Estate Developer
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            <h2 class=" fw-bold mb-4 fs-3 ">Struggling With Low Engagement and Missed Conversions?</h2>
                            <p>
                                Let Our AI-Powered Social Media Growth Strategies Transform Your Brand!

                            </p>
                            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                                <a href="tel:+918824269821" class="btn btn-danger btn-lg"> <i
                                        class="bi bi-telephone"></i> Book Your Free Proposal</a>
                                <a href="https://wa.me/918824269821" class="btn btn-success btn-lg"><i
                                        class="bi bi-whatsapp"></i> Chat on WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>



@endsection
