@extends('website.layout.websitemain')
@section('title', 'Home | ' . config('app.name'))
@section('content')
<!--Hero Section Starts-->
<section class="hero-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-7 hero-content">
                <h1 class="heroheading fw-bolder">The all in one finance platform</h1>
                <h3 class="herosubheading fw-bolder">you’ve been looking for</h3>
                <div class="stats-section mt-3 mb-3">
                    <div class="row ">
                        <div class="col-md-12 stat-item">
                            <div class="text-start">
                                <p>4+ Years In Business | 6000+ Completed Projects | 500+ Satisfied Corporates
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start">
                    <div class="">
                        <a href="#" class="btn btn-primary btn-lg">Work With Yuvmedia <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="mx-5">
                        <a class="btn btn-outline-primary btn-lg" href="#">Be Our Business Partner!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hero-image">
                <img src="{{ asset('assets/websiteAssets/images/heroimage.png') }}" alt="Hero Image">
            </div>
        </div>
        <div class="row bg-white py-3 mt-3 rounded-4 align-items-center ">
            <div class="col-md-2">
                <img src="{{ asset('assets/websiteAssets/images/navigatoinIcon.png') }}" alt="navigatoinIcon"
                    class="me-2">
                I'm here to
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-start action-btn">
                    <a href="#">
                        Accept payment
                    </a>
                    <a href="#">
                        Accept payment
                    </a>
                    <a href="#">
                        Accept payment
                    </a>
                    <a href="#">
                        Accept payment
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-end">
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
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">
                                <img width="250"
                                    src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                    alt="img1">

                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hero Section Ends-->

<section>
    <div class="container py-5"">
            <div class=" row ">
                <div>
                    <div class=" service-space service-space--small"></div>
    <div class="service-cards">
        <div class="service-card" data-index="0">
            <div class="service-card__inner">
                <div class="service-card__content">
                    <h1 class="service-card__title">Our Services</h1>

                    <!-- Nav tabs -->
                    <ul class="nav nav-underline" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                                type="button" role="tab" aria-controls="messages"
                                aria-selected="false">Messages</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings"
                                type="button" role="tab" aria-controls="settings"
                                aria-selected="false">Settings</button>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="d-flex my-3 justify-content-around">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <p class="service-card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta
                                error nam eaque. Eum fuga laborum quos expedita iste saepe
                                similique, unde possimus quia at magnam sed cupiditate?
                                Reprehenderit, harum!
                            </p>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                            <p class="service-card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta
                                error nam eaque. Eum fuga laborum quos expedita iste saepe
                                similique, unde possimus quia at magnam sed cupiditate?
                                Reprehenderit, harum!
                            </p>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
                            <p class="service-card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta
                                error nam eaque. Eum fuga laborum quos expedita iste saepe
                                similique, unde possimus quia at magnam sed cupiditate?
                                Reprehenderit, harum!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-card" data-index="0">
            <div class="service-card__inner">
                <div class="service-card__content">
                    <h1 class="service-card__title">Our Services</h1>

                    <!-- Nav tabs -->
                    <ul class="nav nav-underline" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                                type="button" role="tab" aria-controls="messages"
                                aria-selected="false">Messages</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings"
                                type="button" role="tab" aria-controls="settings"
                                aria-selected="false">Settings</button>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="d-flex my-3 justify-content-around">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <p class="service-card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta
                                error nam eaque. Eum fuga laborum quos expedita iste saepe
                                similique, unde possimus quia at magnam sed cupiditate?
                                Reprehenderit, harum!
                            </p>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                            <p class="service-card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta
                                error nam eaque. Eum fuga laborum quos expedita iste saepe
                                similique, unde possimus quia at magnam sed cupiditate?
                                Reprehenderit, harum!
                            </p>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
                            <p class="service-card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta
                                error nam eaque. Eum fuga laborum quos expedita iste saepe
                                similique, unde possimus quia at magnam sed cupiditate?
                                Reprehenderit, harum!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-card" data-index="0">
            <div class="service-card__inner">
                <div class="service-card__content">
                    <h1 class="service-card__title">Our Services</h1>

                    <!-- Nav tabs -->
                    <ul class="nav nav-underline" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                                type="button" role="tab" aria-controls="messages"
                                aria-selected="false">Messages</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings"
                                type="button" role="tab" aria-controls="settings"
                                aria-selected="false">Settings</button>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="d-flex my-3 justify-content-around">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="https://i.pinimg.com/originals/af/18/ca/af18ca95eb60d321b1d410acc6308f1e.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card
                                            title
                                            and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <p class="service-card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta
                                error nam eaque. Eum fuga laborum quos expedita iste saepe
                                similique, unde possimus quia at magnam sed cupiditate?
                                Reprehenderit, harum!
                            </p>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                            <p class="service-card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta
                                error nam eaque. Eum fuga laborum quos expedita iste saepe
                                similique, unde possimus quia at magnam sed cupiditate?
                                Reprehenderit, harum!
                            </p>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
                            <p class="service-card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta
                                error nam eaque. Eum fuga laborum quos expedita iste saepe
                                similique, unde possimus quia at magnam sed cupiditate?
                                Reprehenderit, harum!
                            </p>
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

