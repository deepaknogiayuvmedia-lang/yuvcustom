@extends('website.layout.websitemain')
@section('title', 'Seach Engine Optimization | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section class=" py-5">
        <div class="container py-2 pb-md-5">
            <div class="row">
                <div class="text-center fs-2 fw-bold">
                    Everything You Need for SEO Success
                </div>
                <div class="text-center py-2">
                    <p class="text-wrap seosecondheadsecthree">
                        We Follow Certain Steps To Provide High-Quality Small Business SEO Services.
                    </p>
                </div>
                
                @foreach ($blogs as $data)
                    <div class="col-md-3 col-6 mb-3">
                        <div class="card shadow-sm rounded-4 mx-auto">
                            <img src="{{asset('assets/images/Blogs/'.$data->blogthumbnail)}}"
                                class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{$data->blogname}}</h5>
                                <p class="text-muted">{{ Str::limit(strip_tags($data->blogdescription),40)}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.seocards');

            cards.forEach(card => {
                card.addEventListener('click', function () {
                    const cardText = this.querySelector('.card-text');
                    if (window.innerWidth <= 768) {
                        cardText.classList.toggle('show');
                    }
                });
            });
        });
    </script>
@endsection
