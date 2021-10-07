<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projeto Soma+Calculo</title>
</head>
	
	<body>
		<h1>Projeto Calculo+Soma</h1>
		<form method="post">
			Valor 1: <input type="text" name="txtv1">
			Valor 2: <input type="number" name="txtv2">
			<input type="submit" value="Calcular">
		</form>

		<?php
		if ($_POST){
		$v1=$_POST['txtv1'];
		$v2=$_POST['txtv2'];
		$total=$v1+$v2;
		echo $total;
		}
		?>

	</body>

</html>