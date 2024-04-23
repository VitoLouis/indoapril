<?php
include "koneksi.php";

session_start();

if ( isset($_POST["sign-in"])){
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE Nama = '$username' AND Pwd= '$password'");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $menghitung = mysqli_num_rows($result);

    //cek username//
if ($menghitung == 1){
    $_SESSION ['Username'] = $username;
    header("Location: index.php");
}
   

    else {
        $error = "Username atau Password salah, silahkan Coba Lagi";
        echo "<script> 
            alert ('$error');
            window.location.href = 'sign-in.php';
            </script>";
    }
    }

