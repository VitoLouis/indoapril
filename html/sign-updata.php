<?php
include "koneksi.php";

session_start();

$fullname       = $_POST["fullname"];
$email          = $_POST["email"];
$address        = $_POST["address"];
$telephone      = $_POST["telephone"];
$password       = $_POST["password"];

$query_sql  = "INSERT INTO user (Nama, Roles, Email, Alamat, Telepon, Pwd) VALUES ('$fullname','1', '$email', '$address', '$telephone', '$password')";


if (mysqli_query($koneksi, $query_sql)) {
  header("Location: sign-in.php");
}
else {
    echo "Pnedaftaran Gagal " . mysqli_error($koneksi);
}
?>