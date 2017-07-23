<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises</title>
</head>
<body>
<?php 
	$carpeta = "controlStructures";
	$elementos = scandir($carpeta);

	foreach ($elementos as $value) {
		if (is_file($carpeta."/".$value)) {
			echo "<a href=\"$carpeta/".$value."\"> " . $value ."</a>.<br /> ";
		}		
	}

 ?>
</body>
</html>