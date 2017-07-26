<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h2>Tu ciudad favorita</h2>

	<div>
		<?php
			if(!isset($_POST["submit"])) {
		?>		
				<form method="post" name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					<p>
						<label>Ingresa el nombre de tu ciudad favorita:</label>
						<input type="text" name="ciudad" required="Llenar el campo">			
					</p>
					<input type="submit" name="submit" value="Enviar">
				</form>
		<?php

			} else {
				$nombre_ciudad = $_POST["ciudad"];
				echo "El nombre de tu ciuda favorita es: " . $nombre_ciudad;	 	
			}

		 ?>		
	</div>
</body>
</html>