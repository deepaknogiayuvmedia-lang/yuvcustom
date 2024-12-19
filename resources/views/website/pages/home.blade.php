@extends('website.layout.websitemain')
@section('title', 'Home | ' . config('app.name'))
@section('content')

    <!--Hero Section Starts-->
    <canvas id="gradient-canvas"></canvas>
    <section class="hero-section">

        <div class="container">
            <div class="row py-md-5 pt-0">
                <div class="hero-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="row ">
                            <div class="col-md-7 hero-content">
                                <h1 class="heroheading fw-bolder globaltxtcolor">The all in one finance platform</h1>
                                <h3 class="herosubheading fw-bolder">you’ve been looking for</h3>
                                <div class="stats-section mt-3 mb-3">
                                    <div class="row ">
                                        <div class="col-md-12 stat-item">
                                            <div class="text-start">
                                                <p>4+ Years In Business | 6000+ Completed Projects | 500+ Satisfied
                                                    Corporates
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start flex-md-row flex-column">
                                    <div class="mb-3 text-center">
                                        <a href="#" class="btn btn-primary btn-lg">Work With Yuvmedia <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                    <div class="mx-5 mb-3 text-center">
                                        <a class="btn btn-outline-primary btn-lg" href="#">Be Our Business
                                            Partner!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 hero-image">
                                <img src="{{ asset('assets/websiteAssets/images/heroimage.png') }}" alt="Hero Image">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row ">
                            <div class="col-md-7 hero-content">
                                <h1 class="globaltxtcolor fw-bolder">The all in one finance platform</h1>
                                <h3 class="herosubheading fw-bolder">you’ve been looking for</h3>
                                <div class="stats-section mt-3 mb-3">
                                    <div class="row ">
                                        <div class="col-md-12 stat-item">
                                            <div class="text-start">
                                                <p>4+ Years In Business | 6000+ Completed Projects | 500+ Satisfied
                                                    Corporates
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start flex-md-row flex-column">
                                    <div class="mb-3 text-center ">
                                        <a href="#" class="btn btn-primary btn-lg">Work With Yuvmedia <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                    <div class="mx-5 mb-3 text-center">
                                        <a class="btn btn-outline-primary btn-lg" href="#">Be Our Business
                                            Partner!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 hero-image">
                                <img src="{{ asset('assets/websiteAssets/images/heroimage.png') }}" alt="Hero Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row hereBox bg-white py-3 mt-3 rounded-4 align-items-center border-primary border-start border-2">
                <div class=" d-flex align-items-center heretext">
                    <img src="{{ asset('assets/websiteAssets/images/navigatoinIcon.png') }}" alt="navigatoinIcon"
                        class="me-2">
                    I'm here to
                </div>
                <div class="col-md-7 col">
                    <div class="d-flex justify-content-start action-btn">
                        <a href="#">
                            Design
                        </a>
                        <a href="#">
                            Social Media Marketing


                        </a>
                        <a href="#">
                            Website Development

                        </a>
                        <a href="#">
                            Performance Marketing

                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-end hideInMobile">
                    <a href="#" class="text-secondary text-decoration-none">
                        //Find the best service for your business
                    </a>
                </div>

            </div>
        </div>


        <div class="container">
            <div class="row col-lg-12">

            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <article class="wrapper">
                            <div class="marquee">
                                <div class="marquee__group">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/1.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/2.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/3.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/4.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/5.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/6.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/7.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/8.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/1.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/2.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/3.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/4.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/5.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/6.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/7.jpg') }}" alt="img1">
                                    <img class="rounded-2 me-3"
                                        src="{{ asset('assets/websiteAssets/images/clients/8.jpg') }}" alt="img1">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero Section Ends-->

    {{-- services --}}
    <section>
        <div class="container py-5">
            <div class="row">
                <h2 class="globaltxtcolor text-start">
                    Our Services
                </h2>
                <div class="text-start">
                    <p>
                        We, at YUVMEDIA Digital, understand the intent, will, time, efforts, and dreams that are invested in
                        starting and operating a business. Hence we leave no stone unturned in shaping it the way you aspire
                        and admire.
                        Our team of experts is always keen on formulating only the right solutions for your business’
                        everyday digital needs.
                    </p>
                </div>
            </div>
            <div class="row">
                <div>
                    <div class=" service-space service-space--small"></div>
                    <div class="service-cards">

                        {{-- Digital marketing --}}
                        <div class="service-card" data-index="0">
                            <div class="service-card__inner">
                                <div class="service-card__content bluePurpelGradient">
                                    <h1 class="service-card__title">Digital Marketing</h1>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-underline my-3" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="performance-tab" data-bs-toggle="tab"
                                                data-bs-target="#performance-tab-pane" type="button" role="tab"
                                                aria-controls="performance-tab-pane" aria-selected="true">Performance
                                                Marketing</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="seo-tab" data-bs-toggle="tab"
                                                data-bs-target="#seo-tab-pane" type="button" role="tab"
                                                aria-controls="seo-tab-pane" aria-selected="false">SEO</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="social-tab" data-bs-toggle="tab"
                                                data-bs-target="#social-tab-pane" type="button" role="tab"
                                                aria-controls="social-tab-pane" aria-selected="false">Social
                                                Media</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="online-tab" data-bs-toggle="tab"
                                                data-bs-target="#online-tab-pane" type="button" role="tab"
                                                aria-controls="online-tab-pane" aria-selected="false">Online
                                                Marketing</button>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        {{-- performance marketing --}}
                                        <div class="tab-pane active" id="performance-tab-pane" role="tabpanel"
                                            aria-labelledby="performance-tab" tabindex="0">
                                            <div class="d-flex my-3 justify-content-around pmarketing">
                                                <div class="card  " style=" ">
                                                    <img src="https://i1.lbrd.ru/fileentry/get/597/15/b0/725bb2f14f35073d1c31d7270d74.png"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Google Ads</h5>
                                                        <p class="card-text">Drive traffic and conversions with targeted,
                                                            high-performing Google Ads campaigns.</p>
                                                    </div>
                                                </div>
                                                <div class="card  " style=" ">
                                                    <img src="https://d1baueb6wfhxkz.cloudfront.net/5fd054a9a5dfae0128d29b2f/large/1611731070028966.jpeg"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Facebook Ads</h5>
                                                        <p class="card-text">Engage audiences and increase sales with
                                                            data-driven, targeted Facebook Ads campaigns.</p>
                                                    </div>
                                                </div>
                                                <div class="card  " style=" ">
                                                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEilvS6wb_SW5BlgqY_gRpJfbx9X6iKJTMnu6HIjCGpIyYNZEa-ZcwA-MSNnMGKNgOHINnfhhaiBLRj9WpgzO-qusEcz73cY9nzmQCOzq4xC6xd1hOwHjCAedMq4b8CdWYFYDxqvqjlpqP-vPb-4qSa7_ThhjyFMH4JnpxoteMUwKaqh8gJNgyqvq5-tE8ca/s1600/images%20%282%29.png"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">MGID Ads</h5>
                                                        <p class="card-text">Boost website traffic and revenue with
                                                            effective, performance-driven MGID Ads campaigns.</p>
                                                    </div>
                                                </div>
                                                <div class="card  " style=" ">
                                                    <img src="https://hyperhost.ua/info/storage/uploads/2021/01/shopping%20online.png"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Marketplace Ads</h5>
                                                        <p class="card-text">Increase product visibility and sales with
                                                            optimized Marketplace Ads for top platforms.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- seo --}}
                                        <div class="tab-pane" id="seo-tab-pane" role="tabpanel"
                                            aria-labelledby="seo-tab" tabindex="0">
                                            <div class="d-flex my-3 justify-content-start pmarketing">
                                                <div class="card me-4" style=" ">
                                                    <img src="https://st4.depositphotos.com/1032115/27159/v/450/depositphotos_271594782-stock-illustration-flat-color-modern-isometric-illustration.jpg"
                                                        class="card-img-top" alt="SEO">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Search Engine Optimization</h5>
                                                        <p class="card-text">Boost search rankings, drive organic traffic,
                                                            grow online visibility.</p>
                                                    </div>
                                                </div>
                                                <div class="card me-4" style=" ">
                                                    <img src="https://static.fundrazr.com/rewards/9055f40593bd48989864f39c6a701988_large.jpg?cb=1610462315287"
                                                        class="card-img-top" alt="GBP">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Google Business Profile</h5>
                                                        <p class="card-text">Optimize profiles, attract local customers,
                                                            enhance business online presence.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        {{-- social media --}}
                                        <div class="tab-pane" id="social-tab-pane" role="tabpanel"
                                            aria-labelledby="social-tab" tabindex="0">
                                            <div class="d-flex my-3 justify-content-around pmarketing">
                                                <div class="card" style=" ">
                                                    <img src="https://cdn.nextgov.com/media/img/upload/2018/03/21/032118facebookNG/open-graph.jpg"
                                                        class="card-img-top" alt="Facebook">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Facebook</h5>
                                                        <p class="card-text">Grow your business with our professional
                                                            social media services!</p>
                                                    </div>
                                                </div>
                                                <div class="card" style=" ">
                                                    <img src="https://www.menosfios.com/wp-content/uploads/2021/11/modo-noturno-no-instagram-capa.jpg"
                                                        class="card-img-top" alt="Instagram">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Instagram</h5>
                                                        <p class="card-text">Level up your brand with our expert Instagram
                                                            marketing services!</p>
                                                    </div>
                                                </div>
                                                <div class="card" style=" ">
                                                    <img src="https://thepostworkspaces.com/wp-content/uploads/2022/07/souvik-banerjee-JLj_NbvlDDo-unsplash-600x600.jpg"
                                                        class="card-img-top" alt="LinkedIn">
                                                    <div class="card-body">
                                                        <h5 class="card-title">LinkedIn</h5>
                                                        <p class="card-text">Enhance your professional presence with our
                                                            LinkedIn marketing solutions!</p>
                                                    </div>
                                                </div>
                                                <div class="card" style=" ">
                                                    <img src="https://somewhereoverthepage.wordpress.com/wp-content/uploads/2015/05/jos-in_-the_-know_-pinterest.jpg?w=980&h=980&crop=1"
                                                        class="card-img-top" alt="Pinterest">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Pinterest</h5>
                                                        <p class="card-text">Drive traffic with our creative and strategic
                                                            Pinterest marketing services!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- marketing --}}
                                        <div class="tab-pane" id="online-tab-pane" role="tabpanel"
                                            aria-labelledby="online-tab" tabindex="0">
                                            <div class="d-flex my-3 justify-content-start pmarketing">
                                                <div class="card me-4" style=" ">
                                                    <img src="https://framerusercontent.com/images/6AE8iMtu15A4FI6oK288NMx4rc.png?scale-down-to=512"
                                                        class="card-img-top" alt="Whatsapp Marketing">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Whatsapp Marketing</h5>
                                                        <p class="card-text">Engage your audience instantly with our
                                                            powerful WhatsApp marketing services!</p>
                                                    </div>
                                                </div>
                                                <div class="card me-4" style=" ">
                                                    <img src="https://www.pngplay.com/wp-content/uploads/13/Email-Marketing-Free-PNG.png"
                                                        class="card-img-top" alt="Email Marketing">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Email Marketing</h5>
                                                        <p class="card-text">Connect and convert with our result-driven
                                                            email marketing services!</p>
                                                    </div>
                                                </div>
                                                <div class="card me-4" style=" ">
                                                    <img src="https://i.pinimg.com/originals/e6/e5/31/e6e5319b47f55a0af5518f0fcd97f919.jpg"
                                                        class="card-img-top" alt="Influencer Marketing">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Influencer Marketing</h5>
                                                        <p class="card-text">Boost your brand with impactful influencer
                                                            marketing campaigns!</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Sellet Management --}}
                        <div class="service-card" data-index="1">
                            <div class="service-card__inner">
                                <div class="service-card__content greenBLueGradient">
                                    <h1 class="service-card__title">Seller Management</h1>

                                    <div class="d-flex my-3 justify-content-around pmarketing">
                                        <div class="card" style=" ">
                                            <img src="https://custom-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_9000,w_1200,f_auto,q_auto/5979657/23560_302172.jpg"
                                                class="card-img-top" alt="Amazon Seller">
                                            <div class="card-body">
                                                <h5 class="card-title">Amazon Seller</h5>
                                                <p class="card-text">Maximize your sales with our expert Amazon seller
                                                    services!</p>
                                            </div>
                                        </div>
                                        <div class="card" style=" ">
                                            <img src="https://www.thestreet.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTc0NTE5NDM0NDM2NjgzNzIx/etsy.jpg"
                                                class="card-img-top" alt="Etsy Seller">
                                            <div class="card-body">
                                                <h5 class="card-title">Etsy Seller</h5>
                                                <p class="card-text">Grow your Etsy shop with our tailored marketing
                                                    strategies!</p>
                                            </div>
                                        </div>
                                        <div class="card" style=" ">
                                            <img src="https://th-i.thgim.com/public/business/Industry/kilrnc/article24671698.ece/alternates/FREE_1200/TH13FLIPKART"
                                                class="card-img-top" alt="Flipkart Seller">
                                            <div class="card-body">
                                                <h5 class="card-title">Flipkart Seller</h5>
                                                <p class="card-text">Boost your sales on Flipkart with our expert seller
                                                    services!</p>
                                            </div>
                                        </div>
                                        <div class="card" style=" ">
                                            <img src="https://thejobcompany.in/adminware/uploads/logos/1728482558.png"
                                                class="card-img-top" alt="Meesho Seller">
                                            <div class="card-body">
                                                <h5 class="card-title">Meesho Seller</h5>
                                                <p class="card-text">Maximize your Meesho sales with our expert seller
                                                    solutions!</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Graphic Design --}}
                        <div class="service-card" data-index="2">
                            <div class="service-card__inner">
                                <div class="service-card__content orangeGreenGradient">
                                    <h1 class="service-card__title">Design Services</h1>

                                    <div class="d-flex my-3 justify-content-around pmarketing">
                                        <div class="card" style=" ">
                                            <img src="https://papik.pro/uploads/posts/2021-10/thumbs/1634672301_3-papik-pro-p-tsifrovoi-plakat-4.jpg"
                                                class="card-img-top" alt="Graphic Designing">
                                            <div class="card-body">
                                                <h5 class="card-title">Graphic Designing</h5>
                                                <p class="card-text">Transform your brand with our creative and
                                                    professional graphic design services!</p>
                                            </div>
                                        </div>
                                        <div class="card" style=" ">
                                            <img src="https://yt3.googleusercontent.com/ytc/APkrFKYvstGKw7D2Maz2TeaKIl-P3mmoMaZ_gBamx-x_=s900-c-k-c0x00ffffff-no-rj"
                                                class="card-img-top" alt="Video Production">
                                            <div class="card-body">
                                                <h5 class="card-title">Video Production</h5>
                                                <p class="card-text">Bring your vision to life with our expert video
                                                    production services!</p>
                                            </div>
                                        </div>
                                        <div class="card" style=" ">
                                            <img src="https://d2vx7hn49802k2.cloudfront.net/wp-content/uploads/2021/03/Product-Photography.jpg"
                                                class="card-img-top" alt="Product Shoot">
                                            <div class="card-body">
                                                <h5 class="card-title">Product Shoot</h5>
                                                <p class="card-text">Showcase your products in style with our professional
                                                    product shoots!</p>
                                            </div>
                                        </div>
                                        <div class="card" style=" ">
                                            <img src="https://www.feedsfloor.com/sites/default/files/styles/largenews/public/Merchandise%20Designing%20Market.jpg?itok=OH0sSqP_"
                                                class="card-img-top" alt="Brand Designing">
                                            <div class="card-body">
                                                <h5 class="card-title">Brand Designing</h5>
                                                <p class="card-text">Create a lasting impression with our expert brand
                                                    designing services!</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Development Services --}}
                        <div class="service-card" data-index="3">
                            <div class="service-card__inner">
                                <div class="service-card__content purpelYellowGradient">
                                    <h1 class="service-card__title">Development Services</h1>
                                    <div class="d-flex my-3 justify-content-around pmarketing">
                                        <div class="card" style=" ">
                                            <img src="https://www.web-rasswet.ru/img/razrabotka-saitow.jpg"
                                                class="card-img-top" alt="Web Development">
                                            <div class="card-body">
                                                <h5 class="card-title">Web Development</h5>
                                                <p class="card-text">Build a strong online presence with our expert web
                                                    development services!</p>
                                            </div>
                                        </div>
                                        <div class="card" style=" ">
                                            <img src="https://cpimg.tistatic.com/05392545/b/5/App-Development-Service.png"
                                                class="card-img-top" alt="App Development">
                                            <div class="card-body">
                                                <h5 class="card-title">App Development</h5>
                                                <p class="card-text">Transform your ideas into reality with our expert app
                                                    development services!</p>
                                            </div>
                                        </div>
                                        <div class="card" style=" ">
                                            <img src="https://papik.pro/uploads/posts/2022-01/thumbs/1642369415_59-papik-pro-p-sistema-klipart-64.png"
                                                class="card-img-top" alt="Software Integrations">
                                            <div class="card-body">
                                                <h5 class="card-title">Software Integrations</h5>
                                                <p class="card-text">Streamline your business with seamless software
                                                    integration solutions!</p>
                                            </div>
                                        </div>
                                        <div class="card" style=" ">
                                            <img src="https://russia-dropshipping.ru/800/600/http/themanufacturer-cdn-1.s3.eu-west-2.amazonaws.com/wp-content/uploads/2016/04/14121345/CRM-Infographic-K3.jpg"
                                                class="card-img-top" alt="CRM (Odoo, Salesforce)">
                                            <div class="card-body">
                                                <h5 class="card-title">CRM (Odoo, Salesforce)</h5>
                                                <p class="card-text">Optimize your customer relationships with our expert
                                                    CRM solutions (Odoo, Salesforce)!</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                    {{-- <div class="service-space"></div> --}}
                </div>
            </div>
        </div>
    </section>



   {{-- Achieving Goals --}}
   <section class="bannerbg">
    <div class="container pt-5">
        <div class="row">
            <div class="globaltxtcolor  text-start ">
                Achieving Goals
            </div>
            <div class="text-start">
                <p>
                    We, at YUVMEDIA Digital, understand the intent, will, time, efforts, and dreams that are invested in
                    starting and operating a business. Hence we leave no stone unturned in shaping it the way you aspire
                    and admire.
                    Our team of experts is always keen on formulating only the right solutions for your business’
                    everyday digital needs.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5">
        <div class="container ">

            <div class="row goalss justify-content-center p-3">
                <div class="col">
                    <div class="servicecard">
                        <img src="{{ asset('assets/websiteAssets/images/serviceCard.png') }}" alt="service bg"
                            class="servicebg">
                        <img src="{{ asset('assets/websiteAssets/images/advertising.png') }}" alt="icon image"
                            class="serviceIcon">
                        <div class="serviceHeading">
                            Design
                        </div>
                        <div class="serviceContent">
                            Our designs are more than just visuals;
                            they’re stories waiting to be told.
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="servicecard">
                        <img src="{{ asset('assets/websiteAssets/images/serviceCard.png') }}" alt="first image"
                            class="servicebg">
                        <img src="{{ asset('assets/websiteAssets/images/marketing.png') }}" alt="icon image"
                            class="serviceIcon">
                        <div class="serviceHeading">
                            Social Media Marketing
                        </div>
                        <div class="serviceContent">
                            In the bustling world of social media, we help your brand stand out.
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="servicecard">
                        <img src="{{ asset('assets/websiteAssets/images/serviceCard.png') }}" alt="first image"
                            class="servicebg">
                        <img src="{{ asset('assets/websiteAssets/images/tools.png') }}" alt="icon image"
                            class="serviceIcon3">
                        <div class="serviceHeading">
                            Website Development
                        </div>
                        <div class="serviceContent">
                            Your website is your digital storefront. We build websites that not only look
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="servicecard">
                        <img src="{{ asset('assets/websiteAssets/images/serviceCard.png') }}" alt="first image"
                            class="servicebg">
                        <img src="{{ asset('assets/websiteAssets/images/growth.png') }}" alt="icon image"
                            class="serviceIcon">
                        <div class="serviceHeading">
                            Performance Marketing
                        </div>
                        <div class="serviceContent">
                            Experience substantial profit growth and a competitive edge through
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




    <!-- our work -->
    <section>
        <div class="container py-5 ">
            <div class="row">
                <div class="globaltxtcolor text-start ">
                    Our Work
                </div>
                <div class=" text-start fs-2 fw-bold">
                    Empowering every vertical in the country.
                </div>
                <div class="text-start">
                    <p>
                        We seek our thrill from making brands and businesses in diversified domains reach their right
                        audience.
                        With every conversion and each sale, we strive to set new standards for your business as well as
                        ourselves.
                    </p>
                </div>
            </div>

            <div class="row industry">
                <div class="inds_cat_set owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1296px;">

                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can travel">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/travel.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Travel</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Tour and Travel" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/travel-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can trans">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/transportation.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Transportation</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Transportation" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/transportation-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can banking">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/banking.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Banking</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Banking" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/banking-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can healthc">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/healthcare.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Healthcare</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Healthcare" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/healthcare-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can enterta">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/entertainment.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Entertainment</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Entertainment" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/entertainment-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can educat">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/education.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Education</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img width="196" height="469" alt="Education"
                                                    src="assets/websiteAssets/images/businesses/education-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can business">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/business.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Business</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img width="196" height="469" alt="Business"
                                                    src="assets/websiteAssets/images/businesses/business-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can food">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/food.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Food</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img width="196" height="469" alt="Food"
                                                    src="assets/websiteAssets/images/businesses/food-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can job_car">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/job-career.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Job/Career</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Job Career" width="238" height="487"
                                                    src="assets/websiteAssets/images/businesses/job-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 129.6px;">
                                <div class="item">
                                    <div class="can fit_nes">
                                        <a href="#">
                                            <span class="data_text_lin">
                                                <div class="box-ar">
                                                    <div class="box-indus">
                                                        <img data-lazyloaded="1" decoding="async"
                                                            src="assets/websiteAssets/images/businesses/fitness.png"
                                                            alt="drivers-app">
                                                    </div>
                                                    <span class="name">Fitness</span>
                                                </div>
                                            </span>
                                            <span class="candidate">
                                                <img alt="Life Style" width="196" height="469"
                                                    src="assets/websiteAssets/images/businesses/fitness-d.png"
                                                    class="ls-is-cached lazyloaded">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                    Empowering every vertical in the country.
                </div>
                <p class=" text-start">
                    We seek our thrill from making brands and businesses in diversified domains reach their right audience.
                    With every conversion and each sale, we strive to set new standards for your business as well as
                    ourselves.
                </p>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div id="core-team" class="owl-carousel">

                        {{-- khivraj sir --}}
                        {{-- <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">
                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/Team/Mr.-Khivraj-Sain-300x300.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="author">Mr. Khivraj Sain</div>
                                                            <div class="fs-6 ">CEO & Founder</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>Razorpay Magic Checkout is
                                                    truly a magical solution. Our
                                                    conversion rate has increased
                                                    by 35% & our COD, RTO has
                                                    drastically decreased.</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Mr. Khivraj Sain</div>
                                                    <div class="fs-6 ">CEO & Founder</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}

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
                                                            <div class="author">Kishan Gopal</div>
                                                            <div class="fs-6 ">Operations Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>Razorpay Magic Checkout is
                                                    truly a magical solution. Our
                                                    conversion rate has increased
                                                    by 35% & our COD, RTO has
                                                    drastically decreased.</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Kishan Gopal</div>
                                                    <div class="fs-6 ">Operations Manager</div>
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
                                                            <div class="author">Mr. Nilesh Gupta</div>
                                                            <div class="fs-6 ">Office Admin</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>Razorpay Magic Checkout is
                                                    truly a magical solution. Our
                                                    conversion rate has increased
                                                    by 35% & our COD, RTO has
                                                    drastically decreased.</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Mr. Nilesh Gupta</div>
                                                    <div class="fs-6 ">Office Admin</div>
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
                                                            <div class="fs-6 ">Paid Marketing Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>Razorpay Magic Checkout is
                                                    truly a magical solution. Our
                                                    conversion rate has increased
                                                    by 35% & our COD, RTO has
                                                    drastically decreased.</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Mr. Manohar Singh</div>
                                                    <div class="fs-6 ">Paid Marketing Manager</div>
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
                                                <p>Razorpay Magic Checkout is
                                                    truly a magical solution. Our
                                                    conversion rate has increased
                                                    by 35% & our COD, RTO has
                                                    drastically decreased.</p>
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
                                                            <div class="fs-6 ">Seller Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>Razorpay Magic Checkout is
                                                    truly a magical solution. Our
                                                    conversion rate has increased
                                                    by 35% & our COD, RTO has
                                                    drastically decreased.</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Ms. Leera Ramesh</div>
                                                    <div class="fs-6 ">Seller Manager</div>
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




    {{-- services --}}
    <section>
        <div class="container py-5  servicesbox">

            <div class="row">
                <div class="col-md-6 text-wrap">
                    <h1 class="globaltxtcolor">Powering every industry. Powering all disruptors.</h1>
                </div>
            </div>
            <div class="row p-3">
                <!-- Nav tabs -->
                <ul class="nav nav-underline servicesbox" id="myTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                            type="button" role="tab">E-Commerce</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                            type="button" role="tab">Education</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                            type="button" role="tab">Real Estate</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4"
                            type="button" role="tab">Saas</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5"
                            type="button" role="tab">Freelance</button>
                    </li>
                </ul>

                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade  show active" id="tab1" role="tabpanel">
                        <div class="row p-3 py-5 p-md-5 border rounded-3 servicebg"
                            style="background-image: url('assets/websiteAssets/images/services/services1.webp'); ">


                            <div class="col-md-6 p-3 my-5 bg-white rounded-3">
                                <div class="serviceBanner">
                                    <h2>Empower your <br /> e-commerce business </h2>
                                    <p>
                                        Streamline payment management with a unified dashboard, enabling both online and
                                        in-person payment collection while enhancing conversion rates and minimizing fraud.
                                    </p>
                                    <a href="#" class="btn btn-primary ">Work With Yuvmedia <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6"></div>

                        </div>
                    </div>
                    <div class="tab-pane fade  " id="tab2" role="tabpanel">
                        <div class="row p-3 py-5 p-md-5 border rounded-3 servicebg"
                            style="background-image: url('assets/websiteAssets/images/services/services3.webp'); ">


                            <div class="col-md-6 p-3 my-5 bg-white rounded-3">
                                <div class="serviceBanner">
                                    <h2>Empower your <br /> e-commerce business </h2>
                                    <p>
                                        Streamline payment management with a unified dashboard, enabling both online and
                                        in-person payment collection while enhancing conversion rates and minimizing fraud.
                                    </p>
                                    <a href="#" class="btn btn-primary ">Work With Yuvmedia <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6"></div>

                        </div>
                    </div>
                    <div class="tab-pane fade  " id="tab3" role="tabpanel">
                        <div class="row p-3 py-5 p-md-5 border rounded-3 servicebg"
                            style="background-image: url('assets/websiteAssets/images/services/services5.webp'); ">


                            <div class="col-md-6 p-3 my-5 bg-white rounded-3">
                                <div class="serviceBanner">
                                    <h2>Empower your <br /> e-commerce business </h2>
                                    <p>
                                        Streamline payment management with a unified dashboard, enabling both online and
                                        in-person payment collection while enhancing conversion rates and minimizing fraud.
                                    </p>
                                    <a href="#" class="btn btn-primary">Work With Yuvmedia <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6"></div>

                        </div>
                    </div>
                    <div class="tab-pane fade  " id="tab4" role="tabpanel">
                        <div class="row p-3 py-5 p-md-5 border rounded-3 servicebg"
                            style="background-image: url('assets/websiteAssets/images/services/services4.webp'); ">


                            <div class="col-md-6 p-3 my-5 bg-white rounded-3">
                                <div class="serviceBanner">
                                    <h2>Empower your <br /> e-commerce business </h2>
                                    <p>
                                        Streamline payment management with a unified dashboard, enabling both online and
                                        in-person payment collection while enhancing conversion rates and minimizing fraud.
                                    </p>
                                    <a href="#" class="btn btn-primary">Work With Yuvmedia <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6"></div>

                        </div>
                    </div>
                    <div class="tab-pane fade  " id="tab5" role="tabpanel">
                        <div class="row p-3 py-5 p-md-5 border rounded-3 servicebg"
                            style="background-image: url('assets/websiteAssets/images/services/services2.webp');">


                            <div class="col-md-6 p-3 my-5 bg-white rounded-3">
                                <div class="serviceBanner">
                                    <h2>Empower your <br /> e-commerce business </h2>
                                    <p>
                                        Streamline payment management with a unified dashboard, enabling both online and
                                        in-person payment collection while enhancing conversion rates and minimizing fraud.
                                    </p>
                                    <a href="#" class="btn btn-primary">Work With Yuvmedia <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6"></div>

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>



    {{-- Tecg tools section --}}
    <section class="position-relative technologies-sec aos-init aos-animate " data-aos-duration="1200"
        data-aos-delay="000">
        <div class="technical-stack-section">
            <div class="container">

                <div class="text-start globaltxtcolor">
                    Technologies We Use
                </div>

                <div class="technical-stack-inn mt-5 mt-md-3">
                    <div class="technical-stack-main">
                        <div class="technical-main-div">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <div class="technical-main-mdl">
                                        <div class="technical-main-img aos-init aos-animate">
                                            <span>
                                                <img class="perfmatters-lazy entered pmloaded" data-ll-status="loaded"
                                                    src="{{ asset('assets/websiteAssets/images/technology-image.png') }}"
                                                    alt="technology-image">
                                            </span>
                                        </div>
                                        <div class="technical-tk-ul">
                                            <ul>
                                                <li class="frontend aos-init aos-animate" data-aos="fade-right">
                                                    <a href="javascript:;">Frontend</a>
                                                    <ul>
                                                        <li class="css3">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="css style"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/css-3-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/css-3-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="html5">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="html 5"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/html5-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/html5-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="javascript">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="javascript language"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/javascript-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/javascript-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="angular">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="angular icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/angular-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/angular-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="react">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="react native"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/react-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/react-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="less">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="less icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/less.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/less.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="jquery">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="jquery icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/jQuery.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/jQuery.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="backend aos-init aos-animate" data-aos="fade-down">
                                                    <a href="javascript:;">Backend</a>
                                                    <ul>
                                                        <li class="php">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="php technology"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/php-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/php-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="codeigniter">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="ci icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/ci-icon.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/ci-icon.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="drupal">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="drupal icon"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/drupal-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/drupal-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="joomla">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="joomla frameworks"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/joomla-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/joomla-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="laravel">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="laravel development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/laravel.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/laravel.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="magento">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="magent technology"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/magento.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/magento.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="mysql">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="mysql language"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/mysql-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/mysql-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="nodejs">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="nodejs development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/node-js-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/node-js-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="rubyonrails">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="ruby on rails"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/ruby-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/ruby-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="shopify">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="shopify development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/shopify-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/shopify-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mobile-app aos-init aos-animate" data-aos="fade-left">
                                                    <a href="javascript:;">Mobile App</a>
                                                    <ul>
                                                        <li class="android">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="android development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/android-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/android-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="ios">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="ios development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/ios-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/ios-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="flutter">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="flutter development"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/flutter-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/flutter-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="kotlin">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="kotlin"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/kotlin-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/kotlin-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="react-native">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="react native developers"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/react-native.png"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/react-native.png') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="swift">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="swift logo"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/swift-alt-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/swift-alt-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="ui-ux-design aos-init aos-animate" data-aos="fade-up">
                                                    <a href="javascript:;">UI/UX design</a>
                                                    <ul>
                                                        <li class="adobe-xd">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="adobe-xd "
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/adobe-xd-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/adobe-xd-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="illustrator">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="adobe illustrator logo"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/adobe-illustrator-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/adobe-illustrator-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="photoshop">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="adobe photoshop"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/adobe-photoshop-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/adobe-photoshop-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="figma">
                                                            <div class="index-list__divider-inn">
                                                                <span>
                                                                    <img alt="figma image"
                                                                        class="perfmatters-lazy entered pmloaded"
                                                                        data-src="assets/websiteAssets/images/technologies/figma-Icon.svg"
                                                                        data-ll-status="loaded"
                                                                        src="{{ asset('assets/websiteAssets/images/technologies/figma-Icon.svg') }}">
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3"></div>
                            </div>
                        </div>

                        <div class="technical-stack-ul">
                            <ul>
                                <li class="adobe-xd aos-init aos-animate" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="900">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="adobe xd image" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/adobe-xd-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/adobe-xd-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="android aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="600">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="android development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/android-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/android-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="angularjs aos-init aos-animate" data-aos="fade-left"
                                    data-aos-duration="1600" data-aos-delay="700">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="angular development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/angular-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/angular-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="aws aos-init aos-animate" data-aos="fade-right" data-aos-duration="1600"
                                    data-aos-delay="400">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="amazon " class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/amazon-web-services-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/amazon-web-services-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="codeigniter aos-init aos-animate" data-aos="fade-up"
                                    data-aos-duration="1600" data-aos-delay="800">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="ci image" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/ci-icon.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/ci-icon.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="css3 aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="500">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="css 3" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/css-3-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/css-3-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="drupal aos-init" data-aos="fade-left" data-aos-duration="1600"
                                    data-aos-delay="400">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="drupal development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/drupal-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/drupal-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="flutter aos-init aos-animate" data-aos="fade-right"
                                    data-aos-duration="1600" data-aos-delay="200">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="flutter development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/flutter-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/flutter-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="html5 aos-init" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="html 5 " class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/html5-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/html5-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="illustrator aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="000">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="illustrator" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/adobe-illustrator-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/adobe-illustrator-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="ios aos-init" data-aos="fade-left" data-aos-duration="1600"
                                    data-aos-delay="300">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="ios development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/ios-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/ios-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="shopify aos-init" data-aos="fade-right" data-aos-duration="1600"
                                    data-aos-delay="300">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="shopify development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/shopify-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/shopify-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="javascript aos-init" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="javascript" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/javascript-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/javascript-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="joomla aos-init aos-animate" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="200">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="joomla development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/joomla-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/joomla-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="jquery aos-init" data-aos="fade-left" data-aos-duration="1600"
                                    data-aos-delay="100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="jquery" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/jQuery.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/jQuery.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="kotlin aos-init" data-aos="fade-right" data-aos-duration="1600"
                                    data-aos-delay="500">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="kotlin " class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/kotlin-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/kotlin-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="laravel aos-init aos-animate" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="700">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="laravel developers" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/laravel.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/laravel.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="less aos-init aos-animate" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="400">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="less" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/less.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/less.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="magento aos-init aos-animate" data-aos="fade-left" data-aos-duration="1600"
                                    data-aos-delay="1000">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="magento" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/magento.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/magento.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="mongodb aos-init aos-animate" data-aos="fade-right"
                                    data-aos-duration="1600" data-aos-delay="1100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="mangodb" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/mongodb.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/mongodb.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="mysql aos-init" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="600">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="mysql" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/mysql-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/mysql-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="nodejs aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="500">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="nodejs " class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/node-js-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/node-js-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="photoshop aos-init aos-animate" data-aos="fade-left"
                                    data-aos-duration="1600" data-aos-delay="700">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="adobe photoshop" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/adobe-photoshop-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/adobe-photoshop-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="php aos-init" data-aos="fade-right" data-aos-duration="1600"
                                    data-aos-delay="800">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="php developers" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/php-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/php-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="react aos-init" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="400">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="react developers" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/react-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/react-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="react-native aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="300">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="react native developers" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/react-native.png"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/react-native.png') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="rubyonrails aos-init" data-aos="fade-left" data-aos-duration="1600"
                                    data-aos-delay="900">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="ruby on rails" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/ruby-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/ruby-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="swift aos-init aos-animate" data-aos="fade-right" data-aos-duration="1600"
                                    data-aos-delay="1000">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="swift" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/swift-alt-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/swift-alt-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="figma aos-init" data-aos="fade-up" data-aos-duration="1600"
                                    data-aos-delay="100">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="figma" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/figma-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/figma-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                                <li class="wordpress aos-init" data-aos="fade-down" data-aos-duration="1600"
                                    data-aos-delay="00">
                                    <div class="index-list__divider-inn">
                                        <span>
                                            <img alt="wordpress development" class="perfmatters-lazy entered pmloaded"
                                                data-src="assets/websiteAssets/images/technologies/wordpress-Icon.svg"
                                                data-ll-status="loaded"
                                                src="{{ asset('assets/websiteAssets/images/technologies/wordpress-Icon.svg') }}">
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- TESTIMONIALS -->
    <section class="testimonials py-5">
        <div class="container-fluid">
            <div class="row">
                <div class=" text-center fs-1 fw-bold">
                    Testimonials
                </div>
                <div class=" text-center fs-3 fw-bold">
                    Exceptional results, happy clients.
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div id="customers-testimonials" class="owl-carousel">

                        <!--TESTIMONIAL 1 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                </div>
                                <p class="pt-3">Dramatically maintain clicks-and-mortar solutions without functional
                                    solutions.
                                    Completely
                                    synergize resource taxing relationships via premier niche markets. Professionally
                                    cultivate.
                                </p>
                                <div class=" ">
                                    <div class="testimonial-name d-flex  ">
                                        <div class="me-2 ">
                                            <img class="img-circle rounded-pill" width="50px"
                                                src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                                alt="client">
                                        </div>
                                        <div>
                                            <div class="author">Aditya Shankar</div>
                                            <div class="fs-6 text-secondary">Co-founder, Doubtnut</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--END OF TESTIMONIAL 1 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF TESTIMONIALS -->

    <section class="contact_bg">
        <div class="container-fluid py-3 " style="background-color: #032A3E">
            <div class="ms-5 ps-5">
                <h1 class="text-white fw-bold ms-5 ps-5">Contact us</h1>
            </div>
        </div>
        <div class="container py-5 ">

            <div class="row">
                <div class="col-md-6" style="z-index: 10">
                    <div class="d-flex justify-content-center align-items-end h-100 px-md-5 mx-md-5">

                        <p class="fs-2 text-white fw-bold">
                            Get customized solution,
                            recommendation, and
                            estimate for your
                            requirement!
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shadow contactForm rounded-3 p-4 bg-white position-relative" style="z-index: 10">
                        <div>
                            Fill Out the form and we will
                            contact you
                        </div>
                        <div>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword2" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword3" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword3">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword4" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword4">
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>




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
