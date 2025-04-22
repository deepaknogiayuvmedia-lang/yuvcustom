@extends('website.layout.websitemain')
@section('title', 'Managing Partners | ' . config('app.name'))
@section('content')
<section id="aboutfirstsection" class="pt-3">
    <div class="container pt-5" style="position: relative;">
        <div class="row">
            <div class="text-center fs-1 fw-bold ">
                Managing Partners <br>
                <span class="globaltxtcolor">Leading with Vision and Expertise.</span>
            </div>
            <div class="text-center">
                <p class="text-wrap aboutsecondhead">
                    Meet the driving force behind Yuvmedia. Our managing partners bring unparalleled experience, strategic insight, and a passion for innovation to guide our journey of success.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="d-flex-justify-content-center client-container">
        <div class="row  py-md-3 py-1 mt-3">
            <div class="col-md-12">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 me-2">
                        <label for="labelid">Select City <span class="text-danger fs-5 mb-3">*</span></label>
                        <select name="category" class="form-select p-3 rounded-5" id="citydrop" required>
                            <option value="" selected>--select city--</option>
                            @foreach($partnersdata->unique('city') as $key => $value)
                            <option value="{{$value->city}}">{{ucfirst($value->city)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary rounded-5" id="find-btn">Find</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="partnercards">
            @foreach ($partnersdata as $row)
            <div class="col-md-4 partnercard">
                <div class="card shadow-sm rounded-3 border-0 p-3" style="max-width: 400px;">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h5 class="fw-bold mb-1">{{ ucfirst($row->partnername) }}</h5>
                            <p class="mb-1 text-muted small">+91-{{ $row->partnerphone }}</p>
                            <p class="mb-1">{{ ucfirst($row->city) }}, {{ ucfirst($row->state) }}</p>
                            <p class="mb-1">
                                <i class="bi bi-star me-1 text-primary"></i>
                                <a href="#" class="text-decoration-none text-primary fw-semibold">{{ ucfirst($row->partnertype) }}</a>
                            </p>
                            <a href="/partnerDetails/{{$row->id}}/{{$row->city}}" class="btn btn-primary mt-2 rounded-3">View More</a>
                        </div>
                        <div class="ms-3">
                            <img src="{{ asset('assets/images/Partners/' . $row->profileimage) }}" alt="Profile" class="rounded" style="width: 100%; height: 140px; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#find-btn').on('click', function() {
            var selectedcity = $("#citydrop").val();
            console.log(selectedcity);

            $.ajax({
                url: "/filterpartner/",
                type: "GET",
                data: {
                    city: selectedcity
                },
                success: function(response) {
                    console.log(response);
                    $('#partnercards').empty();

                    if (response && response.length > 0) {
                        response.forEach(function(data) {
                            $('#partnercards').append(`
                                <div class="col-md-4 partnercard">
                                    <div class="card shadow-sm rounded-3 border-0 p-3" style="max-width: 400px;">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <h5 class="fw-bold mb-1">${data.partnername}</h5>
                                                <p class="mb-1 text-muted small">+91-${data.partnerphone}</p>
                                                <p class="mb-1">${data.city}, ${data.state}</p>
                                                <p class="mb-1">
                                                    <i class="bi bi-star me-1 text-primary"></i>
                                                    <a href="#" class="text-decoration-none text-primary fw-semibold">${data.partnertype}</a>
                                                </p>
                                                <a href="/partnerDetails/${data.id}/${data.city}" class="btn btn-primary mt-2 rounded-3">View More</a>
                                            </div>
                                            <div class="ms-3">
                                                <img src="/assets/images/Partners/${data.profileimage}" alt="Profile" class="rounded" style="width: 100%; height: 140px; object-fit: cover;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `);
                        });
                    } else {
                        $('#partnercards').append(`<p class="text-muted text-center">No Partners Found</p>`);
                    }
                },
                error: function() {
                    $('#partnercards').append(`<p class="text-muted text-center">Error fetching data. Please try again.</p>`);
                }
            });
        });
    });
</script>
@endsection
