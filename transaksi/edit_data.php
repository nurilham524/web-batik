<?php
require '../koneksi.php';
$id_transaksi = $_GET['id_transaksi'];
$result = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'");
$dataTransaksi = mysqli_fetch_assoc($result);
$refProduk = mysqli_query($conn, "SELECT * FROM produk");
$refKonsumen = mysqli_query($conn, "SELECT * FROM konsumen");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>ID Transaksi</td>
                <td>:</td>
                <td>
                    <input type="text" name="id_transaksi" value="<?php echo
                        $dataTransaksi['id_transaksi'] ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Jenis Transaksi</td>
                <td>:</td>
                <td>
                    <input type="text" name="jenis_transaksi" value="<?php echo
                        $dataTransaksi['jenis_transaksi'] ?>">
                </td>
            </tr>
            <tr>
                <td>Produk</td>
                <td>:</td>
                <td>
                    <select name="produk" id="">
                        <?php
                        while (
                            $dataProduk = mysqli_fetch_array($refProduk)) {
                            ?>
                            <option value="<?php echo $dataProduk['id_produk']; ?>">
                                <?php echo
                                    $dataProduk['nama_produk']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Konsumen</td>
                <td>:</td>
                <td>
                    <select name="konsumen" id="">
                        <?php
                        while (
                            $dataKonsumen =
                            mysqli_fetch_array($refKonsumen)
                        ) {
                            ?>
                            <option value="<?php echo
                                $dataKonsumen['id_konsumen']; ?>">
                                <?php echo
                                    $dataKonsumen['nama_konsumen']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Simpan" name="submit">
                </td>
            </tr>
        </table>
    </form>
    <?php
    require '../koneksi.php';

    if (isset($_POST['submit'])) {
        $id_transaksi = $_POST['id_transaksi'];
        $jenis_transaksi = $_POST['jenis_transaksi'];
        $produk = $_POST['produk'];
        $konsumen = $_POST['konsumen'];

        $result = mysqli_query($conn, "UPDATE transaksi SET id_transaksi='$id_transaksi', jenis_transaksi ='$jenis_transaksi', produk='$produk', konsumen='$konsumen' WHERE id_transaksi='$id_transaksi'");
        header('Location: tampil_data.php');
    }


    ?>
</body>

</html>