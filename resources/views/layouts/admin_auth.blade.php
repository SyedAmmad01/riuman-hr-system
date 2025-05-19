<!doctype html>
<html lang="en">

<head>
{{-- <title>:: HexaBit :: Login</title> --}}
<!-- Title Page-->
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin_assets') }}/assets/images/download.png">
<link rel="icon" type="image/png" href="{{ asset('admin_assets') }}/assets/images/download.png">
<title> Riuman International Hr System Admin | @yield('page_title')</title>
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

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('admin_assets')}}/assets/css/main.css">
<link rel="stylesheet" href="{{asset('admin_assets')}}/assets/css/color_skins.css">
</head>

<body class="theme-blue">
    <!-- WRAPPER -->
    @yield('auth_content')
    {{-- @yield('content') --}}
    <!-- END WRAPPER -->

<script src="{{asset('admin_assets')}}/assets/bundles/libscripts.bundle.js"></script>
<script src="{{asset('admin_assets')}}/assets/bundles/vendorscripts.bundle.js"></script>

<script src="{{asset('admin_assets')}}/assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
