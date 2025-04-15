@extends('layouts.frontend')

@section('content')
    <!-- Content -->



    <!-- ======  content ====== -->
    
    <!-- start banner -->
    @include('layouts.frontend_share.home_sections.hero')
    <!-- end banner -->


    <!-- start about -->
    @include('layouts.frontend_share.home_sections.about')
    <!-- end about -->


    <!-- start service -->
    @include('layouts.frontend_share.home_sections.slider')
    <!-- end service -->


    <!-- start product -->
    @include('layouts.frontend_share.home_sections.product')
    <!-- end product -->


    <!-- start  advantage -->
    @include('layouts.frontend_share.home_sections.card-pounter')
    <!-- end advantage -->


    <!-- start partner -->
    @include('layouts.frontend_share.home_sections.infinite-bar')
    <!-- end ipartner -->


    <!-- start contact -->
    @include('layouts.frontend_share.home_sections.form')
    <!-- end contact -->


    <!-- Content -->
@endsection
