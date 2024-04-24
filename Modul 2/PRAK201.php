<html>
 <head>
 <Title>Prak201</Title>
 </head>
 <body>
 <form action="" method="POST">
 <label for="nama1">Nama 1</label>
 <input type="text" id="nama1" name="nama1">
 <br>
 <label for="nama2">Nama 2</label>
 <input type="text" id="nama2" name="nama2">
 <br>
 <label for="nama3">Nama 3</label>
 <input type="text" id="nama3" name="nama3">
 <br>
 <button type="submit" name="submit">Urutkan</button>
 </form>
 <?php
 if (isset($_POST['submit'])) {
 $nama1 = $_POST['nama1'];
 $nama2 = $_POST['nama2'];
 $nama3 = $_POST['nama3'];

 $names = [$nama1, $nama2, $nama3];
 sort($names);

 foreach ($names as $name) {
 echo "$name<br>";
 }
 }
 ?>
 </body>
</html>