<section>
    <div class="container py-5">
        <div class=" row">
            <div class=" text-center fs-1 fw-bold">
                Achieving Goals
            </div>
            <div class="text-center">
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
            <div class="col-md-3">
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
            <div class="col-md-3">
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
            <div class="col-md-3">
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
            <div class="col-md-3">
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
</section>


<!-- our work -->
<section>
    <div class="container py-5 "">
            <div class=" row">
        <div class=" text-center fs-1 fw-bold">
            Our Work
        </div>
        <div class=" text-center fs-2 fw-bold">
            Empowering every vertical in the country.
        </div>
        <div class="text-center">
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
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1296px;">

                    <div class="owl-item active" style="width: 129.6px;">
                        <div class="item">
                            <div class="can travel">
                                <a href="#">
                                    <span class="data_text_lin">
                                        <div class="box-ar">
                                            <div class="box-indus">
                                                <img data-lazyloaded="1" decoding="async"
                                                    src="https://soumyaitsolution.com/webassets/images/home/travel.png"
                                                    alt="drivers-app">
                                            </div>
                                            <span class="name">Travel</span>
                                        </div>
                                    </span>
                                    <span class="candidate">
                                        <img alt="Tour and Travel" width="196" height="469"
                                            src="https://soumyaitsolution.com/webassets/images/home/travel-d.png"
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
                                                    src="https://soumyaitsolution.com/webassets/images/home/transportation.png"
                                                    alt="drivers-app">
                                            </div>
                                            <span class="name">Transportation</span>
                                        </div>
                                    </span>
                                    <span class="candidate">
                                        <img alt="Transportation" width="196" height="469"
                                            src="https://soumyaitsolution.com/webassets/images/home/transportation-d.png"
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
                                                    src="https://soumyaitsolution.com/webassets/images/home/banking.png"
                                                    alt="drivers-app">
                                            </div>
                                            <span class="name">Banking</span>
                                        </div>
                                    </span>
                                    <span class="candidate">
                                        <img alt="Banking" width="196" height="469"
                                            src="https://soumyaitsolution.com/webassets/images/home/banking-d.png"
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
                                                    src="https://soumyaitsolution.com/webassets/images/home/healthcare.png"
                                                    alt="drivers-app">
                                            </div>
                                            <span class="name">Healthcare</span>
                                        </div>
                                    </span>
                                    <span class="candidate">
                                        <img alt="Healthcare" width="196" height="469"
                                            src="https://soumyaitsolution.com/webassets/images/home/healthcare-d.png"
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
                                                    src="https://soumyaitsolution.com/webassets/images/home/entertainment.png"
                                                    alt="drivers-app">
                                            </div>
                                            <span class="name">Entertainment</span>
                                        </div>
                                    </span>
                                    <span class="candidate">
                                        <img alt="Entertainment" width="196" height="469"
                                            src="https://soumyaitsolution.com/webassets/images/home/entertainment-d.png"
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
                                                    src="https://soumyaitsolution.com/webassets/images/home/education.png"
                                                    alt="drivers-app">
                                            </div>
                                            <span class="name">Education</span>
                                        </div>
                                    </span>
                                    <span class="candidate">
                                        <img width="196" height="469" alt="Education"
                                            src="https://soumyaitsolution.com/webassets/images/home/education-d.png"
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
                                                    src="https://soumyaitsolution.com/webassets/images/home/business.png"
                                                    alt="drivers-app">
                                            </div>
                                            <span class="name">Business</span>
                                        </div>
                                    </span>
                                    <span class="candidate">
                                        <img width="196" height="469" alt="Business"
                                            src="https://soumyaitsolution.com/webassets/images/home/business-d.png"
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
                                                    src="https://soumyaitsolution.com/webassets/images/home/food.png"
                                                    alt="drivers-app">
                                            </div>
                                            <span class="name">Food</span>
                                        </div>
                                    </span>
                                    <span class="candidate">
                                        <img width="196" height="469" alt="Food"
                                            src="https://soumyaitsolution.com/webassets/images/home/food-d.png"
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
                                                    src="https://soumyaitsolution.com/webassets/images/home/job-career.png"
                                                    alt="drivers-app">
                                            </div>
                                            <span class="name">Job/Career</span>
                                        </div>
                                    </span>
                                    <span class="candidate">
                                        <img alt="Job Career" width="238" height="487"
                                            src="https://soumyaitsolution.com/webassets/images/home/job-d.png"
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
                                                    src="https://soumyaitsolution.com/webassets/images/home/fitness.png"
                                                    alt="drivers-app">
                                            </div>
                                            <span class="name">Fitness</span>
                                        </div>
                                    </span>
                                    <span class="candidate">
                                        <img alt="Life Style" width="196" height="469"
                                            src="https://soumyaitsolution.com/webassets/images/home/fitness-d.png"
                                            class="ls-is-cached lazyloaded">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><span
                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                            class="owl-next disabled"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots disabled"></div> -->
        </div>

    </div>
    </div>
