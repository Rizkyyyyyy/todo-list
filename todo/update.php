<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $tugas = $_POST['tugas'];
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];

    // Update data
    $query = "UPDATE todos SET tugas = '$tugas', tanggal_awal = '$tanggal_awal', tanggal_akhir = '$tanggal_akhir' WHERE id = $id";
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
}
?>
