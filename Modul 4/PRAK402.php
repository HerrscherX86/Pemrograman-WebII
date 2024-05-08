<!DOCTYPE html>
<html>
<head>
  <style>
    table, tr, td, th {
      border: solid 1px black;
      border-collapse: collapse;
      padding: 5px;
    }
  </style>
  <title>PRAK402</title>
</head>
<body>
  <?php
  $nilai = [
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
  ];

  echo "<table style='width:700px'>";
  echo "<tr style='text-align:left; background-color:lightgrey;'>";
  echo "<th>Nama</th>";
  echo "<th>NIM</th>";
  echo "<th>Nilai UTS</th>";
  echo "<th>Nilai UAS</th>";
  echo "<th>Nilai Akhir</th>";
  echo "<th>Huruf</th>";
  echo "</tr>";

  foreach ($nilai as $siswa) {
    $siswa["akhir"] = $siswa["uts"] * 0.4 + $siswa["uas"] * 0.6;
    $siswa["huruf"] = match ($siswa["akhir"]) {
      default => "E",
      80 => "A",
      70 => "B",
      60 => "C",
      50 => "D",
    };

    echo "<tr>";
    echo "<td>" . $siswa["nama"] . "</td>";
    echo "<td>" . $siswa["nim"] . "</td>";
    echo "<td>" . $siswa["uts"] . "</td>";
    echo "<td>" . $siswa["uas"] . "</td>";
    echo "<td>" . $siswa["akhir"] . "</td>";
    echo "<td>" . $siswa["huruf"] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
  ?>
</body>
</html>
