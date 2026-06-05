<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];

    $query = "INSERT INTO tb_buku (judul_buku, pengarang) 
              VALUES ('$judul', '$pengarang')";
    mysqli_query($conn, $query);

    header("Location: viewdata.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Tambah Buku</h2>

    <form method="POST">
        <div class="mb-3">
            <label>Judul Buku</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Pengarang</label>
            <input type="text" name="pengarang" class="form-control" required>
        </div>

        <button type="submit" name="simpan" class="btn btn-primary">
            Simpan
        </button>
    </form>
</div>

</body>
</html>