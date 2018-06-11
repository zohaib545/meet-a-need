@extends('admin.common.master')

<!-- page title -->
@section('title', 'Dashboard')
<!-- page title -->

@section('plugin_styles')
<!-- page styles -->
<link href="{{asset('assets/libraries/slick/slick.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/libraries/slick/slick-theme.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/trackpad-scroll-emulator.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/chartist.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/jquery.raty.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/nouislider.min.css')}}" rel="stylesheet" type="text/css">
<!-- page styles -->
@stop()

<!-- page heading and subheading-->
@section('page_heading', 'Dashboard') @section('page_subheading', 'Meed a Need Administration')
<!-- page heading and subheading-->

<!-- breadcrumbs -->
@section('breadcrumbs')
<span class="breadcrumb-item active">Dashboard</span>
@stop()
<!-- breadcrumbs -->

<!-- page content -->
@section('page_content')
<div class="stats">
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="stat-box stat-box-red">
                <div class="stat-box-icon">
                    <i class="fa fa-institution"></i>
                </div>
                <strong>{{$universities}}</strong>
                <span>Universities</span>
            </div>
            <!-- /.stat-box -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-6 col-lg-3">
            <div class="stat-box stat-box-green">
                <div class="stat-box-icon">
                    <i class="fa fa-hospital-o"></i>
                </div>
                <strong>{{$healthcare}}</strong>
                <span>Healthcare</span>
            </div>
            <!-- /.stat-box -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-6 col-lg-3">
            <div class="stat-box stat-box-blue">
                <div class="stat-box-icon">
                    <i class="fa fa-hotel"></i>
                </div>
                <strong>{{$hotels}}</strong>
                <span>Hotels</span>
            </div>
            <!-- /.stat-box -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-6 col-lg-3">
            <div class="stat-box stat-box-purple">
                <div class="stat-box-icon">
                    <i class="fa fa-cutlery"></i>
                </div>
                <strong>{{$restaurants}}</strong>
                <span>Restaurants</span>
            </div>
            <!-- /.stat-box -->
        </div>
        <!-- /.col-* -->
    </div>
    <!-- /.row -->
</div>
<!-- /.stats -->
<div class="cards-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-inner">
                    <div class="box-title clearfix">
                        <h2>Most recent locations</h2>
                    </div>
                    <!-- /.box-title -->
                    <div class="cards">
                        <div class="row">
                            @foreach($locations as $location)
                            <div class="col-sm-4">
                                <div class="card card-dark" style="background-image: url({{$location->images->count() == 0? 'assets/img/tmp/listing-15.jpg' : $location->images[0]->url}});">
                                    <div class="card-inner">
                                        <!-- /.card-close -->
                                        <div class="card-attribute">{{date('d M, Y', strtotime($location->created_at))}}</div>
                                        <div class="card-content">
                                            <h2>
                                                <a href="#">{{$location->name}}</a>
                                            </h2>
                                            <p>{{($location->address)}}</p>
                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.card-inner -->
                                </div>
                                <!-- /.card -->
                            </div>
                            @endforeach
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.cards -->
                </div>
                <!-- /.box-inner -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.cards-wrapper -->
@stop()
<!-- page content -->
@section('page_scripts')
<script type="text/javascript" src="{{url('assets/js/chartist.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/nouislider.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery.raty.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/wNumb.js')}}"></script>
<!-- page scripts -->
@stop()