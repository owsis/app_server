<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ URL::asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('vendors/css/vendor.bundle.base.css') }}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
        <!-- endinject -->
        <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png') }}" />

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>

    <body>

        @yield('content')

        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{URL::asset('vendors/js/vendor.bundle.base.js')}}"></script>
        <script src="{{URL::asset('vendors/js/vendor.bundle.addons.js')}}"></script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src="{{URL::asset('js/off-canvas.js')}}"></script>
        <script src="{{URL::asset('js/misc.js')}}"></script>
        <!-- endinject -->
    </body>
</html>
