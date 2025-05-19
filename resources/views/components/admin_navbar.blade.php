<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="{{route('admin.dashboard')}}"><img src="{{ asset('admin_assets') }}/assets/images/download.png" alt="Ruiman Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-bars"></i></a>
            </div>

            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                        <a href="{{ route('admin.logout') }}" class="icon-menu" onclick="logout(event)" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                         <span><i class="icon-power"></i></span>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

