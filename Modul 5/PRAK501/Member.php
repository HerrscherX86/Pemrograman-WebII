<?php
require('Model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Desain.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Section</title>
    <style>
    </style>
</head>
<body>
    <div class="container">
        <table border="1" class="table table-dark table-hover">
            <tr>
                <th>Nomor Member</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
            <?= tampildata("member") ?>
        </table>
    <br>
    <a href="FormMember.php" class="btn btn-success" >Tambah Data</a>
    </div>
</body>
</html>