@extends('layouts.frontend')

@php
$locale = app()->getLocale();
$dir = $locale === 'ar' ? 'rtl' : 'ltr';
$textAlign = $locale === 'ar' ? 'text-end' : 'text-start';

$title = $locale === 'ar' ? de_ar($blog->title) : de_en($blog->title);
$description = $locale === 'ar' ? de_ar($blog->descraption) : de_en($blog->descraption);
@endphp

@section('page_title', strip_tags($title))

@section('content')
<div class="container-fluid px-0" dir="{{ $dir }}">
    <!-- Hero Header Section -->
    <div class="blog-header py-5 py-md-7 mb-5 text-center position-relative">
        <div class="header-overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="container position-relative z-1">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="main-title">
                        {{-- <p class="display-5 fw-bold text-white mb-3 animate__animated animate__fadeInDown">
                            {{ __('dash/blog.latest_blogs') }}
                        </p> --}}
                        <h5 class="fw-medium  display-6 text-white-75 fw-bold mt-5 mb-3 animate__animated animate__fadeIn animate__delay-1s">
                            {{ strip_tags($title) }}
                        </h5>
                        <div class="header-divider mx-auto animate__animated animate__fadeIn animate__delay-1s"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Content Section -->
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Featured Image -->
                <div class="blog-featured-img mb-5 text-center">
                    <img src="{{ asset('storage/images/' . $blog->img) }}" alt="{{ strip_tags($title) }}"
                        class="img-fluid rounded-4 shadow-lg w-100" style="max-height: 500px; object-fit: cover;">
                </div>

                <!-- Blog Title -->
                {{-- <h1 class="display-4 fw-bold text-white text-center mb-5" id="blog_title">
                    {!! $title !!}
                </h1> --}}

                <!-- Blog Content -->
                <div class="blog-content {{ $textAlign }} lh-lg fs-5 text-white-75">
                    {!! $description !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    /* Base Styles */
    body {
        background-color: #121212;
        color: #ffffff;
        min-height: 100vh;
    }

    /* Header Styles */
    .blog-header {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        overflow: hidden;
        padding-top: 6rem;
        padding-bottom: 6rem;
    }

    .header-overlay {
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.03)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
        background-size: cover;
        opacity: 0.8;
    }

    .main-title p {
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        letter-spacing: 0.5px;
    }

    .header-divider {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, rgba(255,255,255,0) 0%, #4facfe 50%, rgba(255,255,255,0) 100%);
        margin-top: 2rem;
    }

    /* Content Styles */
    .blog-content {
        line-height: 1.8;
    }

    .blog-content p {
        margin-bottom: 1.8rem;
    }

    .blog-content img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 1.5rem 0;
    }

    .blog-featured-img {
        transition: transform 0.3s ease;
    }

    .blog-featured-img:hover {
        transform: translateY(-5px);
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .blog-header {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #blog_title {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 768px) {
        .blog-header {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .main-title p {
            font-size: 2.2rem;
        }

        #blog_title {
            font-size: 2rem;
        }

        .blog-content {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 576px) {
        .blog-header {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .main-title p {
            font-size: 1.8rem;
        }

        #blog_title {
            font-size: 1.6rem;
        }
    }

    /* RTL Specific Styles */
    [dir="rtl"] .blog-content {
        line-height: 2.2;
    }

    [dir="rtl"] .header-divider {
        background: linear-gradient(90deg, rgba(255,255,255,0) 0%, #4facfe 50%, rgba(255,255,255,0) 100%);
    }
</style>
@endsection

@section('js')
<!-- Animate.css for header animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<script>
    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endsection
