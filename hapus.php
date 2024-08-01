<?php
include "koneksi.php";

$id = $_GET["id"];

$x = "DELETE FROM tb_crud WHERE id = $id";

$result = mysqli_query($konn, $x);

if ($result) {
    header("Location:index.php");
}
