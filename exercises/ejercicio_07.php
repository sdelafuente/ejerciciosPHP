<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h1>Tipos de datos</h1>
<?php 

	$whatsit = "string";
	echo "Value is " . gettype($whatsit) . "<br />";

	$whatsit = 3.5;	
	echo "Value is " . gettype($whatsit) . "<br />";

	$whatsit = false;
	echo "Value is " . gettype($whatsit) . "<br />";

	$whatsit = 3;
	echo "Value is " . gettype($whatsit) . "<br />";		

	$whatsit = NULL;
	echo "Value is " . gettype($whatsit) . "<br />";	
 ?>
</body>
</html>	