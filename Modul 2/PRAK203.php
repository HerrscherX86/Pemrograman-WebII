<html>
<head>
    <title>Praktikum 203</title>
</head>
<body>
<form action="" method="POST">
    <label for="nilai">Nilai :</label>
    <input type="text" id="nilai" name="nilai"><br>

    <label for="suhuawal">Dari :</label><br>
    <input type="radio" name="suhuawal" id="acelcius" value="celcius">Celcius<br>
    <input type="radio" name="suhuawal" id="afahrenheit" value="fahrenheit">Fahrenheit<br>
    <input type="radio" name="suhuawal" id="areamur" value="reamur">Reamur<br>
    <input type="radio" name="suhuawal" id="akelvin" value="kelvin">Kelvin<br>

    <label for="suhuakhir">Ke :</label><br>
    <input type="radio" name="suhuakhir" id="tcelcius" value="celcius">Celcius<br>
    <input type="radio" name="suhuakhir" id="tfahrenheit" value="fahrenheit">Fahrenheit<br>
    <input type="radio" name="suhuakhir" id="treamur" value="reamur">Reamur<br>
    <input type="radio" name="suhuakhir" id="tkelvin" value="kelvin">Kelvin<br>

    <button type="submit" name="submit">Konversi</button><br><br>
</form>

<?php
if(isset($_POST['submit'])){
    $nilai = $_POST['nilai'];
    $suhuawal = $_POST['suhuawal'];
    $suhuakhir = $_POST['suhuakhir'];
    $hasil = 0;

    switch($suhuawal) {
        case "celcius":
            switch($suhuakhir) {
                case "celcius":
                    $hasil = $nilai;
                    break;
                case "fahrenheit":
                    $hasil = $nilai * (9/5) + 32;
                    break;
                case "reamur":
                    $hasil = $nilai * (4/5);
                    break;
                case "kelvin":
                    $hasil = $nilai + 273.15;
                    break;
            }
            break;
        case "fahrenheit":
            // Add other cases for Fahrenheit conversion
        case "reamur":
            // Add other cases for Reamur conversion
        case "kelvin":
            // Add other cases for Kelvin conversion
    }

    echo "<b>Hasil Konversi: $hasil &#176</b>";
}
?>
</body>
</html>
