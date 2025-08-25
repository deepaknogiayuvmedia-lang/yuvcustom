@extends('website.layout.websitemain')
@section('title', 'Our Team | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section id="aboutfirstsection" class="py-5">
        <div class="container position-relative">
            <div class="row">
                <div class="text-start fs-1 fw-bold">
                    Our Team
                </div>
                <div class="globaltxtcolor text-start fs-3 fw-bold">
                    The Force Behind the Best Digital Marketing Agency in India
                </div>
                <div class="text-start">
                    <p class="text-wrap ">
                        Great achievements aren’t made alone — they’re built by skilled, driven teams. At Yuvmedia, we
                        thrive on helping businesses across industries connect with their ideal audience. With every
                        conversion and sale, we push boundaries and set new standards — not just for your brand, but for the
                        entire digital landscape.
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="ourteamsection py-5 position-relative">
        <div class="container">


            {{-- Administration --}}
            <div class="row justify-content-start">
                <div class=" text-start fs-2 fw-bold">
                    Founders
                    <hr class="border-primary border-2 w-50">
                </div>

                {{-- Khivraj sir --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: white;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/Khivraj-Sain.webp') }}" alt="client"
                                    style="height: 245px;">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Khivraj Sain</div>
                                        <div class="fs-6 ">Co-Founder & MD</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Pinki Sain --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Pinki Sain</div>
                                        <div class="fs-6 ">Co-Founder</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Administration --}}
            <div class="row justify-content-start">
                <div class=" text-start fs-2 fw-bold">
                    Office Administration
                    <hr class="border-primary border-2 w-50">
                </div>
                {{-- Nilesh gupta --}}
                <div class="col-lg-3 col-md-6 mb-4">
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
                {{-- Vipra Arora --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Vipra Arora</div>
                                        <div class="fs-6">Human Resources</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Abhishek --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: white;
                    ">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/abhishek.webp') }}" alt="client"
                                    style="">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Abhishek Singh Rathore</div>
                                        <div class="fs-6 ">Executive Assistant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Lalit Kishore Sain --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: white;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/lalit-kishore.png') }}"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Lalit Kishor Sain</div>
                                        <div class="fs-6 ">Lawyer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                {{-- Sushil Bansal --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/SushilBansal.jpg') }}"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Sushil Bansal</div>
                                        <div class="fs-6">Chartered Accountant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Business Development Team --}}
            <div class="row justify-content-start">
                <div class=" text-start fs-3 fw-bold pt-5">
                    Business Development Team
                    <hr class="border-primary border-2 w-50">

                </div>
                {{-- Kunal --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                                                        background: white;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/kunal-basin.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Kunal Basin</div>
                                        <div class="fs-6 ">Business Development Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Gaurav --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Gaurav.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Gaurav Rao</div>
                                        <div class="fs-6 ">Senior Business Development Executive </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Arti --}}
                {{-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Aarti.webp') }}" alt="client">
                    </div>
                    <div class="authorbox rounded-3">
                        <div class="testimonial-name d-flex  text-white">
                            <div>
                                <div class="author">Ms. Aarti Sachani</div>
                                <div class="fs-6 ">Senior Business Development Executive </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div> --}}

                {{-- Chhavi --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Chhavi.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Chhavi Chauhan</div>
                                        <div class="fs-6 ">Business Development Executive </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pranjal Vaishnav --}}
                {{-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: #f7f7f7;
                    ">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Pranjal Vaishnav</div>
                                        <div class="fs-6 ">Business Development Executive </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- Gaurav Agarwal --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: white;
                    ">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/gaurav-2.jpg') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Gaurav Agarwal</div>
                                        <div class="fs-6 ">Business Development Executive </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Rashi Sharma --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: white;
                    ">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Rashi.jpg') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Rashi Sharma</div>
                                        <div class="fs-6 ">Business Development Executive </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Prateek --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Priteek.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Priteek Jain</div>
                                        <div class="fs-6 ">Business Development Executive</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Marketing team --}}
            <div class="row justify-content-start">
                <div class=" text-start fs-3 fw-bold pt-5">
                    Performance Marketing Team
                    <hr class="border-primary border-2 w-50">

                </div>
                {{-- Manohar sir --}}
                <div class="col-lg-3 col-md-6 mb-4">
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
                                        <div class="author">Mr. Manohar Singh Panwar</div>
                                        <div class="fs-6 ">Performance Marketing Head</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- Ms. Mehzabi Sheikh --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3" style="background: white;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Mehzabi.jpg') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Mehzabi Sheikh</div>
                                        <div class="fs-6 ">Project manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Leera ma'am --}}
                <div class="col-lg-3 col-md-6 mb-4">
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
                                        <div class="fs-6 ">Performance Marketer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Parul --}}
                <div class="col-lg-3 col-md-6 mb-4">
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
                                        <div class="author">Ms. Parul Verma</div>
                                        <div class="fs-6 ">Performance Marketer</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Ms. Ayushi Sharma --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3" style="background: white;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Ayushi.jpg') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Ayushi Sharma</div>
                                        <div class="fs-6 ">Performance Marketer</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Pankaj Rijoniya --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Pankaj Rijoniya</div>
                                        <div class="fs-6">Performance Marketer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Designers --}}
            <div class="row justify-content-start">
                <div class=" text-start fs-3 fw-bold pt-5">
                    Media Team
                    <hr class="border-primary border-2 w-50">

                </div>

                {{-- Laxminarayan sir --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3" style="background: white;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Laxminaraya.jpg') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Laxminarayan Sain</div>
                                        <div class="fs-6 ">Production head & Project Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Rudraksh sir --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Rudraksh.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Rudraksh Singh</div>
                                        <div class="fs-6 ">Senior Creative Designer & Video Editor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Dipanshu --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3" style="background: white;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Dipanshu.webp') }}"
                                    alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Deepanshu Diwakar</div>
                                        <div class="fs-6 ">Creative Designer & Video Editor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Shakti --}}
                <div class="col-lg-3 col-md-6 mb-4">
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
                                        <div class="fs-6 ">Creative Designer & Video Editor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Raghuveer --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Raghu.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Raghuveer Gurjar</div>
                                        <div class="fs-6 ">Creative Designer & Video Editor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Aashish Dholpuria --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Aashish Dholpuria</div>
                                        <div class="fs-6">3D Animation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Jayesh Kumawat --}}
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Jayesh Kumawat</div>
                                        <div class="fs-6">Editor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    {{-- Developers --}}
                    <div class="row justify-content-start">
                        <div class=" text-start fs-3 fw-bold pt-5">
                            Tech Team
                            <hr class="border-primary border-2 w-50">
                        </div>
                        {{-- Mr. Kishan Gopal --}}
                        <div class="col-lg-3 col-md-6 mb-4">
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
                                                <div class="fs-6 ">Project Manager</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Anshul --}}
                        <div class="col-lg-3 col-md-6 mb-4">
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
                                                <div class="fs-6 ">Senior Full Stack Developer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Nitesh --}}
                        <div class="col-lg-3 col-md-6 mb-4">
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
                        {{-- Devendra --}}
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="item">
                                <div class="shadow-effect corebox flip rounded-3" style="background: white;">
                                    <div class=" ">
                                        <img class="img-circle rounded-3 img-fluid"
                                            src="{{ asset('assets/websiteAssets/images/team/new/Devendra.jpg') }}"
                                            alt="client">
                                    </div>
                                    <div class="authorbox rounded-3">
                                        <div class="testimonial-name d-flex  text-white">
                                            <div>
                                                <div class="author">Mr. Devendra Shobhawat</div>
                                                <div class="fs-6 ">CMS Developer</div>
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
    <div class="container-fluid bg-black p-0">
        <div class="container p-3">
            <div class=" text-start fs-3 fw-bold d-flex justify-content-between flex-wrap align-items-center">
                <div class="text-white">
                    Now that you know our story, let’s build yours
                </div>
                <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                    <div class="me-3 mt-2">
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Book a Free 1-to-1
                            Meeting
                            <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
