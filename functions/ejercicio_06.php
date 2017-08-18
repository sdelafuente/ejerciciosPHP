<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones</title>

    </head>
    <body>
        <h2>Funciones</h2>
    <?php
    //Arrays
    $meses = array('Enero' => '31',
                      'Febrero' => '28 days, if leap year 29',
                      'Marzo' => '31',
                      'Abril' => '30',
                      'Mayo' => '31',
                      'Junio' => '30',
                      'Julio' => '31',
                      'Agosto' => '31',
                      'Septiembre' => '30',
                      'Octubre' => '31',
                      'Noviembre' => '30',
                      'Diciembre' => '31');
    //Definicion
    function makeOptions($arr){
        $options = "";
        foreach ($arr as $key => $value) {
            $options .= "<option value=\"$key\">$key</option>";
        }
        return $options;
    }
    //Definicion
    function makeSelect($array){

        if(is_array($array)){
            $select = "<select name=\"meses\">";
            $select .= makeOptions($array);
            $select .= "</select>";
        }
        return $select;
    }

    //No se envio el formulario - Genero el select
    if(!isset($_POST["submit"])){
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="long">Seleccione el mes:</label>
        <?php

                echo makeSelect($meses);
        ?>
        <input type="submit" name="submit" value="Ver dias del mes">
    </form>
    <?php
    } else {
        //Capturo el valor enviado
        $mes = $_POST["meses"];
        //Separo el indice-valor enviado
        if("Febrero" == $mes) {
            echo "El mes de Febrero tiene $meses[$mes].";
        } else {
            echo "El mes de $mes tiene $meses[$mes] dias.";
        }
        //Muestro la opcion seleccionada



    }
     ?>
    </body>
</html>
