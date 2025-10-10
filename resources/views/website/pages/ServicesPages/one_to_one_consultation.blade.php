@extends('website.layout.websitemain')
@section('title', 'Designing Services | ' . config('app.name'))
@section('content')
    <style>
        .one_to_one_consultation.bg-image {
            background-image: url("{{ asset('assets/websiteAssets/images/one_to_one/6aef033501.jpeg') }}");
            background-size: cover;
        }

        .one_to_one_consultation .ff-btn-submit {
            background-color: #00EEFF !important;
            color: #000000 !important;
        }

        .one_to_one_consultation .brand-logo img {
            height: 100px;
            /* set same height */
            object-fit: contain;

        }

        .one_to_one_consultation .bg-outline-white:hover {
            background-color: white;
            color: #FF0000 !important;
        }

        .one_to_one_consultation .successfully:hover {
            background-color: white;
            color: #00F827 !important;
        }

        .one_to_one_consultation .border-custom-color img {
            width: 60px
        }

        .one_to_one_consultation.Testimonials .border-custom-color {
            height: 493px;
            background-color: #272727;

            @media (width < 576px) {
                height: 629px;
            }
        }

        .one_to_one_consultation .images img {
            object-fit: contain;
        }

        .one_to_one_consultation .images {
            width: 500px;
            height: 100px;
            text-align: center;
            box-shadow: 0px 0px 5px 0.5px #c7c7c7d5;
            padding: 15px;
            border-radius: 20px;
        }

        .one_to_one_consultation .slide-track-right {
            -webkit-animation: scroll 40s linear infinite;
            animation: scroll-right 40s linear infinite;
            display: flex;
            width: calc(300px * 20);
        }

        .one_to_one_consultation .slide-track {
            -webkit-animation: scroll 40s linear infinite;
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(300px * 20);
        }

        @keyframes one_to_one_consultation_scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-300px * 5));
            }
        }

        @keyframes one_to_one_consultation_scroll-right {
            0% {
                transform: translateX(calc(-300px * 5));
            }

            100% {
                transform: translateX(0);
            }
        }
    </style>
    <section class=" py-4 position-relative one_to_one_consultation bg-image py-lg-0">
        <div class="container">
            <div class="row mx-xxl-5 align-items-center">
                <div class="col-12 text-center lh-base">
                    <h1 class=" text-white webheading3 mb-0">Book Your <span style="color:#00eeff"
                            class="websubheading3">Free 30 Min</span></h1>
                    <h1 class="webheading3 text-white">Business Growth Strategy Session</h1>
                    <p class="text-white">We Can Help You In Performance Marketing, Creative Design, Media And Technology
                        Solutions</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/Untitled-1-1024x1024.png') }}" alt=""
                        class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <form action="{{ Route('send.one_to_one_service') }}" id="contact-form" method="post">
                            @csrf
                            <div class="formcustomcard">
                                <div class="card-body">
                                    <div class="row gy-4">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Full Name <span class="text-danger fs-5">*</span>
                                                </label>
                                                <input type="text" name="username" class="form-control customforminput"
                                                    placeholder="Enter Your First Name" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Email <span class="text-danger fs-5">*</span>
                                                </label>
                                                <input required="" type="email" name="email"
                                                    class="form-control customforminput" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Phone/Mobile <span
                                                        class="text-danger fs-5">*</span> </label>
                                                <input type="tel" name="number" class="form-control customforminput"
                                                    placeholder="Enter Phone/Mobile" required="">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Enter City
                                                    <span class="text-danger fs-5">*</span> </label>
                                                <input required="" type="text" name="city"
                                                    class="form-control customforminput" placeholder="Enter Your City"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Business Name</label>
                                                <input type="text" name="business" class="form-control customforminput"
                                                    placeholder="What's Your Business Name">
                                            </div>
                                        </div>


                                        <div class=" col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelid">Select a service <span
                                                        class="text-danger fs-5">*</span>
                                                </label>
                                                <select name="service" class="form-select customforminput"
                                                    id="servicetypeid" required="">
                                                    <option value="">- Select -</option>
                                                    <option value="SEO/GBP">SEO/GBP</option>
                                                    <option value="Meta Ads/Google Ads/Mgid">Meta Ads/Google Ads/Mgid
                                                    </option>
                                                    <option value="Instgram/Youtube/LinkedIn Management">
                                                        Instgram/Youtube/LinkedIn Management</option>
                                                    <option value="Website/APP/CRM/ERP Development">Website/APP/CRM/ERP
                                                        Development</option>
                                                    <option value="Logo/UI Design/Package Design/Label Design">Logo/UI
                                                        Design/Package Design/Label Design</option>
                                                    <option
                                                        value="Amazon/Flipkart/Ebay/Meesho/Myntra/Nyka/Blinkit/Jio Mart">
                                                        Amazon/Flipkart/Ebay/Meesho/Myntra/Nyka/Blinkit/Jio Mart
                                                    </option>
                                                    <option value="Product Shoot/ TVC Ads">Product Shoot/ TVC Ads
                                                    </option>
                                                    <option value="Influencers/Celebrity Outreach">Influencers/Celebrity
                                                        Outreach</option>
                                                    <option value="WhatsApp/Email Marketing">WhatsApp/Email Marketing
                                                    </option>
                                                    <option value="Video Editing/Production">Video Editing/Production
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelid">Choose Your Business Industry<span
                                                        class="text-danger fs-5">*</span>
                                                </label>
                                                <select name="Industry" class="form-select customforminput"
                                                    id="servicetypeid" required="">
                                                    <option value="">- Select -</option>
                                                    <option value="Animal &amp; Pet">Animal &amp; Pet</option>
                                                    <option value="Apparel, Fashion &amp; Jewelry">Apparel, Fashion
                                                        &amp;
                                                        Jewelry</option>
                                                    <option value="Arts &amp; Entertainment">Arts &amp; Entertainment
                                                    </option>
                                                    <option value="Attorneys, Law &amp; Legal">Attorneys, Law &amp;
                                                        Legal
                                                    </option>
                                                    <option value="Automotive (Sales &amp; Rental)">Automotive (Sales
                                                        &amp;
                                                        Rental)</option>
                                                    <option value="Beauty, Cosmetics &amp; Personal Care">Beauty,
                                                        Cosmetics
                                                        &amp; Personal Care</option>
                                                    <option value="Career &amp; Employment">Career &amp; Employment
                                                    </option>
                                                    <option value="Education, Coaching &amp; Instruction">Education,
                                                        Coaching &amp; Instruction</option>
                                                    <option value="Farming, Agriculture &amp; Sustainability">Farming,
                                                        Agriculture &amp; Sustainability</option>
                                                    <option value="Finance, Banks, Investments &amp; Accounting">
                                                        Finance,
                                                        Banks, Investments &amp; Accounting</option>
                                                    <option value="Fitness, Supplements &amp; Vitamins">Fitness,
                                                        Supplements
                                                        &amp; Vitamins</option>
                                                    <option value="Health-Related, Wellness &amp; Medical">
                                                        Health-Related,
                                                        Wellness &amp; Medical</option>
                                                    <option value="Heavy Industry, Energy &amp; Manufacturing">Heavy
                                                        Industry, Energy &amp; Manufacturing</option>
                                                    <option value="Home Improvement, HVAC, Roofing, Furniture, Decor">
                                                        Home
                                                        Improvement, HVAC, Roofing, Furniture, Decor</option>
                                                    <option value="Insurance">Insurance</option>
                                                    <option value="Logistics &amp; Transportation">Logistics &amp;
                                                        Transportation</option>
                                                    <option value="Marketing, Advertising, PR &amp; Digital Services">
                                                        Marketing, Advertising, PR &amp; Digital Services</option>
                                                    <option value="Pharma">Pharma</option>
                                                    <option value="Real Estate">Real Estate</option>
                                                    <option value="Restaurants, Foods &amp; Beverages">Restaurants,
                                                        Foods
                                                        &amp; Beverages</option>
                                                    <option value="Travel, Hotel &amp; Tourism">Travel, Hotel &amp;
                                                        Tourism
                                                    </option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelid">Monthly Marketing Budget?<span
                                                        class="text-danger fs-5">*</span>
                                                </label>
                                                <select name="Budget" class="form-select customforminput" id="servicetypeid"
                                                    required="">
                                                    <option value="">- Select -</option>
                                                    <option value="Below Rs. 1 Lakh">Below Rs. 1 Lakh</option>
                                                    <option value="Rs. 1 Lakh to 2 Lakh">Rs. 1 Lakh to 2 Lakh</option>
                                                    <option value="More Than 2 Lakh">More Than 2 Lakh</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formcustomcardfooter pb-0">
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn ff-btn-submit px-4">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #000000;" class="py-5  one_to_one_consultation">
        <div class="container">
            <div class="row row-gap-4 px-3 mx-xxl-5">
                <div class="col-lg-3 col-6">
                    <div class="bg-white brand-logo text-center px-2 py-1 rounded-3 align-items-center">
                        <img src="{{  asset('assets/websiteAssets/images/one_to_one/MBTPARTNER-1024x536.png') }}"
                            alt="service bg" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="bg-white brand-logo text-center px-2 py-1 rounded-3 align-items-center">
                        <img src="{{  asset('assets/websiteAssets/images/one_to_one/boosmart-partner-meta-logo.webp') }}"
                            alt="service bg" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="bg-white brand-logo text-center px-2 py-1 rounded-3 align-items-center">
                        <img src="{{  asset('assets/websiteAssets/images/one_to_one/amazon-seller-partner.png') }}"
                            alt="service bg" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="bg-white brand-logo text-center px-2 py-1 rounded-3 align-items-center">
                        <img src="{{  asset('assets/websiteAssets/images/one_to_one/Marketing-Partners-logo-H-v03.04-600dpi.png.original-1024x341.webp') }}"
                            alt="service bg" class="img-fluid">
                    </div>
                </div>
                <div class="text-center mt-4 py-3 rounded-4 border border-2"
                    style="background-color: #313131;border-color:#00EEFF !important">
                    <h5 class="webheading3 text-white">We Have <span style="color:#00eeff" class="websubheading3">150+ Local
                            Area Partner</span> All Over India</h5>

                </div>
                <h5 class=" h1 text-white text-center mt-5">Accelerate ROI + Enable Unstoppable Sales = Limitless Growth
                </h5>
                <div class="text-center mt-4 py-3 pt-4 rounded-4 border border-2 mx-0 row"
                    style="background-color: #313131;border-color:#00EEFF !important">
                    <div class="col-lg-6 pe-lg-4">
                        <h3 class=" text-uppercase" style="color: #FF0000;">⚠️WITHOUT growth strategy</h3>
                        <ul class="fs-5 text-white text-start list-unstyled ">
                            <li class="py-3 ps-4 border-bottom border-white">
                                <div class="bg-outline-white rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/x-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> Lack of Knowledge
                                </div>
                            </li>
                            <li class="py-3 ps-4 border-bottom border-white">
                                <div class="bg-outline-white rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/x-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> No customers
                                </div>
                            </li>
                            <li class="py-3 ps-4 border-bottom border-white">
                                <div class="bg-outline-white rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/x-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> Confused Buyers
                                </div>
                            </li>
                            <li class="py-3 ps-4 border-bottom border-white">
                                <div class="bg-outline-white rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/x-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> No Market Research
                                </div>
                            </li>
                            <li class="py-3 ps-4 border-bottom border-white">
                                <div class="bg-outline-white rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/x-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> Anxiety & Frustration
                                </div>
                            </li>
                            <li class="py-3 ps-4 ">
                                <div class="bg-outline-white rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/x-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> Scarcity of Funds
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 ps-lg-4">
                        <h3 class=" text-uppercase" style="color: #00F827;">🤩WITH growth strategy</h3>

                        <ul class="fs-5 text-white text-start list-unstyled ">
                            <li class="py-3 ps-4 border-bottom border-white">
                                <div class=" successfully  rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/check-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> Lack of Knowledge
                                </div>
                            </li>
                            <li class="py-3 ps-4 border-bottom border-white">
                                <div class=" successfully rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/check-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> No customers
                                </div>
                            </li>
                            <li class="py-3 ps-4 border-bottom border-white">
                                <div class=" successfully rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/check-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> Confused Buyers
                                </div>
                            </li>
                            <li class="py-3 ps-4 border-bottom border-white">
                                <div class=" successfully rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/check-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> No Market Research
                                </div>
                            </li>
                            <li class="py-3 ps-4 border-bottom border-white">
                                <div class=" successfully rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/check-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> Anxiety & Frustration
                                </div>
                            </li>
                            <li class="py-3 ps-4 ">
                                <div class=" successfully rounded-2 p-2">
                                    <img src="{{ asset('assets/websiteAssets/images/one_to_one/check-mark.png') }}" alt=""
                                        style="width: 20px;" class="me-3"> Scarcity of Funds
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="one_to_one_consultation py-5">
        <div class="container">
            <div class="row mx-xxl-5 row-gap-lg-4 g-3">
                <h1 class="text-center text-primary mt-4 text-uppercase">Get More Growth, Marketing and Sales</h1>

                <div class="col-lg-3 col-6 ">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-3 flex-lg-row flex-column "
                        style="border-color: #FF6000;box-shadow: 3px 3px 0px #FF6000 ;">
                        <div><img src="{{ asset('assets/websiteAssets/images/one_to_one/asset-management.png') }}" alt="">
                        </div>
                        <div>
                            <h5 class="m-0" style="color: #FF6000;">1-to-1 Initial Consultation</h5>
                            <p class="text-muted m-0">Personalized guidance and assessment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-3 flex-lg-row flex-column "
                        style="border-color: #FF6000;box-shadow: 3px 3px 0px #FF6000 ;">
                        <div> <img
                                src="{{ asset('assets/websiteAssets/images/one_to_one/search-engine-optimization.png') }}"
                                alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #FF6000;">In-depth Marketing Audit & Analysis</h5>
                            <p class="text-muted m-0">Comprehensive evaluation of current marketing efforts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-3 flex-lg-row flex-column "
                        style="border-color: #FF6000;box-shadow: 3px 3px 0px #FF6000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/bullhorn.png') }}" alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #FF6000;">Marketing Strategy Document</h5>
                            <p class="text-muted m-0">A detailed roadmap for DM marketing success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-3 flex-lg-row flex-column "
                        style="border-color: #FF6000;box-shadow: 3px 3px 0px #FF6000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/social-media.png') }}" alt="">
                        </div>
                        <div>
                            <h5 class="m-0" style="color: #FF6000;">Business Growth Strategyn</h5>
                            <p class="text-muted m-0">Aligning DM marketing with overall business objectives.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-3 flex-lg-row flex-column "
                        style="border-color: #FF6000;box-shadow: 3px 3px 0px #FF6000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/app-development.png') }}" alt="">
                        </div>
                        <div>
                            <h5 class="m-0" style="color: #FF6000;">Marketing Budget Guidance</h5>
                            <p class="text-muted m-0">Optimizing resource allocation.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-3 gap-1 flex-lg-row flex-column "
                        style="border-color: #FF6000;box-shadow: 3px 3px 0px #FF6000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/crm-1.png') }}" alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #FF6000;">Competitor Analysis
                            </h5>
                            <p class="text-muted m-0">Understanding the competitive landscape.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-3 gap-1 flex-lg-row flex-column "
                        style="border-color: #FF6000;box-shadow: 3px 3px 0px #FF6000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/graphic-designer.png') }}" alt="">
                        </div>
                        <div>
                            <h5 class="m-0" style="color: #FF6000;">Sales Funnel Creation</h5>
                            <p class="text-muted m-0">Designing a conversion-focused customer journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-3 gap-1 flex-lg-row flex-column "
                        style="border-color: #FF6000;box-shadow: 3px 3px 0px #FF6000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/followers.png') }}" alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #FF6000;">Marketing Road Map</h5>
                            <p class="text-muted m-0">A step-by-step plan for implementation plan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="one_to_one_consultation Testimonials pb-5" style="background-color: #134AA0;">
        <div class="container">
            <div class="row mx-xxl-5 row-gap-4 ">
                <h1 class="text-center text-white mt-4  m-0 text-uppercase">Client <span
                        style="color:#5BFFE8;">Testimonials</span></h1>
                <p class="m-0 text-white text-center mb-4">Let’s hear and watch what our customers are saying about us.</p>

                <div class="col-lg-3 ">
                    <div class="border-custom-color border-3 px-3 h-100  rounded-4 py-5 d-flex justify-content-center flex-column align-items-center gap-3 "
                        style="border-color: #5BFFE8;">
                        <div class="bg-white w-75 rounded-3 overflow-hidden"><img
                                src="{{ asset('assets/websiteAssets/images/one_to_one/Untitled-removebg-preview.webp') }}"
                                alt="" class="w-100">
                        </div>
                        <div>

                            <p class="text-white m-0">From boosting visibility to skyrocketing sales, our work with our
                                client ‘True Tomato’ proves that the right strategy makes all the difference.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border-custom-color  border-0  rounded-4 overflow-hidden ">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/0LuMLDd7IL0?si=SGbG90zSsid-o9Yr"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border-custom-color border-3 px-3 h-100 rounded-4 py-5 d-flex justify-content-center flex-column align-items-center gap-3 "
                        style="border-color: #5BFFE8;">
                        <div class="w-75 rounded-3 overflow-hidden"> <img
                                src="{{ asset('assets/websiteAssets/images/one_to_one/immuno-logo-1024x408.png') }}" alt=""
                                class="w-100"></div>
                        <div>

                            <p class="text-white m-0">In just one month, we helped them skyrocket their sales by optimizing
                                their seller management and enhancing their online visibility on major platforms like Amazon
                                and Flipkart.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border-custom-color border-0   rounded-4  overflow-hidden ">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/zGNLpMC-Hy0?si=XNLf8a0iB_mf88qA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border-custom-color border-3 px-3 h-100 rounded-4 py-5 d-flex justify-content-center flex-column align-items-center gap-3 "
                        style="border-color: #5BFFE8;">
                        <div class="w-75 rounded-3 overflow-hidden"> <img
                                src="{{ asset('assets/websiteAssets/images/one_to_one/aziri.webp') }}" alt="" class="w-100">
                        </div>
                        <div>
                            <p class="text-white m-0">Let’s dive into how our E Commerce client experienced a sales boom
                                through Meta Ads. At YUVMEDIA, we resolve queries and satisfy customers with tailored
                                solutions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="border-custom-color  border-0   rounded-4 overflow-hidden">
                        <video class="h-100 w-100"
                            src="{{ asset('assets/websiteAssets/images/one_to_one/yuvmedia-4.mp4') }}" controls
                            muted></video>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border-custom-color border-3 px-3 h-100 rounded-4 py-5 d-flex justify-content-center flex-column align-items-center gap-3 "
                        style="border-color: #5BFFE8;">
                        <div class="w-75 bg-white rounded-3 overflow-hidden"> <img
                                src="{{ asset('assets/websiteAssets/images/one_to_one/cropped-Realtors-copy-2-127x73-1.png') }}"
                                alt="" class="w-100">
                        </div>
                        <div>
                            <p class="text-white m-0">From 1,734 leads at just ₹68.12/lead to 80% sold-out residential
                                properties, Home City Realtors is soaring high with our expert strategies! 🚀</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border-custom-color border-0  rounded-4 overflow-hidden ">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/d-bOyvg-E_U"
                            title="Home City Realtors Case Study" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="one_to_one_consultation py-5" style="background-color: #FFFFFF;">
        <div class="container px-xxl-5">
            <div class="row mx-xxl-5 px-xxl-5 row-gap-lg-2 g-3">
                <h1 class="text-center text-primary mt-4 text-uppercase">Our Services</h1>
                <p class="m-lg-0 text-center">YUVMEDIA offers a broad spectrum of solutions. We take pride in our expertise
                    in search engines, social media, content advocacy, graphics and videos, as well as numerous other
                    specialized services.</p>
                <div class="col-lg-4 col-6 ">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div><img src="{{ asset('assets/websiteAssets/images/one_to_one/asset-management.png') }}" alt="">
                        </div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">Marketplace Expertise</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img
                                src="{{ asset('assets/websiteAssets/images/one_to_one/search-engine-optimization.png') }}"
                                alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">SEO Services</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/bullhorn.png') }}" alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">Performance Media</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/social-media.png') }}" alt="">
                        </div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">Social Media Marketing</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/app-development.png') }}" alt="">
                        </div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">Web & App Development</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/crm-1.png') }}" alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">CRM & ERP Solutions
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/graphic-designer.png') }}" alt="">
                        </div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">Designing Services</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/followers.png') }}" alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">Influencer Marketing</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/studio.png') }}" alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">GBP Management</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/montage.png') }}" alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">Video Production</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/email-marketing-1.png') }}" alt="">
                        </div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">Email Marketing</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="border-custom-color px-3 h-100 rounded-4 py-3 d-flex align-items-lg-center gap-lg-2 gap-1 flex-lg-row flex-column "
                        style="border-color: #000;box-shadow: 3px 3px 0px #000 ;">
                        <div> <img src="{{ asset('assets/websiteAssets/images/one_to_one/social-2.png') }}" alt=""></div>
                        <div>
                            <h5 class="m-0" style="color: #134AA0;">Whatsapp Marketing</h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="py-5 mx-3 one_to_one_consultation" style="background-color: #FFFFFF;">
        <div class="content_container overflow-hidden py-2">
            <h1 class="text-center pb-4">Our Happy Clients</h1>
            <div class="d-flex align-items-center gap-4 slide-track">
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/101.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/102.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/103.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/104.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/105.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/101.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/102.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/103.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/104.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/105.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/101.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/102.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/103.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/104.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/105.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/101.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/102.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/103.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/104.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/105.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/101.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/102.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/103.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/104.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/105.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
            </div>
            <div class="d-flex align-items-center gap-4 slide-track-right">
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/106.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/107.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/108.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/109.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/110.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/106.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/107.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/108.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/109.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/110.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/106.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/107.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/108.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/109.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/110.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/106.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/107.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/108.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/109.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/110.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/106.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/107.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/108.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/109.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/110.jpg') }}" class="img-fluid w-100 h-auto"
                        alt=""></div>
            </div>
            <div class="d-flex align-items-center gap-4 slide-track">
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/111.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/112.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/113.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/114.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/115.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/111.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/112.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/113.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/114.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/115.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/111.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/112.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/113.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/114.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/115.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/111.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/112.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/113.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/114.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
                <div class="images shadow-none h-auto"><img
                        src="{{ asset('assets/websiteAssets/images/one_to_one/115.jpg') }}" class="img-fluid w-100 h-auto"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 py-md-5 one_to_one_consultation bg-image" id="becomepartner "
        style="background-attachment: fixed;">
        <div class="container px-xxl-5">
            <div class="row mx-xxl-5 px-xxl-5 align-items-center">
                <div class="col-lg-12">
                    <div class="">
                        <p class="text-wrap text-white m-0 joincontentcustom">
                            Contact Us
                        </p>
                    </div>
                    <div class=" h1 mb-4 fw-bold text-center" style="color:#32F1FF">Book Your Free Call Now
                    </div>

                </div>
            </div>
            <div class="row mx-xxl-5 px-xxl-5">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <form action="{{ Route('send.one_to_one_service') }}" id="contact-form" method="post">
                            @csrf
                          
                            <div class="formcustomcard">
                                <div class="card-body">
                                    <div class="row gy-4">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Full Name<span class="text-danger fs-5">*</span>
                                                </label>
                                                <input type="text" name="username" class="form-control customforminput"
                                                    placeholder="Enter Full Name" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Email <span class="text-danger fs-5">*</span>
                                                </label>
                                                <input required="" type="email" name="email"
                                                    class="form-control customforminput" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Phone Number <span
                                                        class="text-danger fs-5">*</span>
                                                </label>
                                                <input required="" type="number" name="number"
                                                    class="form-control customforminput" placeholder="Enter Number">
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Enter City</label>
                                                <input type="text" name="city" class="form-control customforminput"
                                                    placeholder="Enter City">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Business Name</label>
                                                <input type="text" name="business" class="form-control customforminput"
                                                    placeholder="Enter Business Name">
                                            </div>
                                        </div>
                                        <div class=" col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelid">Select a service <span
                                                        class="text-danger fs-5">*</span>
                                                </label>
                                                <select name="service" class="form-select customforminput"
                                                    id="servicetypeid" required="">
                                                    <option value="">- Select -</option>
                                                    <option value="SEO/GBP">SEO/GBP</option>
                                                    <option value="Meta Ads/Google Ads/Mgid">Meta Ads/Google Ads/Mgid
                                                    </option>
                                                    <option value="Instgram/Youtube/LinkedIn Management">
                                                        Instgram/Youtube/LinkedIn Management</option>
                                                    <option value="Website/APP/CRM/ERP Development">Website/APP/CRM/ERP
                                                        Development</option>
                                                    <option value="Logo/UI Design/Package Design/Label Design">Logo/UI
                                                        Design/Package Design/Label Design</option>
                                                    <option
                                                        value="Amazon/Flipkart/Ebay/Meesho/Myntra/Nyka/Blinkit/Jio Mart">
                                                        Amazon/Flipkart/Ebay/Meesho/Myntra/Nyka/Blinkit/Jio Mart
                                                    </option>
                                                    <option value="Product Shoot/ TVC Ads">Product Shoot/ TVC Ads
                                                    </option>
                                                    <option value="Influencers/Celebrity Outreach">Influencers/Celebrity
                                                        Outreach</option>
                                                    <option value="WhatsApp/Email Marketing">WhatsApp/Email Marketing
                                                    </option>
                                                    <option value="Video Editing/Production">Video Editing/Production
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelid">Choose Your Business Industry<span
                                                        class="text-danger fs-5">*</span>
                                                </label>
                                                <select name="Industry" class="form-select customforminput"
                                                    id="servicetypeid" required="">
                                                    <option value="">- Select -</option>
                                                    <option value="Animal &amp; Pet">Animal &amp; Pet</option>
                                                    <option value="Apparel, Fashion &amp; Jewelry">Apparel, Fashion
                                                        &amp;
                                                        Jewelry</option>
                                                    <option value="Arts &amp; Entertainment">Arts &amp; Entertainment
                                                    </option>
                                                    <option value="Attorneys, Law &amp; Legal">Attorneys, Law &amp;
                                                        Legal
                                                    </option>
                                                    <option value="Automotive (Sales &amp; Rental)">Automotive (Sales
                                                        &amp;
                                                        Rental)</option>
                                                    <option value="Beauty, Cosmetics &amp; Personal Care">Beauty,
                                                        Cosmetics
                                                        &amp; Personal Care</option>
                                                    <option value="Career &amp; Employment">Career &amp; Employment
                                                    </option>
                                                    <option value="Education, Coaching &amp; Instruction">Education,
                                                        Coaching &amp; Instruction</option>
                                                    <option value="Farming, Agriculture &amp; Sustainability">Farming,
                                                        Agriculture &amp; Sustainability</option>
                                                    <option value="Finance, Banks, Investments &amp; Accounting">
                                                        Finance,
                                                        Banks, Investments &amp; Accounting</option>
                                                    <option value="Fitness, Supplements &amp; Vitamins">Fitness,
                                                        Supplements
                                                        &amp; Vitamins</option>
                                                    <option value="Health-Related, Wellness &amp; Medical">
                                                        Health-Related,
                                                        Wellness &amp; Medical</option>
                                                    <option value="Heavy Industry, Energy &amp; Manufacturing">Heavy
                                                        Industry, Energy &amp; Manufacturing</option>
                                                    <option value="Home Improvement, HVAC, Roofing, Furniture, Decor">
                                                        Home
                                                        Improvement, HVAC, Roofing, Furniture, Decor</option>
                                                    <option value="Insurance">Insurance</option>
                                                    <option value="Logistics &amp; Transportation">Logistics &amp;
                                                        Transportation</option>
                                                    <option value="Marketing, Advertising, PR &amp; Digital Services">
                                                        Marketing, Advertising, PR &amp; Digital Services</option>
                                                    <option value="Pharma">Pharma</option>
                                                    <option value="Real Estate">Real Estate</option>
                                                    <option value="Restaurants, Foods &amp; Beverages">Restaurants,
                                                        Foods
                                                        &amp; Beverages</option>
                                                    <option value="Travel, Hotel &amp; Tourism">Travel, Hotel &amp;
                                                        Tourism
                                                    </option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelid">Monthly Marketing Budget?<span
                                                        class="text-danger fs-5">*</span>
                                                </label>
                                                <select name="Budget" class="form-select customforminput" id="servicetypeid"
                                                    required="">
                                                    <option value="">- Select -</option>
                                                    <option value="Below Rs. 1 Lakh">Below Rs. 1 Lakh</option>
                                                    <option value="Rs. 1 Lakh to 2 Lakh">Rs. 1 Lakh to 2 Lakh</option>
                                                    <option value="More Than 2 Lakh">More Than 2 Lakh</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="formcustomcardfooter pb-0">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn ff-btn-submit px-4">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection