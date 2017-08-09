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
    function crearArchivo(){
        $pantry = array('Azucar' => '2 lbs.', 'Manteca' => '3 barras.' );
        $fp = fopen('pantry.txt','w') or die("No se puso abrir el archivo");
        fputs($fp,serialize($pantry));
        fclose($fp);


    }

    //Llamada
    crearArchivo();

    ?>
    </body>
</html>
