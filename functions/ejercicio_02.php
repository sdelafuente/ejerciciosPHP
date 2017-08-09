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

    //Llamada
    areaRectangulo(4,9);

    ?>
    </body>
</html>
