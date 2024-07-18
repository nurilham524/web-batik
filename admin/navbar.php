<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Niconne&display=swap');

    .navbar {
        background-color: black;
    }

    .logo {
        font-family: 'Niconne', cursive;
        font-size: 48px;
    }
</style>

<body>

    <script src="" async defer></script>

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
                            <li><a class="dropdown-item" href="tambah_data.php">Tambah Produk</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="ReadKonsumen.php">Data Konsumen</a></li>
                            <li><a class="dropdown-item" href="../konsumen/tampil_data.php">Tampil Transaksi</a></li>
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
</body>

</html>