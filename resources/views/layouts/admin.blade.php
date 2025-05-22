<!doctype html>
<html lang="en">
<head>
{{-- <title>:: HexaBit :: Home</title> --}}
<!-- Title Page-->
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin_assets') }}/assets/images/download.png">
<link rel="icon" type="image/png" href="{{ asset('admin_assets') }}/assets/images/download.png">
<title> Riuman Solutions | @yield('page_title')</title>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('admin_assets')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('admin_assets')}}/assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('admin_assets')}}/assets/vendor/charts-c3/plugin.css"/>
<link rel="stylesheet" href="{{asset('admin_assets')}}/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="{{asset('admin_assets')}}/assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="{{asset('admin_assets')}}/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
{{-- <link rel="stylesheet" href="{{asset('admin_assets')}}/assets/vendor/toastr/toastr.min.css"> --}}
<link rel="stylesheet" href="{{asset('admin_assets')}}/sweetalert2/sweetalert2.min.css">

<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('admin_assets')}}/assets/css/main.css">
<link rel="stylesheet" href="{{asset('admin_assets')}}/assets/css/color_skins.css">

 {{-- FlatPicker --}}
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
<body class="theme-blue">


        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('components.admin_navbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('components.admin_sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <!-- content Start -->
                @yield('content')
                <!-- content end -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
<script src="{{asset('admin_assets')}}/js/jquery-3.4.1.min.js"></script>

<script src="{{asset('admin_assets')}}/assets/bundles/libscripts.bundle.js"></script>
<script src="{{asset('admin_assets')}}/assets/bundles/vendorscripts.bundle.js"></script>
{{-- <script src="{{asset('admin_assets')}}/js/parsley.min.js"></script> --}}
{{-- <script src="{{asset('admin_assets')}}/js/custom.js"></script> --}}
<script src="{{asset('admin_assets')}}/js/daniDev.js"></script>


<script src="{{asset('admin_assets')}}/assets/bundles/c3.bundle.js"></script>
<script src="{{asset('admin_assets')}}/assets/bundles/chartist.bundle.js"></script>
{{-- <script src="{{asset('admin_assets')}}/assets/vendor/toastr/toastr.js"></script> --}}
<script src="{{asset('admin_assets') }}/js/jquery.validate.min.js"></script>
<script src="{{asset('admin_assets')}}/sweetalert2/sweetalert2.min.js"></script>
<script src="{{asset('admin_assets')}}/assets/bundles/mainscripts.bundle.js"></script>
<script src="{{asset('admin_assets')}}/assets/js/index.js"></script>

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

 {{-- Flatpicker --}}
 <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@yield('page-scripts')

</body>
</html>

