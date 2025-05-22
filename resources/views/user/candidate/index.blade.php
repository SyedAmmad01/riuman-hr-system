    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    @extends('layouts.front')
    @section('page_title', 'All Candidates')
    @section('content')

        <div id="main-content">
            <div class="block-header" style="margin-top: 2.5rem">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>All Candidates</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active"></li>
                        </ul>
                        <button type="button" class="btn btn-sm text-light" style="background-color:#0e9be2;"
                            data-toggle="modal" data-target="#employeeShowModal">
                            Add Candidates
                        </button>
                        {{-- <a href="{{ route('user.candidate.add') }}" class="btn btn-sm btn btn-primary">Add Candidates</a> --}}
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
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
                            <div class="header">
                                <h2>All Candidate</h2>
                                <br>
                                <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                    <li> <a href="javascript:void(0);" data-toggle="cardloading"
                                            data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                    <li><a href="javascript:void(0);" class="full-screen"><i
                                                class="icon-size-fullscreen"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive check-all-parent">
                                    <table class="table table-hover m-b-0 c_list" id="myDataTable">
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
                                            @foreach ($candidates as $candidate)
                                                <tr>
                                                    <td>{{ $candidate->id }}</td>
                                                    <td>{{ $candidate->first_name }}</td>
                                                    <td>{{ $candidate->date_of_birth }}</td>
                                                    <td>{{ $candidate->cnic }}</td>
                                                    <td>{{ $candidate->mobile }}</td>
                                                    <td>
                                                        <a href="javascript:void(0);" id="show-employee" data-toggle="modal"
                                                            data-target="#employeeShowModalEdit"
                                                            data-url="{{ route('user.candidate.edit', ['id' => $candidate->id]) }}"
                                                            class="btn btn-info" title="Edit" type="button"><i
                                                                class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" id="show-data"
                                                            data-url="{{ route('user.candidate.show', ['id' => $candidate->id]) }}"
                                                            class="btn btn-danger" title="Delete" type="button"><i
                                                                class="fa fa-trash-o"></i></a>
                                                        <a href="{{ route('user.content.index', ['id' => $candidate->id]) }}"
                                                            class="btn btn-success" title="View" type="button"><i
                                                                class="fa fa-eye"></i></a>
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
        <!-- Add Modal -->
        @include('modal.add_condidate_modal')
        <!-- Add Modal -->
        <!-- Edit Modal -->
        @include('modal.edit_condidate_modal')
        <!-- Edit Modal -->
        <!-- Delete Modal -->
        @include('modal.delete_condidate_modal')

        <!-- Delete Modal -->

        </div>
    @endsection
    {{-- @section('page-scripts') --}}




    <script>
        $(document).ready(function() {
            $('#myDataTable').DataTable();
            $("body").on("click", "#show-employee", function() {
                var candidateURL = $(this).data('url');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.get(candidateURL, function(data) {
                    // console.log(data);
                    $('#employeeShowModalEdit').modal('show');
                    $('#c-id').val(data.id);
                    $('#c-cnic_number').val(data.cnic);
                    $('#c-name').val(data.first_name);
                    $('#c-dob').val(data.date_of_birth);
                    $('#c-number').val(data.mobile);
                    $('#c-other-number').val(data.other_number);
                    $('#c-address').val(data.address);
                    $('#c-last_job').val(data.last_job);
                    $('#c-time_from_last_job').val(data.time_from_last_job);
                    $('#c-time_to_last_job').val(data.time_to_last_job);
                    $('#c-current_status_job').val(data.current_status_job);
                    $('#c-last_sallery').val(data.last_sallery);
                    $('#c-expected_sallery').val(data.expected_sallery);
                    $('#c-last_post').val(data.last_post);
                    $('#c-job_post').val(data.job_post);
                    $('#c-any_archivement').val(data.any_archivement);
                    $('#c-office_address').val(data.office_address);
                    $('#c-status_at_riuman').val(data.status_at_riuman);
                    $('#c-reason').val(data.reason);
                    if (data.refrence_by === "Social Media" && data.refrence_by ===
                        "Friends/Relatives") {
                        $("#c-refrenceBy").val(data.refrence_by);
                    } else {
                        $("#c-refrenceBy").append(
                            `<option value="${data.refrence_by}" selected >${data.refrence_by}</option>`
                        )
                    }
                    $('#c-refrence_by').val(data.refrence_by);
                    $('#c-language').val(data.language);
                    $('#c-language_level').val(data.language_level);
                });
            });
            $('.close_modal').click(function() {
                $('#employeeShowModalEdit').modal('hide');
            });
            $('body').on('click', '#show-data', function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var candidateURL = $(this).data('url');
                $.get(candidateURL, function(data) {
                    $('#employeeShowModalDelete').modal('show');
                    $('#d-id').val(data.id);
                });
            });
            $('.modal_delete').click(function() {
                $('#employeeShowModalDelete').modal('hide');
            });
        });
    </script>
    {{-- @endsection --}}
