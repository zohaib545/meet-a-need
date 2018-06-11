@extends('admin.common.master')

<!-- page title -->
@section('title', 'Edit Restaurant')
<!-- page title -->

<!-- page styles -->
@section('plugin_styles')
<!-- page styles -->
@section('page_styles') @stop()

<!-- page heading and subheading-->
@section('page_heading', $location->name) @section('page_subheading', 'Edit Restaurant')

<!-- previous_page -->
@section('previous_page_url')
<a href="{{url('admin/restaurant')}}" class="admin-page-title-back">
    <i class="fa fa-long-arrow-left"></i>
</a>
@stop()
<!-- page heading and subheading-->

<!-- breadcrumbs -->
@section('breadcrumbs')
<a class="breadcrumb-item" href="{{url('admin')}}">Dashboard</a>
<a class="breadcrumb-item" href="{{url('admin/restaurant')}}">Restaurant</a>
<span class="breadcrumb-item active">Edit</span>
@stop()
<!-- breadcrumbs -->

<!-- page content -->
@section('page_content')
<section id="edit-university">
    <div class="box" id="box">
        <form action="{{url('admin/restaurant')}}" method="POST" class="form">
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
                            <input type="url" value="{{$restaurant->website}}" name="website" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label">Phone</label>
                            <input type="text" name="phone" value="{{$restaurant->phone}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" name="email" value="{{$restaurant->email}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pricing" class="control-label">Pricing</label>
                            {{Form::select('pricing', [''=>'Please Select','Low' => 'Low', 'Medium' => 'Medium', 'Expensive' => 'Expensive'], $restaurant->pricing,['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h6 class="page-title-small mb30">
                            Cuisine
                        </h6>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Cuisine</th>
                                    <th class="min-width">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="restaurant_detail_body">
                                @foreach($restaurant_details as $index => $restaurant_detail)
                                <tr id="restaurant_detail_{{$index}}">
                                    <td>
                                        <input placeholder="e.g. Mexican" value="{{$restaurant_detail->cuisine}}" type="text" required name="restaurant_detail[{{$index}}][cuisine]"
                                            class="form-control">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger text-center delete-restaurant-detail" data-target="#restaurant_detail_{{$index}}">
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
                            <button class="btn btn-warning add-restaurant-detail" type="button">Insert Row</button>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <!-- /.box-inner -->
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
            <input type="hidden" name="id" value="{{$restaurant->id}}">
        </form>
    </div>
</section>
<!--  -->
@stop()
<!-- page content -->

<!-- page scripts -->
@section('page_scripts')
<script>
    var restaurantDetails = "{{$restaurant_details->count() + 1}}";
</script>
<script src="{{asset('js/edit-restaurant.js')}}"></script>
<!-- page scripts go here -->
@stop()