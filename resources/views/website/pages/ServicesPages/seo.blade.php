@extends('website.layout.websitemain')
@section('title', 'Seach Engine Optimization | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="position-relative">
        <div class="container  py-3 py-md-5">
            <div class=" row">
                <div class="text-center globaltxtcolor text-capitalize">
                    Boost Your Visibility with the Best SEO Services
                </div>
                <div class="text-center fs-4">
                    <p class="text-wrap seosecondhead">
                        Google rankings can make or break your business.
                    </p>
                </div>
                <div class="text-center fs-6">
                    <p class="text-wrap">
                        At Yuvmedia, we offer the best SEO services to attract not just traffic — but the right traffic. <br/> Because a successful website isn’t about clicks alone, it’s about reaching the audience that truly matters.
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
                        Rank Higher with the Best SEO Services
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Reach farther and grow faster by attracting the right audience — not just any audience. With Yuvmedia’s Best SEO services, we go beyond boosting raw traffic to bring in qualified visitors who are ready to convert into loyal customers.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Our specialists refine every facet of your site: targeted keyword research, compelling content, and technical SEO that enhances speed, structure, and crawlability. By aligning search intent with your brand’s message, we ensure you appear before the right people at the right moment, turning your website into a true growth engine.
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


    <div class="section">
        <div class="wrapper container">
            <div class="citebox js-karaoke">
                <div class="citebox-content js-karaoke-content">
                    <span>We’ve delivered</span> <br />
                    <span><b>4,000+</b></span><br />
                    <span>organic leads and ranked</span><br />
                    <span><b>10000+</b></span><br />
                    <span>keywords on Google’s 1st Page</span>
                    <span>through our <b>best SEO</b></span>
                    <span>services at Yuvmedia.</span>
                </div>
                <div class="citebox-mask js-karaoke-mask">
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init aos-animate">
                        We’ve delivered
                    </span><br />
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        4,000+
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        organic leads and ranked
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        10000+
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        keywords on Google’s 1st Page
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        through our best SEO
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        services at Yuvmedia.
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
                            <li>Best digital marketing agency in India with expert project managers and SEO professionals</li>
                            <li>Best digital marketing company in India with a proven track record across diverse industries</li>
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

    <section class=" py-5">
        <div class="container py-2 pb-md-5">
            <div class="row">
                <div class="text-center fs-2 fw-bold">
                    Best SEO services designed for small 
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap seosecondheadsecthree">
                        businesses with a step-by-step success strategy
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto"  >
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/05/one-page-seo.jpg"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">On Page SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto"  >
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Content-Audit1-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Off Page SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto h-100"  >
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/10/Local-Education-SEO.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Technical SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto"  >
                        <img src="https://www.rankontechnologies.com/wp-content/uploads/2022/06/Competitor-Audit-copy.png"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Compititor Analysis</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto"  >
                        <img src="{{asset('assets/websiteAssets/images/services/seo/Website Review & Analysis.webp')}}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Website Review & Analysis</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto"  >
                        <img src="{{asset('assets/websiteAssets/images/services/seo/E-commerce SEO.webp')}}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">E-commerce SEO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto"  >
                        <img src="{{asset('assets/websiteAssets/images/services/seo/Digital PR & Link Building.jpg')}}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Digital PR & Link Building</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto"  >
                        <img src="{{asset('assets/websiteAssets/images/services/seo/Lead Generation SEO.jpg')}}""
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
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/blogging.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
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
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/optimizing.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Technical Optimization</p>
                            <p class="card-text text-start text-wrap">Improve site speed, mobile responsiveness, and
                                structured data for enhanced search performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/on-page.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">On-Page Optimization</p>
                            <p class="card-text text-start text-wrap">Optimize web pages with targeted keywords, quality
                                content, and structured HTML for better rankings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="seocardone">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/off-page-seo.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
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
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/information.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class=" fw-bold text-start">Website Auditing</p>
                            <p class="card-text text-start text-wrap">Conduct a deep SEO audit to detect and fix website
                                issues affecting rankings and user experience.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.seocards');

            cards.forEach(card => {
                card.addEventListener('click', function () {
                    const cardText = this.querySelector('.card-text');
                    if (window.innerWidth <= 768) {
                        cardText.classList.toggle('show');
                    }
                });
            });
        });
    </script>
@endsection
