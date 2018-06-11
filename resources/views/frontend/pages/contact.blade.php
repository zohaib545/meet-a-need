@extends('frontend.common.innerpage_master')

<!-- page title -->
@section('title', 'Contact')
<!-- page title -->

<!-- Page Content -->
@section('page_content')
<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
                    <span class="breadcrumb-item active">Contact</span>
                </nav>
                <div class="row mb30">
                    <div class="col-sm-4">
                        <h4 class="page-title-small">Address</h4>
                        <p>
                            UOL, Lahore
                        </p>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <h4 class="page-title-small">Contacts</h4>
                        <p>
                            +92 321 1234567
                        </p>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <h4 class="page-title-small">Social Profiles</h4>
                        <ul class="social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-sm-4 -->
                </div>
                <!-- /.row -->
                <h3>We’d love to hear from you. Say us hello!</h3>
                <div class="contact-form-wrapper mb80">
                    <form class="contact-form" method="post" action="?">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="contact-form-name">Name</label>
                                    <input type="text" name="name" id="contact-form-name" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col-* -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="contact-form-subject">Subject</label>
                                    <input type="text" name="subject" id="contact-form-subject" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col-* -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="contact-form-email">E-mail</label>
                                    <input type="text" name="email" id="contact-form-email" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col-* -->
                        </div>
                        <!-- /.row -->
                        <div class="form-group">
                            <label for="contact-form-message">Message</label>
                            <textarea class="form-control" id="contact-form-message" rows="6"></textarea>
                        </div>
                        <!-- /.form-group -->
                        <div class="clearfix">
                            <button class="btn btn-primary pull-right">Post Message</button>
                        </div>
                        <!-- /.clearfix -->
                    </form>
                    <!-- /.contact-form -->
                </div>
                <!-- /.contact-form-wrapper -->
            </div>
        </div>
        <!-- /.main-inner -->
    </div>
    <!-- /.main -->
</div>
@stop()
<!-- Page Content -->