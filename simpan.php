<?php
include "koneksi.php";
$nomor = $_POST['nomor'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
$query = mysqli_query($koneksi, "insert into printer(nomor,nama_merek,warna,jumlah)value('$nomor','$nama_merek','$warna','$jumlah')");
header('location:index.php');
?>