@extends('website.layout.websitemain')
@section('title', 'Contact Us | ' . config('app.name'))
@section('content')
<section class="py-3 py-md-3" style="background-color: #e4f0ff;">
    <div class="container py-3 py-md-4">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="globaltxtcolor">
                    Contact Us
                </div>
                <div class="">
                    <p class="text-wrap contactsecondhead">
                        Have questions, ideas, or projects you'd like to discuss? At Yuvmedia, we're here to help you
                        bring your vision to life. Whether you're looking for marketing expertise, creative solutions,
                        or technical support, our team is just a message away.
                    </p>
                </div>
                <div class="row gy-4 gx-4 justify-content-center">
                    <div class="col-md-3">
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
                    <div class="col-md-3">
                        <div class="contactscards">
                            <div class="card-body text-start">
                                <img src="{{ asset('assets/websiteAssets/images/message.png') }}" alt="service bg"
                                    class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                <p class="fw-bold text-start">Email Us</p>
                                <p class=" text-start">admin@yuvmedia.com</p>
                                <p class=" text-start">sales@yuvmedia.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contactscards">
                            <div class="card-body text-start">
                                <img src="{{ asset('assets/websiteAssets/images/phone-call.png') }}" alt="service bg"
                                    class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                <p class="fw-bold text-start">We are happy to answer them.</p>
                                <p class=" text-start text-wrap">+91-8078671648</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contactscards">
                            <div class="card-body text-start">
                                <img src="{{ asset('assets/websiteAssets/images/24-hour-clock.png') }}" alt="service bg"
                                    class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                <p class="fw-bold text-start">Open Hours:</p>
                                <p class=" text-start text-wrap">Mon – Fri: 9:30 am – 6:30 pm,
                                    Sat-Sunday: CLOSED.</p>
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
                <div class="text-start contactsheadingsectwo">
                    Ready to Dominate <span class="globaltxtcolor">Your Market?</span>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap contactscontentsectwo">
                        Jumpstart your digital marketing success in 3 easy steps:
                    </p>
                </div>
                <div class="text-start py-2">
                    <ul class="list-group list-group-flush" style="list-style: none;">
                        <li class="py-2">Fill out our brief contact form, and we’ll contact you soon to learn more about your business.</li>
                        <li class="py-2">Our digital marketing experts will work closely with you to implement data-driven strategies that drive business growth.</li>
                        <li class="py-2">Solidify your digital presence, expand your brand reach, and see outstanding results month-over-month.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center">
                    <form action="#">
                        <div class="formcustomcard">
                            <div class="card-body">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Your First Name <span
                                                    class="text-danger fs-5">*</span> </label>
                                            <input type="text" name="userid" class="form-control customforminput"
                                                placeholder="Enter Your First Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Your Brand Name <span
                                                    class="text-danger fs-5">*</span> </label>
                                            <input type="text" name="password" class="form-control customforminput"
                                                placeholder="Enter Your Brand Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Email <span class="text-danger fs-5">*</span>
                                            </label>
                                            <input type="email" name="email" class="form-control customforminput"
                                                placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Phone/Mobile <span
                                                    class="text-danger fs-5">*</span> </label>
                                            <input type="text" name="expiredate" class="form-control customforminput"
                                                placeholder="Enter Phone/Mobile">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Your Website <span
                                                    class="text-danger fs-5">*</span> </label>
                                            <input type="text" name="createddate" class="form-control customforminput"
                                                placeholder="Enter Your Website link">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelid">Your Industry <span class="text-danger fs-5">*</span>
                                            </label>
                                            <select name="servicetype" class="form-select customforminput"
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
                                    <div class="col-xxl-12 col-md-12">
                                        <div>
                                            <label for="example-text-input" class="">Please tell about your business
                                                <span class="text-danger fs-5">*</span> </label>
                                            <textarea class="form-control customforminput"
                                                placeholder="Please tell about your business" name="value"
                                                type="textarea" rows="3" value="" id="example-text-input"
                                                required></textarea>
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
            <div class="col p-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4236.533192428579!2d74.6082515!3d26.471099100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be7281e354e57%3A0x888b447da4858dab!2sYUVMEDIA-%20Digital%20Marketing%20Services!5e1!3m2!1sen!2sin!4v1734078794961!5m2!1sen!2sin" width="100%" height="450" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection