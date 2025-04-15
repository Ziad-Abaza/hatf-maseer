@extends('layouts.frontend')

@section('content')
    @php
        $locale = app()->getLocale();
        $dir = $locale === 'ar' ? 'rtl' : 'ltr';
        $textAlign = $locale === 'ar' ? 'text-end' : 'text-start';
    @endphp

    <div class="container-fluid px-0" dir="{{ $dir }}">
        <!-- Hero Header Section -->
        <div class="blog-header py-5 py-md-7 mb-5 text-center position-relative" style="background: #f8f9fa; margin-top: 40px;">
            <div class="header-overlay position-absolute top-0 start-0 w-100 h-100"></div>
            <div class="container position-relative z-1">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="main-title">
                            <p class="display-5 fw-bold text-dark mb-3 animate__animated animate__fadeInDown">
                                {{ __('dash/blog.latest_blogs') }}
                            </p>
                            <div class="header-divider mx-auto animate__animated animate__fadeIn animate__delay-1s" style="background: linear-gradient(90deg, rgba(0,0,0,0) 0%, #495057 50%, rgba(0,0,0,0) 100%);"></div>
                            <h5 class="fw-medium text-dark mt-4 animate__animated animate__fadeIn animate__delay-1s">
                                {{ __('dash/blog.stay_updated') }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Cards Section -->
        <div class="container pb-5">
            <div class="row g-4 gx-4 gy-5 justify-content-center">
                @foreach ($blogs as $blog)
                    @php
                        $title = $locale === 'ar' ? de_ar($blog->title) : de_en($blog->title);
                        $slug = $locale === 'ar'
                            ? preg_replace('/[^\p{Arabic}\d]+/u', '-', trim($blog->title_ar))
                            : preg_replace('/[^\w\d]+/u', '-', trim($blog->title_en));
                    @endphp

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="blog-card-wrapper h-100">
                            <div class="blog-card card border-0 h-100 overflow-hidden position-relative" style="background: #ffffff; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                <a href="{{ route('blogns.show', [$blog->id, $slug]) }}" class="blog-image-link">
                                    <img src="{{ asset('storage/images/' . $blog->img) }}" 
                                        class="card-img-top img-fluid h-100"
                                        alt="{{ strip_tags($title) }}"
                                        style="object-fit: cover; min-height: 250px;">
                                    <div class="image-overlay" style="background: linear-gradient(to top, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.1) 50%, rgba(0,0,0,0) 100%);"></div>
                                </a>
                                <div class="card-body position-relative z-1" style="background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 100%);">
                                    <a href="{{ route('blogns.show', [$blog->id, $slug]) }}"
                                        class="text-decoration-none">
                                        <h5 class="card-title fw-bold mb-3 text-dark">{!! $title !!}</h5>
                                    </a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted small">
                                            <i class="far fa-calendar-alt me-2"></i>
                                            {{ $blog->created_at->format('M d, Y') }}
                                        </span>
                                        <a href="{{ route('blogns.show', [$blog->id, $slug]) }}" 
                                           class="btn btn-sm btn-outline-dark">
                                            {{ __('Read More') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-5 pt-3">
                {{ $blogs->onEachSide(1)->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection

@section('css')
<style>
    /* Base Styles */
    body {
        background-color: #ffffff;
        color: #212529;
        min-height: 100vh;
    }

    /* Header Styles */
    .blog-header {
        overflow: hidden;
        padding-top: 6rem;
        padding-bottom: 6rem;
    }

    .header-overlay {
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(0,0,0,0.03)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
        background-size: cover;
        opacity: 0.8;
    }

    .main-title p {
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        letter-spacing: 0.5px;
    }

    /* Blog Card Styles */
    .blog-card-wrapper {
        transition: transform 0.3s ease;
    }

    .blog-card-wrapper:hover {
        transform: translateY(-8px);
    }

    .blog-card {
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .blog-card:hover {
        box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    .blog-image-link {
        display: block;
        position: relative;
        overflow: hidden;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.7;
        transition: opacity 0.3s ease;
    }

    .blog-card:hover .image-overlay {
        opacity: 0.9;
    }

    /* Pagination Styles */
    .pagination .page-link {
        background-color: #f8f9fa;
        border-color: #dee2e6;
        color: #495057;
    }

    .pagination .page-item.active .page-link {
        background-color: #495057;
        border-color: #495057;
        color: #fff;
    }

    .pagination .page-link:hover {
        background-color: #e9ecef;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .blog-header {
            padding-top: 5rem;
            padding-bottom: 5rem;
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
    }

    @media (max-width: 576px) {
        .blog-header {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        
        .main-title p {
            font-size: 1.8rem;
        }
        
        .blog-card {
            margin-bottom: 1.5rem;
        }
    }
</style>
@endsection

@section('js')
<!-- Animate.css for header animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

<script>
    // Add hover effects to cards
    document.querySelectorAll('.blog-card-wrapper').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.querySelector('.blog-card').style.transform = 'scale(1.02)';
        });
        card.addEventListener('mouseleave', function() {
            this.querySelector('.blog-card').style.transform = 'scale(1)';
        });
    });
</script>
@endsection