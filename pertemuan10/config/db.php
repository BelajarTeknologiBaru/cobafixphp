<?php 

// CONNECT TO DATABASE
$conn = mysqli_connect("localhost", "root","", "phpdasar");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}