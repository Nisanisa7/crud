<?php 
include 'koneksi.php';

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk',keterangan='$keterangan',jumlah='$jumlah',harga='$harga' WHERE id_produk='$id_produk'");

header("location: produk.php");




 ?>