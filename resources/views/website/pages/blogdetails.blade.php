@extends('website.layout.websitemain')
@section('title',  $blogdetails->blogname)
@section('content')
<canvas id="gradient-canvas"></canvas>

<section class="py-5 position-relative">
    <div class="container pt-5">
        <div class=" row">
            <div class="col-md-12">
                <div class="text-center globaltxtcolor fs-1">
                    {{$blogdetails->blogname}}
                </div>
                <div class="text-center py-2">
                    <div class="fw-bold fs-5">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=" position-relative py-5">
    <div class="container justify-content-center">
        <div class="row">
            <div class="col-md-8 p-2">
                <div class="rounded-3">
                    <div class="card-body">
                        <img src="{{asset('assets/images/Blogs/'.$blogdetails->blogthumbnail)}}" alt="service bg" class="mb-3 img-fluid rounded-3">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class=" wow fadeInUp globaltxtcolor" data-wow-delay="0.25s">
                            Posted on :
                        </div>
                        <div>
                            <a class="fw-bold text-black ">{{$blogdetails->created_at->format('d/M/Y')}}</a>
                        </div>
                    </div>
                </div>
                <div class="gmbcardone shadow-sm rounded-3 mt-4">
                    <div class="card-body">
                        @php
                        $cleanedContent = preg_replace('/contenteditable="[^"]*"/', '', $blogdetails->blogdescription);
                        @endphp
                        <p class="text-muted"> {!! $cleanedContent !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body">
                        <h3 class="globaltxtcolor">Categories</h3>
                        <ul>
                            @php
                            $categories = json_decode($blogdetails->blogcategories ?? '[]', true);
                            @endphp

                            @foreach ($categories as $category)
                            <li>{{ $category }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="gmbcardone shadow-sm rounded-3 mt-4">
                    <div class="recent-posts-widget wow fadeInUp" data-wow-delay="0.75s">
                        <h3 class="globaltxtcolor">Recent Blogs</h3>
                        <div class="recent-posts-lists pt-3">
                            @foreach ($blogs->take(3) as $latest)
                            <div class="recent-post-item d-flex mb-3">
                                <div class="post-image me-3">
                                    <img src="{{asset('assets/images/Blogs/'.$latest->blogthumbnail)}}" alt="" class="img-fluid rounded blog-img">
                                </div>
                                <div class="post-info">
                                    <p class="meta mb-1"><a href="{{ route('blogdetails',['id' => $latest->id])}}" class="text-decoration-none text-muted">{{ implode(', ', json_decode($latest->blogcategories)) }}</a></p>
                                    <h4 class="h6"><a href="{{ route('blogdetails',['id' => $latest->id])}}" class="text-decoration-none text-dark">{{Str::limit($latest->blogname,15)}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
