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
                            Unlock Your
                            <span>
                                <a class="ep-hero__hover-images position-relative" href="about.html">
                                    <img class="hover-img-1 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s"
                                        src="assets-main/images/hero/home-1/text-arrow.png" alt="arrow" />
                                    <img class="hover-img-2" data-wow-delay=".3s" data-wow-duration="1s"
                                        src="assets-main/images/hero/home-1/text-arrow.png" alt="arrow" />
                                </a>
                                Learning
                            </span>
                            Opportunities
                        </h1>
                        <p class="ep-hero__text">
                            Transform your knowledge with interactive courses, trackable progress, and a supportive
                            community—all in one place.
                        </p>
                        <div class="ep-hero__btn">
                            <a href="about.html" class="ep-btn">Explore Now <i class="fi fi-rs-arrow-small-right"></i>
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
    <!-- Start About Area -->
    <section class="ep-about ep-section section-gap position-relative" id="about">
        <div class="ep-about__shape updown-ani">
            <img src="assets-main/images/about/about-1/circle-shape.svg" alt="circle-shape" />
        </div>
        <div class="container ep-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="ep-section__img position-relative">
                        <div class="ep-section__img-shape rotate-ani">
                            <img src="assets-main/images/about/about-1/pattern-shape.png" alt="pattern-shape" />
                        </div>
                        <div class="ep-section__img-main">
                            <img src="assets-main/images/about/about-1/about-img.jpg" alt="about-img" />
                        </div>
                        <div class="overview-card updown-ani">
                            <div class="overview-card__icon">
                                <img src="assets-main/images/about/about-1/user.svg" alt="user-icon" />
                            </div>
                            <div class="overview-card__info">
                                <h4><span>1</span>k+</h4>
                                <p>Registered Members</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="ep-section__content">
                        <div class="ep-section-head">
                            <span class="ep-section-head__sm-title ep1-color">Know About Us</span>
                            <h3 class="ep-section-head__big-title ep-split-text left">
                                Unlocking doors to <span class="text-white">endless</span> <br />
                                opportunities
                            </h3>
                            <p class="ep-section-head__text">
                                We are on mission to leverage artificial intelligence and tech to bridge skill gaps, and up-skill
                                and re-skill 10 million talents in the healthcare and tech industries.
                                Our digital platform connects diaspora experts with home-grown talents to close skill gaps,
                                strengthen local workforce, prepare unemployed talents and skilled
                                workers to find decent jobs, fill in the skill gaps for countries with chronic talent shortages,
                                and foster sustainable development in countries of origin and destination.<br><br>
                                JapaDemy is the all-in-one digital learning platform and workforce development hub bridging skill
                                gaps and connecting home-grown talents from low- and middle-income countries with global career
                                opportunities.
                            </p>
                        </div>
                        <div class="ep-section__btn">
                            <a href="about.html" class="ep-btn border-btn">Read More <i class="fi fi-rs-arrow-small-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Start About Area -->

    <!-- Start Course Area -->
    <section class="ep-course section-gap section-bg-1 position-relative" id="courses">
        <div class="ep-course__shapes">
            <img class="shape-1 rotate-ani" src="assets-main/images/course/course-1/shape-1.svg" alt="shape-img-1" />
            <img class="shape-2 updown-ani" src="assets-main/images/course/course-1/shape-2.svg" alt="shape-img-2" />
            <img class="shape-3 updown-ani" src="assets-main/images/course/course-1/shape-3.svg" alt="shape-img-3" />
        </div>
        <div class="container ep-container">
            <div class="row">
                <div class="col-12">
                    <div class="ep-section-head">
                        <div class="ep-section-head__info" align="center">
                            <span class="ep-section-head__sm-title ep3-color">Popular Courses</span>
                            <h3 class="ep-section-head__big-title ep-split-text left">
                                Access Our <span class="text-white">Learning</span> <br />
                                Resources
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Course Card -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <div class="ep-course__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <a href="#" class="ep-course__img">
                            <img src="assets-main/images/course/course-1/1.png" alt="course-img" />
                        </a>
                        <div class="ep-course__body">
                            <div class="ep-course__lesson">
                                <div class="ep-course__student">
                                    <i class="fi-rr-clock"></i>
                                    <p>2-3 hrs</p>
                                </div>
                                <div class="ep-course__teacher">
                                    <p>Technology</p>
                                </div>
                            </div>
                            <a href="#" class="ep-course__title">
                                <h5>World History: Ancient to Modern Times</h5>
                            </a>
                            <div class="ep-course__bottom">
                                <a href="#" class="ep-course__btn">Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                                <span class="ep-course__price">$50.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Course Card -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <div class="ep-course__card wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                        <a href="#" class="ep-course__img">
                            <img src="assets-main/images/course/course-1/2.png" alt="course-img" />
                        </a>
                        <div class="ep-course__body">
                            <div class="ep-course__lesson">
                                <div class="ep-course__student">
                                    <i class="fi-rr-clock"></i>
                                    <p>4-5 hrs</p>
                                </div>
                                <div class="ep-course__teacher">
                                    <p>Caregiving</p>
                                </div>
                            </div>
                            <a href="#" class="ep-course__title">
                                <h5>Environmental Science and Sustainability</h5>
                            </a>
                            <div class="ep-course__bottom">
                                <a href="#" class="ep-course__btn">Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                                <span class="ep-course__price">$50.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Course Card -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <div class="ep-course__card wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <a href="#" class="ep-course__img">
                            <img src="assets-main/images/course/course-1/3.png" alt="course-img" />
                        </a>
                        <div class="ep-course__body">
                            <div class="ep-course__lesson">
                                <div class="ep-course__student">
                                    <i class="fi-rr-clock"></i>
                                    <p>3-4 hrs</p>
                                </div>
                                <div class="ep-course__teacher">
                                    <p>Healthcare</p>
                                </div>
                            </div>
                            <a href="#" class="ep-course__title">
                                <h5>Modern Physics: Concepts </h5>
                            </a>
                            <div class="ep-course__bottom">
                                <a href="#" class="ep-course__btn">Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                                <span class="ep-course__price">$50.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Course Card -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <div class="ep-course__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <a href="#" class="ep-course__img">
                            <img src="assets-main/images/course/course-1/4.png" alt="course-img" />
                        </a>
                        <div class="ep-course__body">
                            <div class="ep-course__lesson">
                                <div class="ep-course__student">
                                    <i class="fi-rr-clock"></i>
                                    <p>2-3 hrs</p>
                                </div>
                                <div class="ep-course__teacher">
                                    <p>Technology</p>
                                </div>
                            </div>
                            <a href="#" class="ep-course__title">
                                <h5>Early Childhood Education Practices</h5>
                            </a>
                            <div class="ep-course__bottom">
                                <a href="#" class="ep-course__btn">Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                                <span class="ep-course__price">$50.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Course Area -->
    <!-- Start Testimonial Area -->
    <section class="ep-testimonial section-gap" id="testimonial">
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
    <!-- Start Faq Area -->
    <section class="ep-faq position-relative" id="faq">
        <div class="ep-faq__pattern-2 updown-ani">
            <img src="assets-main/images/faq/faq-1/pattern-2.svg" alt="pattern-2" />
        </div>
        <div class="container ep-container">
            <div class="ep-faq__inner position-relative">
                <div class="ep-faq__pattern-1 rotate-ani">
                    <img src="assets-main/images/faq/faq-1/pattern-1.svg" alt="pattern-1" />
                </div>
                <div class="row g-0 align-items-center">
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="ep-faq__img">
                            <img src="assets-main/images/faq/faq-1/faq1.png" class="img-thumbnail" alt="faq-img" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="ep-faq__content">
                            <div class="ep-section-head">
                                <span class="ep-section-head__sm-title ep1-color">Know About Us</span>
                                <h3 class="ep-section-head__big-title ep-split-text left">
                                    Frequently <span class="text-white">Asked</span> <br />
                                    Questions and Answers
                                </h3>
                            </div>
                            <div class="ep-faq__accordion faq-inner accordion" id="accordionExample">
                                <!-- Single Faq -->
                                <div class="ep-faq__accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01</span>How do I sign up for courses?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="ep-faq__accordion-body">
                                            <p class="ep-faq__accordion-text">
                                                Signing up is easy! Simply create an account, browse our course catalog, and select the course you're interested in. Once you complete the payment (if required), you’ll get immediate access to start learning.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Faq -->
                                <div class="ep-faq__accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02</span>Can I track my progress through a course?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="ep-faq__accordion-body">
                                            <p class="ep-faq__accordion-text">
                                                Yes! Our LMS includes progress tracking, so you can easily see how much you’ve completed and pick up right where you left off each time you log in.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Faq -->
                                <div class="ep-faq__accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03</span>Are there any certificates provided?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="ep-faq__accordion-body">
                                            <p class="ep-faq__accordion-text">
                                                Absolutely. Most of our courses offer a certificate of completion, which you can download or share with potential employers and colleagues to showcase your achievement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faq Area -->
</main>

@endsection