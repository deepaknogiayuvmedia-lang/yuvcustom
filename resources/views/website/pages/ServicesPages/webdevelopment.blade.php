@extends('website.layout.websitemain')
@section('title', 'Web Development | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>
    <section class="py-5 py-md-3 position-relative">
        <div class="container py-3 py-md-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start globaltxtcolor text-capitalize">
                        Best custom websites <br /><span class="text-black ">that drive business growth.</span>
                    </div>

                    <div class="text-start py-2">
                        <p class="text-wrap websecondhead">
                            Choosing us for your web development needs means selecting a service that combines technical
                            expertise with creative flair. Whether you need an engaging corporate website, a dynamic
                            e-commerce platform, or a complex web application, our approach is always customized to meet
                            your specific business objectives. A website is not merely an online brochure; it is an
                            essential extension of your brand and a powerful tool for engaging with your audience.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  webbbtn">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <img class="webimage" src="{{ asset('assets/websiteAssets/images/services/webdev1.webp') }}"
                        alt="webdev">
                        
                </div> --}}

                <div
                    class="col-lg-6 col-md-12 pt-lg-5 mt-lg-3 pt-0 pe-lg-5  animate-right position-relative jaydeskpa dding">

                    <div class="container1">
                        <img src="https://crmlanding.in/assets/images/hero/bg/manufactbgline.png" class="position-absolute"
                            id="img_bg">
                        <img src="https://crmlanding.in/assets/images/hero/bg/manufactbgeff.png"
                            class="position-absolute img-fluid" id="img_bgeff">
                        <div class="herocircle-container position-relative z-5">
                            <div class="herorcg-circle mx-lg-0 mx-2 flex-column" style="order: 3;">
                                <img src="https://crmlanding.in/assets/images/hero/bg/finwhiteicon.png" class="img-fluid">
                                <div class="sliderhead">Finance</div>
                            </div>
                            <div class="herorcg-circle mx-lg-0 mx-2 flex-column" style="order: 4;">
                                <img src="https://crmlanding.in/assets/images/hero/bg/realwhiteicon.png" class="img-fluid">
                                <div class="sliderhead">Real Estate</div>
                            </div>
                            <div class="herorcg-circle mx-lg-0 mx-2 flex-column" style="order: 0;">
                                <img src="https://crmlanding.in/assets/images/hero/bg/autowhiteicon.png" class="img-fluid">
                                <div class="sliderhead">Automotive</div>
                            </div>
                            <div class="herorcg-circle mx-lg-0 mx-2 flex-column" style="order: 1;">
                                <img src="https://crmlanding.in/assets/images/hero/bg/rcgwhiteicon.png" class="img-fluid">
                                <div class="sliderhead">RCG</div>
                            </div>
                            <div class="herorcg-circle mx-lg-0 mx-2 flex-column active" style="order: 2;">
                                <img src="https://crmlanding.in/assets/images/hero/bg/manufactureicon.png"
                                    class="img-fluid">
                                <div class="sliderhead">Manufacturing</div>
                            </div>
                        </div>

                        <div class="herocard herocard-outjay herocard1 active" id="jayho1">
                            <img id="herocard1-img" src="https://crmlanding.in/assets/images/hero/bg/manufacturing1.jpg"
                                class="img-fluid" alt="Image 1">
                        </div>
                        <div class="herocard herocard-outjay herocard2 active" id="jayho2">
                            <img id="herocard2-img" src="https://crmlanding.in/assets/images/hero/bg/manufacturing2.jpg"
                                class="img-fluid" alt="Image 2">
                        </div>
                        <div class="herocard herocard-outjay herocard3 active" id="jayho3">
                            <img id="herocard3-img" src="https://crmlanding.in/assets/images/hero/bg/manufacturing3.jpg"
                                class="img-fluid" alt="Image 3">
                        </div>
                        <div class="herocard herocard-outjay herocard4 active" id="jayho4">
                            <img id="herocard4-img" src="https://crmlanding.in/assets/images/hero/bg/manufacturing4.jpg"
                                class="img-fluid" alt="Image 4">
                        </div>
                    </div>




                </div>
            </div>

        </div>


    </section>

    <section class="section py-4 position-relative">
        <div class="header-marquee runner js-runner">
            <div class="runner-start">
                <div class="js-runner-content">
                    <div class="marquee-line">
                        <span class="marquee-line_text">Fast, Creative, Reliable Websites</span>
                        <span class="marquee-line_text">Best-Rated UI/UX Web Design Agency</span>
                        <span class="marquee-line_text">5-star Clutch Rating</span>
                        <span class="marquee-line_text">User-Centered Design Websites</span>
                        <span class="marquee-line_text">Award-Winning Web Design</span>
                        <span class="marquee-line_text">AGILE Process</span>
                        <span class="marquee-line_text">M/WBE-Certified</span>
                    </div>
                </div>
            </div>
            <div class="runner-end">
                <div class="js-runner-content">
                    <div class="marquee-line">
                        <span class="marquee-line_text">Fast, Creative, Reliable Websites</span>
                        <span class="marquee-line_text">Best-Rated UI/UX Web Design Agency</span>
                        <span class="marquee-line_text">5-star Clutch Rating</span>
                        <span class="marquee-line_text">User-Centered Design Websites</span>
                        <span class="marquee-line_text">Award-Winning Web Design</span>
                        <span class="marquee-line_text">AGILE Process</span>
                        <span class="marquee-line_text">M/WBE-Certified</span>
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
    </section>

    <section class="position-relative">
        <div class="container-fluid p-md-5">
            <div class="row px-md-5 px-3">
                <div>Expertise</div>
                <span>
                    <hr class="w-25 me-3">
                </span>
                <div class="text-start fs-2 w-md-50">
                    Yuvmedia offers high-end web design expertise, tailored to meet your unique business needs.
                </div>

            </div>
            <div class="row mt-3 g-5 px-md-5 px-3">
                <div class="col-md-4">
                    <div class="rounded-4 shadow-sm p-5 bg-secondary-subtle h-100" data-aos="fade-up"
                        data-aos-duration="500">
                        <div>
                            01 <i class="bi bi-chevron-compact-right"></i>
                        </div>
                        <div class="fs-1 fw-medium my-3 ">
                            Wordpress Website
                        </div>
                        <hr class="w-50">
                        <div class="text-dark lh-sm">
                            Yuvmedia’s service to design and develop WordPress websites is a collaborative process that
                            involves an initial consultation to understand the client’s goals and preferences, website
                            design, development, testing, and launch. The team uses WordPress to create a responsive,
                            scalable, and optimized website that reflects the client’s brand and incorporates features
                            as
                            needed. Yuvmedia also provides ongoing maintenance and support services to ensure that the
                            website remains up-to-date and secure.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 shadow-sm p-5 bg-secondary-subtle h-100" data-aos="fade-up"
                        data-aos-duration="1000">
                        <div>
                            02 <i class="bi bi-chevron-compact-right"></i>
                        </div>
                        <div class="fs-1 fw-medium my-3">
                            Website Support
                        </div>
                        <hr class="w-50">
                        <div class="text-dark lh-sm">
                            Yuvmedia offers website support and maintenance services, including updates and backups,
                            security
                            measures, hosting on our servers, and technical support. These services are designed to keep
                            client websites up-to-date, secure, and running smoothly, while freeing clients from the
                            hassle
                            of managing their website themselves
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 shadow-sm p-5 bg-secondary-subtle h-100" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div>
                            03 <i class="bi bi-chevron-compact-right"></i>
                        </div>
                        <div class="fs-1 fw-medium my-3">
                            Mobile-Responsive Websites
                        </div>
                        <hr class="w-50">
                        <div class="text-dark lh-sm">
                            Yuvmedia’s service to design and develop WordPress websites is a collaborative process that
                            involves an initial consultation to understand the client’s goals and preferences, website
                            design, development, testing, and launch. The team uses WordPress to create a responsive,
                            scalable, and optimized website that reflects the client’s brand and incorporates features
                            as
                            needed. Yuvmedia also provides ongoing maintenance and support services to ensure that the
                            website remains up-to-date and secure.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 shadow-sm p-5 bg-secondary-subtle h-100" data-aos="fade-up"
                        data-aos-duration="500">
                        <div>
                            04 <i class="bi bi-chevron-compact-right"></i>
                        </div>
                        <div class="fs-1 fw-medium my-3">
                            Custom Design
                        </div>
                        <hr class="w-50">
                        <div class="text-dark lh-sm">
                            Tired of boring old themes applied for your company website? Our team will never start your
                            project from any theme or previous website design. All designs crafted by Yuvmedia are
                            custom
                            and
                            unique. Stand apart from your competition with a custom bespoke website designed to tell
                            your
                            unique story.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 shadow-sm p-5 bg-secondary-subtle h-100" data-aos="fade-up"
                        data-aos-duration="1000">
                        <div>
                            05 <i class="bi bi-chevron-compact-right"></i>
                        </div>
                        <div class="fs-1 fw-medium my-3">
                            Corporate Websites
                        </div>
                        <hr class="w-50">
                        <div class="text-dark lh-sm">
                            Yuvmedia’s service to design and develop corporate websites involves an initial consultation
                            to
                            understand the client’s business goals and website requirements, website design that
                            incorporates the client’s brand elements and focuses on user experience, website development
                            using WordPress and incorporation of necessary features, and content creation. The end
                            result is
                            a custom website that reflects the client’s brand and meets their specific corporate needs.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 shadow-sm p-5 bg-secondary-subtle h-100" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div>
                            06 <i class="bi bi-chevron-compact-right"></i>
                        </div>
                        <div class="fs-1 fw-medium my-3">
                            Brochure Websites
                        </div>
                        <hr class="w-50">
                        <div class="text-dark lh-sm">
                            Our brochure websites are classy, eye-catching, and speak to your customers. We design and
                            develop responsive websites to feature your products and services in sync with the latest
                            design
                            trends, your brand, and your target audience.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 shadow-sm p-5 bg-secondary-subtle h-100" data-aos="fade-up"
                        data-aos-duration="500">
                        <div>
                            07 <i class="bi bi-chevron-compact-right"></i>
                        </div>
                        <div class="fs-1 fw-medium my-3">
                            Landing Pages

                        </div>
                        <hr class="w-50">
                        <div class="text-dark lh-sm">
                            We craft stunning effective landing pages that have one goal in mind – bringing your CTA
                            (Call
                            to Action) to your customer. Conversion, testing, improvement. We learn and adapt to
                            minimize
                            distractions as we smoothly convert your viewers into your paying customers.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 shadow-sm p-5 bg-secondary-subtle h-100" data-aos="fade-up"
                        data-aos-duration="1000">
                        <div>
                            08 <i class="bi bi-chevron-compact-right"></i>
                        </div>
                        <div class="fs-1 fw-medium my-3">
                            E-commerce Websites
                        </div>
                        <hr class="w-50">
                        <div class="text-dark lh-sm">
                            With the growth of online shopping, e-commerce websites are in high demand. Businesses
                            selling
                            products or services can create a website to showcase their offerings and allow customers to
                            purchase online.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded-4 shadow-sm p-5 bg-secondary-subtle h-100" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div>
                            06 <i class="bi bi-chevron-compact-right"></i>
                        </div>
                        <div class="fs-1 fw-medium my-3">
                            Animated Website
                        </div>
                        <hr class="w-50">
                        <div class="text-dark lh-sm">
                            Experience the power of a dynamic online presence with Yuvmedia’s Animated Websites. Our
                            team of
                            skilled designers and developers can help bring your website to life with stunning graphics
                            and
                            seamless animations that captivate your audience. By creating an engaging user experience,
                            you
                            can boost your brand’s online presence, increase conversions, and stay ahead of the
                            competition.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="wrapper container">
            <div class="citebox js-karaoke">
                <div class="citebox-content js-karaoke-content">
                    <span>We pride ourselves on </span>
                    <span>top-tier design practices, </span>
                    <span>where aesthetic and </span>
                    <span>usability both play a&nbsp;key&nbsp;role. </span>
                </div>
                <div class="citebox-mask js-karaoke-mask">
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init aos-animate">
                        We pride ourselves on
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        top-tier design practices,
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        where aesthetic and
                    </span>
                    <span data-aos="true" data-aos-offset="164.66666666666666" class="aos-init">
                        usability both play a&nbsp;key&nbsp;role.
                    </span>
                </div>
            </div>
        </div>
    </div>

    <section class="position-relative py-5">
        <div class="container">
            <div class="row ">
                <div>Process</div>
                <span>
                    <hr class="w-25 me-3">
                </span>


            </div>
            {{-- discovery --}}
            <div class="row mt-3 g-5 px-md-5 px-3" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="col-md-1 col-3">
                    <div class="fs-3 fw-light rounded-pill p-2  bg-secondary-subtle text-center mt-3n">
                        01
                    </div>
                </div>
                <div class="col-md-11 pt-md-4 mt-3 mt-md-5">
                    <div class="fs-1 fw-medium">
                        Discovery
                    </div>
                    <hr class="w-75 me-3">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-underline processtabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="Creative-tab" data-bs-toggle="tab"
                                    data-bs-target="#Creative" type="button" role="tab" aria-controls="Creative"
                                    aria-selected="true">Creative Brief</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Analysis-tab" data-bs-toggle="tab"
                                    data-bs-target="#Analysis" type="button" role="tab" aria-controls="Analysis"
                                    aria-selected="false">Digital
                                    Analysis</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Strategy-tab" data-bs-toggle="tab"
                                    data-bs-target="#Strategy" type="button" role="tab" aria-controls="Strategy"
                                    aria-selected="false">Strategy</button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content my-3 w-75">
                            <div class="tab-pane fade show  active" id="Creative" role="tabpanel"
                                aria-labelledby="Creative-tab" tabindex="0">To deeper understand your objectives
                                with
                                the new website – we invite you to
                                complete our custom and proprietary Creative Brief as a first step to the design of your
                                new
                                website. Geared for results, your custom Brief will include questions about your
                                audience,
                                goals, CTAs, and your definition of success for our bespoke work.</div>
                            <div class="tab-pane fade " id="Analysis" role="tabpanel" aria-labelledby="Analysis-tab"
                                tabindex="0">Understanding the purpose of your
                                website is vital to our success – we begin
                                the process by discussing your new website’s goals and audience. After, we craft a
                                strategy
                                to meet or exceed your objectives with analytics and cognitive behavior in mind.</div>
                            <div class="tab-pane fade " id="Strategy" role="tabpanel" aria-labelledby="Strategy-tab"
                                tabindex="0">Having analyzed your industry,
                                references, and industry direction – we
                                devise a strong directional strategy for the next steps of the project and draw up a
                                plan of
                                the meeting schedule to follow. Our strategy includes visual direction and team
                                brainstorming.</div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- design --}}
            <div class="row mt-3 g-5 px-md-5 px-3" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="col-md-1 col-3">
                    <div class="fs-3 fw-light rounded-pill p-2  bg-secondary-subtle text-center mt-3n">
                        02
                    </div>
                </div>
                <div class="col-md-11 pt-md-4 mt-3 mt-md-5">
                    <div class="fs-1 fw-medium">
                        Design
                    </div>
                    <hr class="w-75 me-3">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-underline processtabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="Ideation-tab" data-bs-toggle="tab"
                                    data-bs-target="#Ideation" type="button" role="tab" aria-controls="Ideation"
                                    aria-selected="true">Concept Ideation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Experience-tab" data-bs-toggle="tab"
                                    data-bs-target="#Experience" type="button" role="tab"
                                    aria-controls="Experience" aria-selected="false">UX - Experience Design</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Interface-tab" data-bs-toggle="tab"
                                    data-bs-target="#Interface" type="button" role="tab" aria-controls="Interface"
                                    aria-selected="false">UI - Interface Design</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Prototype-tab" data-bs-toggle="tab"
                                    data-bs-target="#Prototype" type="button" role="tab" aria-controls="Prototype"
                                    aria-selected="false">Prototype</button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content my-3 w-75">
                            <div class="tab-pane fade show  active" id="Ideation" role="tabpanel"
                                aria-labelledby="Ideation-tab" tabindex="0">
                                As a cohesive multidisciplinary team, our web designers collaborate with our branding
                                team
                                to ensure your website expresses your every brand essence and desire. We utilize
                                knowledge
                                transfer and design trends to understand your industry and craft a web design to help
                                your
                                business stand out.
                            </div>
                            <div class="tab-pane fade " id="Experience" role="tabpanel" aria-labelledby="Experience-tab"
                                tabindex="0">
                                Flowcharts and wireframes identify user motivation and define the hierarchy of items on
                                a
                                site based on your audience’s needs. We experiment with cutting-edge innovation and
                                design
                                principles to elevate your website to the top of your industry.
                            </div>
                            <div class="tab-pane fade " id="Interface" role="tabpanel" aria-labelledby="Interface-tab"
                                tabindex="0">
                                Next, we build modern high-fidelity design screens that tell a story and reflect your
                                newfound web design direction. This meticulous process expands into multiple device
                                sizes
                                and web design breakpoints.
                            </div>
                            <div class="tab-pane fade " id="Prototype" role="tabpanel" aria-labelledby="Prototype-tab"
                                tabindex="0">
                                As a final step in our detailed design process, we create clickable animated prototypes
                                to
                                walk the client through what our vision of the web design will be and reference and
                                additional animations we envision (or even create them using professional motion
                                software).
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- Development --}}
            <div class="row mt-3 g-5 px-md-5 px-3" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="col-md-1 col-3">
                    <div class="fs-3 fw-light rounded-pill p-2  bg-secondary-subtle text-center mt-3n">
                        03
                    </div>
                </div>
                <div class="col-md-11 pt-md-4 mt-3 mt-md-5">
                    <div class="fs-1 fw-medium">
                        Development
                    </div>
                    <hr class="w-75 me-3">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-underline processtabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="Architecture-tab" data-bs-toggle="tab"
                                    data-bs-target="#Architecture" type="button" role="tab"
                                    aria-controls="Architecture" aria-selected="true">Systems Architecture</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Integrations-tab" data-bs-toggle="tab"
                                    data-bs-target="#Integrations" type="button" role="tab"
                                    aria-controls="Integrations" aria-selected="false">Full Stack and CMS Integrations
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="QA-tab" data-bs-toggle="tab" data-bs-target="#QA"
                                    type="button" role="tab" aria-controls="QA" aria-selected="false">QA</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Launch-tab" data-bs-toggle="tab" data-bs-target="#Launch"
                                    type="button" role="tab" aria-controls="Launch"
                                    aria-selected="false">Launch</button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content my-3 w-75">
                            <div class="tab-pane fade show  active" id="Architecture" role="tabpanel"
                                aria-labelledby="Architecture-tab" tabindex="0">
                                We thoughtfully discuss and decide the fundamental organization of a the backend system
                                that
                                will be optimal for your website. Selecting the most elegant of solutions to effectively
                                reach the desired design solution in the allotted timeline – we proceed to the
                                development
                                stage.
                            </div>
                            <div class="tab-pane fade " id="Integrations" role="tabpanel"
                                aria-labelledby="Integrations-tab" tabindex="0">
                                We are skilled in a variety of programming languages to provide you with flexibility for
                                your site. Unlike many web design companies that utilize outdated approaches and
                                templates,
                                all our work is entirely custom and we specialize in headless CMS as a back-end-only
                                content
                                management system, making website management and content creation easy.
                            </div>
                            <div class="tab-pane fade " id="QA" role="tabpanel" aria-labelledby="QA-tab"
                                tabindex="0">
                                Upon design completion, the website undergoes rigorous testing which utilizes the most
                                state-of-the-art technologies to report and expedite any design inconsistencies and
                                updates
                                needed.
                            </div>
                            <div class="tab-pane fade " id="Launch" role="tabpanel" aria-labelledby="Launch-tab"
                                tabindex="0">
                                The most exciting of steps, we walk our clients through each and every step of the
                                launch
                                process and ensure nothing is overlooked. In the strictest of disciplines, website
                                launches
                                are the strictest!
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- Support --}}
            <div class="row mt-3 g-5 px-md-5 px-3" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="col-md-1 col-3">
                    <div class="fs-3 fw-light rounded-pill p-2  bg-secondary-subtle text-center mt-3n">
                        04
                    </div>
                </div>
                <div class="col-md-11 pt-md-4 mt-3 mt-md-5">
                    <div class="fs-1 fw-medium">
                        Support
                    </div>
                    <hr class="w-75 me-3">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-underline processtabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="Maintenance-tab" data-bs-toggle="tab"
                                    data-bs-target="#Maintenance" type="button" role="tab"
                                    aria-controls="Maintenance" aria-selected="true">Maintenance and Updates</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Performance-tab" data-bs-toggle="tab"
                                    data-bs-target="#Performance" type="button" role="tab"
                                    aria-controls="Performance" aria-selected="false">Performance Monitoring
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Training-tab" data-bs-toggle="tab"
                                    data-bs-target="#Training" type="button" role="tab" aria-controls="Training"
                                    aria-selected="false">Robust Training</button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content my-3 w-75">
                            <div class="tab-pane fade show  active" id="Maintenance" role="tabpanel"
                                aria-labelledby="Maintenance-tab" tabindex="0">
                                The relationship between a web design company and its clients should not end with the
                                launch
                                of a website. We ensure that your site continues working for you by maintaining secure
                                hosting and providing daily data backups and security scans. We are also available for
                                any
                                updates, improvements, or expansions of your website.
                            </div>
                            <div class="tab-pane fade " id="Performance" role="tabpanel"
                                aria-labelledby="Performance-tab" tabindex="0">
                                Every project we build has performance and security in mind. We exceed modern web
                                standards
                                by optimizing accessibility, usability, responsiveness across platforms, and organic
                                search.
                                These factors not only improve the user’s experience but also drive sales, decrease
                                potential legal issues and help your brand grow.
                            </div>
                            <div class="tab-pane fade " id="Training" role="tabpanel" aria-labelledby="Training-tab"
                                tabindex="0">
                                We ensure the process of creating and maintaining your website is as simple as possible.
                                Part of our process teaches you the intricacies of your website to translate our
                                knowledge
                                to you. We provide training videos, guides, and/or on-site training to help your team
                                get up
                                to speed with your new website.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="text-center webheading">
                    Complete Web Solutions <span class="text-primary fw-bold">for Your Business</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap webcontentsecond">
                        Our range of web services is designed to help your business thrive online. From building
                        responsive
                        and e-commerce websites to handling hosting and domain registration, we’ve got you covered.
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="">
                    <div class="d-md-flex flex-wrap customtablink align-items-start">
                        <div class="col-lg-4 col-12">
                            <div class="nav flex-column nav-pills me-3 d-flex justify-content-center" id="v-pills-tab"
                                role="tablist" aria-orientation="vertical">
                                <button class="nav-link active my-2 text-nowrap py-3 fs-4 fw-medium" id="v-pills-home-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true">Responsive
                                    Websites</button>
                                <button class="nav-link my-2 text-nowrap py-3 fs-4 fw-medium" id="v-pills-profile-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                    role="tab" aria-controls="v-pills-profile" aria-selected="false">E-commerce
                                    Websites</button>
                                <button class="nav-link my-2 text-nowra py-3 fs-4 fw-medium" id="v-pills-messages-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"
                                    role="tab" aria-controls="v-pills-messages" aria-selected="false">Web-Hosting
                                    & Domain</button>
                                <button class="nav-link my-2 text-nowrap py-3 fs-4 fw-medium" id="v-pills-settings-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button"
                                    role="tab" aria-controls="v-pills-settings" aria-selected="false">Website
                                    Maintenance</button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <div class="customtabcard">
                                        <div class="card-body text-start">
                                            <p class="fw-bold text-start customcardheading">Responsive Websites</p>
                                            <p class="card-text text-start text-wrap customcardcontent">
                                                At Yuvmedia, we specialize in creating responsive websites that
                                                seamlessly
                                                adapt to any device, ensuring an optimal user experience. Our responsive
                                                design approach helps businesses reach a wider audience and provides a
                                                consistent experience for every visitor. Partner with us to elevate your
                                                online presence with a website that looks great and performs flawlessly,
                                                no
                                                matter how it's accessed.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab" tabindex="0">
                                    <div class="customtabcardtwo">
                                        <div class="card-body text-start">
                                            <p class="fw-bold text-start customcardheading">E-commerce Websites</p>
                                            <p class="card-text text-start text-wrap customcardcontent">
                                                E-commerce websites are digital platforms for businesses to sell
                                                products
                                                and services directly to consumers over the Internet. They offer a
                                                convenient shopping experience with user-friendly interfaces, secure
                                                payment
                                                gateways, and features like product descriptions and customer reviews.
                                                Businesses can expand their reach, boost sales, and establish a strong
                                                online presence through an e-commerce website.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab" tabindex="0">
                                    <div class="customtabcardthree">
                                        <div class="card-body text-start">
                                            <p class="fw-bold text-start customcardheading">Web-Hosting & Domain
                                                Registration</p>
                                            <p class="card-text text-start text-wrap customcardcontent">
                                                Our web hosting services guarantee that your website is consistently
                                                online
                                                and running smoothly, ensuring a smooth experience for your visitors.
                                                With a
                                                variety of hosting plans designed to fit different requirements, we
                                                cater to
                                                businesses of all sizes, ensuring excellent performance and security.
                                                Registering a domain with Yuv Media is quick and hassle-free. Our
                                                process
                                                helps you secure the perfect domain name for your brand, whether you're
                                                launching a new website or transferring an existing one. Our dedicated
                                                support team is here to assist you every step of the way.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab" tabindex="0">
                                    <div class="customtabcardfour">
                                        <div class="card-body text-start">
                                            <p class="fw-bold text-start customcardheading">Website Maintenance &
                                                Overhaul
                                            </p>
                                            <p class="card-text text-start text-wrap customcardcontent">
                                                At Yuv Media, we offer comprehensive website maintenance and overhaul
                                                services to ensure your digital platform runs smoothly. Our team
                                                performs
                                                regular updates, security checks, and optimizations to enhance user
                                                experience and drive engagement. Trust us to keep your website a
                                                powerful
                                                tool for business success.
                                            </p>
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

    <section class="position-relative bannerbg">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center webheading3">
                    Work With the <span class="websubheading3">Latest Technology</span>
                </div>
                <div class="text-center fs-5">
                    <p class="text-wrap webcontent3">
                        We are a world-class Web Development Services provider that incorporates versatile, customized,
                        and
                        aesthetic attributes to meet the business objectives of our customers.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/rjs-150x150.webp') }}" alt="service bg"
                                class="mb-3 reactimg" style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">React</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/js-150x150.webp') }}" alt="service bg"
                                class="mb-3 jsimg" style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Javascript</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/html-5-150x150.webp') }}"
                                alt="service bg" class="mb-3 htmlimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">HTML</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/css3-150x150.webp') }}" alt="service bg"
                                class="mb-3 cssimg" style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">CSS</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/bootstarp-150x150.webp') }}"
                                alt="service bg" class="mb-3 bootstrapimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Bootstrap</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/angular-150x150.webp') }}"
                                alt="service bg" class="mb-3 angularimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Angular</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/python-150x150.webp') }}"
                                alt="service bg" class="mb-3 pythonimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Python</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/dotnet-core-150x150.webp') }}"
                                alt="service bg" class="mb-3 dotnetcoreimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">.NET Core</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/csharp-150x150.webp') }}"
                                alt="service bg" class="mb-3 chashimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">C#</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/dotnet-mvc-150x150.webp') }}"
                                alt="service bg" class="mb-3 dotnetmvcimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">.NET MVC</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/dotnet-mvc-150x150.webp') }}"
                                alt="service bg" class="mb-3 dotnetimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">.NET</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/php-150x150.webp') }}" alt="service bg"
                                class="mb-3 phpimg" style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/java-150x150.webp') }}"
                                alt="service bg" class="mb-3 javaimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">JAVA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/shopify-150x150.webp') }}"
                                alt="service bg" class="mb-3 shopifyimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Shopify</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/wordpress-150x150.webp') }}"
                                alt="service bg" class="mb-3 wordpressimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Wordpress</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/mysql-150x150.webp') }}"
                                alt="service bg" class="mb-3 mysqlimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">MY SQL</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/sql-server-150x150.webp') }}"
                                alt="service bg" class="mb-3 sqlserverimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">SQL Server</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/1_doAg1_fMQKWFoub-6gwUiQ-150x150.png') }}"
                                alt="service bg" class="mb-3 mongodbimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Mongo DB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    <script>
        const circles = document.querySelectorAll('.herorcg-circle');
        let currentIndex = 0; // Tracks the logical active index in the dataset

        const images = [
            ["https://crmlanding.in/assets/images/hero/bg/auto1.jpg",
                "https://crmlanding.in/assets/images/hero/bg/auto2.jpg",
                "https://crmlanding.in/assets/images/hero/bg/auto3.jpg",
                "https://crmlanding.in/assets/images/hero/bg/auto4.jpg"
            ],
            ["https://crmlanding.in/assets/images/hero/bg/rcg1.jpg",
                "https://crmlanding.in/assets/images/hero/bg/rcg2.jpg",
                "https://crmlanding.in/assets/images/hero/bg/rcg3.jpg",
                "https://crmlanding.in/assets/images/hero/bg/rcg4.jpg"
            ],
            ["https://crmlanding.in/assets/images/hero/bg/manufacturing1.jpg",
                "https://crmlanding.in/assets/images/hero/bg/manufacturing2.jpg",
                "https://crmlanding.in/assets/images/hero/bg/manufacturing3.jpg",
                "https://crmlanding.in/assets/images/hero/bg/manufacturing4.jpg"
            ],
            ["https://crmlanding.in/assets/images/hero/bg/finance1.jpg",
                "https://crmlanding.in/assets/images/hero/bg/finance2.jpg",
                "https://crmlanding.in/assets/images/hero/bg/finance3.jpg",
                "https://crmlanding.in/assets/images/hero/bg/finance4.jpg"
            ],
            ["https://crmlanding.in/assets/images/hero/bg/real1.jpg",
                "https://crmlanding.in/assets/images/hero/bg/real2.jpg",
                "https://crmlanding.in/assets/images/hero/bg/real3.jpg",
                "https://crmlanding.in/assets/images/hero/bg/real4.jpg"
            ]
        ];

        const circleactiveimg = [
            "https://crmlanding.in/assets/images/hero/bg/autoicon.png",
            "https://crmlanding.in/assets/images/hero/bg/financeicon.png",
            "https://crmlanding.in/assets/images/hero/bg/manufactureicon.png",
            "https://crmlanding.in/assets/images/hero/bg/financeicon.png",
            "https://crmlanding.in/assets/images/hero/bg/realicon.png"
        ];

        const inactiveImages = [
            "https://crmlanding.in/assets/images/hero/bg/autowhiteicon.png",
            "https://crmlanding.in/assets/images/hero/bg/rcgwhiteicon.png",
            "https://crmlanding.in/assets/images/hero/bg/manuwhiteicon.png",
            "https://crmlanding.in/assets/images/hero/bg/finwhiteicon.png",
            "https://crmlanding.in/assets/images/hero/bg/realwhiteicon.png"
        ];

        const bgimageline = [
            "https://crmlanding.in/assets/images/hero/bg/autobgline.png",
            "https://crmlanding.in/assets/images/hero/bg/rcgbglinenew.png",
            "https://crmlanding.in/assets/images/hero/bg/manufactbgline.png",
            "https://crmlanding.in/assets/images/hero/bg/finbglinenew.png",
            "https://crmlanding.in/assets/images/hero/bg/realbgline.png"
        ];

        const bgeffect = [
            "https://crmlanding.in/assets/images/hero/bg/autobgeff.png",
            "https://crmlanding.in/assets/images/hero/bg/rcgbgeff.png",
            "https://crmlanding.in/assets/images/hero/bg/manufactbgeff.png",
            "https://crmlanding.in/assets/images/hero/bg/finbgeff.png",
            "https://crmlanding.in/assets/images/hero/bg/realbgeff.png"
        ];

        function updateSlider() {
            circles.forEach((circle, index) => {
                const positionIndex = (index - currentIndex + circles.length) % circles.length;

                const isActive = positionIndex === 2;

                circle.classList.toggle('active', isActive);
                const circleImage = circle.querySelector('img');
                circleImage.src = isActive ? circleactiveimg[currentIndex] : inactiveImages[(currentIndex +
                    positionIndex - 2 + circles.length) % circles.length];

                circle.style.order = positionIndex;
            });

            const activeImages = images[currentIndex];
            document.getElementById('herocard1-img').src = activeImages[0];
            document.getElementById('herocard2-img').src = activeImages[1];
            document.getElementById('herocard3-img').src = activeImages[2];
            document.getElementById('herocard4-img').src = activeImages[3];
            document.getElementById('img_bg').src = bgimageline[currentIndex];
            document.getElementById('img_bgeff').src = bgeffect[currentIndex];

            document.querySelectorAll('.herocard').forEach(card => {
                card.classList.remove('active');
                void card.offsetWidth;
                card.classList.add('active');
            });
        }

        function adjustCurrentIndexForPosition3(clickedIndex) {
            const targetPosition = 2;
            currentIndex = (clickedIndex - targetPosition + circles.length) % circles.length;
            updateSlider();
        }

        circles.forEach((circle, index) => {
            circle.addEventListener('click', () => {
                adjustCurrentIndexForPosition3(index);
                resetAutoRotation();
            });
        });

        let autoRotationInterval = setInterval(() => {
            currentIndex = (currentIndex + 1) % images.length;
            updateSlider();
        }, 3000);

        function resetAutoRotation() {
            clearInterval(autoRotationInterval);
            autoRotationInterval = setInterval(() => {
                currentIndex = (currentIndex + 1) % images.length;
                updateSlider();
            }, 3000);
        }

        const container1 = document.querySelector('.container1');

        container1.addEventListener('mouseenter', () => {
            clearInterval(autoRotationInterval);
        });

        container1.addEventListener('mouseleave', () => {
            resetAutoRotation();
        });

        updateSlider();
    </script>
@endsection
