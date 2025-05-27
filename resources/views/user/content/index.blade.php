@extends('layouts.front')
@section('page_title', 'Content')
@section('content')
    <div id="main-content">
        <div class="block-header" style="margin-top: 2.5rem">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Candiates Details</h2>
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
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-12 grid-margin stretch-card">
                        @if (Session::has('success'))
                            <div class="alert alert-success {{ Session::has('penting') ? 'alert-important' : '' }}">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if (Session::has('msg'))
                            <div class="alert alert-danger {{ Session::has('penting') ? 'alert-important' : '' }}">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                {{ Session::get('msg') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <!-- Tab links -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Candidate
                                            Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Consent Form</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Attendence</a>
                                    </li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="Candidate Name">Candidate Name</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->first_name }}" readonly>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="Candidate Cnic">Candidate Cnic</label>
                                                    <input type="text" class="form-control" value="{{ $contents->cnic }}"
                                                        readonly>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="validationDOB">Condidate Date Of Birth</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->date_of_birth }}" readonly>

                                                </div>

                                                <div class="mb-3">
                                                    <label for="validationNumber">Candidate Number</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->mobile }}" readonly>

                                                </div>

                                                <div class="mb-3">
                                                    <label for="validationNumber">Candidate Other Number</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->other_number }}" readonly>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="validationAddress">Candidate Address</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->address }}" readonly>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="last Job">Last Job</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->last_job }}" readonly>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 ">
                                                    <label for="Last Post">Last Post</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->last_post }}" readonly>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="Time From Last Job">Time From Last Job</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->time_from_last_job }}" readonly>

                                                </div>

                                                {{-- <div class="mb-3">
                                                    <label for="Time To Last Job">Time To Last Job</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->time_to_last_job }}" readonly>
                                                </div> --}}


                                                <div class="mb-3">
                                                    <label for="">Current Status Job</label>
                                                    @if ($contents->current_status_job == 1)
                                                        <div><input type="text" class="form-control" value="Yes"
                                                                readonly></div>
                                                    @else
                                                        <div><input type="text" class="form-control" value="No"
                                                                readonly></div>
                                                    @endif
                                                </div>

                                                <div class="mb-3">
                                                    <label for="Last Sallery">Last Sallery</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->last_sallery }}" readonly>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="">Expected Sallery</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->expected_sallery }}" readonly>

                                                </div>

                                                <div class="mb-3 ">
                                                    <label for="Any Archivement">Any Archivement</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->any_archivement }}" readonly>

                                                </div>

                                                <div class="mb-3">
                                                    <label for="">Job Post</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->job_post }}" readonly>

                                                </div>

                                            </div>
                                            <div class="col-md-4">


                                                <div class="mb-3">
                                                    <label for="">Refrence By</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->refrence_by }}" readonly>

                                                </div>

                                                <div class="mb-3">
                                                    <label for="">Language</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->language }}" readonly>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="">Office Address</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->office_address }}" readonly>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="">Status At Riuman</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->status_at_riuman }}" readonly>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="">Reason</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->reason }}" readonly>
                                                </div>


                                                <div class="mb-3">
                                                    <label for="">Date Of Joining</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $contents->date_of_joining }}" readonly>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                                        <br>
                                        <form class="forms-sample" action="{{ route('user.content.save') }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="Candidate ID">Candidate ID</label>
                                                        <input type="text" class="form-control" name="candidate_id"
                                                            value="{{ $contents->id }}" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="Candidate Name">Candidate Name</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $contents->first_name }}" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="Candidate Number">Candidate Number</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $contents->mobile }}" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="Job Post">Job Post</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $contents->job_post }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($consents == null)
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Status">Status</label>
                                                            <select class="form-control" name="status" id="status"
                                                                onchange="get()" required>
                                                                <option value="" selected disabled>
                                                                    -Select-</option>
                                                                <option value="1">
                                                                    Selected</option>
                                                                <option value="0">
                                                                    Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Reason">Reason</label>
                                                            <textarea class="form-control" id="reasons" name="reasons" rows="4" cols="50"></textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-3 hidden" style="display:none;">
                                                        <div class="form-group">
                                                            <label for="Time">Time</label>
                                                            <input type="time" class="form-control" id="time"
                                                                placeholder="Time" name="time">
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-3 hidden" style="display:none;">
                                                        <div class="form-group ">
                                                            <label for="Training Date To">Training Date To</label>
                                                            <input type="date" class="form-control"
                                                                id="training_date_to" name="training_date_to"
                                                                value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3 hidden" style="display:none;">
                                                        <div class="form-group">
                                                            <label for="Training Date From">Training Date From</label>
                                                            <input type="date" class="form-control"
                                                                id="training_date_from" name="training_date_from"
                                                                value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Refrence By">Refrence By</label>
                                                            <input type="text" class="form-control" id="refrence_by"
                                                                placeholder="Refrence By" name="refrence_by"
                                                                value="{{ Auth::user()->name }}" readonly>
                                                        </div>
                                                    </div>


                                                </div>
                                            @elseif($consents->status == 1)
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Status">Status</label>
                                                            <select class="form-control" name="status" id="status"
                                                                onchange="get()" required>
                                                                <option value="" selected disabled>
                                                                    -Select-</option>
                                                                <option value="1"
                                                                    {{ $consents->status == 1 ? 'selected' : '' }}>
                                                                    Selected</option>
                                                                <option value="0"
                                                                    {{ $consents->status == 0 ? 'selected' : '' }}>
                                                                    Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Reason">Reason</label>
                                                            <textarea class="form-control" id="reasons" name="reasons" rows="4" cols="50">{{ $consents->reasons }}</textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-3 hidden" style="">
                                                        <div class="form-group">
                                                            <label for="Time">Time</label>
                                                            <input type="time" class="form-control" id="time"
                                                                placeholder="Time" name="time"
                                                                value="{{ $consents->time }}">
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-3 hidden" style="">
                                                        <div class="form-group ">
                                                            <label for="Training Date To">Training Date To</label>
                                                            <input type="date" class="form-control"
                                                                id="training_date_to" name="training_date_to"
                                                                value="{{ $consents->training_date_to }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3 hidden" style="">
                                                        <div class="form-group">
                                                            <label for="Training Date From">Training Date From</label>
                                                            <input type="date" class="form-control"
                                                                id="training_date_from" name="training_date_from"
                                                                value="{{ $consents->training_date_from }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Refrence By">Refrence By</label>
                                                            <input type="text" class="form-control" id="refrence_by"
                                                                placeholder="Refrence By" name="refrence_by"
                                                                value="{{ Auth::user()->name }}" readonly>
                                                        </div>
                                                    </div>


                                                </div>
                                            @elseif($consents->status == 0)
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Status">Status</label>
                                                            <select class="form-control" name="status" id="status"
                                                                onchange="get()" required>
                                                                <option value="" selected disabled>
                                                                    -Select-</option>
                                                                <option value="1"
                                                                    {{ $consents->status == 1 ? 'selected' : '' }}>
                                                                    Selected</option>
                                                                <option value="0"
                                                                    {{ $consents->status == 0 ? 'selected' : '' }}>
                                                                    Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Reason">Reason</label>
                                                            <textarea class="form-control" id="reasons" name="reasons" rows="4" cols="50">{{ $consents->reasons }}</textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-3 hidden" style="display:none;">
                                                        <div class="form-group">
                                                            <label for="Time">Time</label>
                                                            <input type="time" class="form-control" id="time"
                                                                placeholder="Time" name="time"
                                                                value="{{ $consents->time }}">
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-3 hidden" style="display:none;">
                                                        <div class="form-group ">
                                                            <label for="Training Date To">Training Date To</label>
                                                            <input type="date" class="form-control"
                                                                id="training_date_to" name="training_date_to"
                                                                value="{{ $consents->training_date_to }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3 hidden" style="display:none;">
                                                        <div class="form-group">
                                                            <label for="Training Date From">Training Date From</label>
                                                            <input type="date" class="form-control"
                                                                id="training_date_from" name="training_date_from"
                                                                value="{{ $consents->training_date_from }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Refrence By">Refrence By</label>
                                                            <input type="text" class="form-control" id="refrence_by"
                                                                placeholder="Refrence By" name="refrence_by"
                                                                value="{{ Auth::user()->name }}" readonly>
                                                        </div>
                                                    </div>


                                                </div>
                                            @endif

                                            <input type="submit" class="btn btn-sm me-2 text-light"
                                                style="background-color:#0e9be2;" value="Submit">
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                                        <br>
                                        <div class="container-fluid">
                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="header">
                                                            <h2>Candidate</h2>
                                                            <br>
                                                            <ul
                                                                class="header-dropdown dropdown dropdown-animated scale-left">
                                                                <li> <a href="javascript:void(0);"
                                                                        data-toggle="cardloading"
                                                                        data-loading-effect="pulse"><i
                                                                            class="icon-refresh"></i></a></li>
                                                                <li><a href="javascript:void(0);" class="full-screen"><i
                                                                            class="icon-size-fullscreen"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="body">
                                                            <div class="table-responsive check-all-parent">
                                                                <table class="table table-hover m-b-0 c_list"
                                                                    id="myDataTable">
                                                                    <thead>
                                                                        <tr>
                                                                            <th> # </th>
                                                                            <th> Candidate Name </th>
                                                                            <th> Candidate DOB </th>
                                                                            <th> Candidate CNIC Number </th>
                                                                            <th> Candidate Number </th>
                                                                            <th> Action </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if ($consent->isNotEmpty())
                                                                            @foreach ($consent as $c)
                                                                                <tr>
                                                                                    <td>{{ $c->id }}</td>
                                                                                    <td>{{ $c->first_name }}</td>
                                                                                    <td>{{ $c->date_of_birth }}</td>
                                                                                    <td>{{ $c->cnic }}</td>
                                                                                    <td>{{ $c->mobile }}</td>
                                                                                    <td>
                                                                                        <input
                                                                                            class="btn btn-success btnbPresent"
                                                                                            type="text" value="P"
                                                                                            name="attendence" readonly>
                                                                                    </td>
                                                                                    <input type="hidden"
                                                                                        name="attendence" value="">
                                                                                </tr>
                                                                            @endforeach
                                                                        @endif

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <br>
                                                            <button type="submit"
                                                                class="btn btn-primary ml-1 mt-2">Submit</button>
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
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
@section('page-scripts')
    <script>
        $(document).ready(function() {
            $('#myDataTable').DataTable();
            chanVal()
        });

        function get() {
            var id = $('#status :selected').val();
            if (Number(id) == 1) {
                $(".hidden").css("display", "block");
            } else {
                $(".hidden").css("display", "none");
            }
        }

        function chanVal() {
            var btnbPresent = document.getElementsByClassName("btnbPresent")
            btnbPresent = Array.from(btnbPresent)
            console.log("buttons", btnbPresent)
            btnbPresent.forEach((item, index) => {
                item.addEventListener("click", function() {
                    console.log('item', item.value)

                    if (item.value == "P") {
                        item.value = "A"
                        item.classList.add("btn-danger")
                    } else {
                        item.value = "P"
                        item.classList.remove("btn-danger")
                    }
                })
            })
        }
    </script>
@endsection
