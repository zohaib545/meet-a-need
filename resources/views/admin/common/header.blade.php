<div class="admin-header">
    <div class="container-fluid">
        <div class="admin-header-sidebar-toggle toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="admin-header-avatar">
            <span class="avatar" style="background-image: url('assets/img/tmp/user-10.jpg');"></span>
            <span class="admin-header-avatar-name">Admin
                <i class="fa fa-chevron-down"></i>
            </span>
            <ul class="admin-header-avatar-menu">
                <li>
                    <a href="{{url('admin/profile')}}">Your Profile</a>
                </li>
                <li>
                    <a href="{{('admin/logout')}}">Logout</a>
                </li>
            </ul>
            <!-- /.admin-header-avatar-menu -->
        </div>
        <!-- /.admin-header-avatar -->
        <div class="admin-header-actions">
            <div class="admin-header-action">
                <a href="{{url('admin/profile')}}">
                    <i class="fa fa-cog"></i>
                </a>
            </div>
        </div>
        <!-- /.admin-header-actions -->
    </div>
    <!-- /.container -->
</div>