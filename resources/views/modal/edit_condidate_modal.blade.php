<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>


<div class="modal fade bd-example-modal-lg" id="employeeShowModalEdit" tabindex="-1" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Candidate</h5>
                <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" id="editForm" novalidate>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="hidden" name="candidate_id" value="1">
                            <input type="hidden" name="id" id="c-id">

                            <div class="mb-3">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="c-name" value="{{ old('name') }}"
                                    placeholder="Name" name="name">
                            </div>

                            <div class="mb-3">
                                <label for="Cnic Number">Cnic Number</label>
                                <input type="phone" class="form-control" id="c-cnic_number" maxlength="15"
                                    value="{{ old('cnic_number') }}" placeholder="Cnic Number" name="cnic_number">
                            </div>

                            <div class="mb-3">
                                <label for="DOB">DOB</label>
                                <input type="date" class="form-control" id="c-dob" value="{{ old('dob') }}"
                                    placeholder="DOB" name="dob">
                            </div>

                            <div class="mb-3 ">
                                <label for="Number">Number</label>
                                <input type="phone" class="form-control" id="c-number" value="{{ old('number') }}"
                                    placeholder="Number" name="number" maxlength="11">
                            </div>

                            <div class="mb-3">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="c-address" value="{{ old('address') }}"
                                    placeholder="address" name="address" maxlength="11">
                            </div>

                            <div class="mb-3">
                                <label for="Last Job">Last Job</label>
                                <input type="text" class="form-control" id="c-last_job" value="{{ old('last_job') }}"
                                    placeholder="Last Job" name="last_job">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="Last Post">Last Post</label>
                                <input type="text" class="form-control" id="c-last_post"
                                    value="{{ old('last_post') }}" placeholder="Last Post" name="last_post">
                            </div>

                            <div class="mb-3">
                                <label for="Time From Last Job">Time From Last Job</label>
                                <input type="date" class="form-control" id="c-time_from_last_job"
                                    value="{{ old('time_from_last_job') }}" placeholder="Time From Last Job"
                                    name="time_from_last_job">
                            </div>

                            <div class="mb-3">
                                <label for="Time To Last Job">Time To Last Job</label>
                                <input type="date" class="form-control" id="c-time_to_last_job"
                                    value="{{ old('time_to_last_job') }}" placeholder="Time To Last Job"
                                    name="time_to_last_job">
                            </div>


                            <div class="mb-3">
                                <label for="Current Status Job">Current Status Job</label>
                                <select class="form-control valid" name="current_status_job" aria-invalid="false"
                                    id="c-current_status_job">
                                    <option value="" selected disabled>-Select-</option>
                                    <option value="1"
                                        @if (old('current_status_job') == '1') {{ 'selected' }} @endif>Yes</option>
                                    <option value="0"
                                        @if (old('current_status_job') == '0') {{ 'selected' }} @endif>No</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="Last Sallery">Last Sallery</label>
                                <input type="number" class="form-control" id="c-last_sallery"
                                    value="{{ old('last_sallery') }}" placeholder="Last Sallery"
                                    name="last_sallery">
                            </div>



                            <div class="mb-3">
                                <label for="Expected Sallery">Expected Sallery</label>
                                <input type="number" class="form-control" id="c-expected_sallery"
                                    value="{{ old('expected_sallery') }}" placeholder="Expected Sallery"
                                    name="expected_sallery">
                            </div>


                        </div>
                        <div class="col-md-4">

                            <div class="mb-3">
                                <label for="Job Post">Job Post</label>
                                <input type="text" class="form-control" id="c-job_post"
                                    value="{{ old('job_post') }}" placeholder="Job Post" name="job_post">
                            </div>



                            <div class="mb-3">
                                <label for="Any Archivement">Any Archivement</label>
                                <input type="text" class="form-control" id="c-any_archivement"
                                    value="{{ old('any_archivement') }}" placeholder="Any Archivement"
                                    name="any_archivement">
                            </div>



                            <div class="mb-3" id="refrenceByBox">
                                <label for="c-refrenceBy">Refrence By</label>
                                <select class="form-control valid" name="c-refrenceBy" id="c-refrenceBy"
                                    aria-describedby="c-refrenceBy04Feedback" required>
                                    <option value="" selected disabled>-Select-</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Friends/Relatives">Friends/Relatives</option>
                                    <option value="2">Others</option>
                                </select>
                                {{-- <span class="text-danger">{{ $errors->first('refrence_by') }}</span> --}}
                            </div>
                            <div class="mb-3">
                                <label for="c-language">Language</label>
                                <select class="form-control valid" name="language" id="c-language"
                                    aria-describedby="c-language04Feedback" required>
                                    <option value="" selected disabled>-Select-</option>
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
                    <button type="button" class="btn btn-secondary close_modal" data-dismiss="modal">Close</button>
                    <button type="submit" id="submit" class="btn text-light"
                        style="background-color:#0e9be2;">Update</button>
                </div>
        </div>
        </form>
    </div>
</div>

{{-- @section('page-scripts') --}}
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
            const data = {
                _token: '{{ csrf_token() }}',
                id,
                name,
                cnic_number,
                dob,
                number,
                address,
                last_job: lastJob,
                time_from_last_job,
                time_to_last_job,
                current_status_job: jobStatus,
                last_sallery: last_sallery,
                expected_sallery: expected_sallery,
                last_post: last_post,
                job_post: job_post,
                any_archivement: any_archivement,
                refrence_by: refrence_by == "2" ? $("#validationRefrenceByInput").val() :
                    refrence_by,
                language
            };
            var isValid = moment(dob).isBefore(moment().subtract(13, "years"));
            if (!isValid) {
                alert("Candidate Age must be greater the 13 years");
                return;
            }

            $.ajax({
                type: "PUT",
                url: "{{ route('user.candidate.update') }}",
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
</script>
{{-- @endsection --}}
