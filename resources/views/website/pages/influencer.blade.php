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
                                                <label class="form-label">Email Address for Contact for Team<span class="text-danger fs-5">*</span>
                                                </label>
                                                <input required type="email" name="email" class="form-control customforminput" placeholder="Email Address">
                                            </div>
                                            @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">Contact Number for Connecting Team<span class="text-danger fs-5">*</span> </label>
                                                <input type="tel" name="phone" class="form-control customforminput" placeholder="Enter Phone/Mobile" required>
                                            </div>
                                            @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">City</label>
                                                <input type="text" name="city" class="form-control customforminput" placeholder="Enter City">
                                            </div>
                                            @error('city')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">State</label>
                                                <input type="text" name="state" class="form-control customforminput" placeholder="Enter State">
                                            </div>
                                            @error('state')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">Country</label>
                                                <input type="text" name="country" class="form-control customforminput" placeholder="Enter Country">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label class="form-label">Upload Profile Image<span class="text-danger"> (Max 2 MB)</span> </label>
                                                <input type="file" name="profileimage" class="form-control customforminput" placeholder="Enter Pincode">
                                            </div>
                                        </div>
                                        <div class="col-xxl-9 col-md-6">
                                            <div class="mb-3">
                                                <label for="basic-url" class="form-label">Instagram Profile Link</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon3">https://www.instagram.com/</span>
                                                    <input type="text" name="instagramprofile" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="formcustomcardfooter">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn formbtn">Register</button>
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
<script>
    setTimeout(function() {
        $('#successAlert').fadeOut('slow');
    }, 3000);

    setTimeout(function() {
        $('#dangerAlert').fadeOut('slow');
    }, 3000);

</script>
@endsection
