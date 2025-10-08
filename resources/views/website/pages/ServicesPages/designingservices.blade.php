@extends('website.layout.websitemain')
@section('title', 'Designing Services | ' . config('app.name'))
@section('content')
    {{-- <canvas id="gradient-canvas"></canvas> --}}

    <section class="py-4 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start grpahicheading fs-1">
                        Designing the Language of <span class="globaltxtcolor fs-1">Your Brand’s Future</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap grpahicsecondhead">
                            There are no limits to what we can create for your brand. Whether it’s a bold new logo,
                            eye-catching brochures, or a complete rebranding, our expert design team is ready to bring your
                            vision to life. We’re committed to delivering high-quality designs that not only meet but exceed
                            your expectations. With a strong focus on creativity, innovation, and attention to detail, we
                            ensure your brand stands out and resonates with your target audience.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap grpahicsecondhead">
                            Let us help you create designs that you’ll love and your customers will remember.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg grpahicbbtn">Book a Call<i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid rounded-5"
                        src="{{ asset('assets/websiteAssets/images/services/product/brandesign.webp') }}" alt="">
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
    </div>
    <section class="py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="text-start grpahicheading fs-1 mb-3">
                    Our <span class="globaltxtcolor fs-1">Specialty</span>
                </div>
                <div class="service-grid">

                    <div class="service-list js-service-container fadein" data-aos="fade-up" style="min-height: 363.547px;"
                        data-aos-offset="303" data-aos-once="true">
                        <div class="service active js-service" data-service="web-design">
                            <div class="service-caption js-service-caption">UI/UX Design</div>
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">UI/UX Design</a>
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
                                        We help businesses establish a strong and recognizable identity with strategic
                                        branding solutions. From logo creation to brand guidelines, we ensure
                                        consistency across all touchpoints, making your brand stand out in a competitive
                                        market.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service js-service" data-service="branding">
                            <div class="service-caption js-service-caption">Branding</div>
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">Logo Design</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Brand Identity</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Business Cards</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Stationery Design</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Packaging Design</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Brand Guidelines</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        Our expert designers create compelling visuals that communicate your message
                                        effectively. Whether it’s social media creatives, marketing materials, or
                                        corporate presentations, we deliver designs that capture attention and leave a
                                        lasting impression.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service js-service" data-service="graphic-designing">
                            <div class="service-caption js-service-caption"> Graphic Designing</div>
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
                                        Our expert designers create compelling visuals that communicate your message
                                        effectively. Whether it’s social media creatives, marketing materials, or
                                        corporate presentations, we deliver designs that capture attention and leave a
                                        lasting impression.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="service js-service" data-service="packaging-design">
                            <div class="service-caption js-service-caption">Product mockup </div>
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
                                        We design packaging that not only looks stunning but also tells your brand’s
                                        story. With a perfect blend of creativity and market appeal, our packaging
                                        solutions enhance product visibility and influence purchase decisions.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service js-service" data-service="vfx">
                            <div class="service-caption js-service-caption">VFX</div>
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">Compositing</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Motion Graphics</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">3D Animation</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Visual Effects Cleanup</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">CGI Integration</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Explainer Videos</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        We create visual effects that don’t just look spectacular but also bring your
                                        stories to life. With a seamless blend of creativity and cutting-edge
                                        technology, our VFX solutions elevate visual storytelling, captivate audiences,
                                        and leave a lasting impact.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service js-service" data-service="Brochure">
                            <div class="service-caption js-service-caption">Brochure</div>
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">Corporate Brochure</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Product Catalog</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Company Profile</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Flyers & Leaflets</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Marketing Brochure</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        We design brochures that not only look elegant but also communicate your brand’s
                                        message with impact. With a perfect balance of creativity and functionality, our
                                        brochure designs capture attention, engage readers, and inspire action.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service js-service" data-service="3d">
                            <div class="service-caption js-service-caption">3D</div>
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">3D Modeling</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Product Visualization</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">3D Animation</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Architectural Rendering</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Character Design</a>
                                        </div>
                                    </div>

                                    <div class="service-text">
                                        <p>
                                            We create stunning 3D designs that bring your ideas to life with precision
                                            and creativity.
                                            From product mockups to architectural renderings and animations, our 3D
                                            solutions enhance
                                            visual storytelling, engage audiences, and elevate your brand’s
                                            presentation.
                                        </p>
                                    </div>

                                    <div class="service-action">
                                        <a href="#" class="redlink">
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
                                            <a href="#" class="chip-label">UI/UXDesign</a>
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
                                        We craft user-friendly and visually appealing interfaces that enhance user
                                        experience and drive engagement. Our designs prioritize functionality,
                                        accessibility, and seamless interaction to ensure your digital presence is
                                        intuitive
                                        and impactful.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
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
                                            <a href="#" class="chip-label">Logo Design</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Brand Identity</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Business Cards</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Stationery Design</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Packaging Design</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Brand Guidelines</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        Our expert designers create compelling visuals that communicate your message
                                        effectively. Whether it’s social media creatives, marketing materials, or
                                        corporate
                                        presentations, we deliver designs that capture attention and leave a lasting
                                        impression.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-copy js-service-copy " data-service="graphic-designing">
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
                                        Our expert designers create compelling visuals that communicate your message
                                        effectively. Whether it’s social media creatives, marketing materials, or
                                        corporate
                                        presentations, we deliver designs that capture attention and leave a lasting
                                        impression.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
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
                                        We design packaging that not only looks stunning but also tells your brand’s
                                        story.
                                        With a perfect blend of creativity and market appeal, our packaging solutions
                                        enhance product visibility and influence purchase decisions.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-copy js-service-copy" data-service="vfx">
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">Compositing</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Motion Graphics</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">3D Animation</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Visual Effects Cleanup</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">CGI Integration</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Explainer Videos</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        We create visual effects that don’t just look spectacular but also bring your
                                        stories to life. With a seamless blend of creativity and cutting-edge
                                        technology,
                                        our VFX solutions elevate visual storytelling, captivate audiences, and leave a
                                        lasting impact.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-copy js-service-copy" data-service="Brochure">
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">Corporate Brochure</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Product Catalog</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Company Profile</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Flyers & Leaflets</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Marketing Brochure</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        We design brochures that not only look elegant but also communicate your brand’s
                                        message with impact. With a perfect balance of creativity and functionality, our
                                        brochure designs capture attention, engage readers, and inspire action.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-copy js-service-copy" data-service="3d">
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">3D Modeling</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Product Visualization</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">3D Animation</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Architectural Rendering</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Character Design</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        We create stunning 3D designs that bring your ideas to life with precision
                                        and creativity.
                                        From product mockups to architectural renderings and animations, our 3D
                                        solutions enhance
                                        visual storytelling, engage audiences, and elevate your brand’s
                                        presentation.
                                    </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
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
                    Our <span class="fw-bold text-primary">Work</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap graphicsecondheadsecthree">
                        When you partner with us, you gain more than just a video; you receive a captivating story that
                        aligns with your brand’s vision.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4 justify-content-center">

                <div class="portfolio section video">
                    <div class="container">

                        <div class="filters mt-0">
                            <ul>
                                <li class=" text-black active" data-filter=".all">All</li>
                                <li class=" text-black" data-filter=".uiux">UI/UX Design</li>
                                <li class=" text-black" data-filter=".branding">Branding</li>
                                <li class=" text-black" data-filter=".graphic">Graphic Designing</li>
                                <li class=" text-black" data-filter=".mockup">Product mockup</li>
                                <li class=" text-black" data-filter=".vfx">VFX</li>
                                <li class=" text-black" data-filter=".cgi">3D</li>
                            </ul>
                        </div>

                        <div class="filters-content">
                            <div class="row grid">

                                <div class="col-sm-4 all uiux">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/UIUX/1.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 object-fit-cover"
                                            style="object-position: top;">
                                    </div>
                                </div>
                                <div class="col-sm-4 all uiux">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/UIUX/2.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 object-fit-cover"
                                            style="object-position: top;">
                                    </div>
                                </div>
                                <div class="col-sm-4 all uiux">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/UIUX/3.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 object-fit-cover"
                                            style="object-position: top;">
                                    </div>
                                </div>
                                <div class="col-sm-4 all uiux">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/UIUX/4.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 object-fit-cover"
                                            style="object-position: top;">
                                    </div>
                                </div>
                                <div class="col-sm-4 all uiux">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/UIUX/6.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 object-fit-cover"
                                            style="object-position: top;">
                                    </div>
                                </div>
                                <div class="col-sm-4 all uiux">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/UIUX/7.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 object-fit-cover"
                                            style="object-position: top;">
                                    </div>
                                </div>
                                <div class="col-sm-4 all uiux">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/UIUX/5.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 object-fit-cover"
                                            style="object-position: top;">
                                    </div>
                                </div>

                                <div class="col-sm-4 all branding">
                                    <div class="item   p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/blossoming-colorful-watercolor-flowers_52683-30106.jpg') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all branding">
                                    <div class="item   p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/Free_A4_Brochure_Mockup_3.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all branding">
                                    <div class="item   p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/hing mockup.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all branding">
                                    <div class="item   p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/e6fd665efbf29b147499ba472f8a9759.jpg') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all branding">
                                    <div class="item   p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/kurumsalkimlik2.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all branding">
                                    <div class="item   p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/fc99a4a6fbf1a93e364ee82b0928606d.jpg') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>


                                <div class="col-sm-4 all graphic">
                                    <div class="item   p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/Untitled-1_01.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic">
                                    <div class="item   p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/Untitled-1_02.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic ">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/Sandwich0.jpg') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/alovera gel.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/biofeel_01.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/biofeel_02.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/charcol facewash.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>

                                <div class="col-sm-4 all graphic">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/hydrating facewash.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/night cream.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/papaya facewash.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/rose water.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/saffron face glow face wash.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all graphic">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/saffron face glow serum.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>

                                <div class="col-sm-4 all mockup">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/sdf.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all mockup">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/asd.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all mockup">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/5.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all mockup">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/Cosmetic-Products-Mockup-2.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all mockup">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/preview.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>
                                <div class="col-sm-4 all mockup">
                                    <div class="item p-2 rounded-3">
                                        <img src="{{ asset('assets/websiteAssets/images/services/product/hing mockup.webp') }}"
                                            alt="" class="img-fluid h-100 w-100 ">
                                    </div>
                                </div>

                                <div class="col-sm-4 all vfx">
                                    <div class="item">
                                        <iframe
                                            src="https://player.vimeo.com/video/1057501045?background=1&amp;autoplay=1&amp;loop=1&amp;muted=1"
                                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                            allowfullscreen="" class="" data-ready="true"
                                            style=" width: 100%; height: 100%; border-radius: 20px;"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-4 all vfx">
                                    <div class="item">
                                        <video class="video-background  rounded-4" preload="auto" playsinline autoplay
                                            loop muted style="height: 205px;">
                                            <source
                                                src="{{ asset('assets/websiteAssets/images/services/videos/stereo.webm') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-sm-4 all vfx">
                                    <div class="item">
                                        <video class="video-background  rounded-4" preload="auto" playsinline autoplay
                                            loop muted style="height: 205px;">
                                            <source
                                                src="{{ asset('assets/websiteAssets/images/services/videos/Abvfx_Cleanup.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-sm-4 all vfx">
                                    <div class="item">
                                        <video class="video-background  rounded-4" preload="auto" playsinline autoplay
                                            loop muted style="height: 205px;">
                                            <source
                                                src="{{ asset('assets/websiteAssets/images/services/videos/paint.webm') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-sm-4 all vfx">
                                    <div class="item">
                                        <video class="video-background  rounded-4" preload="auto" playsinline autoplay
                                            loop muted style="height: 205px;">
                                            <source
                                                src="{{ asset('assets/websiteAssets/images/services/videos/vfxcompositing.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-sm-4 all vfx">
                                    <div class="item">
                                        <video class="video-background  rounded-4" preload="auto" playsinline autoplay
                                            loop muted style="height: 205px;">
                                            <source
                                                src="{{ asset('assets/websiteAssets/images/services/videos/ABVFX_Rotoscopy-1.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>

                                <div class="col-sm-4 all cgi">
                                    <div class="item">
                                        <iframe
                                            src="https://player.vimeo.com/video/1111639233?background=1&autoplay=1&loop=1&muted=1"
                                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                            allowfullscreen class="w-100 h-100 rounded-4"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-4 all cgi">
                                    <div class="item">
                                        <iframe
                                            src="https://player.vimeo.com/video/1111639291?background=1&autoplay=1&loop=1&muted=1"
                                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                            allowfullscreen class="w-100 h-100 rounded-4"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-4 all cgi">
                                    <div class="item">
                                        <iframe
                                            src="https://player.vimeo.com/video/1111639333?background=1&autoplay=1&loop=1&muted=1"
                                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                            allowfullscreen class="w-100 h-100 rounded-4"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-4 all cgi">
                                    <div class="item">
                                        <iframe
                                            src="https://player.vimeo.com/video/1111639386?background=1&autoplay=1&loop=1&muted=1"
                                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                            allowfullscreen class="w-100 h-100 rounded-4"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-4 all cgi">
                                    <div class="item">
                                        <iframe
                                            src="https://player.vimeo.com/video/1111639436?background=1&autoplay=1&loop=1&muted=1"
                                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                            allowfullscreen class="w-100 h-100 rounded-4"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-4 all cgi">
                                    <div class="item">
                                        <iframe
                                            src="https://player.vimeo.com/video/1111639487?background=1&autoplay=1&loop=1&muted=1"
                                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                            allowfullscreen class="w-100 h-100 rounded-4"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-4 all cgi">
                                    <div class="item">
                                        <iframe
                                            src="https://player.vimeo.com/video/1111639541?background=1&autoplay=1&loop=1&muted=1"
                                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                            allowfullscreen class="w-100 h-100 rounded-4"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center flex-wrap buttonsdiv mt-3">
                <div class="me-3">
                    <a href="{{ route('contact') }}" class="btn btn-lg grpahicbbtn">Book a Call<i
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

    <section class="contact_bg">
        <div class="container-fluid py-3 " style="background-color: #032A3E">
            <div class="container ">

                <div class="ms-lg-5 ps-lg-5 ms-md-2 ps-md-2 d-none">
                    <h1 class="text-white fw-bold">Contact us</h1>
                </div>
            </div>
        </div>
        <div class="container py-5 mb-md-5">

            <div class="row justify-content-center">
                {{-- <div class="col-lg-6 col-md-4" style="z-index: 10">
                    <div class="d-flex justify-content-start align-items-center h-100">

                        <p class="contact-msg fw-bold">
                            Let’s Talk
                        </p>
                    </div>
                </div> --}}
                <div class="col-lg-8 col-md-8 py-5">
                    <div class="formcustomcard  rounded-3 py-5 bg-white position-relative" style="z-index: 10">
                        <div class="text-center">
                            <h2 class=" fw-bold mb-4 fs-3 ">Let’s Design Your Next Big Idea</h2>

                            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                                <a href="tel:+918824269821" class="btn btn-danger btn-lg"> <i
                                        class="bi bi-telephone"></i> Book a Call</a>
                                <a href="https://wa.me/918824269821" class="btn btn-success btn-lg"><i
                                        class="bi bi-whatsapp"></i> Chat on WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

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
