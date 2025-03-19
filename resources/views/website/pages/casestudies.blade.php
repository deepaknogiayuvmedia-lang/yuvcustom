@extends('website.layout.websitemain')
@section('title', 'Case Studies | ' . config('app.name'))
@section('content')
<canvas id="gradient-canvas"></canvas>

<section class=" position-relative py-5">
    <div class="container py-2 pb-md-5">
        <div class="row">
            <div class="text-center fs-2 fw-bold">
                Success in Action: See How We Deliver.
            </div>
            <div class="text-center py-2">
                <p class="text-wrap seosecondheadsecthree">
                    Explore our success stories and witness how our expert strategies have turned visions into victories.
                </p>
            </div>
            <div class="d-flex justify-content-end align-items-center p-3 rounded-3">
                <div>
                    <select class="form-select" aria-label="Default select example" id="categorydrop">
                        <option selected>Filter by category</option>
                        @foreach ($categories as $data)
                        <option value="{{$data->label}}">{{$data->label}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="allstudies row">
                @foreach ($studies as $data)
                <div class="col-md-3 col-6 mb-3 mt-3">
                    <a href="{{ route('casedetails', ['id' => \Str::slug($data->title). '-' . $data->id ]) }}" class="text-decoration-none">
                        <div class="card shadow-sm rounded-0 border-0 mx-auto overflow-hidden" style="background-color: #f0f9ff;">
                            <img src="{{ asset('assets/images/CaseStudies/' . $data->caseimage) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="badge bg-info text-white mb-2">{{ $data->category }}</span>
                                <h5 class="card-title text-start fw-bold">{{ Str::limit($data->title, 30) }}</h5>
                                <p class="text-muted small">
                                    {{ Str::limit(strip_tags($data->casecontent), 60) }}
                                </p>
                                <div class="d-flex align-items-center mt-3">
                                    <img src="{{ asset('assets/images/favicon.ico') }}" alt="Profile Picture" class="rounded-circle me-2" width="30" height="30">
                                    <div>
                                        <p class="mb-0 fw-bold small">YUVMEDIA</p>
                                        <p class="mb-0 text-muted small">{{ $data->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach

            </div>
        </div>

    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.seocards');

        cards.forEach(card => {
            card.addEventListener('click', function() {
                const cardText = this.querySelector('.card-text');
                if (window.innerWidth <= 768) {
                    cardText.classList.toggle('show');
                }
            });
        });
    });

    //Filter By Category
    $('#categorydrop').on('change', function() {
    const onloaddata = @json($studies);
    var selectedvalue = $(this).val();
    console.log(selectedvalue);
    $('.allstudies').empty();

    $.ajax({
        url: "/filterstudy/" + selectedvalue,
        type: "GET",
        success: function(response) {
            console.log(response);
            $('.allstudies').empty();

            if (response && response.length > 0) {
            response.forEach(function(data) {
                const slugifiedTitle = data.title.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]/g, '');
                
                $('.allstudies').append(`
                <div class="col-md-3 col-6 mb-3 mt-3">
                    <a href="/casedetails/${slugifiedTitle}-${data.id}" class="text-decoration-none">
                        <div class="card shadow-sm rounded-4 border-0 mx-auto overflow-hidden" style="background-color: #f0f9ff;">
                            <img src="/assets/images/CaseStudies/${data.caseimage}" 
                                class="card-img-top p-3 rounded-4" 
                                alt="...">
                            <div class="card-body">
                                <span class="badge bg-info text-white mb-2">${data.category}</span>
                                <h5 class="card-title text-start fw-bold">${data.title.substring(0, 30)}</h5>
                                <p class="text-muted small">${data.casecontent.replace(/(<([^>]+)>)/gi, "").substring(0, 60)}</p>
                                <div class="d-flex align-items-center mt-3">
                                    <img src="/assets/images/favicon.ico" 
                                        alt="Profile Picture" 
                                        class="rounded-circle me-2" 
                                        width="30" height="30">
                                    <div>
                                        <p class="mb-0 fw-bold small">Jerome Walton</p>
                                        <p class="mb-0 text-muted small">2h ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                `);
            });
            } else {
                $('.allstudies').append(`<p class="text-muted text-center">No Case Studies Found</p>`);
            }
        },
        error: function() {
            $('.allstudies').append(`<p class="text-muted text-center">Error fetching data. Please try again.</p>`);
        }
    });
});


</script>
@endsection
