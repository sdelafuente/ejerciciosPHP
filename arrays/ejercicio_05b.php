<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Arays Asociativos</title>
    </head>
    <body>
        <h2>Array asociativo</h2>
    <?php
    //Creo el array
    $paisCapital = array('Japan' => 'Tokio',
                        'Mexico' => 'Mexico City',
                        'USA' => 'Washington',
                        'India' => 'Mumbai' ,
                        'Korea' => 'Seoul',
                        'China' => 'Shanghai',
                        'Nigeria' => 'Lagos',
                        'Argentina' => 'Buenos Aires' );

        //Verifico que no se haya enviado el POST
        if (!isset($_POST["submit"])) {
    ?>
        <form  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="pais_ciudad">Selecciona la ciudad:</label>
            <select class="" name="ciudad">
                <?php
                foreach ($paisCapital as $ciudad) {
                    echo "<option value=\"$ciudad\">$ciudad</option>";
                }
                 ?>
            </select>
            <input type="submit" name="submit" value="Enviar">
        </form>
    <?php
        } else {
            $ciudad = $_POST["ciudad"];
            $pais = array_search($ciudad, $paisCapital);

            echo $ciudad . " is in " . $pais;
        }
    ?>
    </body>
</html>
