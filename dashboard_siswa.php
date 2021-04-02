<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ujikom | SPP</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed  ">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark bg-info">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="logout.php" class="nav-link">LOGOUT</a>
                </li>

                <!-- Messages Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <?php include("include/menu_siswa.php") ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper ">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-chart-pie"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Data SPP</span>
                                    <span class="info-box-number">
                                        Data Administrasi
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-table"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Data Kelas</span>
                                    <span class="info-box-number">/tahun</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">User</span>
                                    <span class="info-box-number">Admin/Petugas/siswa</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-book"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Transaksi Pembayaran</span>
                                    <span class="info-box-number">beserta laporan</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <!-- /.content-wrapper -->

                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                    </aside>
                    <!-- /.control-sidebar -->

                    <!-- Main Footer -->
                    <footer class="main-footer bg-info">
                        <strong>Tugas UJIKOM Nasya Salma</a>.</strong>
                        XII RPL 2.
                        <div class="float-right d-none d-sm-inline-block">
                            <b>Template :</b> AdminLTE
                        </div>
                    </footer>
                </div>
                <!-- ./wrapper -->

                <!-- REQUIRED SCRIPTS -->
                <!-- jQuery -->
                <script src="plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap -->
                <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- overlayScrollbars -->
                <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                <!-- AdminLTE App -->
                <script src="dist/js/adminlte.js"></script>

                <!-- PAGE PLUGINS -->
                <!-- jQuery Mapael -->
                <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
                <script src="plugins/raphael/raphael.min.js"></script>
                <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
                <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
                <!-- ChartJS -->
                <script src="plugins/chart.js/Chart.min.js"></script>

                <!-- AdminLTE for demo purposes -->
                <script src="dist/js/demo.js"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>