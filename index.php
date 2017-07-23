<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises</title>
</head>
<body>
<?php 
	$elementos = scandir("exercises");

	foreach ($elementos as $value) {
		if (is_file("exercises/".$value)) {
			echo "<a href=\"exercises/".$value."\"> " . $value ."</a>.<br /> ";
		}		
	}

 ?>
</body>
</html>