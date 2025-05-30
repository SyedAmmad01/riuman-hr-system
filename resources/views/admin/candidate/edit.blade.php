<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@extends('layouts.admin')
@section('page_title', 'Admin List Users')
@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Edit Users</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active"></li>
                    </ul>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-sm text-light"
                        style="background-color:#0e9be2;">Manage Users</a>
                </div>
            </div>
        </div>
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-12 grid-margin stretch-card">
                        {{-- @if (count($errors) > 0)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul class="p-0 m-0" style="list-style: none;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
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
                                <p class="float-end">
                                </p>
                                <h4 class="card-title">Edit Users</h4>
                                <form class="needs-validation" id="editForm" novalidate>


                                    <input type="hidden" name="id" id="c-id" value="{{ $candidates->id }}">

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Name">Name</label>
                                                <input type="text" class="form-control" id="c-name"
                                                    value="{{ $candidates->first_name }}" placeholder="Name" name="name">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Cnic Number">Cnic Number</label>
                                                <input type="phone" class="form-control" id="c-cnic_number" maxlength="15"
                                                    value="{{ $candidates->cnic }}" placeholder="Cnic Number"
                                                    name="cnic_number">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="DOB">DOB</label>
                                                <input type="date" class="form-control" id="c-dob"
                                                    value="{{ $candidates->date_of_birth }}" placeholder="DOB"
                                                    name="dob">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Number">Number</label>
                                                <input type="phone" class="form-control" id="c-number"
                                                    value="{{ $candidates->mobile }}" placeholder="Number" name="number"
                                                    maxlength="11">

                                            </div>
                                        </div>


                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Other Number">Other Number</label>
                                                <input type="phone" class="form-control" id="c-other-number"
                                                    value="{{ $candidates->other_number }}" placeholder="Other Number"
                                                    name="other_number">
                                            </div>
                                        </div>



                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Address">Address</label>
                                                <input type="text" class="form-control" id="c-address"
                                                    value="{{ $candidates->address }}" placeholder="address" name="address"
                                                    maxlength="11">

                                            </div>
                                        </div>



                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Last Job">Last Job</label>
                                                <input type="text" class="form-control" id="c-last_job"
                                                    value="{{ $candidates->last_job }}" placeholder="Last Job"
                                                    name="last_job">

                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Last Post">Last Post</label>
                                                <input type="text" class="form-control" id="c-last_post"
                                                    value="{{ $candidates->last_post }}" placeholder="Last Post"
                                                    name="last_post">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Time From Last Job">Time From Last Job</label>
                                                <input type="text" class="form-control" id="c-time_from_last_job"
                                                    value="{{ $candidates->time_from_last_job }}"
                                                    placeholder="Time From Last Job" name="time_from_last_job">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="current_status_job">Current Status Job</label>
                                                <select class="form-control valid" name="current_status_job"
                                                    id="c-current_status_job">
                                                    <option value="" disabled
                                                        {{ old('current_status_job', $candidates->current_status_job) === null ? 'selected' : '' }}>
                                                        -Select-</option>
                                                    <option value="1"
                                                        {{ old('current_status_job', $candidates->current_status_job) == '1' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="0"
                                                        {{ old('current_status_job', $candidates->current_status_job) == '0' ? 'selected' : '' }}>
                                                        No</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Last Salary">Last Salary</label>
                                                <input type="number" class="form-control" id="c-last_sallery"
                                                    value="{{ $candidates->last_sallery }}" placeholder="Last Salary"
                                                    name="last_sallery">
                                            </div>
                                        </div>


                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Expected Salary">Expected Salary</label>
                                                <input type="number" class="form-control" id="c-expected_sallery"
                                                    value="{{ $candidates->expected_sallery }}"
                                                    placeholder="Expected Salary" name="expected_sallery">
                                            </div>
                                        </div>


                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Job Post">Job Post</label>
                                                <input type="text" class="form-control" id="c-job_post"
                                                    value="{{ $candidates->job_post }}" placeholder="Job Post"
                                                    name="job_post">
                                            </div>
                                        </div>


                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="Any Archivement">Any Archivement</label>
                                                <input type="text" class="form-control" id="c-any_archivement"
                                                    value="{{ $candidates->any_archivement }}"
                                                    placeholder="Any Archivement" name="any_archivement">
                                            </div>
                                        </div>





                                        @php
                                            // Get the old input or fallback to exploded DB value
                                            $selectedLanguages = old(
                                                'language',
                                                explode(',', $candidates->language ?? ''),
                                            );
                                        @endphp

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="language">Language</label>
                                                <select class="js-select2-edit form-control" name="language[]"
                                                    id="c-language" multiple>
                                                    <option disabled>-Select-</option>
                                                    @foreach (['English Beginner', 'English Intermediate', 'English Fluent', 'Arabic Beginner', 'Arabic Intermediate', 'Arabic Fluent', 'Urdu Beginner', 'Urdu Intermediate', 'Urdu Fluent'] as $language)
                                                        <option value="{{ $language }}"
                                                            {{ in_array(trim($language), array_map('trim', $selectedLanguages)) ? 'selected' : '' }}>
                                                            {{ $language }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>




                                        @php
                                            $selectedOffice = old('office_address', $candidates->office_address);
                                        @endphp

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="c-office_address">Office Address</label>
                                                <select class="form-control" name="office_address" id="c-office_address"
                                                    aria-describedby="validationOfficeaddress04Feedback">
                                                    <option value="" disabled
                                                        {{ $selectedOffice === null ? 'selected' : '' }}>-Please Select-
                                                    </option>
                                                    <option value="Fortune Center"
                                                        {{ $selectedOffice == 'Fortune Center' ? 'selected' : '' }}>Fortune
                                                        Center</option>
                                                    <option value="Anum Estate"
                                                        {{ $selectedOffice == 'Anum Estate' ? 'selected' : '' }}>Anum
                                                        Estate</option>
                                                    <option value="Anum Empire"
                                                        {{ $selectedOffice == 'Anum Empire' ? 'selected' : '' }}>Anum
                                                        Empire</option>
                                                    <option value="Dulara Business Center"
                                                        {{ $selectedOffice == 'Dulara Business Center' ? 'selected' : '' }}>
                                                        Dulara Business Center</option>
                                                    <option value="Syeda Chamber Gulshan"
                                                        {{ $selectedOffice == 'Syeda Chamber Gulshan' ? 'selected' : '' }}>
                                                        Syeda Chamber Gulshan</option>
                                                    <option value="Autobhan Hyderabad"
                                                        {{ $selectedOffice == 'Autobhan Hyderabad' ? 'selected' : '' }}>
                                                        Autobhan Hyderabad</option>
                                                </select>
                                            </div>
                                        </div>



                                        @php
                                            $selectedStatus = old('status_at_riuman', $candidates->status_at_riuman);
                                        @endphp

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="c-status_at_riuman">Status at Riuman</label>
                                                <select class="form-control" name="status_at_riuman"
                                                    id="c-status_at_riuman"
                                                    aria-describedby="validationstatusatriuman04Feedback">
                                                    <option value="" disabled
                                                        {{ $selectedStatus === null ? 'selected' : '' }}>-Please Select-
                                                    </option>
                                                    <option value="Terminate"
                                                        {{ $selectedStatus == 'Terminate' ? 'selected' : '' }}>Terminate
                                                    </option>
                                                    <option value="Resign"
                                                        {{ $selectedStatus == 'Resign' ? 'selected' : '' }}>Resign</option>
                                                    <option value="Working"
                                                        {{ $selectedStatus == 'Working' ? 'selected' : '' }}>Working
                                                    </option>
                                                    <option value="Not Available"
                                                        {{ $selectedStatus == 'Not Available' ? 'selected' : '' }}>Not
                                                        Available</option>
                                                </select>
                                            </div>
                                        </div>



                                        @php
                                            $selectedReason = old('reason', $candidates->reason);
                                        @endphp

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="reason">Reason</label>
                                                <select class="form-control" name="reason" id="c-reason"
                                                    aria-describedby="validationreason04Feedback">
                                                    <option value="" disabled
                                                        {{ $selectedReason === null ? 'selected' : '' }}>-Please Select-
                                                    </option>
                                                    <option value="Low performance"
                                                        {{ $selectedReason == 'Low performance' ? 'selected' : '' }}>
                                                        Low performance
                                                    </option>
                                                    <option value="Non-Serious"
                                                        {{ $selectedReason == 'Non-Serious' ? 'selected' : '' }}>
                                                        Non-Serious
                                                    </option>
                                                    <option value="Personal Issues"
                                                        {{ $selectedReason == 'Personal Issues' ? 'selected' : '' }}>
                                                        Personal Issues
                                                    </option>
                                                    <option value="Ghost.(left uninformed)"
                                                        {{ $selectedReason == 'Ghost.(left uninformed)' ? 'selected' : '' }}>
                                                        Ghost. (left uninformed)
                                                    </option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="date_of_joining">Date Of Joining</label>
                                                <input type="date" class="form-control" id="c-date_of_joining"
                                                    placeholder="date_of_joining" name="date_of_joining"
                                                    value="{{ $candidates->date_of_joining }}"
                                                    placeholder="Date Of Joining">
                                            </div>
                                        </div>



                                    </div>

                                    <input type="submit" class="btn btn-sm me-2 text-light"
                                        style="background-color:#0e9be2;" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            (function() {
                'use strict'
                var forms = document.querySelectorAll('.needs-validation')
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }
                            form.classList.add('was-validated')
                        }, false)
                    })
            })();
            $("#editForm").on("submit", function(e) {
                e.preventDefault()
                const id = $("#c-id").val();
                const name = $("#c-name").val();
                const cnic_number = $("#c-cnic_number").val();
                const dob = $("#c-dob").val();
                const number = $("#c-number").val();
                const other_number = $("#c-other-number").val();
                const address = $("#c-address").val();
                const lastJob = $("#c-last_job").val();
                const last_post = $("#c-last_post").val();
                const time_from_last_job = $("#c-time_from_last_job").val();
                const time_to_last_job = $("#c-time_to_last_job").val();
                const jobStatus = $("#c-current_status_job").val();
                const last_sallery = $("#c-last_sallery").val();
                const expected_sallery = $("#c-expected_sallery").val();
                const any_archivement = $("#c-any_archivement").val();
                const job_post = $("#c-job_post").val();
                const refrence_by = $("#c-refrenceBy").val();
                const language = $("#c-language").val();
                const office_address = $("#c-office_address").val();
                const status_at_riuman = $("#c-status_at_riuman").val();
                const reason = $("#c-reason").val();
                const date_of_joining = $("#c-date_of_joining").val();
                const data = {
                    _token: '{{ csrf_token() }}',
                    id,
                    name,
                    cnic_number,
                    dob,
                    number,
                    other_number,
                    address,
                    last_job: lastJob,
                    time_from_last_job,
                    time_to_last_job,
                    office_address,
                    current_status_job: jobStatus,
                    last_sallery: last_sallery,
                    expected_sallery: expected_sallery,
                    last_post: last_post,
                    job_post: job_post,
                    any_archivement: any_archivement,
                    status_at_riuman: status_at_riuman,
                    reason: reason,
                    refrence_by: refrence_by == "2" ? $("#validationRefrenceByInput").val() :
                        refrence_by,
                    language,
                    date_of_joining: date_of_joining,
                };
                var isValid = moment(dob).isBefore(moment().subtract(13, "years"));
                if (!isValid) {
                    alert("Candidate Age must be greater the 13 years");
                    return;
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.candidate.update') }}",
                    data: data,
                    success: function(data) {
                        if (data) {
                            location.reload(true);
                        }
                    },
                    error: function(data, textStatus, errorThrown) {
                        console.log(data);

                    },
                });
            });
            $("#c-dob").on("change", function() {
                var value = $(this).val();
                var isValid = moment(value).isBefore(moment().subtract(13, "years"));
                if (isValid) {} else {
                    alert("Candidate Age must be greater the 13 years")
                }
            });
            $('#c-cnic_number').keydown(function() {
                if (event.keyCode == 8 || event.keyCode == 9 ||
                    event.keyCode == 27 || event.keyCode == 13 ||
                    (event.keyCode == 65 && event.ctrlKey === true))
                    return;
                if ((event.keyCode < 48 || event.keyCode > 57))
                    event.preventDefault();

                var length = $(this).val().length;

                if (length == 5 || length == 13)
                    $(this).val($(this).val() + '-');

            });
        });

        // $(document).ready(function() {
        //     $('#employeeShowModalEdit').on('shown.bs.modal', function() {
        //         $('.js-select2-edit').select2({
        //             dropdownParent: $('#employeeShowModalEdit')
        //         });
        //     });
        // });

        $(document).ready(function() {
            $('.js-select2-edit').select2();
            const languagesString = $('#language-data').val();
            const selectedLanguages = languagesString.split(',').map(lang => lang.trim());
            $('#c-language').val(selectedLanguages).trigger('change');
        });
    </script>
@endsection
