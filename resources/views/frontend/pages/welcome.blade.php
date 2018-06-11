<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="{{asset('assets/libraries/slick/slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/libraries/slick/slick-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/trackpad-scroll-emulator.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/chartist.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/jquery.raty.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/nouislider.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/explorer-turquoise.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Home - Meet A Need</title>
</head>

<body class="">
    <div class="page-wrapper">
        <div class="header-wrapper header-transparent header-light">
            <div class="header">
                <div class="container">
                    <div class="header-inner">
                        <div class="navigation-toggle toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- /.header-toggle -->
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('assets/img/logo.svg')}}" class="svg" alt="Home">
                            </a>
                            <a href="{{url('/')}}" class="header-title">Meet A Need</a>
                        </div>
                        <!-- /.header-logo -->
                        <div class="header-nav">
                            <div class="primary-nav-wrapper">
                                <!--  -->
                                @include('frontend.common.menu')
                                <!--  -->
                            </div>
                            <!-- /.primary-nav-wrapper -->
                        </div>
                        <!-- /.header-nav -->
                        <div class="header-toggle toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- /.header-inner -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.header -->
        </div>
        <!-- /.header-wrapper -->
        <div class="hero-image-wrapper">
            <div class="hero-image-src" style="background-image: url('assets/img/tmp/hero-classified.jpg');">
            </div>
            <!-- /.hero-image-src -->
            <div class="hero-image">
                <div class="hero-image-inner">
                    <div class="hero-image-content">
                        <div class="container">
                            <div class="center">
                                <h1 class="hero-image-content-title-simple float-none">Discover Facilities Near You</h1>
                                <p class="float-none">
                                    “Meet A Need”
                                    <br> is a website where consumers are allowed to get Health, Universities, Hotel and Restaurant
                                    services
                                    <br> that are provided at one single platform.
                                </p>
                                <div class="row justify-content-sm-center">
                                    <div class="col-sm-6">
                                        <a type="submit" href="{{url('location')}}" class="btn btn-primary btn-block btn-xl">
                                            <i class="fa fa-search"></i> Start Exploring
                                        </a>
                                    </div>
                                    <!-- /.col-* -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.hero-image-content -->
                </div>
                <!-- /.hero-image-inner -->
                <div class="hero-image-categories">
                    <a class="hero-image-category">
                        <i class="fa fa-institution"></i>
                        <strong>University</strong>
                    </a>
                    <!-- /.hero-image-category -->
                    <a class="hero-image-category">
                        <i class="fa fa-hospital-o"></i>
                        <strong>Hospital</strong>
                    </a>
                    <!-- /.hero-image-category -->
                    <a class="hero-image-category">
                        <i class="fa fa-hotel"></i>
                        <strong>Hotel</strong>
                    </a>
                    <!-- /.hero-image-category -->
                    <a class="hero-image-category">
                        <i class="fa fa-cutlery"></i>
                        <strong>Restaurant</strong>
                    </a>
                    <!-- /.hero-image-category -->
                </div>
                <!-- /.hero-image-categories -->
            </div>
            <!-- /.hero-image -->
        </div>
        <!-- /.hero-image-wrapper -->
        <!--  -->
        @include('frontend.common.footer')
        <!--  -->
    </div>
    <!--  -->
    @include('frontend.common.sidebar')
    <!--  -->
    <!-- /.side-wrapper -->
    <div class="side-overlay"></div>
    <!-- /.side-overlay -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/chartist.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.trackpad-scroll-emulator.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.inlinesvg.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.affix.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.scrollTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libraries/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/nouislider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.raty.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/wNumb.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/particles.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/explorer.js')}}"></script>
</body>

</html>