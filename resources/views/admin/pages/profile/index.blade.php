@extends('admin.common.master')

<!-- page title -->
@section('title', 'Profile')
<!-- page title -->

<!-- page styles -->
@section('plugin_styles') @stop()
<!-- page styles -->
@section('page_styles') @stop()

<!-- page heading and subheading-->
@section('page_heading', 'Profile') @section('page_subheading', 'Manage Profile')

<!-- previous_page -->
@section('previous_page_url')
<a href="" class="admin-page-title-back">
    <i class="fa fa-long-arrow-left"></i>
</a>
@stop()
<!-- page heading and subheading-->

<!-- breadcrumbs -->
@section('breadcrumbs')
<a class="breadcrumb-item" href="{{url('/')}}">Dashboard</a>
<span class="breadcrumb-item active">Profile</span>
@stop()
<!-- breadcrumbs -->

<!-- page content -->
@section('page_content')
<section id="add-location-page">
    <div class="box" id="box">
        <div class="box-inner">
            <div class="box-title">
                <h2>Edit Profile</h2>
            </div>
            <!-- /.box-title -->
            <div class="row">
                <div class="col">
                    <h3>Update Basic Details</h3>
                    <hr>
                    <form action="" method="POST" class="form" enctype="multipart/form-data">
                        @method('PUT') @csrf
                        <div class="form-group">
                            <label for="name" class="control-label">Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" required name="name" value="{{Auth::guard('admin')->user()->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="place_id" class="control-label">Email
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" disabled required="" name="email" class="form-control" value="{{Auth::guard('admin')->user()->email}}">
                        </div>
                        <div class="form-group">
                            <label for="image" class="control-label">Profile Picture
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" required name="image" class="form-control">
                            <br>
                            <br>
                            <img src="{{Auth::guard('admin')->user()->profile_picture}}" alt="Profile Picture" class="img img-responsive d-block mx-auto">
                        </div>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                </div>
                <div class="col">
                    <h3>Update Password</h3>
                    <hr> @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error) 
                        <!--  -->
                        {{$error}}
                        <!--  -->
                        @endforeach
                    </div>
                    @endif
                    <form action="{{url('admin/profile/password')}}" method="POST" class="form">
                        @method('PUT') @csrf
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="control-label">Re-enter Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.box-inner -->
        <div class="location-images">

        </div>
        <input type="hidden" name="_token" value="Y7W2MAEZnKNrHmdnXQ8V910m3DX5yRiDh8kOZRni">
    </div>
</section>
@stop()
<!-- page content -->

<!-- page scripts -->
@section('page_scripts')
<!-- page scripts go here -->
@stop()