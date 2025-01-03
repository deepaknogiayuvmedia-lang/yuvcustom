@extends('website.layout.websitemain')
@section('title', 'WhatsApp Marketing | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-2 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-start whatheading">
                        Revolutionize Your Business with <span class="whatheadingsub">WhatsApp Marketing</span>
                    </div>
                    <div class=" fs-4">
                        <p class="text-wrap whatsecondhead">
                            Engage, Connect, and Grow with Personalized Messaging
                        </p>
                    </div>
                    <div class="text-start fs-6">
                        <p class="text-wrap">
                            5X Your Revenue with the Power of WhatsApp
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg whatbtn">Get Started for Free <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                        <div class="mt-3 mt-md-0">
                            <a class="btn btn-outline-dark btn-lg bookdemobtnwhat" href="{{ route('contact') }}">Book a
                                Demo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/websiteAssets/images/services/whatssdappss.png') }}" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container-fluid">
            <div class="row gy-3">
                <div class="col-lg-4">
                    <img class="img-fluid  rounded-3" src="{{ asset('assets/websiteAssets/images/Screenshot_1.jpg') }}"
                        alt="">
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid  rounded-3" src="{{ asset('assets/websiteAssets/images/Screenshot_2.jpg') }}"
                        alt="">
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid  rounded-3" src="{{ asset('assets/websiteAssets/images/Screenshot_3.jpg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container">
            <h3 class="whatheading">Features</h3>
            <div class="p-md-5 shadow-sm rounded-4">

                <div class="row ">
                    <div class="col-md-6 p-md-5">
                        <img class="img-fluid  rounded-3"
                            src="https://www.wati.io/wp-content/uploads/2024/11/Broadcast-new1.webp" alt="features">
                    </div>
                    <div class="col-md-6 p-md-5  d-flex flex-column justify-content-center">
                        <h3>Broadcast</h3>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Push out your campaigns and engage with high response WhatsApp
                                messages.
                            </p>
                        </div>
                        <div class="d-flex">

                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Tag contacts, categorize and target them in groups using
                                personalized communications.
                            </p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Build and nurture the relationships that generate future sales by
                                engaging with your audiences regularly on WhatsApp.
                            </p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-success">Get Started for Free <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-6 p-md-5  d-flex flex-column justify-content-center">
                        <h3>Chatbots</h3>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Create no-code chatbots to provide instant responses to common requests.
                            </p>
                        </div>
                        <div class="d-flex">

                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Simplify mass communication and personalized responses with automated tools.
                            </p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Boost sales by directly converting more customer communications on WhatsApp.
                            </p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-success">Get Started for Free <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 p-md-5">
                        <img class="img-fluid  rounded-3"
                            src="https://www.wati.io/wp-content/uploads/2024/11/Botflow-new1.webp" alt="features">
                    </div>

                </div>

                <div class="row ">
                    <div class="col-md-6 p-md-5">
                        <img class="img-fluid  rounded-3"
                            src="https://www.wati.io/wp-content/uploads/2024/11/Team-Inbox-new1.webp" alt="features">
                    </div>
                    <div class="col-md-6 p-md-5  d-flex flex-column justify-content-center">
                        <h3>Shared Team Inbox</h3>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Share the Yuvmedia Whatsapp inbox across your team and provide stellar support on WhatsApp

                            </p>
                        </div>
                        <div class="d-flex">

                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Use pre-built integrations to bring in customer context in a few clicks.

                            </p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Push post sales communications such as order updates, and resolve support requests quickly
                                through WhatsApp.

                            </p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-success">Get Started for Free <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container">
            <h3 class="whatheading">Choose the  advantage
            </h3>
            <p>Use Yuvmedia's Whatsapp Portal to engage your prospects through the WhatsApp Business API

            </p>
            <div class="row">
                <div class="col-md-3">
                    <div class="p-3">
                        <img src="https://www.wati.io/wp-content/uploads/2024/05/brk.webp" alt="" width="150">
                        <div class="py-3">
                            <div class="fs-5 fw-bold mb-2">Break engagement
                                barriers</div>
                            <p>
                                Engage using WhatsApp and improve response rates over email, SMS and in-app messaging and
                                campaigning.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <img src="https://www.wati.io/wp-content/uploads/2024/05/ups.webp" alt="" width="150">
                        <div>
                            <div class="fs-5 fw-bold mb-2">A better way to upscale</div>
                            <p>
                                Upscale with multiple users on one single number and get a better return on investment than
                                alternative WhatsApp BSPs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <img src="https://www.wati.io/wp-content/uploads/2024/05/sscale.webp" alt="" width="150">
                        <div>
                            <div class="fs-5 fw-bold mb-2">Communicate at scale efficiently</div>
                            <p>
                                Easily start and manage conversations with thousands of customers and prospects through
                                automation, chatbots and custom workflows.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <img src="https://www.wati.io/wp-content/uploads/2024/05/chhnl.webp" alt="" width="150">
                        <div>
                            <div class="fs-5 fw-bold mb-2">Multiple channels in one</div>
                            <p>
                                Nurture leads from Facebook and Instagram and increase ROI 10x by funneling your leads to
                                WhatsApp.
                            </p>
                        </div>
                    </div>
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
                            <img src="{{ asset('assets/websiteAssets/images/time.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-normal">Schedule Messages</p>
                            <p class="card-text">Plan Campaigns according to your schedule.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/people.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
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
