@extends('layouts.admin_auth')
@section('auth_content')
@section('page_title' , 'Login')


<!-- WRAPPER -->
<div id="wrapper" class="auth-main">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="javascript:void(0);"><img src="{{ asset('admin_assets') }}/assets/images/download.png" width="30" height="30" class="d-inline-block align-top mr-2" alt="">Riuman International Hr System Admin</a>
                    <ul class="navbar-nav">
                    </ul>
                </nav>
            </div>
            <div class="col-lg-8">
                <div class="auth_detail">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="header">
                        <p class="lead">Hey Admin Login To Your Account</p>
                        <br>
                        @if(Session::get('error'))
                        <div class="alert alert-danger">{{Session::get('error')}}</div>
                        @endif
                    </div>
                    <div class="body">
                        <form class="form-auth-small" method="post" action="{{route('admin.login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" class="form-control form__field @error('email') input--error @enderror" name="email" value="{{ old('email') }}" autofocus placeholder="Enter your email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input class="form-control form__field @error('password') input--error @enderror" type="password" id="password" name="password" required autocomplete="current-password" placeholder="Enter your password" id="password">
                            </div>

                            @error('email')
                            <span class="invalid-feedback d-block mb-3" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                             @error('password')
                            <span class="invalid-feedback d-block mb-3" role="alert">
                            <strong>{{ $message }}</strong>
                              </span>
                              @enderror

                            @if ($errors->has('active'))
                            <p class="alert alert-danger mt-2">
                            <span class="help-block">
                            <strong>{{ $errors->first('active') }}</strong>
                            </span>
                            </p>
                            @endif
                            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            <div class="bottom">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
@endsection
