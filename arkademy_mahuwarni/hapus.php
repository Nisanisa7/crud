<?php 
include 'koneksi.php';

mysqli_query($koneksi,"DELETE FROM produk where id_produk='$_GET[no]' ");

header("location: produk.php");



 ?>