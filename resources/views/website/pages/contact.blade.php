@extends('website.layout.websitemain')
@section('title', 'Contact Us | ' . config('app.name'))
@section('content')
    <section class="py-3 py-md-3" style="background-color: #e4f0ff;">
        <div class="container py-3 py-md-4">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="globaltxtcolor fs-1 text-start">
                        Contact Us
                    </div>
                    <div class="">
                        <p class="text-wrap contactsecondhead">
                            Let’s Start the Conversation
                            Have something you’d like to explore? <br />Our team is here to listen, collaborate, and support
                            you
                            every step of the way.
                        </p>
                    </div>
                    <div class="row gy-4 gx-4 justify-content-start">
                        <div class="col-lg-4 col-md-6">
                            <div class="contactscards">
                                <div class="card-body text-start">
                                    <img src="{{ asset('assets/websiteAssets/images/location.png') }}" alt="service bg"
                                        class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-start">Head Office</p>
                                    <p class="card-text text-start text-wrap">B17, Second Floor, Above Royal Bakers, Glitz
                                        Circle, Ramnagar Road, Ajmer, Rajasthan, 305001.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contactscards">
                                <div class="card-body text-start">
                                    <img src="{{ asset('assets/websiteAssets/images/message.png') }}" alt="service bg"
                                        class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-start">For Support</p>
                                    <ul>
                                        <li>
                                            <a href="mailto://support@yuvmedia.com">support@yuvmedia.com</a>
                                        </li>
                                        <li>
                                            <a href="tel://+918078671648">+91-8078671648</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contactscards">
                                <div class="card-body text-start">
                                    <img src="{{ asset('assets/websiteAssets/images/phone-call.png') }}" alt="service bg"
                                        class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-start">For Sales</p>
                                    <ul>
                                        <li>
                                            <a href="mailto://sales@yuvmedia.com">sales@yuvmedia.com</a>
                                        </li>
                                        <li>
                                            <a href="tel://+918824269821">+91-8824269821</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contactscards">
                                <div class="card-body text-start">
                                    <img src="{{ asset('assets/websiteAssets/images/24-hour-clock.png') }}" alt="service bg"
                                        class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-start">Open Hours:</p>
                                    <p class=" text-start text-wrap">Mon – Sat: 10:00 am – 7:00 pm,<br />
                                        Sunday: CLOSED.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 py-md-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5 class="smallheadcontactus">Get In Touch!</h5>
                    <div class="text-start fs-1 contactsheadingsectwo">
                        Ready to Dominate <span class="globaltxtcolor fs-1">Your Market?</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap contactscontentsectwo">
                            Jumpstart your digital marketing success in 3 easy steps:
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <ol class="list-group list-group-flush" style="list-style: none;">
                            <li class="py-2">1. Fill out the form, and we’ll be in touch shortly to understand your goals
                                better.</li>
                            <li class="py-2">2. From planning to execution, our experts stay aligned with your business every
                                step of the way.
                            </li>
                            <li class="py-2">3. Strengthen your presence, grow your reach, and watch your results evolve
                                consistently.
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('send.inquiry') }}" id="contact-form" method="post">
                            @csrf
                            <div class="formcustomcard">
                                <div class="card-body">
                                    <div class="row gy-4">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Your First Name <span
                                                        class="text-danger fs-5">*</span> </label>
                                                <input type="text" name="username" class="form-control customforminput"
                                                    placeholder="Enter Your First Name" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Your Brand Name <span
                                                        class="text-danger fs-5">*</span> </label>
                                                <input required type="text" name="brandname"
                                                    class="form-control customforminput" placeholder="Enter Your Brand Name"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Email <span class="text-danger fs-5">*</span>
                                                </label>
                                                <input required type="email" name="email"
                                                    class="form-control customforminput" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Phone/Mobile <span
                                                        class="text-danger fs-5">*</span> </label>
                                                <input type="tel" name="phone" class="form-control customforminput"
                                                    placeholder="Enter Phone/Mobile" required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6">
                                            <div>
                                                <label class="form-label">Your Website </label>
                                                <input type="text" name="website" class="form-control customforminput"
                                                    placeholder="Enter Your Website link">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6">
                                            <div>
                                                <label for="labelid">Your Industry <span
                                                        class="text-danger fs-5">*</span> </label>
                                                <select name="industry" class="form-select customforminput"
                                                    id="servicetypeid" required>
                                                    <option value="" selected>--select industry--</option>
                                                    <option value="Services">E-Commerce</option>
                                                    <option value="Consulting">Fantasy Games</option>
                                                    <option value="Consulting">Tour & Travel</option>
                                                    <option value="Consulting">Finance</option>
                                                    <option value="Consulting">Hospitality</option>
                                                    <option value="Consulting">Healthcare</option>
                                                    <option value="Consulting">Interior Designing & Architect</option>
                                                    <option value="Consulting">Education</option>
                                                    <option value="Consulting">Real E-State</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6">
                                            <div>
                                                <label for="labelid">Your Service <span class="text-danger fs-5">*</span>
                                                </label>
                                                <select name="servicedropdown" class="form-select customforminput"
                                                    id="servicetypeid" required>
                                                    <option value="" selected>--select service--</option>
                                                    <option value="SEO">SEO</option>
                                                    <option value="Social Media">Social Media</option>
                                                    <option value="Whatsapp Marketing">Whatsapp Marketing</option>
                                                    <option value="Video Production">Video Production</option>
                                                    <option value="Web Development">Web Development</option>
                                                    <option value="Designing Services">Designing Services</option>
                                                    <option value="Performance Media">Performance Media</option>
                                                    <option value="Marketplace Expertise">Marketplace Expertise</option>
                                                    <option value="Influencer Marketing">Influencer Marketing</option>
                                                    <option value="Google Business Profile">Google Business Profile
                                                    </option>
                                                    <option value="ERP Services">ERP Services</option>
                                                    <option value="Email Marketing">Email Marketing</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <label for="example-text-input" class="">Please tell about
                                                    your business </label>
                                                <textarea class="form-control customforminput" placeholder="Please tell about your business" name="message"
                                                    type="textarea" rows="3" value="" id="example-text-input"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="formcustomcardfooter">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn formbtn">Book a 30-minute Free
                                            Consultation</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col p-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4236.533192428579!2d74.6082515!3d26.471099100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be7281e354e57%3A0x888b447da4858dab!2sYUVMEDIA-%20Digital%20Marketing%20Services!5e1!3m2!1sen!2sin!4v1734078794961!5m2!1sen!2sin"
                        width="100%" height="450" style="border-radius: 10px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
