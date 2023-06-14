@extends('layouts.admin')
@section('page_title' , 'Admin Dashboard')
@section('content')
    <style>
        a{
            /* text-decoration: none; */
            color: white;
        }
    </style>

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2 style="margin-left:80%;">Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-12">
                    <div class="row clearfix">

                        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                            <div class="card tasks_report" style="background-color: #0e9be2;">
                                <div class="body" style="color: white;">Total Users<h2>{{ $users }}</h2>
                                    <h6 class="m-t-20" style="color: white;"><a href="{{route('admin.user.index')}}">View Details</a></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                            <div class="card tasks_report" style="background-color: #0e9be2;">
                                <div class="body" style="color: white;">Total Candidates<h2>{{ $candidates }}</h2>
                                    <h6 class="m-t-20" style="color: white;"><a href="{{route('admin.candidate.index')}}">View Details</a></h6>
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
