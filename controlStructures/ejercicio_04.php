<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php 
	echo "<table border=\"1\" width=\"400px\">";

	for ($x=1; $x <8 ; $x++) { 
		echo "<tr>";

		for ($y=1; $y <8 ; $y++) { 
			$exp = $x * $y;

			echo "<td>".$exp."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";


 ?>
</body>
</html>