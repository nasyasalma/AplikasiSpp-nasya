<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ujikom | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
    if ($_GET['pesan'] == "belummasuk") {
      echo "<div class='alert'>Anda belum masuk, harap login terlebih dahulu !</div>";
    }
  }
  ?>
  <div class="container">
    <div class="header">
      <h1>Aplikasi SPP</h1>
    </div>
    <div class="main">
      <form action="cek_login.php" method="post">
        <span>
          <i class="fa fa-user"></i>
          <input type="text" placeholder="Username" name="username" required="required">
        </span><br>
        <span>
          <i class="fa fa-lock"></i>
          <input type="password" placeholder="password" name="password" required="required">
        </span><br>
        <button>login</button>
        <br />
        <p><label>Jika anda siswa, <a href="dashboard_siswa.php">klik disini</a></label> <br />
        <p><label>FAQ? <a href="faq.php">klik disini</a><br />


      </form>
    </div>
  </div>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>