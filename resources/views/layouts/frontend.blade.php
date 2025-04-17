<!DOCTYPE html>
<html  lang="{{app()->getLocale()}}" dir="{{ getDirection() }}">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W7VLW4G8');</script>
    <!-- End Google Tag Manager -->

    <!-- ====== Head ======  -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Islam Salah">
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <meta name="csrf" content="{{csrf_token()}}" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{env(('APP_Company'))}}</title>

    <!-- Primary Meta Tags -->
    <meta content="{{$settings['seo']['title']}}" name="title">
    <meta content="{{$settings['seo']['description']}}" name="description">
    <meta content="{{$settings['seo']['keywords']}}" name="keywords">
    <meta content="{{ asset('storage/icons/' . $settings['branding']['logo']) }}" property="og:image">
    <meta content="{{ asset('storage/icons/' . $settings['branding']['logo']) }}" property="twitter:image">
    <link rel="icon" href="{{ asset('storage/icons/' . $settings['branding']['favicon']) }}" type="image/svg+xml" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/icons/' . $settings['branding']['favicon']) }}">
    <link rel="icon" type="image/png" href="{{ asset('storage/icons/' . $settings['branding']['favicon']) }}">
    @include('layouts.frontend_share.stylesheets')
    @stack('css')
    @include('layouts.frontend_share.scripts_header')
    @stack('js_header')
    @livewireStyles

</head>

<body>
     <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7VLW4G8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- ====== Components ======  -->
    <!-- ====== Header Start ====== -->
    @include('layouts.frontend_share.ud-header')
    <!-- ====== Header End ====== -->

    @yield('content')

    <a href="https://wa.me/+966{{ config('setting.contact.phone') }}" target="_blank" class="whatsapp-icon">
        <i class="fab fa-whatsapp"></i>
    </a>
    <!-- ====== Footer Start ====== -->
    @include('layouts.frontend_share.ud-footer')
    <!-- ====== Footer End ====== -->

    <!-- ====== JS ====== -->
    @include('layouts.frontend_share.scripts_footer')
    @stack('js')
    @livewireScripts
</body>

</html>
