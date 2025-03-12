@extends('website.layout.websitemain')
@section('title', 'Google My Business | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-5 position-relative" style="background-color: #ffffff">
        <div class="container py-md-5">
            <div class=" row">
                <div class="col-md-6">
                    <div class="text-start gmbheading">
                        Get Noticed Locally, <span class="text-primary fw-bold"> Grow Globally</span>
                    </div>
                    <div class="text-start">
                        <p class="text-wrap gmbsecondhead">
                            With a fully optimized Google Business Profile, you can make a powerful impact locally while
                            expanding your reach globally. By ensuring your business information is accurate, engaging, and
                            up-to-date, you increase visibility in local search results, making it easier for potential
                            customers to find you.
                        </p>
                    </div>
                    <div class="text-start">
                        <p class="text-wrap gmbsecondhead">
                            Whether it's showcasing your services, sharing updates, or collecting customer reviews, your
                            Google Business Profile is the gateway to enhancing your online presence and attracting both
                            local and international customers.
                        </p>
                        <p class="text-wrap gmbsecondhead">
                            Let’s help you get noticed locally and scale your business globally!
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg gmbbtn">Get Started for Free <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 position-relative pt-5 px-md-5">
                    <div class="ion-hero-ambient-video ">

                        <video class="ion-hero-ambient-video__container" autoplay="" playsinline="" muted="true"
                            preload="auto">
                            <source
                                src="https://www.gstatic.com/marketing-cms/ads/ed/2b/3cb6fb6d4b9fa85a58897f24c4bd/overview-en-in.mp4"
                                type="video/mp4">
                        </video>
                        <div class="ion-animation-control">
                            <button class="play hidden" aria-label="Play animation">
                                <svg role="presentation" width="28" height="28" viewBox="0 0 28 28">
                                    <path fill="#5f6368"
                                        d="M.666 14C.666 6.64 6.639.667 13.999.667S27.333 6.64 27.333 14s-5.974 13.333-13.334 13.333C6.64 27.333.666 21.36.666 14Zm18.667 0-8-6v12l8-6Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="tooltip">
                                <p class="tooltip-content">Play animation</p>
                            </div>
                            <button class="pause" aria-label="Pause animation">
                                <svg role="presentation" width="28" height="28" viewBox="0 0 28 28">
                                    <path fill="#5f6368" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 .667C6.64.667.665 6.64.665 14s5.973 13.333 13.333 13.333S27.333 21.36 27.333 14 21.359.667 13.999.667Zm-1.334 18.666H9.999V8.667h2.667v10.666Zm2.667 0h2.666V8.667h-2.666v10.666Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="tooltip">
                                <p class="tooltip-content">Pause animation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative ">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center gmbheading">
                    Take charge of your first impression

                </div>
                <div class="text-center py-2">
                    <p class="text-wrap gmbsecondhead">
                        Highlight essential info and show what makes your business unique, right on your Business Profile.
                    </p>
                </div>


                <!-- Accordion Section -->
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <div class="tab-content">
                        <div class="accordion " id="accordionExample">
                            <div class="accordion-item rounded-4 mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                        onclick="switchTab('v-pills-home-tab');">
                                        Google Maps Listing
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Show up correctly on Google Maps, adjusting your pin and location.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-4 mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                        onclick="switchTab('v-pills-profile-tab');">
                                        Phone Number & Call Tracking
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Never miss calls and track how many you get from Google.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-4 mb-3 ">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3"
                                        onclick="switchTab('v-pills-3-tab');">
                                        Correct & Special Hours
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        List correct open hours and show correct holiday hours.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-4 mb-3 ">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4"
                                        onclick="switchTab('v-pills-4-tab');">
                                        Handle Reviews Responsibly
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Know when new reviews come your way, and respond to them!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab Section -->
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3 d-none" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab"
                                aria-controls="v-pills-home" aria-selected="true"
                                onclick="switchAccordion('#collapseOne');">
                                Home
                            </button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false"
                                onclick="switchAccordion('#collapseTwo');">
                                Profile
                            </button>
                            <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3"
                                aria-selected="false" onclick="switchAccordion('#collapse3');">
                                Profile
                            </button>
                            <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4"
                                aria-selected="false" onclick="switchAccordion('#collapse4');">
                                Profile
                            </button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="w-75">
                                    <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/1f/dc/9c81c95b4cdc88db098c53855d6d/img-1.png=n-w1008-h1002-rw"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-marketing-tab">
                                <div class="w-75">
                                    <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/be/47/4b57ceb047faa66261121a9b7b02/img-2.png=n-w1008-h1002-rw"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                <div class="w-75">
                                    <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/89/75/6d58c53746078041b2d47587cea3/img-3.png=n-w1008-h1002-rw"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                aria-labelledby="v-pills-assets-tab">
                                <div class="w-75">
                                    <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/1f/dc/9c81c95b4cdc88db098c53855d6d/img-1.png=n-w1008-h1002-rw"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center gmbheading">
                    Your First Impression Matters – Make It Memorable
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap gmbsecondhead">
                        Highlight essential info and show what makes your business unique, right on your Business Profile.
                    </p>
                </div>
                <div class="col-md-6 position-relative">
                    <div class="position-sticky" style="top: calc(-259px + 50vh);">

                        <h2>Show what you offer,<br /> from menu dishes to services.</h2>
                        <p>Highlight your services, products, and key features to potential <br />customers right in the
                            search results. Keep them informed with<br /> up-to-date business hours, location, and
                            promotions, and make<br /> it easy for them to reach out or visit.

                        </p>
                        <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-primary">Get Started for Free <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="my-3">
                        Get Found, Get Chosen
                    </h2>
                    <div class="p-5 mb-3 rounded-3 bg-white shadow-sm text-center fade-in-box">
                        <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/89/e1/c9ef029444f0bdf061cf5a9becb2/img-8.png=n-w898-h922-rw"
                            alt="" class="img-fluid mb-3">
                        <h4>
                            Easy Online Presence Setup
                        </h4>
                        <p>
                            Quickly establish your online presence and get your business visible to local customers with
                            minimal effort.
                        </p>
                    </div>
                    <div class="p-5 mb-3 rounded-3 bg-white shadow-sm text-center fade-in-box">
                        <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/eb/96/2faae1e34b2f9afd8282a80ea4c4/img-9.png=n-w782-h887-rw"
                            alt="" class="img-fluid mb-3">
                        <h4>
                            Get Found on Google Maps
                        </h4>
                        <p>
                            Ensure your business shows up on Google Maps, making it easy for customers to find you when they
                            need your services.
                        </p>
                    </div>
                    <div class="p-5 mb-3 rounded-3 bg-white shadow-sm text-center fade-in-box">
                        <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/d3/10/21f17ceb4ff3849c450eafbf8cba/img-10.png=n-w934-h887-rw"
                            alt="" class="img-fluid mb-3">
                        <h4>
                            Showcase Key Business Details
                        </h4>
                        <p>
                            Highlight essential information like business hours, phone numbers, and location to make it
                            easier for customers to contact you.
                        </p>
                    </div>
                    <div class="p-5 mb-3 rounded-3 bg-white shadow-sm text-center fade-in-box">
                        <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/d3/10/21f17ceb4ff3849c450eafbf8cba/img-10.png=n-w934-h887-rw"
                            alt="" class="img-fluid mb-3">
                        <h4>
                            Build a Positive Reputation
                        </h4>
                        <p>
                            Boost your business’s reputation by gathering customer reviews and feedback, helping to
                            establish trust with potential clients.
                        </p>
                    </div>
                    <div class="p-5 mb-3 rounded-3 bg-white shadow-sm text-center fade-in-box">
                        <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/d3/10/21f17ceb4ff3849c450eafbf8cba/img-10.png=n-w934-h887-rw"
                            alt="" class="img-fluid mb-3">
                        <h4>
                            Drive Traffic with Expert Services
                        </h4>
                        <p>
                            Increase website traffic by optimizing your Google Business Profile, ensuring more eyes on your
                            offerings and more conversions.
                        </p>
                    </div>
                    <div class="p-5 mb-3 rounded-3 bg-white shadow-sm text-center fade-in-box">
                        <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/d3/10/21f17ceb4ff3849c450eafbf8cba/img-10.png=n-w934-h887-rw"
                            alt="" class="img-fluid mb-3">
                        <h4>
                            Track and Improve Performance
                        </h4>
                        <p>
                            Utilize analytics to monitor customer interactions, track performance, and adjust strategies to
                            ensure continuous growth.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container py-2  py-md-5 justify-content-center">
            <div id="gbpslider" class="owl-carousel owl-theme">
                <div class="item p-2">
                    <div class="row justify-content-center p-3 p-md-5 shadow-sm rounded-4 bg-white">
                        <div class="col-md-6">
                            <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/a0/79/b7ef86af4938a239380d4e06cedc/img-12.png=c-s2004-rw"
                                alt="service bg" class="img-fluid rounded-4">
                        </div>
                        <div class="col-md-6 p-2 p-md-5 d-flex flex-column justify-content-center">
                            <div class=" fs-5 fw-bold">
                                “With Google, even small businesses like us can think big.”
                            </div>
                            <div>Krishne Tassels-Bengaluru, Karnataka</div>
                        </div>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="row justify-content-center p-3 p-md-5 shadow-sm rounded-4 bg-white">
                        <div class="col-md-6">
                            <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/a1/ba/a9f421644c22bba7dda759cfc884/img-13.png=c-s2004-rw"
                                alt="service bg" class="img-fluid rounded-4">
                        </div>
                        <div class="col-md-6 p-2 p-md-5 d-flex flex-column justify-content-center">
                            <div class=" fs-5 fw-bold">
                                “Our top priority was to spread our visibility to the new people
                                that are coming in to the city. We did this with Google My
                                Business.”
                            </div>
                            <div>Ram Asrey Sweets-Lucknow, Uttar Pradesh</div>
                        </div>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="row justify-content-center p-3 p-md-5 shadow-sm rounded-4 bg-white">
                        <div class="col-md-6">
                            <img src="https://www.gstatic.com/marketing-cms/assets/images/ads/16/4a/8b57944e42e3bbfa44ff2702cc99/img-14.png=c-s2004-rw"
                                alt="service bg" class="img-fluid rounded-4">
                        </div>
                        <div class="col-md-6 p-2 p-md-5 d-flex flex-column justify-content-center">
                            <div class=" fs-5 fw-bold">
                                “Since we created our online presence with Google, I have
                                provided work for 500 artisans. We offer them much-needed
                                revenue and this allows their craft to survive. Google has
                                literally made the lives of so many people here.”
                            </div>
                            <div>Bharath Arts and Crafts-Channapatna, Karnataka</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="container py-5">
            <div class=" row">
                <div class="text-center performanceheading">
                    Google Business Profile <span class="performanceheadingsub">Portfolio</span>
                </div>

                <div class="gbp-slider">
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Ajmer Electronics.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Ajmer Electronics
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Ardra Rubber.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Ardra Rubber
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Arya Neuro Hospital.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Arya Neuro Hospital
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/AS Digital Service.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                AS Digital Service
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Ashritha Innovations.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Ashritha Innovations
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Baba Hairdresser.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Baba Hairdresser
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Comeato India.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Comeato India
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Cooling Services.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Cooling Services
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Direct Astrological Solution.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Direct Astrological Solution
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Dodos Cafe.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Dodo's Cafe
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Easy Go Cabs.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Easy Go Cabs
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Guru AC Fitting & Repairing Center .jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Guru AC Fitting & Repairing Center 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Hi King Restraurant.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Hi King Restraurant
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Home Appliances And Repair Shop.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Home Appliances And Repair Shop
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/JNJ Motors.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                JNJ Motors
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Kanak beauty saloon.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Kanak beauty saloon
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Kiara Tour and Travels.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Kiara Tour and Travels
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/King Insurance Solution.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                King Insurance Solution
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/KPHB Wine Mart.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                KPHB Wine Mart
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Lokesh Computer & CCTV.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Lokesh Computer & CCTV
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Mad About Food.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Mad About Food
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Maths Planet.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Maths Planet
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Mithilesh Tanan Photography.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Mithilesh Tanan Photography
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Money Tree Solutions.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Money Tree Solutions
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Nakoda Events.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Nakoda Events
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Outbloom Clinic.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Outbloom Clinic
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Palm Paradize.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Palm Paradize
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Parihar hospital and Fertility Center.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Parihar hospital and Fertility Center
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Priyanka Gift and Cosmetic Shop.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Priyanka Gift and Cosmetic Shop
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Realnet Technology.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Realnet Technology
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/RK Hospital.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                RK Hospital
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Royal Packer & Mover.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Royal Packer & Mover
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Shree Balaji Ramapeer Cargo.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Shree Balaji Ramapeer Cargo
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Sikhwal Industry.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Sikhwal Industry
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Silli Baby.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Silli Baby
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Simran Makeover.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Simran Makeover
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Skills Nation Trading Institute.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Skills Nation Trading Institute
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Smile Ajmer Dental Clinic.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Smile Ajmer Dental Clinic
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Solanki Freezco.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Solanki Freezco
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Taaruq Electronics.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Taaruq Electronics
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Thanvik Autocare.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Thanvik Autocare
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/The Gift Trove.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                The Gift Trove
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Unani & Ayurvedic Clinic.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Unani & Ayurvedic Clinic
                            </div>
                        </div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Vinayakam Beauty Parlour.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Vinayakam Beauty Parlour
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="border shadow-sm rounded-5 m-3 pb-2 bg-dark gbp-cards">
                            <img class="img-fluid p-3 rounded-5 "
                                src="{{ asset('assets/websiteAssets/images/services/gpb/Zee Huzoor.jpg') }}"
                                alt="">
                            <div class="text-center fw-bold text-white">
                                Zee Huzoor
                            </div>
                        </div>
                    </div>

                </div>


                <div class="d-flex justify-content-center flex-wrap">
                    <div class="me-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg performancebtn">Contact Us <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative bannerbg">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center gmbheading">
                    What’s In It <span class="fw-bold text-primary"> For You</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap gmbsecondhead">
                        It might take up significant time to manage a GMB profile; let us do it for you. Your firm will
                        expand without any hassles if you work with us.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/online-presence.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <h5>Current GBP Auditing</h5>
                            <p class="card-text">
                                We conduct a comprehensive audit of your Google Business Profile to ensure it's optimized
                                for maximum visibility and performance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/google-maps.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <h5>Initial Ranking Reporting</h5>
                            <p class="card-text">
                                Get a detailed report on where your business stands in local search rankings, giving you
                                insights to plan your next steps.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/verified.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <h5>Geogrid Ranking and Reporting</h5>
                            <p class="card-text">
                                We analyze your business's ranking within specific geographic regions to identify key areas
                                for local growth.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/customer-satisfaction.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <h5>Product & Service Optimization</h5>
                            <p class="card-text">
                                We help optimize the products and services listed on your GBP to better align with what your
                                customers are searching for.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/performance-boost.png') }}"
                                alt="service bg" class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <h5>Ask A Question & Reviews Updations</h5>
                            <p class="card-text">
                                We manage and update the "Ask a Question" section and customer reviews to enhance engagement
                                and credibility.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 p-3 card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/monitoring.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <h5>Images & Video Uploading</h5>
                            <p class="card-text">
                                We ensure your GBP profile includes up-to-date images and videos that showcase your business
                                in the best light, attracting more attention.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center py-2 mt-3">
                <p class="text-wrap fw-bold bg-success-subtle rounded-4 p-3">
                    Let’s Build Your Business’s Best First Impression – Reach out today!
                </p>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.querySelector('.ion-hero-ambient-video__container');
            const playButton = document.querySelector('.ion-animation-control .play');
            const pauseButton = document.querySelector('.ion-animation-control .pause');

            playButton.addEventListener('click', function() {
                video.play();
                playButton.classList.add('hidden');
                pauseButton.classList.remove('hidden');
            });

            pauseButton.addEventListener('click', function() {
                video.pause();
                playButton.classList.remove('hidden');
                pauseButton.classList.add('hidden');
            });
        });
    </script>

    <script>
        function switchTab(tabId) {
            // Switch to the corresponding tab
            document.getElementById(tabId).click();
        }

        function switchAccordion(accordionId) {
            // Collapse all other accordions first
            const allAccordions = document.querySelectorAll('.accordion-collapse');
            allAccordions.forEach((accordion) => {
                if (accordion.id !== accordionId.replace('#', '')) {
                    accordion.classList.remove('show');
                }
            });

            // Open the target accordion
            const targetAccordion = document.querySelector(accordionId);
            if (targetAccordion) {
                targetAccordion.classList.add('show');
            }
        }
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fadeInBoxes = document.querySelectorAll('.fade-in-box');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            fadeInBoxes.forEach(box => {
                observer.observe(box);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#gbpslider').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000, // Adjust timing if needed
                autoplayHoverPause: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>

@endsection
