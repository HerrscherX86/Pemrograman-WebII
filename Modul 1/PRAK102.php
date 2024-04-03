<?php
$volume = "";
$panjangAlas = $lebarAlas = $tinggiPrisma = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai yang diinput oleh user
    $panjangAlas = isset($_POST['panjangAlas']) ? (float)$_POST['panjangAlas'] : 0;
    $lebarAlas = isset($_POST['lebarAlas']) ? (float)$_POST['lebarAlas'] : 0;
    $tinggiPrisma = isset($_POST['tinggiPrisma']) ? (float)$_POST['tinggiPrisma'] : 0;

    $luasAlas = 0.5 * $panjangAlas * $lebarAlas;
    $volume = $luasAlas * $tinggiPrisma;
    $volume = "Volume Prisma Alas Segitiga: " . number_format($volume, 3, '.', '') . " cm³";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hitung Volume Prisma Segitiga</title>
</head>
<body>
<h2>Masukkan Data Prisma Segitiga</h2>
<form method="post">
    Panjang Alas Segitiga (cm): <input type="number" name="panjangAlas" step="0.01" value="<?php echo $panjangAlas; ?>" required><br>
    Lebar Alas Segitiga (cm): <input type="number" name="lebarAlas" step="0.01" value="<?php echo $lebarAlas; ?>" required><br>
    Tinggi Prisma (cm): <input type="number" name="tinggiPrisma" step="0.01" value="<?php echo $tinggiPrisma; ?>" required><br>
    <input type="submit" value="Hitung Volume">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>$volume</h3>";
}
?>
</body>
</html>
