<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="{{ str_replace ('_', '-', app ()->getLocale ()) }}">
    <head>
        <meta charset="utf-8"/>
        <title>CrystalCorp | @yield('headTitle')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CrystalCorp Brasil Admin & Dashboard"/>
        <meta name="author" content="NHOJunior Design"/>
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon"/>
        <link href="{{ asset('css/admin/lightbox.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/loaders.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/perfect-scrollbar.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/theme.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/admin/styles.css') }}" rel="stylesheet" type="text/css"/>
@yield('style')
    </head>
    <body class="text-start">
        @include('layouts.preLoader')
        <div class="app-admin-wrap layout-sidebar-compact sidebar-gradient-black-blue sidenav-open clearfix">
            @include('layouts.admin.sidebar')
            <div class="main-content-wrap d-flex flex-column p-0">
                <div class="main-header">
                    <a href="{{ route('home') }}">
                        @include('layouts.admin.logo')
                    </a>
                    <div class="menu-toggle">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
@if (Auth::user()->level == 'admin')
                    @include('layouts.admin.megaMenu')
@endif
@yield('searchSection')
                    <div style="margin: auto"></div>
                    @include('layouts.admin.headerRight')
                </div>
                <div class="main-content p-3 mb-2">
                    <div class="breadcrumb">
                        <h1>{{ $pageTitle }}</h1>
                        <ul>
                            <li><a href="{{ route('dashboard') }}">Dashboard&nbsp;</a></li>
                            <li class="text-muted">{{ $pageTitle }}</li>
                        </ul>
                    </div>
                    <div class="separator-breadcrumb border-top"></div>
@yield('content')
                    <div class="flex-grow-1"></div>
                    @include('layouts.admin.footer')
                </div>
            </div>
        </div>
        <script src="{{ asset('js/admin/jquery.min.3.4.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/admin/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('js/admin/lightbox.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('js/admin/scripts.js') }}"></script>
@yield('scripts')
        @include('components.mySweetAlertMessages')
    </body>
</html>
