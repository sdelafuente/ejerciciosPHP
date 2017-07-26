<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h2>Tu ciudad favorita</h2>
	<form method="post" name="formulario" action="respuesta.php" >
		<p>
			<label>Ingresa el nombre de tu ciudad favorita:</label>
			<input type="text" name="ciudad" required="Llenar el campo">			
		</p>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>