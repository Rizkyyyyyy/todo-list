<?php
include 'koneksi.php';

if (isset($_POST['tugas'])) {
    $tugas = $_POST['tugas'];
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    
    $query = "INSERT INTO todos (tugas, tanggal_awal, tanggal_akhir) VALUES ('$tugas', '$tanggal_awal', '$tanggal_akhir')";
    if (mysqli_query($koneksi, $query)) {
        header('Location: index.php');
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
