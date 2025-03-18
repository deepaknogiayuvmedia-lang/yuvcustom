@extends('website.layout.websitemain')
@section('title', $casedetails->title)
@section('content')
<canvas id="gradient-canvas"></canvas>

<section class="py-5 position-relative">
    <div class="container pt-5">
        <div class=" row">
            <div class="col-md-12">
                <div class="text-center globaltxtcolor fs-1">
                    {{$casedetails->title}}
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
                        <img src="{{asset('assets/images/CaseStudies/'.$casedetails->caseimage)}}" alt="service bg" class="mb-3 img-fluid rounded-3">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class=" wow fadeInUp globaltxtcolor" data-wow-delay="0.25s">
                            Posted on :
                        </div>
                        <div>
                            <a class="fw-bold text-black ">{{$casedetails->created_at->format('d/M/Y')}}</a>
                        </div>
                    </div>
                </div>
                <div class="gmbcardone shadow-sm rounded-3 mt-4">
                    <div class="card-body">
                        @php
                        $cleanedContent = preg_replace('/contenteditable="[^"]*"/', '', $casedetails->casecontent);
                        @endphp
                        <p class="text-muted"> {!! $cleanedContent !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="gmbcardone shadow-sm rounded-3">
                    <div class="card-body">
                        <h3 class="globaltxtcolor">Categories</h3>
                        <div class="text-start fs-6">
                            {{$casedetails->category}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
