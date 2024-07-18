<?php
        require '../koneksi.php';

        if (isset($_POST['submit'])) {
            $id_produk = $_POST['id_produk'];
            $nama_produk = $_POST['nama_produk'];

            $nama_file_baru = $_FILES['gambar']['name'];
            $ukuran_file = $_FILES['gambar']['size'];
            $tipe_file = $_FILES['gambar']['type'];
            $lokasi_ambil_file = $_FILES['gambar']['tmp_name'];
            $lokasi_simpan_file = "../img/" . $nama_file_baru;

            move_uploaded_file($lokasi_ambil_file, $lokasi_simpan_file);
            $harga_produk = $_POST['harga_produk'];

            $result = mysqli_query($conn, "INSERT INTO produk(id_produk, nama_produk, gambar, harga_produk) 
            VALUES('$id_produk', '$nama_produk', '$nama_file_baru','$harga_produk')");
            header('Location: index.php');
        }

        ?>