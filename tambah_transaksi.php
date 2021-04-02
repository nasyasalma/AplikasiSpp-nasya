<?php
include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ujikom | SPP</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
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
        <!-- Main Sidebar Container -->

        <?php include("include/menu.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper ">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3> Transaksi Pembayaran SPP</h3>

                                </div>
                                <!-- /.card-header -->
                                <h3 align="center">Pembayaran</h3>

                                <div class="container">
                                    <div class="page-header">

                                    </div>
                                    <form method="POST" action="proses_tambahtransaksi.php" enctype="multipart/form-data">
                                        <section class="base">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Nama Petugas</label>
                                                        <div class="input-group">
                                                            <select class="form-control" name="nama_petugas">
                                                                <option value="not_option">Silahkan Pilih Nama Petugas</option>
                                                                <?php
                                                                // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                                                                $query = "SELECT * FROM petugas ORDER BY nama_petugas ASC";
                                                                $result = mysqli_query($koneksi, $query);
                                                                //mengecek apakah ada error ketika menjalankan query
                                                                if (!$result) {
                                                                    die("Query Error: " . mysqli_errno($koneksi) .
                                                                        " - " . mysqli_error($koneksi));
                                                                }

                                                                //buat perulangan untuk element tabel dari data mahasiswa
                                                                $no = 1; //variabel untuk membuat nomor urut
                                                                // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                                                // kemudian dicetak dengan perulangan while
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                    <option class="bg-dark" value="<?php echo $row['id_petugas']; ?>"><?php echo $row['nama_petugas']; ?></option>
                                                                <?php
                                                                    $no++; //untuk nomor urut terus bertambah 1
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>NISN</label>
                                                    <div class="input-group">
                                                        <div class="col-lg-12 col-md-12">
                                                            <select class="form-control" name="nisn">
                                                                <option value="not_option">Silahkan Pilih NISN</option>
                                                                <?php
                                                                // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                                                                $query = "SELECT * FROM siswa ORDER BY nisn ASC";
                                                                $result = mysqli_query($koneksi, $query);
                                                                //mengecek apakah ada error ketika menjalankan query
                                                                if (!$result) {
                                                                    die("Query Error: " . mysqli_errno($koneksi) .
                                                                        " - " . mysqli_error($koneksi));
                                                                }

                                                                //buat perulangan untuk element tabel dari data mahasiswa
                                                                $no = 1; //variabel untuk membuat nomor urut
                                                                // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                                                // kemudian dicetak dengan perulangan while
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                    <option class="bg-dark" value="<?php echo $row['nisn']; ?>"><?php echo $row['nisn']; ?></option>
                                                                <?php
                                                                    $no++; //untuk nomor urut terus bertambah 1
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Bayar</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"></div>
                                                        </div>
                                                        <input type="date" class="form-control" name="tanggal_bayar" autofocus="" required="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bulan Dibayar</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="bulan_dibayar" placeholder="Bulan Dibayar" autofocus="" required="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tahun Dibayar</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="tahun_dibayar" placeholder="Tahun Dibayar" autofocus="" required="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>SPP Perbulan</label>
                                                    <div class="input-group">
                                                        <div class="col-lg-12 col-md-12">
                                                            <select class="form-control" name="spp">
                                                                <option value="not_option">Silahkan Pilih SPP Perbulan</option>
                                                                <?php
                                                                // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                                                                $query = "SELECT * FROM spp ORDER BY nominal ASC";
                                                                $result = mysqli_query($koneksi, $query);
                                                                //mengecek apakah ada error ketika menjalankan query
                                                                if (!$result) {
                                                                    die("Query Error: " . mysqli_errno($koneksi) .
                                                                        " - " . mysqli_error($koneksi));
                                                                }

                                                                //buat perulangan untuk element tabel dari data mahasiswa
                                                                $no = 1; //variabel untuk membuat nomor urut
                                                                // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                                                // kemudian dicetak dengan perulangan while
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                    <option class="bg-dark" value="<?php echo $row['id_spp']; ?>"><?php echo $row['nominal']; ?></option>
                                                                <?php
                                                                    $no++; //untuk nomor urut terus bertambah 1
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Bayar</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="jumlah_bayar" autofocus="" placeholder="Masukan Jumlah Bayar" required="" />
                                                    </div>
                                                </div>

                                            </div>
                                        </section>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-block btn-primary btn-sm">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer bg-info">
            <strong>Tugas UJIKOM Nasya Salma</a>.</strong>
            XII RPL 2.
            <div class="float-right d-none d-sm-inline-block">
                <b>Template :</b> AdminLTE
            </div>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>