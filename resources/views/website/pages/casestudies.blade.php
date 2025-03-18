@extends('website.layout.websitemain')
@section('title', 'Case Studies | ' . config('app.name'))
@section('content')
<canvas id="gradient-canvas"></canvas>

<section class=" py-5">
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

            @foreach ($studies as $data)
            <div class="col-md-3 col-6 mb-3">
                <a href="{{ route('casedetails',['id' => $data->id])}}">
                    <div class="card shadow-sm rounded-4 mx-auto">
                        <img src="{{asset('assets/images/CaseStudies/'.$data->caseimage)}}" class="card-img-top p-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-start">{{Str::limit($data->title,30)}}</h5>
                            <p class="text-muted">{{ Str::limit(strip_tags($data->casecontent),40)}}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>
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

</script>
@endsection
