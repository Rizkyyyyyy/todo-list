<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">To Do List</h1>

        <!-- Form Tambah Tugas -->
        <form action="simpan.php" method="POST">
    <div class="mb-3">
        <label for="tugas" class="form-label">Tugas</label>
        <input type="text" name="tugas" class="form-control" id="tugas" required>
    </div>
    <div class="mb-3">
        <label for="tanggal_awal" class="form-label">Tanggal Awal</label>
        <input type="date" name="tanggal_awal" class="form-control" id="tanggal_awal" required>
    </div>
    <div class="mb-3">
        <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
        <input type="date" name="tanggal_akhir" class="form-control" id="tanggal_akhir" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
        <!-- Tabel Data Tugas -->
        <table class="table mt-4">
    <thead>
        <tr>
            <th>No</th>
            <th>Tugas</th>
            <th>Tanggal Awal</th>
            <th>Tanggal Akhir</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM todos ORDER BY id DESC";
        $result = mysqli_query($koneksi, $query);
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$no}</td>";
            echo "<td>{$row['tugas']}</td>";
            echo "<td>{$row['tanggal_awal']}</td>";
            echo "<td>{$row['tanggal_akhir']}</td>";
            echo "<td>{$row['status']}</td>";
            echo "<td>
                    <a href='ubah_status.php?id={$row['id']}' class='btn btn-success'>Ubah Status</a>
                    <a href='edit.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                    <a href='hapus.php?id={$row['id']}' class='btn btn-danger'>Hapus</a>
                  </td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </tbody>
    </table>

    </div>
</body>
</html>
