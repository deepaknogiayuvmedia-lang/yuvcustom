@extends('website.layout.websitemain')
@section('title', 'Clients | ' . config('app.name'))

@section('content')
    <style>
        .custom-scrollbar {
            background-color: #e7f4fe;
            white-space: nowrap;
            scrollbar-width: thin;
            scrollbar-color: #0f0f0f3d #0000000d;
            padding: 10px;
            border-radius: 10px
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

        .client-img-wrapper {
            position: relative;
            overflow: hidden;
        }

        .client-img-wrapper img {
            transition: transform 0.3s ease-in-out;
        }

        .client-img-wrapper:hover img {
            transform: scale(1.1);
        }

        .clients-tabs {
            position: sticky;
            top: 50px;
            z-index: 99;
            background-color: transparent;
            transition: background-color 0.3s ease;
            border-radius: 20px;
        }
    </style>

    <section id="aboutfirstsection" class="pt-3">
        <div class="container pt-5">
            <div class="row">
                <div class="text-center fs-1 fw-bold">
                    Our Clients <br>
                    <span class="globaltxtcolor">Inspiring Progress Through Collaboration.</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap aboutsecondhead">
                        Yuvmedia blends strategic thinking, creative excellence, and modern tools to help you move
                        forward—smarter.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="client-container">
            <div class="row bg-transparent py-md-3 py-1 mt-3 clients-tabs">
                <div class="col-md-12">
                    <ul class="nav nav-underline mb-3 d-flex flex-nowrap overflow-auto custom-scrollbar" id="pills-tab"
                        role="tablist">
                        @php
                            $tabs = [
                                'all' => 'All',
                                'retailecommerce' => 'Retail & E-Commerce',
                                'stocktraders' => 'Stock Traders',
                                'foodbeverages' => 'Food & Beverages',
                                'tourismhospitality' => 'Tourism & Hospitality',
                                'educationtraining' => 'Education & Training',
                                'healthcarewellness' => 'Healthcare & Wellness',
                                'fashionapparel' => 'Fashion & Apparel',
                                'ngosnonprofits' => 'NGOs & Non-Profits',
                                'technologyitservices' => 'Technology & IT Services',
                                'beautypersonalcare' => 'Beauty & Personal Care',
                                'financeinvestment' => 'Finance & Investment',
                                'astrology' => 'Astrology',
                                'manufacturingindustrial' => 'Manufacturing & Industrial',
                                'automobiletransportation' => 'Automobile & Transportation',
                                'mediaentertainment' => 'Media & Entertainment',
                            ];
                        @endphp
                        @foreach ($tabs as $key => $label)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                    id="pills-{{ $key }}-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-{{ $key }}" type="button" role="tab"
                                    aria-controls="pills-{{ $key }}"
                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                    {{ $label }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                {{-- ALL TAB --}}
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                    tabindex="0">
                    <div class="row g-3 justify-content-start align-items-center mt-3">
                        @foreach (array_keys($tabs) as $category)
                            @if ($category !== 'all')
                                @foreach (File::files(public_path("assets/websiteAssets/images/clients/$category")) as $image)
                                    <div class="col-md-2 col-4 p-2 p-md-3 mt-0">
                                        <div class="client-img-wrapper">
                                            <img src="{{ asset("assets/websiteAssets/images/clients/$category/" . $image->getFilename()) }}"
                                                alt="{{ $category }} client" class="img-fluid firstimg"
                                                loading="lazy" />
                                            <img src="{{ asset("assets/websiteAssets/images/clients/$category/" . $image->getFilename()) }}"
                                                alt="{{ $category }} client" class="img-fluid secondimg"
                                                loading="lazy" />
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>

                {{-- CATEGORY TABS --}}
                @foreach ($tabs as $key => $label)
                    @if ($key !== 'all')
                        <div class="tab-pane fade" id="pills-{{ $key }}" role="tabpanel"
                            aria-labelledby="pills-{{ $key }}-tab" tabindex="0">
                            <div class="row g-3 justify-content-start align-items-center mt-3">
                                @foreach (File::files(public_path("assets/websiteAssets/images/clients/$key")) as $image)
                                    <div class="col-md-2 col-4 p-2 p-md-3  mt-0">
                                        <div class="client-img-wrapper">
                                            <img src="{{ asset("assets/websiteAssets/images/clients/$key/" . $image->getFilename()) }}"
                                                alt="{{ $key }} client" class="img-fluid firstimg"
                                                loading="lazy" />
                                            <img src="{{ asset("assets/websiteAssets/images/clients/$key/" . $image->getFilename()) }}"
                                                alt="{{ $key }} client" class="img-fluid secondimg"
                                                loading="lazy" />
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid bg-black p-0">
        <div class="container p-3">
            <div class=" text-start fs-3 fw-bold d-flex justify-content-between flex-wrap align-items-center">
                <div class="text-white">
                    It’s not just who we work for, it’s who we work with.
                </div>
                <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                    <div class="me-3 mt-2">
                        <a href="{{ route('managingpartners') }}" class="btn btn-primary btn-lg">Explore Our Partners
                            <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
