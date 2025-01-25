@extends('layout.master')
@section('title')
Insights and Updates || JapaDemy
@endsection
@section('content')

<main>
    <!-- Start Breadcrumbs Area -->
    <div class="ep-breadcrumbs breadcrumbs-bg background-image"
        style="background-image: url('assets/images/breadcrumbs-bg.png')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="ep-breadcrumbs__content">
                        <h3 class="ep-breadcrumbs__title">Insights and Updates</h3>
                        <ul class="ep-breadcrumbs__menu">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <i class="fi-bs-angle-right"></i>
                            </li>
                            <li class="active">
                                <a href="#">Insights and Updates</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs Area -->
    <!-- Start Event Area -->
    <section class="ep-blog section-gap position-relative pd-top-90">
        <div class="container ep-container">
            <div class="row">
                @foreach($blogpost as $blog)
                <!-- Single Event Card -->
                <div class="col-lg-6 col-xl-6 col-md-6 col-12">
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
            </div>
        </div>
    </section>
    <!-- End Event Area -->
</main>

@endsection