@extends('website.layout.websitemain')
@section('title', $cityname . ' | ' . config('app.name'))
@section('content')
<section class="py-5">
    <div class="container py-4">
        <div class="card p-4 shadow rounded-4 " style="
            background-image: url('{{ asset('assets/websiteAssets/images/graphicsectionback.jpg') }}'); 
            background-repeat: repeat; background-position: center; background-size: cover">
            <div class="row align-items-center">
                <!-- Left Image Section -->
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/images/Partners/' . $partnersdata->profileimage) }}" alt="Profile Image" class="img-fluid rounded-4" style="max-height: 300px; object-fit: cover;">
                </div>

                <!-- Right Info Section -->
                <div class="col-md-8 mt-4 mt-md-0">
                    <h3 class="fw-bold text-primary mb-1">{{$partnersdata->partnername}}</h3>
                    <p class="text-secondary mb-2">{{$partnersdata->partnertype}}</p>
                    <p class="mb-2">
                        <i class="bi bi-geo-alt-fill me-2 text-primary"></i>{{ ucfirst($partnersdata->city)}}, {{ucfirst($partnersdata->state)}}
                    </p>
                    {{-- <p class="mb-2">
                        <i class="bi bi-envelope-fill me-2 text-primary"></i>{{$partnersdata->partneremail}}
                    </p>
                    <p class="mb-4">
                        <i class="bi bi-telephone-fill me-2 text-primary"></i>+91-{{$partnersdata->partnerphone}}
                    </p> --}}
                    <a href="tel:+918078671648" class="btn btn-primary shadow-sm px-4 py-2 me-2">
                        <i class="bi bi-telephone-fill me-2"></i>Call
                    </a>
                    <a href="https://wa.me/+918078671648" target="_blank" class="btn btn-success shadow-sm px-4 py-2 me-2">
                        <i class="bi bi-whatsapp me-2"></i>WhatsApp
                    </a>
                    <a href="#formsection" class="btn btn-dark shadow-sm px-4 py-2">
                        <i class="bi bi-envelope-fill me-2"></i>Enquiry
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="" style="background-color: #ffffff;">
    <div class="container py-5 py-md-5"">
            <div class=" row align-items-center">
        <div class="col-lg-12">
            <div class="fs-1 fw-bold">
                About
                <span class="globaltxtcolor"> Us</span>
            </div>
            <div class="">
                <p class="text-wrap partnerssecondheadsecthree">
                    {{$partnersdata->aboutuscontent}}
                </p>
            </div>
            {{-- <div class="d-flex justify-content-start flex-wrap">
                <div class="me-0">
                    <a href="{{ route('contact') }}" class="btn btn-lg partnersbtnsecthree">Become Our Partner <i class="bi bi-arrow-right"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
    </div>
</section>

<section class="position-relative py-5">
    <div class="container justify-content-center">
        <div class="row">
            <div class="globaltxtcolor text-center">
                Consulting Services
            </div>
            <p class="text-wrap partnerssecondheadsecthree">
                At Yuvmedia, our Consulting Services are designed to empower your business with strategic insights, digital expertise, and performance-driven solutions.
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/search-engine-optimization.png') }}" alt="SEO" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">SEO</div>
                        <p class="card-text text-start">
                            Enhance your website's visibility and drive organic traffic with our expert SEO strategies.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/social-media.png') }}" alt="Social Media" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">Social Media</div>
                        <p class="card-text text-start">
                            Build a strong online presence and engage your audience with our social media solutions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/whatsapp-status.png') }}" alt="Whatsapp Marketing" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">Whatsapp Marketing</div>
                        <p class="card-text text-start">
                            Reach your customers directly and effectively with our WhatsApp marketing services.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/movie.png') }}" alt="Video Production" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">Video Production</div>
                        <p class="card-text text-start">
                            Create compelling video content to captivate your audience and boost your brand.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/code.png') }}" alt="Web Development" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">Web Development</div>
                        <p class="card-text text-start">
                            Build a robust and user-friendly website tailored to your business needs.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/design.png') }}" alt="Designing Services" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">Designing Services</div>
                        <p class="card-text text-start">
                            Elevate your brand with creative and professional design solutions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/engagement.png') }}" alt="Performance Media" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">Performance Media</div>
                        <p class="card-text text-start">
                            Maximize your ROI with our data-driven performance media strategies.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/e-commerce.png') }}" alt="Marketplace Expertise" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">Marketplace Expertise</div>
                        <p class="card-text text-start">
                            Optimize your marketplace presence and drive sales with our expertise.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/affiliate-marketing.png') }}" alt="Influencer Marketing" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">Influencer Marketing</div>
                        <p class="card-text text-start">
                            Leverage the power of influencers to amplify your brand's reach and impact.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/google.png') }}" alt="Google Business Profile" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">Google Business Profile</div>
                        <p class="card-text text-start">
                            Enhance your local presence with our Google Business Profile optimization services.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/icons/erp2.png') }}" alt="ERP Services" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">ERP Services</div>
                        <p class="card-text text-start">
                            Streamline your business operations with our comprehensive ERP solutions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/newicons/message.png') }}" alt="Email Marketing" class="mb-3">
                        <div class="card-title text-start fs-5 fw-bold">Email Marketing</div>
                        <p class="card-text text-start">
                            Connect with your audience effectively through our targeted email marketing campaigns.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-3 py-md-5" style="background-color: #f6faff;" id="formsection">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="fs-1 fw-bold text-center">
                    Join our Managing <br /> <span class="globaltxtcolor">Partner Tribe.</span>
                </div>
                <div class="">
                    <p class="text-wrap joincontentcustom">
                        Unlock endless growth opportunities with our proven model, expert support, and scalable business
                        solutions. Become a partner and shape the future of consultancy!
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <div class="d-flex justify-content-center">
                    <form action="{{ route('send.partnerservice') }}" id="contact-form" method="post">
                        @csrf
                        <div class="formcustomcard">
                            <div class="card-body">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Your Name<span class="text-danger fs-5">*</span> </label>
                                            <input type="text" name="username" class="form-control customforminput" placeholder="Enter Your Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Email <span class="text-danger fs-5">*</span>
                                            </label>
                                            <input required type="email" name="email" class="form-control customforminput" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">City</label>
                                            <input type="text" name="city" class="form-control customforminput" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">State</label>
                                            <input type="text" name="state" class="form-control customforminput" placeholder="Enter State">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Phone/Mobile <span class="text-danger fs-5">*</span> </label>
                                            <input type="tel" name="phone" class="form-control customforminput" placeholder="Enter Phone/Mobile" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-12">
                                        <div>
                                            <label for="services" class="form-label">Service</label>
                                            <select class="form-select" name="service" id="services" required>
                                                <option value="" disabled selected>- Select Service -</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                                <option value="IT Solutions">IT Solutions</option>
                                                <option value="E-Commerce">E-Commerce</option>
                                                <option value="Public Relation">Public Relation</option>
                                                <option value="Celebrity & Influencers for Businesses">Celebrity & Influencers for Businesses</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="formcustomcardfooter">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn formbtn">Become a Partner</button>
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
