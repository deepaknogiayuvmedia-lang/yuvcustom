@extends('website.layout.websitemain')
@section('title', 'Designing Services | ' . config('app.name'))
@section('content')
<section style="background-color: #f8f9fb;" class="py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-start grpahicheading">
                    Designs That Speak Your <span class="grpahicheadingsub">Brand's Language</span>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap grpahicsecondhead">
                        At Yuvmedia, we pride ourselves on offering comprehensive and innovative designing services
                        tailored to meet the unique needs of our clients. Our expertise covers a wide range of design
                        disciplines, ensuring that each project we take on is filled with creativity, accuracy, and
                        strategic insight.
                    </p>
                </div>
                <div class="text-start py-2">
                    <p class="text-wrap grpahicsecondhead">
                        Every brand has a unique story to tell, and our designs ensure your message is heard loud and
                        clear. We create visually compelling experiences that align perfectly with your brand's identity
                        and vision.
                    </p>
                </div>
                <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                    <div class="me-3">
                        <a href="#" class="btn btn-lg grpahicbbtn">Contact Us<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="grpahicbimage" src="{{ asset('assets/websiteAssets/images/graphicimghero.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section style="background-color: #e4f0ff;" class="py-5">
    <div class="container py-5 justify-content-center">
        <div class="row">
            <div class="text-center graphicheadingsecthree">
                Our Expertise <span class="graphicheadingsubsecthree">Spans</span>
            </div>
            <div class="text-center py-2">
                <p class="text-wrap graphicsecondheadsecthree">
                    When you partner with us, you gain more than just a video; you receive a captivating story that
                    aligns with your brand’s vision.
                </p>
            </div>
        </div>
        <div class="row gy-4 gx-4">
            <div class="col-md-4">
                <div class="graphicards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/web-design.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Graphic Design</p>
                        <p class="card-text text-start text-wrap">Our graphic design services are essential for creating impactful visuals that capture attention and convey messages effectively. Our skilled designers are best at producing eye-catching logos, compelling marketing materials.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="graphicards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/uiux.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">UI/UX Design</p>
                        <p class="card-text text-start text-wrap">User Interface (UI) and User Experience (UX) design is essential for any digital product. At Yuv Media, we specialize in creating user-friendly interfaces to enhance user satisfaction. Our process includes research, wireframing, prototyping, and testing.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="graphicards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/graphic-designer.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Branding and Identity Design</p>
                        <p class="card-text text-start text-wrap">Your brand is more than just a logo; it’s the core of your business and how you connect with your audience. Our branding and identity design services help you create a strong, unique brand. We work with you to develop a comprehensive brand strategy.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2 gy-4">
            <div class="col-md-4">
                <div class="graphicards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/3d-film.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Motion Graphics and 3D Animation</p>
                        <p class="card-text text-start text-wrap">Motion graphics and 3D animation add a dynamic dimension to your marketing efforts. Our team creates engaging motion graphics and 3D animations for your marketing needs, including explainer videos, promotional content, and animated logos.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="graphicards">
                    <div class="card-body text-start">
                        <img src="{{ asset('assets/websiteAssets/images/trim.png') }}" alt="service bg" class="mb-3"
                            style="width: 60px; height: 60px; object-fit: contain;">
                        <p class="fw-bold text-start">Video Editing</p>
                        <p class="card-text text-start text-wrap">Video editing is the process of arranging and manipulating video shots to create a cohesive final product, incorporating tasks such as trimming footage, adding transitions, special effects, and syncing audio. It relies on powerful software like Adobe Premiere Pro and DaVinci Resolve.</p>
                        <!-- <a href="#" class="btn whatcardbtn">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section
    style="background-image: url('{{ asset('assets/websiteAssets/images/graphicsectionback.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
    <div class="container py-5 justify-content-center">
        <div class="row">
            <div class="text-center webheading3">
                Work With the <span class="websubheading3">Latest Technology</span>
            </div>
            <div class="text-center fs-5">
                <p class="text-wrap webcontent3">
                    At Yuvmedia, we believe in the power of design to transform businesses and create meaningful connections with audiences. Our commitment to excellence and client satisfaction drives us to deliver outstanding design solutions. Partner with us to elevate your brand with design.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2 col-6">
                <div class="graphictechcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/graphictech/download-1-150x150.png') }}" alt="service bg"
                            class="mb-3 Premiumproimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center graphictechheadings">Premium pro</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="graphictechcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/graphictech/aftereffiect-1-150x150.png') }}" alt="service bg"
                            class="mb-3 AfterEffectimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center graphictechheadings">After Effect</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="graphictechcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/graphictech/kisspng-autodesk-maya-computer-software-adobe-illustrator-5bfbc9d4635ae9.680619741543227860407-150x150.jpg') }}" alt="service bg"
                            class="mb-3 mayaimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center graphictechheadings">Maya</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="graphictechcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/graphictech/7a9c7615d60e69b14db4711efeca98ed-150x150.png') }}"
                            alt="service bg" class="mb-3 Blenderimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center graphictechheadings">Blender</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="graphictechcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/graphictech/figma-150x150.webp') }}" alt="service bg"
                            class="mb-3 reactimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center graphictechheadings">Figma</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2 col-6">
                <div class="graphictechcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/graphictech/ai-150x150.webp') }}" alt="service bg"
                            class="mb-3 jsimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center graphictechheadings">Illustrator</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="graphictechcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/graphictech/coreldraw-150x150.webp') }}" alt="service bg"
                            class="mb-3 htmlimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center graphictechheadings">Corel draw</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="graphictechcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/graphictech/photoshop-1-150x150.png') }}" alt="service bg"
                            class="mb-3 cssimg" style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center graphictechheadings">Photoshop</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="graphictechcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/graphictech/indesign-150x150.png') }}"
                            alt="service bg" class="mb-3 bootstrapimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center graphictechheadings">Indesign</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="graphictechcards">
                    <div class="card-body">
                        <img src="{{ asset('assets/websiteAssets/images/graphictech/download-1-1-150x150.png') }}"
                            alt="service bg" class="mb-3 bootstrapimg"
                            style="width: 100px; height: 100px; object-fit: contain;">
                        <p class="text-center graphictechheadings">Animate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection