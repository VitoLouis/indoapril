<?php
session_start();
include 'koneksi.php';

    if(isset($_POST['check'])){
        $ambiluser=$_SESSION['ambilid'];
        $ambilpmbyr = "cash";

        $query = mysqli_query($koneksi,"INSERT INTO transaksi (UserID,Tanggal_Transaksi,Waktu_Transaksi,Metode_Pembayaran) VALUES ('$ambiluser',CURRENT_DATE,CURRENT_TIME,'$ambilpmbyr')");
    }


?>