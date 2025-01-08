@extends('website.layout.websitemain')
@section('title', 'Video Production | ' . config('app.name'))
@section('content')
    {{-- <canvas id="gradient-canvas"></canvas> --}}

    <section class="pb-5 position-relative herosection ">

        <div class="t396__elem tn-elem>
            <div class="tn-atom">
            <img class="tn-atom__img t-img loaded"
                data-original="https://static.tildacdn.net/tild3662-6663-4635-b537-623634663838/back1.svg" alt=""
                imgfield="tn_img_1630431981527"
                src="https://static.tildacdn.net/tild3662-6663-4635-b537-623634663838/back1.svg">
        </div>
        </div>

        <!-- Video Background -->
        <video class="video-background" preload="auto" playsinline autoplay loop muted>
            <source src="https://dl.dropbox.com/s/w3puzjbl3sla5vi/MEGA%20REEL_V2.mp4?dl=0" type="video/mp4">
        </video>

        <!-- Banner Section -->
        <div class="container bannersection">
            <div class="row py-5">
                <div class="heroTitle">
                    VFX and 3D animation studio with <br />Customized Solutions
                    for Diverse Industries
                </div>
                <div class="subTitle">
                    Fusion of Technology and Creativity |
                    Timely Delivery |
                    End-to-End Project Management
                </div>
            </div>
        </div>
    </section>


    <section class="py-4 position-relative bg-black" style="z-index: 9">
        <div class="container">
            <div class="row align-items-center text-white">
                <div class="col-md-12">
                    <div class="text-center videoproheading">
                        Our <span class="fw-bold text-info">Projects</span>
                    </div>
                    <div class="text-center py-2">
                        <p class="text-wrap videoprosecondhead">
                            VFX, compositing, 3D animation, 2D, color grading, AI, and Unreal Engine 5.
                            For commercials, viral cgi marketing, games,
                            music videos and films.
                        </p>
                    </div>

                </div>

            </div>

            <div class="portfolio section">
                <div class="container">

                    <div class="filters">
                        <ul>
                            <li class="active" data-filter=".all">All</li>
                            <li data-filter=".reels">Reels</li>
                            <li data-filter=".compositing">VFX/Compositing</li>
                            <li data-filter=".grading">Color Grading</li>
                            <li data-filter=".editing">Video Editing</li>
                            <li data-filter=".animation">3D Animation</li>
                        </ul>
                    </div>

                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-sm-4 all reels">
                                <div class="item">
                                    <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-1.png?width=767&name=Email-Temp-1.png"
                                        alt="Work 1" class="img-fluid">
                                    <div class="p-inner">
                                        <h5>Enlarge</h5>
                                        <div class="cat">Enlarge</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 all corporate">
                                <div class="item">
                                    <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-1.png?width=767&name=Email-Temp-1.png"
                                        alt="Work 1" class="img-fluid">
                                    <div class="p-inner text-white">
                                        <h5>Enlarge</h5>
                                        <div class="cat">Enlarge</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 all compositing">
                                <div class="item">
                                    <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-2.png?width=562&name=Email-Temp-2.png"
                                        alt="Work 1" class="img-fluid">
                                    <div class="p-inner">
                                        <h5>Work 1</h5>
                                        <div class="cat">Personal</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 all grading">
                                <div class="item">
                                    <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-3.png?width=562&name=Email-Temp-3.png"
                                        alt="Work 1" class="img-fluid">
                                    <div class="p-inner">
                                        <h5>Work 1</h5>
                                        <div class="cat">Agency</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 all editing">
                                <div class="item">
                                    <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-4.png?width=564&name=Email-Temp-4.png"
                                        alt="Work 1" class="img-fluid">
                                    <div class="p-inner">
                                        <h5>Work 1</h5>
                                        <div class="cat">Portal</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 all animation">
                                <div class="item">
                                    <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-5.png?width=562&name=Email-Temp-5.png"
                                        alt="Work 1" class="img-fluid">
                                    <div class="p-inner">
                                        <h5>Work 1</h5>
                                        <div class="cat">Portal</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 all animation">
                                <div class="item">
                                    <img src="https://20294495.fs1.hubspotusercontent-na1.net/hub/20294495/hubfs/Email-Temp-6.png?width=767&name=Email-Temp-6.png"
                                        alt="Work 1" class="img-fluid">
                                    <div class="p-inner">
                                        <h5>Work 1</h5>
                                        <div class="cat">Portal</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-4 position-relative bg-black" style="z-index: 9">
        <div class="container">
            <div class="row align-items-center text-white">
                <div class="col-md-12">
                    <div class="text-center videoproheading">
                        Our <span class="fw-bold text-info">Services</span>
                    </div>
                    <div class="text-center py-2">
                        <p class="text-wrap videoprosecondhead">
                            We work in 6 most popular directions
                        </p>
                    </div>

                </div>

            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="gradient-border-card"
                        style="background-image: url('https://optim.tildacdn.net/tild3563-6163-4435-a435-366335366365/-/cover/547x277/center/center/-/format/webp/u1.jpg');">
                        <div class="icon mb-3">
                            <img src="https://img.icons8.com/isometric-line/100/FFFFFF/video-call.png" alt="video-call" />

                        </div>
                        <h2 class="gradient-text-animation">Video Editing</h2>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <div class="shimmer"></div>
                        <i aria-hidden="true"></i>
                        <button type="submit" class="mt-3">
                            <span>
                                <span class="highlight-bg"></span>
                                <span class="button-text">
                                    <svg class="me-2" fill="none" height="24" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" width="24">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <path d="M20 8v6"></path>
                                        <path d="M23 11h-6"></path>
                                    </svg>
                                    Details
                                </span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="gradient-border-card"
                        style="background-image: url('https://optim.tildacdn.net/tild3337-3133-4034-b333-363961333730/-/cover/550x277/right/top/-/format/webp/u2.jpg'); background-position: bottom;">
                        <div class="icon mb-3">
                            <img src="https://img.icons8.com/ink/96/FFFFFF/visual-effects.png" alt="visual-effects" />
                        </div>
                        <h2 class="gradient-text-animation">VFX</h2>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <div class="shimmer"></div>
                        <i aria-hidden="true"></i>
                        <button type="submit" class="mt-3">
                            <span>
                                <span class="highlight-bg"></span>
                                <span class="button-text">
                                    <svg class="me-2" fill="none" height="24" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" width="24">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <path d="M20 8v6"></path>
                                        <path d="M23 11h-6"></path>
                                    </svg>
                                    Details
                                </span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="gradient-border-card"
                        style="background-image: url('https://optim.tildacdn.net/tild6133-3663-4139-b264-613933366339/-/cover/547x277/center/center/-/format/webp/u3.jpg'); background-position: bottom;">
                        <div class="icon mb-3">
                            <img src="{{ asset('assets/websiteAssets/images/icons/animation.png') }}" alt="icon">
                        </div>
                        <h2 class="gradient-text-animation">2D Animation</h2>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <div class="shimmer"></div>
                        <i aria-hidden="true"></i>
                        <button type="submit" class="mt-3">
                            <span>
                                <span class="highlight-bg"></span>
                                <span class="button-text">
                                    <svg class="me-2" fill="none" height="24" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" width="24">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <path d="M20 8v6"></path>
                                        <path d="M23 11h-6"></path>
                                    </svg>
                                    Details
                                </span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="gradient-border-card"
                        style="background-image: url('https://optim.tildacdn.net/tild3230-3839-4565-b432-383833643461/-/cover/550x277/center/center/-/format/webp/u4.jpg');">
                        <div class="icon mb-3">
                            <img src="https://img.icons8.com/?size=100&id=41524&format=png&color=FFFFFF"
                                alt="video-call" />
                        </div>
                        <h2 class="gradient-text-animation">3D Animation</h2>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <div class="shimmer"></div>
                        <i aria-hidden="true"></i>
                        <button type="submit" class="mt-3">
                            <span>
                                <span class="highlight-bg"></span>
                                <span class="button-text">
                                    <svg class="me-2" fill="none" height="24" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" width="24">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <path d="M20 8v6"></path>
                                        <path d="M23 11h-6"></path>
                                    </svg>
                                    Details
                                </span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="gradient-border-card"
                        style="background-image: url('https://optim.tildacdn.net/tild3130-3332-4133-b038-393633323636/-/cover/547x277/center/center/-/format/webp/u5.jpg'); background-position: bottom;">
                        <div class="icon mb-3">
                            <img src="https://img.icons8.com/?size=100&id=AaJRQNJMfve1&format=png&color=FFFFFF"
                                alt="video-call" />
                        </div>
                        <h2 class="gradient-text-animation">Pre Production</h2>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <div class="shimmer"></div>
                        <i aria-hidden="true"></i>
                        <button type="submit" class="mt-3">
                            <span>
                                <span class="highlight-bg"></span>
                                <span class="button-text">
                                    <svg class="me-2" fill="none" height="24" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" width="24">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <path d="M20 8v6"></path>
                                        <path d="M23 11h-6"></path>
                                    </svg>
                                    Details
                                </span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="gradient-border-card"
                        style="background-image: url('https://optim.tildacdn.net/tild3364-3438-4235-a431-366332323434/-/cover/550x277/center/center/-/format/webp/u6.jpg');">
                        <div class="icon mb-3">
                            <img src="https://img.icons8.com/?size=100&id=37nb8M1MdaMd&format=png&color=FFFFFF"
                                alt="video-call" />
                        </div>
                        <h2 class="gradient-text-animation">3D Services</h2>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <div class="shimmer"></div>
                        <i aria-hidden="true"></i>
                        <button type="submit" class="mt-3">
                            <span>
                                <span class="highlight-bg"></span>
                                <span class="button-text">
                                    <svg class="me-2" fill="none" height="24" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" width="24">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <path d="M20 8v6"></path>
                                        <path d="M23 11h-6"></path>
                                    </svg>
                                    Details
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div
                    class="position-relative pointer-events-none overflow-hidden pt-75 s:pt-250 will-change-transform svgsection">
                    <div class="position-absolute left-0 w-full z-2">
                        <div class="sf-rings position-relative pt-[100%] media-fit z-2">
                            <div class="sf-ring__wrap --1 position-absolute inset-0 z-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2828.43 2720.74"
                                    class="sf-ring --1">
                                    <path fill="none" stroke="#f203ff" stroke-width="2"
                                        d="M578.43 43.87c208.56-130.32 533 78.36 764.29 75.45 235.3-3 511.78-147.66 720.83-31.07 200 111.49 358 337.06 489.06 546.74s261.74 450.84 274.27 679.47c13.12 239-197.48 443.12-303.29 653.36-104 206.65-122.25 529.71-330.8 660s-507.56-50-738.86-47.08c-235.31 3-545.63 221.33-754.69 104.75-199.99-111.47-171.6-493.4-302.6-703.08S14.8 1625.09 2.25 1396.48c-13.11-239.05 78.79-484.87 184.61-695.1 104-206.66 182.96-527.18 391.57-657.51Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="sf-ring__wrap --2 position-absolute inset-0 z-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2758.36 2922.53"
                                    class="sf-ring --2">
                                    <path fill="none" stroke="#f945a2" stroke-width="2"
                                        d="M314.52 474.72c162.24-180.3 571.22-10.93 786.48-80.62 222.06-71.89 434.12-344.59 662.52-296.16 221.38 46.95 435.48 232.82 615.73 395.28s384.25 357.06 454.05 572.47c72 222.23-121.6 471.77-169.85 700.27-46.78 221.48 67.3 559.25-94.94 739.55s-531.15 36.39-746.38 106.09c-222.07 71.9-447.35 445.25-675.75 396.83-221.39-46.94-266.76-485.84-447.06-648.3s-496.24-202.2-566-417.6c-72-222.23-35.42-484.38 12.83-712.88 46.75-221.49 6.13-574.65 168.37-754.93Z"
                                        opacity=".25" transform="translate(-91.81 -91.22)"></path>
                                </svg>
                            </div>
                            <div class="sf-ring__wrap --3 position-absolute inset-0 z-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2723.79 2841.29"
                                    class="sf-ring --3">
                                    <path fill="none" stroke="#a64eff" stroke-width="2"
                                        d="M2688.5 580.86c128.59 205.78-146.74 552.37-139 778.62 8 233.4 211.6 512.62 102.2 718.91-106 200-343.54 354.54-549.25 483.08s-448.83 271-675 278.64c-233.34 7.92-419.81-247.17-626.07-356.64-199.88-106.12-555.88-89.65-684.43-295.44s111.23-520.87 103.55-747.1c-8-233.46-304.71-553.13-195.32-759.46 106-200 540.21-122.45 745.93-251s330.86-421.43 557-429.09c233.39-7.91 475.17 99.68 681.39 209.15 200 106.11 550.43 164.54 679 370.33Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="sf-ring__wrap --4 position-absolute inset-0 z-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2700.65 3034.3" class="sf-ring --4">
                                    <path fill="none" stroke="#ff00fe" stroke-width="2"
                                        d="M1274.29 1.13c242.4-8.42 404.87 403.5 604.59 510 206 109.89 549.5 73.17 673.42 271.17 120.12 191.92 135.26 475 143.77 717.55s10.33 524.43-96.05 724.21c-109.74 206.11-423.73 240-621.57 364-191.75 120.1-355.33 436.71-597.73 445.13s-395.34-357-595.05-463.49c-206-109.89-631.07-12.81-755-210.79C-89.46 2167 194.59 1829.6 186.08 1587.05s-199.52-497.5-93.14-697.28C202.68 683.66 416.61 528 614.44 404.08 806.19 284 1031.88 9.55 1274.29 1.13Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="bg-black py-5">
        <div class="container py-5">
            <div class="row align-items-center text-white">
                <div class="col-md-12">
                    <div class="text-center videoproheading">
                        What You Will <span class="fw-bold text-info">Get ?</span>
                    </div>
                    <div class="text-center py-2">
                        <p class="text-wrap videoprosecondhead">
                            When you partner with us, you gain more than just a video; you receive a captivating story that aligns with your brand’s vision.
                        </p>
                    </div>

                </div>

            </div>
            <div class="row align-items-center justify-content-center ">

                <div class="box">
                    <span></span>
                    <div class="content">
                        <h2>Corporate Videos
                        </h2>
                        <p>
                            Present your brand's story, values, and achievements through professional corporate videos.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <span></span>
                    <div class="content">
                        <h2>Promotional Videos
                        </h2>
                        <p>
                            Highlight your services or products with engaging promotional videos to attract customers.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <span></span>
                    <div class="content">
                        <h2>Event Coverage
                        </h2>
                        <p>
                            Capture the important moments of your events with thorough video coverage, including all
                            functions.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <span></span>
                    <div class="content">
                        <h2>Social Media Videos</h2>
                        <p>
                            Create a stronger online presence with short, powerful videos for all social platforms.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <span></span>
                    <div class="content">
                        <h2>Training Videos</h2>
                        <p>
                            Create informative videos to train your employees or educate your audience effectively.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-5 position-relative bg-black" style="z-index: 9">
        <div class="container pt-5">
            <div class="row align-items-center text-white">
                <div class="col-md-12">
                    <div class="text-center videoproheading">
                        Directions
                    </div>
                    <div class="text-center py-2">
                        <p class="text-wrap videoprosecondhead">
                            Just tell us the style, length and aim of your video, and we'll work to your brief
                        </p>
                    </div>

                </div>

            </div>
            <div class="row g-5 justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="p-5 rounded-4 tabbg"
                        style="background-image: url('https://optim.tildacdn.net/tild3563-6163-4435-a435-366335366365/-/cover/547x277/center/center/-/format/webp/u1.jpg');">
                        <div class="text-white fs-3 fw-light">
                            Travel videos
                        </div>
                        <div class="text-white">
                            <p>
                                Explore stunning travel destinations through captivating videos, showcasing culture, nature,
                                adventure, and unforgettable experiences worldwide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 rounded-4 tabbg"
                        style="background-image: url('https://optim.tildacdn.net/tild3062-3862-4634-a438-653132393763/-/cover/376x109/center/center/-/format/webp/noroot.png');">
                        <div class="text-white fs-3 fw-light">
                            Commercial Ad Videos
                        </div>
                        <div class="text-white">
                            <p>
                                Engaging commercial ad videos crafted to elevate brand identity, captivate audiences, and
                                drive impactful connections with your target market.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 rounded-4 tabbg"
                        style="background-image: url('https://static.tildacdn.com/tild6430-3962-4731-b263-396236376130/u3.jpg');">
                        <div class="text-white fs-3 fw-light">
                            Corporate Videos
                        </div>
                        <div class="text-white">
                            <p>
                                Professional corporate videos designed to showcase your brand's vision, achievements, and
                                values while strengthening trust with clients and stakeholders.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 rounded-4 tabbg"
                        style="background-image: url('https://optim.tildacdn.net/tild3865-3338-4438-a364-663935363239/-/cover/376x109/center/center/-/format/webp/u4.jpg');">
                        <div class="text-white fs-3 fw-light">
                            Drone videos
                        </div>
                        <div class="text-white">
                            <p>
                                Stunning drone videos capturing breathtaking aerial views, perfect for real estate, events,
                                tourism, and promotional storytelling.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 rounded-4 tabbg"
                        style="background-image: url('https://optim.tildacdn.net/tild6265-3666-4637-b461-626236653762/-/cover/376x109/center/center/-/format/webp/u5.jpg');">
                        <div class="text-white fs-3 fw-light">
                            Wedding videos
                        </div>
                        <div class="text-white">
                            <p>
                                Beautifully crafted wedding videos capturing every magical moment, emotion, and detail to
                                cherish your special day forever.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 rounded-4 tabbg"
                        style="background-image: url('https://optim.tildacdn.net/tild6432-6639-4336-a536-373030353736/-/cover/376x109/center/center/-/format/webp/u6.jpg');">
                        <div class="text-white fs-3 fw-light">
                            Photo animation
                        </div>
                        <div class="text-white">
                            <p>
                                Transform static photos into dynamic animations, bringing memories to life with smooth
                                transitions, effects, and captivating storytelling.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 rounded-4 tabbg"
                        style="background-image: url('https://static.tildacdn.com/tild6239-3831-4432-b665-636164353637/noroot.png');">
                        <div class="text-white fs-3 fw-light">
                            Real-estate
                        </div>
                        <div class="text-white">
                            <p>
                                Showcase properties with stunning visuals, dynamic walkthroughs, and aerial views to
                                captivate buyers and elevate real estate marketing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 rounded-4 tabbg"
                        style="background-image: url('https://thumb.tildacdn.com/tild3739-3037-4930-b333-653162656638/-/format/webp/noroot.png.webp');">
                        <div class="text-white fs-3 fw-light">
                            Music videos
                        </div>
                        <div class="text-white">
                            <p>
                                Bring your music to life with creative storytelling, stunning visuals, and dynamic edits
                                that resonate with your audience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 rounded-4 tabbg"
                        style="background-image: url('https://static.tildacdn.com/tild3565-6365-4338-b937-626338303363/u2.jpg');">
                        <div class="text-white fs-3 fw-light">
                            Many more
                        </div>
                        <div class="text-white">
                            <p>
                                Offering diverse video production services tailored to your needs, including documentaries,
                                event coverage, interviews, product shoots, and more.
                            </p>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </section>
    <section class="py-5 position-relative bg-black" style="z-index: 9">
        <div class="container pt-5">
            <div class="row align-items-center text-white">
                <div class="col-md-12">
                    <div class="text-center videoproheading">
                        Working <span class="fw-bold text-info">Stages</span>
                    </div>
                    <div class="text-center py-2">
                        <p class="text-wrap videoprosecondhead">
                            8 easy steps over your project
                        </p>
                    </div>

                </div>

            </div>
            <div class="row g-2 justify-content-center align-items-center">
                <div class="col-md-3">
                    <div class="d-flex p-3 align-items-center">
                        <div>
                            <img src="https://static.tildacdn.net/tild3838-3533-4964-b236-366365356563/01.svg"
                                alt="">
                        </div>
                        <div class="text-white p-3">
                            <p>
                                Filling out the brief for better understanding of the project's tasks
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-1">
                    <img src="https://static.tildacdn.net/tild3436-6363-4535-b135-633961343634/arrow2.svg" alt="">
                </div>

                <div class="col-md-3">
                    <div class="d-flex p-3 align-items-center">
                        <div>
                            <img src="https://static.tildacdn.net/tild3434-3462-4130-a535-383630333061/02.svg"
                                alt="">
                        </div>
                        <div class="text-white p-3">
                            <p>
                                Analyzing the information, that you provide
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-1">
                    <img src="https://static.tildacdn.net/tild3436-6363-4535-b135-633961343634/arrow2.svg" alt="">
                </div>

                <div class="col-md-3">
                    <div class="d-flex p-3 align-items-center">
                        <div>
                            <img src="https://static.tildacdn.net/tild6136-6665-4665-a335-326466633733/03.svg"
                                alt="">
                        </div>
                        <div class="text-white p-3">
                            <p>
                                Discussing the complexity of your project and how to realize your ideas
                            </p>
                        </div>
                    </div>
                </div>
                {{-- -------------------------------------------- --}}
                <div class="col-md-3">
                    <div class="d-flex p-3 align-items-center">
                        <div>
                            <img src="https://static.tildacdn.net/tild3639-6564-4264-b336-303938643966/04.svg"
                                alt="">
                        </div>
                        <div class="text-white p-3">
                            <p>
                                Uploading of the files and instructions to the cloud
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-1">
                    <img src="https://static.tildacdn.net/tild3436-6363-4535-b135-633961343634/arrow2.svg" alt="">
                </div>

                <div class="col-md-3">
                    <div class="d-flex p-3 align-items-center">
                        <div>
                            <img src="https://static.tildacdn.net/tild6231-6137-4532-b032-383233663636/05.svg"
                                alt="">
                        </div>
                        <div class="text-white p-3">
                            <p>
                                Sending an offer and discussing variants of payment
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-1">
                    <img src="https://static.tildacdn.net/tild3436-6363-4535-b135-633961343634/arrow2.svg" alt="">
                </div>

                <div class="col-md-3">
                    <div class="d-flex p-3 align-items-center">
                        <div>
                            <img src="https://static.tildacdn.net/tild6635-3131-4863-a535-636237643037/06.svg"
                                alt="">
                        </div>
                        <div class="text-white p-3">
                            <p>
                                Making the first draft version
                            </p>
                        </div>
                    </div>
                </div>

                {{-- -------------------------------------------- --}}

                <div class="col-md-3">
                    <div class="d-flex p-3 align-items-center">
                        <div>
                            <img src="https://static.tildacdn.net/tild3539-3338-4561-b735-336162366533/07.svg"
                                alt="">
                        </div>
                        <div class="text-white p-3">
                            <p>
                                Final render or changes (3 or more rounds of revisions)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-1">
                    <img src="https://static.tildacdn.net/tild3436-6363-4535-b135-633961343634/arrow2.svg" alt="">
                </div>

                <div class="col-md-3">
                    <div class="d-flex p-3 align-items-center">
                        <div>
                            <img src="https://static.tildacdn.net/tild6131-6232-4538-b863-646438373566/08.svg"
                                alt="">
                        </div>
                        <div class="text-white p-3">
                            <p>
                                Final payment for the order and providing final materials
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

    <script>
        $('.filters ul li').click(function() {
            $('.filters ul li').removeClass('active');
            $(this).addClass('active');

            var data = $(this).attr('data-filter');
            $grid.isotope({
                filter: data
            })
        });

        var $grid = $(".grid").isotope({
            itemSelector: ".all",
            percentPosition: true,
            masonry: {
                columnWidth: ".all"
            }
        })
    </script>
@endsection
