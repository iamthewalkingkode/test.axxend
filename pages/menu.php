<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="assets/img/avatar.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, John</p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="<?php echo $action === 'dashboard'?'active':''; ?>">
                <a href="./">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="./email/form">
                    <i class="fa fa-th"></i> <span>Compose email</span>
                </a>
            </li>
            <!-- <li class="treeview <?php echo $action === 'email'?'active':''; ?>"">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Email</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="./email/form"><i class="fa fa-angle-double-right"></i> Compose email</a></li>
                    <li><a href="./email/sent"><i class="fa fa-angle-double-right"></i> Sent emails</a></li>
                </ul>
            </li> -->
        </ul>
    </section>
</aside>