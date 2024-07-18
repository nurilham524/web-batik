<?php
ob_start();
require '../koneksi.php';
$id_konsumen = $_GET['id_konsumen'];
$result = mysqli_query($conn, "SELECT * FROM konsumen WHERE id_konsumen='$id_konsumen'");
$dataKonsumen = mysqli_fetch_assoc($result);
$refProduk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk");
$refTransaksi = mysqli_query($conn, "SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleHome.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <title>Edit Data</title>
</head>
<style type="text/css">
    * {
        font-family: 'Trebuchet MS';
    }

    .base {
        width: 400px;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        background: rgb(0, 0, 0);
        background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.8295693277310925) 0%, rgba(0, 0, 0, 0.5718662464985995) 0%);
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

    body {
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
                        <a class="nav-link" href="../admin/">Produk</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            others
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="tambah_data.php">add new product</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="ReadKonsumen.php">Data Konsumen</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="" method="post" class="base text-light mt-5">
        <div>
            <label for="id_konsumen">Id Konsumen</label>
            <input type="text" name="id_konsumen" value="<?php echo
                $dataKonsumen['id_konsumen'] ?>" readonly>
        </div>
        <div>
            <label for="nama_konsumen">Nama Konsumen</label>
            <input type="text" name="nama_konsumen" value="<?php echo
                $dataKonsumen['nama_konsumen'] ?>">
        </div>
        <div>
            <label for="no_hp">Nomor Hp</label>
            <input type="text" name="no_hp" value="<?php echo
                $dataKonsumen['no_hp'] ?>">
        </div>
        <div>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" value="<?php echo
                $dataKonsumen['alamat'] ?>">
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
            <label for="qty">Jumlah Beli</label>
            <input type="text" name="qty" value="<?php echo
                $dataKonsumen['qty'] ?>">
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
        <input type="submit" value="Simpan" name="submit" class="btn btn-danger">

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
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i
                                        class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i
                                        class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-light" style="font-size: 23px;"><i
                                        class="fab fa-whatsapp"></i></a>
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
        $id_produk = $_POST['id_produk'];
        $qty = $_POST['qty'];
        $id_transaksi = $_POST['id_transaksi'];
        $result = mysqli_query($conn, "UPDATE konsumen SET id_konsumen='$id_konsumen', nama_konsumen='$nama_konsumen', no_hp='$no_hp', alamat='$alamat', id_produk='$id_produk', qty='$qty', id_transaksi='$id_transaksi'  WHERE id_konsumen='$id_konsumen'");
        header('Location: tampil_data.php');
        ob_end_flush();
    }

    ?>
</body>

</html>