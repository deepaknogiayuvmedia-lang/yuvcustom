@extends('website.layout.websitemain')
@section('title', 'Our Work | ' . config('app.name'))
@section('content')
<section style="background-color:#ffffff;">
    <div class="container py-5">
        <div class="row">
            <div class="text-center text-primary fs-6">
                <p class="text-wrap fw-bolder">
                    Our Work
                </p>
            </div>
            <div class="text-center workheadingsecone">
                Our Process, <span class="workheadingsub">Your Success</span>
            </div>
            <div class="text-center">
                <p class="text-wrap worksecondheadsecone">
                    We believe in a streamlined workflow that delivers excellence at every step. From ideation to
                    execution, our process ensures you get the best results without compromise.
                </p>
            </div>
            <div class="d-flex justify-content-center flex-wrap">
                <div class="me-3">
                    <a href="#" class="btn btn-lg workbtnsecone">Start Now <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: whitesmoke;" class="py-5">
    <div class="container pt-5 justify-content-center">
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
    <div class="container-fluid mt-4">
        <div class="">
            <div class="gy-5">
                <div class="row">
                    <div class="col-md-4">
                        <img class="workimgs1" src="{{ asset('assets/websiteAssets/images/work/brahma.jpg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="workimgs2" src="{{ asset('assets/websiteAssets/images/work/sky.jpg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="workimgs3" src="{{ asset('assets/websiteAssets/images/work/paisanivaran.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="">
            <div class="gy-5">
                <div class="row">
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
        </div>
    </div>
</section>
<section
    style="background-image: url('{{ asset('assets/websiteAssets/images/graphicsectionback.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
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
  <div class="swiper-container swiper-full-mobile swiper-container-initialized swiper-container-horizontal">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="http://md-aqil.github.io/images/adolescent-beautiful-beauty-247878.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('assets/websiteAssets/images/work/sky.jpg') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('assets/websiteAssets/images/work/sky.jpg') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('assets/websiteAssets/images/work/sky.jpg') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('assets/websiteAssets/images/work/sky.jpg') }}" alt="">
      </div>

      <div class="swiper-slide">
        <img src="{{ asset('assets/websiteAssets/images/work/sky.jpg') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('assets/websiteAssets/images/work/sky.jpg') }}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('assets/websiteAssets/images/work/sky.jpg') }}" alt="">
      </div>

    </div>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
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

<script>
     var swiperMobile = new Swiper('.swiper-container.swiper-full-mobile', {
      slidesPerView: 5,
      spaceBetween: 50,
      slideToClickedSlide:true,
      centeredSlides:true,
     pagination: {
        el: '.swiper-pagination',
        clickable: true,

      },

      loop:true,
      //   autoplay: {
      //     delay: 100000,
      //   },


        keyboard: {
        enabled: true,
        onlyInViewport: true,
      },


      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },


       breakpoints: {
            
            640: {
              freemode:true,
              slidesPerView: 3,
              spaceBetween: 20,
            },
            320: {
              freemode:true,
              slidesPerView: 3,
              spaceBetween: 20,
            }
      }

    });
</script>
@endsection