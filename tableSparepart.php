<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM dataSparepart");

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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
                    <a href="addSparepart.php" class="btn btn-primary ms-2">Tambah Data Sparepart</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active me-3"><a class="nav-link" href="#!">Sign In</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <h2 class=" d-flex justify-content-center m-auto pt-2 pb-2">Sparepart</h2>
            <div class="card position-static m-auto" style="width: 40rem;">
                <div class="card-body">
                    <table width='80%' border=1 class="table table-striped">
                        <tr>
                            <th>Kode Sparepart</th>
                            <th>Nama Sparepart</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>

                        <?php

                        while ($user_data = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $user_data['kode_sparepart'] . "</td>";
                            echo "<td>" . $user_data['nama_sparepart'] . "</td>";
                            echo "<td>" . $user_data['harga'] . "</td>";
                            echo "<td>" . $user_data['stok'] . "</td>";
                            echo "<td><a href='editSparepart.php?kode_sparepart=$user_data[kode_sparepart]'><i class='fa-solid fa-pen-to-square'></i></a> |
            <a href='deleteSparepart.php?kodeSparepart=$user_data[kode_sparepart]'><i class='fa-solid fa-trash text-danger'></i></a></td></tr>";
                        }
                        ?>


                    </table>
                </div>
            </div>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <!-- Font Awesome -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>