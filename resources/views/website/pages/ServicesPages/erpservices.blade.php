@extends('website.layout.websitemain')
@section('title', 'ERP Implementation Services | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-5 position-relative">
        <div class="container pt-5">
            <div class=" row">
                <div class="col-md-12">
                    <div class="text-center globaltxtcolor fs-1">
                        ERP Implementation Services
                    </div>
                    <div class="text-center py-2">
                        <div class="fw-bold fs-5">
                            Streamline Your Business with Expert ERP Implementation Services
                        </div>
                        <p class="text-wrap ">
                            Optimize your operations, enhance productivity, and unlock growth with our tailored ERP
                            implementation services. Whether you’re upgrading existing systems or starting fresh, we ensure
                            seamless integration, data accuracy, and efficient workflows. Empower your business with a
                            solution built for scalability and success.
                        </p>
                    </div>

                    <div class="d-flex justify-content-center flex-wrap ">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg">Get Started for Free <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img class="seoimage " src="{{ asset('assets/websiteAssets/images/services/erp.png') }}" alt="seo">
                </div>
                <div class="col-md-6">
                    <div class="text-start fs-2 fw-bold">
                        Our ERP System Implementation Services

                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Enterprise Resource Planning (ERP) is a software solution that integrates all the necessary data
                            and information on business processes and resources (sale, production, purchasing, delivery,
                            marketing, human resources, etc.) and can be easily used by small, medium, & large-scale
                            industries. In the past, whenever a business entity needed a platform with broad functionality,
                            it was possible to adopt an existing ERP system, but there are now universal lightweight systems
                            that only have a special set of functions to address specific business requirements. In order to
                            create a powerful ERP system, it is necessary to have a dedicated ERP team that has experience
                            in building multi-role ERP applications.


                        </p>
                        <p class="text-wrap seosecondhead">
                            Got a robust ERP with the latest technology? We're always innovating and delivering the latest
                            in business software technology. Take your ERP development to the next level.
                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="#" class="btn btn-lg  seobbtn">Contact Us <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class=" position-relative ">
        <div class="container justify-content-center">
            <div class="row">
                <div class=" globaltxtcolor">
                    ERP Development Solutions
                </div>
                <div class=" py-2">
                    <p class="text-wrap ">
                        We are an ERP development company that offers a full range of services from consulting to the
                        implementation of your enterprise resource planning software. Our team consists of professionals who
                        have extensive experience in developing ERP software. We provide custom-built ERP software solutions
                        for various industries.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/erp2.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Custom ERP</div>
                            <p class="card-text text-start">We offer custom ERP development services to businesses of all
                                sizes and industries. Our ERP solutions are robust and scalable.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/data-migration.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">ERP Migration</div>
                            <p class="card-text text-start">Data migration is a complex process of relocating data from its
                                primary source into a database of a newly adopted ERP system.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/staff-management.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Staff Augmentation</div>
                            <p class="card-text text-start">We have an ERP staff augmentation program, which allows you to
                                hire the best skilled professionals to keep your project on target.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/conversation.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">ERP Consulting</div>
                            <p class="card-text text-start">Our ERP Consulting team understands your current business
                                environment and help you develop the best strategies to implement critical ERP.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/web.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Web Based ERP</div>
                            <p class="card-text text-start">With our technology-driven application-design solutions, you can
                                now automate your business anywhere and anytime.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/system-integration.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">ERP Integration</div>
                            <p class="card-text text-start">We provide custom ERP system integrations for your requirement
                                with emphasis on data security and enterprise data integrations.</p>
                            <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                        </div>
                    </div>
                </div>



                <div class="text-center py-2">
                    <p class="text-wrap fw-bold bg-success-subtle rounded-4">
                        Feel the impact of YUVMEDIA GMB Services and elevate your business to new heights while you
                        concentrate on what you do best.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 domains position-relative ">
        <div class="container">
            <div class="row">
                <div class="globaltxtcolor p-2">
                    Domains & Expertise
                </div>
                <div class=" py-2">
                    <p class="text-wrap ">
                        Based on the business needs, we offer the ERP implementation services for the following ERP modules
                        to increase the efficiency of your workflows.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ">
                    <div class="row m-2 gmbcardssecthree align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/competitive-analysis.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Manufacturing</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/competitive-analysis.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">eCommerce</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/competitive-analysis.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">CRM</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/competitive-analysis.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Inventory</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/competitive-analysis.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Marketing & Sales</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/competitive-analysis.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Human Resource Management</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/competitive-analysis.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Financials & Accounting</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/competitive-analysis.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Supply Chain Management</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 domains position-relative bannerbg">
        <div class="container">
            <div class="row">
                <div class="globaltxtcolor p-2 text-center">
                    Technologies We Specialize
                </div>
                <div class=" py-2">
                    <p class="text-wrap  text-center">
                        We recognize the fact that businesses are often challenged with ERP updates and the latest
                        technology investments. We blend this technology with our expertise and skills to provide you with
                        the best system for your needs. Here are some of the ERP technologies we follow to promote superior
                        functionality over competitive solutions.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 ">
                    <div class=" mb-3 border-0 rounded-pill shadow">
                        <img src="{{ asset('assets/websiteAssets/images/services/odoo.jpg') }}" class="img-fluid rounded-pill p-2">
                    </div>

                </div>
                <div class="col-md-3 ">
                    <div class=" mb-3 border-0 rounded-pill shadow">
                        <img src="{{ asset('assets/websiteAssets/images/services/salesforce.jpg') }}" class="img-fluid rounded-pill p-2">
                    </div>

                </div>
                <div class="col-md-3 ">
                    <div class=" mb-3 border-0 rounded-pill shadow">
                        <img src="{{ asset('assets/websiteAssets/images/services/zoho.jpeg') }}" class="img-fluid rounded-pill p-2">
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
