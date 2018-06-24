@extends('frontend.common.innerpage_master')

<!-- page title -->
@section('title', 'Password Requested')
<!-- page title -->

<!-- Page Content -->
@section('page_content')
<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="warning">
                    <h1>SUCCESS</h1>
                    <p>Please see your email for further instructions</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">
                        <i class="fa fa-long-arrow-left"></i> Return Home</a>
                </div>
                <!-- /.warning -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.main-inner -->
    </div>
    <!-- /.main -->
</div>
@stop()
<!-- Page Content -->