@extends('website.layout.websitemain')
@section('title', 'Web Development | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-5 position-relative bg-white">
        <div class="container hero-info">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="text-center ">
                        Get Traffic
                        <span class="fw-bold text-primary">That Converts.</span>

                    </h1>
                    <div class="text-center py-2">
                        <p class="text-wrap marketsecondhead">
                            Your Ad Campaigns Seen by Millions Daily on Premium Publisher Sites
                        </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="hero-video w-75">
                        <!--desk-video-->
                        <video autoplay="" muted="" playsinline="" loop=""
                            class="hero-asset rounded-4 desk-video"
                            poster="https://ondc.org/assets/theme/images/video_img.jpg">
                            <source src="{{ asset('assets/websiteAssets/images/performance-ad-video.mp4') }}"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="container  py-5">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="text-start fs-2 fw-bold">
                        Get up to 70% <br />
                        more conversions <br />
                        with Taboola
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-primary">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row py-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="card-body text-start">
                                    <img src="{{ asset('assets/websiteAssets/images/paid-search.png') }}" alt="service bg"
                                        class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-start">
                                        Performance at Scale
                                    </p>
                                    <p class="card-text text-start text-wrap">
                                        Beat your CPA goals with Taboola’s advanced performance algorithm.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="card-body text-start">
                                    <img src="{{ asset('assets/websiteAssets/images/paid-search.png') }}" alt="service bg"
                                        class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-start">
                                        Premium Websites
                                    </p>
                                    <p class="card-text text-start text-wrap">
                                        Access 22,000+ exclusive and trusted websites worldwide with Taboola Ads.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="card-body text-start">
                                    <img src="{{ asset('assets/websiteAssets/images/paid-search.png') }}" alt="service bg"
                                        class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-start">
                                        Largest Native Ads Network
                                    </p>
                                    <p class="card-text text-start text-wrap">
                                        Get your ad in front of 600M daily active users. Complement your search and social
                                        campaigns with new converting audiences.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="card-body text-start">
                                    <img src="{{ asset('assets/websiteAssets/images/paid-search.png') }}" alt="service bg"
                                        class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-start">
                                        Native Advertising Advantage
                                    </p>
                                    <p class="card-text text-start text-wrap">
                                        Reach audiences based on their interests without relying on third-party cookies.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="container py-5">
            <div class=" row">
                <div class="text-center performanceheading">
                    Performance Media That <span class="performanceheadingsub">Moves the Needle</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap performancesecondhead">
                        At YUVMEDIA, we understand the importance of reaching your customers at the right moment and place.
                        Our paid strategies accompany your potential customers, ensuring you receive the strongest
                        consideration.
                    </p>
                </div>
                <div class="text-center fs-6">
                    <p class="text-wrap fw-bold">
                        Your Brand’s New BFF
                    </p>
                </div>
                <div class="d-flex justify-content-center flex-wrap">
                    <div class="me-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg performancebtn">Contact Us <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container  py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start fw-bold fs-1">
                        Drive Results with <br/><span class="text-primary fw-bold">Performance
                            Media</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Our performance media strategies are designed to deliver measurable results. We use data-driven
                            approaches to optimize your campaigns and ensure maximum ROI.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Partner with us to leverage cutting-edge technology and innovative tactics that keep your brand
                            ahead of the competition.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg seobbtn">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="seoimage "
                        src="{{ asset('assets/websiteAssets/images/services/holding-smartphone.webp') }}" alt="seo">
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative py-5" style="background-color: #002852">
        <div class="container  py-5">
            <div class="row align-items-center text-white">
                <div class="text-center fs-1 fw-bold">
                    Native Advertising <span class="fw-bold" style="color: #00ddbd">Work</span>
                </div>
                <div class="col-md-4">

                    <div class="text-start py-2">
                        <div class="large-values">
                            +50%
                        </div>
                        <p class="text-wrap ">
                            50% more views than traditional display ads
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <div class="large-values">
                            +10X
                        </div>
                        <p class="text-wrap ">
                            10X higher engagement rate compared to traditional display ads
                        </p>
                    </div>

                </div>
                <div class="col-md-4 ">
                    <video autoplay="" muted="" playsinline="" loop=""
                        class="hero-asset-video mx-auto rounded-4 desk-video"
                        poster="https://ondc.org/assets/theme/images/video_img.jpg">
                        <source
                            src="https://discover.taboola.com/wp-content/uploads/2024/06/vdo-Homepage_Redesign-Stats-V05.mp4"
                            type="video/mp4">
                    </video>

                </div>
                <div class="col-md-4">
                    <div class="text-start py-2">
                        <div class="large-values">
                            +18%
                        </div>
                        <p class="text-wrap ">
                            18% higher purchase intent than traditional display ads

                        </p>
                    </div>
                    <div class="text-start py-2">
                        <div class="large-values">
                            +80%
                        </div>
                        <p class="text-wrap ">
                            80% of people trust ads on news sites more than social
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="position-relative py-5 bannerbg">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center fw-bold fs-1">
                    Our Expertise <span class="text-primary fw-bold">Spans</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap performancesecondheadsecthree">
                        When you partner with us, you gain more than just a video; you receive a captivating story that
                        aligns with your brand’s vision.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="  ">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/paid-search.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Paid Search</p>
                            <p class="card-text text-start text-wrap">Maximize your online visibility through strategic
                                keyword bids and ad copy optimization on search engines like Google and Bing.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="  ">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/paid-content.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Paid Social</p>
                            <p class="card-text text-start text-wrap">Leverage platforms like Facebook, Instagram, and
                                LinkedIn to connect with your target audience and drive conversions.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="  ">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/native-advertising.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Display & Native Ads</p>
                            <p class="card-text text-start text-wrap">Reach a wider audience through visually engaging ads
                                or video ads that blend seamlessly into the content of websites and apps.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2 gy-4">
                <div class="col-md-4">
                    <div class="  ">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/research-and-development.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Creative Development</p>
                            <p class="card-text text-start text-wrap">Bring your brand to life with compelling and
                                attractive ad copy, designs, and visuals that resonate with your target market.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="  ">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/amazon.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Amazon Marketing</p>
                            <p class="card-text text-start text-wrap">Optimize your product listings and advertising
                                campaigns to increase sales and visibility on Amazon.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="  ">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/affiliate-marketing.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Affiliate Marketing</p>
                            <p class="card-text text-start text-wrap">Expand your reach by building a powerful network of
                                affiliates who promote your products or services. It's a win-win strategy to boost sales.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
