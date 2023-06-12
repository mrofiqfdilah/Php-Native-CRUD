<?php

include('koneksi.php');


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM crud1 WHERE id='$id'");
	
header("location:check.php");


?>
