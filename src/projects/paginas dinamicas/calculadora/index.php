<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--Fuente del Footer-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <!---->
	
	<link rel="icon" href="imagenes/calculadora.png">
	<link rel="stylesheet" href="css/style.css">
	<title>Calculadora</title>
</head>
<body>

	<h1>Calculadora</h1>
	<form method="get">

	<label class="texto1">Primer numero</label>
	<input type="number" name="num1" class="numeros" placeholder="Ingrese el primer numero" min="0">

	<label class="texto1">Segundo numero</label>
	<input type="number" name="num2" class="numeros" placeholder="Ingrese el segundo numero" min="0">

	<label class="ope">Elegir operacion</label>
	<div class="imagenes">
	<input type="radio" name="opcion" value="suma" style="visibility:hidden" id="1">
	<label for="1"><img src="imagenes/operadores/mas.png" alt="Suma" title="Suma"></label>
	
	<input type="radio" name="opcion" value="resta" style="visibility:hidden" id="2">
	<label for="2"><img src="imagenes/operadores/resta.png" alt="Resta" title="Resta"></label>

	<input type="radio" name="opcion" value="multiplicacion" style="visibility:hidden" id="3">
	<label for="3"><img src="imagenes/operadores/multiplicacion.png" alt="Multiplicacion" title="Multiplicacion"></label>

	<input type="radio" name="opcion" value="division" style="visibility:hidden" id="4">
	<label for="4"><img src="imagenes/operadores/division.png" alt="Division" title="Division"></label>
	</div>
	<input type="submit" name="calcular" value="Calcular" class="envio">	

	</form>
	
<footer>
    <cite>© 2022 Díaz Ariel-Mariano Aguiar. Todos los derechos reservados 2022</cite>
</footer>

<?php

	if(isset($_GET['calcular'])){
		
		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];
		if ($num1 > -999 && $num2 > -999){
			if(isset($_GET['opcion'])){
				$opcion = $_GET['opcion'];
				switch($opcion){
					case 'suma': {
						$resultado = $num1 + $num2;
						break;
					}
					case 'resta': {
						$resultado = $num1 - $num2;
						break;
					}
					case 'multiplicacion': {
						$resultado = $num1 * $num2;
						break;
					}
					case 'division': {
						$resultado = $num1 / $num2;
						break;
					}
					default:
						echo 'Opcion Invalida';
						break;
				}
				echo '<p>El resultado es: '.$resultado.'</p>';
			} else{
			echo '<div><span class="mensaje_error">Error, ingrese un número válido</span></div>';
		}
		} else{
			echo '<div><span class="mensaje_error">Error, ingrese un número válido</span></div>';
		}
	}
?>



</body>
</html>