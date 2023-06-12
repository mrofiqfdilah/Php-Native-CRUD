<?php
include ('koneksi.php');

$id = $_GET['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM crud1 WHERE id='$id' LIMIT 1");
  $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="form" action="update.php" method="post">
      <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">
      <table border="0" align="center">
        <tr>
          <td>Nama Lengkap</td>
          <td>:</td>
          <td><input type="text" name="nama" value="<?php echo $data[0]['nama']?>" required=""></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><input type="text" name="alamat" value="<?php echo $data[0]['alamat']?>" required=""></td>
        </tr>
        <tr>
          <td>Tempat Lahir</td>
          <td>:</td>
          <td><input type="text" name="tempat" value="<?php echo $data[0]['tempat_lahir']?>" required=""></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>
            <select name="jk">
            <option velue="cowo" <?php echo ($data[0]['jenis_kelamin'] == 'cowo') ? 'selected' : '';?> > cowo</option>
              <option velue="cewe" <?php echo ($data[0]['jenis_kelamin'] == 'cewe') ? 'selected' : '';?>>cewe</option>
            </select>
          </td>
        </tr>
        <tr>
     <td>tanggal</td>
     <td>:</td>
     <td><input type="date" name="tanggal" value="<?php echo $data[0]['tgl_lahir']?>" required=""></td>
   </tr>
   <tr>
   <button type="submit" >Edit</button>
   </tr>
</body>
</html>
