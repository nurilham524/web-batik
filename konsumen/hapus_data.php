<?php
 require '../koneksi.php';
 $id_konsumen = $_GET['id_konsumen'];
 $result = mysqli_query($conn, "DELETE FROM konsumen WHERE id_konsumen='$id_konsumen'");

 header('Location: tampil_data.php');
?>