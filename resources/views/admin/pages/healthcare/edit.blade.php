@extends('admin.common.master')

<!-- page title -->
@section('title', 'Edit Healthcare')
<!-- page title -->

<!-- page styles -->
@section('plugin_styles')
<!-- page styles -->
@section('page_styles') @stop()

<!-- page heading and subheading-->
@section('page_heading', $location->name) @section('page_subheading', 'Edit Healthcare')

<!-- previous_page -->
@section('previous_page_url')
<a href="{{url('admin/healthcare')}}" class="admin-page-title-back">
    <i class="fa fa-long-arrow-left"></i>
</a>
@stop()
<!-- page heading and subheading-->

<!-- breadcrumbs -->
@section('breadcrumbs')
<a class="breadcrumb-item" href="{{url('admin')}}">Dashboard</a>
<a class="breadcrumb-item" href="{{url('admin/healthcare')}}">Healthcare</a>
<span class="breadcrumb-item active">Edit</span>
@stop()
<!-- breadcrumbs -->

<!-- page content -->
@section('page_content')
<section id="edit-university">
    <div class="box" id="box">
        <form action="{{url('admin/healthcare')}}" method="POST" class="form">
            @method('PUT')
            <!--  -->
            @csrf
            <div class="box-inner">
                <div class="box-title">
                    <h2>Edit {{$location->name}}</h2>
                </div>
                <!-- /.box-title -->
                <div class="row">
                    <div class="col">
                        <h6 class="page-title-small mb30">Basic Info</h6>
                        <div class="form-group">
                            <label for="place_id" class="control-label">Place ID
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" readonly required name="place_id" id="place_id" class="form-control" value="{{$location->place_id}}">
                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label">Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="name" value="{{$location->name}}" required id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label">Address
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="address" required value="{{$location->address}}" id="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="type" class="control-label">Type
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" disabled class="form-control" value="{{ucfirst($location->type)}}">
                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label">Description
                                <span class="text-danger">*</span>
                            </label>
                            <textarea type="text" required rows="5" name="description" id="description" class="form-control">{{$location->description}}</textarea>
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="page-title-small mb30">Additional Information</h6>
                        <div class="form-group">
                            <label for="website" class="control-label">Website</label>
                            <input type="url" value="{{$healthcare->website}}" name="website" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label">Phone</label>
                            <input type="text" name="phone" value="{{$healthcare->phone}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" name="email" value="{{$healthcare->email}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="facility_type" class="control-label">Facility Type</label>
                            {{Form::select('facility_type', [''=>'Please Select','Hospital' => 'Hospital', 'Healthcare Center' => 'Healthcare Center',
                            'Nursing Home' => 'Nursing Home', 'Pharmacy' => 'Pharmacy', 'Mediccal Laboratory' => 'Medical
                            Laboratory'], $healthcare->facility_type,['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h6 class="page-title-small mb30">
                            Department Details
                        </h6>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Available Time</th>
                                    <th class="min-width">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="department_detail_body">
                                @foreach($healthcare_facility_details as $index => $healthcare_facility_detail)
                                <tr id="department_detail_{{$index}}">
                                    <td>
                                        <input placeholder="e.g. Emergency" value="{{$healthcare_facility_detail->name}}" type="text" required name="department_detail[{{$index}}][name]" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="department_detail[{{$index}}][phone]" value="{{$healthcare_facility_detail->phone}}" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" placeholder="e.g. 24 Hours" value="{{$healthcare_facility_detail->available_time}}" name="department_detail[{{$index}}][available_time]" class="form-control"
                                            required>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger text-center delete-department-detail" data-target="#department_detail_{{$index}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <p class="text-center">
                            <br>
                            <br>
                            <button class="btn btn-warning add-department-detail" type="button">Insert Row</button>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <!-- /.box-inner -->
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
            <input type="hidden" name="id" value="{{$healthcare->id}}">
        </form>
    </div>
</section>
<!--  -->
@stop()
<!-- page content -->

<!-- page scripts -->
@section('page_scripts')
<script>
    var departmentDetails = "{{$healthcare_facility_details->count()+1}}";
</script>
<script src="{{asset('js/edit-healthcare.js')}}"></script>
<!-- page scripts go here -->
@stop()