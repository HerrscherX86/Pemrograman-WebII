<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <!-- Content -->
    <?= $this->renderSection('content') ?>
    <!-- /.Content -->

    <footer class="text-center mt-5">
        <p><em><small>Made by : <a href="https://github.com/HerrscherX86">KiaFizz7</a></small></em></p>
    </footer>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?= $this->renderSection('extra-js') ?>

</body>

</html>
