{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Portfolio Dashboard')
<x-app-layout>
    <div class="container-fluid">
        <!--  Owl carousel -->
        <div class="row">
            <div class="col-md-2">
                <div class="item">
                    <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <img src="{{asset('assets/images/influencer.png')}}" width="50" height="50" class="mb-3" alt="modernize-img" />
                                <p class="fw-semibold fs-4 text-black text-center mb-1">
                                    Influencers
                                </p>
                                <h5 class="fw-semibold text-black text-center mb-0">({{$influencers}})</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="item">
                    <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <img src="{{asset('assets/images/network.png')}}" width="50" height="50" class="mb-3" alt="modernize-img" />
                                <p class="fw-semibold fs-4 text-black text-center mb-1">
                                    Partners
                                </p>
                                <h5 class="fw-semibold text-black text-center mb-0">({{$partners}})</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="item">
                    <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <img src="{{asset('assets/images/blog.png')}}" width="50" height="50" class="mb-3" alt="modernize-img" />
                                <p class="fw-semibold fs-4 text-black text-center mb-1">
                                    Blogs
                                </p>
                                <h5 class="fw-semibold text-black text-center mb-0">({{$blogs}})</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="item">
                    <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <img src="{{asset('assets/images/case-study.png')}}" width="50" height="50" class="mb-3" alt="modernize-img" />
                                <p class="fw-semibold fs-4 text-black text-center mb-1">
                                    Case Studies
                                </p>
                                <h5 class="fw-semibold text-black text-center mb-0">({{$cases}})</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="item">
                    <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <img src="{{asset('assets/images/team.png')}}" width="50" height="50" class="mb-3" alt="modernize-img" />
                                <p class="fw-semibold fs-4 text-black text-center mb-1">
                                    Users
                                </p>
                                <h5 class="fw-semibold text-black text-center mb-0">({{$users}})</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="w-100">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title fw-semibold mb-0">Recent Blogs</h4>
                            <a href="{{ route('admin.blogslist') }}" class="btn btn-outline-primary btn-sm">View Blogs</a>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <table id="" class="table table-hover table-bordered display text-nowrap py-3">
                                    <thead>
                                        <tr>
                                            <th>SNo.</th>
                                            <th>Thumbnail</th>
                                            <th>Blog Name</th>
                                            <th>Blog Description</th>
                                            <th>Blog Date</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body">
                                        @foreach ($blogsdata->take(3) as $index => $data)
                                        <tr>
                                            <td>{{ $index + 1}}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-6">
                                                    <img src="{{asset('assets/images/Blogs/'.$data->blogthumbnail)}}" width="100" class="rounded">
                                                </div>
                                            </td>
                                            <td>{{ Str::limit( $data->blogname,20)}}</td>
                                            <td>{{ Str::limit(strip_tags($data->blogdescription), 20) }}</td>
                                            <td>{{ $data->created_at->format('d M Y | h:i A')}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="w-100">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title fw-semibold mb-0">Recent Case Studies</h4>
                            <a href="{{ route('admin.casestudylists') }}" class="btn btn-outline-primary btn-sm">View Case Studies</a>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <table id="" class="table table-hover table-bordered display text-nowrap py-3">
                                    <thead>
                                        <tr>
                                            <th>SNo.</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Created On</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body">
                                        @foreach ($casesdata->take(3) as $index => $data)
                                        <tr>
                                            <td>{{ $index + 1}}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-6">
                                                    <img src="{{asset('assets/images/CaseStudies/'.$data->caseimage)}}" width="100" class="rounded">
                                                </div>
                                            </td>
                                            <td>{{ Str::limit( $data->title,20)}}</td>
                                            <td>{{ $data->category}}</td>
                                            <td>{{ $data->created_at->format('d M Y | h:i A')}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="w-100">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title fw-semibold mb-0">Registered Users</h4>
                        </div>
                        <div class="card-body mydashboardscroll">
                            <div class="table-responsive">
                                <table id="" class="table table-hover table-bordered display text-nowrap py-3">
                                    <thead>
                                        <tr>
                                            <th>SNo.</th>
                                            <th>Registered On</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body">
                                        @foreach ($allusers as $index => $data)
                                        <tr>
                                            <td>{{ $index + 1}}</td>
                                            <td>{{ $data->created_at->format('d M Y | h:i A')}}</td>
                                            <td>{{ $data->name}}</td>
                                            <td>{{ $data->email}}</td>
                                            <td> <span class="badge text-bg-success"> {{ ucfirst('Verified') }}</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
