@extends('website.layout.websitemain')
@section('title', 'About Us | ' . config('app.name'))
@section('content')
<section class="py-3 py-md-3" style="background-color: #ffffff;">
    <div class="container py-3 py-md-4">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="partnersheading">
                    Together, We <span class="partnersheadingsub">Achieve Greatness!</span>
                </div>
                <div class="">
                    <p class="text-wrap partnerssecondhead">
                        At YUVMEDIA, we understand the importance of reaching your customers at the right moment and
                        place.
                        Our paid strategies accompany your potential customers, ensuring you receive the strongest
                        consideration.
                    </p>
                </div>
                <div id="counter">
                    <div class="item">
                        <h1 class="count">150+</h1> <!--Add data-number="150" to start counter-->
                        <p class="text">Managing Partners</p>
                    </div>
                    <div class="item">
                        <h1 class="count">600+</h1>
                        <p class="text">Happy Clients</p>
                    </div>
                    <div class="item">
                        <h1 class="count">5K+</h1>
                        <p class="text">Projects</p>
                    </div>
                </div>
                <div class="d-flex justify-content-start flex-wrap">
                    <div class="me-0">
                        <a href="{{route('contact')}}" class="btn btn-lg partnersbtn">Become Our Partner <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="partnersbimage" src="{{ asset('assets/websiteAssets/images/partnershero.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section style="background-color: #f6faff;">
    <div class="container py-5">
        <div class=" row">
            <div class="text-center partnersheadingsectwo text-capitalize">
                Are you a mid-sized organization <span class="fs-1 fw-bold text-primary">struggling to boost
                    profits?</span>
            </div>
            <div class="text-center">
                <p class="text-wrap partnerssecondheadsectwo">
                    We can help! Our team of experts specializes in transforming businesses through Process
                    Optimization, Digital Transformation, and tailored staffing solutions.
                </p>
            </div>
            <div class="text-center fs-6">
                <p class="text-wrap fw-normal">
                    Together, let’s identify the hurdles preventing your business from reaching its full potential. Our
                    local Managing Partners will dive deep into your operations to uncover hidden opportunities and
                    create innovative solutions.
                </p>
            </div>
            <div class="text-center fs-6">
                <p class="text-wrap fw-bold">
                    Ready to simplify your processes, increase efficiency, and skyrocket your profits? Let’s talk!
                </p>
            </div>
            <div class="d-flex justify-content-center flex-wrap">
                <div class="me-3">
                    <a href="{{route('contact')}}" class="btn btn-lg  partnersbtnsectwo">Contact Us <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="" style="background-color: #ffffff;">
    <div class="container py-5 py-md-5"">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="partnersheadingsecthree">
                    Start your own <span class="partnersheadingsubsecthree">Digital Transformation Agency</span>
                </div>
                <div class="">
                    <p class="text-wrap partnerssecondheadsecthree">
                        India’s largest Digital Transformation growing B2B Platform
                        100+ Local Mangaing Partner
                    </p>
                </div>
                <div class="d-flex justify-content-start flex-wrap">
                    <div class="me-0">
                        <a href="{{route('contact')}}" class="btn btn-lg partnersbtnsecthree">Become Our Partner <i
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
                <div class="joinheading">
                    Join our Managing <span class="joinsubheading">Partner Tribe.</span>
                </div>
                <div class="">
                    <p class="text-wrap joincontentcustom">
                        Become part of a dynamic network of innovators, visionaries, and leaders. As a managing partner,
                        you'll collaborate with us to shape impactful strategies, create value-driven solutions, and
                        foster growth in our shared journey toward success.
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
                                            <label class="form-label">Your First Name <span class="text-danger fs-5">*</span> </label>
                                            <input type="text" name="userid" class="form-control customforminput"
                                                placeholder="Enter Your First Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Your Brand Name <span class="text-danger fs-5">*</span> </label>
                                            <input type="text" name="password" class="form-control customforminput"
                                                placeholder="Enter Your Brand Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Email <span class="text-danger fs-5">*</span> </label>
                                            <input type="email" name="email" class="form-control customforminput"
                                                placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Phone/Mobile <span class="text-danger fs-5">*</span> </label>
                                            <input type="text" name="expiredate" class="form-control customforminput"
                                                placeholder="Enter Phone/Mobile">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-label">Your Website <span class="text-danger fs-5">*</span> </label>
                                            <input type="text" name="createddate" class="form-control customforminput"
                                                placeholder="Enter Your Website link">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelid">Your Industry <span class="text-danger fs-5">*</span> </label>
                                            <select name="servicetype" class="form-select customforminput" id="servicetypeid" required>
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
                                            <label for="example-text-input" class="">Please tell about your business <span class="text-danger fs-5">*</span> </label>
                                            <textarea class="form-control customforminput" placeholder="Please tell about your business" name="value"
                                                type="textarea" rows="3" value="" id="example-text-input" required></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="formcustomcardfooter">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn formbtn">Book a 30-minute Free Consultation</button>
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
    arr.map(function (item) {
        let startnumber = 0

        function counterup() {
            startnumber++
            item.innerHTML = startnumber + '+'

            if (startnumber == item.dataset.number) {
                clearInterval(stop)
            }
        }

        let stop = setInterval(function () {
            counterup()
        }, 2)

    })
</script> -->
@endsection