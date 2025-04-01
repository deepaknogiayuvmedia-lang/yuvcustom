{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Influencers List')
<x-app-layout>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h4 class="fw-semibold mb-8">@yield('title')- ({{$datacnt}})</h4>
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
        <div class="card bg-white shadow-sm position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-md-7 d-flex">
                        <div class="ms-3">
                            <label for="formFile" class="form-label text-muted">Category</label>
                            <select name="category" class="form-select mr-sm-2  mb-2" id="categorydropdown" required>
                                <option value="3" selected="">--Filter by category--</option>
                                @foreach ($categories as $datacat)
                                <option value="{{$datacat->label}}">{{$datacat->label}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="ms-3">
                            <label for="formFile" class="form-label text-muted">City</label>
                            <select name="category" class="form-select mr-sm-2  mb-2" id="citydropdown" required>
                                <option value="3" selected="">--Filter by city--</option>
                                @foreach ($cities as $citydata)
                                <option value="{{$citydata->city}}">{{$citydata->city}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="ms-3">
                            <label for="formFile" class="form-label text-muted">State</label>
                            <select name="category" class="form-select mr-sm-2  mb-2" id="statedropdown" required>
                                <option value="3" selected="">--Filter by state--</option>
                                @foreach ($states as $statenmae)
                                <option value="{{$statenmae->state}}">{{$statenmae->state}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="ms-3 mt-4">
                            <a href="#" class="btn btn-outline-primary">Search</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="">
                <div class="p-4">
                    <table id="file_export" class="table table-hover table-bordered display text-nowrap py-3">
                        <thead>
                            <tr>
                                <th>SNo.</th>
                                <th>Registered On</th>
                                <th>Full Name & Details</th>
                                <th>Category</th>
                                <th>Full Address</th>
                                <th>Set Verification Status</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            @foreach ($data as $index => $row)
                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $row->created_at->format('d M Y | h:i A')}}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{asset('assets/websiteAssets/images/Influencers/'.$row->profileimage)}}" width="45" class="rounded">
                                        <div>
                                            <h6 class="mb-1">Name: {{ $row->fullname }}</h6>
                                            <h6 class="mb-1">DOB: {{ \Carbon\Carbon::parse($row->dob)->format('jS-M-Y') }}</h6>
                                            <h6 class="mb-1">Contact: {{ $row->contactnumber }}</h6>
                                            <h6 class="mb-0">Email: {{ $row->emailaddress }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $row->category}}</td>
                                <td>{{ ucwords($row->city)}}, {{ ucwords($row->state)}}, {{ ucwords($row->country)}}</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input data-featuredid="{{ $row->id }}" class="form-check-input success featuredbool" type="checkbox" id="color-success{{ $row->id }}" switch="bool" {{ $row->verificationstatus == 'verified' ? 'checked' : '' }} />
                                        <label class="form-check-label  {{ $row->verificationstatus == 'verified' ? 'text-success fw-bold' : 'text-danger' }}" for="color-success{{ $row->id }}">
                                            {{ $row->verificationstatus == 'verified' ? 'Verified' : 'Pending' }}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                    title: "Are you sure?"
                    , html: "You want to delete ?"
                    , icon: "warning"
                    , showCancelButton: true
                    , confirmButtonColor: "#222222"
                    , cancelButtonColor: "#d33"
                    , confirmButtonText: "Yes, delete it!"
                    , cancelButtonText: "Cancel"
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/admin/deleteblog/" + id;
                    }
                });
        }

    </script>
    <script>
        $(document).ready(function() {
            $('.featuredbool').change(function() {
                var blogId = $(this).data('featuredid');
                var verificationstatus = $(this).is(':checked') ? 'verified' : 'pending';

                $.ajax({
                    url: '{{ route('admin.updatefeaturedstatus') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: blogId,
                        featuredstatus: verificationstatus
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Status Updated!",
                                text: response.message,
                                icon: "success",
                                confirmButtonText: "OK",
                                customClass: {
                                    confirmButton: "btn btn-primary w-xs me-2 mt-2"
                                },
                                buttonsStyling: true,
                                showCancelButton: true,
                                showCloseButton: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                            });
                        } else {
                            Swal.fire({
                                title: "Status Updated..!!!",
                                text: response.message,
                                icon: "error",
                                confirmButtonText: "OK",
                                customClass: {
                                    confirmButton: "btn btn-primary w-xs me-2 mt-2"
                                },
                                buttonsStyling: true,
                                showCancelButton: true,
                                showCloseButton: true
                            });
                        }
                    },
                    error: function() {
                        Swal.fire("Error", "An error occurred.", "error");
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            function filterData() {
                let category = $('#categorydropdown').val() || null;
                let city = $('#citydropdown').val() || null;
                let state = $('#statedropdown').val() || null;

                $.ajax({
                    url: "{{ route('admin.filterResults') }}",
                    type: "GET",
                    data: { category: category, city: city, state: state },
                    beforeSend: function() {
                        $('#table-body').html('<tr><td colspan="5" class="text-center">Loading...</td></tr>');
                    },
                    success: function(response) {
                        console.log(response);
                        let tbody = $('#table-body');
                        tbody.empty(); // Clear table before appending new data
                        
                        if (response.data.length === 0) {
                            tbody.append('<tr><td colspan="5" class="text-center text-danger">No results found</td></tr>');
                            return;
                        }

                        response.data.forEach(function(row, index) {
                            let createdAt = new Date(row.created_at).toLocaleString();
                            let dob = new Date(row.dob).toLocaleDateString();
                            let profileImage = row.profileimage ? row.profileimage : 'default.png';
                            let imageUrl = "{{ asset('assets/websiteAssets/images/Influencers/') }}/" + profileImage;

                            let html = `
                                <tr>
                                    <td>${index + 1}</td>
                                    <td>${createdAt}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="${imageUrl}" width="45" class="rounded">
                                            <div>
                                                <h6 class="mb-1">Name: ${row.fullname}</h6>
                                                <h6 class="mb-1">DOB: ${dob}</h6>
                                                <h6 class="mb-1">Contact: ${row.contactnumber}</h6>
                                                <h6 class="mb-0">Email: ${row.emailaddress}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>${row.city ? row.city : ''}, ${row.state ? row.state : ''}, ${row.country ? row.country : ''}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input data-featuredid="${row.id}" class="form-check-input success featuredbool" type="checkbox" id="color-success${row.id}" switch="bool" ${row.verificationstatus == 'verified' ? 'checked' : ''} />
                                            <label class="form-check-label ${row.verificationstatus == 'verified' ? 'text-success fw-bold' : 'text-danger'}" for="color-success${row.id}">
                                                ${row.verificationstatus == 'verified' ? 'Verified' : 'Pending'}
                                            </label>
                                        </div>
                                    </td>
                                </tr>`;
                            
                            tbody.append(html);
                        });
                    },
                    error: function() {
                        $('#table-body').html('<tr><td colspan="5" class="text-center text-danger">Error loading data</td></tr>');
                    }
                });
            }

            // Call filterData on dropdown change (independently)
            $('#categorydropdown, #citydropdown, #statedropdown').on('change', filterData);
        });

</script>
</x-app-layout>
