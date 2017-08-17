<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones</title>

    </head>
    <body>
        <h2>Funciones</h2>
    <?php
    $array = array("1","2");
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
    function selectHtml($arr){
      $select = "<select name=\"meses\">";
      //print_r($arr);
      //die();

      foreach ($arr as $key => $value) {
        echo "<option value=\"$key-$value\">$key</option>";
      }
      $select += "</select>";
      //return $select;
    }

    if(!isset($_POST["submit"])){
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="long">Seleccione el mes:</label>
        <select class="" name="meses">
        <?php selectHtml($meses); ?>
        </select>

        <input type="submit" name="submit" value="Ver Area">
    </form>
    <?php
    } else {
        $seleccion = $_POST["meses"];
        list($mes,$numero) = explode('-',$seleccion);

        echo "El mes de $mes tiene $numero dias.";


    }
     ?>
    </body>
</html>
