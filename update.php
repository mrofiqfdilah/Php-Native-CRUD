<?php

include('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$jk = $_POST['jk'];
$tanggal = $_POST['tanggal'];

$update = mysqli_query($koneksi , "UPDATE crud1 SET nama='$nama', alamat='$alamat' , tempat_lahir='$tempat' , jenis_kelamin='$jk' , tgl_lahir='$tanggal' WHERE id='$id' ");

header("location:check.php?");


?>