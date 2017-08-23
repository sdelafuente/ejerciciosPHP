<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Objetos</title>

    </head>
    <body>
        <h2>Objectos - Select </h2>
    <?php
    //Arrays
    $browsers = array('Internet Explorer','Safary','Chrome','Opera','Firefox','Others');

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
            $options = "";
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
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="">
        </p>
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" value="">
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="text" name="email" value="">
        </p>
        <p>
            <label for="browser">Navegador:</label>
            <?php
                    $objSelect = new Select("navegador",$browsers);
                    echo $objSelect->makeSelect();
            ?>
        </p>
        <input type="submit" name="submit" value="Enviar Datos">
    </form>
    <?php
    } else {
        //Capturo el valor enviado
        $nombre = $_POST["name"];
        $user   = $_POST["username"];
        $email  = $_POST["email"];
        $browser = $_POST["navegador"];


        echo "El usuario se llama $nombre. <br>";
        echo "El username es $user.<br>";
        echo "Su mail es: $email.<br>";
        echo "El navegador que usa es: $browser";

    }
     ?>
    </body>
</html>
