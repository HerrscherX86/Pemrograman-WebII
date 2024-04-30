<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 303</title>
    <style>
        img {
            height: 30px;
            width: 30px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Batas Bawah: <br> <input type="number" name="bawah" required><br>
        Batas Atas: <br> <input type="number" name="atas" required><br>
        <input type="submit" value="Cetak" name="hitung">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hitung'])) {
        $bawah = (int)$_POST['bawah'];
        $atas = (int)$_POST['atas'];

        if ($bawah <= $atas) {
            $i = $bawah;
            do {
                if (($i + 7) % 5 === 0) {
                    echo '<img src="bintang.png" alt="Star">';
                } else {
                    echo htmlspecialchars($i) . " ";
                }
                $i++;
            } while ($i <= $atas);
        } else {
            echo "Batas Bawah harus lebih kecil atau sama dengan Batas Atas.";
        }
    }
    ?>
</body>
</html>
