<?php 
include 'koneksi.php';

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

//proses database
mysqli_query($koneksi,"INSERT INTO produk VALUES ('$id_produk','$nama_produk', '$keterangan', '$jumlah','$harga')");

header("location: produk.php");





 ?>