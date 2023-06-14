<style>
    .ScrollStyle {
        max-height: 400px;
        overflow-y: scroll;
    }

    .ScrollStyle::-webkit-scrollbar {
        width: 5px;

    }

    .ScrollStyle::-webkit-scrollbar-track {
        background-color: #f5f5f5;
        border-radius: 10px;
    }

    .ScrollStyle::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #FEB800;
    }
</style>
<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand" style="margin-top: 1rem;">
        <a href="{{ route('home') }}" style="display: flex;align-items: center;justify-content: center;flex-direction: column">
            <img src="{{ asset('front_assets') }}/assets/images/download.png"
            style="background: white;width: 40%;border-radius: 10px"
            alt="Ruiman Logo" class="img-fluid logo">
            <p style="font-size:1rem;padding: 10px;text-align: center">Ruiman International<br/> HR System</p>
        </a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i
                class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">

        <nav id="left-sidebar-nav" class="sidebar-nav" style="margin-top: 3rem">
            <ul id="main-menu" class="metismenu">
                <li class="{{ Request::is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}"><i class="icon-home"></i><span>Dashboard</span>
                    </a>
                </li>

                <li class="{{ Request::is('user') || Request::is('user/edit/*') || Request::is('user/candidate/content/*') ? 'active' : '' }}">
                    <a href="{{ route('user.candidate.index') }}"><i class="icon-users"></i><span>Candidate</span></a>
                </li>

                <li class="{{ Request::is('user/reports/daily') || Request::is('user/reports/monthly') || Request::is('user/reports/yearly')  ? 'active' : '' }}">
                    <a href="" class="has-arrow"><i class="icon-docs"></i><span>Reports</span></a>
                    <ul>
                        <li class="{{ Request::is('user/reports/daily')  ? 'active' : '' }}"><a href="{{route('user.reports.daily')}}">Daily</a></li>
                        <li class="{{ Request::is('user/reports/monthly')  ? 'active' : '' }}"><a href="{{route('user.reports.monthly')}}">Monthly</a></li>
                        <li class="{{ Request::is('user/reports/yearly')  ? 'active' : '' }}"><a href="{{route('user.reports.yearly')}}">Yearly</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
