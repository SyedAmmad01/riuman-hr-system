<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
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

                                    <input type="hidden" name="id" value="{{ $users->id }}">

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                <label for="Name">Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    value="{{ $users->name }}" onkeydown="return /[a-z]/i.test(event.key)"
                                                    placeholder="Name" name="name">
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                                <label for="Email">Email</label>
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    value="{{ $users->email }}" placeholder="Email" name="email">
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                                <label for="Password">Password</label>
                                                <input type="text"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="password" value="{{ $users->plain_password }}"
                                                    placeholder="Password" name="password">
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                                                <label for="status">Status</label>
                                                <select class="form-control status" name="status" id="status">
                                                    <option value="" disabled
                                                        {{ old('status', $users->status ?? '') === null ? 'selected' : '' }}>
                                                        -Please Select-</option>
                                                    <option value="0"
                                                        {{ old('status', $users->status ?? '') == '0' ? 'selected' : '' }}>
                                                        ACTIVE</option>
                                                    <option value="1"
                                                        {{ old('status', $users->status ?? '') == '1' ? 'selected' : '' }}>
                                                        DEACTIVE</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            </div>
                                        </div>


                                        <div class="col-sm-3">
                                            <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                                                <label for="city">City</label>
                                                <select class="form-control city" name="city" id="city">
                                                    <option value="" disabled
                                                        {{ old('city', $users->city ?? '') === null ? 'selected' : '' }}>
                                                        -Please Select-</option>
                                                    <option value="0"
                                                        {{ old('city', $users->city ?? '') == '0' ? 'selected' : '' }}>HYD
                                                    </option>
                                                    <option value="1"
                                                        {{ old('city', $users->city ?? '') == '1' ? 'selected' : '' }}>KHI
                                                    </option>
                                                    <option value="2"
                                                        {{ old('city', $users->city ?? '') == '2' ? 'selected' : '' }}>ISB
                                                    </option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            </div>
                                        </div>



                                        <div class="col-sm-3">
                                            <div
                                                class="form-group {{ $errors->has('office_address') ? 'has-error' : '' }}">
                                                <label for="office_address">Office Address</label>
                                                <select class="form-control office_address" name="office_address"
                                                    id="office_address">
                                                    <option value="" disabled
                                                        {{ old('office_address', $users->office_address ?? '') === null ? 'selected' : '' }}>
                                                        -Please Select-</option>
                                                    <option value="Fortune Center"
                                                        {{ old('office_address', $users->office_address ?? '') == 'Fortune Center' ? 'selected' : '' }}>
                                                        Fortune Center</option>
                                                    <option value="Anum Estate"
                                                        {{ old('office_address', $users->office_address ?? '') == 'Anum Estate' ? 'selected' : '' }}>
                                                        Anum Estate</option>
                                                    <option value="Anum Empire"
                                                        {{ old('office_address', $users->office_address ?? '') == 'Anum Empire' ? 'selected' : '' }}>
                                                        Anum Empire</option>
                                                    <option value="Dulara Business Center"
                                                        {{ old('office_address', $users->office_address ?? '') == 'Dulara Business Center' ? 'selected' : '' }}>
                                                        Dulara Business Center</option>
                                                    <option value="Syeda Chamber Gulshan"
                                                        {{ old('office_address', $users->office_address ?? '') == 'Syeda Chamber Gulshan' ? 'selected' : '' }}>
                                                        Syeda Chamber Gulshan</option>
                                                    <option value="Autobhan Hyderabad"
                                                        {{ old('office_address', $users->office_address ?? '') == 'Autobhan Hyderabad' ? 'selected' : '' }}>
                                                        Autobhan Hyderabad</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('office_address') }}</span>
                                            </div>
                                        </div>



                                        <div class="col-sm-3">
                                            <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
                                                <label for="Role">Role</label>
                                                <input type="text"
                                                    class="form-control @error('role') is-invalid @enderror"
                                                    id="role" value="{{ $users->role }}" placeholder="Role"
                                                    name="role">
                                                <span class="text-danger">{{ $errors->first('role') }}</span>
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

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#editForm").on("submit", function(e) {
                e.preventDefault();

                const formData = {
                    id: $('input[name="id"]').val(),
                    name: $('#name').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                    status: $('#status').val(),
                    city: $('#city').val(),
                    office_address: $('#office_address').val(),
                    role: $('#role').val(),
                };

                $.ajax({
                    url: '{{ route('admin.user.update') }}', // Adjust route if needed
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        alert('User updated successfully!');
                        // location.reload(); // Or redirect if needed
                         window.location.href = "{{ route('admin.user.index') }}";

                    },
                    error: function(xhr) {
                        alert('Error updating user.');
                        console.log(xhr.responseText);
                    }
                });
            });

        });
    </script>
@endsection
