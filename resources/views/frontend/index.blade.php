@extends('layout.master')
@section('title')
Homepage || JapaDemy
@endsection
@section('content')

<main>
    <!-- Start Hero Area -->
    <section class="ep-hero section-bg-1">
        <div class="container ep-container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-6 col-12">
                    <div class="ep-hero__content">
                        <h1 class="ep-hero__title ep-split-text left">
                            Unlock Global Career Opportunities with<br>
                            <span>
                                Diaspora Experts.
                            </span>
                            
                        </h1>
                        <p class="ep-hero__text">
                            Join Japademy’s International Migration Mentorship School (IMMS) and gain the skills, mentorship, and support to succeed globally
                        </p>
                        <div class="ep-hero__btn">
                            <a href="{{ url('/login') }}" class="ep-btn">Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                            </a>
                            <a href="{{ url('/login') }}" class="ep-btn border-btn">Apply for a Scholarship<i class="fi fi-rs-arrow-small-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6 col-12 order-top">
                    <div class="ep-hero__widget">
                        <!-- Widget One  -->
                        <div class="ep-hero__widget-column">
                            <!-- Arrow Button -->
                            <div class="ep-hero__widget-arrow ep-hobble">
                                <a href="contact.html" class="ep-hover-layer-2">
                                    <i class="fi fi-ss-arrow-up-right"></i>
                                </a>
                            </div>
                            <!-- Image One -->
                            <div class="ep-hero__widget-img">
                                <img src="assets-main/images/hero/home-1/a1.jpg" alt="hero-img" />
                            </div>
                        </div>
                        <!-- Shape Image -->
                        <div class="ep-hero__shape updown-ani">
                            <img src="assets-main/images/hero/home-1/shape.png" alt="shape" />
                        </div>
                        <!-- Widget Two  -->
                        <div class="ep-hero__widget-column">
                            <!-- Image Two -->
                            <div class="ep-hero__widget-img">
                                <img src="assets-main/images/hero/home-1/img-3.jpg" alt="hero-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Start Hero Area -->
    <!-- Start Group Study Area -->
    <section
        class="ep-group-study position-relative section-gap pt-0">
        <div class="container ep-container">
            <div class="ep-group-study__inner position-relative">
                <div class="ep-group-study__shape updown-ani">
                    <img
                        src="assets-main/images/group-study/shape.svg"
                        alt="arrow-icon" />
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="ep-section-head ep-section-head--style2">
                            <h3
                                class="ep-section-head__color-title  text-danger ep9-color ep9-border-color">
                                NAVIGATE AND UPSKILL
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div
                            class="ep-section__content ep-section__content--style2">
                            <h3 class="ep-section__title ep-split-text left">
                                Learn Globally Coveted Skills and Fast-Track Your International Career.
                            </h3>
                            <p class="ep-section__text">
                                Explore our International Skill Mentorship Program (ISM) with certified online courses, live classroom training and mentorship programs that delivers in-demand skills in tech, healthcare, and other shortage occupations
                            </p><br>
                            <h5>Core Features:</h5>
                            <ul>
                                <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Globally accredited courses </li>
                                <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Self-paced + live classroom training </li>
                                <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Career-ready international certifications </li>
                            </ul>
                            <div class="ep-section__btn">
                                <a href="#" class="ep-btn">Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                                <a href="#" class="ep-btn border-btn">Apply for a Scholarship<i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div
                            class="ep-group-study__video background-image ep-hobble position-relative"
                            style="
                        background-image: url('assets-main/images/group-study/study-img11.png');
                      ">
                        </div>
                    </div>
                </div><br><br><br><br>
                <hr>
                <div class="ep-group-study__shape updown-ani">
                    <img
                        src="assets-main/images/group-study/shape.svg"
                        alt="arrow-icon" />
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div
                            class="ep-group-study__video background-image ep-hobble position-relative"
                            style="
                        background-image: url('assets-main/images/group-study/study-img1.png');
                      ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div class="ep-section__content ep-section__content--style2" style="margin-left: 20px;">
                            <h3 class="ep-section-head__color-title  text-danger ep9-color ep9-border-color">
                                ACCELERATE YOUR GROWTH
                            </h3>
                            <h3 class="ep-section__title ep-split-text left">
                                Achieve Career Excellence with Global Mentors.
                            </h3>
                            <p class="ep-section__text">
                                Connect with international mentors through our International Career Coaching Program (ICC) with live career coaching sessions, and job networking opportunities.
                            </p><br>
                            <h5>Core Features:</h5>
                            <ul>
                                <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> AI-powered mentor-matching</li>
                                <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Personalized career coaching sessions</li>
                                <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Networking with overseas-based experts </li>
                            </ul>
                            <div class="ep-section__btn">
                                <a href="#" class="ep-btn">Get Matched with a Mentor<i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                                <a href="#" class="ep-btn border-btn">Mentor a Talent<i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
                <hr>
                <div class="ep-group-study__shape updown-ani">
                    <img
                        src="assets-main/images/group-study/shape.svg"
                        alt="arrow-icon" />
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div class="ep-section__content ep-section__content--style2" style="margin-left: 20px;">
                            <h3 class="ep-section-head__color-title  text-danger ep9-color ep9-border-color">
                                MIGRATE WITH YOUR DREAM JOB
                            </h3>
                            <h3 class="ep-section__title ep-split-text left">
                                Join the Global Talent Pool and Land Your Dream Job
                                <p class="ep-section__text">
                                    Connect with international employers, recruiters, and relocation experts for seamless apprenticeship programs and job placement.
                                </p><br>
                                <h5>Core Features:</h5>
                                <ul>
                                    <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Real-life apprenticeship programs </li>
                                    <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Automated job-matching services </li>
                                    <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Audio-visual interviews with recruiters</li>
                                    <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Exclusive job opportunities from verified employers</li>
                                </ul>
                                <div class="ep-section__btn">
                                    <a href="#" class="ep-btn">Join the Talent Pool<i class="fi fi-rs-arrow-small-right"></i>
                                    </a>
                                    <a href="#" class="ep-btn border-btn">Hire Top Talent<i class="fi fi-rs-arrow-small-right"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div
                            class="ep-group-study__video background-image ep-hobble position-relative"
                            style="
                        background-image: url('assets-main/images/group-study/study-img2.png');
                      ">
                        </div>
                    </div>
                </div><br><br><br>
                <hr>
                <div class="ep-group-study__shape updown-ani">
                    <img
                        src="assets-main/images/group-study/shape.svg"
                        alt="arrow-icon" />
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div
                            class="ep-group-study__video background-image ep-hobble position-relative"
                            style="
                        background-image: url('assets-main/images/group-study/study-img3.png');
                      ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div class="ep-section__content ep-section__content--style2" style="margin-left: 20px;">
                            <h3 class="ep-section-head__color-title  text-danger ep9-color ep9-border-color">
                                INTEGRATE AND THRIVE
                            </h3>
                            <h3 class="ep-section__title ep-split-text left">
                                Adapt and Integrate Seamlessly into Your New Workplace.
                            </h3>
                            <p class="ep-section__text">
                                Prepare for life abroad with support from mentors and a community of immigrants.
                            </p><br>
                            <h5>Core Features:</h5>
                            <ul>
                                <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Free pre-departure and relocation support </li>
                                <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Inclusive adaptation programs</li>
                                <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Real-life guidance from experienced immigrants </li>
                            </ul>
                            <div class="ep-section__btn">
                                <a href="#" class="ep-btn">Connect with Mentors<i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                                <a href="#" class="ep-btn border-btn">Become a Mentor<i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><br><br><br><br>
                <hr>
                <div class="ep-group-study__shape updown-ani">
                    <img
                        src="assets-main/images/group-study/shape.svg"
                        alt="arrow-icon" />
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div class="ep-section__content ep-section__content--style2" style="margin-left: 20px;">
                            <h3 class="ep-section-head__color-title  text-danger ep9-color ep9-border-color">
                                COLLABORATE AND IMPACT
                            </h3>
                            <h3 class="ep-section__title ep-split-text left">
                                Drive Impact Through Circular Migration.
                                <p class="ep-section__text">
                                    Give back to your home country while supporting newly arriving talents.
                                </p><br>
                                <h5>Core Features:</h5>
                                <ul>
                                    <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Leverage lived experience</li>
                                    <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Drive support for new immigrants</li>
                                    <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Share your inspiring story</li>
                                    <li style="margin-bottom: 16px;"><i class="fi fi-sr-checkbox"></i> Collaborate with other diaspora experts</li>
                                </ul>
                                <div class="ep-section__btn">
                                    <a href="#" class="ep-btn">Get Involved<i class="fi fi-rs-arrow-small-right"></i>
                                    </a>
                                    <a href="#" class="ep-btn border-btn">Share Your Story<i class="fi fi-rs-arrow-small-right"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div
                            class="ep-group-study__video background-image ep-hobble position-relative"
                            style="
                        background-image: url('assets-main/images/group-study/study-img4.png');
                      ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Group Study Area -->
    <!-- Start Testimonial Area -->
    <section class="ep-testimonial" id="testimonial">
        <div class="container ep-container">
            <div class="row">
                <div class="col-12">
                    <div class="ep-section-head">
                        <div class="ep-section-head__info" align="center">
                            <span class="ep-section-head__sm-title ep3-color">Feedback from students and professionals</span>
                            <h3 class="ep-section-head__big-title ep-split-text left">
                                See What Our <span class="text-white">Learners</span> <br />
                                Are Saying
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel ep-testimonial__slider">
                        <!-- Single Testimonial -->
                        <div class="ep-testimonial__item position-relative">
                            <div class="ep-testimonial__rattings">
                                <ul>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star off-color"></i>
                                    </li>
                                </ul>
                            </div>
                            <p class="ep-testimonial__desc">
                                I was hesitant at first, but this platform exceeded my expectations. The courses are practical, and I’ve already started applying what I learned in my job. It’s a fantastic resource for anyone serious about learning.
                            </p>
                            <div class="ep-testimonial__author">
                                <div class="ep-testimonial__author-img">
                                    <img src="assets-main/images/testimonial/testimonial-1/1.jpg" alt="author-img" />
                                </div>
                                <div class="ep-testimonial__author-info">
                                    <h5>Kwame Mensah</h5>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="ep-testimonial__shape">
                                <img src="assets-main/images/testimonial/testimonial-1/dot-shape.svg" alt="dot-pattern" />
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="ep-testimonial__item position-relative">
                            <div class="ep-testimonial__rattings">
                                <ul>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star off-color"></i>
                                    </li>
                                </ul>
                            </div>
                            <p class="ep-testimonial__desc">
                                This platform has completely changed the way I learn. The courses are so easy to follow, and I love being able to track my progress. I feel more confident in my skills, and I’m excited to keep learning
                            </p>
                            <div class="ep-testimonial__author">
                                <div class="ep-testimonial__author-img">
                                    <img src="assets-main/images/testimonial/testimonial-1/1.jpg" alt="author-img" />
                                </div>
                                <div class="ep-testimonial__author-info">
                                    <h5>Adebayo Okechukwu</h5>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="ep-testimonial__shape">
                                <img src="assets-main/images/testimonial/testimonial-1/dot-shape.svg" alt="dot-pattern" />
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="ep-testimonial__item position-relative">
                            <div class="ep-testimonial__rattings">
                                <ul>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star off-color"></i>
                                    </li>
                                </ul>
                            </div>
                            <p class="ep-testimonial__desc">
                                As a busy professional, I needed something flexible, and this LMS has been perfect. The lessons are concise yet comprehensive, and the support from the instructors is amazing. I recommend it to anyone looking to upgrade their skills!
                            </p>
                            <div class="ep-testimonial__author">
                                <div class="ep-testimonial__author-img">
                                    <img src="assets-main/images/testimonial/testimonial-1/1.jpg" alt="author-img" />
                                </div>
                                <div class="ep-testimonial__author-info">
                                    <h5>Amahle Ndlovu</h5>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="ep-testimonial__shape">
                                <img src="assets-main/images/testimonial/testimonial-1/dot-shape.svg" alt="dot-pattern" />
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="ep-testimonial__item position-relative">
                            <div class="ep-testimonial__rattings">
                                <ul>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star"></i>
                                    </li>
                                    <li>
                                        <i class="icofont-star off-color"></i>
                                    </li>
                                </ul>
                            </div>
                            <p class="ep-testimonial__desc">
                                I’ve tried other platforms, but this one feels different. It’s engaging, easy to use, and the affiliate program has allowed me to share courses with friends and earn at the same time. I love it here!
                            </p>
                            <div class="ep-testimonial__author">
                                <div class="ep-testimonial__author-img">
                                    <img src="assets-main/images/testimonial/testimonial-1/1.jpg" alt="author-img" />
                                </div>
                                <div class="ep-testimonial__author-info">
                                    <h5>Zainab Oluwaseun</h5>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="ep-testimonial__shape">
                                <img src="assets-main/images/testimonial/testimonial-1/dot-shape.svg" alt="dot-pattern" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->
    <!-- Start Event Area -->
    <section class="ep-blog section-gap position-relative">
        <div class="ep-blog__shape-1 rotate-ani">
            <img
                src="assets-main/images/blog/blog-1/shape-1.svg"
                alt="shape-1" />
        </div>
        <div class="ep-blog__shape-2 updown-ani">
            <img
                src="assets-main/images/blog/blog-1/shape-2.svg"
                alt="shape-2" />
        </div>
        <div class="container ep-container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-6 col-md-8 col-12">
                    <div class="ep-section-head text-center">
                        <span class="ep-section-head__sm-title ep2-color">News and Updates</span>
                        <h3 class="text-darkleft">
                            Insights and Updates on <span style="background-color:purple;color:white;padding:5px 10px;border-radius:10px">Global</span> <br />Careers
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogpost as $blog)
                <!-- Single Event Card -->
                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                    <div
                        class="ep-blog__card wow fadeInUp"
                        data-wow-delay=".3s"
                        data-wow-duration="1s">
                        <a href="{{ route('blogdetails', $blog->slug) }}" class="ep-blog__img">
                            <img src="{{ $blog->blog_image }}" alt="{{ $blog->title }}" />
                        </a>
                        <div class="ep-blog__info">
                            <div class="ep-blog__date">
                                {{ $blog->created_at->format('d M Y ') }}
                            </div>
                            <div class="ep-blog__location">
                                <i class="fi fi-rs-marker"></i>
                                <span>{{ $blog->category->name }}</span>
                            </div>
                            <div class="ep-blog__content">
                                <a href="{{ route('blogdetails', $blog->slug) }}" class="ep-blog__title">
                                    <h5>{{ $blog->title }}</h5>
                                </a>
                                <p class="ep-blog__text">
                                    {{ $blog->short_desc }}
                                </p>
                                <div class="ep-blog__btn">
                                    <a href="{{ route('blogdetails', $blog->slug) }}">Read More
                                        <i class="fi fi-rs-arrow-small-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><br><br>
            <div align="center">
                <a href="{{ url('/news-and-updates') }}" class="ep-btn">Read our Blog<i class="fi fi-rs-arrow-small-right"></i></a>
            </div>
        </div>
    </section>
    <!-- End Event Area -->
</main>

@endsection