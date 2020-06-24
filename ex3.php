<?php
	$valor = $_POST['var'];
?>

<!DOCTYPE html>
	<body>
		<form action="#" method="POST">
			<input type="number" min="1" max="10" name="var">
			<input type="submit">
		</form>
	</body>
</html>

<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		switch ($valor) {
			case $valor >=1:
				echo "$valor x 1 = ". $valor * 1 . "<br>";
				echo "$valor x 2 = ".  $valor * 2 . "<br>";
				echo "$valor x 3 = ".  $valor * 3 . " <br>";
				echo "$valor x 4 = ".  $valor * 4 . " <br>";
				echo "$valor x 5 = ".  $valor * 5 . "<br>";
				echo "$valor x 6 = ".  $valor * 6 . "<br>";
				echo "$valor x 7 = ".  $valor * 7 . "<br>";
				echo "$valor x 8 = ".  $valor * 8 . "<br>";
				echo "$valor x 9 = ".  $valor * 9 . "<br>";
				echo "$valor x 10 = ".  $valor * 10 . "<br>";
			break;
		}
	}
?>


