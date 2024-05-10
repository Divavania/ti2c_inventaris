<?php
include "koneksi.php";
$nomor = $_GET['nomor'];
$query = mysqli_query($koneksi, "delete from printer where nomor='$nomor'");
header('location:lihat.php');
?>