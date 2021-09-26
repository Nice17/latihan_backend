<?php

$host = "localhost";
$database = "mls";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);
// mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// echo "Koneksi berhasil";

// query
$tampil = mysqli_query($koneksi, "SELECT * from user");

// batas koneksi
mysqli_close($koneksi);
