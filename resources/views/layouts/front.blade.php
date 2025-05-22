<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <title>:: HexaBit :: </title> --}}
    <!-- Title Page-->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front_assets') }}/assets/images/download.png">
    <link rel="icon" type="image/png" href="{{ asset('front_assets') }}/assets/images/download.png">
    <title>Riuman Solutions User |  @yield('page_title')</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="HexaBit Bootstrap 4x Admin Template">
    <meta name="author" content="WrapTheme, www.thememakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('front_assets') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front_assets') }}/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link href="{{ asset('front_assets') }}/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('front_assets') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('front_assets') }}/assets/css/color_skins.css">

    {{-- FlatPicker --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    {{-- Data Table CSS --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="{{ asset('front_assets') }}/assets/images/download.png"
                        width="100" height="100" alt="Ruiman"></div>
                <p>Please wait...</p>
            </div>
        </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- WRAPPER -->
    <div id="wrapper">

        {{-- NAVBAR START --}}
        @include('components.front_navbar')
        {{-- NAVBAR END --}}

        {{-- SIDEBAR START --}}
        @include('components.front_sidebar')
        {{-- SIDEBAR END --}}


        @yield('content');

    </div>
    <!-- END WRAPPER -->
    {{-- @yield('after-page') --}}


    {{-- Flatpicker --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="{{ asset('front_assets') }}/assets/bundles/libscripts.bundle.js"></script>
    <script src="{{ asset('front_assets') }}/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="{{ asset('front_assets') }}/assets/bundles/mainscripts.bundle.js"></script>
    <script src="{{ asset('front_assets') }}/sweetalert2/sweetalert2.min.js"></script>

    <script src="{{ asset('front_assets') }}/js/daniDev.js"></script>

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    @yield('page-scripts')


</body>

</html>
