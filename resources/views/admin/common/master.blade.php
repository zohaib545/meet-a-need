<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <!--  -->
    @yield('plugin_styles')
    <!--  -->
    <link href="{{asset('assets/css/explorer.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--  -->
    @yield('page_styles')
    <!--  -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>@yield('title') - Meet A Need - Admin</title>
</head>

<body class="">
    <div class="admin-wrapper">
        @include('admin.common.sidebar')
        <div class="admin-main">
            @include('admin.common.header')
            <!-- /.admin-header -->
            <div class="admin-page-title">
                <div class="container-fluid">
                    @yield('previous_page_url')
                    <h1>@yield('page_heading')
                        <small>@yield('page_subheading')</small>
                    </h1>
                    <!-- /.admin-page-title-actions -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.admin-page-title -->
            <div class="admin-content">
                <div class="container-fluid">
                    <nav class="breadcrumb">
                        @yield('breadcrumbs')
                    </nav>
                    @yield('page_content')
                </div>
                <!-- /.container -->
            </div>
            <!-- /.admin-content -->
            @include('admin.common.footer')
        </div>
        <!-- /.admin-main -->
    </div>
    <!-- /.admin-wrapper -->
</body>
<script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.trackpad-scroll-emulator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.inlinesvg.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.affix.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.scrollTo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/loader.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/libraries/slick/slick.min.js')}}"></script>
<script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<!--  -->
@yield('page_scripts')
<!--  -->
<script type="text/javascript" src="{{asset('assets/js/particles.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/explorer.js')}}"></script>
<script>
    $(document).ready(function () {
        $('table').DataTable();
    });
</script>

</html>