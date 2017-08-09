<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones</title>

    </head>
    <body>
        <h2>Funciones</h2>
    <?php
    //Definicion
    function areaRectangulo($l,$w){
        $area = $l * $w;

        echo "A rectangle of length $l and width $w has an area of $area";

    }

    if(!isset($_POST["submit"])){
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="long">alto:</label>
        <input type="text" name="long" value=""><br>
        <label for="width">ancho:</label>
        <input type="text" name="width" value=""><br>
        <input type="submit" name="submit" value="Ver Area">
    </form>
    <?php
    } else {
        $l = $_POST["long"];
        $w = $_POST["width"];

        areaRectangulo($l,$w);
    }
     ?>
    </body>
</html>
