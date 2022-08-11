<?php

include_once("config.php");

$kode_sparepart = $_GET['kode_sparepart'];

$result = mysqli_query($mysqli, "DELETE FROM dataSparepart WHERE kode_sparepart='" . $kode_sparepart . "'");

header("Location:tableSparepart.php");
