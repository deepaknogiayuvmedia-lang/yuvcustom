@extends('website.layout.websitemain')
@section('title', 'Life At Yuvmedia | ' . config('app.name'))
@section('content')

    <section id="aboutfirstsection" class="pt-3">
        <div class="container pt-5" style="position: relative;">
            <div class="row">
                <div class="text-center fs-4 fw-bold">
                    Where Creativity Meets Innovation! <br>
                    <span class="globaltxtcolor fs-1">Life @ Yuvmedia</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap aboutsecondhead">
                        At <b>Yuvmedia</b>, we innovate, create, and grow together! From exciting projects to team
                        celebrations, every moment is inspiring.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="clientSection">
        <div class="container pt-5" style="position: relative;">
            <section class="pb-5">
                <div class="container-sm mt-5 px-lg-4">
                    <div class="pd_top_45"></div>
                    <div class="slider-container">
                        <div class="slider-main">
                            <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" id="carouselInner">
                                    <!-- Images will be inserted dynamically -->
                                </div>
                                <!-- Carousel Controls -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="slider-sidebar" id="carouselSidebar">
                            <!-- Thumbnails will be inserted dynamically -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        const logosData = [
            {"src": "assets/websiteAssets/images/lifeatyuvmedia/1.webp"},
            {"src": "assets/websiteAssets/images/lifeatyuvmedia/2.webp"},
            {"src": "assets/websiteAssets/images/lifeatyuvmedia/3.webp"},
            {"src": "assets/websiteAssets/images/lifeatyuvmedia/4.webp"},
            {"src": "assets/websiteAssets/images/lifeatyuvmedia/5.webp"},
            {"src": "assets/websiteAssets/images/lifeatyuvmedia/6.webp"}
        ];

        function populateCarousel() {
            const carouselInner = document.getElementById("carouselInner");
            const sidebar = document.getElementById("carouselSidebar");

            if (!carouselInner || !sidebar) {
                console.error("Carousel container elements not found.");
                return;
            }

            logosData.forEach((logo, index) => {
                // Create carousel item
                const itemDiv = document.createElement("div");
                itemDiv.className = "carousel-item" + (index === 0 ? " active" : "");

                const img = document.createElement("img");
                img.src = logo.src;
                img.alt = "Life at Yuvmedia";
                img.className = "d-block w-100";

                itemDiv.appendChild(img);
                carouselInner.appendChild(itemDiv);

                // Create sidebar thumbnail
                const thumb = document.createElement("img");
                thumb.src = logo.src;
                thumb.alt = "Thumbnail " + (index + 1);
                thumb.className = "sidebar-img";
                thumb.setAttribute("data-bs-target", "#mainCarousel");
                thumb.setAttribute("data-bs-slide-to", index);

                sidebar.appendChild(thumb);
            });

            initializeCarousel();
        }

        function initializeCarousel() {
            $(document).ready(function(){
                $('#mainCarousel').carousel({
                    interval: 3000 // Auto-slide every 3 seconds
                });

                $('#mainCarousel').on('slide.bs.carousel', function (e) {
                    var index = $(e.relatedTarget).index();
                    $('.sidebar-img').removeClass('active-slide');
                    var activeImg = $('.sidebar-img').eq(index);
                    activeImg.addClass('active-slide');

                    // Auto-scroll sidebar thumbnails
                    if ($(window).width() < 768) {
                        var scrollTo = activeImg.outerWidth(true) * index;
                        $('.slider-sidebar').animate({ scrollLeft: scrollTo }, 500);
                    } else {
                        var scrollTo = activeImg.outerHeight(true) * index;
                        $('.slider-sidebar').animate({ scrollTop: scrollTo }, 500);
                    }
                });

                $('.sidebar-img').click(function(){
                    $('.sidebar-img').removeClass('active-slide');
                    $(this).addClass('active-slide');
                    var slideIndex = $(this).data('bs-slide-to');
                    $('#mainCarousel').carousel(slideIndex);
                });
            });
        }

        document.addEventListener("DOMContentLoaded", populateCarousel);
    </script>

@endsection
