<html>
<head>
	<title>Formulario</title>
	<style>
		tr{border-collapse: collapse; padding:3px; width: 70px; height: 70px;}
		.green{background-color: green; padding:3px; width: 70px; height: 70px;}
		.yellow{background-color: yellow; padding:3px; width: 70px; height: 70px;}
		.lat{background-color: red; color: white; padding:3px; width: 40px; height: 40px; text-align: center;}
		.cap{background-color: red; color: white; padding:3px; width: 40px; height: 20px; text-align: center;}

	</style>
</head>
<body>
	<table>
	<?php
		$filas = $_POST['filas'];
		$columnas = $_POST['columnas'];
		$cas=0;
		
		echo "<td class='cap'>"; //Esta línea coloca ese espacio en blanco en el eje x/y que divide las letras de los números

		//Coloca a la cabeza las letras
		for($i=0;$i<$filas;$i++){

			echo "<td class='cap'>".(chr($i+64+1))."</td>"; //Coloca las letras mediante ascii +1 carácter
		}

		//Coloca las filas
		for($i=0;$i<$filas;$i++){
			
			echo "<tr>";
			
			//Coloca en el lateral los números
			echo "<td class='lat'>".$i.""; 
			echo "</td>"; 

			for($j=0;$j<$columnas;$j++){
				//echo $j;
				if ($cas%2==0){ //Si la casilla es divisible de 2, píntala de verde
					echo "<td class='green'>".""; 
					echo "</td>";
				}
				else {
					
					echo "<td class='yellow'>".""; //si el resto de la división NO es 0 píntala de amarillo 
					echo "</td>"; //si el resto de la división es 0 pongo un color
				}
   				$cas++;
			}
   			$cas++;
				//Cerramos columna
		}
		echo "</tr>";
	?>
	</table>
</body>
</html>
