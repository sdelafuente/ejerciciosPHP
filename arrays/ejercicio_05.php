<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Arays Asociativos</title>
    </head>
    <body>
        <h2>Array asociativo</h2>
    <?php
        if (!isset($_POST["submit"])) {
            $paisCapital = array('Japan' => 'Tokio',
                                'Mexico' => 'Mexico City',
                                'USA' => 'Washington',
                                'India' => 'Mumbai' ,
                                'Korea' => 'Seoul',
                                'China' => 'Shanghai',
                                'Nigeria' => 'Lagos',
                                'Argentina' => 'Buenos Aires' );

    ?>
        <form  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="pais_ciudad">Selecciona la ciudad:</label>
            <select class="" name="pais_ciudad">
                <?php
                foreach ($paisCapital as $pais => $ciudad) {
                    echo "<option value=\"$pais,$ciudad\">$ciudad</option>";
                }
                 ?>
            </select>
            <input type="submit" name="submit" value="Enviar">
        </form>
    <?php
        } else {
            $arrayPC = explode(",",$_POST["pais_ciudad"]);
            echo $arrayPC[1] . " is in " . $arrayPC[0];
        }
    ?>
    </body>
</html>
