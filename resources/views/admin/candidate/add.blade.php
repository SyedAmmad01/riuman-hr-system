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
                        <h2>Add Candidate</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                        class="icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active"></li>
                        </ul>
                        <a href="{{ route('admin.candidate.index') }}" class="btn btn-sm text-light"
                            style="background-color:#0e9be2;">Manage Candidate</a>
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
                                    <h4 class="card-title">Add Candidate</h4>
                                    <form class="needs-validation" id="addForm" novalidate>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="validationName">Candidate Name</label>
                                                    <input type="text" class="form-control" id="validationName"
                                                        placeholder="Name" name="name" required>
                                                    <span class="text-danger invalid-feedback">Candidate Name is
                                                        Required<span>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="validationCnic">Candidate Cnic</label>
                                                    <input type="phone" class="form-control" id="validationCnic"
                                                        maxlength="15" placeholder="Cnic" name="cnic_number" required>
                                                    <span class="text-danger invalid-feedback">Candidate Cnic is
                                                        Required<span>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="validationDOB">Candidate Date Of Birth</label>
                                                    <input type="date" class="form-control" id="validationDOB"
                                                        placeholder="DOB" name="dob" required>
                                                    <span class="text-danger  invalid-feedback">Candidate Date Of Birth is
                                                        Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="validationNumber">Candidate Number</label>
                                                    <input type="phone" class="form-control" id="validationNumber"
                                                        placeholder="Candidate number" name="number" maxlength="11"
                                                        required>
                                                    <span class="text-danger invalid-feedback">Candidate Number is
                                                        Required<span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="validationNumber">Candidate Other Number</label>
                                                    <input type="phone" class="form-control" id="validationOtherNumber"
                                                        placeholder="Candidate number" name="other_number" maxlength="11"
                                                        required>
                                                    <span class="text-danger invalid-feedback">Candidate Other Number is
                                                        Required<span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="validationAddress">Candidate Address</label>
                                                    <input type="text" class="form-control" id="validationAddress"
                                                        placeholder="Candidate Address" name="address" required>
                                                    <span class="text-danger invalid-feedback">Candidate Number is
                                                        Required<span>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="last Job">Last Job</label>
                                                    <input type="text" class="form-control" id="LastJob"
                                                        placeholder="Last Job" name="last_job">
                                                    <span class="text-danger invalid-feedback">Last Job is Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="Last Post">Last Post</label>
                                                    <input type="text" class="form-control " id="last_post"
                                                        placeholder="Last Post" name="last_post">
                                                    <span class="text-danger invalid-feedback">Last Post is Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="Time From Last Job">Time From Last Job</label>
                                                    <input type="text" class="form-control" id="time_from_last_job"
                                                        placeholder="Time From Last Job" name="time_from_last_job">
                                                    <span class="text-danger invalid-feedback">Time From Last Job is
                                                        Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="validationJobStatus">Current Status Job</label>
                                                    <select class="form-control " name="current_status_job"
                                                        id="validationJobStatus"
                                                        aria-describedby="validationJobStatus04Feedback" required>
                                                        <option value="" selected disabled>-Select-</option>
                                                        <option value="1">
                                                            Yes</option>
                                                        <option value="0">
                                                            No</option>
                                                    </select>
                                                    <span id="validationJobStatus04Feedback"
                                                        class="text-danger invalid-feedback">Job Status is Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="Last Salary">Last Salary</label>
                                                    <input type="number" class="form-control" id="last_sallery"
                                                        placeholder="Last Salary" name="last_sallery">
                                                    <span class="text-danger invalid-feedback">Last Salary is
                                                        Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="validationExpectedSalary">Expected Salary</label>
                                                    <input type="number" class="form-control"
                                                        id="validationExpectedSallery" placeholder="Expected Salary"
                                                        name="expected_sallery" required>
                                                    <span class="text-danger invalid-feedback">Expected Salary is
                                                        Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="Any Archivement">Any Archivement</label>
                                                    <input type="text" class="form-control " id="any_archivement"
                                                        placeholder="Any Archivement" name="any_archivement">
                                                    <span class="text-danger invalid-feedback">Any Archivement is
                                                        Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="validationPostJob">Job Post</label>
                                                    <input type="text" class="form-control " id="validationPostJob"
                                                        placeholder="Job Post" name="job_post" required>
                                                    <span class="text-danger invalid-feedback">Job Post is Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="mb-3" id="refrenceByInput" style="display: none">
                                                    <label for="validationRefrenceByInput">Refrence By</label>
                                                    <i class="fa fa-trash-o" style="cursor: pointer"
                                                        id="inputDelete"></i>
                                                    <input type="text" class="form-control "
                                                        id="validationRefrenceByInput" placeholder="Refrence By"
                                                        name="refrence_by" required>
                                                    <span class="text-danger invalid-feedback">Refrence is Required</span>
                                                </div>
                                                <div class="mb-3" id="refrenceByBox">
                                                    <label for="validationRefrence_by">Refrence By</label>
                                                    <select class="form-control valid" name="refrence_by"
                                                        id="validationRefrence_by"
                                                        aria-describedby="validationRefrence_by04Feedback" required
                                                        id="validationRefrence_by">
                                                        <option value="" selected disabled>-Select-</option>
                                                        <option value="Social Media">Social Media</option>
                                                        <option value="Friends/Relatives">Friends/Relatives</option>
                                                        <option value="2">Others</option>
                                                    </select>
                                                    <span class="text-danger invalid-feedback">Refrence is Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="validationLanguage">Language</label>
                                                    <select class="js-example-basic-multiple" name="language[]"
                                                        id="validationLanguage"
                                                        aria-describedby="validationLanguage04Feedback"
                                                        multiple="multiple" width="1000px;">
                                                        <option value="" selected disabled>-Please Select-</option>
                                                        <option value="English Beginner">English (Beginner)</option>
                                                        <option value="English Intermediate">English (Intermediate)
                                                        </option>
                                                        <option value="English Fluent">English (Fluent)</option>
                                                        <option value="Arabic Beginner">Arabic (Beginner)</option>
                                                        <option value="Arabic Intermediate">Arabic (Intermediate)</option>
                                                        <option value="Arabic Fluent">Arabic (Fluent)</option>
                                                        <option value="Urdu Beginner">Urdu (Beginner)</option>
                                                        <option value="Urdu Intermediate">Urdu (Intermediate)</option>
                                                        <option value="Urdu Fluent">Urdu (Fluent)</option>
                                                    </select>
                                                    <span class="text-danger invalid-feedback">Language is Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="Office Address">Office Address</label>
                                                    <select class="form-control" name="office_address"
                                                        id="validationOffice_address"
                                                        aria-describedby="validationOfficeaddress04Feedback">
                                                        <option value="" selected disabled>-Please Select-</option>
                                                        <option value="Fortune Center">Fortune Center</option>
                                                        <option value="Anum Estate">Anum Estate</option>
                                                        <option value="Anum Empire">Anum Empire</option>
                                                        <option value="Dulara Business Center">Dulara Business Center
                                                        </option>
                                                        <option value="Syeda Chamber Gulshan">Syeda Chamber Gulshan
                                                        </option>
                                                        <option value="Autobhan Hyderabad">Autobhan Hyderabad</option>
                                                    </select>
                                                    <span class="text-danger invalid-feedback">Office Address is
                                                        Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="Status at Riuman">Status at Riuman</label>
                                                    <select class="form-control status_at_riuman" name="status_at_riuman"
                                                        id="validationstatusatriuman"
                                                        aria-describedby="validationstatusatriuman04Feedback">
                                                        <option value="" selected disabled>-Please Select-</option>
                                                        <option value="Terminate">Terminate</option>
                                                        <option value="Resign">Resign</option>
                                                        <option value="Working">Working</option>
                                                        <option value="Not Available">Not Available</option>
                                                    </select>
                                                    <span class="text-danger invalid-feedback">Status at Riuman is
                                                        Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="Reason">Reason</label>
                                                    <select class="form-control" name="reason" id="validationreason"
                                                        aria-describedby="validationreason04Feedback">
                                                        <option value="" selected disabled>-Please Select-</option>
                                                        <option value="Low performance">Low performance</option>
                                                        <option value="Non-Serious">Non-Serious</option>
                                                        <option value="Personal Issues">Personal Issues</option>
                                                        <option value="Ghost.(left uninformed)">Ghost.(left uninformed)
                                                        </option>
                                                    </select>
                                                    <span class="text-danger invalid-feedback">Reason is Required</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="date_of_joining">Date Of Joining</label>
                                                    <input type="date" class="form-control" id="date_of_joining"
                                                        placeholder="Date Of Joining" name="date_of_joining" required>
                                                    <span class="text-danger invalid-feedback">Date Of Joining is
                                                        Required</span>
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
            var isOther = false;
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



                $("#addForm").on("submit", function(e) {
                    e.preventDefault();

                    // Collect values
                    const name = $("#validationName").val();
                    const cnic_number = $("#validationCnic").val();
                    const dob = $("#validationDOB").val();
                    const number = $("#validationNumber").val();
                    const other_number = $("#validationOtherNumber").val();
                    const address = $("#validationAddress").val();
                    const lastJob = $("#LastJob").val();
                    const last_post = $("#last_post").val();
                    const time_from_last_job = $("#time_from_last_job").val();
                    const time_to_last_job = $("#time_to_last_job").val();
                    const jobStatus = $("#validationJobStatus").val();
                    const last_sallery = $("#last_sallery").val();
                    const expected_sallery = $("#validationExpectedSallery").val();
                    const any_archivement = $("#any_archivement").val();
                    const job_post = $("#validationPostJob").val();
                    const refrence_by = $("#validationRefrence_by").val();
                    const language = $("#validationLanguage").val();
                    const office_address = $("#validationOffice_address").val();
                    const status_at_riuman = $("#validationstatusatriuman").val();
                    const reason = $("#validationreason").val();
                    const date_of_joining = $("#date_of_joining").val();

                    // Validate age > 13 years
                    const isValid = moment(dob).isBefore(moment().subtract(13, "years"));
                    if (!isValid) {
                        alert("Candidate Age must be greater than 13 years");
                        return;
                    }

                    // Get CSRF token from meta tag
                    const token = $('meta[name="csrf-token"]').attr("content");

                    // Prepare data
                    const data = {
                        _token: token,
                        name,
                        cnic_number,
                        dob,
                        number,
                        other_number,
                        address,
                        last_job: lastJob,
                        time_from_last_job,
                        time_to_last_job,
                        current_status_job: jobStatus,
                        last_sallery,
                        expected_sallery,
                        last_post,
                        job_post,
                        any_archivement,
                        office_address,
                        status_at_riuman,
                        reason,
                        refrence_by: refrence_by == "2" ? $("#validationRefrenceByInput").val() :
                            refrence_by,
                        language,
                        date_of_joining
                    };

                    // AJAX request
                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin.candidate.save') }}",
                        data: data,
                        success: function(response) {
                            if (response) {
                                alert("Candidate saved successfully.");
                                // location.reload(true);
                               window.location.href = "/admin/candidate/index";

                            }
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            console.error("Error occurred:", xhr.responseText);
                            alert("An error occurred while submitting the form.");
                        },
                    });
                });






                $("#validationRefrence_by").on("change", function(e) {
                    var value = $(this).val();
                    if (value === '2') {
                        $("#refrenceByInput").css("display", "block");

                    } else {
                        $("#refrenceByInput").css("display", "none");

                    }
                });





                $("#inputDelete").on("click", function() {
                    $("#validationRefrence_by").val('')
                    $("#refrenceByBox").css("display", "block");
                    $("#refrenceByInput").css("display", "none");
                });
                $("#validationDOB").on("change", function() {
                    var value = $(this).val();
                    var isValid = moment(value).isBefore(moment().subtract(13, "years"));
                    if (isValid) {} else {
                        alert("Candidate Age must be greater the 13 years")
                    }
                });
                $('#validationCnic').keydown(function() {
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

            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });


            $(".status_at_riuman").on("change", function(e) {
                var value = $(this).val();
                if (value === 'Terminate' || value === 'Resign') {
                    $("#validationreason").css("display", "block");
                } else if (value === 'Working') {
                    $("#validationreason").css("display", "none");
                    $("#date_of_joining").css("display", "block");
                } else if (value === 'Not Available') {
                    $("#date_of_joining").css("display", "none");
                }
            });
        </script>
    @endsection
