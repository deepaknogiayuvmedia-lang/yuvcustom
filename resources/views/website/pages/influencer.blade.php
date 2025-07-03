@extends('website.layout.websitemain')
@section('title', 'Influencer | ' . config('app.name'))
@section('content')

<section style="background-color:rgb(255, 255, 255);">
    <div class="container py-5">
        <div class=" row">
            <div class="text-center partnersheadingsectwo text-capitalize">
                Join Our Influencer Network <span class="fs-1 fw-bold globaltxtcolor">& Elevate Your Brand!</span>
            </div>
            <div class="text-center">
                <p class="text-wrap partnerssecondheadsectwo">
                    Become a part of our exclusive influencer community and unlock exciting opportunities to collaborate with top brands.
                </p>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if ($message = Session::get('error'))
            <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('send.influencerenquiry') }}" id="contact-form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="formcustomcard">
                                <div class="card-body">
                                    <!-- Personal Details Section -->
                                    <h5 class="text-start mb-4">Personal Details</h5>
                                    <hr>
                                    <div class="row gy-4">
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="labelid">Category <span class="text-danger fs-5">*</span> </label>
                                                <select name="category" class="form-select customforminput" id="servicetypeid" required>
                                                    <option value="" selected>--select category--</option>
                                                    @foreach($categories as $key => $value)
                                                    <option value="{{$value->label}}">{{$value->label}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('category')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">Fullname<span class="text-danger fs-5">*</span> </label>
                                                <input type="text" name="fullname" class="form-control customforminput" placeholder="Full Name" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">Date of Birth<span class="text-danger fs-5">*</span> </label>
                                                <input type="date" name="dob" class="form-control customforminput" placeholder="Full Name" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">Email Address<span class="text-danger fs-5">*</span>
                                                </label>
                                                <input required type="email" name="email" class="form-control customforminput" placeholder="Email Address">
                                            </div>
                                            @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">Contact Number<span class="text-danger fs-5">*</span> </label>
                                                <input type="tel" name="phone" class="form-control customforminput" placeholder="Enter Phone/Mobile" required>
                                            </div>
                                            @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">Upload Profile Image<span class="text-danger"> (Max 2 MB)</span> </label>
                                                <input type="file" name="profileimage" class="form-control customforminput" placeholder="Enter Pincode">
                                            </div>
                                            @error('profileimage')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <div class="inline field">
                                                    <label>Select Platform</label>
                                                    <select name="platforms[]" class="label ui selection fluid dropdown form-control" multiple>
                                                        <option value="">--select platform--</option>
                                                        <option value="Facebook">Facebook</option>
                                                        <option value="Instagram">Instagram</option>
                                                        <option value="Youtube">Youtube</option>
                                                        <option value="Linkedin">Linkedin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Address Information Section -->
                                    <h5 class="text-start my-4">Address Information</h5>
                                    <hr>
                                    <div class="row gy-4">
                                        <div class="col-xxl-3 col-md-6">
                                            <pre class="json-preview d-none"><code id="js-preview-json">{}</code></pre>
                                            <div class="content">
                                                <div class="mt-0">
                                                    <label class="form-label">Full Location</label>
                                                    <input type="text" id="address" class="form-control" placeholder="Enter Address to Search" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">City</label>
                                                <input type="text" value="" id="cityinput" name="city" class="form-control customforminput" placeholder="Enter City">
                                            </div>
                                            @error('city')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">State</label>
                                                <input type="text" value="" id="stateinput" name="state" class="form-control customforminput" placeholder="Enter State">
                                            </div>
                                            @error('state')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">Country</label>
                                                <input type="text" value="" id="countryinput" name="country" class="form-control customforminput" placeholder="Enter Country">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Social Media Links Section -->
                                    <h5 class="text-start my-4">Social Media Links</h5>
                                    <hr>
                                    <div class="row gy-4">
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="mb-3">
                                                <label for="instagram-link" class="form-label">Instagram Link</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="instagram-addon">
                                                        <i class="bi bi-instagram"></i>
                                                    </span>
                                                    <input type="text" name="instagramprofilelink" class="form-control" id="instagram-link" placeholder="Enter Instagram Link" aria-describedby="instagram-addon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="mb-3">
                                                <label for="facebook-link" class="form-label">Facebook Link</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="facebook-addon">
                                                        <i class="bi bi-facebook"></i>
                                                    </span>
                                                    <input type="text" name="facebookprofile" class="form-control" id="facebook-link" placeholder="Enter Facebook Link" aria-describedby="facebook-addon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="mb-3">
                                                <label for="youtube-link" class="form-label">Youtube Link</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="youtube-addon">
                                                        <i class="bi bi-youtube"></i>
                                                    </span>
                                                    <input type="text" name="youtubeprofile" class="form-control" id="youtube-link" placeholder="Enter Youtube Link" aria-describedby="youtube-addon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="mb-3">
                                                <label for="linkedin-link" class="form-label">Linkedin Link</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="linkedin-addon">
                                                        <i class="bi bi-linkedin"></i>
                                                    </span>
                                                    <input type="text" name="linkedinprofile" class="form-control" id="linkedin-link" placeholder="Enter Linkedin Link" aria-describedby="linkedin-addon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check mt-4">
                                        <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            I accept the <a href="#" target="_blank">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="formcustomcardfooter">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn formbtn" id="register-btn" disabled>Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
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

<script>
    document.getElementById('terms').addEventListener('change', function() {
        document.getElementById('register-btn').disabled = !this.checked;
    });


    $('.label.ui.dropdown')
        .dropdown();

    $('.no.label.ui.dropdown')
        .dropdown({
            useLabels: false
        });

    $('.ui.button').on('click', function() {
        $('.ui.dropdown')
            .dropdown('restore defaults')
    })

</script>
<script>
    setTimeout(function() {
        $('#successAlert').fadeOut('slow');
    }, 3000);

    setTimeout(function() {
        $('#dangerAlert').fadeOut('slow');
    }, 3000);

</script>
@endsection
