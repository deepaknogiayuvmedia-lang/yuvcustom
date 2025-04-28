{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Meta Settings')
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-7">

                            <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class="ti ti-menu fs-5 d-flex"></i>
                            </button>
                        </div>
                        <form action="#" class="form-horizontal">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Select Page<span class="text-danger">*</span>
                                        </label>
                                        <select name="page" class="form-select mr-sm-2 mb-2" id="pagedropdown" required>
                                            <option selected="">--select page--</option>
                                            <option value="homepage">Home</option>
                                            <option value="about">About Us</option>
                                            <option value=ourteam">Our Team</option>
                                            <option value="lifeatyuvmedia">Life @ Yuvmedia</option>
                                            <option value="seo">SEO</option>
                                            <option value="socialmedia">Social Media</option>
                                            <option value="whatsappmarketing">Whatsapp Marketing</option>
                                            <option value="videoproduction">Video Production</option>
                                            <option value="webdevelopment">Web Development</option>
                                            <option value="designingservices">Designing Services</option>
                                            <option value="performancemedia">Performance Media</option>
                                            <option value="marketplaceexpertise">Marketplace Expertise</option>
                                            <option value="influencermarketing">Influencer Marketing</option>
                                            <option value="googlebusinessprofile">Google Business Profile</option>
                                            <option value="erpservices">ERP Services</option>
                                            <option value="emailmarketing">Email Marketing</option>
                                            <option value="clients">Clients</option>
                                            <option value="blogs">Blogs</option>
                                            <option value="partners">Partners</option>
                                            <option value="casestudies">Case Studies</option>
                                            <option value="career">Career</option>
                                            <option value="contact">Contact Us</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Meta Title<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Title" name="metatitle" class="form-control" maxlength="50" required>
                                        <p class="fs-2 text-start text-danger mb-0 fw-bold">
                                            (Maximum 50 Characters)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Meta Author<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Autor for Meta Tag" name="authorname" class="form-control" maxlength="50" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <form onsubmit="return false;">
                                            <div class="">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Enter Meta Keywords</label>
                                                        <input type="text" name="input" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label">Meta Description</label>
                                    <div class="form-group">
                                        <textarea class="form-control" maxlength="150" rows="5" name="metadescription" placeholder="Your Description Here..."></textarea>
                                    </div>
                                    <p class="fs-2 text-start text-danger mb-0 fw-bold">
                                        (Maximum 150 Characters)
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start mb-5">
                <button type="button" id="submitAllForms" class="btn btn-primary">
                    Save Settings
                </button>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[name="input"]').tagsinput({
                trimValue: true
                , confirmKeys: [13, 44]
                , focusClass: 'my-focus-class'
            });

            $('.bootstrap-tagsinput input').on('focus', function() {
                $(this).closest('.bootstrap-tagsinput').addClass('has-focus');
            }).on('blur', function() {
                $(this).closest('.bootstrap-tagsinput').removeClass('has-focus');
            });

        });

        document.getElementById("flexCheckDefault").addEventListener("change", function() {
            var dateInput = document.getElementById("dateInput");
            dateInput.style.display = this.checked ? "block" : "none";
        });

    </script>
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

            //Get keywords here..
            let keywords = $('input[name="input"]').tagsinput('items');
            combinedFormData.append("keywords", JSON.stringify(keywords));

            // Log the combined form data to the console
            for (let [key, value] of combinedFormData.entries()) {
                console.log(key, value);
            }

            // Send AJAX request with CSRF token
            $.ajax({
                url: '/admin/saveMetaSettings'
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
        $(document).ready(function() {
            $('#pagedropdown').on('change', function() {
                var pagename = $(this).val();
                console.log("Selected value: " + pagename);
                $.ajax({
                    url: '/admin/GetMetaSettings',
                    method: 'POST',
                    data: {
                        pagename: pagename
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status == 200) {
                            $('input[name="metatitle"]').val(response.data.metatitle);
                            $('input[name="authorname"]').val(response.data.authorname);
                            $('textarea[name="metadescription"]').val(response.data.metadescription);
                            $('input[name="input"]').tagsinput('removeAll');
                            var keywords = JSON.parse(response.data.keywords);
                            for (var i = 0; i < keywords.length; i++) {
                                $('input[name="input"]').tagsinput('add', keywords[i]);
                            }
                        } else {
                            console.error("Error fetching data:", response.message);
                        }
                    }
                });
            });
        });
    </script>
</x-app-layout>
