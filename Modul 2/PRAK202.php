<html>
<head>
    <title>Praktikum 202</title>
    <style>
        .error {color: red;}
    </style>
</head>
<body>
<?php
$namaError = $nimError = $genderError = "";
if(isset($_POST['submit'])){
    if(empty(trim($_POST['nama']))){
        $namaError = "Nama tidak boleh kosong";
    }
    if(empty(trim($_POST['nim']))){
        $nimError = "NIM tidak boleh kosong";
    }
    if(empty(trim($_POST['gender']))){
        $genderError = "Jenis kelamin tidak boleh kosong";
    }
}
?>
<form action="" method="POST">
    <label for="nama">Nama :</label>
    <input type="text" id="nama" name="nama" value="<?=isset($_POST['nama'])?$_POST['nama']:''?>">
    <span class="error"> * <?= $namaError;?></span>
    <br>
    <label for="nim">NIM :</label>
    <input type="text" id="nim" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>">
    <span class="error"> * <?= $nimError;?></span>
    <br>
    <label for="gender">Jenis Kelamin :</label>
    <span class="error"> * <?= $genderError;?></span><br>
    <input type="radio" name="gender" id="laki" value="Laki-laki"<?php if(isset($_POST["gender"]) and $_POST["gender"] == "Laki-laki") echo "checked";?>>Laki-laki <br>
    <input type="radio" name="gender" id="perempuan" value="Perempuan" <?php if(isset($_POST["gender"]) and $_POST["gender"] == "Perempuan") echo "checked";?>>Perempuan <br>
    <button type="submit" name="submit">Submit</button>
</form>
<?php
if (isset($_POST['submit'])){
    if(!empty($_POST['nama']) && !empty($_POST['nim']) && !empty($_POST['gender'])){
        echo "<h2><b>Output:</b></h2>";
        if(!empty($_POST["nama"])){
            echo $_POST["nama"]."<br>";
        }
        if(!empty($_POST["nim"])){
            echo $_POST["nim"]."<br>";
        }
        if(!empty($_POST["gender"])) {
            echo $_POST["gender"];
        }
    }
}
?>
</body>
</html>
