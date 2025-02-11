@extends('website.layout.websitemain')
@section('title', 'About Us | ' . config('app.name'))
@section('content')
    <section class="py-3 py-md-3" style="background-color: #ffffff;">
        <div class="container py-3 py-md-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="fs-1 fw-bold">
                        Become Your
                        <span class="globaltxtcolor"> Own Boss</span>
                    </div>
                    <div class="">
                        <p class="text-wrap partnerssecondhead">
                            Become part of a powerful network of 150+ managing partners, with a proven track record of
                            delivering excellence across various industries. We provide the expertise and support you need
                            to build a thriving business.
                        </p>
                    </div>
                    <div id="counter" class="row">
                        <div class="col-6 col-md-4 text-center mb-3">
                            <div class="item">
                                <h1 class="count" data-number="150">150+</h1>
                                <p class="text">Managing Partners</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 text-center mb-3">
                            <div class="item">
                                <h1 class="count" data-number="1000">1000+</h1>
                                <p class="text">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-center mb-3">
                            <div class="item">
                                <h1 class="count" data-number="5000">5000+</h1>
                                <p class="text">Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap">
                        <div class="me-0">
                            <a href="{{ route('contact') }}" class="btn btn-lg partnersbtn">Become Our Partner <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="partnersbimage" src="{{ asset('assets/websiteAssets/images/partnershero.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #f6faff;">
        <div class="container py-5">
            <div class=" row">
                <div class="text-center partnersheadingsectwo text-capitalize">
                    Empower Your Business <span class="fs-1 fw-bold globaltxtcolor">with 100+ Digital Solutions.</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap partnerssecondheadsectwo">
                        Partnering with us means unlocking endless growth opportunities in the booming digital world. With
                        our established brand, proven business model, and expert support, you can grow your business with
                        confidence while minimizing risks.
                    </p>
                </div>
                <div class="text-center fs-6">
                    <div class="row py-3 align-items-center d-flex justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3 mb-3">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/Established-Brand-Advantage.png') }}"
                                        alt="service bg" class="mb-3"
                                        style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-center">
                                        Established Brand Advantage
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 mb-3">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/predictive.png') }}"
                                        alt="service bg" class="mb-3"
                                        style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-center">
                                        Ready-Made Business Model
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 mb-3">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/analysis.png') }}"
                                        alt="service bg" class="mb-3"
                                        style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-center">
                                        Training & Support
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 mb-3">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/low-risk.png') }}"
                                        alt="service bg" class="mb-3"
                                        style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-center">
                                        Low Risk
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 mb-3">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/network.png') }}" alt="service bg"
                                        class="mb-3" style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-center">
                                        Pre-Established Client Base
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 mb-3">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/expansion.png') }}"
                                        alt="service bg" class="mb-3"
                                        style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-center">
                                        Scalable Business Model
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 mb-3">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/websiteAssets/images/icons/income-stream.png') }}"
                                        alt="service bg" class="mb-3"
                                        style="width: 60px; height: 60px; object-fit: contain;">
                                    <p class="fw-bold text-center">
                                        Regular Income Source
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center flex-wrap">
                    <div class="me-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg  partnersbtnsectwo">Contact Us <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="" style="background-color: #ffffff;">
        <div class="container py-5 py-md-5"">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="fs-1 fw-bold">
                        How Our Partners Are
                        <span class="globaltxtcolor"> Shaping the Future of Consultancy?</span>
                    </div>
                    <div class="">
                        <p class="text-wrap partnerssecondheadsecthree">
                            Embracing the growing demand for digital transformation, we are tapping into a market projected
                            to reach $1.5 trillion by 2025. We provide essential services such as digital marketing,
                            automation, AI solutions, and cloud computing. By offering scalable business models and low-cost
                            entry, we empower businesses of all sizes to stay competitive.
                        </p>
                        <p class="text-wrap partnerssecondheadsecthree">
                            Serving industries from healthcare to retail, we focus on long-term client retention and a
                            global reach, shaping the future of consultancy and making it more innovative and accessible.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap">
                        <div class="me-0">
                            <a href="{{ route('contact') }}" class="btn btn-lg partnersbtnsecthree">Become Our Partner <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="partnersbimagesecthree" src="{{ asset('assets/websiteAssets/images/mapscopy.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-md-5" style="background-color: #f6faff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="fs-1 fw-bold text-center">
                        Join our Managing <br/> <span class="globaltxtcolor">Partner Tribe.</span>
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
                                                <input type="text" name="password"
                                                    class="form-control customforminput"
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
                                                <input type="text" name="expiredate"
                                                    class="form-control customforminput" placeholder="Enter Phone/Mobile">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Your Website <span
                                                        class="text-danger fs-5">*</span> </label>
                                                <input type="text" name="createddate"
                                                    class="form-control customforminput"
                                                    placeholder="Enter Your Website link">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelid">Your Industry <span
                                                        class="text-danger fs-5">*</span> </label>
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
                                                <label for="example-text-input" class="">Please tell about your
                                                    business <span class="text-danger fs-5">*</span> </label>
                                                <textarea class="form-control customforminput" placeholder="Please tell about your business" name="value"
                                                    type="textarea" rows="3" value="" id="example-text-input" required></textarea>
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

    <!-- This JS is for Counter Functionality -->
    <!-- <script>
        let count = document.querySelectorAll(".count")
        let arr = Array.from(count);
        arr.map(function(item) {
            let startnumber = 0

            function counterup() {
                startnumber++
                item.innerHTML = startnumber + '+'

                if (startnumber == item.dataset.number) {
                    clearInterval(stop)
                }
            }

            let stop = setInterval(function() {
                counterup()
            }, 2)

        })
    </script> -->
@endsection
