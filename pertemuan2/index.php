<?php
// komentar bisa digunakan dengan "ctrl + /"

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// vaar_dump

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Dara
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Radinka Rafi";
// echo "hallo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatention / concat
// $nama_depan = "Radinka";
// $nama_belakang = "Rafi";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Radinka";
// $nama .= " ";
// $nama .= "Rafi";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 === "1");

// Identitas
// ===, !===

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>
