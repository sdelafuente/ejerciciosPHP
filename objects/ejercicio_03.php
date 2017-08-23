<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Objetos</title>

    </head>
    <body>
        <h2>Objectos - Select </h2>
    <?php
    //Buscadores
    $browsers = array('Internet Explorer','Safary','Chrome','Opera','Firefox','Others');
    $speeds = array('Unknown', 'DSL','T1', 'Cable', 'Dialup', 'Other');
    $os = array('Windows', 'Linux','Macintosh', 'Other' );
    /**
     * Clase Select
     */
    class Select
    {
        private $name;
        private $value;

        function __construct($pName,$pValue)
        {
            $this->name = $pName;
            if(is_array($pValue)){
                $this->value = $pValue;
            }else{
                die("no se pudo crear el objeto");
            }
        }

        function __destruct()
        {

        }

        public function setName($param)
        {
            $this->name = $param;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setValue($param)
        {
            if(is_array($param))
                $this->value = $param;
        }

        public function getValue()
        {
            return $this->value;
        }

        //Definicion
        private function makeOptions(){
            $options = "<option selected value=\"Sin respuesta\">--Seleccione--</option>";
            foreach ($this->value as $val) {
                $options .= "<option value=\"$val\">$val</option>";
            }
            return $options;
        }

        //Definicion
        public function makeSelect(){
                $select = "<select name=\"$this->name\">";
                $select .= $this->makeOptions();
                $select .= "</select>";

            return $select;
        }

    }

    //No se envio el formulario - Genero el select
    if(!isset($_POST["submit"])){
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <p>
            <label for="name">*Nombre:</label>
            <input type="text" name="name" size="60">
        </p>
        <p>
            <label for="username">*Username:</label>
            <input type="text" name="username" size="60">
        </p>
        <p>
            <label for="email">*E-mail:</label>
            <input type="text" name="email" size="60">
        </p>
        <h2>Work Acces:</h2>
        <p>
            <label for="w_navegador">Navegador Principal:</label>
            <?php
                $objSelect = new Select("w_navegador",$browsers);
                echo $objSelect->makeSelect();
            ?>
        </p>
        <p>
            <label for="w_conexion">Velocidad de Conexión:</label>
            <?php
                $objSelect = new Select("w_conexion",$speeds);
                echo $objSelect->makeSelect();
            ?>
        </p>
        <p>
            <label for="w_os">Sistema operativo:</label>
            <?php
                $objSelect = new Select("w_os",$os);
                echo $objSelect->makeSelect();
            ?>
        </p>
        <h2>Home Acces:</h2>
        <p>
            <label for="h_navegador">Navegador Principal:</label>
            <?php
                $objSelect = new Select("h_navegador",$browsers);
                echo $objSelect->makeSelect();
            ?>
        </p>
        <p>
            <label for="h_conexion">Velocidad de Conexión:</label>
            <?php
                $objSelect = new Select("h_conexion",$speeds);
                echo $objSelect->makeSelect();
            ?>
        </p>
        <p>
            <label for="h_os">Sistema operativo:</label>
            <?php
                $objSelect = new Select("h_os",$os);
                echo $objSelect->makeSelect();
            ?>
        </p>
        <input type="submit" name="submit" value="Enviar Datos">
    </form>
    <?php
    } else {
        //Capturo el valor enviado
        $nombre = ltrim(rtrim($_POST["name"]));
        $user   = ltrim(rtrim($_POST["username"]));
        $email  = ltrim(rtrim($_POST["email"]));
        $wBrowser = $_POST["w_navegador"];
        $wConexion = $_POST["w_conexion"];
        $wOs = $_POST["w_os"];
        $hBrowser = $_POST["h_navegador"];
        $hConexion = $_POST["h_conexion"];
        $hOs = $_POST["h_os"];
        $error = 0;

        if(empty($nombre)){
            echo "<p>El nombre no puede quedar vacio.</p>";
            $error = 1;
        }

        if(empty($user)){
            echo "<p>El username no puede quedar vacio.</p>";
            $error = 1;
        }

        if(empty($email) ){
            echo "<p>El email no puede quedar vacio.</p>";
            $error = 1;
        } elseif (strpos($email,'@') === false) {
            echo "<p>El email no tiene el formato necesario.</p>";
            $error = 1;
        }

        if(0 === $error) {
            echo "El usuario se llama $nombre. <br>";
            echo "El username es $user.<br>";
            echo "Su mail es: $email.<br>";

            echo "<h2>Work Access</h2>";
            echo "<p><ul>";
            echo "  <li>$wBrowser</li>";
            echo "  <li>$wOs</li>";
            echo "  <li>$wConexion</li>";
            echo "</ul></p>";
            echo "<h2>Work Access / Home Access</h2>";
            echo "<p><ul>";
            echo "<li>$hBrowser</li>";
            echo "<li>$hConexion</li>";
            echo "<li>$hOs</li>";
            echo "</ul></p>";

            if(!isset($objSelect)){
                echo "Variable eliminada";
            } else {
                echo "Variable sigue activa";
            }
        }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="submit" name="volver" value="Volver">
    </form>
    <?php
    }
     ?>
    </body>
</html>
