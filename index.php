<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises</title>
</head>
<body>
	<h1>Ejercicios en PHP</h1>
<?php 
	$carpeta = "forms";
	$elementos = scandir($carpeta);

	foreach ($elementos as $value) {
		if (is_file($carpeta."/".$value)) {
			echo "<a href=\"$carpeta/".$value."\"> " . $value ."</a>.<br /> ";
		}		
	}

 ?>
</body>
</html>
