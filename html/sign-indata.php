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
    $query = "SELECT * FROM user WHERE Email = '$username' AND Pwd= '$password'";

if ($menghitung == 1){
    $_SESSION ['Username'] = $username;
    $_SESSION ['email'] = $email;
    header("Location: index.php");
}
   

    else {
        $error = "USERNAME ATAU PASSWORD SALAH, SILAHKAN COBA LAGI";
        echo "<script> 
            alert ('$error');
            window.location.href = 'sign-in.php';
            </script>";
    }
    }



