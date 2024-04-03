<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                cellspacing: 1px solid black; /* cellspacing is not a valid style property */
            }
        </style>
        <title>Latihan Praktikum Soal No 4</title>
    </head>
    <body>
        <table>
            <tr>
                <th><b>Daftar Smartphone Samsung</b></th>
            </tr>
            <?php
                $hp = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
                foreach ($hp as $phone) {
                    echo "<tr><td>$phone</td></tr>";
                }
            ?>
       </table>
    </body>
</html>
