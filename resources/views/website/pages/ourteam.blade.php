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
                    Great Achievements Aren’t Made Alone – They’re Built with a Skilled Team.
                </div>
                <div class="text-start">
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


            {{-- Administration --}}
            <div class="row justify-content-start">
                <div class=" text-start fs-2 fw-bold">
                    Office Administration
                    <hr class="border-primary border-2 w-50">
                </div>

                {{-- Khivraj sir --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: white;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/Khivraj-Sain.webp') }}" alt="client"
                                    style="
                                    height: 245px;
                                ">
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
                <div class="col-md-3 mb-4">
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
                {{-- Dhanwanti Gupta --}}
                <div class="col-md-3 mb-4">
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
                                        <div class="author">Ms. Dhanwanti Gupta</div>
                                        <div class="fs-6">Chartered Accountant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Pinki Sain --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: #f7f7f7;">
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
                {{-- Nilesh gupta --}}
                <div class="col-md-3 mb-4">
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
                {{-- Mr. Kishan Gopal --}}
                <div class="col-md-3 mb-4">
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
                {{-- Kunal --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"style="
                                                        background: white;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/kunal-basin.webp') }}" alt="client"
                                    style="
                                    height: 245px;
                                ">
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
                {{-- Abhishek --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: white;
                    ">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/abhishek.jpg') }}"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Abhishek Singh Rathore</div>
                                        <div class="fs-6 ">Business Strategy Analyst</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Project managers --}}
            <div class="row justify-content-start">
                <div class=" text-start fs-3 fw-bold pt-5">
                    Project Managers
                    <hr class="border-primary border-2 w-50">
                </div>
                {{-- Leera ma'am --}}
                <div class="col-md-3 mb-4">
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
                                        <div class="fs-6 ">Project Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Laxminarayan sir --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Laxminaraya.jpg') }}"
                                    alt="client" style="height: 245px;">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Laxminarayan Sain</div>
                                        <div class="fs-6 ">Project Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Manohar sir --}}
                <div class="col-md-3 mb-4">
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
                                        <div class="fs-6 ">Project Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            {{-- Business Consultant Team --}}
            <div class="row justify-content-start">
                <div class=" text-start fs-3 fw-bold pt-5">
                    Business Consultant Team
                    <hr class="border-primary border-2 w-50">

                </div>
                

                {{-- Gaurav --}}
                <div class="col-md-3 mb-4">
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
                                        <div class="fs-6 ">Senior Business Development Consultant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Arti --}}
                {{-- <div class="col-md-3 mb-4">
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
                                        <div class="fs-6 ">Senior Business Development Consultant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- Chhavi --}}
                <div class="col-md-3 mb-4">
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
                                        <div class="fs-6 ">Business Development Consultant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pranjal Vaishnav --}}
                {{-- <div class="col-md-3 mb-4">
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
                                        <div class="fs-6 ">Business Development Consultant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- Gaurav Agarwal --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: #f7f7f7;
                    ">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/gaurav-2.jpg') }}"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Gaurav Agarwal</div>
                                        <div class="fs-6 ">Business Development Consultant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Rashi Sharma --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="
                        background: #f7f7f7;
                    ">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Rashi.jpg') }}"
                                    alt="client"
                                    style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Rashi Sharma</div>
                                        <div class="fs-6 ">Business Development Consultant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Developers --}}
            <div class="row justify-content-start">
                <div class=" text-start fs-3 fw-bold pt-5">
                    Developers Team
                    <hr class="border-primary border-2 w-50">

                </div>


                {{-- Anshul --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Anshul.webp') }}" alt="client">
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
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Nitesh.webp') }}" alt="client">
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
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Devendra.jpg') }}"
                                    alt="client" style="height: 245px;">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Devendra Shobhawat</div>
                                        <div class="fs-6 ">Wordpress Developer </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Seller Team --}}
            <div class="row justify-content-start">
                <div class=" text-start fs-3 fw-bold pt-5">
                    Seller Mangement Team
                    <hr class="border-primary border-2 w-50">

                </div>
                

                {{-- Roshan --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png"
                                    alt="client" style="height: 245px;">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Roshan Mishra</div>
                                        <div class="fs-6 ">Marketplace Expert</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Prateek --}}
                <div class="col-md-3 mb-4">
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
                                        <div class="fs-6 ">Marketplace Expert</div>
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
                

                {{-- Parul --}}
                <div class="col-md-3 mb-4">
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
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Ayushi.jpg') }}"
                                    alt="client" style="height: 245px;">
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
                {{-- Ms. Mehzabi Sheikh --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Mehzabi.jpg') }}"
                                    alt="client" style="height: 245px;">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Ms. Mehzabi Sheikh</div>
                                        <div class="fs-6 ">Performance Marketer</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                 {{-- Devendra --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Devendra.jpg') }}"
                                    alt="client" style="height: 245px;">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Devendra Shobhawat</div>
                                        <div class="fs-6 ">Wordpress Developer & SEO</div>
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
                    Graphic Media Team
                    <hr class="border-primary border-2 w-50">

                </div>
                
                {{-- Rudraksh sir --}}
                <div class="col-md-3 mb-4">
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
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"
                            style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Dipanshu.webp') }}"
                                    alt="client" style="height: 245px;">
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
                <div class="col-md-3 mb-4">
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
                <div class="col-md-3 mb-4">
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



            </div>

            

    </section>

@endsection
