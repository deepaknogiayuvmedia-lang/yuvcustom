@extends('website.layout.websitemain')
@section('title', 'Seach Engine Optimization | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="position-relative">
        <div class="container  py-3 py-md-5">
            <div class=" row">
                <div class="text-center globaltxtcolor text-capitalize">
                    Google rankings can make or break your business
                </div>
                <div class="text-center fs-4">
                    <p class="text-wrap seosecondhead">
                        Today it’s not just about ‘Getting The Traffic’ – it’s about Getting The right traffic.
                    </p>
                </div>
                <div class="text-center fs-6">
                    <p class="text-wrap">
                        Website is all about inviting the right Customer
                    </p>
                </div>
                <div class="d-flex justify-content-center flex-wrap">
                    <div class="me-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg seobtn">Book a Call <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start globaltxtcolor">
                        Rank Smarter. Reach Wider. Grow Faster.
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            In today’s digital landscape, ranking isn’t enough—<b>relevance is everything.</b> Our
                            <b>AI-driven SEO strategies</b> go beyond boosting numbers; we focus on delivering
                            <b>high-intent, conversion-ready traffic</b> that transforms browsers into buyers.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Through <b>intent-based keyword optimization, voice search readiness, E-E-A-T powered content,
                                and technical SEO upgrades,</b> we position your brand for <b>SERP dominance.</b> Combined
                            with <b>growth-hacking tactics and data-driven insights,</b> your website evolves into a
                            <b>conversion powerhouse</b>—capturing attention, building trust, and scaling faster across
                            every channel.

                        </p>
                    </div>
                    {{-- <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  btn-outline-primary">Book a Call <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div> --}}
                </div>
                <div class="col-md-6">
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/googleseo.jpg') }}"
                        alt="seo">
                </div>
            </div>
        </div>
    </section>




    <div class="section">
        <div class="wrapper container">
            <div class="citebox js-karaoke">
                <div class="citebox-content js-karaoke-content">
                    <span>We've generated</span> <br />
                    <span><b>10,00,000+</b></span><br />
                    <span>organic leads for SMB's.</span><br />
                    <span><b>50,00,000+</b></span><br />
                    <span>Keywords ranked for clients</span>
                </div>
                <div class="citebox-mask js-karaoke-mask">
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init aos-animate">
                        We've generated
                    </span><br />
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        1M+
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        organic leads for SMB's.
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        5M+
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        Keywords ranked for clients
                    </span>
                </div>
            </div>
        </div>
    </div>


    <section class="seointro py-5">
        <div class="container py-2">
            <div class="row">
                <div class="text-center fs-1 fw-bold globaltxtcolor">
                    Why We’re the Best Choice
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <ul class="fs-5">
                            <li>Best SEO services with full access to premium tools, anytime</li>
                            <li>Best digital marketing agency in India with expert project managers and SEO professionals
                            </li>
                            <li>Best digital marketing company in India with a proven track record across diverse industries
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="fs-5">
                            <li>Best SEO services tailored to fit your budget</li>
                            <li>Digital marketing services in India with competitive pricing and real-time reporting</li>
                            <li>Best SEO services backed by in-depth keyword research for precise targeting</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="seosection py-5">
        <div class="container py-2 pb-md-5">
            <div class="row">
                <div class="text-center fs-2 fw-bold">
                    Everything You Need for SEO Success
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap seosecondheadsecthree">
                        We Follow Certain Steps To Provide High-Quality Small Business SEO Services.
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/05/one-page-seo.jpg"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">On Page SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Content-Audit1-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Off Page SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto h-100">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/10/Local-Education-SEO.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Technical SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Competitor-Audit-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Competitor Analysis</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Website Review & Analysis.webp') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Website Review & Analysis</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/E-commerce SEO.webp') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">E-commerce SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Digital PR & Link Building.jpg') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Digital PR & Link Building</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Lead Generation SEO.jpg') }}""
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Lead Generation SEO</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-5 position-relative"
        style="background: linear-gradient(180deg, #000 5.32%, #0003 33.25%, #0000003d 53.61%, #00000090 66.46%, #000 81.15%), radial-gradient(211.5% 113.1% at -66.4% 35.9%, #0b014a 33%, #0049b8 51.42%, #4032e3 67.6%, #8000ff 77.37%, #946eff 90%, #ab38f1);">
        <div class="container text-white">
            <div class="text-center fs-2 fw-bold">
                Make the Most of Your Website with Our Tried-and-True SEO Techniques
            </div>
            <div class="text-center py-2">
                <p class="text-wrap seosecondheadsecthree">
                    Several key factors influence a website’s SEO ranking and our SEO services help you to improve your:
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="stepList">
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Content That Clicks
                            </div>
                            <p>
                                We create valuable, interesting material that encourages action and performs well in search
                                results.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Smart Keywords
                            </div>
                            <p>
                                Properly researched and strategically placed keywords in titles and headings throughout the
                                content help search engines understand the relevance of your pages.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Backlinks That Matter
                            </div>
                            <p>
                                We construct robust backlinks from reliable sources to improve the reputation of your
                                website.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                User Experience (UX)
                            </div>
                            <p>
                                An easy-to-use, smooth design that keeps users interested and returning.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Mobile Optimization
                            </div>
                            <p>
                                When you use mobile-first indexing, your website needs to look great on all screens. We
                                ensure that it does!
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Impressive Speed
                            </div>
                            <p>
                                We speed up your website's loading time to enhance SEO and user experience.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="stepList">
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Smart Site Structure
                            </div>
                            <p>
                                Your content will be found and ranked more quickly by search engines if your site is clear
                                and well-structured.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Local SEO
                            </div>
                            <p>
                                Using local citations and tailored Google Business Profiles, local SEO helps you get found
                                in local searches.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Fresh Content
                            </div>
                            <p>
                                With frequent changes and excellent SEO content, we maintain your website's relevance and
                                user engagement.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Schema Markup
                            </div>
                            <p>
                                Schema markup enables rich snippets, displaying key information like reviews, ratings, and
                                product prices directly in search results, leading to higher engagement.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                User Engagement Metrics
                            </div>
                            <p>
                                Metrics like time on site, bounce rate, and page views help evaluate how effectively your
                                content captures and retains user attention.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Social Signals
                            </div>
                            <p>
                                While not a direct ranking factor, social signals help search engines assess the popularity
                                and relevance of your content, potentially boosting search rankings.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="seosectionn py-5">
        <div class="container py-2 pb-md-5">
            <div class="row">
                <div class="text-center fs-2 fw-bold">
                    Future-Focused SEO Services for Every Business Vertical
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap seosecondheadsecthree">
                        Take your brand from invisible to unstoppable with future-ready SEO strategies designed for every
                        industry. Whether you’re a startup chasing visibility, an SME scaling growth, or an enterprise
                        building global dominance, we blend creativity, data, and next-gen optimization to put you ahead in
                        search, voice, and AI-driven discovery.

                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/E-commerce.jfif') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">E-commerce</h5>
                            <p class="card-text text-start text-wrap">
                                Boost Shopify, WooCommerce, or Drupal stores with AI-SEO, voice search optimization, and
                                GEO-powered pages that convert shoppers into buyers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Restaurants & Dining.jpg') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Restaurants & Dining</h5>
                            <p class="card-text text-start text-wrap">
                                Win the local search game with hyperlocal SEO, voice-enabled menus, and zero-click snippets
                                that attract hungry customers instantly.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto h-100">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Healthcare & Medical Practices.webp') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Healthcare & Medical Practices</h5>
                            <p class="card-text text-start text-wrap">
                                Build authority with E-E-A-T-driven healthcare SEO—optimized for local maps, AI-powered
                                searches, and patient trust signals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/electricians.jpg') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Home & Trade Services</h5>
                            <p class="card-text text-start text-wrap">
                                From electricians to designers, we use schema-rich, mobile-first SEO and localized content
                                clusters to capture high-intent leads.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Astrology & Spiritual Services.jpg') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Astrology & Spiritual Services</h5>
                            <p class="card-text text-start text-wrap">
                                Grow your reach with optimized service pages, AI Q&A answers, and voice-ready content that
                                position you as a trusted advisor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Automotive.jpg') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Automotive & Local Services</h5>
                            <p class="card-text text-start text-wrap">
                                Drive leads for rentals, repairs, and dealers with hyperlocal GEO, voice-ready SEO, and
                                structured snippets that own the SERP.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Online Gaming & Casino Platforms.jpg') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Online Gaming & Casino Platforms</h5>
                            <p class="card-text text-start text-wrap">
                                Fuel growth with AI-optimized landing pages, GEO-driven visibility, and zero-click SEO that
                                attract engaged, risk-ready players.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Education & Institutions.png') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Education & Institutions</h5>
                            <p class="card-text text-start text-wrap">
                                Boost enrollments with voice-friendly, intent-driven guides and AI-answer optimized content
                                designed for students and parents.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Cryptocurrency & Blockchain.webp') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Cryptocurrency & Blockchain</h5>
                            <p class="card-text text-start text-wrap">
                                Stand out in the competitive crypto space with AEO, GEO, and AI-ready SEO strategies that
                                connect you to traders and investors.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Hospitality & Tourism.jpg') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Hospitality & Tourism</h5>
                            <p class="card-text text-start text-wrap">
                                Increase bookings with AI-optimized hotel listings, immersive content, and voice-search SEO
                                tailored for global travelers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Legal Services.webp') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Legal Services</h5>
                            <p class="card-text text-start text-wrap">
                                Build digital trust with structured legal FAQs, authority-rich bios, and local SEO
                                strategies that connect you with ready clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/seo/Reatestate.png') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">Real Estate & Property Listings</h5>
                            <p class="card-text text-start text-wrap">
                                Turn searches into sales with geo-targeted listings, AI-ready snippets, and zero-click SEO
                                that maximize property visibility.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class=" py-5">
        <div class="container py-2 py-md-5 seocards">
            <div class="text-center seoheadingsecthree mb-5">
                Stay Ahead with Smart SEO Strategies
            </div>
            <div class="row justify-items-center">
                <div class="col-md-4 col-6">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center seocards">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Quality-Of-Traffic-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text-center">Quality Of Traffic</h6>
                            <p class="card-text  ">
                                Gain people who are really interested in your offerings, and you'll see a sharp increase in
                                conversion rates.
                            </p>
                        </div>
                    </div>


                </div>
                <div class="col-md-4 col-6">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center seocards">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Free-Traffic-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text-center">Zero Ad Spend, Maximum Impact</h6>
                            <p class="card-text  ">
                                Use SEO to generate free organic visitors. There is no need for paid advertisements.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center seocards">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Conversion-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text-center">More Conversions</h6>
                            <p class="card-text  ">
                                It is a straightforward fact that higher rankings result in more clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center seocards">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Better-Online-Visibility-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text-center">Increased Visibility</h6>
                            <p class="card-text  ">
                                Make sure your content appears on the first page of Google search results, where it counts
                                most.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center seocards">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Higher-Domain-Authority-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text-center">Increased Domain Authority</h6>
                            <p class="card-text  ">
                                Observe how your SEO approach increases credibility and trust as your website's reputation
                                rises.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="bannerbg py-5">
        <div class="container py-2 py-md-5">
            <div class="row">
                <div class="text-center seoheadingsecthree fs-1">
                    What We <span class="globaltxtcolor fs-1">Offer</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap seosecondheadsecthree">
                        Explore Our Dynamic Range of Services:
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/local-seo.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Current Website Audit & Competitor Analysis Report</p>
                            <p class="card-text text-start text-wrap">Analyze your website’s performance and compare it
                                with competitors to identify growth opportunities.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/keyword.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Current Analytics & Search Console Report</p>
                            <p class="card-text text-start text-wrap">
                                Gain insights into your website’s traffic, user behavior, and performance using Google
                                Analytics & Search Console.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/dashboard.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Current Ranking Report On Keywords</p>
                            <p class="card-text text-start text-wrap">
                                Track your current keyword rankings and identify areas for improvement in search engine
                                results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/pr.png') }}" alt="service bg" class="mb-3"
                                style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Keyword Research</p>
                            <p class="card-text text-start text-wrap">
                                Find the most relevant and high-converting keywords to drive targeted traffic to your
                                website.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/copy-writing.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Website Content Update</p>
                            <p class="card-text text-start text-wrap">
                                Optimize and refresh website content to improve search rankings and user engagement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/ecommerce.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Technical SEO Check & Update</p>
                            <p class="card-text text-start text-wrap">Identify and fix technical issues that affect website
                                performance and search engine indexing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/magnet.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Title Tag & Meta Tag Optimization</p>
                            <p class="card-text text-start text-wrap">
                                Enhance title tags and meta descriptions to improve click-through rates and search
                                visibility.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/blogging.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Monthly Blog Updation, Optimization, Indexing</p>
                            <p class="card-text text-start text-wrap">
                                Publish and optimize fresh, SEO-friendly blogs to drive organic traffic and boost rankings.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/optimizing.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Technical Optimization</p>
                            <p class="card-text text-start text-wrap">Improve site speed, mobile responsiveness, and
                                structured data for enhanced search performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/on-page.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">On-Page Optimization</p>
                            <p class="card-text text-start text-wrap">Optimize web pages with targeted keywords, quality
                                content, and structured HTML for better rankings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/off-page-seo.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Off-Page Optimization</p>
                            <p class="card-text text-start text-wrap">Boost website authority through strategic
                                link-building and brand mentions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/information.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Website Auditing</p>
                            <p class="card-text text-start text-wrap">Conduct a deep SEO audit to detect and fix website
                                issues affecting rankings and user experience.</p>
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
                            <h2 class=" fw-bold mb-4 fs-3 ">Claim Your Free SEO Strategy Session!</h2>
                            <p>
                                Our personalized 1-on-1 SEO consultations are designed to address your unique business challenges. Engage directly with our SEO specialists to uncover actionable strategies that drive results.
                            </p>
                            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                                <a href="tel:+918824269821" class="btn btn-danger btn-lg"> <i
                                        class="bi bi-telephone"></i> Get a free consultation</a>
                                <a href="https://wa.me/918824269821" class="btn btn-success btn-lg"><i
                                        class="bi bi-whatsapp"></i> Chat on WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.seocards');

            cards.forEach(card => {
                card.addEventListener('click', function() {
                    const cardText = this.querySelector('.card-text');
                    if (window.innerWidth <= 768) {
                        cardText.classList.toggle('show');
                    }
                });
            });
        });
    </script>
@endsection
