<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php 
	$mes = date('F', time());

	if($mes == "August") {
		echo "It's August, so it's really hot.";	
	} else {
		echo "Not August, so at least not in the peak of the heat.";	
	}
 ?>
</body>
</html>