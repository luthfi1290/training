<!DOCTYPE html>
<html>
<head>
	<title>Soal nilai</title>
</head>
<body>
	<?php 
	if(isset($_POST['submit'])){
		$hasil = "nilainya akan muncul";
		$nilai = $_POST['nilai'];
		if($nilai >= 80 ){
			$hasil = "Anda mendapatkan nilai A";
		}else if ($nilai >= 65 && $nilai < 80) {
			$hasil = "Anda mendapatkan nilai B";
		}else if ($nilai >= 45 && $nilai < 65) {
			$hasil = "Anda mendapatkan nilai C";
		}else if ($nilai >= 30 && $nilai < 45) {
			$hasil = "Anda mendapatkan nilai D";
		}else{
			$hasil = "Anda mendapatkan nilai E";
		}
	}


	?>
	<form name="form" action="soalnilai.php" method="post">
		<input type="text" name="nilai" placeholder="masukkan nilai"><br><br>
		<input type="submit" name="submit" value="Proses"><br><br>
		<input type="text" name="hasil" value="<?php echo $hasil;?>" disabled>
	</form>
	
</body>
</html>