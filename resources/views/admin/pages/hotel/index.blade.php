@extends('admin.common.master')

<!-- page title -->
@section('title', 'Hotels')
<!-- page title -->

<!-- page styles -->
@section('plugin_styles') @stop()
<!-- page styles -->
@section('page_styles') @stop()

<!-- page heading and subheading-->
@section('page_heading', 'Hotels') @section('page_subheading', 'View All')

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
<span class="breadcrumb-item active">Hotel</span>
@stop()
<!-- breadcrumbs -->

<!-- page content -->
@section('page_content')
<div class="table-header clearfix">
    <div class="table-header-actions">
        <a href="{{url('admin/location')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add New
        </a>
    </div>
</div>
<div class="table-wrapper">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="min-width center">#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Stars</th>
                <th>Phone</th>
                <th class="min-width center">Place&nbsp;ID</th>
                <th class="min-width center">Created&nbsp;Date</th>
                <th class="min-width"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $index => $hotel)
            <tr>
                <td class="min-width center id">{{$index+1}}</td>
                <td>
                    <a href="">{{$hotel->location->name}}</a>
                </td>
                <td>
                    {{$hotel->location->address}}
                </td>
                <td>
                    {{$hotel->stars}}
                </td>
                <td>
                    {{$hotel->phone}}
                </td>
                <td class="min-width">
                    {{$hotel->location->place_id}}
                </td>
                <td class="center">
                    {{date('M d, Y', strtotime($hotel->created_at))}}
                </td>
                <td class="min-width">
                    <div class="btn-group" role="group">
                        <a class="btn btn-warning" href="{{url('admin/hotel/'.$hotel->location->slug.'/edit')}}">Edit</a>
                        <form action="{{url('admin/location')}}" method="POST">
                            @csrf
                            <!--  -->
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{$hotel->location->id}}">
                            <button class="btn btn-danger" href="#">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop()
<!-- page content -->

<!-- page scripts -->
@section('page_scripts')
<script>
    $('form').submit(function () {
        return confirm("Are you sure?");
    });
</script>
<!-- page scripts go here -->
@stop()