@extends('website.layout.websitemain')
@section('title', 'Clients | ' . config('app.name'))
@section('content')
<style>
    .custom-scrollbar {
        background-color: transparent;
        white-space: nowrap;
        scrollbar-width: thin;
        scrollbar-color: #0f0f0f3d #0000000d;
        padding: 10px;
    }

    .custom-scrollbar::-webkit-scrollbar {
        height: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: black;
        border-radius: 10px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: linear-gradient(to right, #0d6efd, #be73ff, #03cf64);
        border-radius: 10px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to right, #0a58ca, #9c5bcc, #02b755);
    }

</style>
<section id="aboutfirstsection" class="pt-3">
    <div class="container pt-5" style="position: relative;">
        <div class="row">
            <div class="text-center fs-1 fw-bold ">
                Our Clients <br>
                <span class="globaltxtcolor">Building Success Together.</span>
            </div>
            <div class="text-center">
                <p class="text-wrap aboutsecondhead">
                    At Yuvmedia, we empower brands with cutting-edge digital solutions, <br />blending strategy, creativity, and technology to drive meaningful growth.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="d-flex-justify-content-center client-container">
        <div class="row  bg-transparent py-md-3 py-1 mt-3 rounded-0 align-items-center clients-tabs">
            <div class="col-md-12 col">
                <ul class="nav nav-underline mb-3 d-flex flex-nowrap overflow-auto custom-scrollbar" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="false">All</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-retail-tab" data-bs-toggle="pill" data-bs-target="#pills-retail" type="button" role="tab" aria-controls="pills-retail" aria-selected="false">Retail & E-Commerce</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-stock-tab" data-bs-toggle="pill" data-bs-target="#pills-stock" type="button" role="tab" aria-controls="pills-stock" aria-selected="false">Stock Traders</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-food-tab" data-bs-toggle="pill" data-bs-target="#pills-food" type="button" role="tab" aria-controls="pills-food" aria-selected="false">Food & Beverages</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-tourism-tab" data-bs-toggle="pill" data-bs-target="#pills-tourism" type="button" role="tab" aria-controls="pills-tourism" aria-selected="false">Tourism & Hospitality</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-education-tab" data-bs-toggle="pill" data-bs-target="#pills-education" type="button" role="tab" aria-controls="pills-education" aria-selected="false">Education & Training</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-healthcare-tab" data-bs-toggle="pill" data-bs-target="#pills-healthcare" type="button" role="tab" aria-controls="pills-healthcare" aria-selected="false">Healthcare & Wellness</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-fashion-tab" data-bs-toggle="pill" data-bs-target="#pills-fashion" type="button" role="tab" aria-controls="pills-fashion" aria-selected="false">Fashion & Apparel</button></li>
                    <li class="nav-item " role="presentation"><button class="nav-link " id="pills-ngos-tab" data-bs-toggle="pill" data-bs-target="#pills-ngos" type="button" role="tab" aria-controls="pills-ngos" aria-selected="true">NGOs & Non-Profits</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-tech-tab" data-bs-toggle="pill" data-bs-target="#pills-tech" type="button" role="tab" aria-controls="pills-tech" aria-selected="false">Technology & IT Services</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-beauty-tab" data-bs-toggle="pill" data-bs-target="#pills-beauty" type="button" role="tab" aria-controls="pills-beauty" aria-selected="false">Beauty & Personal Care</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-finance-tab" data-bs-toggle="pill" data-bs-target="#pills-finance" type="button" role="tab" aria-controls="pills-finance" aria-selected="false">Finance & Investment</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-astrology-tab" data-bs-toggle="pill" data-bs-target="#pills-astrology" type="button" role="tab" aria-controls="pills-astrology" aria-selected="false">Astrology</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-manufacturing-tab" data-bs-toggle="pill" data-bs-target="#pills-manufacturing" type="button" role="tab" aria-controls="pills-manufacturing" aria-selected="false">Manufacturing & Industrial</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-automobile-tab" data-bs-toggle="pill" data-bs-target="#pills-automobile" type="button" role="tab" aria-controls="pills-automobile" aria-selected="false">Automobile & Transportation</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-media-tab" data-bs-toggle="pill" data-bs-target="#pills-media" type="button" role="tab" aria-controls="pills-media" aria-selected="false">Media & Entertainment</button></li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach ([
                    'ngosnonprofits',
                    'foodbeverages',
                    'fashionapparel',
                    'technologyitservices',
                    'beautypersonalcare',
                    'financeinvestment',
                    'stocktraders',
                    'astrology',
                    'tourismhospitality',
                    'manufacturingindustrial',
                    'educationtraining',
                    'automobiletransportation',
                    'retailecommerce',
                    'mediaentertainment',
                    'healthcarewellness'
                    ] as $category)
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/' . $category)) as $image)
                    <div class="col-md-2 col-6 p-3">
                        <img src="{{ asset('assets/websiteAssets/images/clients/' . $category . '/' . $image->getFilename()) }}" alt="{{ $category }} client" class="firstimg img-fluid" />
                        <img src="{{ asset('assets/websiteAssets/images/clients/' . $category . '/' . $image->getFilename()) }}" alt="{{ $category }} client" class="secondimg img-fluid" />
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-retail" role="tabpanel" aria-labelledby="pills-retail-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/retailecommerce')) as $image)
                    <div class="col-md-2 col-6 p-3">
                        <img src="{{ asset('assets/websiteAssets/images/clients/retailecommerce/' . $image->getFilename()) }}" alt="retail client" class=" firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/retailecommerce/' . $image->getFilename()) }}" alt="retail client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-stock" role="tabpanel" aria-labelledby="pills-stock-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/stocktraders')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/stocktraders/' . $image->getFilename()) }}" alt="stock client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/stocktraders/' . $image->getFilename()) }}" alt="stock client" class="secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-food" role="tabpanel" aria-labelledby="pills-food-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/foodbeverages')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/foodbeverages/' . $image->getFilename()) }}" alt="food client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/foodbeverages/' . $image->getFilename()) }}" alt="food client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-tourism" role="tabpanel" aria-labelledby="pills-tourism-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/tourismhospitality')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/tourismhospitality/' . $image->getFilename()) }}" alt="tourism client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/tourismhospitality/' . $image->getFilename()) }}" alt="tourism client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/educationtraining')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/educationtraining/' . $image->getFilename()) }}" alt="education client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/educationtraining/' . $image->getFilename()) }}" alt="education client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-healthcare" role="tabpanel" aria-labelledby="pills-healthcare-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/healthcarewellness')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset(path: 'assets/websiteAssets/images/clients/healthcarewellness/' . $image->getFilename()) }}" alt="healthcare client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/healthcarewellness/' . $image->getFilename()) }}" alt="healthcare client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-fashion" role="tabpanel" aria-labelledby="pills-fashion-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/fashionapparel')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/fashionapparel/' . $image->getFilename()) }}" alt="fashion client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/fashionapparel/' . $image->getFilename()) }}" alt="fashion client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade " id="pills-ngos" role="tabpanel" aria-labelledby="pills-ngos-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="ecommerce">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/ngosnonprofits')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/ngosnonprofits/' . $image->getFilename()) }}" alt="ngo client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/ngosnonprofits/' . $image->getFilename()) }}" alt="ngo client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-tech" role="tabpanel" aria-labelledby="pills-tech-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/technologyitservices')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/technologyitservices/' . $image->getFilename()) }}" alt="tech client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/technologyitservices/' . $image->getFilename()) }}" alt="tech client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-beauty" role="tabpanel" aria-labelledby="pills-beauty-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/beautypersonalcare')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/beautypersonalcare/' . $image->getFilename()) }}" alt="beauty client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/beautypersonalcare/' . $image->getFilename()) }}" alt="beauty client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-finance" role="tabpanel" aria-labelledby="pills-finance-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/financeinvestment')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/financeinvestment/' . $image->getFilename()) }}" alt="finance client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/financeinvestment/' . $image->getFilename()) }}" alt="finance client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-astrology" role="tabpanel" aria-labelledby="pills-astrology-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/astrology')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/astrology/' . $image->getFilename()) }}" alt="astrology client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/astrology/' . $image->getFilename()) }}" alt="astrology client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-manufacturing" role="tabpanel" aria-labelledby="pills-manufacturing-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/manufacturingindustrial')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/manufacturingindustrial/' . $image->getFilename()) }}" alt="manufacturing client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/manufacturingindustrial/' . $image->getFilename()) }}" alt="manufacturing client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-automobile" role="tabpanel" aria-labelledby="pills-automobile-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/automobiletransportation')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/automobiletransportation/' . $image->getFilename()) }}" alt="automobile client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/automobiletransportation/' . $image->getFilename()) }}" alt="automobile client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-media" role="tabpanel" aria-labelledby="pills-media-tab" tabindex="0">
                <div class="row g-3 justify-content-start align-items-center mt-3" id="">
                    @foreach (File::files(public_path('assets/websiteAssets/images/clients/mediaentertainment')) as $image)
                    <div class="col-md-2 col-6">
                        <img src="{{ asset('assets/websiteAssets/images/clients/mediaentertainment/' . $image->getFilename()) }}" alt="media client" class="firstimg img-fluid">
                        <img src="{{ asset('assets/websiteAssets/images/clients/mediaentertainment/' . $image->getFilename()) }}" alt="media client" class=" secondimg img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
