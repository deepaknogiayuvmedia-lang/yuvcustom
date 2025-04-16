{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Influencers Cart')
<x-app-layout>
    <div class="container-fluid">
        <div class="mt-3 d-flex align-items-center justify-content-end">
            <a href="#" class="btn btn-outline-primary" onclick="printDiv('printableArea')">
                <i class="ti ti-printer"></i> Print
            </a>
        </div>
        <div class="card" id="printableArea" style="background-image: url('{{ asset('assets/websiteAssets/images/logo.png') }}'); background-repeat: no-repeat; background-position: center;">
            <div class="card-header text-center">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/websiteAssets/images/logo.png') }}" alt="Logo" class="mb-2" style="width: 250px;">
                    <h4 class="mb-0">Influencers List</h4>
                </div>
            </div>
            <div class="">
                <div class="p-4">
                    <table id="" class="table table-hover table-bordered display text-nowrap py-3">
                        <thead>
                            <tr>
                                <th>SNo.</th>
                                <th>Influencer Details</th>
                                <th>Category</th>
                                <th>City</th>
                                <th>Platforms</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            @foreach ($incluencerdata as $index => $row)
                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <h6 class="mb-1">Name: {{ $row->fullname }}</h6>
                                            <h6 class="mb-1">DOB: {{ \Carbon\Carbon::parse($row->dob)->format('jS-M-Y') }}</h6>
                                            <h6 class="mb-1">Contact: {{ $row->contactnumber }}</h6>
                                            <h6 class="mb-0">Email: {{ $row->emailaddress }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $row->category}}</td>
                                <td>{{ ucwords($row->city)}}, {{ ucwords($row->state)}}</td>
                                <td>
                                    @foreach (json_decode($row->platforms) as $plat)
                                    <div class="mb-2">
                                        <span class="badge bg-success">{{$plat}}</span>
                                    </div>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="hstack gap-3 flex-wrap">
                                        <button data-bs-toggle="tooltip" title="Delete" onclick="printDiv('{{ $row->id }}')" class="link-danger  fs-6"><i class="ti ti-trash"></i></button>
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
                        window.location.href = "/admin/removeFromCart/" + id;
                    }
                });
        }

    </script>
    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            window.location.reload(); // Reload to restore original state
        }

    </script>
</x-app-layout>
