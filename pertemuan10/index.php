<?php 
require 'helper/functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<a href="create.php">Tambah data mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $baris)  : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="delete.php?id=<?= $baris["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
        </td>
        <td><img src="img/<?= $baris["gambar"]; ?>" width="50"></td>
        <td><?= $baris["nim"]; ?></td>
        <td><?= $baris["nama"]; ?></td>
        <td><?= $baris["email"]; ?></td>
        <td><?= $baris["prodi"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
   
</table>
</body>
</html>