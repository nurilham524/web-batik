<?php
require '../koneksi.php';
require 'session.php';

$result = mysqli_query($conn, "SELECT * FROM konsumen");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7c85dc7fad.js" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-color: #eaeaea;
    }
</style>

<body>
    <?php require 'navbar.php'; ?>
    <div class="container mt-5">
    
                <table border="1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><i class="fa-regular fa-hashtag me-1"></i>ID</th>
                            <th><i class="fa-sharp fa-solid fa-file-signature me-1"></i>Nama</th>
                            <th><i class="fa-solid fa-image me-1"></i>No.Hp</th>
                            <th><i class="fa-sharp fa-solid fa-tags me-1"></i>Alamat</th>
                        </tr>
                    </thead>
                    <?php
                    while ($data = mysqli_fetch_array($result)) {
                        ?>
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
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            
    </div>
    <!-- Awal Footer -->
    <footer class="pt-5 pb-4">
        <div class="container">
        <hr class="mb-4">
        <div class="row align-items-center">
          <div class="col-md-7 col-lg-8 text-md-start">
            <p>Copyright @2023 All rights reserved by:
              <a href="#" style="text-decoration: none;">
              <strong class="text-warning">BATRA OFFICIAL</strong></a>
            </p>
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="text-center text-md-end">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-whatsapp"></i></a>
                  </li>

                </ul>
              </div>
            </div>
        </div>
      </div>
    <script src="../../../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>