<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array Form</title>
  </head>
  <body>
    <h2>Formulario del clima</h2>
        <?php
        // Si no se dio submit
        if (!isset($_POST["submit"])) {
            //Metodos de viaje
            $metodos = array('Automobile',"Jet","Train");

        ?>
        <!-- Frase -->
        <p>Travel takes many forms, whether across town, across the country,
            or around the world.
            Here is a list of some common modes of transportation:
        </p>
        <ul>
        <?php
        //Muestro los metodos
        foreach ($metodos as $value) {
            echo "<li>" . $value . "</li>";
        }
        ?>
        </ul>
        <!-- Formulario para agregar -->
        <form class="" action="ejercicio_04.php" method="post">
            <input type="text" name="nuevo" value="">
            <?php
            //Envio hidden de la lista actual
            foreach ($metodos as $value) {
                echo "<input type=\"hidden\" name=\"metodos[]\" value=\"$value\" />\n";
            }
             ?>
            <input type="submit" name="submit" value="Go">
        </form>

        <?php
        } else {
            //Capturo los datos
            $array_metodos = $_POST["metodos"];
            $enviado = explode(",",$_POST["nuevo"]);

            //Agrego el enviado
            array_splice($array_metodos,count($array_metodos),0,$enviado);

            echo "<p>Agregados</p>";
            echo "<ul>";
            foreach ($array_metodos as $value) {
                echo "<li>" . $value . "</li>";
            }
            echo "</ul>";

            echo "<p>Agregar mas??</p>";
        ?>
        <!-- Formulario para agregar mas datos a la lista -->
        <form class="" action="ejercicio_04.php" method="post">
            <input type="text" name="nuevo" value="">
            <?php
            foreach ($array_metodos as $value) {
                echo "<input type=\"hidden\" name=\"metodos[]\" value=\"$value\" />\n";
            }
            ?>
            <input type="submit" name="submit" value="Go">
        </form>
        <?php
        }
         ?>
  </body>
</html>
