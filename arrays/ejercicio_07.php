<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Arays Asociativos</title>
        <style type="text/css">
        td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
        th {text-align:center;}
        table {border-collapse: collapse; border: 1px solid black;}
        </style>

    </head>
    <body>
        <h2>Array asociativo</h2>
    <?php

    $multiCity = array(
            array('City','Country','Continent'),
            array('Tokyo', 'Japan', 'Asia'),
            array('Mexico City', 'Mexico', 'North America'),
            array('New York City', 'USA', 'North America'),
            array('Mumbai', 'India', 'Asia'),
            array('Seoul', 'Korea', 'Asia'),
            array('Shanghai', 'China', 'Asia'),
            array('Lagos', 'Nigeria', 'Africa'),
            array('Buenos Aires', 'Argentina', 'South America'),
            array('Cairo', 'Egypt', 'Africa'),
            array('London', 'UK', 'Europe')
    );

    echo "<table>";
    echo "<tr>";
    echo "<th>" . $multiCity[0][0] . "</th>";
    echo "<th>" . $multiCity[0][1] . "</th>";
    echo "<th>" . $multiCity[0][2] . "</th>";
    echo "</tr>";
    for ($i=1; $i < sizeof($multiCity); $i++) {
        echo "<tr>";
        foreach ($multiCity[$i] as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";



    ?>
    </body>
</html>
