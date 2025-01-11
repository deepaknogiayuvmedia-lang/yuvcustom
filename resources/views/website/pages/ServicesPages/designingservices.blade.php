@extends('website.layout.websitemain')
@section('title', 'Designing Services | ' . config('app.name'))
@section('content')
    {{-- <canvas id="gradient-canvas"></canvas> --}}

    <section class="py-4 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start grpahicheading">
                        Designs That Speak Your <span class="grpahicheadingsub">Brand's Language</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap grpahicsecondhead">
                            At Yuvmedia, we pride ourselves on offering comprehensive and innovative designing services
                            tailored to meet the unique needs of our clients. Our expertise covers a wide range of design
                            disciplines, ensuring that each project we take on is filled with creativity, accuracy, and
                            strategic insight.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap grpahicsecondhead">
                            Every brand has a unique story to tell, and our designs ensure your message is heard loud and
                            clear. We create visually compelling experiences that align perfectly with your brand's identity
                            and vision.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg grpahicbbtn">Contact Us<i
                                    class="bi bi-arrow-right"></i></a>
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
                <div class="service-grid">
                    <div>
                        <div class="service-list js-service-container fadein" data-aos="fade-up"
                            style="min-height: 363.547px;" data-aos-offset="303" data-aos-once="true">
                            <div class="service active js-service" data-service="web-design">
                                <div class="service-caption js-service-caption">Web Design</div>
                                <div class="service-content js-service-content">
                                    <div class="service-tags">
                                        <div class="chips">
                                            <div class="chip">
                                                <a href="#" class="chip-label">Landing</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Brochure
                                                    Site</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Corporate
                                                    Website</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">E-Commerce</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Web
                                                    3.0</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">UI/UX
                                                    Design</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <p>We create world-class websites using modern design practices. Mobile-first
                                            websites and web experiences are essential to the success of your web project.
                                            While maintaining bespoke originality, our team will focus on responsive design
                                            and optimize your website for any device and interface. Your new website will
                                            attract desirable target audiences, boost engagement, drive sales, and increase
                                            the brand value of your business.</p>
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
                                                <a href="#" class="chip-label">Corporate</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Beauty</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">F&amp;B</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Web 3.0</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Hospitality</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Re-Branding</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <p>Our branding team will excel at presenting your business in its best light.
                                            Whether you’re looking to attract a new set of eyes, rekindle an old client
                                            base, or simply refine your business’s identity - our creatives will formulate
                                            the optimal corporate identity, collateral designs, and brand guidelines unique
                                            to your company’s needs. Armed with your new bespoke brand - you will now be
                                            able to captivate engaged new audiences and capitalize on your company’s full
                                            potential. </p>
                                    </div>
                                    <div class="service-action">
                                        <a href="#" class="redlink">
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
                                                <a href="#" class="chip-label">Print
                                                    Graphics</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Conference Event Branding</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Deck
                                                    Designs</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Digital Brand Collateral</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Social Media Designs</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <p>Our innovative graphic design team will create the digital and print designs for
                                            your project. Having both startup and enterprise experience, our designers
                                            consider differing execution and audience demographics when designing a
                                            pixel-perfect graphic for each unique client challenge. Following an existing
                                            brand guideline or a specific reference in mind, our team will deliver a sleek,
                                            clean design within timeline and budget.</p>
                                    </div>
                                    <div class="service-action">
                                        <a href="#" class="redlink">
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
                                        <p>Experienced with top-grade packaging design for a wide range of products from
                                            consumer goods to startup ideas. Your packaging design will exceed all
                                            expectations with fresh yet pragmatic design ideas realistic to produce by the
                                            creatives at DD.NYC®. Packaging design is what makes us fall in love with some
                                            of our favorite products. Make yours a favorite.</p>
                                    </div>
                                    <div class="service-action">
                                        <a href="#" class="redlink">
                                            <span>Learn more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="service js-service" data-service="video-production">
                                <div class="service-caption js-service-caption">Video Production</div>
                                <div class="service-content js-service-content">
                                    <div class="service-tags">
                                        <div class="chips">
                                            <div class="chip">
                                                <a href="#" class="chip-label">Corporate Video Production</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Event Video Production</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Promotional Videos</a>
                                            </div>
                                            <div class="chip">
                                                <a href="#" class="chip-label">Post-Production &amp; Editing</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <p>DD.NYC® specializes in video production since 2015 in Manhattan, our talented
                                            team leverages over 30 years of combined experience working with advertising
                                            agencies and brands to create exceptional visual narratives. We are dedicated to
                                            video excellence, crafting impactful content that authentically engages
                                            audiences and elevates brands.</p>
                                    </div>
                                    <div class="service-action">
                                        <a href="#" class="redlink">
                                            <span>Learn More</span>
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
                                            <a href="#" class="chip-label">Landing</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Brochure
                                                Site</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Corporate
                                                Website</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">E-Commerce</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Web 3.0</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">UI/UX
                                                Design</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>We create world-class websites using modern design practices. Mobile-first websites
                                        and web experiences are essential to the success of your web project. While
                                        maintaining bespoke originality, our team will focus on responsive design and
                                        optimize your website for any device and interface. Your new website will attract
                                        desirable target audiences, boost engagement, drive sales, and increase the brand
                                        value of your business.</p>
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
                                            <a href="#" class="chip-label">Corporate</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Beauty</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">F&amp;B</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Web 3.0</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Hospitality</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Re-Branding</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>Our branding team will excel at presenting your business in its best light. Whether
                                        you’re looking to attract a new set of eyes, rekindle an old client base, or simply
                                        refine your business’s identity - our creatives will formulate the optimal corporate
                                        identity, collateral designs, and brand guidelines unique to your company’s needs.
                                        Armed with your new bespoke brand - you will now be able to captivate engaged new
                                        audiences and capitalize on your company’s full potential. </p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
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
                                            <a href="#" class="chip-label">Print
                                                Graphics</a>
                                        </div>
                                        <div class="chip">
                                            <a href="https://dd.nyc/services/conference-branding/"
                                                class="chip-label">Conference Event Branding</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Deck
                                                Designs</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Digital
                                                Brand Collateral</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Social
                                                Media Designs</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>Our innovative graphic design team will create the digital and print designs for your
                                        project. Having both startup and enterprise experience, our designers consider
                                        differing execution and audience demographics when designing a pixel-perfect graphic
                                        for each unique client challenge. Following an existing brand guideline or a
                                        specific reference in mind, our team will deliver a sleek, clean design within
                                        timeline and budget.</p>
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
                                            <a href="#" class="chip-label">Startup
                                                Product Packaging</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>Experienced with top-grade packaging design for a wide range of products from
                                        consumer goods to startup ideas. Your packaging design will exceed all expectations
                                        with fresh yet pragmatic design ideas realistic to produce by the creatives at
                                        DD.NYC®. Packaging design is what makes us fall in love with some of our favorite
                                        products. Make yours a favorite.</p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="service-content-copy js-service-copy " data-service="video-production">
                            <div class="service-content js-service-content">
                                <div class="service-tags">
                                    <div class="chips">
                                        <div class="chip">
                                            <a href="#" class="chip-label">Corporate Video Production</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Event Video Production</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Promotional Videos</a>
                                        </div>
                                        <div class="chip">
                                            <a href="#" class="chip-label">Post-Production &amp; Editing</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>DD.NYC® specializes in video production since 2015 in Manhattan, our talented team
                                        leverages over 30 years of combined experience working with advertising agencies and
                                        brands to create exceptional visual narratives. We are dedicated to video
                                        excellence, crafting impactful content that authentically engages audiences and
                                        elevates brands.</p>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="redlink">
                                        <span>Learn More</span>
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
                    Our Expertise <span class="fw-bold text-primary ">Spans</span>
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
                            <p class="fw-bold text-start">Graphic Design</p>
                            <p class="card-text text-start text-wrap">Our graphic design services are essential for
                                creating
                                impactful visuals that capture attention and convey messages effectively. Our skilled
                                designers are best at producing eye-catching logos, compelling marketing materials.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/uiux.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">UI/UX Design</p>
                            <p class="card-text text-start text-wrap">User Interface (UI) and User Experience (UX) design
                                is
                                essential for any digital product. At Yuv Media, we specialize in creating user-friendly
                                interfaces to enhance user satisfaction. Our process includes research, wireframing,
                                prototyping, and testing.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/graphic-designer.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Branding and Identity Design</p>
                            <p class="card-text text-start text-wrap">Your brand is more than just a logo; it’s the core of
                                your business and how you connect with your audience. Our branding and identity design
                                services help you create a strong, unique brand. We work with you to develop a comprehensive
                                brand strategy.</p>

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
                            <p class="fw-bold text-start">Motion Graphics and 3D Animation</p>
                            <p class="card-text text-start text-wrap">Motion graphics and 3D animation add a dynamic
                                dimension to your marketing efforts. Our team creates engaging motion graphics and 3D
                                animations for your marketing needs, including explainer videos, promotional content, and
                                animated logos.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="graphicards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/trim.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Video Editing</p>
                            <p class="card-text text-start text-wrap">Video editing is the process of arranging and
                                manipulating video shots to create a cohesive final product, incorporating tasks such as
                                trimming footage, adding transitions, special effects, and syncing audio. It relies on
                                powerful software like Adobe Premiere Pro and DaVinci Resolve.</p>

                        </div>
                    </div>
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
