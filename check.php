<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM crud1 ORDER BY id DESC");
?> 
<form action="" method="post">
	    <table  border="1">
	        <tr class="th1">
	            <th>No</th>
	            <th>Nama</th>
	            <th>Alamat</th>
	            <th>tempat lahir</th>
	            <th>Jenis kelamin</th>
	            <th>tgl_lahir</th>
	            <th>aksi</th>
	        </tr>
	        <?php if(mysqli_num_rows($query)>0){ ?>
	        <?php
	            $no = 1;
	            while($data = mysqli_fetch_assoc($query)){
	        ?>
            <tr>
	            <td><?php echo $no ?></td>
	            <td><?php echo $data["nama"];?></td>
	            <td><?php echo $data["alamat"];?></td>
	            <td><?php echo $data["tempat_lahir"];?></td>
	            <td><?php echo $data["jenis_kelamin"];?></td>
	            <td><?php echo $data["tgl_lahir"];?></td> 
	            <td>
	            	<a href="edit.php?id=<?php echo $data['id']?>">Edit</a>
	            	<a href="delete.php?id=<?php echo $data['id']?>" onclick="return confirm('yakin menghapus data');">
	            	<input type="button" value="hapus">
	            </a>
	            </td>
	        </tr>
	        <?php $no++; } ?>
	        <?php } ?>
	    </table>
	</form>

</body>
</html>
