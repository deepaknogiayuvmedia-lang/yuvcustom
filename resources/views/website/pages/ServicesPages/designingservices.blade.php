@extends('website.layout.websitemain')
@section('title', 'Designing Services | ' . config('app.name'))
@section('content')
    {{-- <canvas id="gradient-canvas"></canvas> --}}

    <section class="py-4 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start grpahicheading fs-1">
                        Designing Your Brand's Future <span class="globaltxtcolor fs-1">Brand's Language</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap grpahicsecondhead">
                            There are no limits to what we can create for your brand. Whether it’s a bold new logo, eye-catching brochures, or a complete rebranding, our expert design team is ready to bring your vision to life. We’re committed to delivering high-quality designs that not only meet but exceed your expectations. With a strong focus on creativity, innovation, and attention to detail, we ensure your brand stands out and resonates with your target audience. 
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap grpahicsecondhead">
                            Let us help you create designs that you’ll love and your customers will remember.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg grpahicbbtn">Contact Us<i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                        <div class="me-3 mt-2 mt-md-0">
                            <a href="{{ route('portfolio') }}" class="btn btn-lg grpahicbbtn">View Our Portfolio<i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="grpahicbimage"
                        src="{{ asset('assets/websiteAssets/images/services/artist-photographer.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="section py-4 position-relative">
        <div class="header-marquee runner js-runner">
            <div class="runner-start">
                <div class="js-runner-content">
                    <div class="marquee-line">
                        <span class="marquee-line_text">Award-Winning Design Agency in New York</span>
                        <span class="marquee-line_text">User-Centered Design for Your Business</span>
                        <span class="marquee-line_text">50+ Design Awards</span>
                        <span class="marquee-line_text">Top-Rated Digital &amp; Print Design</span>
                        <span class="marquee-line_text">5-Star Clutch Rating</span>
                        <span class="marquee-line_text">Top Systems - Figma, Adobe, Geometry, Texture</span>
                        <span class="marquee-line_text">AGILE Process</span>
                        <span class="marquee-line_text">M/WBE-Certified</span>
                        <span class="marquee-line_text">Digital Design Agency of the Year</span>
                        <span class="marquee-line_text">2024 &amp; 2023 Webby Nominee</span>
                    </div>
                </div>
            </div>
            <div class="runner-end">
                <div class="js-runner-content">
                    <div class="marquee-line">
                        <span class="marquee-line_text">Award-Winning Design Agency in New York</span>
                        <span class="marquee-line_text">User-Centered Design for Your Business</span>
                        <span class="marquee-line_text">50+ Design Awards</span>
                        <span class="marquee-line_text">Top-Rated Digital &amp; Print Design</span>
                        <span class="marquee-line_text">5-Star Clutch Rating</span>
                        <span class="marquee-line_text">Top Systems - Figma, Adobe, Geometry, Texture</span>
                        <span class="marquee-line_text">AGILE Process</span>
                        <span class="marquee-line_text">M/WBE-Certified</span>
                        <span class="marquee-line_text">Digital Design Agency of the Year</span>
                        <span class="marquee-line_text">2024 &amp; 2023 Webby Nominee</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="js-shiftbox-carousel shiftbox-carousel">
            <div>
                <div class="shiftbox">
                    <div class="shiftbox-image">
                        <a href="#" tabindex="0"><img
                                src="https://dd.nyc/wp-content/uploads/2024/10/AD-800x423-1.webp"
                                alt="DD.NYC® Luxury Candles Branding and Packaging Design" class="cover"></a>
                    </div>
                    <div class="shiftbox-content">
                        <div class="preview">
                            <div class="preview-content" data-index="01">
                                <div class="preview-name preview-name__caption">
                                    <a href="#" tabindex="0">Antidote – Luxury Candle Branding &amp; Packaging
                                        Design</a>
                                </div>
                                <div class="preview-name">Packaging Design</div>
                                <div class="preview-name">Branding</div>
                                <div class="preview-name">Luxury</div>
                                <div class="preview-name">CPG</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="shiftbox">
                    <div class="shiftbox-image">
                        <a href="#" tabindex="-1"><img
                                src="https://dd.nyc/wp-content/uploads/2024/07/Stadium_800_423.gif"
                                alt="NYCFC New York City Stadium by DD.NYC®" class="cover"></a>
                    </div>
                    <div class="shiftbox-content">
                        <div class="preview">
                            <div class="preview-content" data-index="02">
                                <div class="preview-name preview-name__caption"><a href="#" tabindex="-1">New
                                        York City Football Club Stadium – Website Design
                                        &amp; Development</a></div>
                                <div class="preview-name">Web Design</div>
                                <div class="preview-name">Web Development</div>
                                <div class="preview-name">UI/UX</div>
                                <div class="preview-name">3D Design</div>
                                <div class="preview-name">Custom Animations</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                <div class="shiftbox">
                    <div class="shiftbox-image">
                        <a href="#" tabindex="-1"><img
                                src="https://dd.nyc/wp-content/uploads/2024/11/IW-800x423-1.webp"
                                alt="IvyWise Education Consultancy Branding &amp; Website Design by DD.NYC®"
                                class="cover"></a>
                    </div>
                    <div class="shiftbox-content">
                        <div class="preview">
                            <div class="preview-content" data-index="03">
                                <div class="preview-name preview-name__caption"><a href="#" tabindex="-1">IvyWise
                                        Education Consultancy</a></div>
                                <div class="preview-name">Branding</div>
                                <div class="preview-name">Brand Collateral</div>
                                <div class="preview-name">Web Design</div>
                                <div class="preview-name">Video Production</div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div>

                <div class="shiftbox">
                    <div class="shiftbox-image">
                        <a href="#" tabindex="-1"><img
                                src="https://dd.nyc/wp-content/uploads/2023/12/800_x_423.webp" alt=""
                                class="cover"></a>
                    </div>
                    <div class="shiftbox-content">
                        <div class="preview">
                            <div class="preview-content" data-index="04">
                                <div class="preview-name preview-name__caption"><a href="#"
                                        tabindex="-1">WillowWood Global Medical Branding</a></div>
                                <div class="preview-name">Branding</div>
                                <div class="preview-name">Brand Collateral</div>
                                <div class="preview-name">3D Design</div>
                                <div class="preview-name">Motion Graphics</div>
                                <div class="preview-name">Web Design</div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div>

                <div class="shiftbox">
                    <div class="shiftbox-image">
                        <a href="#" tabindex="-1"><img
                                src="https://dd.nyc/wp-content/uploads/2024/05/DD.NYC-SJP-800-x-423-1.jpg" alt=""
                                class="cover"></a>
                    </div>
                    <div class="shiftbox-content">
                        <div class="preview">
                            <div class="preview-content" data-index="05">
                                <div class="preview-name preview-name__caption"><a href="#" tabindex="-1">SJP
                                        Properties Real Estate Web Design</a></div>
                                <div class="preview-name">Web Design</div>
                                <div class="preview-name">UI/UX</div>
                                <div class="preview-name">Luxury</div>
                                <div class="preview-name">Real Estate</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                <div class="shiftbox">
                    <div class="shiftbox-image">
                        <a href="#" tabindex="-1"><img
                                src="https://dd.nyc/wp-content/uploads/2024/05/dd_nyc_bas_800_x_423.webp" alt=""
                                class="cover"></a>
                    </div>
                    <div class="shiftbox-content">
                        <div class="preview">
                            <div class="preview-content" data-index="06">
                                <div class="preview-name preview-name__caption"><a href="#" tabindex="-1">BAS
                                        Stone NYC
                                        – Architectural Branding &amp; Website</a></div>
                                <div class="preview-name">Web Design</div>
                                <div class="preview-name">3D Design</div>
                                <div class="preview-name">Real Estate</div>
                                <div class="preview-name">Video Production</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                <div class="shiftbox">
                    <div class="shiftbox-image">
                        <a href="#" tabindex="-1"><img
                                src="https://dd.nyc/wp-content/uploads/2023/12/800-x-423-2.jpg" alt="DD.NYC® Hawkridge"
                                class="cover"></a>
                    </div>
                    <div class="shiftbox-content">
                        <div class="preview">
                            <div class="preview-content" data-index="07">
                                <div class="preview-name preview-name__caption"><a href="#"
                                        tabindex="-1">Hawkridge Luxury Real Estate Development</a></div>
                                <div class="preview-name">Luxury</div>
                                <div class="preview-name">Real Estate</div>
                                <div class="preview-name">Web Design</div>
                                <div class="preview-name">Branding</div>
                                <div class="preview-name">Advertising</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                <div class="shiftbox">
                    <div class="shiftbox-image">
                        <a href="#" tabindex="-1"><img
                                src="https://dd.nyc/wp-content/uploads/2023/12/DD.NYC®-Akemi-Cosmetics-Manufacturing-1.webp"
                                alt="" class="cover"></a>
                    </div>
                    <div class="shiftbox-content">
                        <div class="preview">
                            <div class="preview-content" data-index="08">
                                <div class="preview-name preview-name__caption"><a href="#" tabindex="-1">Akemi
                                        Cosmetics Branding &amp; Web Design</a></div>
                                <div class="preview-name">Branding</div>
                                <div class="preview-name">Web Design</div>
                                <div class="preview-name">UI/UX</div>
                                <div class="preview-name">Graphic Design</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                <div class="shiftbox">
                    <div class="shiftbox-image">
                        <a href="#" tabindex="-1"><img
                                src="https://dd.nyc/wp-content/uploads/2023/07/Start-Slider.webp"
                                alt="DD.NYC® designs new york charity gala Ms. Foundation" class="cover"></a>
                    </div>
                    <div class="shiftbox-content">
                        <div class="preview">
                            <div class="preview-content" data-index="09">
                                <div class="preview-name preview-name__caption"><a href="#" tabindex="-1">Ms.
                                        Foundation – 50th Anniversary Women of Vision
                                        Awards Gala</a></div>
                                <div class="preview-name">Event Design</div>
                                <div class="preview-name">Branding</div>
                                <div class="preview-name">Web Design</div>
                                <div class="preview-name">Media</div>
                                <div class="preview-name">Non-Profits</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                <div class="shiftbox">
                    <div class="shiftbox-image">
                        <a href="#" tabindex="-1"><img
                                src="https://dd.nyc/wp-content/uploads/2022/08/ChefAntoineLours_Designed_DD.NYC®_Opening.webp"
                                alt="" class="cover"></a>
                    </div>
                    <div class="shiftbox-content">
                        <div class="preview">
                            <div class="preview-content" data-index="010">
                                <div class="preview-name preview-name__caption"><a href="#" tabindex="-1">Chef
                                        Antoine Lours</a></div>
                                <div class="preview-name">Branding</div>
                                <div class="preview-name">Graphic Design</div>
                                <div class="preview-name">Hospitality</div>
                                <div class="preview-name">Luxury</div>
                                <div class="preview-name">Web Design</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="shiftbox-nav desktop">
            <div class="shiftbox-arrow shiftbox-arrow__left js-shiftbox-prev"></div>
            <div class="shiftbox-pos">
                <var class="shiftbox-current js-shiftbox-current">01</var> /
                <span class="shiftbox-num">10</span>
            </div>
            <div class="shiftbox-arrow shiftbox-arrow__right js-shiftbox-next"></div>
        </div>
    </div>
    <section class="py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="text-start grpahicheading fs-1 mb-3">
                    Our <span class="globaltxtcolor fs-1">Specialty</span>
                </div>
                <div class="service-grid">
                    <div>
                        <div class="service-list js-service-container fadein" data-aos="fade-up"
                            style="min-height: 363.547px;" data-aos-offset="303" data-aos-once="true">
                            <div class="service active js-service" data-service="web-design">
                                <div class="service-caption js-service-caption">UI Design</div>
                                <div class="service-content js-service-content">
                                    <div class="service-tags">
                                        <div class="chips">
                                            <div class="chip">
                                                <a href="#" class="chip-label">UI Design</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Design System</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Prototyping</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <p>
                                            We help businesses establish a strong and recognizable identity with strategic branding solutions. From logo creation to brand guidelines, we ensure consistency across all touchpoints, making your brand stand out in a competitive market.
                                        </p>
                                    </div>
                                    <div class="service-action">
                                        <a href="{{ route('portfolio') }}" class="redlink">
                                            <span>Learn more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="service js-service" data-service="branding">
                                <div class="service-caption js-service-caption">Graphic Design</div>
                                <div class="service-content js-service-content">
                                    <div class="service-tags">
                                        <div class="chips">
                                            <div class="chip">
                                                <a href="#" class="chip-label">Social Media Post Design </a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Brochure Design & Pdf Design</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Print Graphics</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <p>
                                            Our expert designers create compelling visuals that communicate your message effectively. Whether it’s social media creatives, marketing materials, or corporate presentations, we deliver designs that capture attention and leave a lasting impression.
                                        </p>
                                    </div>
                                    <div class="service-action">
                                        <a href="{{ route('portfolio') }}" class="redlink">
                                            <span>Learn more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="service js-service" data-service="graphic-design">
                                <div class="service-caption js-service-caption">Graphic Design</div>
                                <div class="service-content js-service-content">
                                    <div class="service-tags">
                                        <div class="chips">
                                            <div class="chip">
                                                <a href="#" class="chip-label">Social Media Post Design </a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Brochure Design & Pdf Design</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Print Graphics</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <p>
                                            Our expert designers create compelling visuals that communicate your message effectively. Whether it’s social media creatives, marketing materials, or corporate presentations, we deliver designs that capture attention and leave a lasting impression.
                                        </p>
                                    </div>
                                    <div class="service-action">
                                        <a href="{{ route('portfolio') }}" class="redlink">
                                            <span>Learn more</span>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="service js-service" data-service="packaging-design">
                                <div class="service-caption js-service-caption">Packaging Design</div>
                                <div class="service-content js-service-content">
                                    <div class="service-tags">
                                        <div class="chips">
                                            <div class="chip">
                                                <a href="#" class="chip-label">Consumer Good Packaging</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Merchandise Packaging</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Beverage Packaging</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Startup Product Packaging</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <p>
                                            We design packaging that not only looks stunning but also tells your brand’s story. With a perfect blend of creativity and market appeal, our packaging solutions enhance product visibility and influence purchase decisions.
                                        </p>
                                    </div>
                                    <div class="service-action">
                                        <a href="{{ route('portfolio') }}" class="redlink">
                                            <span>Learn more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-preview desktop  " data-aos="fade-left" data-aos-offset="303.6666666666667"
                        data-aos-once="true">
                        <div class="service-content-copy js-service-copy active" data-service="web-design">
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">UI Design</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Design System</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Prototyping</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        We craft user-friendly and visually appealing interfaces that enhance user experience and drive engagement. Our designs prioritize functionality, accessibility, and seamless interaction to ensure your digital presence is intuitive and impactful.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="{{ route('portfolio') }}" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="service-content-copy js-service-copy " data-service="branding">
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">Social Media Post Design </a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Brochure Design & Pdf Design</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Print Graphics</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        Our expert designers create compelling visuals that communicate your message effectively. Whether it’s social media creatives, marketing materials, or corporate presentations, we deliver designs that capture attention and leave a lasting impression.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="{{ route('portfolio') }}" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="service-content-copy js-service-copy " data-service="graphic-design">
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">Social Media Post Design </a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Brochure Design & Pdf Design</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Print Graphics</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        Our expert designers create compelling visuals that communicate your message effectively. Whether it’s social media creatives, marketing materials, or corporate presentations, we deliver designs that capture attention and leave a lasting impression.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="{{ route('portfolio') }}" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="service-content-copy js-service-copy" data-service="packaging-design">
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">Consumer Good Packaging</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Merchandise Packaging</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Beverage Packaging</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Startup Product Packaging</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        We design packaging that not only looks stunning but also tells your brand’s story. With a perfect blend of creativity and market appeal, our packaging solutions enhance product visibility and influence purchase decisions.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="{{ route('portfolio') }}" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center graphicheadingsecthree">
                    Our <span class="fw-bold text-primary">Procedure</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap graphicsecondheadsecthree">
                        When you partner with us, you gain more than just a video; you receive a captivating story that
                        aligns with your brand’s vision.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/web-design.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Discovery</p>
                            <p class="card-text text-start text-wrap">
                                To make sure our designs reflect your vision, we start by learning about your brand, objectives, and target market.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/uiux.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Strategy</p>
                            <p class="card-text text-start text-wrap">
                                We create a thorough design plan that specifies the methodology, schedule, and outputs.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/graphic-designer.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Design</p>
                            <p class="card-text text-start text-wrap">
                                After receiving your input, our team develops preliminary design suggestions to enhance and perfect the images.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2 gy-4">
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/3d-film.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Implementation</p>
                            <p class="card-text text-start text-wrap">
                                We make sure the finished designs are responsive across all platforms and gadgets.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/trim.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Evaluation</p>
                            <p class="card-text text-start text-wrap">
                                To make sure the designs fulfill your goals, we evaluate their performance and make the required modifications.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center flex-wrap buttonsdiv mt-3">
                <div class="me-3">
                    <a href="{{ route('contact') }}" class="btn btn-lg grpahicbbtn">Contact Us<i
                            class="bi bi-arrow-right ms-2"></i></a>
                </div>
                <div class="me-3 mt-2 mt-md-0">
                    <a href="{{ route('portfolio') }}" class="btn btn-lg grpahicbbtn">View Our Portfolio<i
                            class="bi bi-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 position-relative">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center graphicheadingsecthree mb-3">
                    Smart Solutions, Stronger Brands <span class="fw-bold text-primary">– Choose Yuvmedia</span>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">Expertise</p>
                            <p class="card-text text-start text-wrap">
                                Our team has experts for any need, so you can be sure your project is in good hands.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">Engaging material</p>
                            <p class="card-text text-start text-wrap">
                                We provide material that builds your brand and increases return on investment while prioritizing social media on each platform.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">Custom Reporting</p>
                            <p class="card-text text-start text-wrap">
                                We plan and create reports that are in line with your priorities, business objectives, and key performance indicators.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2 gy-4">
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">Social Transformation</p>
                            <p class="card-text text-start text-wrap">
                                We can assist you whether you want to change your brand, need a reliable partner to expand your social media following.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <p class="fw-bold text-start">Evaluation</p>
                            <p class="card-text text-start text-wrap">
                                To make sure the designs fulfill your goals, we evaluate their performance and make the required modifications.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center flex-wrap buttonsdiv mt-3">
                <div class="me-3">
                    <a href="{{ route('contact') }}" class="btn btn-lg grpahicbbtn">Contact Us<i
                            class="bi bi-arrow-right ms-2"></i></a>
                </div>
                <div class="me-3 mt-2 mt-md-0">
                    <a href="{{ route('portfolio') }}" class="btn btn-lg grpahicbbtn">View Our Portfolio<i
                            class="bi bi-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative bannerbg py-5">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center webheading3">
                    Work With the <span class="websubheading3">Latest Technology</span>
                </div>
                <div class="text-center fs-5">
                    <p class="text-wrap webcontent3">
                        At Yuvmedia, we believe in the power of design to transform businesses and create meaningful
                        connections with audiences. Our commitment to excellence and client satisfaction drives us to
                        deliver outstanding design solutions. Partner with us to elevate your brand with design.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2 col-4">
                    <div class="graphictechcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/graphictech/download-1-150x150.png') }}"
                                alt="service bg" class="mb-3 Premiumproimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center graphictechheadings">Premium pro</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="graphictechcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/graphictech/aftereffiect-1-150x150.png') }}"
                                alt="service bg" class="mb-3 AfterEffectimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center graphictechheadings">After Effect</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="graphictechcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/graphictech/kisspng-autodesk-maya-computer-software-adobe-illustrator-5bfbc9d4635ae9.680619741543227860407-150x150.jpg') }}"
                                alt="service bg" class="mb-3 mayaimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center graphictechheadings">Maya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="graphictechcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/graphictech/7a9c7615d60e69b14db4711efeca98ed-150x150.png') }}"
                                alt="service bg" class="mb-3 Blenderimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center graphictechheadings">Blender</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="graphictechcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/graphictech/figma-150x150.webp') }}"
                                alt="service bg" class="mb-3 reactimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center graphictechheadings">Figma</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2 col-4">
                    <div class="graphictechcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/graphictech/ai-150x150.webp') }}"
                                alt="service bg" class="mb-3 jsimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center graphictechheadings">Illustrator</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="graphictechcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/graphictech/coreldraw-150x150.webp') }}"
                                alt="service bg" class="mb-3 htmlimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center graphictechheadings">Corel draw</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="graphictechcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/graphictech/photoshop-1-150x150.png') }}"
                                alt="service bg" class="mb-3 cssimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center graphictechheadings">Photoshop</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="graphictechcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/graphictech/indesign-150x150.png') }}"
                                alt="service bg" class="mb-3 bootstrapimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center graphictechheadings">Indesign</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="graphictechcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/graphictech/download-1-1-150x150.png') }}"
                                alt="service bg" class="mb-3 bootstrapimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center graphictechheadings">Animate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            AOS.init({
                duration: 1000, // Set the global duration for animations
                easing: 'ease', // You can customize easing if desired
                once: true, // Ensure animations only happen once when elements are scrolled into view
            });

            // Optional: If you want the animation on click (like toggling services), you can also use AOS on click
            $('.js-service').on('click', function() {
                $('.js-service').removeClass('active');
                $(this).addClass('active');
                var service = $(this).data('service');
                $('.js-service-copy').removeClass('active');
                $('.js-service-copy[data-service="' + service + '"]').addClass('active');

                // Trigger AOS animations again after toggling content
                AOS.refresh();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var $carousel = $('.shiftbox-carousel');

            // Initialize slick carousel
            $carousel.slick({
                slidesToShow: 1,
                infinite: true,
                arrows: false,
                centerMode: true,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                centerPadding: '0px',
                dots: true,
            });

            // Update current slide number
            $carousel.on('afterChange', function(event, slick, currentSlide) {
                $('.js-shiftbox-current').text(('0' + (currentSlide + 1)).slice(-2));
            });

            // Previous slide
            $('.js-shiftbox-prev').on('click', function() {
                $carousel.slick('slickPrev');
            });

            // Next slide
            $('.js-shiftbox-next').on('click', function() {
                $carousel.slick('slickNext');
            });
        });
    </script>
@endsection
