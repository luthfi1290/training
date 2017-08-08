<!DOCTYPE html>
<html>
<head>
	<title>Menghitung luas dan keliling lingkaran</title>
</head>
<body>
	<form action="soallingkaran.php" method="post">
		<input type="text" name="jarijari">
		<input type="submit" name="submit" value="proses">
	</form>
	<?php
		if(isset($_POST['submit'])){

		$jarijari = $_POST['jarijari'];
		$luas2 = 22 * ($jarijari * $jarijari) / 7;
		$keliling2 = 2 * (22*$jarijari)/7;
		$phi = 3.14;
		$luas = $phi * ($jarijari * $jarijari);
		$keliling = 2 * $phi * $jarijari;


		echo "menggunakan phi 3.14 <br>";
		echo "luas lingkaran tersebut adalah " . $luas . "<br>";
		echo "Keliling lingkaran tersebut adalah " . $keliling . "<br>";

		echo "menggunakan phi 22/7 <br>";
		echo "luas lingkaran tersebut adalah " . round($luas2) . "<br>";
		echo "Keliling lingkaran tersebut adalah " . round($keliling2);
	}
?>
</body>
</html>
