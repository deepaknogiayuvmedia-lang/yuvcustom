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
                                <div class="carousel-inner" id="carouselInner"></div>
                            </div>
                        </div>
                        <div class="slider-sidebar" id="carouselSidebar"></div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        const logosData = [{
                "src": "assets/websiteAssets/images/clients/Construction logo/1.png"
            },
            {
                "src": "assets/websiteAssets/images/clients/Construction logo/2.png"
            },
            {
                "src": "assets/websiteAssets/images/clients/Construction logo/3.png"
            }
        ];

        function populateCarousel() {
            const carouselInner = document.getElementById("carouselInner");
            const sidebar = document.getElementById("carouselSidebar");

            logosData.forEach((logo, index) => {
                // Create carousel item
                const itemDiv = document.createElement("div");
                itemDiv.className = "carousel-item" + (index === 0 ? " active" : "");

                const img = document.createElement("img");
                img.src = logo.src;
                img.alt = logo.alt;
                img.className = "d-block w-100";

                itemDiv.appendChild(img);
                carouselInner.appendChild(itemDiv);

                // Create sidebar thumbnail
                const thumb = document.createElement("img");
                thumb.src = logo.src;
                thumb.alt = logo.alt;
                thumb.className = "sidebar-img";
                thumb.setAttribute("data-bs-target", "#mainCarousel");
                thumb.setAttribute("data-bs-slide-to", index);

                sidebar.appendChild(thumb);
            });
        }

        document.addEventListener("DOMContentLoaded", populateCarousel);
    </script>
@endsection
