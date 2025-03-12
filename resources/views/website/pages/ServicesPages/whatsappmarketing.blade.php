@extends('website.layout.websitemain')
@section('title', 'WhatsApp Marketing | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-2 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-start whatheading">
                        Turn Your Conversations Into
                        <span class="whatheadingsub">Conversions With WhatsApp Marketing</span>
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
                            <a href="{{ route('contact') }}" class="btn btn-lg whatbtn">
                                Get Started for Free
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="mt-3 mt-md-0">
                            <a class="btn btn-outline-dark btn-lg bookdemobtnwhat" href="{{ route('contact') }}">
                                Book aDemo
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('assets/websiteAssets/images/services/whatssdappss.png') }}"
                        alt="">
                </div>
                <div class="mt-3 text-center d-flex justify-content-around">
                    <div class="fs-6 fw-bold">
                        ✅Get Green Tick Verified
                    </div>
                    <div class="fs-6 fw-bold">
                        ✅One time & recurring Campaigns on WhatsApp
                    </div>
                    <div class="fs-6 fw-bold">
                        ✅Build your own Workflows
                    </div>
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
            <h3 class="whatheading text-center">Your Business
            </h3>
            <p class="text-wrap fs-4 text-center">Powered by WhatsApp’s Advanced Features
            </p>
            <div class="p-3 p-md-5 shadow-sm rounded-4">

                <div class="row ">
                    <div class="col-md-6 p-3 p-md-5">
                        <img class="img-fluid  rounded-3"
                            src="https://www.wati.io/wp-content/uploads/2024/11/Broadcast-new1.webp" alt="features">
                    </div>
                    <div class="col-md-6 p-3 p-md-5  d-flex flex-column justify-content-center">
                        <h3>Send Out a Broadcast</h3>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Use high-response WhatsApp messages to engage your audience and start effective campaigns.
                            </p>
                        </div>
                        <div class="d-flex">

                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Tag contacts, classify them, and send individualized messages to each category to
                                efficiently arrange contacts.
                            </p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Continue to connect on WhatsApp on a daily basis to build enduring relationships that propel
                                future sales.
                            </p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-success">Get Started for Free <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-6 p-3 p-md-5  d-flex flex-column justify-content-center">
                        <h3>Use chatbots to automate</h3>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Create user-friendly, no-code chatbots that can instantly respond to frequently asked
                                questions.
                            </p>
                        </div>
                        <div class="d-flex">

                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Use automated techniques to personalize interactions and streamline mass communication.
                            </p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Use WhatsApp to interact directly with clients and boost sales conversions.
                            </p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-success">Get Started for Free <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 p-3 p-md-5">
                        <img class="img-fluid  rounded-3"
                            src="https://www.wati.io/wp-content/uploads/2024/11/Botflow-new1.webp" alt="features">
                    </div>

                </div>

                <div class="row ">
                    <div class="col-md-6 p-3 p-md-5">
                        <img class="img-fluid  rounded-3"
                            src="https://www.wati.io/wp-content/uploads/2024/11/Team-Inbox-new1.webp" alt="features">
                    </div>
                    <div class="col-md-6 p-3 p-md-5  d-flex flex-column justify-content-center">
                        <h3>Work together using a shared team inbox.</h3>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Use the shared WhatsApp inbox provided by Yuvmedia to enable your team to provide
                                outstanding service.
                            </p>
                        </div>
                        <div class="d-flex">

                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                For thorough context, seamlessly include consumer data using pre-built tools.
                            </p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-patch-check text-success"></i>
                            <p class="ms-2">
                                Use WhatsApp to effectively handle support requests and provide order updates to improve
                                post-purchase communication.
                            </p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-success">Get Started for Free
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container">
            <h3 class="whatheading">Choose the advantage
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
                        <img src="https://www.wati.io/wp-content/uploads/2024/05/sscale.webp" alt=""
                            width="150">
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
                        <img src="https://www.wati.io/wp-content/uploads/2024/05/chhnl.webp" alt=""
                            width="150">
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

    <section class="py-5 ">
        <div class="container py-md-5 justify-content-center">
            <div class="row">
                <div class="text-center whatheading">
                    What's
                    <span class="whatheadingsub">In It For You ?</span>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/interest-rate.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">WhatsApp Account Creation
                            </p>
                            <p class="card-text">
                                We assist in setting up your business WhatsApp account, ensuring it's properly linked to
                                your business number and ready for customer engagement.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/marketingcam.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">WhatsApp Profile Setup</p>
                            <p class="card-text">
                                Tailor your business profile with a professional photo, description, and relevant business
                                details to ensure a seamless brand presence on WhatsApp.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/time.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">Quick Replies & Chatbot Setup</p>
                            <p class="card-text">
                                We set up automated quick replies and chatbots to provide immediate responses to frequently
                                asked questions, enhancing customer experience and saving time.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/mail.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">WhatsApp Message Templates</p>
                            <p class="card-text">
                                Create and organize custom message templates for your marketing campaigns, ensuring consistency and quick responses to your audience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/people.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">Campaign Planning & Execution
                            </p>
                            <p class="card-text">
                                We develop and execute WhatsApp marketing campaigns aimed at increasing engagement,
                                conversions, and overall brand awareness.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/advertisingtarget.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">Tracking & Optimization
                            </p>
                            <p class="card-text">Monitor campaign performance with tracking tools, providing insights to
                                optimize messaging, delivery times, and customer engagement for better results.
                            </p>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="py-5 bannerbg">
        <div class="container py-md-5 justify-content-center">
            <div class="row">
                <div class="text-center whatheading">
                    Why <span class="whatheadingsub"> WhatsApp ?</span>
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
                            <p class="fw-bold">High Open Rates</p>
                            <p class="card-text">
                                WhatsApp messages enjoy impressive open rates, ensuring your content reaches your audience effectively and promptly.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/marketingcam.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">Campaign Management</p>
                            <p class="card-text">
                                Easily manage and monitor your WhatsApp campaigns, optimizing each phase for better engagement and results.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/time.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">Schedule Messages</p>
                            <p class="card-text">
                                Plan and schedule your WhatsApp messages in advance, ensuring timely communication with your audience, even when you're offline.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/services/seo/mail.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">Stronger Connections</p>
                            <p class="card-text">
                                Build direct, personal connections with your customers, fostering loyalty and trust through one-on-one messaging.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/people.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">Targeted Campaigns</p>
                            <p class="card-text">
                                Reach the right audience with targeted campaigns, ensuring your messages are relevant and impactful for maximum engagement.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="whatcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/advertisingtarget.png') }}" alt="service bg"
                                class="mb-3" style="width: 50px; height: 50px; object-fit: contain;">
                            <p class="fw-bold">Measurable Results</p>
                            <p class="card-text">
                                Track and measure the effectiveness of your WhatsApp campaigns, allowing you to refine your strategy and drive better outcomes.
                            </p>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection
