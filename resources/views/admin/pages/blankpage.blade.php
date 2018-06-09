@extends('admin.common.master')

<!-- page title -->
@section('title', 'Blankpage')
<!-- page title -->

<!-- page styles -->
@section('plugin_styles')
@stop()
<!-- page styles -->
@section('page_styles')
@stop()

<!-- page heading and subheading-->
@section('page_heading', 'Blank Page') @section('page_subheading', 'Here goes page subheading')

<!-- previous_page -->
@section('previous_page_url')
<a href="" class="admin-page-title-back">
    <i class="fa fa-long-arrow-left"></i>
</a>
@stop()
<!-- page heading and subheading-->

<!-- breadcrumbs -->
@section('breadcrumbs')
<a class="breadcrumb-item" href="{{url('/')}}">Home</a>
<span class="breadcrumb-item active">Blankpage</span>
@stop()
<!-- breadcrumbs -->

<!-- page content -->
@section('page_content')
<!-- page content goes here -->
@stop()
<!-- page content -->

<!-- page scripts -->
@section('page_scripts')
<!-- page scripts go here -->
@stop()