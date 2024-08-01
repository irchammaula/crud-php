<?php
include("koneksi.php");
$id = $_GET["id"];
$aksesdataid = "SELECT * FROM tb_crud WHERE id = '$id';";
$query = mysqli_query($konn, $aksesdataid);
$result = mysqli_fetch_assoc($query);
var_dump($result);


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
        <h1>praktik crud</h1>
        <table class="table text-center">
            <thead>
                <th colspan="2" scope="col">Nama :<?= $result["nama"]; ?></th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php echo $result["nim"]; ?>
                    </td>
                    <td><?php echo $result["jeniskelamin"]; ?></td>
                </tr>
            </tbody>
        </table>
        <a href="index.php" type="button" class="btn btn-primary">Kembali</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>