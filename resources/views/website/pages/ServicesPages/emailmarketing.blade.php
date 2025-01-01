@extends('website.layout.websitemain')
@section('title', 'Email Marketing | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-5 position-relative">
        <div class="container pt-5">
            <div class=" row">
                <div class="col-md-12">
                    <div class="text-center globaltxtcolor fs-1">
                        Email Marketing That <br />
                        <span id="typewriter" data-array="" class="fw-bold fs-1"></span>
                        <span class="cursor">|</span>
                    </div>
                    <div class="text-center py-2">
                        <p class="text-wrap ">
                            Email marketing with automation workflows. Grow your audience using smart popups, forms &
                            landing pages, and interactive emails thanks to our proprietary deliverability engine.
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
                        Break Free from Email Provider Frustrations


                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Is your current provider holding you back?
                        </p>
                        <p class="text-wrap seosecondhead">
                        <ul>
                            <li>Unresponsive support leaves you stranded</li>
                            <li>Arbitrary account bans disrupt your business</li>
                            <li>Emails languish in spam, wasting your efforts</li>
                        </ul>
                        </p>
                        <p class="text-wrap seosecondhead">
                            Your business deserves better.
                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="#" class="btn btn-lg  seobbtn">Contact Us <i class="bi bi-arrow-right"></i></a>
                        </div>
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
            <div class="row align-items-center">

                <div class="col-md-12 text-white">
                    <div class="text-start fs-2 fw-bold">
                        Supercharge Your Campaigns
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            1000’s of beautiful templates using out intuitive email editor. Yuvmedia provides interactive
                            emails that help boost your conversion with smart & geo optimized sends. Resend to unopeners
                            with our 1-click resend functionality.
                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap ">
                        <div class="me-3">
                            <a href="#" class="btn btn-lg btn-info">Contact Us <i class="bi bi-arrow-right"></i></a>
                        </div>
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

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="#" class="btn btn-lg  seobbtn">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <img class="seoimage " src="https://www.sendx.io/hubfs/automate-your-success.png" alt="seo">
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
                                                Stand out in crowded inboxes and drive engagement.
                                            <ul>
                                                <li>Choose from 1000+ professionally designed templates</li>
                                                <li>Advanced personalization and segmentation</li>
                                                <li>Heatmap report to know which CTAs are working</li>
                                                <li>Add interactive elements like countdown timers</li>
                                                <li>Optimize send times with Geo-send and Smart Send</li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="col-md-6  ">
                                            <div class="SlieImgBox" style="margin-top: -400px;">
                                                <img class="img-fluid"
                                                    src="https://www.sendx.io/hubfs/Craft-Emails-img.webp" alt="seo">
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
                                            <h1 class="service-card__title">Target with Laser Precision</h1>
                                            <p class="text-wrap seosecondhead">
                                                Deliver the right message to the right person, every time.
                                            <ul>
                                                <li>Create segments based on behavior and demographics</li>
                                                <li>Utilize smart templating for mass personalization</li>
                                                <li>Implement dynamic content for tailored experiences</li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="col-md-6  ">
                                            <div class="SlideImgBox">
                                                <img class="img-fluid"
                                                    src="https://www.sendx.io/hubfs/Laser-Precision-img.svg"
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
                                                Reach more subscribers and avoid the dreaded spam folder.
                                            <ul>
                                                <li>Leverage our proprietary deliverability engine</li>
                                                <li>Leverage our proprietary deliverability engine to maximize inboxing</li>
                                                <li>Automatic list cleaning and spam trap analysis</li>
                                                <li>Maintain a clean list with advanced threat analysis</li>

                                            </ul>
                                            </p>
                                        </div>
                                        <div class="col-md-6  ">
                                            <div class="SlideImgBox">
                                                <img class="img-fluid"
                                                    src="https://www.sendx.io/hubfs/inbox-potential-img.svg"
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
