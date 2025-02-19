@extends('website.layout.websitemain')
@section('title', 'Clients | ' . config('app.name'))
@section('content')

    <section id="aboutfirstsection" class="pt-3">
        <div class="container pt-5" style="position: relative;">
            <div class="row">
                <div class="text-center fs-1 fw-bold ">
                    Our Clients <br>
                    <span class="globaltxtcolor">Building Success Together.</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap aboutsecondhead">
                        At Yuvmedia, we empower brands with cutting-edge digital solutions, <br/>blending strategy, creativity, and technology to drive meaningful growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5" style="position: relative;">

            <div class="row g-3 justify-content-start align-items-center mt-3" id="real-estate-container">
                <div class="fs-2 fw-bold">Real Estate</div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="education-container">
                <div class="fs-2 fw-bold">Education</div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="digitalmarketing">
                <div class="fs-2 fw-bold">Digital Marketing</div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="ecommerce">
                <div class="fs-2 fw-bold">E-Commerce</div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="hospital">
                <div class="fs-2 fw-bold">Hospital</div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="hospitality">
                <div class="fs-2 fw-bold">Hospitality</div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="finance">
                <div class="fs-2 fw-bold">Finance</div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="manifacturer">
                <div class="fs-2 fw-bold">Manufacturer </div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="sports">
                <div class="fs-2 fw-bold">Sports</div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="trading">
                <div class="fs-2 fw-bold">Trading</div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="logistics">
                <div class="fs-2 fw-bold">Logistics</div>
            </div>
            <hr>
            <div class="row g-3 justify-content-start align-items-center mt-3" id="travel">
                <div class="fs-2 fw-bold">Travel</div>
            </div>
            <hr>

        </div>

    </section>

    <script>
        // Define JSON data for each industry
        const logosData = {
            "realEstate": [{
                    "src": "assets/websiteAssets/images/clients/Construction logo/1.png",
                    "alt": "Construction Logo 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Construction logo/2.png",
                    "alt": "Construction Logo 2"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Construction logo/3.png",
                    "alt": "Construction Logo 3"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Construction logo/4.png",
                    "alt": "Construction Logo 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Construction logo/5.png",
                    "alt": "Construction Logo 5"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Construction logo/6.png",
                    "alt": "Construction Logo 6"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Construction logo/7.png",
                    "alt": "Construction Logo 7"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Construction logo/8.png",
                    "alt": "Construction Logo 8"
                }
            ],
            "education": [{
                    "src": "assets/websiteAssets/images/clients/Course/1.png",
                    "alt": "Course 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Course/2.png",
                    "alt": "Course 2"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Course/3.png",
                    "alt": "Course 3"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Course/4.png",
                    "alt": "Course 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Course/5.png",
                    "alt": "Course 5"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Course/6.png",
                    "alt": "Course 6"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Course/7.png",
                    "alt": "Course 7"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Course/8.png",
                    "alt": "Course 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Course/9.png",
                    "alt": "Course 8"
                }
            ],
            "digitalmarketing": [{
                    "src": "assets/websiteAssets/images/clients/digitalmakerting/1.png",
                    "alt": "Course 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/digitalmakerting/2.png",
                    "alt": "digitalmakerting 2"
                },
                {
                    "src": "assets/websiteAssets/images/clients/digitalmakerting/3.png",
                    "alt": "digitalmakerting 3"
                },
                {
                    "src": "assets/websiteAssets/images/clients/digitalmakerting/4.png",
                    "alt": "digitalmakerting 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/digitalmakerting/5.png",
                    "alt": "digitalmakerting 5"
                },
                {
                    "src": "assets/websiteAssets/images/clients/digitalmakerting/6.png",
                    "alt": "digitalmakerting 6"
                },
                {
                    "src": "assets/websiteAssets/images/clients/digitalmakerting/7.png",
                    "alt": "digitalmakerting 7"
                },
                {
                    "src": "assets/websiteAssets/images/clients/digitalmakerting/8.png",
                    "alt": "digitalmakerting 8"
                }
            ],
            "ecommerce": [{
                    "src": "assets/websiteAssets/images/clients/ecommerce/1.png",
                    "alt": "Course 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/2.png",
                    "alt": "ecommerce 2"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/3.png",
                    "alt": "ecommerce 3"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/4.png",
                    "alt": "ecommerce 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/5.png",
                    "alt": "ecommerce 5"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/6.png",
                    "alt": "ecommerce 6"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/7.png",
                    "alt": "ecommerce 7"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/8.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/9.png",
                    "alt": "ecommerce 9"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/10.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/11.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/12.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/13.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/14.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/15.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/16.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/17.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/18.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/19.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/20.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/21.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/22.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/23.png",
                    "alt": "ecommerce 8"
                },
                {
                    "src": "assets/websiteAssets/images/clients/ecommerce/24.png",
                    "alt": "ecommerce 8"
                },
            ],
            "hospital": [{
                    "src": "assets/websiteAssets/images/clients/Hospital/1.png",
                    "alt": "Hospital 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospital/2.png",
                    "alt": "Hospital 2"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospital/3.png",
                    "alt": "Hospital 3"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospital/4.png",
                    "alt": "Hospital 4"
                }
                
            ],
            "hospitality": [{
                    "src": "assets/websiteAssets/images/clients/Hospitality/1.png",
                    "alt": "Hospitality 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospitality/2.png",
                    "alt": "Hospitality 2"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospitality/3.png",
                    "alt": "Hospitality 3"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospitality/4.png",
                    "alt": "Hospitality 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospitality/5.png",
                    "alt": "Hospitality 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospitality/6.png",
                    "alt": "Hospitality 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospitality/7.png",
                    "alt": "Hospitality 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospitality/8.png",
                    "alt": "Hospitality 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospitality/9.png",
                    "alt": "Hospitality 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospitality/10.png",
                    "alt": "Hospitality 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Hospitality/11.png",
                    "alt": "Hospitality 4"
                },
            ],
            "finance": [{
                    "src": "assets/websiteAssets/images/clients/finance/1.png",
                    "alt": "finance 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/finance/2.png",
                    "alt": "finance 2"
                },
                
            ],
            "manifacturer": [{
                    "src": "assets/websiteAssets/images/clients/Manifacturer/1.png",
                    "alt": "manifacturer 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Manifacturer/2.png",
                    "alt": "manifacturer 2"
                },
                
            ],
            "sports": [{
                    "src": "assets/websiteAssets/images/clients/sports/3.png",
                    "alt": "sports 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/sports/4.png",
                    "alt": "sports 2"
                },
                
            ],
            "trading": [{
                    "src": "assets/websiteAssets/images/clients/Trading/1.png",
                    "alt": "Trading 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/2.png",
                    "alt": "Trading 2"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/3.png",
                    "alt": "Trading 3"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/4.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/5.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/6.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/7.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/8.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/9.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/10.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/11.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/12.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/13.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/14.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/15.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/16.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/17.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/18.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/19.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/20.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/21.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/22.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/23.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/24.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/25.png",
                    "alt": "Trading 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Trading/26.png",
                    "alt": "Trading 4"
                },
                
            ],
            "logistics": [{
                    "src": "assets/websiteAssets/images/clients/logistics/1.png",
                    "alt": "logistics 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/logistics/2.png",
                    "alt": "logistics 2"
                },
            ],
            "travel": [{
                    "src": "assets/websiteAssets/images/clients/Travel/1.png",
                    "alt": "Travel 1"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/2.png",
                    "alt": "Travel 2"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/3.png",
                    "alt": "Travel 3"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/4.png",
                    "alt": "Travel 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/5.png",
                    "alt": "Travel 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/6.png",
                    "alt": "Travel 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/7.png",
                    "alt": "Travel 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/8.png",
                    "alt": "Travel 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/9.png",
                    "alt": "Travel 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/10.png",
                    "alt": "Travel 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/11.png",
                    "alt": "Travel 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/12.png",
                    "alt": "Travel 4"
                },
                {
                    "src": "assets/websiteAssets/images/clients/Travel/13.jpg",
                    "alt": "Travel 4"
                },
            ],
        };

        // Function to populate logos dynamically
        function populateLogos(containerId, logos) {
            const container = document.getElementById(containerId);
            if (!container) return; // Prevent errors if container is missing

            logos.forEach(logo => {
                const colDiv = document.createElement("div");
                colDiv.className = "col-6 col-md-3 col-lg-2";

                const img = document.createElement("img");
                img.src = logo.src;
                img.alt = logo.alt;
                img.className = "img-fluid";

                colDiv.appendChild(img);
                container.appendChild(colDiv);
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            populateLogos("real-estate-container", logosData.realEstate);
            populateLogos("education-container", logosData.education);
            populateLogos("digitalmarketing", logosData.digitalmarketing);
            populateLogos("ecommerce", logosData.ecommerce);
            populateLogos("hospital", logosData.hospital);
            populateLogos("hospitality", logosData.hospitality);
            populateLogos("finance", logosData.finance);
            populateLogos("manifacturer", logosData.manifacturer);
            populateLogos("sports", logosData.sports);
            populateLogos("trading", logosData.trading);
            populateLogos("logistics", logosData.logistics);
            populateLogos("travel", logosData.travel);
        });
    </script>

@endsection
