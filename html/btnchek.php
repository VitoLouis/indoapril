<?php
session_start();
include 'koneksi.php';

    if(isset($_POST['check'])){
        $ambiluser=$_SESSION['useridd'];
        $ambilpmbyr = "cash";

        $query = mysqli_query($koneksi,"INSERT INTO transaksi (UserID,Tanggal_Transaksi,Waktu_Transaksi,Metode_Pembayaran) VALUES ('$ambiluser',CURRENT_DATE,CURRENT_TIME,'$ambilpmbyr')");
    }

    header("location: thankyou.html")

?>