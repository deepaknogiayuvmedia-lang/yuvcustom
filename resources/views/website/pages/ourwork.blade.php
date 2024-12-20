@extends('website.layout.websitemain')
@section('title', 'Our Work | ' . config('app.name'))
@section('content')


<section class="py-5">
    <canvas id="gradient-canvas"></canvas>
    <div class="container py-5" id="workfirstsection">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-start text-primary fs-6">
                    <p class="text-wrap fw-bolder">
                        Our Work
                    </p>
                </div>
                <div class="text-start">
                    <p class="globaltxtcolor" style="font-size:72px;">Our Process, </p><span class="workheadingsub">Your
                        Success</span>
                </div>
                <div class="text-start">
                    <p class="text-wrap worksecondheadsecone">
                        We believe in a streamlined workflow that delivers excellence at every step. From ideation to
                        execution, our process ensures you get the best results without compromise.
                    </p>
                </div>
                <div class="d-flex justify-content-start flex-wrap">
                    <div class="me-3">
                        <a href="#" class="btn btn-lg workbtnsecone">Start Now <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="workimgsecone" src="{{ asset('assets/websiteAssets/images/work/patel.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="py-5" id="workfirstsection">
    <div class="container py-2 justify-content-center">
        <div class="row">
            <div class="text-center workheadingsectwo">
                See <span class="wordksubheadingsectwo">Our Website Work</span>
            </div>
            <div class="text-center fs-5">
                <p class="text-wrap workcontentsectwo">
                    By choosing Yuvmedia, you’re not just selecting a partner; you’re investing in a future of
                    accelerated growth, substantial cost savings, and complete peace of mind. Let’s turn your digital
                    vision into reality
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-4 py-5">
        <div class="row">
            <div class="col-md-4">
                <img class="workimgs1" src="{{ asset('assets/websiteAssets/images/work/brahma.jpg') }}" alt="">
            </div>
            <div class="col-md-4">
                <img class="workimgs2" src="{{ asset('assets/websiteAssets/images/work/sky.jpg') }}" alt="">
            </div>
            <div class="col-md-4">
                <img class="workimgs3" src="{{ asset('assets/websiteAssets/images/work/paisanivaran.jpg') }}" alt="">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <img class="workimgs1" src="{{ asset('assets/websiteAssets/images/work/nakoda.jpg') }}" alt="">
            </div>
            <div class="col-md-4">
                <img class="workimgs2" src="{{ asset('assets/websiteAssets/images/work/patel.jpg') }}" alt="">
            </div>
            <div class="col-md-4">
                <img class="workimgs3" src="{{ asset('assets/websiteAssets/images/work/evolve.jpg') }}" alt="">
            </div>
        </div>
    </div>

</section>
<section>
    <div class="container pt-5 justify-content-center">
        <div class="row">
            <div class="text-center webheading3">
                Key <span class="websubheading3">Clientele</span>
            </div>
            <div class="text-center fs-5">
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
<section>
    <div class="container pt-5 justify-content-center">
        <div class="row">
            <div class="text-center webheading3">
                See Our <span class="websubheading3">Designing Work</span>
            </div>
            <div class="text-center fs-5">
                <p class="text-wrap webcontent3">
                    By choosing Yuvmedia, you’re not just selecting a partner; you’re investing in a future of
                    accelerated growth, substantial cost savings, and complete peace of mind. Let’s turn your digital
                    vision into reality
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-2">
        <div class="swiper-container swiper-full-mobile swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper py-4">
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/1.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/3.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/4.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/5.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/6.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/7.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/8.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/9.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/10.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/11.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/12.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/13.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/14.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/15.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/websiteAssets/images/socialmedia/16.jpg') }}" alt="">
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    var copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logo-slider").appendChild(copy);

    var copy2 = document.querySelector(".logos-slide2").cloneNode(true);
    document.querySelector(".logo-slider2").appendChild(copy2);

    var copy3 = document.querySelector(".logos-slide3").cloneNode(true);
    document.querySelector(".logo-slider3").appendChild(copy3);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

<script>
    var swiperMobile = new Swiper('.swiper-container.swiper-full-mobile', {
        slidesPerView: 5,
        spaceBetween: 50,
        slideToClickedSlide: true,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2000,
        },
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
        breakpoints: {

            640: {
                freemode: true,
                slidesPerView: 1,
                spaceBetween: 20,
            },
            320: {
                freemode: true,
                slidesPerView: 1,
                spaceBetween: 20,
            }
        }
    });
</script>
@endsection