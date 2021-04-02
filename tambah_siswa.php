<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';
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
              <h2>Tambah Kelas</h2>
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
                  <h3 class="card-title">Tambah Siswa </h3>

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="proses_tambahsiswa.php" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NISN</label>
                      <input type="text" class="form-control" name="nisn" autofocus="" required="" />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIS</label>
                      <input type="text" class="form-control" name="nis" autofocus="" required="" />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Siswa</label>
                      <input type="text" class="form-control" name="nama" autofocus="" required="" />
                    </div>
                    <div class="form-group">
                      <label>Kelas</label>
                      <select name="kelas" class="form-control">
                        <option value="not_option"> Silahkan Pilih Kelas</option>
                        <?php
                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                        $query = "SELECT * FROM kelas ORDER BY nama_kelas ASC";
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
                          <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
                        <?php
                          $no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat</label>
                      <input type="text" class="form-control" name="alamat" autofocus="" required="" />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">No Telp</label>
                      <input type="text" class="form-control" name="no_telp" autofocus="" required="" />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tahun Masuk</label>
                      <select name="tahun" class="form-control">
                        <option value="not_option"> Silahkan Pilih Tahun Masuk</option>
                        <?php
                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                        $query = "SELECT * FROM spp ORDER BY tahun ASC";
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
                          <option value="<?php echo $row['id_spp']; ?>"><?php echo $row['tahun']; ?></option>
                        <?php
                          $no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>
                      </select>

                    </div>
                    <div>
                      <button type="submit" class="btn btn-block btn-primary btn-sm">Tambah</button>

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