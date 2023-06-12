<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <table border="1">
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><input type="text" name="nama"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td>:</td>
              <td><input type="text" name="tempat"></td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td><select name="jk">
                <option value="cowo">cowo</option>
                <option value="cewe">cewe</option>
              </select>
            </td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal" ></td>
            </tr>
            <button type="submit">submit</button>
            

        </table>
    </form>
</body>
</html>