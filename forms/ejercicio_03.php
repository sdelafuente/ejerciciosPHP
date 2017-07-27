<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h2>dia de la semana</h2>

	<div>
		<?php
			if(!isset($_POST["submit"])) {
		?>
				<form method="post" name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					<p>
						<label>Ingresa el dia de la semana:</label>
						<input type="text" name="dia" required="Llenar el campo">
					</p>
					<input type="submit" name="submit" value="Enviar">
				</form>
		<?php

			} else {
				//Capturo el dia enviado
				$dia = $_POST["dia"];
				$dia = strtolower($dia);

				if ($dia == "monday") {
					echo "Laugh on " . $dia . ", laugh for danger.";
				}elseif ($dia == "tuesday") {
					echo "Laugh on " . $dia . ", kiss a stranger.";
				}elseif ($dia == "wednesday") {
					echo "Laugh on " . $dia . ", laugh for a letter.";
				}elseif ($dia == "thursday") {
					echo "Laugh on " . $dia . ", something better.";
				}elseif ($dia == "friday") {
					echo "Laugh on " . $dia . ", laugh for sorrow.";
				}elseif ($dia == "saturday") {
					echo "Laugh on " . $dia . ", joy tomorrow.";
				} else {
					echo "I don't know which day is that.";
				}
				

			}

		 ?>
	</div>
</body>
</html>
