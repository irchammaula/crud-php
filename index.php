<?php

include 'koneksi.php';

$aksessql = "SELECT * FROM tb_crud";
$query = mysqli_query($konn, $aksessql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
var_dump($result);

$no = 0;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<script>
    function confirmDeletion(event, url) {
        if (!confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            event.preventDefault();
        } else {
            window.location.href = url;
        }
    }
</script>

<body>
    <div class="container">
        <!-- awal tabel -->
        <h1>praktik crud</h1>
        <a href="insert.php" type="button" class="btn btn-primary">Tambahkan Data</a>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NIM</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $pegawai) : ?>
                    <tr>
                        <th><?php echo ++$no; ?>.</th>
                        <td><a href="profile.php?id=<?php echo $pegawai["id"]; ?>"><?php echo $pegawai["nama"]; ?></< /td>
                        <td><?php echo $pegawai["nim"]; ?></td>
                        <td><?php echo $pegawai["jeniskelamin"]; ?></td>
                        <td><a href="edit.php?id=<?php echo $pegawai["id"]; ?>" type="button" class="btn btn-primary">Edit</a>
                            <a href="hapus.php?id=<?php echo $pegawai["id"]; ?>" onclick="confirmDeletion(event, this.href)" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>