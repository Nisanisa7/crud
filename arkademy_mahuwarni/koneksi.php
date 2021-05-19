<?php

//buat koneksi
$koneksi = mysqli_connect("localhost", "root", "", "arkademy");

//test koneksi
if (mysqli_connect_errno()){
    echo "gagal euyy :" .//penghubung kalimat
    mysqli_connect_error();
}

?>