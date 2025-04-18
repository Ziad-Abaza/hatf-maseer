@extends('layouts.frontend')

@section('content')
    <!-- Content -->

  <!-- ====== Page Banner start ====== -->
  <section class="ud-page-banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="ud-banner-content">
            <span class="sub-title">Not Found</span>
            <h2>404</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="techsup-shape">
      <img alt="shape" src="./assets/images/shapes/shape1.png" />
    </div>
  </section>
  <!-- ====== Page Banner end ====== -->
  
  <!-- ====== Error 404 Start ====== -->
  <section class="ud-404">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ud-404-wrapper">
            <div class="ud-404-content">
              <h2 class="ud-404-title">404 - We couldn't find that page.</h2>
              <h5 class="ud-404-subtitle">
                Maybe you can find what you need here?
              </h5>
              <ul class="ud-404-links">
                <li>
                  <a href="/">Home</a>
                </li>
                <li>
                  <a href="/about.html">About</a>
                </li>
                <li>
                  <a href="/contact.html">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Error 404 End ====== -->

    <!-- Content -->
@endsection
