<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title'){{ config('app.name', 'Laravel') }}</title>

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
        <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
          <div class="container d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top">
              <a class="navbar-brand brand-logo" href="{{ url('/') }}"><img src="{{ asset('theme_src/images/logo.png') }}" alt="logo"/></a>
              <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{ asset('theme_src/images/logo.png') }}" alt="logo"/></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <span class="search-field ml-auto" >
                </span>
                <ul class="navbar-nav navbar-nav-right mr-0">
                    <li class="nav-item dropdown ml-4">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <h6 class="preview-subject font-weight-normal text-dark mb-1">{{ __('Sign Out') }}</h6>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
          </div>
        </nav>
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