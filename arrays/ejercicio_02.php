<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array Looping</title>
  </head>
  <body>
    <h2>Array Looping</h2>
    <?php
        //Creo el array
        $paises = array('Tokyo',
                        'Mexico City',
                        'New York City',
                        'Mumbai',
                        'Seoul',
                        'Shanghai',
                        'Lagos',
                        'Buenos Aires',
                        'Cairo',
                        'London');

        //Cuento la cantidad de elementos
        $cantidad = sizeof($paises);

        //Recorro el array
        for ($i=0; $i < $cantidad; $i++) {
            if($i < $cantidad && $i < $cantidad - 1)
              echo $paises[$i] . ",";
            else
              echo $paises[$i] . ".";
        }

        //Ordeno el array
        sort($paises);

        //Lo muestro de forma No ordenada en lista
        echo "<ul>";
        for ($c=0; $c < $cantidad; $c++) {
            echo "<li>" . $paises[$c] . "</li>";
        }
        echo "</ul>";

        //Agrego paises
        array_push($paises,"Los Angeles");
        array_push($paises,"Calcutta");
        array_push($paises,"Osaka");
        array_push($paises,"Beijing");

        //Ordeno el array
        sort($paises);

        //Cuento la cantidad de elementos
        $cantidad = sizeof($paises);
        
        //Lo muestro de forma No ordenada en lista
        echo "<ul>";
        for ($c=0; $c < $cantidad; $c++) {
            echo "<li>" . $paises[$c] . "</li>";
        }
        echo "</ul>";
    ?>
  </body>
</html>
