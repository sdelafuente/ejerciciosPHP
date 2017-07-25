<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php 
	echo "<p>";
	$i = 0;
	while ($i < 9) {
		echo "abc ";
		$i++;
	}
	echo "</p>";

	echo "<p>";
	$i=0;

	do {
		echo "xyz ";
		$i++;
		} while ($i < 9);	
	echo "</p>";

	echo "<p>";
	for($i=1; $i<10; $i++){
		echo $i ." ";
	}
	echo "</p>";


	echo "<ol>";	
	for($i='A'; $i<'G'; $i++){
		echo "<li> Item $i </li>\n";
	}	
	echo "</ol>";	
 ?>
</body>
</html>