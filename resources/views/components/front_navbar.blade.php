<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="{{ route('home')}}"><img src="{{ asset('front_assets') }}/assets/images/download.png" alt="Ruiman Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-bars"></i></a>
            </div>

            <div class="navbar-right">


                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <div class="user-account" style="display: flex;" >
                            <div >
                                <img src="{{ asset('front_assets') }}/assets/images/download.png" 
                                {{-- class="user-photo" --}}
                                    alt="User Profile Picture" style="border-radius: 50%; width: 40px; height: 40px;background: white">
                            </div>
                            <div style="width: 10px;"></div>
                            <div class="dropdown" style="color: white">
                                <span>Welcome,</span>
                                <a href="javascript:void(0);" class="dropdown-toggle user-name"
                                    data-toggle="dropdown"><strong>{{Auth::User()->name}}</strong></a>
                                <ul class="dropdown-menu dropdown-menu-right account">
                                    <li class="divider"></li>
                                    <form id="logout-form" action="{{ route('user_logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <a href="{{ route('user_logout') }}" onclick="logout(event)" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>
                                </ul>
                            </div>
                        </div>
                        {{-- <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('user_logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                        <a href="{{ route('user_logout') }}" class="icon-menu" onclick="logout(event)" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                         <span><i class="icon-power"></i></span>
                        </a> --}}
                    </ul>
                </div>
            </div>
        </div>
    </nav>
