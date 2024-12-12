@extends('website.layout.websitemain')
@section('title', 'Seach Engine Optimization | ' . config('app.name'))
@section('content')
<section
    style="background-image: url('{{ asset('assets/websiteAssets/images/chat-bg-pattern.png') }}'); background-repeat: repeat;"
    class="py-3 py-md-3">
    <div class="container py-5 py-md-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-start webheadingsectiontwo">
                    Website Development Services : <span
                        class=" webheadingsubsectiontwo text-decoration-underline">Enhance Your Brand's
                        Visibility</span>
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
                        <a href="#" class="btn btn-lg  webbbtn">Contact Us <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="webimage" src="{{ asset('assets/websiteAssets/images/webdevelopfinal.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section style="background-color: #e4f0ff;">
    <div class="container py-5">
        <div class="row">
            <div class="text-center webheading">
                Complete Web Solutions <span class="webheadingsub">for Your Business</span>
            </div>
            <div class="text-center">
                <p class="text-wrap webcontentsecond">
                    Our range of web services is designed to help your business thrive online. From building responsive
                    and e-commerce websites to handling hosting and domain registration, we’ve got you covered.
                </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="">
                <div class="d-md-flex flex-wrap customtablink align-items-start">
                    <div class="col-lg-4 col-12">
                        <div class="nav flex-column nav-pills me-3 d-flex justify-content-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active my-2 text-nowrap" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">Responsive Websites</button>
                            <button class="nav-link my-2 text-nowrap" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">E-commerce Websites</button>
                            <button class="nav-link my-2 text-nowrap" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">Web-Hosting & Domain</button>
                            <button class="nav-link my-2 text-nowrap" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">Website Maintenance</button>
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
                                            At Yuvmedia, we specialize in creating responsive websites that seamlessly
                                            adapt to any device, ensuring an optimal user experience. Our responsive
                                            design approach helps businesses reach a wider audience and provides a
                                            consistent experience for every visitor. Partner with us to elevate your
                                            online presence with a website that looks great and performs flawlessly, no
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
                                            E-commerce websites are digital platforms for businesses to sell products
                                            and services directly to consumers over the Internet. They offer a
                                            convenient shopping experience with user-friendly interfaces, secure payment
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
                                            Our web hosting services guarantee that your website is consistently online
                                            and running smoothly, ensuring a smooth experience for your visitors. With a
                                            variety of hosting plans designed to fit different requirements, we cater to
                                            businesses of all sizes, ensuring excellent performance and security.
                                            Registering a domain with Yuv Media is quick and hassle-free. Our process
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
                                        <p class="fw-bold text-start customcardheading">Website Maintenance & Overhaul
                                        </p>
                                        <p class="card-text text-start text-wrap customcardcontent">
                                            At Yuv Media, we offer comprehensive website maintenance and overhaul
                                            services to ensure your digital platform runs smoothly. Our team performs
                                            regular updates, security checks, and optimizations to enhance user
                                            experience and drive engagement. Trust us to keep your website a powerful
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
<section
    style="background-image: url('{{ asset('assets/websiteAssets/images/chat-bg-pattern.png') }}'); background-repeat: repeat;">
    <div class="container py-5 justify-content-center">
        <div class="row">
            <div class="text-center webheading3">
                Work With the <span class="websubheading3">Latest Technology</span>
            </div>
            <div class="text-center fs-5">
                <p class="text-wrap webcontent3">
                    We are a world-class Web Development Services provider that incorporates versatile, customized, and
                    aesthetic attributes to meet the business objectives of our customers.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/rjs-150x150.webp') }}" alt="service bg"
                            class="mb-3 reactimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">React</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/js-150x150.webp') }}" alt="service bg"
                            class="mb-3 jsimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">Javascript</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/html-5-150x150.webp') }}" alt="service bg"
                            class="mb-3 htmlimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">HTML</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/css3-150x150.webp') }}" alt="service bg"
                            class="mb-3 cssimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">CSS</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/bootstarp-150x150.webp') }}"
                            alt="service bg" class="mb-3 bootstrapimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">Bootstrap</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/angular-150x150.webp') }}"
                            alt="service bg" class="mb-3 angularimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">Angular</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/python-150x150.webp') }}" alt="service bg"
                            class="mb-3 pythonimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">Python</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/dotnet-core-150x150.webp') }}"
                            alt="service bg" class="mb-3 dotnetcoreimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">.NET Core</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/csharp-150x150.webp') }}" alt="service bg"
                            class="mb-3 chashimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">C#</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/dotnet-mvc-150x150.webp') }}"
                            alt="service bg" class="mb-3 dotnetmvcimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">.NET MVC</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/dotnet-mvc-150x150.webp') }}"
                            alt="service bg" class="mb-3 dotnetimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">.NET</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/php-150x150.webp') }}" alt="service bg"
                            class="mb-3 phpimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">PHP</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/java-150x150.webp') }}" alt="service bg"
                            class="mb-3 javaimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">JAVA</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/shopify-150x150.webp') }}"
                            alt="service bg" class="mb-3 shopifyimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">Shopify</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/wordpress-150x150.webp') }}"
                            alt="service bg" class="mb-3 wordpressimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">Wordpress</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/mysql-150x150.webp') }}" alt="service bg"
                            class="mb-3 mysqlimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">MY SQL</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="webcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/techs/sql-server-150x150.webp') }}"
                            alt="service bg" class="mb-3 sqlserverimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center techheading">SQL Server</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
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
@endsection