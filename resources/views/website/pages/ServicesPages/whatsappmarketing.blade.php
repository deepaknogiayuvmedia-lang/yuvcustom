@extends('website.layout.websitemain')
@section('title', 'WhatsApp Marketing | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>
    <section class="py-2 position-relative">
        <div class="container py-5">
            <div class=" row">
                <div class="text-center whatheading">
                    Revolutionize Your Business with <span class="whatheadingsub">WhatsApp Marketing</span>
                </div>
                <div class="text-center fs-4">
                    <p class="text-wrap whatsecondhead">
                        Engage, Connect, and Grow with Personalized Messaging
                    </p>
                </div>
                <div class="text-center fs-6">
                    <p class="text-wrap">
                        5X Your Revenue with the Power of WhatsApp
                    </p>
                </div>
                <div class="d-flex justify-content-center flex-wrap">
                    <div class="me-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg whatbtn">Get Started for Free <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="mt-3 mt-md-0">
                        <a class="btn btn-outline-dark btn-lg bookdemobtnwhat" href="{{ route('contact') }}">Book a Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  class="py-5 position-relative">
        <div class="container-fluid">
            <div class="row gy-3">
                <div class="col-lg-4">
                    <img class="img-fluid  rounded-3"
                        src="{{ asset('assets/websiteAssets/images/Screenshot_1.jpg') }}" alt="">
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid  rounded-3"
                        src="{{ asset('assets/websiteAssets/images/Screenshot_2.jpg') }}" alt="">
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid  rounded-3"
                        src="{{ asset('assets/websiteAssets/images/Screenshot_3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bannerbg">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center whatheading">
                    Why <span class="whatheadingsub">WhatsApp ?</span>
                </div>
                <div class="text-center fs-5">
                    <p class="text-wrap whywhatcontent">
                        WhatsApp serves as the ultimate platform that seamlessly combines actionable notifications with
                        reliable customer support, enabling businesses to stay connected with their audience while enhancing
                        engagement and satisfaction!
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/interest-rate.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-normal">High Open Rates</p>
                            <p class="card-text">Ensuring your message reaches your audience.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/marketingcam.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-normal">Campaign Management</p>
                            <p class="card-text">Simplify sales and marketing communications.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/time.png') }}" alt="service bg" class="mb-3"
                                style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-normal">Schedule Messages</p>
                            <p class="card-text">Plan Campaigns according to your schedule.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/people.png') }}" alt="service bg" class="mb-3"
                                style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-normal">Stronger Connections</p>
                            <p class="card-text">Talk to your contacts in their first language.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/advertisingtarget.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-normal">Targeted Campaigns</p>
                            <p class="card-text">Reach specific Demographics or Interests.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/performance-report.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-normal">Measurable Results</p>
                            <p class="card-text">Track your WhatsApp marketing with analytics.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
