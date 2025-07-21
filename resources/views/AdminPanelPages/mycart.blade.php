{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Influencers Cart')
<x-app-layout>
    <style>
        @media print {
            @page {
                size: tabloid landscape;
                margin: 10mm;
            }
        }

    </style>
    <div class="container-fluid">
        <div class="mt-3 d-flex align-items-center justify-content-end">
            <a href="#" class="btn btn-outline-primary" onclick="printDiv('printableArea')">
                <i class="ti ti-printer"></i> Print
            </a>
        </div>
        <div class="card" id="printableArea">
            <div class="card-header text-center">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/websiteAssets/images/logo.png') }}" alt="Logo" class="mb-2" style="width: 250px;">
                    <h4 class="mb-0">Influencers List</h4>
                </div>
            </div>
            <div class="row mt-3">
                @foreach ($incluencerdata as $index => $row)
                <div class="col-md-3">
                    <div class="card overflow-hidden hover-img">
                        <div class="position-relative">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assets/websiteAssets/images/Influencers/'.($row->profileimage ?? 'defaultuser.png')) }}" class="card-img-top" alt="modernize-img" style="height: 400px;object-fit: cover;ob;object-position: top;">
                            </a>
                            <span class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">{{ $row->category}}</span>
                        </div>
                        <div class="card-body p-4">
                            <a class="d-block mb-2 fs-5 text-dark fw-semibold link-primary" href="javascript:void(0)">{{ $row->fullname }}</a>
                            <ul class="d-flex align-items-center gap-1 mb-0">
                                @for ($i = 1; $i <= 5; $i++) <li>
                                    @if ($i <= $row->clientratings)
                                        <i class="ti ti-star text-warning"></i> <!-- Filled star -->
                                        @else
                                        <i class="ti ti-star text-muted"></i> <!-- Empty star -->
                                        @endif
                                        </li>
                                        @endfor
                            </ul>
                            <div class="d-flex align-items-center gap-4">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="ti ti-map text-dark fs-5"></i>{{ ucwords($row->city)}}, {{ ucwords($row->state)}}
                                </div>
                                @if($row->engagementrate)
                                <div class="d-flex align-items-center fs-2 ms-auto">
                                    <i class="ti ti-activity text-dark"></i>{{ $row->engagementrate ?? '0' }}
                                </div>
                                @endif
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-instagram text-dark fs-5"></i>
                                    {{ $row->followercount ?? '0' }}
                                </div>
                            </div>
                            @if(!empty($row->platforms) && is_array(json_decode($row->platforms)))
                            <div class="d-flex justify-content-start flex-wrap">
                                @foreach (json_decode($row->platforms) as $plat)
                                <div>
                                    <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">{{ $plat }}</span>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
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
