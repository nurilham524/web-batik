<?php
require '../koneksi.php';
ob_start();
$refProduk = mysqli_query($conn, "SELECT * FROM produk");
$refTransaksi = mysqli_query($conn, "SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleHome.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Input Data</title>
</head>
<style type="text/css">
        * {
            font-family: 'Trebuchet MS';
        }
        .base{
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
        }
        body{
            background-image: url(../assets/bg1.jpg);
        }
    </style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="logo navbar-brand" href="#">Batra</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../konsumen/index.php">Home Web</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="../admin/">Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div>
            <div class="row justify-content-center">
                <div class="col mt-5">
                    <h1 class="text-center" style="color: #ffff;">Masukkan Data</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                    <section class="base text-light">
                        <div>
                            <label for="id_konsumen">Id Konsumen : </label>
                            <input type="number" name="id_konsumen">
                        </div>

                        <div>
                            <label for="nama_konsumen">Nama Konsumen : </label>
                            <input type="text" name="nama_konsumen">
                        </div>

                        <div>
                        <label for="no_hp">No Handphone : </label>
                        <input type="text" name="no_hp">
                        </div>

                        <div>
                            <label for="alamat">Alamat Pengiriman: </label>
                            <input type="text" name="alamat">
                        </div>

                        <div>
                        <label for="id_produk">Produk : </label>
                        <select name="id_produk" id="">
                            <?php
                            while (
                                $dataProduk =
                                mysqli_fetch_array($refProduk)
                            ) {
                                ?>
                                <option value="<?php echo
                                    $dataProduk['id_produk']; ?>">
                                    <?php echo
                                        $dataProduk['nama_produk']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        </div>

                        <div>
                        <label for="qty">Jumlah Beli : </label>
                        <input type="number" name="qty" id="">
                        </div>

                        <div>
                        <label for="id_transaksi">Jenis transaksi</label>
                        <select name="id_transaksi" id="">
                            <?php
                            while (
                                $dataTransaksi =
                                mysqli_fetch_array($refTransaksi)
                            ) {
                                ?>
                                <option value="<?php echo
                                    $dataTransaksi['id_transaksi']; ?>">
                                    <?php echo
                                        $dataTransaksi['jenis_transaksi']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        </div>
                        <input type="submit" value="Simpan" name="submit">
                        </section>
                    </form>
                </div>
            </div>
        </div>
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
        $id_konsumen = $_POST['id_konsumen'];
        $nama_konsumen = $_POST['nama_konsumen'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $produk = $_POST['id_produk'];
        $qty = $_POST['qty'];
        $transaksi = $_POST['id_transaksi'];

        $result = mysqli_query($conn, "INSERT INTO konsumen(id_konsumen, nama_konsumen, no_hp, alamat, id_produk, qty, id_transaksi) VALUES('$id_konsumen', '$nama_konsumen', '$no_hp', '$alamat', '$produk', $qty, '$transaksi')");
        header('Location: index.php');
        ob_end_flush();
    }

    ?>
</body>

</html>