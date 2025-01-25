@extends('layout.app-user')
@section('title')
Courses || JapaDemy
@endsection
@section('content')

<div class="dashboard-body">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li><a href="{{ url('/admin/dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
            <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
            <li><span class="text-main-600 fw-normal text-15">Courses</span></li>
        </ul>
    </div>
    <!-- Breadcrumb End -->

    <!-- Course Tab Start -->
    <div class="card mt-24">
        <div class="card-body">
            <div class="row gy-4">
                <div class="col-md-8">
                    <!-- Course Card Start -->
                    <div class="card">
                        <div class="card-body p-lg-20 p-sm-3">
                            <div class="flex-between flex-wrap gap-12 mb-20">
                                <div>
                                    <h3 class="mb-4">The Complete Web Development Course</h3>
                                    <p class="text-gray-600 text-15">Prof. Devonne Wallbridge</p>
                                </div>

                                <div class="flex-align flex-wrap gap-24">
                                    <span class="py-6 px-16 bg-main-50 text-main-600 rounded-pill text-15">Web Development</span>
                                    <div class=" share-social position-relative">
                                        <button type="button" class="share-social__button text-gray-200 text-26 d-flex hover-text-main-600"><i class="ph ph-share-network"></i></button>
                                        <div class="share-social__icons bg-white box-shadow-2xl p-16 border border-gray-100 rounded-8 position-absolute inset-block-start-100 inset-inline-end-0">
                                            <ul class="flex-align gap-8">
                                                <li>
                                                    <a href="https://www.facebook.com/" class="flex-center w-36 h-36 border border-main-600 text-white rounded-circle text-xl bg-main-600 hover-bg-main-800 hover-border-main-800"><i class="ph ph-facebook-logo"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.google.com/" class="flex-center w-36 h-36 border border-main-600 text-white rounded-circle text-xl bg-main-600 hover-bg-main-800 hover-border-main-800"> <i class="ph ph-twitter-logo"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.twitter.com/" class="flex-center w-36 h-36 border border-main-600 text-white rounded-circle text-xl bg-main-600 hover-bg-main-800 hover-border-main-800"><i class="ph ph-linkedin-logo"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/" class="flex-center w-36 h-36 border border-main-600 text-white rounded-circle text-xl bg-main-600 hover-bg-main-800 hover-border-main-800"><i class="ph ph-instagram-logo"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="button" class="bookmark-icon text-gray-200 text-26 d-flex hover-text-main-600">
                                        <i class="ph ph-bookmarks"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="rounded-16 overflow-hidden">
                                <video id="player" class="player" playsinline controls data-poster="assets/images/thumbs/course-details.png">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/webm">
                                </video>
                            </div>

                            <div class="mt-24">
                                <div class="mb-24 pb-24 border-bottom border-gray-100">
                                    <h5 class="mb-12 fw-bold">About this course</h5>
                                    <p class="text-gray-300 text-15">Learn web design in 1 hour with 25+ simple-to-use rules and guidelines — tons of amazing web design resources included!</p>
                                </div>
                                <div class="mb-24 pb-24 border-bottom border-gray-100">
                                    <h5 class="mb-12 fw-bold">Description</h5>
                                    <p class="text-gray-300 text-15 mb-8">Lorem ipsum dolor sit amet consectetur. Molestie pharetra gravida morbi eget. Diam quam non pretium malesuada. Elit porta aliquam cursus id. Fermentum adipiscing et nisl dignissim lectus ornare amet metus. Eget leo aliquet diam dictum et sit enim. Diam enim in eu rutrum est. Eu tristique euismod malesuada velit amet tellus. Ornare viverra dignissim odio magna dui fermentum non scelerisque scelerisque. Non pellentesque commodo ut sagittis felis. </p>
                                    <p class="text-gray-300 text-15">Aliquam pharetra a urna varius proin quis. Diam amet blandit ullamcorper diam lectus at eget. Erat molestie purus et vitae lectus aenean in cursus. Arcu gravida tellus purus ultricies tristique. Ac turpis aliquam consectetur sit cras.</p>
                                </div>
                                <div class="mb-24 pb-24 border-bottom border-gray-100">
                                    <h5 class="mb-16 fw-bold">This Course Includes</h5>
                                    <div class="row g-20">
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                                <li class="flex-align gap-6 text-gray-300 text-15 mb-12">
                                                    <span class="flex-shrink-0 text-22 d-flex text-main-600"><i class="ph ph-checks"></i> </span>
                                                    1.3 Hours on-demand video
                                                </li>
                                                <li class="flex-align gap-6 text-gray-300 text-15 mb-12">
                                                    <span class="flex-shrink-0 text-22 d-flex text-main-600"><i class="ph ph-checks"></i> </span>
                                                    7 Design Exercise
                                                </li>
                                                <li class="flex-align gap-6 text-gray-300 text-15 mb-12">
                                                    <span class="flex-shrink-0 text-22 d-flex text-main-600"><i class="ph ph-checks"></i> </span>
                                                    vide48 Articleso
                                                </li>
                                                <li class="flex-align gap-6 text-gray-300 text-15 mb-12">
                                                    <span class="flex-shrink-0 text-22 d-flex text-main-600"><i class="ph ph-checks"></i> </span>
                                                    120 Download Resources
                                                </li>
                                                <li class="flex-align gap-6 text-gray-300 text-15 mb-12">
                                                    <span class="flex-shrink-0 text-22 d-flex text-main-600"><i class="ph ph-checks"></i> </span>
                                                    Access on Mobile
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                                <li class="flex-align gap-6 text-gray-300 text-15 mb-12">
                                                    <span class="flex-shrink-0 text-22 d-flex text-main-600"><i class="ph ph-checks"></i> </span>
                                                    35 Quizes
                                                </li>
                                                <li class="flex-align gap-6 text-gray-300 text-15 mb-12">
                                                    <span class="flex-shrink-0 text-22 d-flex text-main-600"><i class="ph ph-checks"></i> </span>
                                                    Lectures: 19
                                                </li>
                                                <li class="flex-align gap-6 text-gray-300 text-15 mb-12">
                                                    <span class="flex-shrink-0 text-22 d-flex text-main-600"><i class="ph ph-checks"></i> </span>
                                                    Captions: Yes
                                                </li>
                                                <li class="flex-align gap-6 text-gray-300 text-15 mb-12">
                                                    <span class="flex-shrink-0 text-22 d-flex text-main-600"><i class="ph ph-checks"></i> </span>
                                                    Video: 1.5 total hours
                                                </li>
                                                <li class="flex-align gap-6 text-gray-300 text-15 mb-12">
                                                    <span class="flex-shrink-0 text-22 d-flex text-main-600"><i class="ph ph-checks"></i> </span>
                                                    Language English
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <h5 class="mb-12 fw-bold">Instructor</h5>
                                    <div class="flex-align gap-8">
                                        <img src="assets/images/thumbs/mentor-img1.png" alt="" class="w-44 h-44 rounded-circle object-fit-cover flex-shrink-0">
                                        <div class="d-flex flex-column">
                                            <h6 class="text-15 fw-bold mb-0">Brooklyn Simmons</h6>
                                            <span class="text-13 text-gray-300">Web Design Instructor</span>
                                            <div class="flex-align gap-4 mt-4">
                                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-13 fw-bold text-gray-600">4.9</span>
                                                <span class="text-13 fw-bold text-gray-300">(12k)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course Card End -->
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="course-item">
                                <button type="button" class="course-item__button active flex-align gap-4 w-100 p-16 border-bottom border-gray-100">
                                    <span class="d-block text-start">
                                        <span class="d-block h5 mb-0 text-line-1">The Courses Program</span>
                                        <span class="d-block text-15 text-gray-300">2 / 5 | 4.4 min</span>
                                    </span>
                                    <span class="course-item__arrow ms-auto text-20 text-gray-500"><i class="ph ph-arrow-right"></i></span>
                                </button>
                                <div class="course-item-dropdown active border-bottom border-gray-100">
                                    <ul class="course-list p-16 pb-0">
                                        <li class="course-list__item flex-align gap-8 mb-16 active">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    1. Welcome to this course
                                                    <span class="text-gray-300 fw-normal d-block">2.4 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16 active">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    2. Watch before you start
                                                    <span class="text-gray-300 fw-normal d-block">4.8 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    3. Basic development theory
                                                    <span class="text-gray-300 fw-normal d-block">5.9 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    4. Basic front-end fundamentals
                                                    <span class="text-gray-300 fw-normal d-block">3.6 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    5. What is front-end development?
                                                    <span class="text-gray-300 fw-normal d-block">10.6 min</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="course-item">
                                <button type="button" class="course-item__button flex-align gap-4 w-100 p-16 border-bottom border-gray-100">
                                    <span class="d-block text-start">
                                        <span class="d-block h5 mb-0 text-line-1">Web Design for Web Developers</span>
                                        <span class="d-block text-15 text-gray-300">0 / 4 | 4.4 min</span>
                                    </span>
                                    <span class="course-item__arrow ms-auto text-20 text-gray-500"><i class="ph ph-arrow-right"></i></span>
                                </button>
                                <div class="course-item-dropdown border-bottom border-gray-100">
                                    <ul class="course-list p-16 pb-0">
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    1. Welcome to this course
                                                    <span class="text-gray-300 fw-normal d-block">2.4 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    2. Watch before you start
                                                    <span class="text-gray-300 fw-normal d-block">4.8 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    3. Basic development theory
                                                    <span class="text-gray-300 fw-normal d-block">5.9 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    4. Basic front-end fundamentals
                                                    <span class="text-gray-300 fw-normal d-block">3.6 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    5. What is front-end development?
                                                    <span class="text-gray-300 fw-normal d-block">10.6 min</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="course-item">
                                <button type="button" class="course-item__button flex-align gap-4 w-100 p-16 border-bottom border-gray-100">
                                    <span class="d-block text-start">
                                        <span class="d-block h5 mb-0 text-line-1">Build Beautiful Websites!</span>
                                        <span class="d-block text-15 text-gray-300">0 / 6 | 4.4 min</span>
                                    </span>
                                    <span class="course-item__arrow ms-auto text-20 text-gray-500"><i class="ph ph-arrow-right"></i></span>
                                </button>
                                <div class="course-item-dropdown border-bottom border-gray-100">
                                    <ul class="course-list p-16 pb-0">
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    1. Welcome to this course
                                                    <span class="text-gray-300 fw-normal d-block">2.4 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    2. Watch before you start
                                                    <span class="text-gray-300 fw-normal d-block">4.8 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    3. Basic development theory
                                                    <span class="text-gray-300 fw-normal d-block">5.9 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    4. Basic front-end fundamentals
                                                    <span class="text-gray-300 fw-normal d-block">3.6 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    5. What is front-end development?
                                                    <span class="text-gray-300 fw-normal d-block">10.6 min</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="course-item">
                                <button type="button" class="course-item__button flex-align gap-4 w-100 p-16">
                                    <span class="d-block text-start">
                                        <span class="d-block h5 mb-0 text-line-1">Final Project</span>
                                        <span class="d-block text-15 text-gray-300">0 / 3 | 4.4 min</span>
                                    </span>
                                    <span class="course-item__arrow ms-auto text-20 text-gray-500"><i class="ph ph-arrow-right"></i></span>
                                </button>
                                <div class="course-item-dropdown">
                                    <ul class="course-list p-16 pb-0">
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    1. Welcome to this course
                                                    <span class="text-gray-300 fw-normal d-block">2.4 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    2. Watch before you start
                                                    <span class="text-gray-300 fw-normal d-block">4.8 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    3. Basic development theory
                                                    <span class="text-gray-300 fw-normal d-block">5.9 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    4. Basic front-end fundamentals
                                                    <span class="text-gray-300 fw-normal d-block">3.6 min</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="course-list__item flex-align gap-8 mb-16">
                                            <span class="circle flex-shrink-0 text-32 d-flex text-gray-100"><i class="ph ph-circle"></i></span>
                                            <div class="w-100">
                                                <a href="#" class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                                    5. What is front-end development?
                                                    <span class="text-gray-300 fw-normal d-block">10.6 min</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-24">
                        <div class="card-body">
                            <h4 class="mb-20">Featured courses</h4>
                            <div class="rounded-16 overflow-hidden">
                                <video id="featuredPlayer" class="player" playsinline controls data-poster="assets/images/thumbs/featured-course.png">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/webm">
                                </video>
                            </div>
                            <h5 class="mb-16 mt-20">Development for Beginners</h5>
                            <p class="text-gray-300">The Fender Acoustic Guitar is the best choice for both beginners and professionals offering a great sound.</p>
                            <a href="course-details.html" class="btn btn-main rounded-pill py-11 w-100  mt-16">Upgrade Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Tab End -->

</div>

@endsection