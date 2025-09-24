<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="{{ str_replace ('_', '-', app ()->getLocale ()) }}" dir="ltr" class="has-sidemenu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="NHOJunior Design">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="msapplication-TileImage" content="{{ asset('favicon.png') }}">
        <meta name="theme-color" content="#031141">
        <title>{{ config('app.name', 'CrystalCorp') }} | @yield('headTitle')</title>
        <link href="{{ asset('favicon.ico') }}" rel="apple-touch-icon" sizes="180x180">
        <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/png" sizes="32x32">
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">
@yield('styles')
    </head>
    <body class="@if($bgClass != null){{ $bgClass }} @elseif($bgClass == null)overflow-hidden-x @endif">
        <main class="main min-vh-100" id="top">
@yield('content')
        </main>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
@yield('scripts')
    </body>
</html>
