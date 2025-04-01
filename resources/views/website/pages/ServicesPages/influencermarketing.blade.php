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
                    Make Your Brand Go Viral With The Right Influencer
                </div>
                <div class="subTitle mt-3">
                    All-in-One Influencer Marketing Services for Maximum Impact.
                </div>
                <div class="me-3 text-center">
                    <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-light">Contact Us <i
                            class="bi bi-arrow-right"></i></a>
                    <a href="{{ route('influencer') }}" class="btn btn-lg btn-outline-light ms-2">Register as Influencer<i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container workflow">
            <h2 class="text-center fw-bold mb-5 fs-1">
                Complete Solutions for Every Phase <br /> of Your Influencer Campaign.
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
                            <a href=" {{ route('contact') }}" class="btn btn-sm btn-primary w-75 rounded-pill">Get
                                started</a>
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
                            <a href=" {{ route('contact') }}" class="btn btn-sm btn-primary w-75 rounded-pill">Get
                                started</a>
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
                            <a href=" {{ route('contact') }}" class="btn btn-sm btn-primary w-75 rounded-pill">Get
                                started</a>
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
                            <a href=" {{ route('contact') }}" class="btn btn-sm btn-primary w-75 rounded-pill">Get
                                started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container py-0 py-md-3">
            <h1 class="text-center fw-bolder">
                Your Influencer Marketing <br />Workflow Made Simple
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
                            Find the perfect influencers for your brand with our advanced influencer discovery tool. Explore
                            over 205.4M+ profiles and use targeted filters to narrow down the best matches for your campaign
                            and engage with top-tier influencers who resonate with your audience.
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
                            Get access to detailed, industry-standard analytical reports across top social media platforms.
                            Track influencer performance, audience engagement, and campaign success with precise data that
                            helps you make informed decisions and optimize your marketing strategy.
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
                    <img class="influbimage img-fluid" src="https://hypeauditor.com/_nuxt/Index_02.a2TfQcHX.png"
                        alt="analytics">
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
                            Effortlessly manage and monitor your influencer marketing campaigns in real-time. Track
                            performance, monitor deliverables, and ensure seamless collaboration with influencers to drive
                            successful and measurable results.
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
                            Gain valuable insights into the influencer marketing landscape with our comprehensive snapshot.
                            Understand trends, audience engagement, and campaign performance to stay ahead of the
                            competition and make informed decisions.
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
                    <img class="influbimage img-fluid" src="https://hypeauditor.com/_nuxt/grid.CUCk2zty.png"
                        alt="analytics">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative bannerbg">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center performanceheadingsecthree">
                    Why Pick<span class="performanceheadingsubsecthree">Us?</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap performancesecondheadsecthree">
                        We connect your brand with the right influencers, drive authentic engagement, and deliver measurable
                        results that boost your brand’s visibility and growth.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="influcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/influencer.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">1. Influencer Research & Outreach</p>
                            <p class="card-text text-start text-wrap">We use data-driven strategies to identify the best
                                influencers for your brand, ensuring alignment with your target audience and brand values,
                                and initiate meaningful collaborations for maximum impact.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="influcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/efficiency.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">2. Influencer Negotiation & Evaluation</p>
                            <p class="card-text text-start text-wrap">Our experts manage negotiations with influencers to
                                secure fair terms and ensure a mutually beneficial partnership, while evaluating their
                                reach, engagement, and credibility to guarantee quality results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="influcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/content-marketing.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">3. Content Strategy and Planning</p>
                            <p class="card-text text-start text-wrap">We create a tailored content strategy that resonates
                                with your audience, ensuring consistency across all channels and optimizing for engagement,
                                brand awareness, and conversions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="influcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/content-marketing.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Campaign Goals & Objectives</p>
                            <p class="card-text text-start text-wrap">We define clear campaign goals and measurable
                                objectives, ensuring every influencer marketing effort aligns with your broader marketing
                                strategy and contributes to your business growth.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="influcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/content-marketing.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Performance Tracking & Analytics</p>
                            <p class="card-text text-start text-wrap">Through advanced analytics tools, we track the
                                performance of each campaign, providing you with real-time insights into influencer impact,
                                audience engagement, and overall campaign ROI.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="influcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/content-marketing.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">User Generated Content Creation</p>
                            <p class="card-text text-start text-wrap">We encourage influencers to create authentic,
                                user-generated content that strengthens brand trust and drives organic engagement from their
                                followers, amplifying your brand's message.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
