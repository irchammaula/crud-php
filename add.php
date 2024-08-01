<?php
include 'koneksi.php';


$nama = $_POST["nama"];
$nim = $_POST["nim"];
$jeniskelamin = $_POST["jeniskelamin"];

$y = "INSERT INTO tb_crud (nama, nim, jeniskelamin) VALUES ('$nama','$nim','$jeniskelamin');";

$query = mysqli_query($konn, $y);

if ($query) {
    header("Location:index.php");
}
