<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];

    // 1. Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    // 2. Cek koneksi dengan MySQL
    if(mysqli_connect_errno()){
        echo "Koneksi gagal ". mysqli_connect_error();
    }else{
        echo "Koneksi berhasil";
    }

    $sql = "DELETE FROM mahasiswa WHERE id='$id'";

    if (mysqli_query($con,$sql)){
        echo "Data berhasil dihapus";
    } else {
        echo "error". mysqli_error($con);
    }

    mysqli_close($con);
}

?>