K<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'todo_app';

// Koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
