<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Arays Asociativos</title>
    </head>
    <body>
        <h2>Array asociativo</h2>
    <?php
        //Creo variables
        $grados = array(10,11,12,12,13,11,10,9,9,8,10,9,8,7,10,13,18,17,16,15,18,20,21,22,23,23,22,21,21);
        $masCalientes = array();
        $masFrios = array();
        $total = 0;
        $grado = 0;
        $cantidad = count($grados);

        //Sumo todos los dias
        foreach ($grados as $grado) {
            $total += $grado;
        }
        //Calculo el promedio
        $promedio = round($total/$cantidad,2);

        echo "La temperatura promedio es de: " . $promedio . "<br>";
        //Ordeno el array descendentemente
        rsort($grados);

        //Obtengo las temperaturas mas altas
        $masCalientes = array_splice($grados,0,5);

        echo "Los grados mas calientes fueron: <br>";
        //Recorro las temperaturas mas altas
        foreach ($masCalientes as $mc) {
            echo "$mc&deg; ";
        }
        echo "<br>";
        //Capturos las temperaturas mas frias
        $masFrios = array_splice($grados,-5,5);

        echo "Los mas frios fueron: <br>";
        //Muestro las temperaturas
        foreach ($masFrios as $frio) {
            echo "$frio&deg; ";
        }


    ?>
    </body>
</html>
