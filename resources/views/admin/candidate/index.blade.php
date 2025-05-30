@extends('layouts.admin')
@section('page_title', 'Admin List Candidates')
@section('content')
    <style>
        a {
            /* text-decoration: none; */
            color: white;
        }
    </style>
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>All Candidates</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active"></li>
                    </ul>
                    <a href="{{ route('admin.candidate.add') }}" class="btn btn-sm btn btn-primary">Add Candidate</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success {{ Session::has('penting') ? 'alert-important' : '' }}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if (Session::has('msg'))
                        <div class="alert alert-danger {{ Session::has('penting') ? 'alert-important' : '' }}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ Session::get('msg') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="header">
                            <h2>All Candidates</h2>
                            <br>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i
                                            class="icon-refresh"></i></a></li>
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
                                                    <a href="javascript:void(0);" id="show-data"
                                                        data-url="{{ route('admin.candidate.show', ['id' => $candidate->id]) }}"
                                                        class="btn btn-danger" title="Delete" type="button"><i
                                                            class="fa fa-trash-o"></i></a>

                                                    <a href="{{ route('admin.candidate.edit', ['id' => $candidate->id]) }}"
                                                        class="btn btn-success" title="View" type="button"><i
                                                            class="fa fa-edit"></i></a>
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

    <!-- Delete Modal -->
    <div class="modal fade" id="employeeShowModalDelete" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Candidates</h5>
                    <button type="button" class="close modal_delete" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.candidate.delete') }}" method="get">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="row">
                                <span style="color:red; font-weight:1000;">Are You Sure You Want To Delete This Data
                                    ?</span>
                                <input type="hidden" id="d-id" name="id">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary modal_delete"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                </div>
                </form>
            </div>

        </div>
    </div>
    </div>
    <!-- Delete Modal -->
@endsection
@section('page-scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myDataTable').DataTable();
        });

        $(document).ready(function() {
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
        });

        $('.modal_delete').click(function() {
            $('#employeeShowModalDelete').modal('hide');
        });
    </script>
@endsection
