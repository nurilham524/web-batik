<?php
require '../koneksi.php';
require '../admin/session.php';
$result = mysqli_query($conn, "SELECT * FROM konsumen");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7c85dc7fad.js" crossorigin="anonymous"></script>
    <title>Tampil Data Konsumen</title>
</head>
<style>
  body{
    background-image: url(../assets/bg1.jpg);
  }
  table{
    background-color:aliceblue;
  }
</style>
<body>
<?php require 'navbar.php'; ?>
    <div class="container mt-5">
        <table class="table table-bordered table-striped-columns table-hover">
            <thead>
              <tr class="table-primary">
                <th>ID Konsumen</th>
                <th>Nama Konsumen</th>
                <th>Nomor Hp</th>
                <th>Alamat/Lokasi</th>
                <th>Produk</th>
                <th>Harga Produk</th>
                <th>Jumlah Pembelian</th>
                <th>Pembayaran</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <?php
            while ($data = mysqli_fetch_array($result)) {
                ?>
                <tbody>
                <tr>
                    <td>
                        <?php echo $data['id_konsumen']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_konsumen']; ?>
                    </td>
                    <td>
                      <?php echo $data['no_hp']; ?>
                    </td>
                    <td>
                        <?php echo $data['alamat']; ?>
                    </td>
                    <td>
                        <?php
                        $queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk=" . $data['id_produk']);
                        $dataProduk = mysqli_fetch_assoc($queryProduk);
                        ?>
                        <?php echo "<img src='../img/" . $dataProduk['gambar'] . "'style='width:100px; height:100px;'>" ?>
                    </td>
                    <td>
                        <?php echo $dataProduk['harga_produk']; ?>
                    </td>
                    <td>
                        <?php echo $data['qty']; ?>
                    </td>
                    <td>
                        <?php
                        $queryTransaksi = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi=" . $data['id_transaksi']);
                        $dataTransaksi = mysqli_fetch_assoc($queryTransaksi);
                        echo $dataTransaksi['jenis_transaksi'];
                        ?>
                    </td>
                    <td>
                        <a href="edit_data.php?id_konsumen=<?php
                        echo $data['id_konsumen']; ?>">
                            <i class="fa-solid fa-pen-to-square me-3" style="color:black;"></i>
                        </a>

                        <a href="hapus_data.php?id_konsumen=<?php echo
                            $data['id_konsumen']; ?>">
                            <i class="fa-solid fa-trash-can" style="color:black;"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
                <?php
            }
            ?>
        </table>
    </div>
    <!-- Awal Footer -->
    <footer class="pt-5 pb-4">
        <div class="container">
        <hr class="mb-4 text-light">
        <div class="row align-items-center">
          <div class="text-light col-md-7 col-lg-8 text-md-start">
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
</body>

</html>