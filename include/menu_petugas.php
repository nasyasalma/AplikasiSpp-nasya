<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-info text-black">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-info">
        <img src="dist/img/mahardhika.jpg" alt="mahardhika Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-dark bg-info">UjikomSPP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nasya Salma</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search bg-dark">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="dashboard_petugas.php" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="transaksi.php" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            TRANSAKSI
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="transaksipetugas.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transaksi Pembayaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="historytransaksi.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>History Transaksi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                </li>
                </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>