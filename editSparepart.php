<?php

include_once("config.php");

if (isset($_POST['update'])) {
    $kode_sparepart = $_POST['kode_sparepart'];
    $nama_sparepart = $_POST['nama_sparepart'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $result = mysqli_query($mysqli, "UPDATE dataSparepart SET nama_sparepart= '$nama_sparepart', harga = '$harga' , stok = '$stok' WHERE
    kode_sparepart='" . $kode_sparepart . "'");

    header("Location : tableSparepart.php");
}
?>

<?php
$kode_sparepart = $_GET['kode_sparepart'];

$result = mysqli_query($mysqli, "SELECT * FROM dataSparepart WHERE kode_sparepart='" . $kode_sparepart . "'");

while ($user_data = mysqli_fetch_array($result)) {
    $nama_sparepart = $user_data['nama_sparepart'];
    $harga = $user_data['harga'];
    $stok = $user_data['stok'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Tesla</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
      <div class="sidebar-heading border-bottom bg-light">Tesla</div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="tableMobil.php">Mobil</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="tableSparepart.php">Sparepart</a>
      </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
      <!-- Top navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
          <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item active me-3"><a class="nav-link" href="#!">Sign In</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Page content-->
      <div class="card m-auto mt-5" style="width: 25rem; height: 25rem; ">
        <div class="card-body ">
          <form action="editSparepart.php" method="post" name="form1">
            <table class="table table-striped">
            <tr>
                <td>Nama Sparepart</td>
                <td><input type="text" name="nama_sparepart" value='<?php echo $nama_sparepart; ?>'></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value='<?php echo $harga; ?>'></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value='<?php echo $stok; ?>'></td>
            </tr>
            <tr>
                <td><input type="hidden" name="kode_sparepart" value=<?php echo $_GET['kode_sparepart']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>