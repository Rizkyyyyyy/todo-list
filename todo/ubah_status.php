<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Ambil status saat ini
    $query = "SELECT status FROM todos WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    
    // Ubah status
    $status_baru = ($row['status'] == 'Belum') ? 'Sudah' : 'Belum';
    $query = "UPDATE todos SET status = '$status_baru' WHERE id = $id";
    
    if (mysqli_query($koneksi, $query)) {
        header('Location: index.php');
    } else {
        echo "Gagal mengubah status: " . mysqli_error($koneksi);
    }
}
?>