</section>

<!--Seamless Integration Section Starts-->
<section class="hero-sectionseamless py-5">
    <div class="container py-5">
        <div class="row align-items-center ">
            <div class="col-md-6 hero-content">
                <h1 class="heroheadingseamless fw-bolder">Seamless Integration for
                    data flow across platforms</h1>
                <div class="text-start">
                    <p>
                        Seamless integration services ensure smooth data
                        flow across platforms, enhancing efficiency,
                        reducing redundancies, and providing real-time
                        insights for better decision-making.
                    </p>
                </div>
                <div class="d-flex justify-content-start">
                    <div class="">
                        <a href="#" class="btn btn-primary btn-lg">Work With Yuvmedia <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="mx-5">
                        <a class="btn btn-outline-primary btn-lg" href="#">Be Our Business Partner!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-vertical-slider">
                                <div class="vertical-slider">
                                    <div class="vertical-slide-track">
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 1">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 2">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 3">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 4">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 5">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 6">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 7">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 8">
                                        </div>
                                        <!-- Repeat the images for the seamless effect -->
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 1">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 2">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 3">
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-slider">
                                    <div class="vertical-slide-track2">
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 1">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 2">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 3">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 4">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 5">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 6">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 7">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 8">
                                        </div>
                                        <!-- Repeat the images for the seamless effect -->
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 1">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 2">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 3">
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-slider">
                                    <div class="vertical-slide-track">
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 1">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 2">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 3">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 4">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 5">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 6">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 7">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 8">
                                        </div>
                                        <!-- Repeat the images for the seamless effect -->
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 1">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 2">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 3">
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-slider">
                                    <div class="vertical-slide-track2">
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 1">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 2">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 3">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 4">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 5">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 6">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 7">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 8">
                                        </div>
                                        <!-- Repeat the images for the seamless effect -->
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 1">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 2">
                                        </div>
                                        <div class="slide">
                                            <img src="https://via.placeholder.com/100" alt="Placeholder 3">
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
<!--Seamless Integration Section Ends-->


<!-- TESTIMONIALS -->
<section class="testimonials">
    <div class="container py-5>
        <div class=" row">
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
                        <img class="img-circle"
                            src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                        <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely
                            synergize resource taxing relationships via premier niche markets. Professionally cultivate.
                        </p>
                    </div>
                    <div class="testimonial-name">EMILIANO AQUILANI</div>
                </div>
                <!--END OF TESTIMONIAL 1 -->
                <!--TESTIMONIAL 2 -->
                <div class="item">
                    <div class="shadow-effect">
                        <img class="img-circle"
                            src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                        <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely
                            synergize resource taxing relationships via premier niche markets. Professionally cultivate.
                        </p>
                    </div>
                    <div class="testimonial-name">ANNA ITURBE</div>
                </div>
                <!--END OF TESTIMONIAL 2 -->
                <!--TESTIMONIAL 3 -->
                <div class="item">
                    <div class="shadow-effect">
                        <img class="img-circle"
                            src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                        <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely
                            synergize resource taxing relationships via premier niche markets. Professionally cultivate.
                        </p>
                    </div>
                    <div class="testimonial-name">LARA ATKINSON</div>
                </div>
                <!--END OF TESTIMONIAL 3 -->
                <!--TESTIMONIAL 4 -->
                <div class="item">
                    <div class="shadow-effect">
                        <img class="img-circle"
                            src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                        <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely
                            synergize resource taxing relationships via premier niche markets. Professionally cultivate.
                        </p>
                    </div>
                    <div class="testimonial-name">IAN OWEN</div>
                </div>
                <!--END OF TESTIMONIAL 4 -->
                <!--TESTIMONIAL 5 -->
                <div class="item">
                    <div class="shadow-effect">
                        <img class="img-circle"
                            src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                        <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely
                            synergize resource taxing relationships via premier niche markets. Professionally cultivate.
                        </p>
                    </div>
                    <div class="testimonial-name">MICHAEL TEDDY</div>
                </div>
                <!--END OF TESTIMONIAL 5 -->
            </div>
        </div>
    </div>
    </div>
</section>
<!-- END OF TESTIMONIALS -->




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