<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array Form</title>
  </head>
  <body>
    <h2>Formulario del clima</h2>
        <?php
        //Si no se envio el Form
        if (!isset($_POST["submit"])) {
          //Tipos de Clima
          $conditions = array('rain',
                              'sunshine',
                              'clouds',
                              'hail',
                              'sleet',
                              'snow',
                              'wind'
                            );

        ?>
        <!-- Formulario -->
        <form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?> " method="post">
          <label for="ciudad">Ciudad:</label>
          <input type="text" name="ciudad" value="" required>
          <br>
          <label for="mes">Mes:</label>
          <input type="text" name="mes" value="" required>
          <br>
          <label for="anio">Año:</label>
          <input type="text" name="anio" value="" required>
          <br>
          <?php
            //Muestro los tipos de clima
            echo "<div>";
            for ($c=0; $c < sizeof($conditions); $c++) {
                echo "<input type='checkbox' name='weather[]' value=\"". $conditions[$c]."\"/> "
                     . $conditions[$c] . "<br>";
            }
            echo "</div>";
           ?>
           <br>
           <input type="submit" name="submit" value="Enviar">
        </form>
        <?php
      } else {

                //Capturo los valores enviados
        $arrClima = $_POST["weather"];
        $ciudad = $_POST["ciudad"];
        $mes = $_POST["mes"];
        $anio = $_POST["anio"];

        //Muestro el mensaje
        echo "In $ciudad in the month of $mes $anio, you observed the following weather:";

        //Loopeo por los tipos de climas elegidos
        echo "<ul>";
        foreach ($arrClima as $clima) {
            echo "<li>" . $clima . "</li> ";
        }
        echo "</ul>";

      }

      ?>
  </body>
</html>
