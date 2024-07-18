<?php
ob_start();
require '../koneksi.php';
require 'session.php';
$id_produk = $_GET['id_produk'];
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='$id_produk'");
$dataProduk = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7c85dc7fad.js" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Trebuchet MS';
        }
        body{
            background-image: url(../assets/bg1.jpg);
        }

        h1 {
            text-transform: uppercase;
            color: white;
        }

        .base {
            width: 400px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background: rgb(0,0,0);
            background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.8295693277310925) 0%, rgba(0,0,0,0.5718662464985995) 0%);
        }

        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }

        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: blue;
            color: black;
        }

        button[type="submit"] {
            background-color: white;
            color: black;
            padding: 10px;
            font-size: 14px;
            border: 0;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>
    <center>
        <h1>Edit Produk
            <?php echo $dataProduk['nama_produk']; ?>
        </h1>
    </center>
    <form action="" method="post" enctype="multipart/form-data">
        <section class="base text-light">
        <div>
            <label for="id_produk">Id Produk</label>
            <input type="text" name="id_produk" value="<?php echo
                $dataProduk['id_produk']; ?>" readonly>
        </div>
        <div>
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" value="<?php echo
                $dataProduk['nama_produk']; ?>">
        </div>
        <div>

            <label for="Gambar">Gambar Produk</label>
            <img src="../img/<?php echo $dataProduk['gambar']; ?>"
                style="width: 120px; float: left; margin-bottom: 5px;">
            <input type="file" name="gambar" value="<?php echo $dataProduk['gambar'];?>"/>
            <i style="float: left; font-size: 11px; color: red;">*Wajib Diubah Setiap Edit Data;</i>
        </div>
        <div>

            <label for="id_produk">harga_produk</label>
            <input type="text" name="harga_produk" value="<?php echo
                $dataProduk['harga_produk']; ?>">
        </div>
        <div>
            <button type="submit" value="Simpan" name="submit" class="btn btn-outline-primary">Simpan</button>
        </div>
        </section>
    </form>
     <!-- Awal Footer -->
     <footer class="pt-5 pb-4 bg-ligt">
        <div class="container">
        <hr class="mb-4 text-light">
        <div class="row align-items-center">
          <div class="col-md-7 col-lg-8 text-md-start text-light">
            <p>Copyright @2023 All rights reserved by:
              <a href="#" style="text-decoration: none;">
              <strong class="text-warning">BATRA OFFICIAL</strong></a>
            </p>
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="text-center text-md-end">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i class="fab fa-whatsapp"></i></a>
                  </li>

                </ul>
              </div>
            </div>
        </div>
      </div>
    </footer>
    <?php
    require '../koneksi.php';
    if (isset($_POST['submit'])) {
        $id_produk = $_POST['id_produk'];
        $nama_produk = $_POST['nama_produk'];

        $edit_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $lokasi_ambil_file = $_FILES['gambar']['tmp_name'];
        $lokasi_simpan_file = "../img/" . $edit_file;
        move_uploaded_file($lokasi_ambil_file, $lokasi_simpan_file);

        $harga_produk = $_POST['harga_produk'];
        $result = mysqli_query($conn, "UPDATE produk SET id_produk='$id_produk', nama_produk='$nama_produk',gambar='$edit_file', harga_produk='$harga_produk' WHERE id_produk='$id_produk'");
        header('Location: index.php');
        ob_end_flush();
    }

    ?>
    <script src="../../../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>