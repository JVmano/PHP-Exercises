<?php
	$valor1 = $_POST['var1'];
	$valor2 = $_POST['var2'];
	$operador = $_POST['ope'];
	$result = 0;
?>

<!DOCTYPE html>
	<body>
		<form action="#" method="POST">
			<h3>Operações matemáticas</h3>
			<input type="number" name="var1" placeholder="Valor 1">
			<input type="number" name="var2" placeholder="Valor 2">
			<select name="ope">
				<option value="soma">Soma</option>
				<option value="subtração">Subtração</option>
				<option value="multiplicação">Multiplicação</option>
				<option value="divisão">Divisão</option>
				<option value="comparação">Comparação</option>
			</select>
			<input type="submit" value="Enviar"> <br>
		</form>
	</body>
</html>

<?php
	switch ($operador) {
		case "soma":
			$result = $valor1 + $valor2;
			echo "Resultado: " . $result;
		break;
		
		case "subtração":
			$result = $valor1 - $valor2;
			echo "Resultado: " . $result;
		break;

		case "multiplicação":
			$result = $valor1 * $valor2;
			echo "Resultado: " . $result;
		break;

		case "divisão":
			$result = $valor1 / $valor2;
			echo "Resultado: " . $result;
		break;

		case "comparação":
			if ($valor1 <> $valor2) {
				if ($valor1 > $valor2) {
					echo "O maior é " . $valor1;
				} else if ($valor2 > $valor1) {
			       		echo "O maior é " . $valor2;
				} else {
					echo "O maior é " . $valor2;
				}
			} else {
				echo "Os numeros são iguais";
			}
		break;
	}
?>
	
