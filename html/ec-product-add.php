<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $id = $_POST['produk'];
        $result = mysqli_query($koneksi, "SELECT * FROM produk WHERE ProductID=$id");

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if (isset($_SESSION['shop'][$id])) {
                $_SESSION['shop'][$id]['jumlah'] += 1;
            } else {
                $_SESSION['shop'][$id] = array(
                    'jumlah' => 1,
                    'name' => $row['Nama_Product'],
                    'price' => $row['Harga_Jual'],
                    'gambar' => $row['Gambar_ProductID']
                );
            }
            header("location: ec-product.php");
        }
    }
}

?>
