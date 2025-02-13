@extends('website.layout.websitemain')
@section('title', 'Portfolio | ' . config('app.name'))
@section('content')


    <section id="aboutfirstsection" class="pt-3">
        <div class="container pt-5" style="position: relative;">
            <div class="row">
                <div class="text-center fs-1 fw-bold ">
                    Portfolio <br>
                    <span class="globaltxtcolor">Future-Ready Solutions.</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap aboutsecondhead">
                        Driven by innovation and fueled by creativity, we are a passionate team at Yuvmedia, committed to
                        turning your digital visions into reality.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row portfolio">
            <div class="d-flex align-items-start position-relative">
                <div class="nav flex-column nav-pill me-3  position-sticky top-50 " id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <div class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                            aria-expanded="false">2D Animation </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button class="active dropdown-item" id="v-pills-Character-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Character" type="button" role="tab"
                                    aria-controls="v-pills-Character" aria-selected="true">2D Character Animation</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Motion-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Motion" type="button" role="tab"
                                    aria-controls="v-pills-Motion" aria-selected="false">2D Motion Graphics</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Logo-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Logo" type="button" role="tab"
                                    aria-controls="v-pills-Logo" aria-selected="false">Logo Animations</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Slideshow-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Slideshow" type="button" role="tab"
                                    aria-controls="v-pills-Slideshow" aria-selected="false">Slideshow</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-youtube-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-youtube" type="button" role="tab"
                                    aria-controls="v-pills-youtube" aria-selected="false">Youtube Intro Outro</button>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                            aria-expanded="false">3D Animation </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button class=" dropdown-item" id="v-pills-Modeling-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Modeling" type="button" role="tab"
                                    aria-controls="v-pills-Modeling" aria-selected="true">3D Modeling</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Product-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Product" type="button" role="tab"
                                    aria-controls="v-pills-Product" aria-selected="false">3D Product Animation</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Lighting-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Lighting" type="button" role="tab"
                                    aria-controls="v-pills-Lighting" aria-selected="false">Lighting & Compositing</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Rigging-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Rigging" type="button" role="tab"
                                    aria-controls="v-pills-Rigging" aria-selected="false">Rigging And Simulations</button>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                            aria-expanded="false">Video Editing </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button class=" dropdown-item" id="v-pills-Commercial-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Commercial" type="button" role="tab"
                                    aria-controls="v-pills-Commercial" aria-selected="true">Commercial Video Shoot</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Corporate-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Corporate" type="button" role="tab"
                                    aria-controls="v-pills-Corporate" aria-selected="false">Corporate Promo Edit</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Music-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Music" type="button" role="tab"
                                    aria-controls="v-pills-Music" aria-selected="false">Music Video Edit</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Travel-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Travel" type="button" role="tab"
                                    aria-controls="v-pills-Travel" aria-selected="false">Travel Video Edit</button>
                            </li>
                        </ul>
                    </div>

                    <button class="nav-link" id="v-pills-cgi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cgi"
                        type="button" role="tab" aria-controls="v-pills-cgi" aria-selected="false">CGI</button>
                    <button class="nav-link" id="v-pills-Story-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Story"
                        type="button" role="tab" aria-controls="v-pills-Story" aria-selected="false">Logo
                        Story</button>
                    <button class="nav-link" id="v-pills-vfx-tab" data-bs-toggle="pill" data-bs-target="#v-pills-vfx"
                        type="button" role="tab" aria-controls="v-pills-vfx" aria-selected="false">VFX</button>

                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    {{-- 2D Animation --}}
                    <div class="tab-pane fade show active" id="v-pills-Character" role="tabpanel"
                        aria-labelledby="v-pills-Character-tab" tabindex="0">
                        <div class="row ps-5">
                            <h1>2D Character Animation</h1>
                            <div class="col-md-6">
                                <div>
                                    <a href='#' class="url-box">
                                        <figure class='newsCard news-Slide-up '>
                                            <video autoplay muted loop class="w-100">
                                                <source
                                                    src="{{ asset('assets/websiteAssets/images/work/2d/2d_character_animation/2D Character Animation-01.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class='newsCaption px-4'>
                                                <div class="d-flex align-items-center justify-content-between cnt-title">
                                                    <h5 class='newsCaption-title text-white m-0'>2D Character Animation
                                                    </h5>
                                                    <i class="fas fa-arrow-alt-circle-right "></i>
                                                </div>
                                                <div class='newsCaption-content d-flex '>
                                                    <p class="col-10 py-3 px-0">Smooth and expressive 2D character
                                                        animation bringing characters to life with fluid movements,
                                                        emotions, and personality for games.</p>
                                                </div>
                                            </div>
                                            <span class="overlay"></span>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <a href='#' class="url-box">
                                        <figure class='newsCard news-Slide-up '>
                                            <video autoplay muted loop class="w-100">
                                                <source
                                                    src="{{ asset('assets/websiteAssets/images/work/2d/2d_character_animation/2D Character Animation-02.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class='newsCaption px-4'>
                                                <div class="d-flex align-items-center justify-content-between cnt-title">
                                                    <h5 class='newsCaption-title text-white m-0'>2D Character Animation
                                                    </h5> <i class="fas fa-arrow-alt-circle-right "></i>
                                                </div>
                                                <div class='newsCaption-content d-flex '>
                                                    <p class="col-10 py-3 px-0">Smooth and expressive 2D character
                                                        animation bringing characters to life with fluid movements,
                                                        emotions, and personality for games.</p>
                                                </div>
                                            </div>
                                            <span class="overlay"></span>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <a href='#' class="url-box">
                                        <figure class='newsCard news-Slide-up '>
                                            <video autoplay muted loop class="w-100">
                                                <source
                                                    src="{{ asset('assets/websiteAssets/images/work/2d/2d_character_animation/2D Character Animation-03.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class='newsCaption px-4'>
                                                <div class="d-flex align-items-center justify-content-between cnt-title">
                                                    <h5 class='newsCaption-title text-white m-0'>2D Character Animation
                                                    </h5> <i class="fas fa-arrow-alt-circle-right "></i>
                                                </div>
                                                <div class='newsCaption-content d-flex '>
                                                    <p class="col-10 py-3 px-0">Smooth and expressive 2D character
                                                        animation bringing characters to life with fluid movements,
                                                        emotions, and personality for games.</p>
                                                </div>
                                            </div>
                                            <span class="overlay"></span>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <a href='#' class="url-box">
                                        <figure class='newsCard news-Slide-up '>
                                            <video autoplay muted loop class="w-100">
                                                <source
                                                    src="{{ asset('assets/websiteAssets/images/work/2d/2d_character_animation/2D Character Animation-04.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class='newsCaption px-4'>
                                                <div class="d-flex align-items-center justify-content-between cnt-title">
                                                    <h5 class='newsCaption-title text-white m-0'>2D Character Animation
                                                    </h5> <i class="fas fa-arrow-alt-circle-right "></i>
                                                </div>
                                                <div class='newsCaption-content d-flex '>
                                                    <p class="col-10 py-3 px-0">Smooth and expressive 2D character
                                                        animation bringing characters to life with fluid movements,
                                                        emotions, and personality for games.</p>
                                                </div>
                                            </div>
                                            <span class="overlay"></span>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <a href='#' class="url-box">
                                        <figure class='newsCard news-Slide-up '>
                                            <video autoplay muted loop class="w-100">
                                                <source
                                                    src="{{ asset('assets/websiteAssets/images/work/2d/2d_character_animation/2D Character Animation-05.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class='newsCaption px-4'>
                                                <div class="d-flex align-items-center justify-content-between cnt-title">
                                                    <h5 class='newsCaption-title text-white m-0'>2D Character Animation
                                                    </h5> <i class="fas fa-arrow-alt-circle-right "></i>
                                                </div>
                                                <div class='newsCaption-content d-flex '>
                                                    <p class="col-10 py-3 px-0">Smooth and expressive 2D character
                                                        animation bringing characters to life with fluid movements,
                                                        emotions, and personality for games.</p>
                                                </div>
                                            </div>
                                            <span class="overlay"></span>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <a href='#' class="url-box">
                                        <figure class='newsCard news-Slide-up '>
                                            <video autoplay muted loop class="w-100">
                                                <source
                                                    src="{{ asset('assets/websiteAssets/images/work/2d/2d_character_animation/ShaliniAndMalini.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class='newsCaption px-4'>
                                                <div class="d-flex align-items-center justify-content-between cnt-title">
                                                    <h5 class='newsCaption-title text-white m-0'>2D Character Animation
                                                    </h5> <i class="fas fa-arrow-alt-circle-right "></i>
                                                </div>
                                                <div class='newsCaption-content d-flex '>
                                                    <p class="col-10 py-3 px-0">Smooth and expressive 2D character
                                                        animation bringing characters to life with fluid movements,
                                                        emotions, and personality for games.</p>
                                                </div>
                                            </div>
                                            <span class="overlay"></span>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Motion" role="tabpanel" aria-labelledby="v-pills-Motion-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>2D Motion Graphics</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Logo" role="tabpanel" aria-labelledby="v-pills-Logo-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Logo Animations</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Slideshow" role="tabpanel"
                        aria-labelledby="v-pills-Slideshow-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Slideshow</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-youtube" role="tabpanel"
                        aria-labelledby="v-pills-youtube-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Youtube Intro Outro</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 3D Animation --}}
                    <div class="tab-pane fade" id="v-pills-Modeling" role="tabpanel" aria-labelledby="v-pills-Modeling-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Modeling</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Product" role="tabpanel" aria-labelledby="v-pills-Product-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Product</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Lighting" role="tabpanel" aria-labelledby="v-pills-Lighting-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Lighting</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Rigging" role="tabpanel" aria-labelledby="v-pills-Rigging-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Rigging</h1>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- Video Editing --}}
                    <div class="tab-pane fade" id="v-pills-Commercial" role="tabpanel" aria-labelledby="v-pills-Commercial-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Commercial</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Corporate" role="tabpanel" aria-labelledby="v-pills-Corporate-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Corporate Promo</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Music" role="tabpanel" aria-labelledby="v-pills-Music-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Music</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Travel" role="tabpanel" aria-labelledby="v-pills-Travel-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Travel</h1>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="v-pills-cgi" role="tabpanel" aria-labelledby="v-pills-cgi-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>CGI</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Story" role="tabpanel" aria-labelledby="v-pills-Story-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>Logo Story</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-vfx" role="tabpanel" aria-labelledby="v-pills-vfx-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h1>VFX</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
