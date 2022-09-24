<?php
    $host="localhost";
    $user="root";
    $password="";
    $database="syamsir";

    $koneksi=mysqli_connect($host, $user, $password);
    mysqli_select_db($koneksi, $database);

    //cek koneksi
    if($koneksi){
        echo "berhasil terhubung";
    } else {
        echo "gagal terhubung";
    }
?>
