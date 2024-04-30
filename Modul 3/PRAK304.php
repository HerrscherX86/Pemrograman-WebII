<?php
$star = isset($_POST['star']) ? intval($_POST['star']) : 0;
if (isset($_POST['tambah'])) {
    $star++;
} elseif (isset($_POST['kurang']) && $star > 0) {
    $star--;
}
$pict = "bintang.png";
?>

<?php for ($i = 0; $i < $star; $i++): ?>
    <img src="<?= htmlspecialchars($pict); ?>" width="80" height="80">
<?php endfor; ?>

<!-- Form handling based on the count of stars -->
<?php if ($star == 0): ?>
<form action="" method="POST">
    Jumlah bintang: <input type="number" name="star" min="0" required><br>
    <button type="submit">Submit</button><br>
</form>
<?php else: ?>
<form action="" method="POST">
    <button type="submit" name="tambah">Tambah</button>
    <input type='hidden' name='star' value='<?= htmlspecialchars($star); ?>'>
    <button type="submit" name="kurang">Kurang</button>
</form>
<?php endif; ?>
