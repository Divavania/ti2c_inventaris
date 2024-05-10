<?php 
include 'koneksi.php';

$nomor = $_POST['nomor'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
 
$query=mysqli_query($koneksi,"update printer set nama_merek='$nama_merek', warna='$warna', jumlah='$jumlah' where nomor='$nomor'");
 
header('location:lihat.php');
?>