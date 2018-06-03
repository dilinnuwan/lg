<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('theme_src/js/app.js') }}" defer></script>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('theme_src/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme_src/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('theme_src/vendors/css/vendor.bundle.addons.css') }}">

    <link rel="stylesheet" href="{{ asset('theme_src/css/style.css') }}">

    @yield('css_script')
</head>
<body>
    <div class="container-scroller">
        @include('inc.navbar')
        @yield('content')
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('theme_src/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('theme_src/vendors/js/vendor.bundle.addons.js') }}"></script>

    <!-- inject:js -->
    <script src="{{ asset('theme_src/js/template.js') }}"></script>
    @yield('js_script')
</body>
</html>