@extends('layouts.front')
@section('page_title', 'Daily Reports')
@section('content')
    <div id="main-content">
        <div class="block-header" style="margin-top: 2.5rem">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Daily Reports</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active"></li>
                    </ul>
                    <a href="{{ route('user.candidate.index') }}" class="btn btn-sm text-light"
                        style="background-color:#0e9be2;">Manage Candiates</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All Candiate</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i
                                            class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i
                                            class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <!-- Tab links -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">All
                                            Candidate</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Approved
                                            Candiate</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Rejected
                                            Candiate</a>
                                    </li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <br>
                                        <div class="table-responsive">
                                            <table
                                                class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                <button onclick="window.print()" class="btn btn-round text-light"
                                                style="background-color:#0e9be2; margin-left:89%; margin-bottom:1%;">Print</button>
                                                <br>
                                                <thead>
                                                    <tr>
                                                        <th>Candiate ID</th>
                                                        <th>Candiate Name</th>
                                                        <th>Cnic Number</th>
                                                        <th>Dob</th>
                                                        <th>Job Post</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Candiate ID</th>
                                                        <th>Candiate Name</th>
                                                        <th>Cnic Number</th>
                                                        <th>Dob</th>
                                                        <th>Job Post</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($dailys as $daily)
                                                        <tr>
                                                            <td>{{ $daily->id }}</td>
                                                            <td>{{ $daily->name }}</td>
                                                            <td>{{ $daily->cnic_number }}</td>
                                                            <td>{{ $daily->dob }}</td>
                                                            <td>{{ $daily->job_post }}</td>
                                                            <td>{{ $daily->expected_sallery }}</td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                                        <br>
                                        <div class="table-responsive">
                                            <table
                                                class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                <button onclick="window.print()" class="btn btn-round text-light"
                                                style="background-color:#0e9be2; margin-left:89%; margin-bottom:1%;">Print</button>
                                                <br>
                                                <thead>
                                                    <tr>
                                                        <th>Candiate ID</th>
                                                        <th>Candiate Name</th>
                                                        <th>Status</th>
                                                        <th>Time</th>
                                                        <th>Reasons</th>
                                                        <th>Training Date To</th>
                                                        <th>Training Date From</th>
                                                        <th>Refrence By</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Candiate ID</th>
                                                        <th>Candiate Name</th>
                                                        <th>Status</th>
                                                        <th>Time</th>
                                                        <th>Reasons</th>
                                                        <th>Training Date To</th>
                                                        <th>Training Date From</th>
                                                        <th>Refrence By</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($dailys_approved as $approved)
                                                        <tr>
                                                            <td>{{ $approved->candidate_id }}</td>
                                                            <td>{{ $approved->name }}</td>
                                                            <td>
                                                                @if ($approved->status == 1)
                                                                    <a class="btn btn-sm text-light"
                                                                        style="background-color: #0e9be2">Approved</a>
                                                                @endif
                                                            </td>
                                                            <td>{{ $approved->time }}</td>
                                                            <td>{{ $approved->reasons }}</td>
                                                            <td>{{ $approved->training_date_to }}</td>
                                                            <td>{{ $approved->training_date_from }}</td>
                                                            <td>{{ $approved->refrence_by }}</td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                                        <br>
                                        <div class="table-responsive">
                                            <table
                                                class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                <button onclick="window.print()" class="btn btn-round text-light"
                                                style="background-color:#0e9be2; margin-left:89%; margin-bottom:1%;">Print</button>
                                                <br>
                                                <thead>
                                                    <tr>
                                                        <th>Candiate ID</th>
                                                        <th>Candiate Name</th>
                                                        <th>Status</th>
                                                        <th>Reasons</th>
                                                        <th>Refrence By</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Candiate ID</th>
                                                        <th>Candiate Name</th>
                                                        <th>Status</th>
                                                        <th>Reasons</th>
                                                        <th>Refrence By</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($dailys_rejected as $rejected)
                                                        <tr>
                                                            <td>{{ $rejected->candidate_id }}</td>
                                                            <td>{{ $rejected->name }}</td>
                                                            <td>
                                                                @if ($rejected->status == 0)
                                                                    <a class="btn btn-danger text-light">Rejected</a>
                                                                @endif
                                                            </td>
                                                            <td>{{ $rejected->reasons }}</td>
                                                            <td>{{ $rejected->refrence_by }}</td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-scripts')


@endsection
