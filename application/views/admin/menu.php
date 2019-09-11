        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li><a href="<?= site_url('admin'); ?>"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        <li><a href="<?= site_url('admin/slider'); ?>"><i class="fa fa-bolt"></i><span class="hide-menu">Slider</span></a>
                        <li><a href="<?= site_url('admin/user'); ?>"><i class="fa fa-address-book"></i><span class="hide-menu">User</span></a>
                        <li><a href="<?= site_url('admin/loket'); ?>"><i class="fa fa-table"></i><span class="hide-menu">Loket</span></a>
                        <!-- <li><a href="<?= site_url('admin/laporan'); ?>"><i class="fa fa-briefcase"></i><span class="hide-menu">Laporan</span></a> -->
                        </li>
                        <li><a  href="javascript:void(0)" onclick="logout()"><i class="fa fa-sign-out"></i><span class="hide-menu">Logout</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->