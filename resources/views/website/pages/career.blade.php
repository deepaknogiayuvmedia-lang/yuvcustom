@extends('website.layout.websitemain')
@section('title', 'Career At Yuvmedia | ' . config('app.name'))
@section('content')

    <section id="aboutfirstsection" class="pt-3">
        <div class="container pt-5" style="position: relative;">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-start fs-4 fw-bold  ">
                        Welcome to our career hub <br>
                        <span class="globaltxtcolor fs-1">Career At Yuvmedia</span>
                    </div>
                    <div class="text-start">
                        <p class="text-wrap aboutsecondhead">
                            We’re a team of dedicated creatives and strategists, focused on producing meaningful work that gets results. We keep things fun—but our work ethic is no joke.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="#contact" class="btn btn-primary btn-lg">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="carouselCareerFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/websiteAssets/images/services/services1.webp') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/websiteAssets/images/services/services2.webp') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/websiteAssets/images/services/services3.webp') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselCareerFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCareerFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clientSection">
        <div class="container pt-5" style="position: relative;">
            <div class="row">
                <div class="col-lg-6 col-md-4 px-lg-5 py-3">
                    <div class="fs-3 fw-bold">Let’s create clever things together! Are you up for it? Let us know!</div>
                </div>
                <div class="col-lg-6 col-md-8 px-5 py-3">
                    <div class="fs-4 fw-medium ">
                        We’re a tight team of thinkers, makers, and doers—passionate about crafting standout digital experiences and memorable campaigns. Around here, the only thing we take seriously is great work.
                    </div>
                    <div class="fs-4 mt-3 fw-medium ">
                        Browse our open positions by company:
                    </div>
                    <div class="d-flex mt-2">
                        <div class="badge rounded-pill text-bg-primary fs-6 me-2">Digtal</div>
                        <div class="badge rounded-pill text-bg-success fs-6 me-2">Design</div>
                        <div class="badge rounded-pill text-bg-info fs-6 me-2">Development</div>
                        <div class="badge rounded-pill text-bg-warning fs-6 me-2">Sales</div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <Section>
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">SEO Specialist</div>
                    <hr class="w-50">
                    <div>Enhance site performance and visibility through smart optimization strategies.</div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">Social Media Manager</div>
                    <hr class="w-50">
                    <div>Keep your brand buzzing with fresh, engaging content on every social channel.</div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">WhatsApp Marketing Specialist</div>
                    <hr class="w-50">
                    <div>Use personalized outreach to build real connections with your audience.</div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">Video Production Specialist</div>
                    <hr class="w-50">
                    <div>Tell your story through high-quality videos that leave a mark.</div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">Web Developer</div>
                    <hr class="w-50">
                    <div>Design responsive websites that look great and function flawlessly</div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">Graphic Designer</div>
                    <hr class="w-50">
                    <div>Create impactful visual designs for both digital and print channels.</div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">Performance Marketing Specialist</div>
                    <hr class="w-50">
                    <div>Get the most from your ad spend with smart targeting and regular optimizations.</div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">Marketplace Manager</div>
                    <hr class="w-50">
                    <div>Manage and improve product visibility across top online marketplaces.
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">Influencer Marketing Executive</div>
                    <hr class="w-50">
                    <div>Team up with influencers to create buzz that actually converts.
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">Google Business Profile Manager</div>
                    <hr class="w-50">
                    <div>Make sure people can find you easily with polished local listings.</div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">ERP Consultant</div>
                    <hr class="w-50">
                    <div>Keep things running smoothly with smart, efficient business tools.</div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="fs-3 fw-bold">Email Marketing Specialist</div>
                    <hr class="w-50">
                    <div>Send messages your audience wants to open—and act on.</div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="mt-2">
                            <a href="#contact" class="btn btn-outline-primary btn-sm">View Open Positions<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>

    <Section id="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="fs-2 fw-bold text-center">
                        Ready to take <span class="globaltxtcolor"> the next step?.</span>
                    </div>
                    {{-- <div class="">
                        <p class="text-wrap joincontentcustom">
                            Unlock endless growth opportunities with our proven model, expert support, and scalable business
                            solutions. Become a partner and shape the future of consultancy!
                        </p>
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('send.jobenquiry') }}" id="contact-form" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="formcustomcard">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Enter Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Enter Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Phone/Mobile <span class="text-danger">*</span></label>
                                        <input type="tel" name="phone" class="form-control"
                                            placeholder="Enter Phone/Mobile" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Select Job Role <span
                                                class="text-danger">*</span></label>
                                        <select name="job_role" class="form-select" required>
                                            <option value="">-- Select Job Role --</option>
                                            <option value="SEO Specialist">SEO Specialist</option>
                                            <option value="Social Media Manager">Social Media Manager</option>
                                            <option value="WhatsApp Marketing Specialist">WhatsApp Marketing Specialist
                                            </option>
                                            <option value="Video Production Specialist">Video Production Specialist
                                            </option>
                                            <option value="Web Developer">Web Developer</option>
                                            <option value="Graphic Designer">Graphic Designer</option>
                                            <option value="Performance Marketing Specialist">Performance Marketing
                                                Specialist</option>
                                            <option value="Marketplace Manager">Marketplace Manager</option>
                                            <option value="Influencer Marketing Executive">Influencer Marketing Executive
                                            </option>
                                            <option value="Google Business Profile Manager">Google Business Profile Manager
                                            </option>
                                            <option value="ERP Consultant">ERP Consultant</option>
                                            <option value="Email Marketing Specialist">Email Marketing Specialist</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Upload Resume <span class="text-danger">*</span></label>
                                        <input type="file" name="resume" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tell us about yourself</label>
                                        <textarea name="message" class="form-control" placeholder="Briefly describe your experience and skills"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="formcustomcardfooter">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn formbtn">Submit Application</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </Section>

    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: "{{ session('success') }}",
                });
            @endif

            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: "{{ session('error') }}",
                });
            @endif

        });
    </script>
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Validation Error!',
                html: '<ul>' +
                    @foreach ($errors->all() as $error)
                        '<li>{{ $error }}</li>' +
                    @endforeach
                '</ul>',
            });
        </script>
    @endif

@endsection
