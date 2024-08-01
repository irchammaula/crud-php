<?php

include 'koneksi.php';

$id = $_POST["id"];
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$jeniskelamin = $_POST["jeniskelamin"];

$y = "UPDATE tb_crud SET nama ='$nama', nim ='$nim',jeniskelamin ='$jeniskelamin' WHERE id = $id";

$query = mysqli_query($konn, $y);
if ($query) {
    header("Location:index.php");
}
