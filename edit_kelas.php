<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// mengecek apakah di url ada nilai GET id
if (isset($_GET['id'])) {
  // ambil nilai id dari url dan disimpan dalam variabel $id
  $id = ($_GET["id"]);

  // menampilkan data dari database yang mempunyai id=$id
  $query = "SELECT * FROM kelas WHERE id_kelas='$id'";
  $result = mysqli_query($koneksi, $query);
  // jika data gagal diambil maka akan tampil error berikut
  if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) .
      " - " . mysqli_error($koneksi));
  }
  // mengambil data dari database
  $data = mysqli_fetch_assoc($result);
  // apabila data tidak ada pada database maka akan dijalankan perintah ini
  if (!count($data)) {
    echo "<script>alert('Data tidak ditemukan pada database');window.location='kelas.php';</script>";
  }
} else {
  // apabila tidak ada data GET id pada akan di redirect ke index.php
  echo "<script>alert('Masukkan data id.');window.location='kelas.php';</script>";
}
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


    <?php include("include/menu.php") ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h2>Edit Kelas</h2>
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
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Data Kelas <?php echo $data['nama_kelas']; ?> </h3>

                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form method="POST" action="proses_editkelas.php" enctype="multipart/form-data ">
                  <div class="card-body">
                    <div class="form-group">
                      <input name="id" value="<?php echo $data['id_kelas']; ?>" hidden />
                      <label for="exampleInputEmail1">Kelas</label>
                      <input type="text" class="form-control" name="nama_kelas" value="<?php echo $data['nama_kelas']; ?>" disabled="disabled">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kompetesi Keahlian</label>
                      <input type="text" class="form-control" name="kompetensi keahlian" value="<?php echo $data['kompetensi_keahlian']; ?>" required="" />
                      <div>
                        <button type="submit" class="btn btn-block btn-primary btn-sm">Simpan Perubahan</button>

                      </div>
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
      <strong>Tugas UJIKOM <a href="https://adminlte.io">Nasya Salma</a>.</strong>
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