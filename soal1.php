<!DOCTYPE html>
<html>
<head>
	<title>Soal no 1</title>
</head>
<body>
	<form name="form" action="soal1.php" method="post">
		<label for="nama">Nama: </label>
			<input type="text" name="nama"><br><br>
		<label for="alamat">Alamat : </label>
			<input type="text" name="alamat"><br>
		<input type="submit" name="submit" value="kirim">
	</form>
	<?php 
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		echo "Namanya adalah " . $nama . " Alamatnya di " . $alamat;
	}


?>
</body>
</html>