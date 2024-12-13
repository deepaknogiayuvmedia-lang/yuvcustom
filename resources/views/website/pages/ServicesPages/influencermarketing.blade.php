@extends('website.layout.websitemain')
@section('title', 'Designing Services | ' . config('app.name'))
@section('content')
<section style="background-color: #fffbfc;" class="py-5">
    <div class="container py-0 py-md-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-start influheading">
                    Want to make a splash <span class="influheadingsub">in the digital world?</span>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap influsecondhead">
                        Influencer marketing is your ticket to success. Let’s face it, traditional advertising is losing its charm.People trust real people, not faceless corporations. That’s where we come in.
                    </p>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap influsecondhead">
                        At YUVMEDIA, we connect you with the perfect influencers to amplify your brand’s message.From fashionistas to fitness gurus, gamers to foodies, we’ve got the connections to make it happen.
                    </p>
                </div>
                <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                    <div class="me-3">
                        <a href="#" class="btn btn-lg influbbtn">Contact Us<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="influbimage" src="{{ asset('assets/websiteAssets/images/influheronew.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section style="background-color: #e4f0ff;" class="py-5">
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
                        <img src="{{ asset('assets/websiteAssets/images/influencer.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Identify the perfect influencers</p>
                        <p class="card-text text-start text-wrap">We match your brand with influencers whose values and style align with yours.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="influcards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/efficiency.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Measure and optimize</p>
                        <p class="card-text text-start text-wrap">We track campaign performance and provide insights to maximize your ROI.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="influcards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/content-marketing.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Create engaging campaigns</p>
                        <p class="card-text text-start text-wrap">Our team develops compelling content that resonates with your audience.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection