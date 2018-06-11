@extends('admin.common.master')

<!-- page title -->
@section('title', 'Add Location')
<!-- page title -->

<!-- page styles -->
@section('plugin_styles') @stop()
<!-- page styles -->
@section('page_styles') @stop()

<!-- page heading and subheading-->
@section('page_heading', 'Add Location') @section('page_subheading', 'Start adding locations on map')

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
<span class="breadcrumb-item active">Add Location</span>
@stop()
<!-- breadcrumbs -->

<!-- page content -->
@section('page_content')
<section id="add-location-page">
    <div class="box" id="box">
        <form action="{{url('admin/location')}}" method="POST" class="form">
            <div class="box-inner">
                <div class="box-title">
                    <h2>Add Location</h2>
                </div>
                <!-- /.box-title -->
                <div class="row">
                    <div class="col">
                        <h6 class="page-title-small mb30">Location</h6>
                        <input id="pac-input" class="controls hidden" type="text" placeholder="Enter a location">
                        <div id="map"></div>
                    </div>
                    <div class="col">
                        <h6 class="page-title-small mb30">Details</h6>

                        <div class="form-group">
                            <label for="place_id" class="control-label">Place ID
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" readonly required name="place_id" id="place_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label">Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="name" required id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label">Address
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="address" required id="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="type" class="control-label">Type
                                <span class="text-danger">*</span>
                            </label>
                            <select name="type" required id="type" class="form-control">
                                <option value="">Please Select</option>
                                <option value="university">University</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="hotel">Hotel</option>
                                <option value="restaurant">Restaurant</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label">Description
                                <span class="text-danger">*</span>
                            </label>
                            <textarea type="text" required rows="5" name="description" id="description" class="form-control"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <hr>
                        <h3>Images</h3>
                        <div class="row images-row">
                            
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
            </div>
            <!-- /.box-inner -->
            <div class="location-images">
                
            </div>
            {{csrf_field()}}
        </form>
    </div>
</section>
@stop()
<!-- page content -->

<!-- page scripts -->
@section('page_scripts')
<script src="{{asset('js/add-location.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC36TsKE1EwXWhh1exmqnRz4ybKVlQ45a0&libraries=places&callback=initMap">
</script>
<!-- end scripts -->
@stop()