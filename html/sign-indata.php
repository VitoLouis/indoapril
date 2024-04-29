<?php
include "koneksi.php";

session_start();

if ( isset($_POST["sign-in"])){
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE Nama = '$username' AND Pwd= '$password'");
    while($titid= mysqli_fetch_array($result)){
        $_SESSION['emailll'] =$titid['Email'];
        $_SESSION['useridd'] =$titid['UserID'];
    }
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $menghitung = mysqli_num_rows($result);
    

    //cek username//
    $query =mysqli_query($koneksi, "SELECT * FROM user ");
   

if ($menghitung == 1){
    $_SESSION ['Username'] = $username;
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



