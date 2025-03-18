{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Clients')
<x-app-layout>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h4 class="fw-semibold mb-8">@yield('title')- ({{$clientscnt}})</h4>
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
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#primary-header-modaladdclient">
                                <i class="ti ti-plus"></i> Add New Client
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <ol class="list-group list-group">
                            <div class="">
                                <table id="file_export" class="table w-100 table-striped table-bordered display text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>SNo.</th>
                                            <th>Created On</th>
                                            <th>Client Name</th>
                                            <th>Category</th>
                                            <th>Logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body">
                                        @foreach ($clients as $index => $rows)
                                        <tr>
                                            <td>{{ $index + 1}}</td>
                                            <td>{{ $rows->created_at->format('d M Y | h:i A')}}</td>
                                            <td>{{ $rows->clientname}}</td>
                                            <td>{{ $rows->category}}</td>
                                            <td>
                                                <img src="{{ $rows->logo ? asset('assets/images/Clients/'.$rows->logo) : asset('assets/images/Categories/placeholder.png') }}" class="rounded" alt="Category Image" width="50" height="50">
                                            </td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <button class="btn btn-outline-primary btn-border editbtnmodal" data-bs-toggle="modal" data-bs-target="#primary-header-modal" data-car-list="{{ json_encode($rows) }}"><i class="ti ti-edit"></i></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button onclick="confirmDelete('{{ $rows->id }}')" class="btn btn-outline-danger btn-border"><i class="ti ti-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="primary-header-modaladdclient" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary text-white">
                    <h4 class="modal-title text-white" id="primary-header-modalLabel">
                        Add Client
                    </h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.insertclients')}}" class="floating-labels" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Select</label>
                                            <select name="category" class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                @foreach ($data as $row)
                                                <option value="{{ $row->label}}">{{ $row->label}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group mt-5">
                                            <input type="text" class="form-control" name="clientname" id="input1" required>
                                            <span class="bar"></span>
                                            <label for="input1">Client Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="thumbnailPreview" class="mt-3">
                                            <img id="imagePreview" src="{{asset('assets/images/Categories/placeholder.png')}}" alt="Thumbnail Preview" class="rounded-3" style="width: 150px; height: 150px;">
                                        </div>
                                        <div class="mt-3">
                                            <label for="example-search-input" class="mt-3">Logo</label>
                                            <input class="form-control mt-3" placeholder="enter value" name="logo" type="file" value="" onchange="previewImage(event)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <button type="submit" class="btn rounded-pill waves-effect waves-light btn-success">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="primary-header-modal" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary text-white">
                    <h4 class="modal-title text-white" id="primary-header-modalLabel">
                        Edit Details
                    </h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('admin.updateclient')}}" class="" method="POST" enctype="multipart/form-data">
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
    <script>
        function confirmDelete(id) {
            Swal.fire({
                    title: "Are you sure?"
                    , html: "You want to delete?"
                    , icon: "warning"
                    , showCancelButton: true
                    , confirmButtonColor: "#222222"
                    , cancelButtonColor: "#d33"
                    , confirmButtonText: "Yes, delete it!"
                    , cancelButtonText: "Cancel"
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/admin/deleteclient/" + id;
                    }
                });
        }

        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        // Populate Edit Modal with Data
        $('#table-body').on('click', '.editbtnmodal', function() {
            const clientdata = $(this).data('car-list');
            console.log(clientdata);
            $('#modal-body').empty();
            const imageSrc = clientdata.logo ? '{{ asset('assets/images/Clients/') }}/' + clientdata.logo : '{{asset('assets/images/Categories/placeholder.png') }}';
            $('#modalbodyedit').html(`
            <div class="">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="form-group mt-0">
                                <div class="">
                                    <label class="mb-2">Category</label>
                                    <select name="category" class="form-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Master">--select a parent category--</option>
                                        @foreach ($data as $row)
                                        <option value="{{ $row->label }}" ${clientdata.category==='{{ $row->label }}' ? 'selected' : '' }>{{ $row->label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label class="mb-2">Category Label</label>
                                <input type="text" class="form-control" name="clientname" value="${clientdata.clientname}" id="input1" required>
                            </div>
                            <div class="mt-3">
                                <label for="example-search-input" class="0">Category Image</label>
                                <input class="form-control mt-3" placeholder="enter value" name="logo" type="file" value="" onchange="previewImage(event)">
                            </div>
                            <input type="hidden" name="clientid" value="${clientdata.id}" id="">
                        </div>
                        <div class="col-md-6">
                            <div id="thumbnailPreview" class="mt-3">
                                <img id="imagePreview" src="${imageSrc}" alt="Thumbnail Preview" class="rounded-3 img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `);
         });

    </script>
</x-app-layout>
