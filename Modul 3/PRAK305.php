<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="teks" required>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $teks = $_POST['teks'];
        $output = '';
        foreach (str_split($teks) as $char) {
            $output .= strtoupper($char) . str_repeat(strtolower($char), strlen($teks) - 1);
        }
        echo $output;
    }
    ?>
</body>
</html>
