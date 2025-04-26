{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Upload Client Logos')
<x-app-layout>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h4 class="fw-semibold mb-8">@yield('title')</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">@yield('title')</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="client-container">
                            <div class="row bg-transparent py-md-3 py-1 mt-3 clients-tabs">
                                <div class="col-md-4">
                                    <label class="form-label">Filter Logos</label>
                                    <select class="form-select" id="clientCategorySelect">
                                        @php
                                        $tabs = [
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
                                        <option value="{{ $key }}">{{ $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row g-3 justify-content-start align-items-center mt-3" id="clientImagesContainer">
                                @foreach ($tabs as $key => $label)
                                @foreach (File::files(public_path("assets/websiteAssets/images/clients/$key")) as $image)
                                <div class="col-md-2 col-4 p-2 p-md-3 mt-0 client-image" data-category="{{ $key }}" style="display: none;">
                                    <div class="client-img-wrapper position-relative">
                                        <img src="{{ asset("assets/websiteAssets/images/clients/$key/" . $image->getFilename()) }}" alt="{{ $key }} client" class="img-fluid firstimg" loading="lazy" />
                                        <button type="button" onclick="RemoveGalleryItem('{{ asset("assets/websiteAssets/images/clients/$key/" . $image->getFilename()) }}');" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2" title="Delete">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-7">

                            <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class="ti ti-menu fs-5 d-flex"></i>
                            </button>
                        </div>
                        <form action="#" class="form-horizontal">
                            <div class="mb-4">
                                <label class="form-label">Select Directory</label>
                                <select name="directoryname" class="form-select mr-sm-2  mb-2" id="inlineFormCustomSelect" required>
                                    <option value="" selected="">--select directory--</option>
                                    <option value="retailecommerce">Retail & E-Commerce</option>
                                    <option value="stocktraders">Stock Traders</option>
                                    <option value="foodbeverages">Food & Beverages</option>
                                    <option value="tourismhospitality">Tourism & Hospitality</option>
                                    <option value="educationtraining">Education & Training</option>
                                    <option value="healthcarewellness">Healthcare & Wellness</option>
                                    <option value="fashionapparel">Fashion & Apparel</option>
                                    <option value="ngosnonprofits">NGOs & Non-Profits</option>
                                    <option value="technologyitservices">Technology & IT Services</option>
                                    <option value="beautypersonalcare">Beauty & Personal Care</option>
                                    <option value="financeinvestment">Finance & Investment</option>
                                    <option value="astrology">Astrology</option>
                                    <option value="manufacturingindustrial">Manufacturing & Industrial</option>
                                    <option value="automobiletransportation">Automobile & Transportation</option>
                                    <option value="mediaentertainment">Media & Entertainment</option>
                                </select>
                            </div>
                        </form>
                        <div class="offcanvas-md offcanvas-end overflow-auto" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="">
                                <div class="card-body">
                                    <h4 class="card-title mb-7">Upload Logos</h4>
                                    <form action="#" class="dropzone dz-clickable mb-2" id="logosform" enctype="multipart/form-data">
                                        <div class="dz-default dz-message">
                                            <button class="dz-button" type="button">Drop Thumbnail here
                                                to upload</button>
                                        </div>
                                    </form>
                                    <p class="fs-3 text-start text-danger mb-0 fw-bold">
                                        Upload Logos. Only *.png, .webp *.jpg and *.jpeg image files are accepted.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end mb-5">
                        <button type="button" id="submitAllForms" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.querySelector("#submitAllForms").addEventListener("click", function(event) {
                event.preventDefault();

                // Create a FormData object
                const combinedFormData = new FormData();

                // Select all forms
                const forms = document.querySelectorAll("form");

                // Iterate through each form and append data to combinedFormData
                forms.forEach(form => {
                    const formData = new FormData(form);
                    for (let [key, value] of formData.entries()) {
                        combinedFormData.append(key, value);
                    }
                });

                // Get logos instances
                const Logos = Dropzone.forElement("#logosform");
                Logos.files.forEach((file) => {
                    if (file) {
                        combinedFormData.append("logos[]", file);
                    }
                });

                // Log the combined form data to the console
                for (let [key, value] of combinedFormData.entries()) {
                    console.log(key, value);
                }

                // Send AJAX request with CSRF token
                $.ajax({
                    url: '/admin/insertlogos'
                    , method: 'POST'
                    , data: combinedFormData
                    , processData: false
                    , contentType: false
                    , headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                    , success: function(data) {
                        console.log("%cRaw response:", "background: black; color: green; font-size: 14px;", data);
                        try {
                            if (data.message) {
                                Swal.fire({
                                    title: "Success!"
                                    , text: data.message
                                    , icon: "success"
                                    , confirmButtonText: "OK"
                                    , customClass: {
                                        confirmButton: "btn btn-primary w-xs me-2 mt-2"
                                    }
                                    , buttonsStyling: true
                                    , showCancelButton: true
                                    , showCloseButton: true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.reload();
                                    }
                                });
                            } else {
                                Swal.fire({
                                    title: "Error!"
                                    , text: data.message
                                    , icon: "error"
                                    , confirmButtonText: "OK"
                                    , customClass: {
                                        confirmButton: "btn btn-primary w-xs me-2 mt-2"
                                    }
                                    , buttonsStyling: true
                                    , showCancelButton: true
                                    , showCloseButton: true
                                });
                            }
                        } catch (e) {
                            console.error("Failed to parse response:", e);
                            Swal.fire({
                                title: "Error!"
                                , text: "The response from the server is not valid JSON."
                                , icon: "error"
                            });
                        }
                    }
                });
            });

        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const select = document.getElementById('clientCategorySelect');
                const images = document.querySelectorAll('.client-image');

                function filterImages(category) {
                    images.forEach(img => {
                        if (img.dataset.category === category) {
                            img.style.display = 'block';
                        } else {
                            img.style.display = 'none';
                        }
                    });
                }

                // Default show first category
                filterImages(select.value);

                select.addEventListener('change', function() {
                    filterImages(this.value);
                });
            });

            function RemoveGalleryItem(url) {
                const Deleteurl = url;
                const directoryname = Deleteurl.split('/').slice(-2, -1)[0];
                console.log(Deleteurl);
                $.ajax({
                    url: "{{route('admin.removelogo')}}",
                    method: "GET",
                    data: {
                        url: Deleteurl,
                        directoryname: directoryname
                    },
                    success: function() {
                        console.log('deleted');
                        location.reload();
                    }
                });
            }

        </script>
</x-app-layout>
