@extends('website.layout.websitemain')
@section('title', 'Portfolio | ' . config('app.name'))
@section('content')


    <section id="aboutfirstsection" class="pt-3">
        <div class="container pt-5" style="position: relative;">
            <div class="row">
                <div class="text-center fs-1 fw-bold ">
                    Portfolio <br>
                    <span class="globaltxtcolor">Future-Ready Solutions.</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap aboutsecondhead">
                        Driven by innovation and fueled by creativity, we are a passionate team at Yuvmedia, committed to
                        turning your digital visions into reality.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row portfolio">
            <div class="d-flex align-items-start position-relative">
                <div class="nav flex-column nav-pill me-3  position-sticky top-50 " id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <div class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                            aria-expanded="false">2D Animation </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button class="active dropdown-item" id="v-pills-Character-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Character" type="button" role="tab"
                                    aria-controls="v-pills-Character" aria-selected="true">2D Character Animation</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Motion-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Motion" type="button" role="tab"
                                    aria-controls="v-pills-Motion" aria-selected="false">2D Motion Graphics</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Logo-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Logo" type="button" role="tab"
                                    aria-controls="v-pills-Logo" aria-selected="false">Logo Animations</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Slideshow-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Slideshow" type="button" role="tab"
                                    aria-controls="v-pills-Slideshow" aria-selected="false">Slideshow</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-youtube-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-youtube" type="button" role="tab"
                                    aria-controls="v-pills-youtube" aria-selected="false">Youtube Intro Outro</button>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                            aria-expanded="false">3D Animation </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button class=" dropdown-item" id="v-pills-Modeling-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Modeling" type="button" role="tab"
                                    aria-controls="v-pills-Modeling" aria-selected="true">3D Modeling</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Product-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Product" type="button" role="tab"
                                    aria-controls="v-pills-Product" aria-selected="false">3D Product Animation</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Lighting-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Lighting" type="button" role="tab"
                                    aria-controls="v-pills-Lighting" aria-selected="false">Lighting & Compositing</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Rigging-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Rigging" type="button" role="tab"
                                    aria-controls="v-pills-Rigging" aria-selected="false">Rigging And Simulations</button>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                            aria-expanded="false">Video Editing </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button class=" dropdown-item" id="v-pills-Commercial-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Commercial" type="button" role="tab"
                                    aria-controls="v-pills-Commercial" aria-selected="true">Commercial Video
                                    Shoot</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Corporate-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Corporate" type="button" role="tab"
                                    aria-controls="v-pills-Corporate" aria-selected="false">Corporate Promo Edit</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Music-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Music" type="button" role="tab"
                                    aria-controls="v-pills-Music" aria-selected="false">Music Video Edit</button>
                            </li>
                            <li>
                                <button class=" dropdown-item" id="v-pills-Travel-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-Travel" type="button" role="tab"
                                    aria-controls="v-pills-Travel" aria-selected="false">Travel Video Edit</button>
                            </li>
                        </ul>
                    </div>

                    <button class="nav-link" id="v-pills-cgi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cgi"
                        type="button" role="tab" aria-controls="v-pills-cgi" aria-selected="false">CGI</button>
                    <button class="nav-link" id="v-pills-Story-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-Story" type="button" role="tab" aria-controls="v-pills-Story"
                        aria-selected="false">Logo
                        Story</button>
                    <button class="nav-link" id="v-pills-vfx-tab" data-bs-toggle="pill" data-bs-target="#v-pills-vfx"
                        type="button" role="tab" aria-controls="v-pills-vfx" aria-selected="false">VFX</button>

                </div>

                <div class="tab-content" id="v-pills-tabContent">
                    {{-- 2D Character Animation --}}
                    <div class="tab-pane fade show active" id="v-pills-Character" role="tabpanel"
                        aria-labelledby="v-pills-Character-tab" tabindex="0">
                        <div class="row ps-5" id="characterAnimationSection">
                            <h3>2D Animation > <span class="fw-bold">2D Character Animation</span></h3>
                        </div>
                    </div>

                    {{-- 2D Motion Graphics --}}
                    <div class="tab-pane fade" id="v-pills-Motion" role="tabpanel" aria-labelledby="v-pills-Motion-tab"
                        tabindex="0">
                        <div class="row ps-5" id="motionGraphicsSection">
                            <h3>2D Animation > <span class="fw-bold">2D Motion Graphics</span></h3>
                        </div>
                    </div>

                    {{-- Logo Animations --}}
                    <div class="tab-pane fade" id="v-pills-Logo" role="tabpanel" aria-labelledby="v-pills-Logo-tab"
                        tabindex="0">
                        <div class="row ps-5" id="logoAnimationSection">
                            <h3>Logo Animations</h3>
                        </div>
                    </div>

                    {{-- Slideshows --}}
                    <div class="tab-pane fade" id="v-pills-Slideshow" role="tabpanel"
                        aria-labelledby="v-pills-Slideshow-tab" tabindex="0">
                        <div class="row ps-5" id="slideShowSection">
                            <h3>Slideshows</h3>
                        </div>
                    </div>

                    {{-- Youtube Intro Outro --}}
                    <div class="tab-pane fade" id="v-pills-youtube" role="tabpanel"
                        aria-labelledby="v-pills-youtube-tab" tabindex="0">
                        <div class="row ps-5" id="youtubeIntroSection">
                            <h3>Youtube Intro Outro</h3>
                        </div>
                    </div>

                    {{-- 3D Animation --}}
                    <div class="tab-pane fade" id="v-pills-Modeling" role="tabpanel"
                        aria-labelledby="v-pills-Modeling-tab" tabindex="0">
                        <div class="row ps-5" id="modelingSection">
                            <h3>3D Modeling</h3>
                        </div>
                    </div>

                    {{-- 3D Product Animation --}}
                    <div class="tab-pane fade" id="v-pills-Product" role="tabpanel"
                        aria-labelledby="v-pills-Product-tab" tabindex="0">
                        <div class="row ps-5" id="productAnimationSection">
                            <h3>3D Product Animation</h3>
                        </div>
                    </div>

                    {{-- Lighting and Compositing --}}
                    <div class="tab-pane fade" id="v-pills-Lighting" role="tabpanel"
                        aria-labelledby="v-pills-Lighting-tab" tabindex="0">
                        <div class="row ps-5" id="lightingCompositingSection">
                            <h3>Lighting and Compositing</h3>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-Rigging" role="tabpanel"
                        aria-labelledby="v-pills-Rigging-tab" tabindex="0">
                        <div class="row ps-5" id="riggingSimulationSection">
                            <h3>Rigging And Simulation</h3>
                        </div>
                    </div>


                    {{-- Video Editing --}}
                    <div class="tab-pane fade" id="v-pills-Commercial" role="tabpanel"
                        aria-labelledby="v-pills-Commercial-tab" tabindex="0">
                        <div class="row ps-5" id="commercialVideoSection">
                            <h3>Commercial Video Shoot</h3>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Corporate" role="tabpanel"
                        aria-labelledby="v-pills-Corporate-tab" tabindex="0">
                        <div class="row ps-5" id="corporatePromoSection">
                            <h3>Corporate Promo</h3>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Music" role="tabpanel" aria-labelledby="v-pills-Music-tab"
                        tabindex="0">
                        <div class="row ps-5" id="musicVideoSection">
                            <h3>Music Video</h3>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Travel" role="tabpanel" aria-labelledby="v-pills-Travel-tab"
                        tabindex="0">
                        <div class="row ps-5" id="travelVideoSection">
                            <h3>Travel Video</h3>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="v-pills-cgi" role="tabpanel" aria-labelledby="v-pills-cgi-tab"
                        tabindex="0">
                        <div class="row ps-5" id="cgiSection">
                            <h3>CGI</h3>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Story" role="tabpanel" aria-labelledby="v-pills-Story-tab"
                        tabindex="0">
                        <div class="row ps-5" id="logoStorySection">
                            <h3>Logo Story</h3>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-vfx" role="tabpanel" aria-labelledby="v-pills-vfx-tab"
                        tabindex="0">
                        <div class="row ps-5" id="vfxSection">
                            <h3>VFX</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap Modal -->
    <div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediaModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div id="mediaContainer">
                        <iframe id="modalVideo" width="100%" height="450" frameborder="0" allowfullscreen
                            style="display: none;"></iframe>
                        <img id="modalImage" src="" class="img-fluid" style="display: none;">
                    </div>
                    <div class="modal-description mt-3">
                        <p id="modalContent"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vimeo Player API -->
    <script src="https://player.vimeo.com/api/player.js"></script>

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var mediaModal = document.getElementById('mediaModal');
            var modalVideo = document.getElementById('modalVideo');
            var modalImage = document.getElementById('modalImage');
            var modalTitle = document.getElementById('mediaModalLabel');
            var modalContent = document.getElementById('modalContent');

            mediaModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var mediaSrc = button.getAttribute('data-media-src');
                var title = button.getAttribute('data-title');
                var content = button.getAttribute('data-content');
                var type = button.getAttribute('data-type');

                modalTitle.textContent = title;
                modalContent.textContent = content;

                if (type === "video") {
                    modalVideo.style.display = "block";
                    modalImage.style.display = "none";
                    modalVideo.setAttribute('src', mediaSrc + "?autoplay=1");
                } else if (type === "image") {
                    modalVideo.style.display = "none";
                    modalImage.style.display = "block";
                    modalImage.setAttribute('src', mediaSrc);
                }
            });

            mediaModal.addEventListener('hidden.bs.modal', function() {
                modalVideo.setAttribute('src', '');
                modalImage.setAttribute('src', '');
            });
        });
    </script> --}}

    <script>
        // 2d animations
        const characterAnimationData = [{
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057391357",
                "title": "2D Character Animation : 1",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057391422",
                "title": "2D Character Animation : 2",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057391456",
                "title": "2D Character Animation : 3",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057391493",
                "title": "2D Character Animation : 4",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057391543",
                "title": "2D Character Animation : 5",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057391571",
                "title": "2D Character Animation : 6",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            }
        ];
        const motionGraphicsData = [{
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057402898",
                "title": "2D Motion Graphics-01",
                "content": "Smooth and expressive 2D Motion Graphics bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057402944",
                "title": "2D Motion Graphics-02",
                "content": "Smooth and expressive 2D Motion Graphics bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057402977",
                "title": "2D Motion Graphics-03",
                "content": "Smooth and expressive 2D Motion Graphics bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057402997",
                "title": "2D Motion Graphics-04",
                "content": "Smooth and expressive 2D Motion Graphics bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057403012",
                "title": "2D Motion Graphics-05",
                "content": "Smooth and expressive 2D Motion Graphics bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057403179",
                "title": "SHALINI & MALINI",
                "content": "Smooth and expressive SHALINI & MALINI bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057403043",
                "title": "2D Motion Graphics",
                "content": "Smooth and expressive 2D Motion Graphics bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057403138",
                "title": "2D Motion Graphics for IYS",
                "content": "Smooth and expressive 2D Motion Graphics for IYS bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057403095",
                "title": "Finance Video Norwegian",
                "content": "Smooth and expressive Finance Video Norwegian bringing characters to life with fluid movements, emotions, and personality for games."
            }
        ];
        const logoAnimationData = [{
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057411977",
                "title": "Logo-01",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057411992",
                "title": "Logo-02",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057412025",
                "title": "Logo-03",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057412043",
                "title": "Logo-04",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057412067",
                "title": "Logo-05",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057412085",
                "title": "Logo-06",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057412123",
                "title": "Logo-07",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057412145",
                "title": "Logo-08",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057412174",
                "title": "Logo-09",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057411956",
                "title": "Logo-10",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
        ];
        const slideShowData = [{
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057414939",
                "title": "Slideshow-01",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057414972",
                "title": "Slideshow-02",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057414991",
                "title": "Slideshow-03",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057414915",
                "title": "Slideshow-04",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            }
        ];
        const youtubeIntroData = [{
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057415779",
                "title": "Youtube Intro Outro-01",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057415805",
                "title": "Youtube Intro Outro-02",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057415842",
                "title": "Youtube Intro Outro-03",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057415877",
                "title": "Youtube Intro Outro-04",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057415918",
                "title": "Youtube Intro Outro-05",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057415957",
                "title": "Youtube Intro Outro-06",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057415978",
                "title": "Youtube Intro Outro-07",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            }
        ];

        // 3d Animations
        const modelingData = [{
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/3d-product-modeling-2.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/bathroom-3d-model-max-obj-3ds-fbx (1).jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/bathroom-3d-model-max-obj-3ds-fbx (2).jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/bathroom-3d-model-max-obj-3ds-fbx.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/care-for-water-products-3d-model-29598e7664.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/care-for-water-products-3d-model-f7e8fd886d.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/christian-gallego-high-poly-renders-copy.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/classic-office-desk-3d-model-low-poly-rigged-obj-fbx-stl-blend-dae-abc (1).jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/classic-office-desk-3d-model-low-poly-rigged-obj-fbx-stl-blend-dae-abc.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/ecovacs-deebot-x1-plus-robot-3d-model-1ec84f5a99.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/ecovacs-deebot-x1-plus-robot-3d-model-4938ff8372.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/ecovacs-deebot-x1-plus-robot-3d-model-f0b3f4edcd.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/gabriel-soares-05.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/gabriel-soares-08.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/gabriel-soares-09.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/jade-matcha-body-care-products-3d-model-2c237c80d4.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/jade-matcha-body-care-products-3d-model-e42ede3320.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/jade-matcha-body-lotion-3d-model-66b4fdf057.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/jade-matcha-body-lotion-3d-model-fbef879454.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/Model-01.1.png",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/Model-01.png",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/set-of-four-stylish-brown-bags-3d-model-max-fbx-c4d (1).jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/set-of-four-stylish-brown-bags-3d-model-max-fbx-c4d (2).jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/set-of-four-stylish-brown-bags-3d-model-max-fbx-c4d.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/spray-bottle-and-fliptop-250ml-3d-model-rigged-obj-mtl-fbx-blend (1).jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/spray-bottle-and-fliptop-250ml-3d-model-rigged-obj-mtl-fbx-blend.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/watercolor-room-interior-scene-3d-model-obj-3ds-fbx-c4d-stl (1).jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/watercolor-room-interior-scene-3d-model-obj-3ds-fbx-c4d-stl (2).jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/3D Modeling/watercolor-room-interior-scene-3d-model-obj-3ds-fbx-c4d-stl.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            }

        ];
        const productAnimationData = [{
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480377",
                "title": "Product Animation-01",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480412",
                "title": "Product Animation-02",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480446",
                "title": "Product Animation-03",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480479",
                "title": "Product Animation-04",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480503",
                "title": "Product Animation-05",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480531",
                "title": "Product Animation-06",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480565",
                "title": "Product Animation-07",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480594",
                "title": "Product Animation-08",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480640",
                "title": "Product Animation-09",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480685",
                "title": "Product Animation-10",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480720",
                "title": "Product Animation-11",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480751",
                "title": "Product Animation-12",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480781",
                "title": "Product Animation-13",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480800",
                "title": "Product Animation-14",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057480838",
                "title": "Product Animation-15",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
        ];
        const lightingCompositingData = [{
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057485591",
                "title": "Lighting & Compositing-01",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057485363",
                "title": "Lighting & Compositing-02",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057485482",
                "title": "Lighting & Compositing-03",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
        ];
        const riggingSimulationData = [{
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057489217",
                "title": "Rigging And Simulations-01",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057489253",
                "title": "Rigging And Simulations-02",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057489146",
                "title": "Rigging And Simulations-03",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/Rigging/3d-rigger-studiom-aldana.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/Rigging/how-to-make-a-3d-animation-face-1-600x387.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/Rigging/Leopard_Rig_Breakdown_JPEG_v001-1.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/Rigging/maxresdefault.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/Rigging/natPose_crouchSmile_1080_2.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/Rigging/natPose_threeStanding_820.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
            {
                "type": "image",
                "mediaSrc": "assets/websiteAssets/images/portfolio/Rigging/sundramn-rigged.jpg",
                "title": "Amazing Image",
                "content": "This is a stunning image captured in high resolution."
            },
        ];

        // Video Editing
        const commercialVideoData = [
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057498090",
                "title": "Commercial Video-01",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057498142",
                "title": "Commercial Video-02",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057498190",
                "title": "Commercial Video-03",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057498252",
                "title": "Commercial Video-04",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057498288",
                "title": "Commercial Video-05",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057498334",
                "title": "Commercial Video-06",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057498387",
                "title": "Commercial Video-07",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057498432",
                "title": "Commercial Video-08",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057498485",
                "title": "Commercial Video-09",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057498042",
                "title": "Commercial Video-10",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
        ];
        const corporatePromoData = [
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057499654",
                "title": "Corporate Promo-1",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057499501",
                "title": "Corporate Promo-2",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
        ];
        const musicVideoData = [
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057500022",
                "title": "Music Video-1",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
        ];
        const travelVideoData = [
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057500574",
                "title": "Travel Video-1",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057500696",
                "title": "Travel Video-2",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057500419",
                "title": "Travel Video-3",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
        ];
        
        // CGI
        const cgiData = [
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491383",
                "title": "Commercial Video 01",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491419",
                "title": "Commercial Video 02",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491458",
                "title": "Commercial Video 03",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491525",
                "title": "Commercial Video 04",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491566",
                "title": "Commercial Video 05",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491634",
                "title": "Commercial Video 06",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491678",
                "title": "Commercial Video 07",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491719",
                "title": "Commercial Video 08",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057490728",
                "title": "Commercial Video 09",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057490781",
                "title": "Commercial Video 10",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057490816",
                "title": "Commercial Video 11",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057490854",
                "title": "Commercial Video 12",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057490910",
                "title": "Commercial Video 13",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057490949",
                "title": "Commercial Video 14",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057490981",
                "title": "Commercial Video 15",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491015",
                "title": "Commercial Video 16",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491054",
                "title": "Commercial Video 17",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491103",
                "title": "Commercial Video 18",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491149",
                "title": "Commercial Video 19",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491199",
                "title": "Commercial Video 20",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491241",
                "title": "Commercial Video 21",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491279",
                "title": "Commercial Video 22",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057491349",
                "title": "Commercial Video 23",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
        ];
        const vfxData = [
            {
                "type": "video",
                "mediaSrc": "https://player.vimeo.com/video/1057501045",
                "title": "Showreel",
                "content": "Smooth and expressive 2D character animation bringing characters to life with fluid movements, emotions, and personality for games."
            },
        ];
    </script>


    <script>
        function populateSection(sectionId, data) {
            let section = document.getElementById(sectionId);
            data.forEach(item => {
                let mediaCard = document.createElement("div");
                mediaCard.className = "col-md-6";
                mediaCard.innerHTML = `
            <a href="#" class="url-box" data-bs-toggle="modal"
                data-bs-target="#mediaModal"
                data-media-src="${item.mediaSrc}"
                data-title="${item.title}"
                data-content="${item.content}"
                data-type="${item.type}">
                <figure class='newsCard news-Slide-up'>
                    <div class="media-container">
                        ${item.type === "video" ? 
                            `<iframe src="${item.mediaSrc}?background=1&autoplay=1&loop=1&muted=1"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                            allowfullscreen height="285px" class="w-100"></iframe>` 
                            : 
                            `<img src="${item.mediaSrc}" alt="${item.title}" class="w-100">`
                        }
                    </div>
                    <div class='newsCaption px-4'>
                        <div class="d-flex align-items-center justify-content-between cnt-title">
                            <h5 class='newsCaption-title text-white m-0'>${item.title}</h5>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                        </div>
                        <div class='newsCaption-content d-flex'>
                            <p class="col-10 py-3 px-0">${item.content}</p>
                        </div>
                    </div>
                    <span class="overlay"></span>
                </figure>
            </a>
        `;
                section.appendChild(mediaCard);
            });
        }

        // Populate each section
        document.addEventListener("DOMContentLoaded", function() {
            // 2d animations
            populateSection("motionGraphicsSection", motionGraphicsData);
            populateSection("characterAnimationSection", characterAnimationData);
            populateSection("logoAnimationSection", logoAnimationData);
            populateSection("slideShowSection", slideShowData);
            populateSection("youtubeIntroSection", youtubeIntroData);

            // 3d Animations
            populateSection("modelingSection", modelingData);
            populateSection("productAnimationSection", productAnimationData);
            populateSection("lightingCompositingSection", lightingCompositingData);
            populateSection("riggingSimulationSection", riggingSimulationData);

            // Video Editing
            populateSection("commercialVideoSection", commercialVideoData);
            populateSection("corporatePromoSection", corporatePromoData);
            populateSection("musicVideoSection", musicVideoData);
            populateSection("travelVideoSection", travelVideoData);

            // cgiData
            populateSection("cgiSection", cgiData);
            populateSection("vfxSection", vfxData);


            // Handle Modal Interactions
            var mediaModal = document.getElementById("mediaModal");
            var modalVideo = document.getElementById("modalVideo");
            var modalImage = document.getElementById("modalImage");
            var modalTitle = document.getElementById("mediaModalLabel");
            var modalContent = document.getElementById("modalContent");

            mediaModal.addEventListener("show.bs.modal", function(event) {
                var button = event.relatedTarget;
                var mediaSrc = button.getAttribute("data-media-src");
                var title = button.getAttribute("data-title");
                var content = button.getAttribute("data-content");
                var type = button.getAttribute("data-type");

                modalTitle.textContent = title;
                modalContent.textContent = content;

                if (type === "video") {
                    modalVideo.style.display = "block";
                    modalImage.style.display = "none";
                    modalVideo.setAttribute("src", mediaSrc + "?autoplay=1");
                } else if (type === "image") {
                    modalVideo.style.display = "none";
                    modalImage.style.display = "block";
                    modalImage.setAttribute("src", mediaSrc);
                }
            });

            mediaModal.addEventListener("hidden.bs.modal", function() {
                modalVideo.setAttribute("src", "");
                modalImage.setAttribute("src", "");
            });
        });
    </script>
@endsection
