@extends('website.layout.websitemain')
@section('title', 'Seach Engine Optimization | ' . config('app.name'))
@section('content')
<section id="seofirstsection"
    style="background-image: url('{{ asset('assets/websiteAssets/images/seobackground.jpg') }}'); background-repeat: no-repeat; background-position-y:-290px; background-size: cover;">
    <div class="container  py-3 py-md-5">
        <div class=" row">
            <div class="text-center seoheading">
                Google rankings can make or <span class="seoheadingsub">break your business</span>
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
                    <a href="#" class="btn btn-lg seobtn">Contact Us <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #ffffff;" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-start seoheadingsectiontwo">
                Elevate Your Online Presence with <span class=" seoheadingsubsectiontwo text-decoration-underline">Expert SEO</span>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap seosecondhead">
                        SEO is the process of attaining a higher ranking on search engine results pages (SERPs). When people search for your business, SEO helps your website appear prominently in the search results. 
                    </p>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap seosecondhead">
                        Being a top SEO company, we understand your business goals and develop a personalized strategy to help you reach your desired business objectives.
                    </p>
                </div>
                <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                    <div class="me-3">
                        <a href="#" class="btn btn-lg  seobbtn">Contact Us <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="seoimage" src="{{ asset('assets/websiteAssets/images/seobackgroundnew.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section style="background-color: #e4f0ff;" class="py-5">
    <div class="container py-2 py-md-5">
        <div class="row">
            <div class="text-center seoheadingsecthree">
                What Our <span class="seoheadingsubsecthree">SEO Services Offer</span>
            </div>
            <div class="text-center py-2">
                <p class="text-wrap seosecondheadsecthree">
                    Our comprehensive SEO services are designed to cover every aspect of your online presence. Here’s what you can expect:
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
                        <p class="card-text text-start text-wrap">Our local SEO strategies boost your visibility in "near me" and location-specific searches by optimizing your Google Business Profile and citations. This drives relevant, high-intent traffic to your business.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="seocardone">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/keyword.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">Keyword Research</p>
                        <p class="card-text text-start text-wrap">Our Advanced Keyword Research for Unparalleled SEO Success. We Master Your Online Visibility with Our Expert Keyword Analysis, with the right intent for your audience, regardless of the industry or location.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="seocardone">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/dashboard.png') }}" alt="service bg"
                            class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">Analytics & Reporting</p>
                        <p class="card-text text-start text-wrap">To know what's going on with your digital marketing, analytics, and reporting is important. We provide comprehensive reports and tools to monitor your most important KPIs.Data is the key to success.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="seocardone">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/pr.png') }}" alt="service bg"
                            class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">Digital PR & Link Building</p>
                        <p class="card-text text-start text-wrap">Enhance your online presence and authority with our digital PR and link-building services. Our strategy focuses on securing high-quality backlinks, that boost your site's credibility.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="seocardone">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/copy-writing.png') }}" alt="service bg"
                            class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">Content Creation</p>
                        <p class="card-text text-start text-wrap">Our team of content strategists, writers, and editors collaborate with your business to create impactful content. We also have specialists for niche industries to ensure targeted engagement.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="seocardone">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/ecommerce.png') }}" alt="service bg"
                            class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">E-commerce SEO</p>
                        <p class="card-text text-start text-wrap">Yuvmedia specializes in optimizing e-commerce platforms like Shopify, Wix, and WooCommerce. We resolve technical issues, enhance product descriptions, and implement strategies.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="seocardone">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/magnet.png') }}" alt="service bg"
                            class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">Lead Generation SEO</p>
                        <p class="card-text text-start text-wrap">Our SEO company provides comprehensive full-funnel strategies designed to drive business growth. From generating initial demand to warming up leads and guiding them through the conversion process.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="seocardone">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/seo.png') }}" alt="service bg"
                            class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">SEO for All Industries</p>
                        <p class="card-text text-start text-wrap">We have extensive experience across industries like automotive, healthcare, finance, and more. Our expertise spans various business types, including franchises, subscription services.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection