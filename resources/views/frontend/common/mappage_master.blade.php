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
    <link href="{{asset('assets/css/explorer.css')}}" rel="stylesheet" type="text/css"> @yield('page_styles')
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
    <title>@yield('title') - Meet A Need</title>
</head>

<body class="">
    <div class="page-wrapper">
        @include('frontend.common.navbar')
        <div class="main-wrapper">
            <div class="main">
                <div class="main-inner">
                    <div class="content">
                        @yield('page_content')
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.main-inner -->
            </div>
            <!-- /.main -->
        </div>
        <!-- /.main-wrapper -->
    </div>
    <!-- /.page-wrapper -->
    @include('frontend.common.sidebar')
    <!-- /.side-wrapper -->
    <div class="side-overlay"></div>
    <!-- /.side-overlay -->

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/tether.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.trackpad-scroll-emulator.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.inlinesvg.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.affix.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.scrollTo.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/libraries/slick/slick.min.js')}}"></script> 
    @yield('page_scripts')
    <script type="text/javascript" src="assets/js/particles.min.js"></script>
    <script type="text/javascript" src="assets/js/explorer.js"></script>
</body>

</html>