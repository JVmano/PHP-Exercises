<?php
	$valor = $_POST['var'];
	$i = 1;
?>

<!DOCTYPE html>
	<body>
		<form action="#" method="POST">
			<input type="number" name="var">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		switch ($valor) {
			case $valor >= 1:
				while($i <= $valor) {
 					 echo "$i" . PHP_EOL;
 					 $i++;
				} 
			break;
		}
	}
?>
