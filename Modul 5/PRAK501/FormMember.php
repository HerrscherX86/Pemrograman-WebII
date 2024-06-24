<?php require('Model.php');
if (isset($_GET['id_member'])) {
    editmember();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Desain.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Member</title>
</head>
<body>
    <form action="" method="post">
        <div class="container">
        <table border="1" class="table table-dark table-hover">
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="10" required> <?php echo (isset($_GET['id_member'])) ?  $result[0]["alamat"]  : ""; ?> </textarea>  <br></td>
            </tr>
            <tr>
                <td>Tanggal Mendaftar</td>
                <td><input type="datetime-local" name="tgl_daftar"<?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Terakhir Bayar</td>
                <td><input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required><br></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php 
                    if (isset($_GET['id_member'])) {
                        echo "<button type=\"submit\" name=\"update\">Update</button>";
                    }
                    else {
                        echo "<button type=\"submit\" name=\"submit\"  class=\"btn btn-success\" >Tambah</button>";
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $tgl_daftar = date_create($_POST['tgl_daftar']);
        $tgl_daftar = date_format($tgl_daftar,"Y-m-d H:i:s");
        print_r($_POST);
        tambahdatamember($_POST['nama'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['update'])) {
        $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
        updatemember($_GET['id_member'],$_POST['nama'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    ?>
        </div> 
</body>
</html>