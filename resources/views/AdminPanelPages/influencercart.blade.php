{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Influencers Management')
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
                            <a href="{{ route('admin.viewcart') }}" class="btn btn-outline-primary">
                                <i class="ti ti-shopping-cart"></i> View Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card position-relative overflow-hidden">
            <div class="shop-part d-flex w-100">
                <div class="shop-filters flex-shrink-0 border-end d-none d-lg-block">
                    <ul class="list-group pt-2 border-bottom rounded-0">
                        <h6 class="my-3 mx-4">Sort By Category</h6>
                        @foreach($categories as $key => $value)
                        <li class="list-group-item border-0 p-0 mx-4 mb-2 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input me-2" id="category-{{$key}}" value="{{$value->label}}">
                            <label class="form-check-label" for="category-{{$key}}">
                                {{$value->label}}
                            </label>
                        </li>
                        @endforeach
                    </ul>
                    <ul class="list-group pt-2 border-bottom rounded-0">
                        <h6 class="my-3 mx-4">Sort By Social Platforms</h6>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input me-2" id="platform-facebook" value="Facebook">
                            <label class="form-check-label d-flex align-items-center gap-6" for="platform-facebook">
                                Facebook
                            </label>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input me-2" id="platform-instagram" value="Instagram">
                            <label class="form-check-label d-flex align-items-center gap-6" for="platform-instagram">
                                Instagram
                            </label>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input me-2" id="platform-youtube" value="Youtube">
                            <label class="form-check-label d-flex align-items-center gap-6" for="platform-youtube">
                                Youtube
                            </label>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input me-2" id="platform-linkedin" value="Linkedin">
                            <label class="form-check-label d-flex align-items-center gap-6" for="platform-linkedin">
                                Linkedin
                            </label>
                        </li>
                    </ul>
                    <ul class="list-group pt-2 border-bottom rounded-0">
                        <h6 class="my-3 mx-4">Sort By City</h6>
                        @foreach($incluencerdata->unique('city') as $key => $data)
                        <li class="list-group-item border-0 p-0 mx-4 mb-2 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input me-2" id="city-{{$key}}" value="{{$data->city}}">
                            <label class="form-check-label" for="city-{{$key}}">
                                {{ ucfirst($data->city) }}
                            </label>
                        </li>
                        @endforeach
                    </ul>
                    <ul class="list-group pt-2 border-bottom rounded-0">
                        <h6 class="my-3 mx-4">Sort By State</h6>
                        @foreach($incluencerdata->unique('state') as $key => $datanew)
                        <li class="list-group-item border-0 p-0 mx-4 mb-2 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input me-2" id="state-{{$key}}" value="{{$datanew->state}}">
                            <label class="form-check-label" for="state-{{$key}}">
                                {{ ucfirst($datanew->state) }}
                            </label>
                        </li>
                        @endforeach
                    </ul>
                    <div class="p-4">
                        <a href="javascript:void(0)" id="filterBtn" class="btn btn-primary w-100">Apply Filter</a>
                    </div>
                </div>
                <div class="card-body p-4 pb-0">
                    <div class="d-flex justify-content-between align-items-center gap-6 mb-4">
                        <a class="btn btn-primary d-lg-none d-flex" data-bs-toggle="offcanvas" href="#filtercategory" role="button" aria-controls="filtercategory">
                            <i class="ti ti-menu-2 fs-6"></i>
                        </a>
                        <h5 class="fs-5 mb-0 d-none d-lg-block">Influencers</h5>
                    </div>
                    <div class="row" id="product-list">
                        @foreach($incluencerdata as $key => $value)
                        <div class="col-sm-6 col-xxl-3">
                            <div class="card hover-img overflow-hidden">
                                <div class="position-relative">
                                    <a href="#">
                                        <img src="{{ asset("assets/websiteAssets/images/Influencers/{$value->profileimage}") }}" class="card-img-top" alt="modernize-img" style="height: 260px; object-fit: cover;">
                                    </a>
                                    <a href="#" data-influ="{{json_encode($value)}}" class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3 addtoCartBtn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart">
                                        <i class="ti ti-basket fs-4"></i>
                                    </a>
                                </div>
                                <div class="card-body pt-3 p-4">
                                    <h6 class="fs-4">{{$value->fullname}}</h6>
                                    <p class="text-muted">+91- {{$value->contactnumber}}</p>
                                    <p class="text-muted">{{ ucfirst($value->city)}},{{ ucfirst($value->state)}}</p>
                                    <p class="text-muted">{{$value->emailaddress}}</p>
                                    <div class="d-flex align-items-center justify-content-start gap-1">
                                        @foreach (json_decode($value->platforms) as $plat)
                                        <div>
                                            <span class="badge bg-success">{{$plat}}</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- Add to Cart --}}
    <script>
        $(document).ready(function() {
            $(document).on('click', '.addtoCartBtn', function(e) {
                e.preventDefault();
                var infludata = $(this).data('influ');
                if (typeof infludata === "string") {
                    infludata = JSON.parse(infludata);
                }
                console.log(infludata.id);
                var _token = "{{ csrf_token() }}";

                $.ajax({
                    url: "{{ route('admin.addtocart') }}"
                    , type: "POST"
                    , data: {
                        influid: infludata.id
                        , _token: _token
                    , }
                    , success: function(response) {
                        console.log(response);
                        try {
                            if (response.success && response.message) {
                                Swal.fire({
                                    title: response.success ? "Success!" : "Error!"
                                    , text: response.message
                                    , icon: response.success ? "success" : "error"
                                    , confirmButtonText: "OK"
                                    , customClass: {
                                        confirmButton: "btn btn-primary w-xs me-2 mt-2"
                                    }
                                    , buttonsStyling: true
                                    , showCancelButton: true
                                    , showCloseButton: true
                                });
                            } else {
                                Swal.fire({
                                    title: "Error!"
                                    , text: "An unexpected error occurred."
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
        });

    </script>

    {{-- Filter Category --}}
    <script>
        $('#filterBtn').on('click', function() {
            let selectedCategories = [];
            let selectedPlatforms = [];
            let cities = [];
            let states = [];

            // Collect selected categories
            $('input[type="checkbox"][id^="category-"]:checked').each(function() {
                selectedCategories.push($(this).val());
            });

            // Collect selected platforms
            $('input[type="checkbox"][id^="platform-"]:checked').each(function() {
                selectedPlatforms.push($(this).val());
            });


            // Collect selected Cities
            $('input[type="checkbox"][id^="city-"]:checked').each(function() {
                cities.push($(this).val());
            });

            // Collect selected States
            $('input[type="checkbox"][id^="state-"]:checked').each(function() {
                states.push($(this).val());
            });

            console.log("Categories:", selectedCategories);
            console.log("Cities:", cities);
            console.log("Platforms:", selectedPlatforms);

            var _token = "{{ csrf_token() }}";
            $.ajax({
                url: "{{ route('admin.FilterInfluencer') }}"
                , type: "POST"
                , data: {
                    _token: _token
                    , categories: selectedCategories
                    , platforms: selectedPlatforms
                    , cities: cities
                    , states: states
                , }
                , success: function(response) {
                    console.log(response.data);
                    $('#product-list').empty();

                    if (response.data.length > 0) {
                        response.data.forEach(function(value) {
                            $('#product-list').append(`
                                <div class="col-sm-6 col-xxl-3">
                                    <div class="card hover-img overflow-hidden">
                                        <div class="position-relative">
                                            <a href="#">
                                                <img src="{{ asset('assets/websiteAssets/images/Influencers/${value.profileimage}') }}" class="card-img-top" alt="modernize-img" style="height: 260px; object-fit: cover;">
                                            </a>
                                            <a href="#" data-influ='${JSON.stringify(value)}' class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3 addtoCartBtn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart">
                                                <i class="ti ti-basket fs-4"></i>
                                            </a>
                                        </div>
                                        <div class="card-body pt-3 p-4">
                                            <h6 class="fs-4">${value.fullname}</h6>
                                            <p class="text-muted">+91- ${value.contactnumber}</p>
                                            <p class="text-muted text-capitalize">${value.city},${value.state}</p>
                                            <p class="text-muted">${value.emailaddress}</p>
                                            <div class="d-flex align-items-center justify-content-start gap-1">
                                                ${JSON.parse(value.platforms).map(plat => `
                                                    <div>
                                                        <span class="badge bg-success">${plat}</span>
                                                    </div>
                                                `).join('')}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `);
                        });
                    } else {
                        $('#product-list').html('<p class="text-center">No influencers found matching the selected filters.</p>');
                    }
                }
            });
        });

    </script>
</x-app-layout>
