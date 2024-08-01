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
        <h1>tambah data</h1>
        <form action="add.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="isikan nama kamu" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                <input type="text" name="nim" class="form-control" id="nim" placeholder="isikan nim kamu" required>
            </div>
            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
            <select id="jeniskelamin" class="form-select" aria-label="Default select example" name="jeniskelamin">
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
            </select>
            <button type="submit" class="btn btn-primary mt-4">Tambah Data</button>
            <a href="index.php" class="btn btn-danger mt-4">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>