<div class="admin-sidebar">
    <div class="admin-sidebar-header">
        <div class="admin-sidebar-logo">
            <a href="{{url('admin')}}">
                <img src="{{asset('assets/img/logo.svg')}}" class="svg" alt="Home">
            </a>
            <a href="{{url('admin')}}" class="admin-sidebar-logo-title">
                <strong>Meet a Need</strong>
                <span>Places Directory</span>
            </a>
        </div>
        <!-- /.admin-sidebar-logo -->
    </div>
    <!-- /.admin-sidebar-header -->
    <div class="admin-sidebar-content">
        <h3>Quick Links</h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{url('admin')}}" class="nav-link {{Request::is('admin')? 'active': ''}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/location')}}" class="nav-link {{Request::is('admin/location')? 'active': ''}}">
                    <i class="fa fa-map-marker"></i>
                    <span>Add Location</span>
                </a>
            </li>
        </ul>
        <h3>Listing Management</h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{url('admin/university')}}" class="nav-link {{Request::is('admin/university/*') || Request::is('admin/university') ? 'active': ''}}">
                    <i class="fa fa-institution"></i>
                    <span>University</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/healthcare')}}" class="nav-link {{Request::is('admin/healthcare/*') || Request::is('admin/healthcare')? 'active': ''}}">
                    <i class="fa fa-hospital-o"></i>
                    <span>Healthcare</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/hotel')}}" class="nav-link {{Request::is('admin/hotel/*') || Request::is('admin/hotel')? 'active': ''}}">
                    <i class="fa fa-hotel"></i>
                    <span>Hotels</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/restaurant')}}" class="nav-link {{Request::is('admin/restaurant/*') || Request::is('admin/restaurant')? 'active': ''}}">
                    <i class="fa fa-cutlery"></i>
                    <span>Restaurants</span>
                </a>
            </li>
        </ul>
        <h3>Administration</h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{url('admin/profile')}}" class="nav-link {{Request::is('admin/profile/*')? 'active': ''}}">
                    <i class="fa fa-cog"></i>
                    <span>Profile</span>
                </a>
            </li>
        </ul>
        <h3>Actions</h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{url('admin/logout')}}" class="nav-link">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /.admin-sidebar -->