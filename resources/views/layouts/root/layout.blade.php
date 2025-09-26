<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="{{ str_replace ('_', '-', app ()->getLocale ()) }}" class="has-sidemenu fontawesome-i2svg-active fontawesome-i2svg-complete" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="NHOJunior Design">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="msapplication-TileImage" content="{{ asset('favicon.png') }}">
        <title>{{ config('app.name', 'CrystalCorp') }} | @yield('headTitle')</title>
        <link href="{{ asset('favicon.ico') }}" rel="apple-touch-icon" sizes="180x180">
        <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/png" sizes="32x32">
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/root/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/root/loaders.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/root/myTheme.css') }}" rel="stylesheet">
@yield('styles')
    </head>
    <body class="overflow-hidden-x">
        @include('layouts.preLoader')
@if ($pageActive != 'auth')
        @include('layouts.root.fancyNavBar')
@endif
        <main class="main min-vh-100" id="top">
@yield('content')
        </main>
@if ($pageActive != 'auth')
        @include('layouts.root.footer')
@endif
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('js/root/anchor.min.js') }}"></script>
        <script src="{{ asset('js/root/is.min.js') }}"></script>
        <script src="{{ asset('js/root/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/root/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/root/packery-mode.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/root/BigPicture.js') }}"></script>
        <script src="{{ asset('js/root/rellax.min.js') }}"></script>
        <script src="{{ asset('js/root/all.min.js') }}"></script>
        <script src="{{ asset('js/root/lodash.min.js') }}"></script>
        <script src="{{ asset('js/root/polyfill.min.js') }}"></script>
        <script src="{{ asset('js/root/imagesloaded.pkgd.js') }}"></script>
        <script src="{{ asset('js/root/gsap.js') }}"></script>
        <script src="{{ asset('js/root/customEase.js') }}"></script>
        <script src="{{ asset('js/root/drawSVGPlugin.js') }}"></script>
        <script src="{{ asset('js/root/myScripts.js') }}"></script>
        <script src="{{ asset('js/myScripts.js') }}"></script>
@yield('scripts')
    </body>
</html>
