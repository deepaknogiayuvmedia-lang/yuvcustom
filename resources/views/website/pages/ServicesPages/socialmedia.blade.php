@extends('website.layout.websitemain')
@section('title', 'Web Development | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-2 position-relative" id="socialmediasection">
        <div class="container py-4 py-md-5 ">
            <div class="row">
                <div class="text-center socialmedheading">
                    Make Your Brand More Visible <br />
                    <span class="globaltxtcolor fs-2"> with Social Media Magic</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap socialmedsecondhead">
                        From Instagram To Facebook To Twitter To Youtube, We’re The Superhero Behind The Success Of Hundreds
                        Of Industry-leading Social Accounts.
                    </p>
                </div>
                <div class="text-center fs-6">
                    <p class="text-wrap fw-bold">
                        Turn Likes into Leads, Followers into Customers!
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
                <div class="col-md-6 p-3 p-lg-5">
                    <img class="seoimage "
                        src="{{ asset('assets/websiteAssets/images/services/social-media-marketing.webp') }}"
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

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  seobbtn">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
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
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/data-driven.png') }}"
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
        <div class="container  py-4 py-md-5 ">
            <div class="fs-2 fw-bold mb-4">
                Our comprehensive range of social solutions consists of
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="serviceSlider" class="owl-carousel">
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Competitor Analysis</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We analyze your competitors' social media strategies to uncover insights and
                                        identify opportunities for your brand to stand out and stay ahead in the market.
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
                                    <h6 class="card-title ms-3  fs-4">Content Calendar Setup</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We create a strategic content calendar that aligns with your business goals,
                                        ensuring timely and relevant content across all platforms to engage your audience
                                        consistently.
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
                                    <h6 class="card-title ms-3  fs-4">Content Design and Postings</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Our creative team designs visually appealing posts that represent your brand’s
                                        identity, keeping your content fresh and engaging for maximum audience interaction.
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
                                    <h6 class="card-title ms-3  fs-4">Content Engagement</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We actively engage with your audience by responding to comments, messages, and
                                        initiating meaningful conversations to foster stronger connections with your
                                        followers.
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
                                    <h6 class="card-title ms-3  fs-4">Ads Run On Social Media</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We manage and run targeted social media ads to amplify your brand’s reach, attract
                                        the right audience, and drive conversions, ensuring maximum ROI.
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
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Hashtag Research</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We perform in-depth hashtag research to find trending and relevant hashtags that
                                        increase visibility, engagement, and reach for your posts on various platforms.
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
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Page Monitoring Weekly Report</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We monitor your social media performance closely and provide weekly reports with
                                        insights on engagement, growth, and areas for improvement.
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
                        <div class="item my-3 mx-2">
                            <div class="card rounded-5 border-0 shadow-sm p-3">
                                <div class="d-flex pt-3 px-3 align-items-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/chat.png') }}" class="icons"
                                        alt="...">
                                    <h6 class="card-title ms-3  fs-4">Brand Theme and Fonts Design</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        We create a consistent brand theme, including custom fonts and visuals, that aligns
                                        with your brand identity, ensuring a cohesive and professional look across all
                                        social media platforms.
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
            <div class="text-start fs-1 fw-bold">
                See What’s New in Our <br /> Social Content Portfolio
            </div>
            <div class="slick-slider">
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


    <section class="bannerbg position-relative py-4 py-md-5 ">
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
                            <p class="fw-bold text-start">Meta Business Partner</p>
                            <p class="card-text text-start text-wrap">We're recognised as a Meta Business Partner and have
                                agency reps & relationships with all the major social platforms.</p>

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

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bannerbg position-relative py-4 py-md-5 ">
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
                            <p class="card-text text-start text-wrap">We leverage deep insights into your target audience, ensuring that each post, ad, and interaction resonates with the right people at the right time for maximum engagement.</p>

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
                            <p class="card-text text-start text-wrap">With a focus on clear and impactful messaging, we make sure your brand communicates effectively with your audience, building trust and fostering loyalty.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacardsone h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/socialmediamarting.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">High-Impact Campaigns:</p>
                            <p class="card-text text-start text-wrap">Our creative social campaigns are designed to deliver maximum impact, helping you achieve your goals by increasing brand visibility, engagement, and conversions.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="socialmediacards h-100">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/template.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Custom Branding Templates:</p>
                            <p class="card-text text-start text-wrap">We create custom templates that align with your brand’s aesthetic and message, ensuring your content stands out with professional and visually appealing designs across all social channels.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>



@endsection
