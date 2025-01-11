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
                        It’s Like Your website is a party. Invite the right guests.
                    </p>
                </div>
                <div class="d-flex justify-content-center flex-wrap">
                    <div class="me-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg seobtn">Contact Us <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start globaltxtcolor">
                        Elevate Your Online Presence with <span class=" text-decoration-underline">Expert SEO</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            SEO is the process of attaining a higher ranking on search engine results pages (SERPs). When
                            people search for your business, SEO helps your website appear prominently in the search
                            results.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Being a top SEO company, we understand your business goals and develop a personalized strategy
                            to help you reach your desired business objectives.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  btn-outline-primary">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/user-experience.webp') }}"
                        alt="seo">
                </div>
            </div>
        </div>
    </section>

    <section class="seointro py-5">
        <div class="container py-2 py-md-5">
            <div class="row">
                <div class="text-center fs-2 fw-bold">
                    SEO Services in India That Help To Get Ranking, Traffic, And Sales

                </div>
                <div class="text-center py-2">
                    <p class="text-wrap seosecondheadsecthree">
                        Start getting more qualified traffic, increased sales, and higher rankings on SERPs by requesting
                        search engine optimization services for your business website type from India’s leading SEO Company,
                        Yuvmedia.
                    </p>
                </div>
                <div class="text-center fs-4 fw-bold">
                    What Do You Get When You Hire Us As Your SEO Company in India
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <ul>
                            <li>All-time access to premium SEO tools</li>
                            <li>Dedicated and skilled project managers and SEO professionals</li>
                            <li>Practice White Hat SEO</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Affordable SEO Packages</li>
                            <li>Competitive pricing and timely reporting</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class=" py-5">
        <div class="container py-2 pb-md-5">
            <div class="row">
                <div class="text-center fs-2 fw-bold">
                    Our Professional SEO Services in India Include
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap seosecondheadsecthree">
                        We Follow Certain Steps To Provide High-Quality Small Business SEO Services.
                    </p>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto" style="width: 18rem;">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/05/one-page-seo.jpg"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">OnPage SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto" style="width: 18rem;">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Content-Audit1-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">OffPage SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto h-100" style="width: 18rem;">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/10/Local-Education-SEO.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Technical SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto" style="width: 18rem;">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Competitor-Audit-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Compititor Analysis</h5>
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
                Our Professional SEO Services in India Include
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
                                Content Quality
                            </div>
                            <p>
                                We write high-quality, relevant, and engaging content that provides value to users is
                                crucial.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Keywords
                            </div>
                            <p>
                                Properly researched and strategically placed keywords in titles and headings throughout the
                                content help search engines understand the relevance of your pages.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Backlinks
                            </div>
                            <p>
                                We build high-quality backlinks from authoritative sites to improve credibility and ranking.
                                The quantity and quality of these links matter.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                On-Page SEO
                            </div>
                            <p>
                                We optimise meta titles, descriptions, and header tags, and ensure proper keyword usage.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Technical SEO
                            </div>
                            <p>
                                We optimize factors like site speed, mobile-friendliness, secure connections (HTTPS), and a
                                well-structured URL hierarchy.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                User Experience (UX)
                            </div>
                            <p>
                                A well-designed site that is easy to navigate, has a clear layout, and provides a good user
                                experience can positively affect rankings. We optimize website architecture.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Mobile Optimization
                            </div>
                            <p>
                                With mobile-first indexing, your site must perform well on mobile devices. We optimize
                                websites for mobiles.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="stepList">
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Page Speed
                            </div>
                            <p>
                                Fast-loading pages improve user experience. We speed up your website to pass Core Web
                                Vitals.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Site Structure and Internal Linking
                            </div>
                            <p>
                                A clear and logical site structure helps search engines crawl and index your pages more
                                efficiently. Effective internal linking also helps distribute page authority.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Social Signals
                            </div>
                            <p>
                                Engagement on social media platforms can indirectly influence SEO by driving traffic and
                                increasing visibility. We build and manage social media profiles.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Local SEO
                            </div>
                            <p>
                                For local businesses, we build Google business profiles and optimize it for better local
                                exposure. We also build local citations.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                User Engagement Metrics
                            </div>
                            <p>
                                We optimize websites for higher engagement rates. It helps users to spend more time on pages
                                and also improves website SEO.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Content Freshness
                            </div>
                            <p>
                                Regularly updating and adding new content can help keep your site relevant and engaging. We
                                find trending topics and write good quality SEO optimized contents.
                            </p>
                        </li>
                        <li class="stepList-item stepList-item--complete">
                            <div class="stepList-item__title">
                                Schema Markup
                            </div>
                            <p>
                                Implementing schema markup helps search engines understand the content and can enhance your
                                listings in search results with rich snippets.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class=" py-5">
        <div class="container py-2 py-md-5">
            <div class="text-center seoheadingsecthree mb-5">
                Benefits of SEO Services
            </div>
            <div class="row justify-items-center">
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center" style="width: 18rem;">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Quality-Of-Traffic-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Quality Of Traffic</h5>
                            <p class="card-text">
                                You can attract all the visitors in the world who are genuinely interested in the products
                                that you offer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center" style="width: 18rem;">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Free-Traffic-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Free Traffic </h5>
                            <p class="card-text">
                                Ads make up a large share of SERPs. Organic traffic is any traffic that you don’t have to
                                pay for.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center" style="width: 18rem;">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Conversion-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Conversion</h5>
                            <p class="card-text">
                                If you get top search engine rankings then you will get more conversions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center" style="width: 18rem;">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Better-Online-Visibility-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Better Online Visibility</h5>
                            <p class="card-text">
                                You get more brand exposure when you rank on top of the first-page search results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center" style="width: 18rem;">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Quantity-Of-Traffic-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Quantity Of Traffic
                            </h5>
                            <p class="card-text">
                                Once you have the right people clicking through from those search engine results pages
                                (SERPs), more traffic is better.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-4 mx-auto mb-5 text-center" style="width: 18rem;">
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Higher-Domain-Authority-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Higher Domain Authority
                            </h5>
                            <p class="card-text">
                                A proper SEO strategy helps you to increase your website’s domain authority and reputation.
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
                    What Our <span class="globaltxtcolor fs-1">SEO Services Offer</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap seosecondheadsecthree">
                        Our comprehensive SEO services are designed to cover every aspect of your online presence. Here’s
                        what you can expect:
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-3">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/local-seo.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-normal text-start">Local SEO</p>
                            <p class="card-text text-start text-wrap">Our local SEO strategies boost your visibility in
                                "near me" and location-specific searches by optimizing your Google Business Profile and
                                citations. This drives relevant, high-intent traffic to your business.</p>
                            <!-- <a  href="{{ route('contact') }}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/keyword.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-normal text-start">Keyword Research</p>
                            <p class="card-text text-start text-wrap">Our Advanced Keyword Research for Unparalleled SEO
                                Success. We Master Your Online Visibility with Our Expert Keyword Analysis, with the right
                                intent for your audience, regardless of the industry or location.</p>
                            <!-- <a  href="{{ route('contact') }}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/dashboard.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-normal text-start">Analytics & Reporting</p>
                            <p class="card-text text-start text-wrap">To know what's going on with your digital marketing,
                                analytics, and reporting is important. We provide comprehensive reports and tools to monitor
                                your most important KPIs.Data is the key to success.</p>
                            <!-- <a  href="{{ route('contact') }}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/pr.png') }}" alt="service bg" class="mb-3"
                                style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-normal text-start">Digital PR & Link Building</p>
                            <p class="card-text text-start text-wrap">Enhance your online presence and authority with our
                                digital PR and link-building services. Our strategy focuses on securing high-quality
                                backlinks, that boost your site's credibility.</p>
                            <!-- <a  href="{{ route('contact') }}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/copy-writing.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-normal text-start">Content Creation</p>
                            <p class="card-text text-start text-wrap">Our team of content strategists, writers, and editors
                                collaborate with your business to create impactful content. We also have specialists for
                                niche industries to ensure targeted engagement.</p>
                            <!-- <a  href="{{ route('contact') }}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/ecommerce.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-normal text-start">E-commerce SEO</p>
                            <p class="card-text text-start text-wrap">Yuvmedia specializes in optimizing e-commerce
                                platforms like Shopify, Wix, and WooCommerce. We resolve technical issues, enhance product
                                descriptions, and implement strategies.</p>
                            <!-- <a  href="{{ route('contact') }}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/magnet.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-normal text-start">Lead Generation SEO</p>
                            <p class="card-text text-start text-wrap">Our SEO company provides comprehensive full-funnel
                                strategies designed to drive business growth. From generating initial demand to warming up
                                leads and guiding them through the conversion process.</p>
                            <!-- <a  href="{{ route('contact') }}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/seo.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-normal text-start">SEO for All Industries</p>
                            <p class="card-text text-start text-wrap">We have extensive experience across industries like
                                automotive, healthcare, finance, and more. Our expertise spans various business types,
                                including franchises, subscription services.</p>
                            <!-- <a  href="{{ route('contact') }}" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
