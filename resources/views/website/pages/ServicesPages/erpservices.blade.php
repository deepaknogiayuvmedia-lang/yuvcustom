@extends('website.layout.websitemain')
@section('title', 'ERP Implementation Services | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class="py-5 position-relative">
        <div class="container pt-5">
            <div class=" row">
                <div class="col-md-12">
                    <div class="text-center globaltxtcolor fs-1">
                        Automate, Integrate, and Innovate with Our ERP Services

                    </div>
                    <div class="text-center py-2">
                        <div class="fw-bold fs-5">
                            Future-Proof Your Business with Advanced ERP Solution
                        </div>
                        <p class="text-wrap ">
                            Optimize your operations, enhance productivity, and unlock growth with our tailored ERP implementation services. Whether you’re upgrading existing systems or starting fresh, we ensure seamless integration, data accuracy, and efficient workflows. Empower your business with a solution built for scalability and success.

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
                        Upgrade to Smarter Workflows with ERP Solutions


                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap seosecondhead">
                            Sales, production, purchasing, delivery, marketing, and human resources are just a few of the corporate operations and resources that are unified by enterprise resource planning, or ERP, an integrated software solution. It is a versatile platform that works with companies of all sizes, from start-ups to multinational corporations. 
                        </p>
                        <p class="text-wrap seosecondhead">
                            Today's lightweight, customized solutions concentrate on the unique requirements of a firm, whereas conventional ERP systems offered a wide range of functionalities. A committed group of ERP specialists who are aware of the subtleties of multifunctional applications is required to develop a genuinely potent ERP system.
                        </p>
                    </div>

                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href=" {{ route('contact') }}" class="btn btn-lg  seobbtn">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
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
                    Empowering Your Business with Seamless ERP Solutions
                </div>
                <div class=" py-2">
                    <p class="text-wrap ">
                        Providing comprehensive services from consulting to the complete deployment of your enterprise resource planning software, we are a top ERP development firm. Creating unique ERP solutions that meet the demands of diverse sectors is our team's area of expertise.
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
                            <p class="card-text text-start">
                                Tailor-made ERP solutions designed to meet your unique business needs, ensuring a seamless workflow, enhanced efficiency, and improved decision-making processes.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/data-migration.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">ERP Migration</div>
                            <p class="card-text text-start">
                                Smooth transition to a new ERP system with minimal downtime. Our experts handle data migration and system integration, ensuring a seamless switch without disrupting business operations.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/staff-management.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Staff Augmentation</div>
                            <p class="card-text text-start">
                                Boost your team's capabilities with experienced ERP specialists on-demand. Our staff augmentation service provides skilled professionals to complement your in-house resources for project success.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/conversation.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">ERP Consulting</div>
                            <p class="card-text text-start">
                                Expert advice and guidance on ERP selection, implementation, and optimization. We help you navigate the ERP landscape to find the best solution that aligns with your business goals.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/web.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Web Based ERP</div>
                            <p class="card-text text-start">Access your ERP system from anywhere with our cloud-based solutions. We offer scalable, secure, and flexible web-based ERP platforms that grow with your business.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/system-integration.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">ERP Integration</div>
                            <p class="card-text text-start">Seamlessly integrate your ERP system with existing tools and software. Our ERP integration services ensure smooth data flow across platforms, enhancing operational efficiency and data consistency.
                            </p>

                        </div>
                    </div>
                </div>



                <div class="text-center py-2 bg-success-subtle rounded-4 mt-3">
                    <h5>Discover Yuvmedia ERP Solutions' Power
                    </h5>
                    <p class="text-wrap ">
                        Use Yuvmedia's ERP services to grow your company and concentrate on your core competencies. From implementation to continuous optimization, we'll take care of the rest.

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
                        Based on the business needs, we offer the ERP implementation services for the following ERP modules to increase the efficiency of your workflows.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="row m-2 gmbcardssecthree align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/icons/enviromentally-friendly.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Manufacturing</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/icons/ecommerce.png') }}" alt="service bg"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">E-Commerce</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/icons/crm.png') }}" alt="service bg"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">CRM</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/icons/material-management.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Inventory</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/icons/social-media.png') }}" alt="service bg"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Marketing & Sales</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/icons/team.png') }}" alt="service bg"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Human Resource Management</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/icons/data-analysis.png') }}"
                                alt="service bg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="card-title">Financials & Accounting</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="row m-2 gmbcardssecthree align-items-center">

                        <div class="col-md-4">
                            <img src="{{ asset('assets/websiteAssets/images/icons/supply-chain.png') }}" alt="service bg"
                                class="img-fluid">
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
                        We are aware of the difficulties companies encounter when integrating the newest technology and updating ERP systems. To provide the best ERP system for your requirements, our team combines these advances with our extensive experience. To guarantee the best ERP performance, we concentrate on the following important technologies:
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 col-6">
                    <div class=" mb-3 border-0 rounded-pill shadow">
                        <img src="{{ asset('assets/websiteAssets/images/services/odoo.jpg') }}"
                            class="img-fluid rounded-pill p-2">
                    </div>

                </div>
                <div class="col-md-3 col-6">
                    <div class=" mb-3 border-0 rounded-pill shadow">
                        <img src="{{ asset('assets/websiteAssets/images/services/salesforce.jpg') }}"
                            class="img-fluid rounded-pill p-2">
                    </div>

                </div>
                <div class="col-md-3 col-6">
                    <div class=" mb-3 border-0 rounded-pill shadow">
                        <img src="{{ asset('assets/websiteAssets/images/services/zoho.jpeg') }}"
                            class="img-fluid rounded-pill p-2">
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class=" position-relative py-5">
        <div class="container justify-content-center">
            <div class="row">
                <div class=" globaltxtcolor">
                    Your Trusted Partner in ERP Innovation
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/erp2.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Comprehensive ERP Solution</div>
                            <p class="card-text text-start">
                                A fully integrated ERP system designed to streamline all your business operations in one place.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/icons/data-migration.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Faster Development Timelines</div>
                            <p class="card-text text-start">
                                We deliver high-quality ERP solutions within optimized timeframes to accelerate your digital transformation
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/staff-management.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">End-to-End Support</div>
                            <p class="card-text text-start">
                                From planning to implementation and ongoing maintenance, we provide full-cycle ERP support.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/conversation.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Multi-Platform ERP Compatibility</div>
                            <p class="card-text text-start">
                                Our ERP solutions work seamlessly across desktop, mobile, and cloud platforms for maximum flexibility.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/web.png') }}" alt="service bg"
                                class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Smooth Integration</div>
                            <p class="card-text text-start">
                                Effortlessly integrate with your existing software and third-party applications without disruptions.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="gmbcardone shadow-sm rounded-3">
                        <div class="card-body text-start">
                            <img src="{{ asset('assets/websiteAssets/images/icons/system-integration.png') }}"
                                alt="service bg" class="mb-3 ">
                            <div class="card-title text-start fs-5 fw-bold">Assured Transparency </div>
                            <p class="card-text text-start">
                                Clear reporting, real-time insights, and complete visibility into your business processes ensure informed decision-making.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="text-center py-2 bg-success-subtle rounded-4 mt-3">
                    <h5>Optimize, Automate, and Grow with a Powerful ERP Solution!</h5>
                    <p class="text-wrap ">
                        Get a Customized ERP System Tailored to Your Business Needs.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
