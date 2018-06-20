@extends('admin.common.master')

<!-- page title -->
@section('title', 'Admins')
<!-- page title -->

<!-- page styles -->
@section('plugin_styles') @stop()
<!-- page styles -->
@section('page_styles') @stop()

<!-- page heading and subheading-->
@section('page_heading', 'Admins') @section('page_subheading', 'Add | View')

<!-- previous_page -->
@section('previous_page_url')
<a href="{{url('admin')}}" class="admin-page-title-back">
    <i class="fa fa-long-arrow-left"></i>
</a>
@stop()
<!-- page heading and subheading-->

<!-- breadcrumbs -->
@section('breadcrumbs')
<a class="breadcrumb-item" href="{{url('admin')}}">Dashboard</a>
<span class="breadcrumb-item active">Admins</span>
@stop()
<!-- breadcrumbs -->

<!-- page content -->
@section('page_content')
<div class="row">
    <div class="col-md-4">
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <!--  -->
            {{$error}}
            <!--  -->
            @endforeach
        </div>
        @endif
        <form action="" class="form" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Name
                    <span class="text-danger">*</span>
                </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Email:
                    <span class="text-danger">*</span>
                </label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Password
                    <span class="text-danger">*</span>
                </label>
                <input type="password" name="password" class="form-control">
            </div>
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
    <div class="col-md-8">
        <div class="table-wrapper">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th class="min-width"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>
                            @if($admin->id != Auth::guard('admin')->user()->id)
                            <form method="POST" action="" class="delete-form">
                                @method('DELETE')
                                <!--  -->
                                @csrf
                                <input type="hidden" name="id" value="{{$admin->id}}">
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop()
<!-- page content -->

<!-- page scripts -->
@section('page_scripts')
<script>
    $('form.delete-form').submit(function () {
        return confirm("Are you sure?");
    });
</script>
<!-- page scripts go here -->
@stop()