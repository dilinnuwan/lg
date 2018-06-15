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
    <link rel="stylesheet" href="{{ asset('theme_src/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme_src/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('theme_src/vendors/css/vendor.bundle.addons.css') }}">

    <link rel="stylesheet" href="{{ asset('theme_src/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme_src/css/style_custom.css') }}">
    

    @yield('css_script')
</head>
<body>
    <div class="container-scroller">
        @include('inc.navbar', ['user' => $user])
        @yield('content')
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('theme_src/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('theme_src/vendors/js/vendor.bundle.addons.js') }}"></script>

    <!-- inject:js -->
    <script src="{{ asset('theme_src/js/template.js') }}"></script>


    {{-- toast --}}
    <script type="text/javascript">
        @if(session('success_tost'))
            $.toast({
              heading: 'Success',
              text: '{{session('success_tost')}}',
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#f96868',
              hideAfter: 5000,
              position: 'bottom-left'
            }).show();
        @endif

          @if(session('error_tost'))
            $.toast({
              heading: 'Error',
              text: '{{session('error_tost')}}',
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#f96868',
              hideAfter: 5000,
              position: 'bottom-left'
            }).show();
          @endif

          @if(session('warning_tost'))
            $.toast({
              heading: 'Warning',
              text: '{{session('warning_tost')}}',
              showHideTransition: 'slide',
              icon: 'warning',
              loaderBg: '#f96868',
              hideAfter: 5000,
              position: 'bottom-left'
            }).show();
          @endif
    </script>

    @yield('js_script')
</body>
</html>