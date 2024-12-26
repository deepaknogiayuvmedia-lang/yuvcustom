@extends('website.layout.websitemain')
@section('title', 'Our Team | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section id="aboutfirstsection" class="py-5">
        <div class="container py-5 position-relative">
            <div class="row">
                <div class="text-center globaltxtcolor">
                    Our Team
                </div>
                <div class=" text-center fs-3 fw-bold pb-3">
                    Empowering every vertical in the country.
                </div>
                <div class="text-center">
                    <p class="text-wrap ">
                        We seek our thrill from making brands and businesses in diversified domains reach their right
                        audience.
                        With every conversion and each sale, we strive to set new standards for your business as well as
                        ourselves.
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="ourteamsection py-5 position-relative">
        <div class="container">

            {{-- Founders --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold pb-3">
                    Our Founders
                </div>
                {{-- khivraj sir --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/Team/Mr.-Khivraj-Sain.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Khivraj Sain</div>
                                        <div class="fs-6 ">CEO & Founder</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Administration --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold pb-3">
                    Administration
                </div>
                {{-- Nilesh gupta --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Nilesh-Sir.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Nilesh Gupta</div>
                                        <div class="fs-6 ">Office Admin</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Developers --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold pb-3">
                    Developers Team
                </div>
                
                {{-- Kishan gopal --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/kishangopal.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Kishan Gopal</div>
                                        <div class="fs-6 ">Operations Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Anshul --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Anshul.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Anshul Kumar Meena</div>
                                        <div class="fs-6 ">Full Stack Developer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Nitesh --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Nitesh.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Nitesh Sharma</div>
                                        <div class="fs-6 ">Full Stack Developer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Marketing team --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold pb-3">
                    Marketing Team
                </div>
                {{-- Manohar sir --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Manohar-sir.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Manohar Singhh</div>
                                        <div class="fs-6 ">Paid Marketing Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Parul --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Parul-Verma.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Miss. Parul Verma</div>
                                        <div class="fs-6 ">Social Media Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Sejal --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Sejal-goyal.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Miss. Sejal goyal</div>
                                        <div class="fs-6 ">Social Media Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Designers --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold pb-3">
                    Designer Team
                </div>
                {{-- Rudraksh sir --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Rudraksh.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Rudraksh Singh</div>
                                        <div class="fs-6 ">Creative Design Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Deepanshu --}}
                <`div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Shakti.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Deepanshu Diwakar</div>
                                        <div class="fs-6 ">Graphic Design Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </>
                {{-- Shakti --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Shakti.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Shakti Rathore</div>
                                        <div class="fs-6 ">Graphic Design Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Raghuveer --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Raghu.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Raghuveer</div>
                                        <div class="fs-6 ">Creative Design Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            {{-- seller team --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold pb-3">
                    Ecom Seller Team
                </div>
                {{-- Leera ma'am --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Leera.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Leera Ramesh</div>
                                        <div class="fs-6 ">Seller Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Leera ma'am --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Leera.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Leera Ramesh</div>
                                        <div class="fs-6 ">Seller Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Leera ma'am --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Leera.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Leera Ramesh</div>
                                        <div class="fs-6 ">Seller Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold pb-3">
                    Business Consultant
                </div>
                {{-- Leera ma'am --}}
                <div class="col-md-4 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Leera.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Leera Ramesh</div>
                                        <div class="fs-6 ">Seller Manager</div>
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

@endsection
