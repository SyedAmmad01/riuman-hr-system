    @extends('layouts.admin')
    @section('page_title', 'Admin List Users')
    @section('content')
        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Add User</h2>
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
                                    <h4 class="card-title">Add User</h4>
                                    <form class="forms-sample" action="{{ route('admin.user.save') }}"method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                    <label for="Name">Name</label>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="name" value="{{ old('name') }}"
                                                        onkeydown="return /[a-z]/i.test(event.key)" placeholder="Name"
                                                        name="name">
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                                    <label for="Email">Email</label>
                                                    <input type="text"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="email" value="{{ old('email') }}" placeholder="Email"
                                                        name="email">
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                                    <label for="Password">Password</label>
                                                    <input type="text"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password" value="{{ old('password') }}" placeholder="Password"
                                                        name="password">
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                                                    <label for="Status">Status</label>
                                                    <select class="form-control status" name="status" id="status">
                                                        <option value="" selected disabled>-Please Select-</option>
                                                        <option value="0"
                                                            @if (old('status') == '0') {{ 'selected' }} @endif>
                                                            ACTIVE</option>
                                                        <option value="1"
                                                            @if (old('status') == '1') {{ 'selected' }} @endif>
                                                            DEACTIVE</option>
                                                    </select>
                                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                                                    <label for="City">City</label>
                                                    <select class="form-control city" name="city" id="city">
                                                        <option value="" selected disabled>-Please Select-</option>
                                                        <option value="0"
                                                            @if (old('city') == '0') {{ 'selected' }} @endif>
                                                            HYD</option>
                                                        <option value="1"
                                                            @if (old('city') == '1') {{ 'selected' }} @endif>
                                                            KHI</option>
                                                        <option value="2"
                                                            @if (old('city') == '2') {{ 'selected' }} @endif>
                                                            ISB</option>
                                                    </select>
                                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div
                                                    class="form-group {{ $errors->has('office_address') ? 'has-error' : '' }}">
                                                    <label for="Office Address">Office Address</label>
                                                    <select class="form-control office_address" name="office_address"
                                                        id="office_address">
                                                        <option value="" selected disabled>-Please Select-</option>
                                                        <option value="Fortune Center"
                                                            @if (old('office_address') == 'Fortune Center') {{ 'selected' }} @endif>
                                                            Fortune Center</option>
                                                        <option value="Anum Estate"
                                                            @if (old('office_address') == 'Anum Estate') {{ 'selected' }} @endif>
                                                            Anum Estate</option>
                                                        <option value="Anum Empire"
                                                            @if (old('office_address') == 'Anum Empire') {{ 'selected' }} @endif>
                                                            Anum Empire</option>
                                                        <option value="Dulara Business Center"
                                                            @if (old('office_address') == 'Dulara Business Center') {{ 'selected' }} @endif>
                                                            Dulara Business Center</option>
                                                        <option value="Syeda Chamber Gulshan"
                                                            @if (old('office_address') == 'Syeda Chamber Gulshan') {{ 'selected' }} @endif>
                                                            Syeda Chamber Gulshan</option>
                                                        <option value="Autobhan Hyderabad"
                                                            @if (old('office_address') == 'Autobhan Hyderabad') {{ 'selected' }} @endif>
                                                            Autobhan Hyderabad</option>
                                                    </select>
                                                    <span
                                                        class="text-danger">{{ $errors->first('office_address') }}</span>
                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
                                                    <label for="Role">Role</label>
                                                    <input type="text"
                                                        class="form-control @error('role') is-invalid @enderror"
                                                        id="role" value="{{ old('role') }}" placeholder="Role"
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
