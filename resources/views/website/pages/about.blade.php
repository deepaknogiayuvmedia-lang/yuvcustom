@extends('website.layout.websitemain')
@section('title', 'About Us | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section id="aboutfirstsection" class="pt-5">
        <div class="container py-5" style="position: relative;">
            <div class="row">
                <div class="text-center fs-1 fw-bold ">
                    We're Built To Lead Change And Deliver <br>
                    <span class="globaltxtcolor">Future-Ready Solutions.</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap aboutsecondhead">
                        Driven by innovation and fueled by creativity, we are a passionate team at Yuvmedia, committed to
                        turning your digital visions into reality.
                    </p>
                </div>
                <div class="text-center">
                    <p class="text-wrap aboutsecondhead">
                        In this fast-paced world, we blend data, innovation, and intuition to craft compelling stories and
                        deliver impactful results. At Yuvmedia, we’re not just a team – we’re creators, strategists, and
                        problem-solvers, committed to shaping your digital journey.
                    </p>
                </div>
                <div class="d-flex justify-content-center flex-wrap buttonsdiv">
                    <div class="me-3">
                        <a href="#" class="btn btn-primary btn-lg">Contact Us<i
                                class="bi bi-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="globaltxtcolor text-center fs-1">Yuvengers</h1>
                    <img src="{{ asset('assets/websiteAssets/images/team/team-photo.webp') }}" alt="team"
                        class="img-fluid" style="margin-top: -50px;">

                </div>
            </div>
        </div>
    </section>

    <section class="bg-black p-3 p-md-3 position-relative">
        <div class="d-flex align-items-center justify-content-center">
            <p class="text-wrap  text-white text-center">
                We are the growth partners that drive results
            </p>
        </div>
    </section>

    <section id="aboutmainsection" class="py-4">
        <div class="container py-3 py-md-4">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="text-start fs-2 fw-bold">
                        Starting Small, Thinking Big:
                        <span class="globaltxtcolor">The Yuvmedia Story.</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            Born during the challenging times of the COVID-19 pandemic, our journey began with a simple
                            vision: to help businesses navigate the rapidly evolving digital world. As the world came to a
                            standstill, we saw an opportunity to guide companies in transitioning to the online space,
                            ensuring they stayed connected with their audiences and continued to thrive.
                        </p>
                    </div>

                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            Today, Yuvmedia stands as a trusted partner for hundreds of leading companies, from innovative
                            start-ups to well-established brands. With 7,000+ successful projects and 600+ MSMEs onboard,
                            we’ve built a strong portfolio of 1,000+ satisfied clients who trust us to deliver exceptional
                            results.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            With 5+ years of experience, we’ve continually adapted to the ever-changing digital landscape,
                            staying ahead of trends and consistently delivering value. Our commitment to innovation and
                            excellence remains at the heart of everything we do.

                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap fw-bold">
                            What started as a small initiative has now evolved into a thriving agency offering 10+ services
                            including digital marketing, design, technology solutions,Video Production and more.
                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="#" class="btn btn-outline-primary btn-lg">Contact Us<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    {{-- <div class="row h-100 imagesonmob">
                        <div class="col-5 h-100 px-0 mt-1 mt-lg-0">
                            <div class="h-50  pb-2">
                                <img class="aboutiamgesecthree"
                                    src="{{ asset('assets/websiteAssets/images/abouttwo.webp') }}"
                                    style="border-radius: 12px; border: 5px solid var(--website-blue-color);">
                            </div>
                            <div class="h-50 pt-2">
                                <img class="aboutiamgesecthree"
                                    src="{{ asset('assets/websiteAssets/images/abouthree.webp') }}"
                                    style="border-radius: 12px;">
                            </div>
                        </div>
                        <div class="col-5 h-100 px-0 mt-1 mt-lg-0">
                            <div class="h-50  pb-2">
                                <img class="aboutiamgesecthree"
                                    src="{{ asset('assets/websiteAssets/images/abouttwo.webp') }}"
                                    style="border-radius: 12px;">
                            </div>
                            <div class="h-50 pt-2">
                                <img class="aboutiamgesecthree"
                                    src="{{ asset('assets/websiteAssets/images/abouthree.webp') }}"
                                    style="border-radius: 12px; border: 5px solid var(--website-blue-color);">
                            </div>
                        </div>
                    </div> --}}

                    <iframe class="rounded-3" width="560" height="315"
                        src="https://www.youtube.com/embed/qcYip_RMzfI?si=g5P_vthvgF97op0z" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-md-3" style="background-color:rgba(255, 255, 255, 0);">
        <div class="container py-3 py-md-4">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="fs-2 fw-bold">
                        Our Core <span class="globaltxtcolor text-decoration-underline">Values</span>
                    </div>
                    <div class="">
                        <p class="text-wrap contactsecondhead">
                            Helping businesses to grow. Empowering businesses to shine by delivering effective marketing
                            solutions for small and medium enterprises. We take care of the marketing so that companies can
                            concentrate on their customers.
                        </p>
                    </div>
                    <div class="row gy-4 gx-4 justify-content-center">
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">Y</p>
                                    <p class="text-center fw-bold">Youthful</p>
                                    <p class="card-text text-center text-wrap">Young strategies to engage and inspire modern
                                        audiences in the digital world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">U</p>
                                    <p class="text-center fw-bold">Unique</p>
                                    <p class="card-text text-center text-wrap">Suggesting innovative and unique marketing
                                        strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">V</p>
                                    <p class="text-center fw-bold">Visionary</p>
                                    <p class="card-text text-center text-wrap">Visionary creators of digital success.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">M</p>
                                    <p class="text-center fw-bold">Motivated</p>
                                    <p class="card-text text-center text-wrap">Motivated to drive digital success.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">E</p>
                                    <p class="text-center fw-bold">Engaging</p>
                                    <p class="card-text text-center text-wrap">Engaging audiences through immersive digital
                                        experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">D</p>
                                    <p class="text-center fw-bold">Dynamic</p>
                                    <p class="card-text text-center text-wrap">Dynamically Adapting to the ever-changing
                                        digital environment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">I</p>
                                    <p class="text-center fw-bold">Innovative</p>
                                    <p class="card-text text-center text-wrap">Young strategies to engage and inspire
                                        modern
                                        audiences in the digital world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">A</p>
                                    <p class="text-center fw-bold">Ambitious</p>
                                    <p class="card-text text-center text-wrap">Ambitiously driving digital growth and
                                        exceeding expectations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- key clients --}}
    <section>
        <div class="container pt-5 justify-content-center">
            <div class="row">
                <div class="text-start fs-2 fw-bold">
                    Accelerating Growth for 500+ Leading Brands.
                </div>
                <div class="text-start fs-5">
                    <p class="text-wrap webcontent3">
                        By choosing Yuvmedia, you’re not just selecting a partner; you’re investing in a future of
                        accelerated growth, substantial cost savings, and complete peace of mind. Let’s turn your digital
                        vision into reality
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid pb-3 pb-md-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="logo-slider">
                        <div class="logos-slide">
                            <img src="{{ asset('assets/websiteAssets/images/clients/1.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/2.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/3.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/4.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/5.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/6.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/7.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/8.jpg') }}">
                        </div>
                    </div>
                    <div class="logo-slider2 mt-3">
                        <div class="logos-slide2">
                            <img src="{{ asset('assets/websiteAssets/images/clients/5.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/6.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/7.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/8.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/1.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/2.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/3.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/4.jpg') }}">
                        </div>
                    </div>
                    <div class="logo-slider3">
                        <div class="logos-slide3">
                            <img src="{{ asset('assets/websiteAssets/images/clients/1.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/2.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/3.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/4.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/5.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/6.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/7.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/8.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="py-4">
        <div class="container py-3 py-md-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start globaltxtcolor">
                        Our <span class="aboutheadingsubsecthree">Purpose</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            Our mission is to empower brands to make informed and impactful decisions in the digital world.
                            We focus on understanding the essence of your brand and connecting you with your customers in a
                            meaningful way. By deeply analyzing your audience’s needs and the unique challenges you face, we
                            craft strategies that resonate and ensure your brand’s voice stands out.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            We are more than just service providers – we are partners committed to your success. Through
                            open communication, transparency, and collaboration, we ensure that every step of the journey
                            aligns with your goals. From ideation to execution, we work side by side with you to craft
                            tailored solutions that drive real results.

                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            Our goal is to help you unlock your brand’s full potential and create lasting value, not just
                            for you, but for everyone who engages with your business.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            Your success is our purpose, and we are fully committed to making it happen.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="#" class="btn btn-primary btn-lg">Contact Us<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <iframe class="rounded-3" src="https://www.youtube.com/embed/DKfYhgaYeD8" frameborder="0"
                        width="100%" height="315"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>
        </div>
    </section>

    <!-- core-team -->
    <section class="core-team py-5">
        <div class="container">
            <div class="row">
                <div class="globaltxtcolor text-start ">
                    Core Team
                </div>
                <div class=" text-start fs-3 fw-bold">
                    Every Successful Journey Needs the Right Team
                    We Are That Team.

                </div>
                <p class=" text-start">
                    We seek our thrill from making brands and businesses in diversified domains reach their right audience.
                    With every conversion and each sale, we strive to set new standards for your business as well as
                    ourselves.
                </p>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div id="core-team" class="owl-carousel">

                        {{-- khivraj sir --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">
                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/Khivraj-sir.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="fs-6 ">Co-Founder & MD</div>
                                                            <div class="author">Mr. Khivraj Sain</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="fs-6 ">Co-Founder & MD</div>
                                                    <div class="author">Mr. Khivraj Sain</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Pinki mam --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">
                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/Khivraj-sir.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="fs-6 ">Co-founder</div>
                                                            <div class="author">Mrs. Pinki Sain</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="fs-6 ">Co-founder</div>
                                                    <div class="author">Mrs. Pinki Sain</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Kunal Basin sir --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">
                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/kunal-basin.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="fs-6 ">Business Development Manager</div>
                                                            <div class="author">Mr. Kunal Basin</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="fs-6 ">Business Development Manager</div>
                                                    <div class="author">Mr. Kunal Basin</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Kishan gopal --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">

                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/kishangopal.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="fs-6 ">Operations Manager</div>
                                                            <div class="author">Mr. Kishan Gopal</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="fs-6 ">Operations Manager</div>
                                                    <div class="author">Mr. Kishan Gopal</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Nilesh gupta --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">

                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/Nilesh-Sir.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="fs-6 ">Office Admin</div>
                                                            <div class="author">Mr. Nilesh Gupta</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="fs-6 ">Office Admin</div>
                                                    <div class="author">Mr. Nilesh Gupta</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Manohar sir --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">
                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/Manohar-sir.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="author">Mr. Manohar Singhh</div>
                                                            <div class="fs-6 ">Project Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Mr. Manohar Singh</div>
                                                    <div class="fs-6 ">Project Manager</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Rudraksh sir --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">

                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/Rudraksh.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="author">Mr. Rudraksh Singh</div>
                                                            <div class="fs-6 ">Creative Design Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Mr. Rudraksh Singh</div>
                                                    <div class="fs-6 ">Creative Design Manager</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Leera ma'am --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">
                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/Leera.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="author">Ms. Leera Ramesh</div>
                                                            <div class="fs-6 ">Project Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Ms. Leera Ramesh</div>
                                                    <div class="fs-6 ">Project Manager</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF core-team -->


    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logo-slider").appendChild(copy);

        var copy2 = document.querySelector(".logos-slide2").cloneNode(true);
        document.querySelector(".logo-slider2").appendChild(copy2);

        var copy3 = document.querySelector(".logos-slide3").cloneNode(true);
        document.querySelector(".logo-slider3").appendChild(copy3);
    </script>
@endsection
