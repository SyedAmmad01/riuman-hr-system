<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />






<div class="modal fade bd-example-modal-lg" id="employeeShowModal" tabindex="-1" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            {{-- action="{{ route('user.candidate.save') }}" method="post" --}}
            <form class="needs-validation" id="addForm" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add Candidate</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="validationName">Candidate Name</label>
                                <input type="text" class="form-control" id="validationName" placeholder="Name"
                                    name="name" required>
                                <span class="text-danger invalid-feedback">Candidate Name is Required<span>
                            </div>
                            <div class="mb-3">
                                <label for="validationCnic">Candidate Cnic</label>
                                <input type="phone" class="form-control" id="validationCnic" maxlength="15"
                                    placeholder="Cnic" name="cnic_number" required>
                                <span class="text-danger invalid-feedback">Candidate Cnic is Required<span>
                            </div>

                            <div class="mb-3">
                                <label for="validationDOB">Candidate Date Of Birth</label>
                                <input type="date" class="form-control" id="validationDOB" placeholder="DOB"
                                    name="dob" required>
                                <span class="text-danger  invalid-feedback">Candidate Date Of Birth is Required</span>
                            </div>
                            <div class="mb-3">
                                <label for="validationNumber">Candidate Number</label>
                                <input type="phone" class="form-control" id="validationNumber"
                                    placeholder="Candidate number" name="number" maxlength="11" required>
                                <span class="text-danger invalid-feedback">Candidate Number is Required<span>
                            </div>

                            <div class="mb-3">
                                <label for="validationNumber">Candidate Other Number</label>
                                <input type="phone" class="form-control" id="validationOtherNumber"
                                    placeholder="Candidate number" name="other_number" maxlength="11" required>
                                <span class="text-danger invalid-feedback">Candidate Other Number is Required<span>
                            </div>

                            <div class="mb-3">
                                <label for="validationAddress">Candidate Address</label>
                                <input type="text" class="form-control" id="validationAddress"
                                    placeholder="Candidate Address" name="address" required>
                                <span class="text-danger invalid-feedback">Candidate Number is Required<span>
                            </div>
                            <div class="mb-3">
                                <label for="last Job">Last Job</label>
                                <input type="text" class="form-control" id="LastJob" placeholder="Last Job"
                                    name="last_job">
                                {{-- <span class="text-danger invalid-feedback">Last </span> --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 ">
                                <label for="Last Post">Last Post</label>
                                <input type="text" class="form-control " id="last_post" placeholder="Last Post"
                                    name="last_post">
                                {{-- <span class="text-danger">{{ $errors->first('last_post') }}</span> --}}
                            </div>
                            <div class="mb-3">
                                <label for="Time From Last Job">Time From Last Job</label>
                                <input type="text" class="form-control" id="time_from_last_job"
                                    placeholder="Time From Last Job" name="time_from_last_job">
                                {{-- <span class="text-danger">{{ $errors->first('time_from_last_job') }}</span> --}}
                            </div>
                            <div class="mb-3">
                                <label for="validationJobStatus">Current Status Job</label>
                                <select class="form-control " name="current_status_job" id="validationJobStatus"
                                    aria-describedby="validationJobStatus04Feedback" required>
                                    <option value="" selected disabled>-Select-</option>
                                    <option value="1">
                                        Yes</option>
                                    <option value="0">
                                        No</option>
                                </select>
                                {{-- <span id="validationJobStatus04Feedback" class="text-danger ">Job Status ie Required</span> --}}
                            </div>
                            <div class="mb-3">
                                <label for="Last Sallery">Last Sallery</label>
                                <input type="number" class="form-control" id="last_sallery"
                                    placeholder="Last Sallery" name="last_sallery">
                                {{-- <span class="text-danger">{{ $errors->first('last_sallery') }}</span> --}}
                            </div>
                            <div class="mb-3">
                                <label for="validationExpectedSallery">Expected Sallery</label>
                                <input type="number" class="form-control" id="validationExpectedSallery"
                                    placeholder="Expected Sallery" name="expected_sallery" required>
                                <span class="text-danger invalid-feedback">Expected Sallery is Required</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 ">
                                <label for="Any Archivement">Any Archivement</label>
                                <input type="text" class="form-control " id="any_archivement"
                                    placeholder="Any Archivement" name="any_archivement">
                                {{-- <span class="text-danger">{{ $errors->first('any_archivement') }}</span> --}}
                            </div>
                            <div class="mb-3">
                                <label for="validationPostJob">Job Post</label>
                                <input type="text" class="form-control " id="validationPostJob"
                                    placeholder="Job Post" name="job_post" required>
                                <span class="text-danger invalid-feedback">Job Post is Required</span>
                            </div>
                            <div class="mb-3" id="refrenceByInput" style="display: none">
                                <label for="validationRefrenceByInput">Refrence By</label>
                                <i class="fa fa-trash-o" style="cursor: pointer" id="inputDelete"></i>
                                <input type="text" class="form-control " id="validationRefrenceByInput"
                                    placeholder="Refrence By" name="refrence_by" required>
                                <span class="text-danger invalid-feedback">Refrence is Required</span>
                            </div>
                            <div class="mb-3" id="refrenceByBox">
                                <label for="validationRefrence_by">Refrence By</label>
                                <select class="form-control valid" name="refrence_by" id="validationRefrence_by"
                                    aria-describedby="validationRefrence_by04Feedback" required
                                    id="validationRefrence_by">
                                    <option value="" selected disabled>-Select-</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Friends/Relatives">Friends/Relatives</option>
                                    <option value="2">Others</option>
                                </select>
                                {{-- <span class="text-danger">{{ $errors->first('refrence_by') }}</span> --}}
                            </div>

                            <div class="mb-3">
                                <label for="validationLanguage">Language</label>
                                {{-- <select class="form-control valid" name="language" id="validationLanguage"
                                    aria-describedby="validationLanguage04Feedback" required> --}}
                                <select class="js-example-basic-multiple" name="language[]"
                                    id="validationLanguage" aria-describedby="validationLanguage04Feedback" multiple="multiple" width="1000px;">
                                    <option value="" selected disabled>-Please Select-</option>
                                    <option value="English Beginner">English (Beginner)</option>
                                    <option value="English Intermediate">English (Intermediate)</option>
                                    <option value="English Fluent">English (Fluent)</option>
                                    <option value="Arabic Beginner">Arabic (Beginner)</option>
                                    <option value="Arabic Intermediate">Arabic (Intermediate)</option>
                                    <option value="Arabic Fluent">Arabic (Fluent)</option>
                                    <option value="Urdu Beginner">Urdu (Beginner)</option>
                                    <option value="Urdu Intermediate">Urdu (Intermediate)</option>
                                    <option value="Urdu Fluent">Urdu (Fluent)</option>
                                </select>
                                {{-- <span class="text-danger">{{ $errors->first('language') }}</span> --}}
                            </div>




                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn text-light" style="background-color:#0e9be2;">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>


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

            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });


            // $("#addForm").on("submit", function(e) {
            //     e.preventDefault()
            //     const name = $("#validationName").val();
            //     const cnic_number = $("#validationCnic").val();
            //     const dob = $("#validationDOB").val();
            //     const number = $("#validationNumber").val();
            //     const address = $("#validationAddress").val();
            //     const lastJob = $("#LastJob").val();
            //     const last_post = $("#last_post").val();
            //     const time_from_last_job = $("#time_from_last_job").val();
            //     const time_to_last_job = $("#time_to_last_job").val();
            //     const jobStatus = $("#validationJobStatus").val();
            //     const last_sallery = $("#last_sallery").val();
            //     const expected_sallery = $("#validationExpectedSallery").val();
            //     const any_archivement = $("#any_archivement").val();
            //     const job_post = $("#validationPostJob").val();
            //     const refrence_by = $("#validationRefrence_by").val();
            //     const language = $("#validationLanguage").val();
            //     const data = {
            //         _token: '{{ csrf_token() }}',
            //         name,
            //         cnic_number,
            //         dob,
            //         number,
            //         address,
            //         last_job: lastJob,
            //         time_from_last_job,
            //         time_to_last_job,
            //         current_status_job: jobStatus,
            //         last_sallery: last_sallery,
            //         expected_sallery: expected_sallery,
            //         last_post: last_post,
            //         job_post: job_post,
            //         any_archivement: any_archivement,
            //         refrence_by: refrence_by == "2" ? $("#validationRefrenceByInput").val() :
            //             refrence_by,
            //         language
            //     };
            //     var isValid = moment(dob).isBefore(moment().subtract(13, "years"));
            //     if (!isValid) {
            //         alert("Candidate Age must be greater the 13 years");
            //         return;
            //     }

            //     $.ajax({
            //         type: "POST",
            //         url: "{{ route('user.candidate.save') }}",
            //         data: data,
            //         success: function(data) {
            //             // console.log(data);
            //             if (data) {
            //                 location.reload(true);
            //             }
            //         },
            //         error: function(data, textStatus, errorThrown) {
            //             console.log(data);

            //         },
            //     });
            // });


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
                    refrence_by: refrence_by == "2" ? $("#validationRefrenceByInput").val() :
                        refrence_by,
                    language
                };

                // AJAX request
                $.ajax({
                    type: "POST",
                    url: "{{ route('user.candidate.save') }}",
                    data: data,
                    success: function(response) {
                        if (response) {
                            alert("Candidate saved successfully.");
                            location.reload(true);
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
            })
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
        })
    </script>
@endsection
