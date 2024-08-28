<?php
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) :?>
        <li>
            <a href=
            "latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&prodi=<?= $mhs["prodi"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
            <?= $mhs["nama"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    
</body>
</html>
