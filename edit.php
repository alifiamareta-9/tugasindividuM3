<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit Data Mahasiswa</h2>
    <form method="POST" class="mt-3">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']; ?>" required>
        </div>
        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="<?php echo $d['nim']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="<?php echo $d['jurusan']; ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
<?php } ?>

<?php
if (isset($_POST['update'])) {
    $id      = $_POST['id'];
    $nama    = $_POST['nama'];
    $nim     = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id='$id'");
    header("location:index.php");
}
?>