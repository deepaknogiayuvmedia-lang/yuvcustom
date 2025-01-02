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
                <div class=" text-center fs-3 fw-bold py-5">
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


            {{-- Administration --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold py-5">
                    Administration
                </div>

                {{-- khivraj sir --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3" style="
                        background: white;
                    ">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/Khivraj-Sain.webp') }}"
                                    alt="client" style="
                                    height: 245px;
                                ">
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
            </div>

            {{-- Developers --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold py-5">
                    Developers Team
                </div>
                
                {{-- Kishan gopal --}}
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
                                        <div class="fs-6 ">Operations & IT Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Anshul --}}
                <div class="col-md-3 mb-4">
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
                <div class="col-md-3 mb-4">
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
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3" style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png" alt="client" style="height: 245px;">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Devendra Shobawat</div>
                                        <div class="fs-6 ">Web Developer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Marketing team --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold py-5">
                    Paid Marketing Team
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
                                        <div class="fs-6 ">Paid Marketing Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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
                                        <div class="fs-6 ">Social Media Executive</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Sejal --}}
                <div class="col-md-3 mb-4">
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
                                        <div class="author">Ms. Sejal goyal</div>
                                        <div class="fs-6 ">Social Media Executive</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Manish --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3" style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png" alt="client" style="height: 245px;">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Manish Shobawat</div>
                                        <div class="fs-6 ">PPC Executive</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Designers --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold py-5">
                    Graphic Media Team
                </div>
                {{-- Rudraksh sir --}}
                <div class="col-md-3 mb-4">
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

                {{-- Dipanshu --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3" style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Dipanshu.webp') }}" alt="client" style="height: 245px;">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Deepanshu Diwakar</div>
                                        <div class="fs-6 ">Graphic / Video Executive</div>
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
                                        <div class="fs-6 ">Graphic / Video Executive</div>
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
                                        <div class="author">Mr. Raghuveer</div>
                                        <div class="fs-6 ">Creative / Video Executive</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                
            </div>

            {{-- Seller Team --}}
            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold py-5">
                    Seller Mangement Team
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
                                        <div class="fs-6 ">Seller Manager</div>
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
                                    src="{{ asset('assets/websiteAssets/images/team/new/Priteek.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Priteek Jain</div>
                                        <div class="fs-6 ">Ecommerce Executive</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Deepak --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/new/Deepak.webp') }}" alt="client">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Deepak</div>
                                        <div class="fs-6 ">SEO Executive</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Roshan --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3" style="height: 245px;
                        background: #f7f7f7;">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png" alt="client" style="height: 245px;">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Roshan Mishra</div>
                                        <div class="fs-6 ">Ecommerce Executive</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class=" text-center fs-3 fw-bold py-5">
                    Business Consultant Team
                </div>
                {{-- Kunal --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3"style="
                        background: white;
                    ">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="https://yuvmedia.in/wp-content/uploads/2024/06/Kunal.jpg" alt="client" style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Kunal Basin</div>
                                        <div class="fs-6 ">Sales Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <div class="fs-6 ">Business Development Consultant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Arti --}}
                <div class="col-md-3 mb-4">
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
                                        <div class="fs-6 ">Student Counsellor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

                {{-- Abhishek --}}
                <div class="col-md-3 mb-4">
                    <div class="item">
                        <div class="shadow-effect corebox flip rounded-3" style="
                        background: white;
                    ">
                            <div class=" ">
                                <img class="img-circle rounded-3 img-fluid"
                                    src="{{ asset('assets/websiteAssets/images/team/Abhishek-wh-300x300.jpg') }}" alt="client" style="
                                    height: 245px;
                                ">
                            </div>
                            <div class="authorbox rounded-3">
                                <div class="testimonial-name d-flex  text-white">
                                    <div>
                                        <div class="author">Mr. Abhishek Singh Rathore</div>
                                        <div class="fs-6 ">Business Development Consultant</div>
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
