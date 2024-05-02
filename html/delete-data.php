<?php
include 'koneksi.php';

$id = $_GET['id'];
 
$query = mysqli_query($koneksi, "DELETE FROM user 
                                WHERE UserID = '$id' ");


header('location:jquery-datatable.php');


?>