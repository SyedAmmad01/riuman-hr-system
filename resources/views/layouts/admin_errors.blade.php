<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- App favicon -->
    <link href="{{ asset('admin_assets') }}/images/favicon.png" sizes="128x128" rel="shortcut icon" />
    <!-- App css -->
    <link href="{{ asset('admin_assets') }}/css/bundled.min.css" rel="stylesheet" type="text/css" />
    <style>
        .auth-fluid {
            position: relative;
            display: flex;
            align-items: center;
            min-height: 100vh;
            flex-direction: row;
            align-items: stretch;
            background: url({{asset('admin_assets')}}/images/bg-auth.jpg) center;
            background-size: cover
        }

        .auth-fluid .auth-fluid-form-box {
            max-width: 480px;
            border-radius: 0;
            z-index: 2;
            padding: 3rem 2rem;
            background-color: #fff;
            position: relative;
            width: 100%
        }

        .auth-fluid .auth-fluid-right {
            padding: 6rem 3rem;
            flex: 1;
            position: relative;
            color: #fff;
            background-color: rgba(0, 0, 0, .3)
        }

        .auth-brand {
            margin-bottom: 2rem
        }

        .auth-user-testimonial {
            position: absolute;
            margin: 0 auto;
            padding: 0 1.75rem;
            bottom: 3rem;
            left: 0;
            right: 0
        }

        .auth-user-testimonial p.lead {
            font-size: 1.125rem;
            margin: 0 auto 20px auto;
            max-width: 700px
        }

        @media (min-width:992px) {
            .auth-brand {
                position: absolute;
                top: 3rem
            }
        }

        @media (max-width:991.98px) {
            .auth-fluid {
                display: block
            }
            .auth-fluid .auth-fluid-form-box {
                max-width: 100%;
                min-height: 100vh
            }
            .auth-fluid .auth-fluid-right {
                display: none
            }
        }

        .auth-logo .logo-light {
            display: none
        }

        .auth-logo .logo-dark {
            display: block
        }
    </style>
</head>

<body class="loading auth-fluid-pages pb-0">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brans text-center text-lg-lefst">
                        <div class="auth-logo">
                            <a href="index.html" class="logo logo-dark text-center">
                                <span class="logo-lg">
                                    <img src="{{asset('admin_assets')}}/images/vertical_logo.png" alt="" height="120">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light text-center">
                                <span class="logo-lg">
                                    <img src="{{asset('admin_assets')}}/images/logo-light.png" alt="" height="120">
                                </span>
                            </a>
                        </div>
                    </div>

                    @yield('content')
                    <!-- end row -->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        {{ date('Y') }} &copy; All rights reserved by {{env('APP_NAME')}}. Design &amp; Developed By <a href="https://dianujnima.com" target="_blank">Dianuj Nima</a>.
                    </footer>

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->
    <script src="{{ asset('admin_assets') }}/js/bundled.min.js"></script>
    <script src="{{ asset('admin_assets') }}/js/app.min.js"></script>

</body>

</html>
