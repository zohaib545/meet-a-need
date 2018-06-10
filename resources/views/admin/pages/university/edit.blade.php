@extends('admin.common.master')

<!-- page title -->
@section('title', 'Edit University')
<!-- page title -->

<!-- page styles -->
@section('plugin_styles')
<link rel="stylesheet" href="{{asset('assets/libraries/bootstrap-tagsinput-latest/dist/bootstrap-tagsinput.css')}}"> @stop()
<!-- page styles -->
@section('page_styles') @stop()

<!-- page heading and subheading-->
@section('page_heading', $location->name) @section('page_subheading', 'Edit University')

<!-- previous_page -->
@section('previous_page_url')
<a href="{{url('admin/university')}}" class="admin-page-title-back">
    <i class="fa fa-long-arrow-left"></i>
</a>
@stop()
<!-- page heading and subheading-->

<!-- breadcrumbs -->
@section('breadcrumbs')
<a class="breadcrumb-item" href="{{url('admin')}}">Dashboard</a>
<a class="breadcrumb-item" href="{{url('admin/university')}}">University</a>
<span class="breadcrumb-item active">Edit</span>
@stop()
<!-- breadcrumbs -->

<!-- page content -->
@section('page_content')
<section id="edit-university">
    <div class="box" id="box">
        <form action="{{url('admin/university')}}" method="POST" class="form">
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
                            <input type="url" name="website" value="{{$university->website}}" id="website" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="website" class="control-label">Phone</label>
                            <input type="text" name="phone" value="{{$university->phone}}" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" name="email" id="email" value="{{$university->email}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="sector" class="control-label">Sector</label>
                            {{Form::select('sector', [''=>'Please Select', 'government' => 'Government Sector', 'private' => 'Private Sector'], $university->sector,
                            ['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h6 class="page-title-small mb30">
                            Admission Details
                        </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Level</th>
                                    <th>Last Date to Apply</th>
                                    <th>Eligibility Criteria</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="admission_detail_body">
                                @if($admission_details->count() == 0)
                                <tr id="admission_detail_0">
                                    <td>
                                        <input required type="text" name="admission_detail[0][course_name]" class="form-control">
                                    </td>
                                    <td>
                                        <select required name="admission_detail[0][course_level]" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="bachelors">Bachelors</option>
                                            <option value="masters">Masters</option>
                                            <option value="phd">PHD</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input required type="date" name="admission_detail[0][date]" class="form-control">
                                    </td>
                                    <td>
                                        <textarea required name="admission_detail[0][eligibility]" class="form-control"></textarea>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger text-center delete-admission-detail" data-target="#admission_detail_0">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @else
                                <!--  -->
                                @foreach($admission_details as $index => $admission_detail)
                                <tr id="admission_detail_{{$index}}">
                                    <td>
                                        <input required type="text" value="{{$admission_detail->course_name}}" name="admission_detail[{{$index}}][course_name]" class="form-control">
                                    </td>
                                    <td>
                                        {{Form::select("admission_detail[$index][course_level]", ['' => 'Please Select', 'bachelors' => 'Bachelors', 'master' =>
                                        'Masters', 'phd' => 'Ph.D'], $admission_detail->course_level, ['required', 'class'
                                        => 'form-control'])}}
                                    </td>
                                    <td>
                                        <input required type="date" value="{{$admission_detail->date}}" name="admission_detail[{{$index}}][date]" class="form-control">
                                    </td>
                                    <td>
                                        <textarea required name="admission_detail[{{$index}}][eligibility]" class="form-control">{{$admission_detail->eligibility}}</textarea>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger text-center delete-admission-detail" data-target="#admission_detail_{{$index}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                <!--  -->
                                @endif
                            </tbody>
                        </table>
                        <p class="text-center">
                            <br>
                            <br>
                            <button class="btn btn-warning add-admission-detail" type="button">Insert Row</button>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <!-- /.box-inner -->
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
            <input type="hidden" name="id" value="{{$university->id}}">
        </form>
    </div>
</section>
<!--  -->
@stop()
<!-- page content -->

<!-- page scripts -->
@section('page_scripts')
<script src="{{asset('assets/libraries/bootstrap-tagsinput-latest/dist/bootstrap-tagsinput.js')}}"></script>
<script>
    var admissionDetails = "{{ $admission_details->count() + 1}}";
</script>
<script src="{{asset('js/edit-university.js')}}"></script>
<!-- page scripts go here -->
@stop()