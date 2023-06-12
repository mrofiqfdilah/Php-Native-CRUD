<?php

require 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$jk = $_POST['jk'];
$tanggal = $_POST['tanggal'];

$query = "INSERT INTO crud1 VALUES('','$nama','$alamat','$tempat','$jk','$tanggal')";

mysqli_query($koneksi, $query);
header("location:check.php");

?>