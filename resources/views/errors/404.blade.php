@extends('frontend.common.innerpage_master')

<!-- page title -->
@section('title', 'Page Not Found')
<!-- page title -->

<!-- Page Content -->
@section('page_content')
<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="warning">
                    <h1>404</h1>
                    <p>Page not found. Please use search in header.</p>
                    <a href="{{ URL::previous() }}" class="btn btn-primary">
                        <i class="fa fa-long-arrow-left"></i> Return Back</a>
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