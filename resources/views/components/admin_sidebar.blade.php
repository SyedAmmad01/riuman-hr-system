<style>
.ScrollStyle
{
    max-height: 400px;
    overflow-y: scroll;
}
.ScrollStyle::-webkit-scrollbar
{
    width:5px;

}
.ScrollStyle::-webkit-scrollbar-track
{
    background-color:#f5f5f5;
    border-radius:10px;
}
.ScrollStyle::-webkit-scrollbar-thumb
{
    border-radius:10px;
    background-color:#FEB800;
}
</style>
<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="{{route('admin.dashboard')}}"><img src="{{ asset('admin_assets') }}/assets/images/download.png" alt="Ruiman Logo"
            class="img-fluid logo"><span style="font-size: 10px;">Ruiman Solutions Admin</span></a>
    <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i
            class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        {{-- <div class="user-account">
            <div class="user_div">
                <img src="{{ asset('admin_assets') }}/assets/images/download.png" class="user-photo"
                    alt="User Profile Picture" style="border-radius: 50%; height: 70px; ">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <br>
                <a href="javascript:void(0);" class="dropdown-toggle user-name"
                    data-toggle="dropdown"><strong>Admin</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li class="divider"></li>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <a href="{{ route('admin.logout') }}" onclick="logout(event)" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
                </ul>
            </div>
        </div> --}}
    <div class="ScrollStyle">
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i
                    class="icon-home"></i><span>Dashboard</span>
                    </a>
                    </li>

                    <li class="{{ Request::is('admin/user/index') ? 'active' : '' }}">
                        <a href="{{ route('admin.user.index') }}"><i class="icon-users"></i><span>Users</span></a>
                    </li>

                    <li class="{{ Request::is('admin/candidate/index') ? 'active' : '' }}">
                        <a href="{{ route('admin.candidate.index') }}"><i class="icon-users"></i><span>Candidate</span></a>
                    </li>
            </ul>
        </nav>

       </div>
    </div>
</div>
