<?php
require '../koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM transaksi");
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

    <title>Tampil Data Transaksi</title>
</head>
<style type="text/css">

    @import url('https://fonts.googleapis.com/css2?family=Niconne&display=swap');

    .navbar {
        background-color: black;
    }

    .logo {
        font-family: 'Niconne', cursive;
        font-size: 48px;
    }

    table {
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
    <div class="container text-light">
    <h3>Jenis Pembayaran</h3>
    <table class="table table-bordered table-striped text-light" width="1000px">
        <tr class="text-light bg-dark">
            <td>ID Transaksi</td>
            <td>Jenis Transaksi</td>
            <td>Aksi</td>
        </tr>
        <?php
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr class="text-light">
                <td>
                    <?php echo $data['id_transaksi']; ?>
                </td>
                <td>
                    <?php echo $data['jenis_transaksi']; ?>
                </td>
                <td>
                    <a href="edit_data.php?id_transaksi=<?php echo $data['id_transaksi']; ?>">
                        Edit
                    </a>
                    <a href="hapus_data.php?id_transaksi=<?php echo $data['id_transaksi']; ?>">
                        Hapus
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <div class="link text-light"><a href="tambah_data.php">Tambah Data</a></div>
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
</body>

</html>