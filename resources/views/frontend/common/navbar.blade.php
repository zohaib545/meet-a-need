<div class="header-wrapper">
    <div class="header">
        <div class="container-fluid">
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
                    <a href="{{url('/')}}" class="header-title">Meet a Need</a>
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