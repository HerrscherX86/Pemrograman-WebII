<?php require('Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Desain.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <form action="" method="post" class="formbuku">
        <table class="table table-dark table-hover">
            <tr>
                <td>Judul :</td>
                <td><input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Penulis :</td>
                <td><input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Penerbit :</td>
                <td><input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tahun Terbit :</td>
                <td><input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php 
                    if (isset($_GET['id_buku'])) {
                        echo "<button type=\"submit\" name=\"update\">Update</button>";
                    }
                    else {
                        echo "<button type=\"submit\" name=\"submit\" class=\"btn btn-success\" >Tambah</button>";
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        tambahdatabuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
       updatebuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['thnterbit']);
    }
    ?>
</body>
</html>