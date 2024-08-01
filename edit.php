<?php

include 'koneksi.php';
$id = $_GET["id"];
$aksesdataid = "SELECT * FROM tb_crud WHERE id = '$id';";
$query = mysqli_query($konn, $aksesdataid);
$result = mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- awal tabel -->
        <h1>Edit data</h1>
        <form action="update.php" method="POST">
            <div class="mb-3">
                <input type="hidden" name="id" class="form-control" id="id" value="<?= $result["id"]; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $result["nama"]; ?>">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                <input type="text" name="nim" class="form-control" value="<?= $result["nim"]; ?>" id="nim" placeholder="isikan nim kamu" required>
            </div>
            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
            <select id="jeniskelamin" class="form-select" aria-label="Default select example" name="jeniskelamin">
                <option value="laki-laki" <?php if ($result["jeniskelamin"] == "laki-laki") echo "selected" ?>>laki-laki</option>
                <option value="perempuan" <?php if ($result["jeniskelamin"] == "perempuan") echo "selected" ?>>perempuan</option>
            </select>
            <button type="submit" class="btn btn-primary mt-4">Ubah Data</button>
            <a href="index.php" class="btn btn-danger mt-4">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>