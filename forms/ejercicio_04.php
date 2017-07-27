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
						<select name="dia">
							<option value="Monday">Monday</option>	
							<option value="Tuesday">Tuesday</option>
							<option value="Wedneday">Wednesday</option>
							<option value="Thursday">Thursday</option>
							<option value="Friday">Friday</option>
							<option value="Saturday">Saturday</option>
						</select>
					</p>
					<input type="submit" name="submit" value="Enviar">
				</form>
		<?php


			} else {
				//Capturo el dia enviado
				$dia = $_POST["dia"];

				switch ($dia) {
					case 'Monday':
						echo "Laugh on " . $dia . ", laugh for danger.";
						break;
					case 'Tuesday':
						echo "Laugh on " . $dia . ", kiss a stranger.";
						break;
					case 'Wednesday':
						echo "Laugh on " . $dia . ", laugh for a letter.";
						break;
					case 'Thursday':
						echo "Laugh on " . $dia . ", something better.";
						break;
					case 'Friday':
						echo "Laugh on " . $dia . ", laugh for sorrow.";
						break;
					
					default:
						echo "Laugh on " . $dia . ", joy tomorrow.";
						break;
				}
				?>			
				
				<form action="ejercicio_04.php" >
					<input type="submit" name="submit" value="Volver" onclick="self.location='ejercicio_04.php'" />					
				</form>
		<?php		
			}

		 ?>
	</div>
</body>
</html>
