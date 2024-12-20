@extends('website.layout.websitemain')
@section('title', 'Google My Business | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>
    <section class="py-5 position-relative">
        <div class="container py-5">
            <div class=" row">
                <div class="col-md-6">
                    <div class="text-start gmbheading">
                        Optimize Your Online Presence with <span class="gmbheadingsub">Google My Business</span>
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
                <div class="col-md-6 position-relative">
                    <img class="gmbimage" src="{{ asset('assets/websiteAssets/images/gmbnew.png') }}" alt="">
                    <img class="position-absolute top-10 start-100 gmbicon" width="150px"
                        src="{{ asset('assets/websiteAssets/images/gmbpng.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 position-relative ">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center gmbheading">
                    Discover the Benefits of Partnering with a <span class="gmbheadingsub">Google My Business Service
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
                    <div class="gmbcardone">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/presence.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Establishing your online presence has never been easier.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gmbcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/maps.png') }}" alt="service bg" class="mb-3"
                                style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Ensure your customers can easily find you on Google Maps with a fully
                                optimized profile.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gmbcardone">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/user.png') }}" alt="service bg" class="mb-3"
                                style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Highlight key business details such as operating hours and contact numbers.
                            </p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gmbcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/customer-review.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Build a strong reputation through positive client feedback.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gmbcardone">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/boost.png') }}" alt="service bg" class="mb-3"
                                style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="card-text">Drive more visitors to your website with our expert Google My Business
                                services.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gmbcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/monitoring.png') }}" alt="service bg"
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
                    Complete Optimization for Your <span class="gmbheadingsubsecthree">Google My Business Page</span>
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
@endsection
