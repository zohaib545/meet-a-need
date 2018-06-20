<div class="admin-header">
    <div class="container-fluid">
        <div class="admin-header-sidebar-toggle toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="admin-header-avatar">
            <span class="avatar" style="background-image: url('{{Auth::guard('admin')->user()->profile_picture}}');"></span>
            <span class="admin-header-avatar-name">Admin
                <i class="fa fa-chevron-down"></i>
            </span>
            <ul class="admin-header-avatar-menu">
                <li>
                    <a href="{{url('admin/profile')}}">Your Profile</a>
                </li>
                <li>
                    <a href="{{url('admin/logout')}}">Logout</a>
                </li>
            </ul>
            <!-- /.admin-header-avatar-menu -->
        </div>
    </div>
    <!-- /.container -->
</div>