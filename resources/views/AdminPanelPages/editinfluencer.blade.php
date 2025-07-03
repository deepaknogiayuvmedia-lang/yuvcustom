{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Edit Details | '. $data->fullname)
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
                    <div class="col-md-2 d-flex justify-content-end align-items-center">
                        <div class="">
                            <a href="{{ route('admin.influencerscart') }}" class="btn btn-outline-primary">
                                <i class="ti ti-arrow-narrow-left"></i> Go Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-7">
                            <h4 class="card-title">Influencer Information</h4>
                            <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class="ti ti-menu fs-5 d-flex"></i>
                            </button>
                        </div>
                        <form action="{{route('admin.updateInfluencer')}}" method="POST" enctype="multipart/form-data" class="rounded p-4 form-horizontal">
                            @csrf
                            <!-- Personal Details -->
                            <h5 class="mb-3 fw-bold">Personal Details</h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Category <span class="text-danger">*</span></label>
                                    <select class="form-select" name="category">
                                        <option value="">--select category--</option>
                                        @foreach($categories as $key => $value)
                                        <option value="{{$value->label}}" {{$value->label == $data->category ? 'selected' : ''}}>{{$value->label}}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="influid" value="{{$data->id}}">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Fullname <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{$data->fullname}}" name="fullname" placeholder="Full Name">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" value="{{$data->dob}}" name="dob">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" value="{{$data->emailaddress}}" name="emailaddress" placeholder="Email Address">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" value="{{$data->contactnumber}}" name="contactnumber" placeholder="Enter Phone/Mobile">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Upload Profile Image <small class="text-danger">(Max 2 MB)</small></label>
                                    <input type="file" class="form-control" name="profileimage" accept="image/*">
                                    <div class="mt-2">
                                        <img id="profileImagePreview" src="{{asset('assets/websiteAssets/images/Influencers/'.$data->profileimage ?? '')}}" alt="Profile Image Preview" style="max-width: 100px; max-height: 100px;">
                                    </div>
                                </div>
                                @php
                                    $selectedPlatforms = is_array($data->platforms) ? $data->platforms : (json_decode($data->platforms, true) ?? []);
                                @endphp
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Select Platforms</label>
                                    <select name="platforms[]" class="select2 form-control" multiple="multiple">
                                        <option value="">--select platform--</option>
                                        <option value="Facebook" {{ in_array('Facebook', $selectedPlatforms) ? 'selected' : '' }}>Facebook</option>
                                        <option value="Instagram" {{ in_array('Instagram', $selectedPlatforms) ? 'selected' : '' }}>Instagram</option>
                                        <option value="Youtube" {{ in_array('Youtube', $selectedPlatforms) ? 'selected' : '' }}>Youtube</option>
                                        <option value="Linkedin" {{ in_array('Linkedin', $selectedPlatforms) ? 'selected' : '' }}>Linkedin</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <hr class="my-4">
                            <h5 class="mb-3 fw-bold">Address Information</h5>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <pre class="json-preview d-none"><code id="js-preview-json">{}</code></pre>
                                    <label class="form-label">Full Location</label>
                                    <input type="text" class="form-control" id="address" name="location" placeholder="Enter Address to Search">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" value="{{$data->city}}"  id="cityinput" name="city" placeholder="Enter City">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" value="{{$data->state}}"  id="stateinput" name="state" placeholder="Enter State">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control" value="{{$data->country}}"  id="countryinput" name="country" placeholder="Enter Country">
                                </div>
                            </div>

                            <!-- Social Media Links -->
                            <hr class="my-4">
                            <h5 class="mb-3 fw-bold">Social Media Links</h5>
                            <div class="row">
                                <div class="col-md-6 col-lg-3 mb-3">
                                    <label class="form-label">Instagram Link</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                        <input type="url" class="form-control" name="instagram" placeholder="Enter Instagram Link" value="{{$data->instagramprofilelink}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-3">
                                    <label class="form-label">Facebook Link</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                        <input type="url" class="form-control" name="facebook" placeholder="Enter Facebook Link" value="{{$data->facebookprofile}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-3">
                                    <label class="form-label">YouTube Link</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-youtube"></i></span>
                                        <input type="url" class="form-control" name="youtube" placeholder="Enter YouTube Link" value="{{$data->youtubeprofile}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-3">
                                    <label class="form-label">LinkedIn Link</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-linkedin"></i></span>
                                        <input type="url" class="form-control" name="linkedin" placeholder="Enter LinkedIn Link" value="{{$data->linkedinprofile}}">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 float-end">
                                <button type="submit" class="btn btn-primary px-4">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_KLtDmYZB0Qy_b0f6LHJSlDV2wYYPf8s&libraries=places"></script>
    <script>
        var locationInfo = {
            geo: null
            , country: null
            , state: null
            , city: null
            , postalCode: null
            , street: null
            , streetNumber: null
            , reset: function() {
                this.geo = null;
                this.country = null;
                this.state = null;
                this.city = null;
                this.postalCode = null;
                this.street = null;
                this.streetNumber = null;
            }
        , };

        function initAutocomplete() {
            var addressField = document.getElementById("address");
            var autocomplete = new google.maps.places.Autocomplete(
                addressField, {
                    types: ["geocode"]
                , }
            );

            autocomplete.addListener("place_changed", function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    return;
                }

                var address = place.address_components;
                var lat = place.geometry.location.lat();
                var lng = place.geometry.location.lng();

                locationInfo.reset();
                locationInfo.geo = [lat, lng];

                for (var i = 0; i < address.length; i++) {
                    var component = address[i].types[0];
                    switch (component) {
                        case "country":
                            locationInfo.country = address[i].long_name;
                            break;
                        case "administrative_area_level_1":
                            locationInfo.state = address[i].long_name;
                            break;
                        case "locality":
                            locationInfo.city = address[i].long_name;
                            break;
                        case "postal_code":
                            locationInfo.postalCode = address[i].long_name;
                            break;
                        case "route":
                            locationInfo.street = address[i].long_name;
                            break;
                        case "street_number":
                            locationInfo.streetNumber =
                                address[i].long_name;
                            break;
                    }
                }


                // Display JSON output
                document.getElementById("js-preview-json").textContent = JSON.stringify(locationInfo, null, 4);
                document.getElementById("cityinput").value = locationInfo.city
                document.getElementById("stateinput").value = locationInfo.state
                document.getElementById("countryinput").value = locationInfo.country
            });
        }
        window.onload = initAutocomplete;

    </script>
</x-app-layout>
