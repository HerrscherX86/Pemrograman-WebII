<!DOCTYPE html>
<html>
<head>
  <style>
    table, td {
      border: solid 1px black;
      border-collapse: collapse;
      padding: 5px;
      text-align: center;
    }
  </style>
  <title>PRAK401</title>
</head>
<body>
  <?php
  $panjang = $lebar = $nilai = '';
  if (isset($_POST['submit'])) {
    $panjang = (int)$_POST['panjang']; 
    $lebar = (int)$_POST['lebar'];
    $nilai = $_POST['nilai'];

    if (empty($panjang) || empty($lebar) || empty($nilai)) {
      echo 'Please fill in all fields.';
    } else {
      $isi = explode(" ", $nilai);
      if ($panjang * $lebar !== count($isi)) {
        $table_data = '<tr><td colspan="' . ($panjang * $lebar) . '">Panjang nilai tidak sesuai dengan ukuran matriks</td></tr>';
      } else {
        $urutan = 0;
        $table_data = '<table>';
        for ($i = 0; $i < $panjang; $i++) {
          $table_data .= '<tr>';
          for ($j = 0; $j < $lebar; $j++) {
            $table_data .= '<td>' . $isi[$urutan++] . '</td>';
          }
          $table_data .= '</tr>';
        }
        $table_data .= '</table>';
      }
    }
  }
  ?>

  <form action="" method="post">
    Panjang: <input type="text" name="panjang" value="<?php echo $panjang; ?>"><br>
    Lebar: <input type="text" name="lebar" value="<?php echo $lebar; ?>"><br>
    Nilai: <input type="text" name="nilai" value="<?php echo $nilai; ?>"><br>
    <input type="submit" name="submit" value="Cetak"><br>
  </form>

  <?php if (isset($table_data)): ?>
    <?php echo $table_data; ?>
  <?php endif; ?>
</body>
</html>
