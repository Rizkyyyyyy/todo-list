<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "DELETE FROM todos WHERE id = $id";
    if (mysqli_query($koneksi, $query)) {
        header('Location: index.php');
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>
