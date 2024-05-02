<?php
include "koneksi.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    if(isset($_POST["fullname"], $_POST["email"], $_POST["address"], $_POST["telephone"], $_POST["password"])) {
        
        $fullname   = $_POST["fullname"];
        $email      = $_POST["email"];
        $address    = $_POST["address"];
        $telephone  = $_POST["telephone"];
        $password   = $_POST["password"];

        if(!empty($fullname) && !empty($email) && !empty($address) && !empty($telephone) && !empty($password)) {

            $fullname   = mysqli_real_escape_string($koneksi, $fullname);
            $email      = mysqli_real_escape_string($koneksi, $email);
            $address    = mysqli_real_escape_string($koneksi, $address);
            $telephone  = mysqli_real_escape_string($koneksi, $telephone);
            $password   = mysqli_real_escape_string($koneksi, $password);


            $query_sql = "INSERT INTO user (Nama, Roles, Email, Alamat, Telepon, Pwd) 
                          VALUES ('$fullname', '1', '$email', '$address', '$telephone', '$password')";

            if (mysqli_query($koneksi, $query_sql)) {
                header("Location: sign-in.php");
                exit;
            } else {
              
                echo "<script>alert('Pendaftaran Gagal: " . mysqli_error($koneksi) . "');</script>";
                echo "<script>window.location = 'sign-up.php';</script>";
            }
        } else {
            
            echo "<script>alert('SEMUA FIELD HARUS DIISI.');</script>";
            echo "<script>window.location = 'sign-up.php';</script>";
        }
    } else {
        echo "<script>alert('DATA YANG DIPERLUKAN TIDAK DI TEMUKAN.');</script>";
        echo "<script>window.location = 'sign-up.php';</script>"; 
    }
}
?>
