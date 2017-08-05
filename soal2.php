<!DOCTYPE html>
<html>
<head>
	<title>menghitung luas persegi panjang</title>
</head>
<body>
	<fieldset>
	<legend><h2>Menghitung luas persegi panjang </h2></legend>
	<form action="soal2.php" method="post">
		<?php 
		$awal = 0;
		$awal2 = 0;
		$a = isset($_POST['submit']);
		if( $a == 'Hitung!!'){
		$panjang = $_POST['panjang'];
		$lebar = $_POST['lebar'];
		
		$luas = $panjang * $lebar;
		$keliling = ($panjang*2) + ($lebar*2);
		$awal2 = $keliling;
		$awal  = $luas;
		}
		
	?>
		<input type="text" name="panjang" placeholder="panjang"><br>
		<input type="text" name="lebar" placeholder="lebar"><br>
		<input type="submit" name="submit" value="Hitung!!"><br><br>
		<input type="text" value="<?php echo "luasnya " . $awal;?>" disabled><br><br> 
		<input type="text" value="<?php echo "kelilingnya " . $awal2;?>" disabled>
	</form>
	</fieldset>
	<!-- <fieldset>
	<legend>Output</legend>
	<form>
		<input type="text" name="keliling" value="a"><br>
		<input type="text" name="lebar" placeholder="lebar"><br>
		<input type="submit" name="submit" value="Hitung!!"> 
	</form>
	</fieldset> -->
	
	

</body>
</html>