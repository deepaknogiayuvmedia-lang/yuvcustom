@extends('website.layout.websitemain')
@section('title', 'Email Marketing | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-5 position-relative">
        <div class="container pt-5">
            <div class=" row">
                <div class="col-md-12">
                    <div class="text-center globaltxtcolor fs-1">
                        Reach the Right Inbox at the Right Time!
                        <br />
                        <span id="typewriter" data-array="" class="fw-bold fs-1"></span>
                        <span class="cursor">|</span>
                    </div>
                    <div class="text-center py-2">
                        <p class="text-wrap ">
                            Grow Your Customer Base with the Leading Email Marketing & Automation Platform—Designed to Boost
                            Engagement and Sales.
                        </p>
                    </div>

                    <div class="d-flex justify-content-center flex-wrap ">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg">Get Started for Free <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 py-3">
                    <img class="seoimage "
                        src="{{ asset('assets/websiteAssets/images/services/sendx-home-img-isometric-2.webp') }}"
                        alt="seo">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <div class="text-start fs-2 fw-bold">
                        Drive Sales. Build Relationships. Keep Customers Engaged.
                    </div>
                    <div class="text-start fs-6 fw-bold mt-3">
                        Email Marketing That Works for Your Business
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Boost sales, connect with your audience, and turn one-time visitors into loyal customers. Our
                            email marketing strategies use smart automation, personalized campaigns, and data-driven
                            insights to deliver the right message at the right time. We help businesses grow by turning
                            every email into an opportunity to engage, convert, and retain customers.
                        </p>
                    </div>
                    <div class="text-start fs-6 fw-bold">
                        Let’s Grow Your Business – Book a Call Today!
                    </div>
                </div>

                <div class="col-md-6">
                    <img class="seoimage "
                        src="{{ asset('assets/websiteAssets/images/services/Personalized-content-at-scale.webp') }}"
                        alt="seo">
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 position-relative bg-black ">

        <div class="container">
            <div class="row align-items-center mt-5">

                <div class="col-md-12 text-white">
                    <div class="text-center fs-2 fw-bold">
                        Supercharge Your Campaigns
                    </div>
                    <div class="text-center py-2">
                        <p class="text-wrap seosecondhead">
                            1000’s of beautiful templates using out intuitive email editor. Yuvmedia provides interactive
                            emails that help boost your conversion with smart & geo optimized sends. Resend to unopeners
                            with our 1-click resend functionality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio section">
            <div class="container">

                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".corporate">Corporate</li>
                        <li data-filter=".personal">Personal</li>
                        <li data-filter=".agency">Agency</li>
                        <li data-filter=".portal">Portal</li>
                    </ul>
                </div>

                <div class="filters-content">
                    <div class="row grid">
                        <div class="col-sm-4 all corporate">
                            <div class="item">
                                <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-1.png?width=767&name=Email-Temp-1.png"
                                    alt="Work 1" class="img-fluid">
                                {{-- <div class="p-inner">
                                    <h5>Enlarge</h5>
                                    <div class="cat">Enlarge</div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-sm-4 all personal">
                            <div class="item">
                                <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-2.png?width=562&name=Email-Temp-2.png"
                                    alt="Work 1" class="img-fluid">
                                {{-- <div class="p-inner">
                                    <h5>Work 1</h5>
                                    <div class="cat">Personal</div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-sm-4 all agency">
                            <div class="item">
                                <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-3.png?width=562&name=Email-Temp-3.png"
                                    alt="Work 1" class="img-fluid">
                                {{-- <div class="p-inner">
                                    <h5>Work 1</h5>
                                    <div class="cat">Agency</div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-sm-4 all portal">
                            <div class="item">
                                <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-4.png?width=564&name=Email-Temp-4.png"
                                    alt="Work 1" class="img-fluid">
                                {{-- <div class="p-inner">
                                    <h5>Work 1</h5>
                                    <div class="cat">Portal</div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-sm-4 all portal">
                            <div class="item">
                                <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-5.png?width=562&name=Email-Temp-5.png"
                                    alt="Work 1" class="img-fluid">
                                {{-- <div class="p-inner">
                                    <h5>Work 1</h5>
                                    <div class="cat">Portal</div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-sm-4 all portal">
                            <div class="item">
                                <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-6.png?width=767&name=Email-Temp-6.png"
                                    alt="Work 1" class="img-fluid">
                                {{-- <div class="p-inner">
                                    <h5>Work 1</h5>
                                    <div class="cat">Portal</div>
                                </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/email/emailss.png') }}" alt="seo">
                </div>
                <div class="col-md-6">
                    <div class="text-start fs-2 fw-bold">
                        Fuel Your Sales with Strategic Email Campaigns
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Utilize Yuvmedia's email marketing technologies to create campaigns that convert well with ease.
                        </p>
                        <p class="text-wrap seosecondhead">
                        <ul>
                            <li>With our user-friendly editor, select from thousands of exquisitely designed templates.</li>
                            <li>Make engaging, interactive emails for your readers.</li>
                            <li>Send geo-optimized messages to improve targeting</li>
                            <li>Easily resend to unopened emails with just one click.</li>
                        </ul>
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <div class="text-start fs-2 fw-bold">
                        Automate Your Way to Success
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Design customer journeys that turn leads into loyal fans.
                        </p>
                        <p class="text-wrap seosecondhead">
                        <ul>
                            <li>Build complex workflows with our visual drag-and-drop editor</li>
                            <li>Leverage pre-built templates for common use cases</li>
                            <li>Personalize based on subscriber behavior and data</li>
                        </ul>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/email/email-marketing_1.webp') }}" alt="seo">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container">

            <div class="row">
                <div>
                    <div class=" service-space service-space--small"></div>
                    <div class="service-cards">

                        {{-- Emails --}}
                        <div class="service-card" data-index="0">
                            <div class="service-card__inner">
                                <div class="service-card__content bgBox">
                                    <div class="row position-relative slideBox ">
                                        <div class="col-md-6">
                                            <h1 class="service-card__title">Craft Emails That Convert</h1>
                                            <p class="text-wrap seosecondhead">
                                                Enhance engagement and ensure your emails stand out in crowded inboxes.
                                            <ul>
                                                <li>Get access to more than 1,000 expertly designed templates</li>
                                                <li>Use sophisticated segmentation to personalize emails.</li>
                                                <li>Use heatmaps to monitor the efficacy of CTAs.</li>
                                                <li>Include interactive features such as countdown clocks.</li>
                                                <li>Use Geo-Send and Smart Send Target with Precision to maximize delivery
                                                    times</li>
                                                <li>At the right time, convey the right message to the right audience.
                                                </li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="col-md-6  ">
                                            <div class="">
                                                <img class="img-fluid rounded-3"
                                                    src="{{ asset('assets/websiteAssets/images/services/email/cratemail.png') }}" alt="seo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Laser Precision --}}
                        <div class="service-card" data-index="1">
                            <div class="service-card__inner">
                                <div class="service-card__content bgBox">
                                    <div class="row position-relative slideBox ">
                                        <div class="col-md-6">
                                            <h1 class="service-card__title">Target with Precision</h1>
                                            <p class="text-wrap seosecondhead">
                                                Deliver the right message to the right person, every time.
                                            <ul>
                                                <li>Divide up your audience based on demographics and behavior.</li>
                                                <li>Use dynamic content to create individualized encounters.</li>
                                                <li>Automate bulk personalization with intelligent templating.</li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="col-md-6  ">
                                            <div class="SlideImgBox">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/websiteAssets/images/services/email/Target.png') }}"
                                                    alt="seo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Graphic Design --}}
                        <div class="service-card" data-index="2">
                            <div class="service-card__inner">
                                <div class="service-card__content bgBox">
                                    <div class="row position-relative slideBox ">
                                        <div class="col-md-6">
                                            <h1 class="service-card__title">Maximize Your Inbox Potential</h1>
                                            <p class="text-wrap seosecondhead">
                                                Make sure that your emails end up in the inbox rather than the spam folder.
                                            <ul>
                                                <li>Maximize inbox delivery using our advanced deliverability engine.
                                                </li>
                                                <li>Use our in-house deliverability engine to get the best mailbox
                                                    placement.</li>
                                                <li>Use sophisticated spam trap and threat analysis to automatically clear
                                                    your lists.</li>
                                                <li>Use effective monitoring tools to keep your list healthy.</li>

                                            </ul>
                                            </p>
                                        </div>
                                        <div class="col-md-6  ">
                                            <div class="SlideImgBox">
                                                <img class="img-fluid w-75"
                                                    src="{{ asset('assets/websiteAssets/images/services/email/Maximizeqwert.png') }}"
                                                    alt="seo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="service-space"></div>
                </div>
            </div>
        </div>

    </section>

    <section class=" position-relative py-5">
        <div class="container justify-content-center">
            <div class="row">
                <div class=" globaltxtcolor">
                    Why Your Business Needs an Expert Email Marketing Agency?
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/erp2.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Build Customer Loyalty:
                            </div>
                            <p class="card-text text-start">
                                An email marketing agency helps you foster strong relationships with your customers,
                                ensuring they stay loyal to your brand through personalized and engaging content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/data-migration.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Expansion of Business:
                            </div>
                            <p class="card-text text-start">
                                With expert email marketing strategies, you can reach new audiences and scale your business
                                effectively, expanding your market reach and increasing your customer base.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/staff-management.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Reduction in Time & Effort:
                            </div>
                            <p class="card-text text-start">
                                By outsourcing your email marketing, you free up valuable time and resources, allowing your
                                team to focus on other important aspects of your business while experts handle your
                                campaigns.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/conversation.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Tracking of Analytics</div>
                            <p class="card-text text-start">
                                An agency provides detailed analytics on campaign performance, helping you understand open
                                rates, click rates, and conversions, so you can continuously optimize your strategies for
                                better results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/web.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Connection with Different Audiences</div>
                            <p class="card-text text-start">
                                Email marketing agencies utilize segmentation and targeted campaigns to connect with various
                                customer segments, ensuring you deliver the right message to the right audience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/system-integration.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Testing Email Campaigns</div>
                            <p class="card-text text-start">
                                Agencies conduct A/B testing and optimize email campaigns to find the best performing
                                strategies, ensuring each email reaches its highest potential and delivers the desired
                                outcome.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" position-relative py-5">
        <div class="container justify-content-center">
            <div class="row">
                <div class=" globaltxtcolor">
                    What We Bring To The Table?
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/erp2.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Email Strategy Development</div>
                            <p class="card-text text-start">
                                We craft customized email strategies designed to meet your business goals, driving
                                conversions and building strong customer relationships.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/data-migration.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Email List Building</div>
                            <p class="card-text text-start">
                                Our team helps you grow a quality email list by using proven methods to attract and engage
                                your target audience, ensuring higher engagement rates.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/staff-management.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Email Design and Content Creation</div>
                            <p class="card-text text-start">
                                We create visually appealing and engaging email designs, paired with compelling content that
                                speaks directly to your subscribers, encouraging action.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/conversation.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Email Automation
                            </div>
                            <p class="card-text text-start">
                                We set up automated email campaigns that nurture leads, send timely messages, and engage
                                customers, saving you time while boosting results.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/web.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Email Campaign Management</div>
                            <p class="card-text text-start">
                                We handle every aspect of your email campaigns, from setup and scheduling to tracking and
                                optimization, ensuring peak performance and maximum ROI.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/system-integration.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Email Analytics and Reporting
                            </div>
                            <p class="card-text text-start">
                                We provide in-depth analytics and detailed reports on campaign performance, allowing you to
                                measure success and refine strategies for even better results.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center py-2 bg-success-subtle rounded-4 mt-3">
                    <p class="text-wrap ">
                        Join millions of satisfied users who trust us with their email marketing. You can count on us too!

                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_bg">
        <div class="container-fluid py-3 " style="background-color: #032A3E">
            <div class="container ">

                <div class="ms-lg-5 ps-lg-5 ms-md-2 ps-md-2 d-none">
                    <h1 class="text-white fw-bold">Contact us</h1>
                </div>
            </div>
        </div>
        <div class="container py-5 mb-md-5">

            <div class="row justify-content-center">
                {{-- <div class="col-lg-6 col-md-4" style="z-index: 10">
                    <div class="d-flex justify-content-start align-items-center h-100">

                        <p class="contact-msg fw-bold">
                            Let’s Talk
                        </p>
                    </div>
                </div> --}}
                <div class="col-lg-8 col-md-8 py-5">
                    <div class="formcustomcard  rounded-3 py-5 bg-white position-relative" style="z-index: 10">
                        <div class="text-center">
                            <h2 class=" fw-bold mb-4 fs-3 ">Grow Your Business, One Email at a Time.</h2>
                            <p>
                                Let’s make sure they find YOU first. Optimize your Google Business Profile now!
                            </p>
                            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                                <a href="tel:+918824269821" class="btn btn-danger btn-lg"> <i
                                        class="bi bi-telephone"></i> Book A Call</a>
                                <a href="https://wa.me/918824269821" class="btn btn-success btn-lg"><i
                                        class="bi bi-whatsapp"></i> Chat on WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script>
        // The typewriter element
        var typeWriterElement = document.getElementById('typewriter');

        // The TextArray: 
        var textArray = ["Engages Users", "Boosts Revenue", "Converts Leads|", "Hits Inboxes", "Delivers ROI"];

        // You can also do this by transfering it through a data-attribute
        // var textArray = typeWriterElement.getAttribute('data-array');


        // function to generate the backspace effect 
        function delWriter(text, i, cb) {
            if (i >= 0) {
                typeWriterElement.innerHTML = text.substring(0, i--);
                // generate a random Number to emulate backspace hitting.
                var rndBack = 10 + Math.random() * 100;
                setTimeout(function() {
                    delWriter(text, i, cb);
                }, rndBack);
            } else if (typeof cb == 'function') {
                setTimeout(cb, 1000);
            }
        };

        // function to generate the keyhitting effect
        function typeWriter(text, i, cb) {
            if (i < text.length + 1) {
                typeWriterElement.innerHTML = text.substring(0, i++);
                // generate a random Number to emulate Typing on the Keyboard.
                var rndTyping = 250 - Math.random() * 100;
                setTimeout(function() {
                    typeWriter(text, i++, cb)
                }, rndTyping);
            } else if (i === text.length + 1) {
                setTimeout(function() {
                    delWriter(text, i, cb)
                }, 1000);
            }
        };

        // the main writer function
        function StartWriter(i) {
            if (typeof textArray[i] == "undefined") {
                setTimeout(function() {
                    StartWriter(0)
                }, 1000);
            } else if (i < textArray[i].length + 1) {
                typeWriter(textArray[i], 0, function() {
                    StartWriter(i + 1);
                });
            }
        };
        // wait one second then start the typewriter
        setTimeout(function() {
            StartWriter(0);
        }, 1000);
    </script>

    <script>
        $('.filters ul li').click(function() {
            $('.filters ul li').removeClass('active');
            $(this).addClass('active');

            var data = $(this).attr('data-filter');
            $grid.isotope({
                filter: data
            })
        });

        var $grid = $(".grid").isotope({
            itemSelector: ".all",
            percentPosition: true,
            masonry: {
                columnWidth: ".all"
            }
        })
    </script>



    <!-- stack effect  -->
    <script src="https://unpkg.com/aatjs/dist/aat.min.js"></script>
    <script>
        const {
            valueAtPercentage
        } = aat
        const ScrollObserver = aat.ScrollObserver
        const cardsContainer = document.querySelector('.service-cards')
        const cards = document.querySelectorAll('.service-card')
        cardsContainer.style.setProperty('--cards-count', cards.length)
        cardsContainer.style.setProperty(
            '--card-height',
            `${cards[0].clientHeight}px`
        )
        Array.from(cards).forEach((card, index) => {
            const offsetTop = 20 + index * 20
            card.style.paddingTop = `${offsetTop}px`
            if (index === cards.length - 1) {
                return
            }
            const toScale = 1 - (cards.length - 1 - index) * 0.1
            const nextCard = cards[index + 1]
            const cardInner = card.querySelector('.service-card__inner')
            ScrollObserver.Element(nextCard, {
                offsetTop,
                offsetBottom: window.innerHeight - card.clientHeight
            }).onScroll(({
                percentageY
            }) => {
                cardInner.style.scale = valueAtPercentage({
                    from: 1,
                    to: toScale,
                    percentage: percentageY
                })
                cardInner.style.filter = `brightness(${valueAtPercentage({
                from: 1,
                to: 0.6,
                percentage: percentageY
            })})`
            })
        })
    </script>
@endsection
