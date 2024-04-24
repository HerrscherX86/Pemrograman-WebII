<html>
<head>
    <title>Praktikum 204</title>
</head>
<body>
<form action="" method="POST">
    <label for="nilai">Nilai :</label>
    <input type="text" id="nilai" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
    <button type="submit" name="submit">Konversi</button>
</form>

<?php
if(isset($_POST['submit'])){
    $nilai = $_POST['nilai'];
    $x = strlen($nilai);

    if($nilai == 0){
        echo "<h2><b>Hasil: Nol</b></h2>";
    } elseif($nilai > 0 && $nilai < 10){
        echo "<h2><b>Hasil: Satuan</b></h2>";
    } elseif ($nilai >= 10 && $nilai < 20){
        echo "<h2><b>Hasil: Belasan</b></h2>";
    } elseif ($nilai >= 20 && $nilai < 100){
        echo "<h2><b>Hasil: Puluhan</b></h2>";
    } elseif ($x == 3){
        echo "<h2><b>Hasil: Ratusan</b></h2>";
    } elseif ($nilai == 1000){
        echo "<h2><b>Hasil: Anda Menginput Melebihi Limit Bilangan</b></h2>";
    }
}
?>
</body>
</html>
