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
                    <i class="fa fa-pie-chart"></i>
                </div>
                <strong>$425,123</strong>
                <span>Total Earnings</span>
            </div>
            <!-- /.stat-box -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-6 col-lg-3">
            <div class="stat-box stat-box-green">
                <div class="stat-box-icon">
                    <i class="fa fa-comments"></i>
                </div>
                <strong>4,558</strong>
                <span>Pending Comments</span>
            </div>
            <!-- /.stat-box -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-6 col-lg-3">
            <div class="stat-box stat-box-blue">
                <div class="stat-box-icon">
                    <i class="fa fa-diamond"></i>
                </div>
                <strong>16,584</strong>
                <span>Total Objects</span>
            </div>
            <!-- /.stat-box -->
        </div>
        <!-- /.col-* -->
        <div class="col-md-6 col-lg-3">
            <div class="stat-box stat-box-purple">
                <div class="stat-box-icon">
                    <i class="fa fa-database"></i>
                </div>
                <strong>Very Good</strong>
                <span>Database performace</span>
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
        <div class="col-lg-6">
            <div class="box">
                <div class="box-inner">
                    <div class="box-title clearfix">
                        <h2>Most recent listings</h2>
                    </div>
                    <!-- /.box-title -->
                    <div class="cards">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card card-dark" style="background-image: url(assets/img/tmp/listing-15.jpg);">
                                    <div class="card-inner">
                                        <div class="card-close">
                                            <i class="fa fa-close"></i>
                                        </div>
                                        <!-- /.card-close -->
                                        <div class="card-attribute">14/07/2017 12:30 - 13:15</div>
                                        <div class="card-content">
                                            <h2>
                                                <a href="#">Etiam facilisis sem quis dui tempor commodo</a>
                                            </h2>
                                            <p>Donec sollicitudin sem sed purus suscipit sodales. In in mi a turpis consectetur</p>
                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.card-inner -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col-* -->
                            <div class="col-sm-6">
                                <div class="card card-dark" style="background-image: url(assets/img/tmp/listing-10.jpg);">
                                    <div class="card-inner">
                                        <div class="card-close">
                                            <i class="fa fa-close"></i>
                                        </div>
                                        <!-- /.card-close -->
                                        <div class="card-attribute">14/07/2017 12:30 - 13:15</div>
                                        <div class="card-content">
                                            <h2>
                                                <a href="#">Etiam facilisis sem quis dui tempor commodo</a>
                                            </h2>
                                            <p>Donec sollicitudin sem sed purus suscipit sodales. In in mi a turpis consectetur</p>
                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.card-inner -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col-* -->
                            <div class="col-sm-6">
                                <div class="card card-dark" style="background-image: url(assets/img/tmp/listing-2.jpg);">
                                    <div class="card-inner">
                                        <div class="card-close">
                                            <i class="fa fa-close"></i>
                                        </div>
                                        <!-- /.card-close -->
                                        <div class="card-attribute">14/07/2017 12:30 - 13:15</div>
                                        <div class="card-content">
                                            <h2>
                                                <a href="#">Etiam facilisis sem quis dui tempor commodo</a>
                                            </h2>
                                            <p>Donec sollicitudin sem sed purus suscipit sodales. In in mi a turpis consectetur</p>
                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.card-inner -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col-* -->
                            <div class="col-sm-6">
                                <div class="card card-dark" style="background-image: url(assets/img/tmp/listing-6.jpg);">
                                    <div class="card-inner">
                                        <div class="card-close">
                                            <i class="fa fa-close"></i>
                                        </div>
                                        <!-- /.card-close -->
                                        <div class="card-attribute">14/07/2017 12:30 - 13:15</div>
                                        <div class="card-content">
                                            <h2>
                                                <a href="#">Etiam facilisis sem quis dui tempor commodo</a>
                                            </h2>
                                            <p>Donec sollicitudin sem sed purus suscipit sodales. In in mi a turpis consectetur</p>
                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.card-inner -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col-* -->
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
        <div class="col-lg-6">
            <div class="box">
                <div class="box-inner">
                    <div class="box-title clearfix">
                        <h2>Files uploaded in media</h2>
                    </div>
                    <!-- /.box-title -->
                    <div class="cards">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card ">
                                    <div class="card-inner">
                                        <div class="card-close">
                                            <i class="fa fa-close"></i>
                                        </div>
                                        <!-- /.card-close -->
                                        <div class="card-attribute">14/07/2017 12:30 / 1.2MB</div>
                                        <a href="#" class="card-icon card-red">
                                            <span>PDF</span>
                                        </a>
                                        <!-- /.card-middle -->
                                        <div class="card-content">
                                            <h2>
                                                <a href="#">Etiam facilisis sem quis dui tempor commodo</a>
                                            </h2>
                                            <p>Donec sollicitudin sem sed purus suscipit sodales. In in mi a turpis consectetur</p>
                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.card-inner -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col-* -->
                            <div class="col-sm-6">
                                <div class="card ">
                                    <div class="card-inner">
                                        <div class="card-close">
                                            <i class="fa fa-close"></i>
                                        </div>
                                        <!-- /.card-close -->
                                        <div class="card-attribute">14/07/2017 12:30 / 1.2MB</div>
                                        <a href="#" class="card-icon card-red">
                                            <span>PDF</span>
                                        </a>
                                        <!-- /.card-middle -->
                                        <div class="card-content">
                                            <h2>
                                                <a href="#">Etiam facilisis sem quis dui tempor commodo</a>
                                            </h2>
                                            <p>Donec sollicitudin sem sed purus suscipit sodales. In in mi a turpis consectetur</p>
                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.card-inner -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col-* -->
                            <div class="col-sm-6">
                                <div class="card ">
                                    <div class="card-inner">
                                        <div class="card-close">
                                            <i class="fa fa-close"></i>
                                        </div>
                                        <!-- /.card-close -->
                                        <div class="card-attribute">14/07/2017 12:30 / 213KB</div>
                                        <a href="#" class="card-icon card-green">
                                            <span>XLS</span>
                                        </a>
                                        <!-- /.card-middle -->
                                        <div class="card-content">
                                            <h2>
                                                <a href="#">Etiam facilisis sem quis dui tempor commodo</a>
                                            </h2>
                                            <p>Donec sollicitudin sem sed purus suscipit sodales. In in mi a turpis consectetur</p>
                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.card-inner -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col-* -->
                            <div class="col-sm-6">
                                <div class="card ">
                                    <div class="card-inner">
                                        <div class="card-close">
                                            <i class="fa fa-close"></i>
                                        </div>
                                        <!-- /.card-close -->
                                        <div class="card-attribute">14/07/2017 12:30 / 213KB</div>
                                        <a href="#" class="card-icon card-green">
                                            <span>XLS</span>
                                        </a>
                                        <!-- /.card-middle -->
                                        <div class="card-content">
                                            <h2>
                                                <a href="#">Etiam facilisis sem quis dui tempor commodo</a>
                                            </h2>
                                            <p>Donec sollicitudin sem sed purus suscipit sodales. In in mi a turpis consectetur</p>
                                        </div>
                                        <!-- /.card-content -->
                                    </div>
                                    <!-- /.card-inner -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col-* -->
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