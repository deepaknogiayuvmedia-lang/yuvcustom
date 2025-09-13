@extends('website.layout.websitemain')
@section('title', 'Web Development | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-5 position-relative ">
        <div class="container hero-info">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="text-center ">
                        Scale Faster with Performance
                        <span class="fw-bold text-primary">Driven Media Buying</span>
                    </h1>
                    <div class="text-center py-2">
                        <p class="text-wrap marketsecondhead">
                            From audience research to conversion tracking — we handle it all.
                        </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="hero-video">
                        <!--desk-video-->
                        <video autoplay="" muted="" playsinline="" loop=""
                            class="hero-asset rounded-4 desk-video"
                            poster="{{ asset('assets/websiteAssets/images/services/performanceMedia/mediaaa.png') }}">
                            <source src="{{ asset('assets/websiteAssets/images/services/videos/mediabanner.webm') }}"
                                type="video/mp4">
                        </video>
                    </div>
                </div>

                <div class="d-flex justify-content-center flex-wrap">
                    <div class="me-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg performancebtn">Book a Call<i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="container  py-5">
            <div class="row align-items-center">
                <div class="col-md-4 d-flex d-md-block align-items-center justify-content-between">
                    <div class="text-start fs-2 fw-bold">
                        Get up to 70% <br />
                        more conversions <br />
                        with Taboola
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row py-3">
                        <div class="col-6">
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
                        <div class="col-6">
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
                        <div class="col-6">
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
                        <div class="col-6">
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
                    Media Buying & Planning That <span class="performanceheadingsub">Moves the Needle</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap performancesecondhead">
                        Every click counts. Our Media Buying & Planning approach ensures that your media investments
                        directly
                        contribute to conversions, sales, and long-term success.
                    </p>
                </div>
                <div class="text-center fs-6">
                    <p class="text-wrap fw-bold">
                        Your Brand’s New BFF
                    </p>
                </div>
            </div>
        </div>
        <div class="container  py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start fw-bold fs-1">
                        The Right Audience. The Right Moment.
                        <span class="text-primary fw-bold"> The Right ROI.</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            We focus on connecting your brand with people who matter most. Our performance media strategies
                            are built on data, precision, and timing—ensuring your message reaches the right audience at the
                            right stage of their journey.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            By using real-time optimization, audience insights, and conversion-focused planning, we help
                            reduce wasted spend and drive measurable growth. Every campaign is designed to deliver tangible
                            results and long-term ROI, not just impressions.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">

                    <img src="{{ asset('assets/websiteAssets/images/services/performanceMedia/web-Advertiser-Realize-Creative-Assets-Mock-V01.png') }}"
                        alt="service bg" class="mb-3 img-fluid seoimage">
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
                <div class="col-md-4">

                    <img class="seoimage "
                        src="{{ asset('assets/websiteAssets/images/services/holding-smartphone.webp') }}" alt="seo">
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

    <section class="position-relative py-5">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center fw-bold fs-1">
                    Let Us Help You to Choose the <br /> <span class="text-primary fw-bold">Right Media Buying & Planning
                        Type
                        for Your Business</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap performancesecondheadsecthree">
                        Our expertise spans across multiple Media Buying & Planning channels, ensuring a comprehensive and
                        tailored approach that maximizes your brand's visibility, engagement, and conversion rates across
                        digital platforms.
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
                            <p class="card-text text-start text-wrap">
                                Utilize our keyword-focused techniques to increase your brand's visibility on search engines
                                like Google and Bing, making sure it stands out when it matters most.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="  ">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/paid-content.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Paid Social</p>
                            <p class="card-text text-start text-wrap">
                                Reach more people by interacting with audiences who are most relevant to your brand on
                                social media sites like Facebook, Instagram, and LinkedIn.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="  ">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/native-advertising.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Display & Native Ads</p>
                            <p class="card-text text-start text-wrap">
                                Increase click-through rates and engagement by seamlessly integrating your advertisements
                                into prestigious websites.
                            </p>
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
                            <p class="card-text text-start text-wrap">
                                It is the core of our Media Buying & Planning service, where we craft compelling ad copies
                                and
                                visuals that capture attention, drive engagement, and convert audiences into loyal customers
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="  ">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/amazon.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Amazon Marketing</p>
                            <p class="card-text text-start text-wrap">
                                Maximize the potential of your brand with effective campaigns and optimized product listings
                                designed to boost visibility, drive traffic, and increase sales.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="  ">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/affiliate-marketing.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Affiliate Marketing</p>
                            <p class="card-text text-start text-wrap">
                                Use a large network of affiliates to broaden your audience and boost revenue by forming
                                cooperative alliances.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seosectionn mediabuying py-5">
        <div class="container py-2 pb-md-5">
            <div class="row">
                <div class="text-center fw-bold mb-4 performanceheading">
                    Industries We Power with <span class="performanceheadingsub">Media Buying & Planning </span>
                </div>

                <div class="col-lg-4 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Finance.jpg') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Finance</h5>
                            <p class="card-text text-start text-wrap">
                                In the fast-paced finance world, competition for visibility is fierce. Our data-driven PPC
                                campaigns help banks, credit unions, insurance providers, and investment firms cut through
                                the noise. With conversion-focused ad strategies, we put your financial brand in front of
                                the right audience—boosting leads, trust, and ROI in real time.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto h-100">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Healthcare & Medical Practices.webp') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Healthcare</h5>
                            <p class="card-text text-start text-wrap">
                                Patients today research, compare, and decide online before stepping into a clinic. That’s
                                why your healthcare brand needs always-on visibility. Our precision-targeted PPC ads help
                                hospitals, clinics, and wellness brands capture high-intent searches, acquire patients
                                faster, and drive measurable growth.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/E-commerce.jfif') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">E-commerce</h5>
                            <p class="card-text text-start text-wrap">
                                Competing with giants like Amazon? The key is smart ad placements + audience intent mapping.
                                Our e-commerce PPC campaigns focus on reducing cart abandonment, scaling product visibility,
                                and driving profitable ROAS. Whether it’s Google Shopping, Meta Ads, or marketplaces, we
                                help your store stand out and sell more.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Education & Institutions.png') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Education</h5>
                            <p class="card-text text-start text-wrap">
                                Education marketing is more competitive than ever. With PPC, we help schools, colleges, and
                                ed-tech platforms generate quality student inquiries, boost enrollments, and build authority
                                online. Our full-funnel media planning ensures your brand connects with learners at every
                                stage—from awareness to admission.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Lifestyle.webp') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Lifestyle</h5>
                            <p class="card-text text-start text-wrap">
                                Lifestyle brands thrive on visibility, engagement, and influence. Our Media Buying &
                                Planning buying strategies put your brand in front of trend-savvy audiences through
                                cross-platform targeting. From fashion to fitness, we help lifestyle businesses compete with
                                retail giants, increase brand recall, and drive loyal customer bases.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Reatestate.png') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Real Estate</h5>
                            <p class="card-text text-start text-wrap">
                                In real estate, timing is everything. Our hyper-local PPC targeting ensures your properties
                                are seen by buyers and investors when they’re ready to act. From lead generation to site
                                visits, we help real estate businesses convert interest into sales faster—with customized ad
                                strategies designed for maximum ROI.
                            </p>
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
                    Our <span class="performanceheadingsub">Work</span>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div id="resultsSlider" class="owl-carousel owl-theme">
                            <div class="item my-3 mx-2">
                                <div class="card rounded-5 border-0 shadow-sm p-3">
                                    <h6 class="card-title ms-3 fw-bold fs-4">The Rich X</h6>
                                    <div class="row pt-3 px-3 align-items-center">
                                        <div class="col-lg-6 p-2">
                                            <div class="border rounded-5 p-3">
                                                <img src="{{ asset('assets/websiteAssets/images/services/seo/work/therichx.webp') }}"
                                                    class="img-fluid rounded-4 bannerimg" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-2">
                                            <div class="border rounded-5 p-3">
                                                <img src="{{ asset('assets/websiteAssets/images/services/seo/work/image (2).png') }}"
                                                    class="img-fluid rounded-4 bannerimg" alt="...">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="item my-3 mx-2">
                                <div class="card rounded-5 border-0 shadow-sm p-3">
                                    <h6 class="card-title ms-3 fw-bold fs-4">Science Seeker</h6>
                                    <div class="row pt-3 px-3 align-items-center">
                                        <div class="col-lg-6 p-2">
                                            <div class="border rounded-5 p-3">
                                                <img src="{{ asset('assets/websiteAssets/images/services/seo/work/scienceseeker.webp') }}"
                                                    class="img-fluid rounded-4 bannerimg" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-2">
                                            <div class="border rounded-5 p-3">
                                                <img src="{{ asset('assets/websiteAssets/images/services/seo/work/image (3).png') }}"
                                                    class="img-fluid rounded-4 bannerimg" alt="...">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="item my-3 mx-2">
                                <div class="card rounded-5 border-0 shadow-sm p-3">
                                    <h6 class="card-title ms-3 fw-bold fs-4">Cocobull Coal</h6>
                                    <div class="row pt-3 px-3 align-items-center">
                                        <div class="col-lg-6 p-2">
                                            <div class="border rounded-5 p-3">
                                                <img src="{{ asset('assets/websiteAssets/images/services/seo/work/cocobull.webp') }}"
                                                    class="img-fluid rounded-4 bannerimg" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-2">
                                            <div class="border rounded-5 p-3">
                                                <img src="{{ asset('assets/websiteAssets/images/services/seo/work/image (3).png') }}"
                                                    class="img-fluid rounded-4 bannerimg" alt="...">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="item my-3 mx-2">
                                <div class="card rounded-5 border-0 shadow-sm p-3">
                                    <h6 class="card-title ms-3 fw-bold fs-4">Rich Walk</h6>
                                    <div class="row pt-3 px-3 align-items-center">
                                        <div class="col-lg-6 p-2">
                                            <div class="border rounded-5 p-3">
                                                <img src="{{ asset('assets/websiteAssets/images/services/seo/work/richwalk.webp') }}"
                                                    class="img-fluid rounded-4 bannerimg" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-2">
                                            <div class="border rounded-5 p-3">
                                                <img src="{{ asset('assets/websiteAssets/images/services/seo/work/richwalk.jpg') }}"
                                                    class="img-fluid rounded-4 bannerimg" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="performancemedia-slider card rounded-5 p-4">
                    @for ($i = 1; $i <= 50; $i += 2)
                        <div>
                            <div>
                                <img class="img-fluid p-3 rounded-5 "
                                    src="{{ asset('assets/websiteAssets/images/services/performanceMedia/' . $i . '.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="img-fluid p-3 rounded-5"
                                    src="{{ asset('assets/websiteAssets/images/services/performanceMedia/' . ($i + 1) . '.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    @endfor

                </div>

                <div class="fbads-slider">
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Aziri.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Aziri
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Zee Huzoor.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Zee Huzoor
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Black Buck.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Black Buck
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Bux Media.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Bux Media
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Danish Electronics.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Danish Electronics
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Deva Cricket.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Deva Cricket
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Easy Go Cabs.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Easy Go Cabs
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Galaxy Tourism .png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Galaxy Tourism
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Ghar Sajao.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Ghar Sajao
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Growx.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Growx
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/HOME City.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                HOME City
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Illusion Signage Solution.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Illusion Signage Solution
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Jackpot Trades.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Jackpot Trades
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Kajal Option Trading.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Kajal Option Trading
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Krishna Tour Pushkar.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Krishna Tour Pushkar
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/OM Narmadeshwar.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                OM Narmadeshwar
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/OM Trader.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                OM Trader
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Rathi Auto.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Rathi Auto
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Reddy Anna.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Reddy Anna
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Scalping World Trade.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Scalping World Trade
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/SEBI Registered Researched Analyst (Alok Daiya).png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                SEBI Registered Researched Analyst (Alok Daiya)
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Shree Balaji Ramapeer Cargo.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Shree Balaji Ramapeer Cargo
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Smatera.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Smatera
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/SMT Learning.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                SMT Learning
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/SMT Today.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                SMT Today
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Stock Gyaan.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Stock Gyaan
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Stock Optio  Lover.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Stock Optio Lover
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/The Pro Option Trader.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                The Pro Option Trader
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Trade Master.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Trade Master
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Trade Wale.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Trade Wale
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Trade X.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Trade X
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Trading Market Expert.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Trading Market Expert
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Unick Vision Academy.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Unick Vision Academy
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/UNIFX.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                UNIFX
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Vastu Mandal.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Vastu Mandal
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/performanceMedia/fbads/Veonline.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Veonline
                            </div>
                        </div>
                    </div>


                </div>

                <div class="fbads-slider">
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Bank Nifty Expert.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Bank Nifty Expert
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Best Option Trading.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Best Option Trading
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Big Profit Trader.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Big Profit Trader
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Drona Classes.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Drona Classes
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Dubai trader.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Dubai trader
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Herbanix.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Herbanix
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/I Quanta Jamshedpur.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                I Quanta Jamshedpur
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Mad About Food.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Mad About Food
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Mr P Investments.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Mr P Investments
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/North Indian Pandit Ji.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                North Indian Pandit Ji
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/OM Trader.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                OM Trader
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Option gains.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Option gains
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Parihar IVF.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Parihar IVF
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Perfect gains.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Perfect gains
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Physiotherapy Planet.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Physiotherapy Planet
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Royal Packer & Mover.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Royal Packer & Mover
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/SB Trader.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                SB Trader
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Scalping Price.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Scalping Price
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Scalping World Trade.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Scalping World Trade
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Sky Traders.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Sky Traders
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/SMT Learning.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                SMT Learning
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/STF Entertainment.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                STF Entertainment
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Stock Ace.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Stock Ace
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Stock Cloud.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Stock Cloud
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Stock gainers.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Stock gainers
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Stock Wala King.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Stock Wala King
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Trader Junction.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Trader Junction
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Traders Clan.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Traders Clan
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Tradify.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Tradify
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Trading Edge.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Trading Edge
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-white fbads-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/googleads/Trading Market Expert.png') }}"
                                alt="">
                            <div class="text-center fw-bold text-primary">
                                Trading Market Expert
                            </div>
                        </div>

                    </div>



                </div>

            </div>
        </div>
    </section>

    <section class="py-5 position-relative bannerbg">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center graphicheadingsecthree mb-3">
                    Our Approach to Boost Your Advertising
                    <span class="fw-bold text-primary">ROI Through Media Buying & Planning Services</span>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">1. Campaign Set-Up</p>
                            <p class="card-text text-start text-wrap">
                                We strategically configure campaigns tailored to your goals, ensuring every aspect is
                                optimized for maximum reach and conversion potential.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">2. Keywords Research</p>
                            <p class="card-text text-start text-wrap">
                                Our in-depth keyword research uncovers the most relevant and high-performing terms to
                                attract the right audience and drive quality traffic.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">3. Audience Set-Up</p>
                            <p class="card-text text-start text-wrap">
                                We define and target the ideal audience segments, helping you reach the people most likely
                                to convert and engage with your brand.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2 gy-4">
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">4. Competitor Analysis</p>
                            <p class="card-text text-start text-wrap">
                                Our team analyzes competitors to identify opportunities, strengths, and gaps, enabling us to
                                create a competitive edge for your campaigns.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">5. CTR Analysis</p>
                            <p class="card-text text-start text-wrap">
                                We monitor click-through rates (CTR) to identify what’s working and make necessary
                                adjustments to increase engagement and conversions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">6. Google Analytics Setup</p>
                            <p class="card-text text-start text-wrap">
                                We set up Google Analytics to provide deep insights into campaign performance, user
                                behavior, and ROI, enabling data-driven decision-making.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">7. Meta Pixel Setup</p>
                            <p class="card-text text-start text-wrap">
                                We integrate Meta Pixel to track and optimize Facebook and Instagram campaigns, improving
                                targeting and retargeting efforts.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">8. Google Tag Manager Setup</p>
                            <p class="card-text text-start text-wrap">
                                We configure Google Tag Manager to streamline the process of adding tracking and marketing
                                tags, allowing for more efficient data management.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">9. Remarketing</p>
                            <p class="card-text text-start text-wrap">
                                Our remarketing strategies ensure that users who have previously interacted with your brand
                                are re-engaged, boosting conversion chances.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">10. Ad Copies (Creatives):</p>
                            <p class="card-text text-start text-wrap">
                                Our team creates compelling and persuasive ad copies and creatives that speak directly to
                                your audience, driving higher engagement and conversions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">11. Daily Leads Quality Report</p>
                            <p class="card-text text-start text-wrap">
                                We provide daily reports on lead quality, ensuring you stay informed and can quickly adjust
                                strategies for optimal performance.
                            </p>
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
                            <h2 class=" fw-bold mb-4 fs-3 ">Power Up Your Media Buying Strategy & Start Driving Results
                                Now!</h2>
                            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                                <a href="tel:+918824269821" class="btn btn-danger btn-lg"> <i
                                        class="bi bi-telephone"></i> Book A Call</a>
                                <a href="https://wa.me/918824269821" class="btn btn-success btn-lg"><i
                                        class="bi bi-whatsapp"></i> Chat on WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
