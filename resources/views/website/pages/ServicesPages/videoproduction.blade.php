@extends('website.layout.websitemain')
@section('title', 'Video Production | ' . config('app.name'))
@section('content')
<section style="background-color: #ffffff;" class="py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-start videoproheading">
                    Telling the story of <span class="videoproheadingsub">Your Brand Through Our Lens</span>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap videoprosecondhead">
                        At Yuv Media, we specialize in creating high-quality videos that captivate and engage your
                        audience. Our expert team handles everything from concept to completion, ensuring a seamless and
                        professional experience.
                    </p>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap videoprosecondhead">
                        From conceptualization to final production, our team ensures your brand’s message is not just
                        seen but felt. Let’s craft a narrative that leaves a lasting impression.
                    </p>
                </div>
                <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                    <div class="me-3">
                        <a href="#" class="btn btn-lg videoprobbtn">Contact Us<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="videoprobimage" src="{{ asset('assets/websiteAssets/images/videopro.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section style="background-color: #f8fff8;" class="py-5">
    <div class="container py-5 justify-content-center">
        <div class="row">
            <div class="text-center videoproheadingsecthree">
                What You Will <span class="videoproheadingsubsecthree">Get ?</span>
            </div>
            <div class="text-center py-2">
                <p class="text-wrap videoprosecondheadsecthree">
                    When you partner with us, you gain more than just a video; you receive a captivating story that
                    aligns with your brand’s vision.
                </p>
            </div>
        </div>
        <div class="row gy-4 gx-4">
            <div class="col-md-4">
                <div class="videoprocardone">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/video-ad.png') }}" alt="service bg"
                            class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">Corporate Videos</p>
                        <p class="card-text text-start text-wrap">Present your brand's story, values, and achievements through professional corporate videos.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="videoprocardssecthree">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/video-marketing.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">Promotional Videos</p>
                        <p class="card-text text-start text-wrap">Highlight your services or products with engaging promotional videos to attract customers.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="videoprocardone">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/events.png') }}" alt="service bg"
                            class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">Event Coverage</p>
                        <p class="card-text text-start text-wrap">Capture the important moments of your events with thorough video coverage, including all functions.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2 gy-4">
            <div class="col-md-4">
                <div class="videoprocardssecthree">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/bullhorn.png') }}" alt="service bg"
                            class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">Social Media Videos</p>
                        <p class="card-text text-start text-wrap">Create a stronger online presence with short, powerful videos for all social platforms.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="videoprocardone">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/video-lesson.png') }}" alt="service bg"
                            class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-normal text-start">Training Videos</p>
                        <p class="card-text text-start text-wrap">Create informative videos to train your employees or educate your audience effectively.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection