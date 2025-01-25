@extends('layout.master1')
@section('title')
{{ $blogdetails->title }}
@endsection
@section('content')

<main>
    <!-- Start Breadcrumbs Area -->
    <div class="ep-breadcrumbs breadcrumbs-bg background-image"
        style="background-image: url('../assets-main/images/breadcrumbs-bg.png')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="ep-breadcrumbs__content">
                        <h3 class="ep-breadcrumbs__title">{{ $blogdetails->title }}</h3>
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
    <section class="ep-blog__details section-gap position-relative">
        <div class="container ep-container">
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-12">
                    <div class="ep-blog__details-main">
                        <div class="ep-blog__details-top">
                            <span class="ep-blog__details-category">{{ $blogdetails->category->name }}</span>
                            <h2 class="ep-blog__details-title">
                            {{ $blogdetails->title }}
                            </h2>
                            <div class="ep-blog__details-cover">
                                <div class="ep-blog__details-cover-img">
                                    <img src="../{{ $blogdetails->blog_image }}" alt="blog-img-1" />
                                </div>
                                <div class="ep-blog__details-date">
                                {{ $blogdetails->created_at->format('d M Y ') }}
                                </div>
                            </div>
                            <p class="ep-blog__details-text" style="text-align: justify;">
                            {{ $blogdetails->short_desc }}
                            </p>
                            <br />
                            <p class="ep-blog__details-text" style="text-align: justify;">
                            {!! $blogdetails->long_desc !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Event Area -->
</main>

@endsection