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
        $promedio = 0;
        $grado = 0;

        for ($i=0; $i < sizeof($grados); $i++) {
            //
            $grado = $grados[$i];
            $promedio += $grado;

            //Insertar cada grado..preguntar si el valor no se encuentray es mayor igual
            if(!in_array($grado, $masCalientes))
                array_push($masCalientes, $grado);
            //Insertar grado ordernar los menores
            if(!in_array($grado, $masFrios))
                array_push($masFrios, $grado);
        }

        //Ordeno
        sort($masFrios);
        //Recorto
        array_splice($masFrios,5);

        //Reordeno los calientes
        sort($masCalientes);
        //
        $masCalientes = array_reverse($masCalientes);
        //Recorto
        array_splice($masCalientes,5);


        $promedio = round($promedio/sizeof($grados),2);

        echo "El promedio es de: " .$promedio . "<br>";

        foreach ($masFrios as $value) {
            echo "$value&deg; - ";
        }
        echo "<br>";
        foreach ($masCalientes as $value) {
            echo "$value&deg; - ";
        }
    ?>
    </body>
</html>
