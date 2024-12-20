@extends('website.layout.websitemain')
@section('title', 'Web Development | ' . config('app.name'))
@section('content')
<canvas id="gradient-canvas"></canvas>

<section  class="position-relative">
    <div class="container py-5">
        <div class=" row">
            <div class="text-center performanceheading">
            Performance Media That <span class="performanceheadingsub">Moves the Needle</span>
            </div>
            <div class="text-center">
                <p class="text-wrap performancesecondhead">
                At YUVMEDIA, we understand the importance of reaching your customers at the right moment and place. Our paid strategies accompany your potential customers, ensuring you receive the strongest consideration.
                </p>
            </div>
            <div class="text-center fs-6">
                <p class="text-wrap fw-bold">
                    Your Brand’s New BFF
                </p>
            </div>
            <div class="d-flex justify-content-center flex-wrap">
                <div class="me-3">
                    <a href="{{route('contact')}}" class="btn btn-lg performancebtn">Contact Us <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container  py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-start seoheadingsectiontwo">
                    Drive Results with <span class="seoheadingsubsectiontwo text-decoration-underline">Performance Media</span>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap seosecondhead">
                        Our performance media strategies are designed to deliver measurable results. We use data-driven approaches to optimize your campaigns and ensure maximum ROI.
                    </p>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap seosecondhead">
                        Partner with us to leverage cutting-edge technology and innovative tactics that keep your brand ahead of the competition.
                    </p>
                </div>
                <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                    <div class="me-3">
                        <a href="{{route('contact')}}" class="btn btn-lg seobbtn">Contact Us <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/holding-smartphone.webp') }}"
                    alt="seo">
            </div>
        </div>
    </div>
</section>
<section  class="position-relative py-5 bannerbg">
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
                <div class="performancecards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/paid-search.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Paid Search</p>
                        <p class="card-text text-start text-wrap">Maximize your online visibility through strategic keyword bids and ad copy optimization on search engines like Google and Bing.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="performancecards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/paid-content.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Paid Social</p>
                        <p class="card-text text-start text-wrap">Leverage platforms like Facebook, Instagram, and LinkedIn to connect with your target audience and drive conversions.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="performancecards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/native-advertising.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Display & Native Ads</p>
                        <p class="card-text text-start text-wrap">Reach a wider audience through visually engaging ads or video ads that blend seamlessly into the content of websites and apps.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2 gy-4">
            <div class="col-md-4">
                <div class="performancecards" >
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/research-and-development.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Creative Development</p>
                        <p class="card-text text-start text-wrap">Bring your brand to life with compelling and attractive ad copy, designs, and visuals that resonate with your target market.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="performancecards" >
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/amazon.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Amazon Marketing</p>
                        <p class="card-text text-start text-wrap">Optimize your product listings and advertising campaigns to increase sales and visibility on Amazon.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="performancecards" >
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/affiliate-marketing.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Affiliate Marketing</p>
                        <p class="card-text text-start text-wrap">Expand your reach by building a powerful network of affiliates who promote your products or services. It's a win-win strategy to boost sales.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection