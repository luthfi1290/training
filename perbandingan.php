<!DOCTYPE html>
<html>
<head>
	<title>Perbandingan</title>
</head>
<body>
	
	<form action="perbandingan.php" method="post">
		<input type="text" name="input" maxlength="1">
		<input type="submit" name="submit" value="bandingkan">
	</form>
	<?php 
		if(isset($_POST['submit'])){
			if( is_numeric($_POST['input'])){
				echo "yang anda masukkan merupakan angka";
			}else{
				echo "yang anda masukkan merupakan huruf";
			}
		}

	?>

</body>
</html>