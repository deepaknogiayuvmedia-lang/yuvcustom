@extends('website.layout.websitemain')
@section('title', 'Seach Engine Optimization | ' . config('app.name'))
@section('content')
<canvas id="gradient-canvas"></canvas>

<section class=" py-5">
    <div class="container position-relative py-2 pb-md-5">
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
                <a href="{{ route('blogdetails', ['id' => \Str::slug($data->blogname). '-' . $data->id ]) }}" class="seocards text-decoration-none">
                    <div class="card shadow-sm rounded-3 border-0 mx-auto overflow-hidden" style="background-color: #f0f9ff;">
                        <img src="{{ asset('assets/images/Blogs/' . $data->blogthumbnail) }}" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                            <span class="badge bg-info text-white mb-2">{{ implode(', ', json_decode($data->blogcategories)) }}</span>
                            <h5 class="card-title text-start fw-bold">{{$data->blogname}}</h5>
                            <p class="text-muted small">
                                {{ Str::limit(strip_tags($data->blogdescription), 60) }}
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
        <div class="row justify-content-center mt-2">
            <div class="col-md-12">
                <div class="post-pagination wow fadeInUp" data-wow-delay="1.5s">
                    {{ $blogs->links('pagination::bootstrap-5') }}
                </div>
            </div>
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
