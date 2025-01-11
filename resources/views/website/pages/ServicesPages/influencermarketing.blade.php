@extends('website.layout.websitemain')
@section('title', 'Designing Services | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-5 position-relative"
        style="background: linear-gradient(180deg, #000 5.32%, #0003 33.25%, #0000003d 53.61%, #00000090 66.46%, #000 81.15%), radial-gradient(211.5% 113.1% at -66.4% 35.9%, #0b014a 33%, #0049b8 51.42%, #4032e3 67.6%, #8000ff 77.37%, #946eff 90%, #ab38f1);">
        <div class="container">
            <div class="row py-3 justify-content-center">
                <div class="col-md-4 col-6">
                    <div class="text-center ">
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="text-white">
                            “Saves over 70% of our time”
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="text-center">
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="text-white">
                            “Game-changer for our business”
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="text-center">
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="text-white">
                            “Solves influencer fraud problems”
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3 py-md-5">
                <div class=" heroTitle">
                    Find Authentic Influencers. Any Industry. Any Size
                </div>
                <div class="subTitle mt-3">
                    Influencer marketing platform for brands and agencies
                </div>
                <div class="mt-3 text-center">
                    <a href="{{ route('contact') }}" class="btn   btn-light">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container workflow">
            <h2 class="text-center fw-bold mb-5 fs-1">
                A full stack of solutions for every step of <br />the influencer marketing workflow:
            </h2>
            <div class="row g-3">

                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="card-title fw-bold">Discover <br /> influencers</h4>
                                <img src="{{ asset('assets/websiteAssets/images/icons/binoculars.png') }}" alt="service bg"
                                    width="50" class="mb-3">
                            </div>
                            <h6 class="card-subtitle mb-2 text-body-secondary fw-light">Find influencers with the audiences
                                you need within a 205.4M+ database</h6>
                            <div class="card-text ">
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> 205.4M+ accounts
                                </div>
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> Demographic search
                                </div>
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> Audience quality filters
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-center">
                            <a href=" {{route('contact')}}" class="btn btn-sm btn-primary w-75 rounded-pill">Get started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="card-title fw-bold">Analyze <br /> accounts</h4>
                                <img src="{{ asset('assets/websiteAssets/images/icons/analyzing.png') }}" alt="service bg"
                                    width="50" class="mb-3">
                            </div>
                            <h6 class="card-subtitle mb-2 text-body-secondary fw-light">Use over 35 in-depth metrics to
                                analyze influencers on Instagram, TikTok, Twitch, X (Twitter), and YouTube
                            </h6>
                            <div class="card-text ">
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> Audience demographics
                                </div>
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> Fraud detection
                                </div>
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> Brand affinity
                                </div>

                            </div>
                        </div>
                        <div class="p-3 text-center">
                            <a href=" {{route('contact')}}" class="btn btn-sm btn-primary w-75 rounded-pill">Get started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="card-title fw-bold">Manage <br /> campaigns</h4>
                                <img src="{{ asset('assets/websiteAssets/images/icons/advertising.png') }}" alt="service bg"
                                    width="50" class="mb-3">
                            </div>
                            <h6 class="card-subtitle mb-2 text-body-secondary fw-light">Track and monitor your influencer
                                marketing campaigns</h6>
                            <div class="card-text ">
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> Campaign media plans
                                </div>
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> KPI estimates
                                </div>
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> Performance insights
                                </div>

                            </div>
                        </div>
                        <div class="p-3 text-center">
                            <a href=" {{route('contact')}}" class="btn btn-sm btn-primary w-75 rounded-pill">Get started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="card-title fw-bold">Explore <br />markets
                                </h4>
                                <img src="{{ asset('assets/websiteAssets/images/icons/profile-analytics.png') }}"
                                    alt="service bg" width="50" class="mb-3">
                            </div>
                            <h6 class="card-subtitle mb-2 text-body-secondary fw-light">Analyze your competitors’
                                influencer marketing campaigns and industry trends
                            </h6>
                            <div class="card-text ">
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> Competitor analysis
                                </div>
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> Global market research
                                </div>
                                <div class="fw-light">
                                    <i class="bi bi-check2 text-success"></i> Trends & ranking analytics
                                </div>

                            </div>
                        </div>
                        <div class="p-3 text-center">
                            <a href=" {{route('contact')}}" class="btn btn-sm btn-primary w-75 rounded-pill">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container py-0 py-md-3">
            <h1 class="text-center fw-bolder">
                We provide insights at every step of your influencer <br />marketing workflow:
            </h1>

            <div class="row align-items-center mt-5">
                <div class="col-md-6 mt-3">
                    <p class="text-start text-primary">
                        <i class="bi bi-compass"></i> INFLUENCER DISCOVERY
                    </p>
                    <h5 class="text-bold fs-4">
                        Find the best influencers for you with influencer discovery
                    </h5>
                    <div class="text-start py-2">
                        <p class="text-wrap ">
                            Discover perfectly matched Instagram, TikTok, Twitch, X (Twitter), and YouTube influencers from
                            a pool of 205.4M+ using a range of filters to refine your results and reveal high-quality
                            profiles

                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary">Learn more about
                                influencer discovery<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img class="influbimage" src="https://hypeauditor.com/_nuxt/Index_01.DWwSnX24.png" alt="discovery">
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-md-6 mt-3">
                    <p class="text-start text-primary">
                        <i class="bi bi-compass"></i> Influencer Analytics
                    </p>
                    <h5 class="text-bold fs-4">
                        Access industry-standard analytical reports across major social media platforms

                    </h5>
                    <div class="text-start py-2">
                        <p class="text-wrap ">
                            Analyze influencers on Instagram, TikTok, Twitch, X (Twitter), and YouTube using 35+ in-depth
                            metrics including audience location, age-gender split, authenticity, reach, overall audience
                            quality, and more


                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn   btn-outline-primary">Learn more about
                                influencer analytics<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img class="influbimage img-fluid" src="https://hypeauditor.com/_nuxt/Index_02.a2TfQcHX.png" alt="analytics">
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-md-6 mt-3">
                    <p class="text-start text-primary">
                        <i class="bi bi-compass"></i> CAMPAIGN MANAGEMENT
                    </p>
                    <h5 class="text-bold fs-4">
                        Manage and monitor your influencer marketing campaigns
                    </h5>
                    <div class="text-start py-2">
                        <p class="text-wrap ">
                            Keep track of your campaign at every stage from creating influencer lists to generating a final campaign report. Monitor your campaign’s effectiveness, assess audience sentiment, and make adjustments in real-time

                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn   btn-outline-primary">
                                Learn more about campaign management
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0 text-center">
                    <img class="img-fluid" src="https://hypeauditor.com/_nuxt/Index_03.B66UugQl.png" alt="analytics">
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-md-6 mt-3">
                    <p class="text-start text-primary">
                        <i class="bi bi-compass"></i> MARKET ANALYSIS
                    </p>
                    <h5 class="text-bold fs-4">
                        Get a snapshot of the influencer marketing landscape
                    </h5>
                    <div class="text-start py-2">
                        <p class="text-wrap ">
                            Explore the competitive landscape and evaluate the influencer marketing performance of your rivals. Compare multiple brands side-by-side and discover the top market players in a particular country and niche
                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn   btn-outline-primary">
                                Learn more about market analysis
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img class="influbimage img-fluid" src="https://hypeauditor.com/_nuxt/grid.CUCk2zty.png" alt="analytics">
                </div> 
            </div>
        </div>
    </section>

    <section class="py-5 position-relative bannerbg">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center performanceheadingsecthree">
                    Our Expertise <span class="performanceheadingsubsecthree">Spans</span>
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
                    <div class="influcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/influencer.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Identify the perfect influencers</p>
                            <p class="card-text text-start text-wrap">We match your brand with influencers whose values and
                                style align with yours.</p>
                            <!-- <a href=" {{route('contact')}}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="influcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/efficiency.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Measure and optimize</p>
                            <p class="card-text text-start text-wrap">We track campaign performance and provide insights to
                                maximize your ROI.</p>
                            <!-- <a href=" {{route('contact')}}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="influcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/content-marketing.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Create engaging campaigns</p>
                            <p class="card-text text-start text-wrap">Our team develops compelling content that resonates
                                with your audience.</p>
                            <!-- <a href=" {{route('contact')}}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
