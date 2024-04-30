<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 301</title>
    <style>
        .even { color: green; }
        .odd { color: red; }
    </style>
</head>
<body>
    <form action="" method="post">
        Jumlah Peserta:
        <input type="number" name="jumlah" min="1" required><br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $peserta = (int)$_POST['jumlah'];

        for ($i = 1; $i <= $peserta; $i++) {
            $class = $i % 2 == 0 ? 'even' : 'odd';
            echo "<h1 class='$class'>Peserta ke-$i</h1>";
        }
    }
    ?>
</body>
</html>
