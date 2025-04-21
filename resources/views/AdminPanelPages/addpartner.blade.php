{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Add Partner')
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
                                    <a class="text-muted text-decoration-none" href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">@yield('title')</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-2 d-flex justify-content-end align-items-center">
                        <div class="">
                            <a href="#" class="btn btn-outline-primary">
                                <i class="ti ti-arrow-narrow-left"></i> Go Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-7">
                            <h4 class="card-title">Partner Page Information</h4>

                            <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class="ti ti-menu fs-5 d-flex"></i>
                            </button>
                        </div>
                        <form action="#" class="form-horizontal">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Name<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" placeholder="Partner Name" name="partnername" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Partner Type<span class="text-danger">*</span>
                                        </label>
                                        <select name="partnertype" class="form-select mr-sm-2  mb-2" id="inlineFormCustomSelect" required>
                                            <option selected="">--select partner type--</option>
                                            @foreach ($partnerstypes as $data)
                                            <option value="{{$data->label}}">{{$data->label}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Email Address<span class="text-danger">*</span>
                                        </label>
                                        <input type="email" placeholder="Your Email Address" name="partneremail" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Phone Number<span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">+91</span>
                                            <input type="text" class="form-control" name="partnerphone" placeholder="Your Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        {{-- <input type="text" placeholder="Your Phone Number" name="partnerphone" class="form-control" required> --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">City<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="address" placeholder="Enter City to Search" name="city" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">State<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" placeholder="State" id="stateinput" name="state" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="form-label">About Us Content<span class="text-danger">*</span> </label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="aboutuscontent" placeholder="Your Content Here..."></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="offcanvas-md offcanvas-end overflow-auto" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-7">Profile Image</h4>
                            <form action="#" class="dropzone dz-clickable mb-2" id="blogthumbnail">
                                <div class="dz-default dz-message">
                                    <button class="dz-button" type="button">Drop Image here
                                        to upload</button>
                                </div>
                            </form>
                            <p class="fs-2 text-center text-danger mb-0">
                                Set the case study image. Only *.png, *.jpg and *.jpeg image files are accepted.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start mb-5">
                <button type="button" id="submitAllForms" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
    <script>
        document.querySelector("#submitAllForms").addEventListener("click", function(event) {
            event.preventDefault();
            const combinedFormData = new FormData();
            const forms = document.querySelectorAll("form");

            // Iterate through each form and append data to combinedFormData
            forms.forEach(form => {
                const formData = new FormData(form);
                for (let [key, value] of formData.entries()) {
                    combinedFormData.append(key, value);
                }
            })

            // Get Dropzone instances
            const profileimage = Dropzone.forElement("#blogthumbnail");


            // Check if there are any files selected for the profileimage
            if (profileimage.files.length > 0) {
                profileimage.files.forEach((file) => {
                    // Append each file to FormData
                    combinedFormData.append("profileimage", file);
                });
                console.log("profileimage:", profileimage.files);
            }

            // Log the combined form data to the console
            for (let [key, value] of combinedFormData.entries()) {
                console.log(key, value);
            }

            // Send AJAX request with CSRF token
            $.ajax({
                url: '/admin/insertpartner'
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
</x-app-layout>
