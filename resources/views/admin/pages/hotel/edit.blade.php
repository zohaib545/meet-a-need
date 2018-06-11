@extends('admin.common.master')

<!-- page title -->
@section('title', 'Edit Hotel')
<!-- page title -->

<!-- page styles -->
@section('plugin_styles')
<!-- page styles -->
@section('page_styles') @stop()

<!-- page heading and subheading-->
@section('page_heading', $location->name) @section('page_subheading', 'Edit Hotel')

<!-- previous_page -->
@section('previous_page_url')
<a href="{{url('admin/hotel')}}" class="admin-page-title-back">
    <i class="fa fa-long-arrow-left"></i>
</a>
@stop()
<!-- page heading and subheading-->

<!-- breadcrumbs -->
@section('breadcrumbs')
<a class="breadcrumb-item" href="{{url('admin')}}">Dashboard</a>
<a class="breadcrumb-item" href="{{url('admin/hotel')}}">Hotel</a>
<span class="breadcrumb-item active">Edit</span>
@stop()
<!-- breadcrumbs -->

<!-- page content -->
@section('page_content')
<section id="edit-university">
    <div class="box" id="box">
        <form action="{{url('admin/hotel')}}" method="POST" class="form">
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
                            <input type="url" value="{{$hotel->website}}" name="website" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label">Phone</label>
                            <input type="text" name="phone" value="{{$hotel->phone}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" name="email" value="{{$hotel->email}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="stars" class="control-label">Stars</label>
                            {{Form::select('stars', [''=>'Please Select','1' => '1', '2' => '2',
                            '3' => '3', '4' => '4', '5' => '5'], $hotel->stars,['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h6 class="page-title-small mb30">
                            Rooms Details
                        </h6>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Room Type</th>
                                    <th>Options</th>
                                    <th>Price/night (Rs.)</th>
                                    <th class="min-width">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="hotel_detail_body">
                                @foreach($hotel_details as $index => $hotel_detail)
                                <tr id="hotel_detail_{{$index}}">
                                    <td>
                                        <input placeholder="e.g. Double or Twin" value="{{$hotel_detail->room_type}}" type="text" required name="hotel_detail[{{$index}}][room_type]" class="form-control">
                                    </td>
                                    <td>
                                        <textarea name="hotel_detail[{{$index}}][options]" placeholder="e.g. Free Wifi" class="form-control">{{$hotel_detail->options}}</textarea>
                                    </td>
                                    <td>
                                        <input type="number" placeholder="e.g. 2800" value="{{$hotel_detail->price_per_night}}" name="hotel_detail[{{$index}}][price_per_night]" class="form-control"
                                            required>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger text-center delete-hotel-detail" data-target="#hotel_detail_{{$index}}">
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
                            <button class="btn btn-warning add-hotel-detail" type="button">Insert Row</button>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <!-- /.box-inner -->
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
            <input type="hidden" name="id" value="{{$hotel->id}}">
        </form>
    </div>
</section>
<!--  -->
@stop()
<!-- page content -->

<!-- page scripts -->
@section('page_scripts')
<script>
    var hotelDetail = "{{$hotel_details->count() + 1}}";
</script>
<script src="{{asset('js/edit-hotel.js')}}"></script>
<!-- page scripts go here -->
@stop()