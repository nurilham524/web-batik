<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Kode Prodi</td>
                <td>:</td>
                <td>
                    <input type="text" name="id_transaksi">
                </td>
            </tr>
            <tr>
                <td>Nama Prodi</td>
                <td>:</td>
                <td>
                    <input type="text" name="jenis_transaksi">
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
        $result = mysqli_query($conn, "INSERT INTO transaksi(id_transaksi, jenis_transaksi) VALUES('$id_transaksi', '$jenis_transaksi')");
        header('Location: tampil_data.php');
    }

    ?>
</body>

</html>