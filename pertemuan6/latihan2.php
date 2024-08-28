<?php
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Radinka Rafi",
        "nim" => "23106050059",
        "email" =>"rafi.radinka@gmail.com", 
        "prodi" => "Informatika",
        "gambar" => "zoro.jpeg"
    ],
    [
        "nama" => "Ahmad Pradipt",
        "nim" => "23106050090", 
        "email" => "ahmad.pradipta@gmail.com",
        "prodi" => "Biomedis",
        "gambar" => "robin.jpeg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) :?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>email : <?= $mhs["email"]; ?></li>
            <li>Prodi : <?= $mhs["prodi"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>