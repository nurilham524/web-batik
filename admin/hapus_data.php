<?php
 require '../koneksi.php';
 $id_produk = $_GET['id_produk'];
 $result = mysqli_query($conn, "DELETE FROM produk WHERE id_produk='$id_produk'");

 header('Location: index.php');
?>