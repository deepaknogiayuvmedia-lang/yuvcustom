{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'All Partners')
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
                            <a href="{{ route('admin.addpartner') }}" class="btn btn-outline-primary">
                                <i class="ti ti-plus"></i> Add New Partner
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
                        <h6 class="my-3 mx-4">Sort By City</h6>
                        @foreach($partnersdata->unique('city') as $key => $datav)
                        <li class="list-group-item border-0 p-0 mx-4 mb-2 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input me-2" id="city-{{$key}}" value="{{$datav->city}}">
                            <label class="form-check-label" for="city-{{$key}}">
                                {{ ucfirst($datav->city) }}
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
                        <h5 class="fs-5 mb-0 d-none d-lg-block">Partners</h5>
                    </div>
                    <div class="row" id="product-list">
                        @foreach($partnersdata as $key => $value)
                        <div class="col-sm-6 col-xxl-3">
                            <div class="card hover-img overflow-hidden">
                                <div class="position-relative">
                                    <a href="#">
                                        <img src="{{ asset("assets/images/Partners/{$value->profileimage}") }}" class="card-img-top" alt="modernize-img" style="height: 260px; object-fit: cover;">
                                    </a>
                                     <a href="#" data-partner="{{json_encode($value)}}" data-bs-toggle="modal" data-bs-target="#primary-header-modal" class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3 editbtnmodal">
                                        <i class="ti ti-edit fs-4"></i>
                                    </a>
                                </div>
                                <div class="card-body pt-3 p-4">
                                    <h6 class="fs-4">{{$value->partnername}}</h6>
                                    <p class="text-muted">+91- {{$value->partnerphone}}</p>
                                    <p class="text-muted">{{ ucfirst($value->city)}},{{ ucfirst($value->state)}}</p>
                                    <p class="text-muted">{{$value->partneremail}}</p>
                                    <div class="d-flex align-items-center justify-content-start gap-1">
                                        <div>
                                            <span class="badge bg-primary">{{$value->partnertype}}</span>
                                        </div>
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
    <div id="primary-header-modal" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary text-white">
                    <h4 class="modal-title text-white" id="primary-header-modalLabel">
                        Edit Details
                    </h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{route('admin.updatePartner')}}" class="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body" id="modalbodyedit">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn bg-primary-subtle text-primary ">
                            Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
                url: "{{ route('admin.FilterPartners') }}"
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
                                                <img src="{{ asset('assets/images/Partners/${value.profileimage}') }}" class="card-img-top" alt="modernize-img" style="height: 260px; object-fit: cover;">
                                            </a>
                                             <a href="#" data-partner='${JSON.stringify(value)}' class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3 editbtnmodal" data-bs-toggle="modal" data-bs-target="#primary-header-modal">
                                                <i class="ti ti-edit fs-4"></i>
                                            </a>
                                        </div>
                                        <div class="card-body pt-3 p-4">
                                            <h6 class="fs-4">${value.partnername}</h6>
                                            <p class="text-muted">+91- ${value.partnerphone}</p>
                                            <p class="text-muted text-capitalize">${value.city},${value.state}</p>
                                            <p class="text-muted">${value.partneremail}</p>
                                            <div class="d-flex align-items-center justify-content-start gap-1">
                                                <div>
                                                    <span class="badge bg-success">${value.partnertype}</span>
                                                </div>
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

 {{-- Edit Partner --}}
    <script>
        $('.editbtnmodal').on('click', function() {
            const partnerdata = $(this).data('partner');
            const partnerstypes = {{ Js::from($partnerstypes) }};
            console.log(partnerstypes);
            console.log(partnerdata);
            $('#modal-body').empty();
            const imageSrc = partnerdata.profileimage ? '{{ asset('assets/images/Partners/') }}/' + partnerdata.profileimage : '{{asset('assets/images/Categories/placeholder.png') }}';
            $('#modalbodyedit').html(`
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Name<span class="text-danger">*</span></label>
                                <input type="text" value="${partnerdata.partnername}" placeholder="Partner Name" name="partnername" class="form-control" required>
                                <input type="hidden" value="${partnerdata.id}" name="partnerid" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Partner Type<span class="text-danger">*</span></label>
                                <select name="partnertype" class="form-select mr-sm-2 mb-2" id="inlineFormCustomSelect" required>
                                    <option selected="">--select partner type--</option>
                                    ${partnerstypes.map(type => `
                                    <option value="${type.label}" ${partnerdata.partnertype == type.label ? 'selected' : ''}>${type.label}</option>
                                    `).join('')}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Email Address<span class="text-danger">*</span></label>
                                <input type="email" value="${partnerdata.partneremail}" placeholder="Your Email Address" name="partneremail" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Phone Number<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">+91</span>
                                    <input type="text" value="${partnerdata.partnerphone}" class="form-control" name="partnerphone" placeholder="Your Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">City<span class="text-danger">*</span></label>
                                <input type="text" value="${partnerdata.city}" id="address" placeholder="Enter City to Search" name="city" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">State<span class="text-danger">*</span></label>
                                <input type="text" value="${partnerdata.state}" placeholder="State" id="stateinput" name="state" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">About Us Content<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="aboutuscontent" placeholder="Your Content Here...">${partnerdata.aboutuscontent}"</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="text-start">
                        <img id="partnerImagePreview" src="${imageSrc}" alt="Partner Image" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
                        <div class="mt-3">
                            <label class="form-label">Upload Image</label>
                            <input type="file" name="profileimage" class="form-control" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>
            `);
         });
    </script>
</x-app-layout>
