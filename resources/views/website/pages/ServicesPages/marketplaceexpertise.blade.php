@extends('website.layout.websitemain')
@section('title', 'Market Place Expertise | ' . config('app.name'))
@section('content')
<section style="background-color: #ffffff;" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-start marketheading">
                    E-commerce Marketplace <span class="marketheadingsub">Seller Services</span>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap marketsecondhead">
                        Welcome to our E-Commerce Marketplace Seller Services! We’re here to help you succeed on online marketplaces. Whether you’re just starting out or want to grow your existing business, our services are designed to support you every step of the way.
                    </p>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap marketsecondhead">
                        Our deep knowledge of all leading platforms makes selling your product a seamless experience. We apply the invaluable takeaways from the numerous campaigns we’ve executed for our marketplace clients of distinctive categories.
                    </p>
                </div>
                <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                    <div class="me-3">
                        <a href="#" class="btn btn-lg marketbbtn">Contact Us<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="marketbimage" src="{{ asset('assets/websiteAssets/images/marketheroback.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section style="background-image: url('{{ asset('assets/websiteAssets/images/graphicsectionback.jpg') }}'); background-repeat: no-repeat; background-size: cover;" class="py-5">
    <div class="container py-5 justify-content-center">
        <div class="row">
            <div class="text-center marketheadingsecthree">
                FOCUS <span class="marketheadingsubsecthree">AREAS</span>
            </div>
            <div class="text-center py-2">
                <p class="text-wrap marketsecondheadsecthree">
                    When you partner with us, you gain more than just a video; you receive a captivating story that
                    aligns with your brand’s vision.
                </p>
            </div>
        </div>
        <div class="row gy-4 gx-4">
            <div class="col-md-3">
                <div class="marketcards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/seller.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Seller Account Setup</p>
                        <p class="card-text text-start text-wrap">We set up and optimize your seller profiles on popular platforms such as Amazon, Flipkart, and beyond.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="marketcards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/productlisting.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Product Listing Creation</p>
                        <p class="card-text text-start text-wrap">Our experts will create engaging product listings with high-quality images and descriptions.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="marketcards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/order-fulfillment.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Order Fulfillment</p>
                        <p class="card-text text-start text-wrap">We handle your orders with care, ensuring timely shipping and customer satisfaction.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="marketcards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/businessman.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Marketing and Promotions</p>
                        <p class="card-text text-start text-wrap">We help you increase visibility through effective marketing strategies and promotions.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection