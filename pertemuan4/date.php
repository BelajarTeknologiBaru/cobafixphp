<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-y");

// Time
// UNIX Timestamp / Epoch Time ( )etik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("l", time()+60*60*24*2);

// mktime
// membuat sendiri time
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
   // echo date("l", mktime(0,0,0,10,25,2004));

// strtotime
    // echo date("l", strtotime("10 sep 2004"));

// STRING
// strlen() = mengukur panjang dari sebuah string
// strcmp() = membandingkan dua buah string
// explode() = memecah string menjadi array
// htmlspecialchars() = menjaga agar terhindar dari hacker

// UTILITY
// var_dump() = mencetak isi dari sebuah variabel, array, objek
// isset() = untuk mengecek apakah sebuah variabel sudah pernah dibuat atau belum
// empty() = mengecek apakah sebuah variabel ada isinya atau tidak
// die() = memberhentikan program kita
// sleep() = untuk memberhentikan program sementara


?>