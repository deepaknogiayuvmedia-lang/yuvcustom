@extends('website.layout.websitemain')
@section('title', 'Market Place Expertise | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>


    <section class="py-5 position-relative bg-white">
        <div class="container hero-info">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="text-center ">
                        Become an Ecommerce Seller <br /> <span class="fw-bold" style="color: #ff9e42">and sell to 50+ Crore
                            customers
                        </span>
                    </h1>
                    <div class="text-center py-2">
                        <p class="text-wrap marketsecondhead">
                            Where anyone can sell and everyone can buy from each other online.
                        </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="hero-video">

                        <!--desk-video-->
                        <video autoplay="" muted="" playsinline="" loop="" class="hero-asset desk-video"
                            poster="https://ondc.org/assets/theme/images/video_img.jpg">
                            <source src="https://ondc.org/assets/theme/video/video-desktop1.mp4" type="video/mp4">
                        </video>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="text-center marketheading">
                        Domains live on the network
                    </div>
                    <div class="py-3">
                        <!-- Nav tabs -->
                        <ul class="nav nav-underline category-selector" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="Food-tab" data-bs-toggle="tab" data-bs-target="#Food"
                                    type="button" role="tab" aria-controls="Food" aria-selected="true">Food &
                                    Beverage</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Grocery-tab" data-bs-toggle="tab" data-bs-target="#Grocery"
                                    type="button" role="tab" aria-controls="Grocery"
                                    aria-selected="false">Grocery</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Fashion-tab" data-bs-toggle="tab" data-bs-target="#Fashion"
                                    type="button" role="tab" aria-controls="Fashion" aria-selected="false">Fashion &
                                    Footwear</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Kitchen-tab" data-bs-toggle="tab" data-bs-target="#Kitchen"
                                    type="button" role="tab" aria-controls="Kitchen" aria-selected="false">Home &
                                    Kitchen</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="electronics-tab" data-bs-toggle="tab"
                                    data-bs-target="#electronics" type="button" role="tab" aria-controls="electronics"
                                    aria-selected="false">Electronics</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="beauty-tab" data-bs-toggle="tab" data-bs-target="#beauty"
                                    type="button" role="tab" aria-controls="beauty" aria-selected="false">Beauty &
                                    Personal Care</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="health-tab" data-bs-toggle="tab" data-bs-target="#health"
                                    type="button" role="tab" aria-controls="health" aria-selected="false">Health &
                                    Wellness</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="giftcards-tab" data-bs-toggle="tab"
                                    data-bs-target="#giftcards" type="button" role="tab" aria-controls="giftcards"
                                    aria-selected="false">Gift Cards</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mobility-tab" data-bs-toggle="tab"
                                    data-bs-target="#mobility" type="button" role="tab" aria-controls="mobility"
                                    aria-selected="false">Mobility</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance"
                                    type="button" role="tab" aria-controls="finance"
                                    aria-selected="false">Financial Services</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="services-tab" data-bs-toggle="tab"
                                    data-bs-target="#services" type="button" role="tab" aria-controls="services"
                                    aria-selected="false">Services</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="agriculture-tab" data-bs-toggle="tab"
                                    data-bs-target="#agriculture" type="button" role="tab"
                                    aria-controls="agriculture" aria-selected="false">Agriculture</button>
                            </li>
                        </ul>



                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Food" role="tabpanel" aria-labelledby="Food-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Continental</span>
                                            <span>Middle Eastern</span>
                                            <span>North Indian</span>
                                            <span>Regional Indian</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>South Indian</span>
                                            <span>Pan-Asian</span>
                                            <span>Tex-Mexican</span>
                                            <span>Healthy Food</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12 ">
                                        <div class="retail-list">
                                            <span>World Cuisines</span>
                                            <span>Desserts</span>
                                            <span>Beverages</span>
                                            <span>Fast Food</span>
                                        </div>
                                    </div>

                                    <div id="rol"></div>
                                </div>
                            </div>

                            <div class="tab-pane" id="Grocery" role="tabpanel" aria-labelledby="Grocery-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Baby Care</span>
                                            <span>Bakery, Cakes &amp; Dairy</span>
                                            <span>Beauty &amp; Hygiene</span>
                                            <span>Beverages</span>
                                            <span>Cleaning &amp; Household</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Eggs, Meat &amp; Fish</span>
                                            <span>Foodgrains</span>
                                            <span>Fruits &amp; Vegetables</span>
                                            <span>Gourmet &amp; World Foods</span>
                                            <span>Kitchen Accessories</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12 ">
                                        <div class="retail-list">
                                            <span>Masala &amp; Seasoning</span>
                                            <span>Oil &amp; Ghee</span>
                                            <span>Snacks &amp; Branded Foods</span>
                                            <span>Stationery</span>
                                            <span>Pet Care</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="Fashion" role="tabpanel" aria-labelledby="Fashion-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Men's Accessories</span>
                                            <span>Men's Apparel</span>
                                            <span>Men's Bags &amp; Luggage</span>
                                            <span>Men's Eyewear</span>
                                            <span>Men's Footwear</span>
                                            <span>Men's Jewellery</span>
                                            <span>Infants Apparel</span>
                                            <span>Infant Care &amp; Accessories</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Women's Accessories</span>
                                            <span>Women's Apparel</span>
                                            <span>Women's Bags &amp; Luggage</span>
                                            <span>Women's Eyewear</span>
                                            <span>Women's Footwear</span>
                                            <span>Women's Jewellery</span>
                                            <span>Infants</span>
                                            <span>Towels &amp; Wrappers</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Kid's Apparel</span>
                                            <span>Kid's Footwear</span>
                                            <span>Kid's Accessories</span>
                                            <span>Kid's Jewellery</span>
                                            <span>Kid's Eyewear</span>
                                            <span>Kid's Bags &amp; Luggage</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="Kitchen" role="tabpanel" aria-labelledby="Kitchen-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Home Decor</span>
                                            <span>Home Furnishings</span>
                                            <span>Furniture</span>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Garden and Outdoor Products</span>
                                            <span>Home Improvement</span>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Cookware and Dining</span>
                                            <span>Storage and Organisation</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane" id="electronics" role="tabpanel" aria-labelledby="electronics-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Audio</span>
                                            <span>Cameras and Camcorders</span>
                                            <span>Computer Peripherals</span>
                                            <span>Desktop and Laptops</span>
                                            <span>Gaming</span>
                                            <span>Mobile Phones </span>
                                            <span>Safety Security</span>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Televisions </span>
                                            <span>Video</span>
                                            <span>Wearable Products</span>
                                            <span>Air Conditioning and Air Cleaners</span>
                                            <span>Health, Home and Personal Care</span>
                                            <span>Heaters</span>
                                            <span>Kitchen Appliances</span>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12 ">
                                        <div class="retail-list">
                                            <span>Lighting &amp; Electric Fans </span>
                                            <span>Refrigerators and Freezers</span>
                                            <span>Vacuum Cleaners</span>
                                            <span>Washing Machines and Accessories</span>
                                            <span>Water Purifiers and Coolers</span>
                                            <span>Inverter &amp; Stabilizer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="beauty" role="tabpanel" aria-labelledby="beauty-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Bath &amp; Body</span>
                                            <span>Feminine Care</span>
                                            <span>Fragrance</span>
                                            <span>Hair Care</span>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Make Up</span>
                                            <span>Men's Grooming</span>
                                            <span>Mom &amp; Baby</span>
                                            <span>Oral Care</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12 ">
                                        <div class="retail-list">
                                            <span>Sexual Wellness &amp; Sensuality</span>
                                            <span>Skin Care</span>
                                            <span>Tools &amp; Accessories</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="health" role="tabpanel" aria-labelledby="health-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="col-md-3 col-sm-3 col-12">
                                        <div class="retail-list">
                                            <span>Pain Relief</span>
                                            <span>Nutrition and Fitness Supplements</span>
                                            <span>Speciality Care</span>
                                            <span>Covid Essentials</span>
                                            <span>Diabetes Control</span>
                                            <span>Healthcare &amp; Fitness Devices</span>
                                            <span>Ayurvedic</span>
                                            <span>Homeopathy</span>
                                            <span>Unani and Siddha</span>
                                            <span>Elder Care</span>
                                            <span>Baby Care</span>
                                            <span class="inactive">Orthopaedic Care</span>
                                            <span>Mobility Aids</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-12">
                                        <div class="retail-list">
                                            <span>Medicated Hair Care</span>
                                            <span>Medicated Skin Care</span>
                                            <span>Speciality Face Cleansers</span>
                                            <span>Gastric Care</span>
                                            <span>ENT Care</span>
                                            <span>Eye Care</span>
                                            <span>Cold and Cough</span>
                                            <span>Sexual Wellness</span>
                                            <span>Feminine Care</span>
                                            <span>Maternity Care</span>
                                            <span>Nursing and Feeding</span>
                                            <span>Hand Wash</span>
                                            <span>Sanitizers</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-12">
                                        <div class="retail-list">
                                            <span>Baby Care - Wipes and Buds</span>
                                            <span>Baby Care - Rash Creams</span>
                                            <span>Baby Care - Diapers and Accessories</span>
                                            <span>Oral Care</span>
                                            <span>Contraceptives</span>
                                            <span class="inactive">Breathe Easy</span>
                                            <span>Health Foods and Drinks</span>
                                            <span>Wound Care and Dressings</span>
                                            <span>Surgicals</span>
                                            <span>Mental Wellness</span>
                                            <span>Gift Voucher</span>
                                            <span>Pain Relieving Ointments</span>
                                            <span>Nutrition and Supplements</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-12">
                                        <div class="retail-list">
                                            <span>Personal and Baby Care</span>
                                            <span>Gastric and Other Concerns</span>
                                            <span>Health Devices</span>
                                            <span>Infant Feeding &amp; Nursing Essentials</span>
                                            <span>Infant Diapers &amp; Toilet Training</span>
                                            <span class="inactive">Infant Health &amp; Safety</span>
                                            <span>Sexual Wellness &amp; Sensuality</span>
                                            <span>Infant Care &amp; Accessories</span>
                                            <span>Infant Bath Accessories</span>
                                            <span>Health &amp; Fitness Equipment</span>
                                            <span class="inactive">Fitness Tracker</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="giftcards" role="tabpanel" aria-labelledby="mobility-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span>Retail Gift Cards</span>
                                            <span>Enterprise Gift Cards</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12 ">
                                        <div class="retail-list">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="mobility" role="tabpanel" aria-labelledby="mobility-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span class="active">Auto</span>
                                            <span class="active">Cabs</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span class="inactive">Flights </span>
                                            <span>Metro Rail</span>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12 ">
                                        <div class="retail-list">
                                            <span class="inactive">Charter</span>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="finance" role="tabpanel" aria-labelledby="finance-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="agri-sub-cat-div">
                                        <div class="retail-list">
                                            <p class="agri-title">Credit</p>
                                            <div class="agri-cnt-div">
                                                <span class="active">Unsecured Personal Loans</span>
                                                <span class="inactive">Unsecured GST Based Invoice Loans</span>
                                                <span class="inactive">Unsecured Purchase Finance</span>
                                                <span class="inactive">Unsecured Working Capital Lines</span>
                                            </div>
                                        </div>
                                        <div class="agri-output agri-inactive retail-list">
                                            <p class="agri-title">Insurance</p>
                                            <div class="agri-cnt-div">
                                                <span class="inactive">Health Insurance</span>
                                                <span class="inactive">Marine / Transit Insurance</span>
                                                <span class="inactive">Motor Insurance</span>
                                                <span class="inactive">Life Insurance</span>
                                            </div>
                                        </div>
                                        <div class="agri-services agri-inactive retail-list">
                                            <p class="agri-title">Investments</p>
                                            <div class="agri-cnt-div">
                                                <span class="active">Mutual Funds</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane" id="services" role="tabpanel" aria-labelledby="services-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="col-sm-4 col-12">
                                        <div class="retail-list">
                                            <span class="inactive">Skilled Service</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 ">
                                        <div class="retail-list">
                                            <span class="inactive">Subscription-Based Solutions</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="agriculture" role="tabpanel" aria-labelledby="agriculture-tab"
                                tabindex="0">
                                <div class="row category-block">
                                    <div class="agri-sub-cat-div">
                                        <div class="agri-input agri-active retail-list">
                                            <p class="agri-title">Input</p>
                                            <div class="agri-cnt-div">
                                                <span class="active">Seed</span>
                                                <span class="active">Pesticide</span>
                                                <span class="active">Fertilizer</span>
                                                <span class="active">Organic Crop Protection</span>
                                                <span class="active">Organic Crop Nutrition</span>
                                                <span class="active">Tools and Machinery</span>
                                                <span class="active">Cattle Feed</span>
                                            </div>
                                        </div>
                                        <div class="agri-output agri-inactive retail-list">
                                            <p class="agri-title">Output</p>
                                            <div class="agri-large-cnt d-flex">
                                                <div class="me-2">
                                                    <span class="inactive">Pulses</span>
                                                    <span class="inactive">Cereals</span>
                                                    <span class="inactive">Oilseeds</span>
                                                    <span class="inactive">Fruits</span>
                                                    <span class="inactive">Vegetables</span>
                                                    <span class="inactive">Spices</span>
                                                    <span class="inactive">Plantation Crop</span>
                                                    <span class="inactive">Flowers</span>
                                                    <span class="inactive">Fibre Crop</span>
                                                    <span class="inactive">Dry fruit</span>
                                                </div>
                                                <div>
                                                    <span class="inactive">Honey</span>
                                                    <span class="inactive">Meat</span>
                                                    <span class="inactive">Milk</span>
                                                    <span class="inactive">Fish</span>
                                                    <span class="inactive">Wool</span>
                                                    <span class="inactive">Sugar Crops</span>
                                                    <span class="inactive">Crop residue</span>
                                                    <span class="inactive">Processing Byproduct</span>
                                                    <span class="inactive">Poultry Product</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="agri-services agri-inactive retail-list">
                                            <p class="agri-title">Services</p>
                                            <div class="agri-cnt-div">
                                                <span class="inactive">Soil Test</span>
                                                <span class="inactive">Water Test</span>
                                                <span class="inactive">Quality Assaying</span>
                                                <span class="inactive">Warehousing</span>
                                                <span class="inactive">Spraying/Drone Services</span>
                                                <span class="inactive">Equipment hiring</span>
                                                <span class="inactive">Financial Services</span>
                                                <span class="inactive">Insurance</span>
                                                <span class="inactive">Agri Advisory</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vertical-legends">
                        <span style="color: #317021;">Active</span>
                        <span>Coming Soon</span>
                        <span class="learn-more-finance d-none"><a href="https://resources.ondc.org/financial-services"
                                target="_blank">Visit - Specs
                                &amp; Resources</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 position-relative ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class=" marketheading text-center">
                        Scale Your Business with Our E-commerce Platform
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/amazon.webp') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Amazon</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/Flipkart.webp') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Flipkart</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto h-100">
                        <img src="{{ asset('assets/websiteAssets/images/services/Meesho.webp') }}"
                            class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Meesho</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{ asset('assets/websiteAssets/images/services/Etsy.webp') }}" class="card-img-top p-3"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Etsy</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class=" marketheading text-center">
                        Roles on the Seller network
                    </div>
                    <div class="py-3 roles-card-wrapper">
                        <!-- Nav tabs -->
                        <ul class="nav nav-underline category-selector  re-define-tab" id="myTab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="Buyer-tab" data-bs-toggle="tab"
                                    data-bs-target="#Buyer" type="button" role="tab" aria-controls="Buyer"
                                    aria-selected="true">Buyer Network Participant</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Seller-tab" data-bs-toggle="tab" data-bs-target="#Seller"
                                    type="button" role="tab" aria-controls="Seller" aria-selected="false">Seller
                                    Network Participant</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Gateway-tab" data-bs-toggle="tab" data-bs-target="#Gateway"
                                    type="button" role="tab" aria-controls="Gateway"
                                    aria-selected="false">Gateway</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Technology-tab" data-bs-toggle="tab"
                                    data-bs-target="#Technology" type="button" role="tab"
                                    aria-controls="Technology" aria-selected="false">Technology Service Provider</button>
                            </li>
                        </ul>



                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Buyer" role="tabpanel" aria-labelledby="Buyer-tab"
                                tabindex="0">

                                <div class="row role-block">
                                    <div class="col-md-6">
                                        <div class="category-info">
                                            <h3>Buyer Network Participant</h3>
                                            <p>
                                                These are customers who browse, shop, and make purchases on eCommerce
                                                platforms. As a marketplace, it's crucial to understand buyer behavior,
                                                preferences, and needs to tailor your products and services effectively to
                                                this group.

                                            </p>
                                            <a id="home-roles-buyer-know-more"
                                                class="new-buuton-link btn btn-outline-primary "
                                                href="{{ route('contact') }}">
                                                Know More
                                                <i class="bi bi-arrow-right ms-2"></i>
                                            </a>
                                            <a id="home-roles-buyer-how-to-join"
                                                class="new-buuton-link btn btn-outline-primary"
                                                href="{{ route('contact') }}">
                                                How to Join
                                                <i class="bi bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="https://ondc.org/assets/theme/images/home-page/home-buyer-asset.jpg?v=20abcc746c"
                                            alt="Buyer Network Participants- seller" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="Seller" role="tabpanel" aria-labelledby="Seller-tab"
                                tabindex="0">
                                <div class="row role-block">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="category-info">
                                            <h3>Seller Network Participant</h3>
                                            <p>
                                                Sellers are the backbone of the marketplace ecosystem. They list their
                                                products or services for sale, manage their inventory, fulfill orders, and
                                                handle customer interactions. Successful sellers engage with the platform’s
                                                tools and services to optimize their presence and boost sales
                                            </p>
                                            <a id="home-roles-buyer-know-more"
                                                class="new-buuton-link btn btn-outline-primary "
                                                href="{{ route('contact') }}">
                                                Know More
                                                <i class="bi bi-arrow-right ms-2"></i>
                                            </a>
                                            <a id="home-roles-buyer-how-to-join"
                                                class="new-buuton-link btn btn-outline-primary"
                                                href="{{ route('contact') }}">
                                                How to Join
                                                <i class="bi bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <img src="https://ondc.org/assets/theme/images/home-page/home-seller-asset.jpg?v=20abcc746c"
                                            alt="Seller Network on seller">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="Gateway" role="tabpanel" aria-labelledby="Gateway-tab"
                                tabindex="0">
                                <div class="row role-block">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="category-info">
                                            <h3>Seller Gateway</h3>
                                            <p>
                                                A gateway acts as the connection point between different parties within the
                                                marketplace. It ensures secure transactions, payment processing, and
                                                facilitates the exchange of information between buyers, sellers, and other
                                                network participants.
                                            </p>
                                            <a id="home-roles-buyer-know-more"
                                                class="new-buuton-link btn btn-outline-primary "
                                                href="{{ route('contact') }}">
                                                Know More
                                                <i class="bi bi-arrow-right ms-2"></i>
                                            </a>
                                            <a id="home-roles-buyer-how-to-join"
                                                class="new-buuton-link btn btn-outline-primary"
                                                href="{{ route('contact') }}">
                                                How to Join
                                                <i class="bi bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <img src="https://ondc.org/assets/theme/images/home-page/home-gateway-asset.jpg?v=20abcc746c"
                                            alt="Business discussion for ecommerce expansion">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="Technology" role="tabpanel" aria-labelledby="Technology-tab"
                                tabindex="0">
                                <div class="row role-block">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="category-info">
                                            <h3>Technology Service Provider</h3>
                                            <p>
                                                Technology service providers offer tools, software, or infrastructure that
                                                help improve the performance and functionality of the marketplace. They
                                                provide services like payment solutions, data analytics, logistics, customer
                                                support, and more, ensuring the smooth operation of the seller network.
                                            </p>
                                            <a id="home-roles-buyer-know-more"
                                                class="new-buuton-link btn btn-outline-primary "
                                                href="{{ route('contact') }}">
                                                Know More
                                                <i class="bi bi-arrow-right ms-2"></i>
                                            </a>
                                            <a id="home-roles-buyer-how-to-join"
                                                class="new-buuton-link btn btn-outline-primary"
                                                href="{{ route('contact') }}">
                                                How to Join
                                                <i class="bi bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <img src="https://ondc.org/assets/theme/images/home-page/home-tsp-asset.jpg?v=20abcc746c"
                                            alt="Be a part of ONDC">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 position-relative ">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-start fs-2 fw-bold">
                    Amazon Business Advisory
                    <span class="text-primary fw-bold">(ABA)</span>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap marketsecondheadsecthree">
                        To assist sellers in expanding their businesses, we offer a premium paid account management product
                        called Amazon Business Advisory (ABA). ABA helps sellers maximize their income potential by
                        utilizing strategic insights and business intelligence. A dedicated account manager with in-depth
                        expertise of their industry is made available to sellers.
                    </p>
                </div>
            </div>

            <div class="row gy-4 gx-4">
                <div class="text-start fs-3 fw-bold">
                    Features and Benefits of ABA

                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/productlisting.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Account Manager</p>
                            <p class="card-text text-start text-wrap">
                                Work directly with an internal account manager to provide innovative ideas and propel your
                                company's expansion.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/order-fulfillment.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Data-driven Business Plan</p>
                            <p class="card-text text-start text-wrap">
                                Take advantage of a personalized account management plan that includes weekly updates to
                                monitor and assess your progress. Get personalized suggestions to enhance the performance
                                and choice of your products.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/businessman.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Account Health Management</p>
                            <p class="card-text text-start text-wrap">
                                Get professional advice and best practices to keep your account in good shape. Dedicated
                                escalation channels ensure that critical issues are immediately addressed.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/seller.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Visibility & Performance Optimization</p>
                            <p class="card-text text-start text-wrap">
                                Increase brand awareness on sites like Amazon by using expert-recommended marketing
                                campaigns and promotional techniques to keep your name at the forefront of consumers' minds.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="container py-5">
            <div class=" row">
                <div class="text-center performanceheading">
                    Marketplace <span class="performanceheadingsub">Portfolio</span>
                </div>

                <div class="marketplace-slider">
                    @for ($i = 1; $i <= 13; $i += 2)
                        <div>
                            <div>
                                <img class="img-fluid p-3 rounded-5 "
                                    src="{{ asset('assets/websiteAssets/images/services/marketplace/' . $i . '.jpeg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="img-fluid p-3 rounded-5"
                                    src="{{ asset('assets/websiteAssets/images/services/marketplace/' . ($i + 1) . '.jpeg') }}"
                                    alt="">
                            </div>
                        </div>
                    @endfor
                </div>


                <div class="d-flex justify-content-center flex-wrap">
                    <div class="me-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg performancebtn">Contact Us <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative bannerbg">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center marketheadingsecthree">
                    What You Gain <span class="text-primary fw-bold">with Our Expertise</span>
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap marketsecondheadsecthree">
                        Unlock growth, drive engagement, and achieve real results with our expert solutions.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gx-4">
                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/seller.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Seller Account Setup</p>
                            <p class="card-text text-start text-wrap">
                                We streamline the process of setting up your seller account, ensuring that all the necessary
                                details are filled out accurately and professionally, so you can hit the ground running on
                                marketplaces like Amazon, Flipkart and others.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/productlisting.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Product Listing Creation</p>
                            <p class="card-text text-start text-wrap">
                                Our team creates compelling and SEO-optimized product listings, including high-quality
                                images, detailed descriptions, and effective keywords, to attract potential customers and
                                boost conversions.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/order-fulfillment.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Order Fulfillment</p>
                            <p class="card-text text-start text-wrap">
                                We help you manage order fulfillment seamlessly, ensuring timely delivery and customer
                                satisfaction, whether you’re handling it in-house or through third-party logistics.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/businessman.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Marketing and Promotions</p>
                            <p class="card-text text-start text-wrap">
                                Our marketing experts develop and execute promotional strategies, including discount
                                campaigns, seasonal promotions, and paid ads, to increase your brand’s visibility and sales
                                on marketplaces.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/businessman.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Product FBA</p>
                            <p class="card-text text-start text-wrap">
                                We guide you through setting up Amazon’s Fulfillment by Amazon (FBA), helping you optimize
                                inventory management, reduce shipping costs, and ensure fast delivery to customers.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/businessman.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Brand Registry and Protection</p>
                            <p class="card-text text-start text-wrap">
                                We assist with Brand Registry and other marketplace protections to safeguard your brand,
                                intellectual property, and listings from counterfeiters and unauthorized sellers.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="marketcards">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/businessman.png') }}" alt="service bg"
                                class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                            <p class="fw-bold text-start">Account Health Management</p>
                            <p class="card-text text-start text-wrap">
                                Our team actively monitors and maintains your account health, keeping track of performance
                                metrics, customer feedback, and policy compliance to prevent issues and ensure long-term
                                success.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        document.querySelectorAll('.nav-link').forEach(function(tab) {
            tab.addEventListener('mouseenter', function() {
                new bootstrap.Tab(tab).show();
            });
        });
    </script>
@endsection
