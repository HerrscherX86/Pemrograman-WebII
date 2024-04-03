<html>
<head>
    <title>Latihan Praktikum Soal No 5</title>
    <style>
        th {
            padding: 20px 0;
            background-color: red;
            font-size: 24px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th><b>Daftar Smartphone Samsung</b></th>
        </tr>
        <?php 
            $hp = array("hp1"=>"Samsung Galaxy S22", "hp2"=>"Samsung Galaxy S22+", "hp3"=>"Samsung Galaxy A03", "hp4"=>"Samsung Galaxy Xcover 5");
            foreach ($hp as $key => $phone) {
                echo "<tr><td>$phone</td></tr>";
            }
        ?>
    </table>
</body>
</html>
