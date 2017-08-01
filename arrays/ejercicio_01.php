<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Climas</title>
  </head>
  <body>
    <h2>Whather conditions</h2>
    <?php
        $conditions = array('rain',
                            'sunshine',
                            'clouds',
                            'hail',
                            'sleet',
                            'snow',
                            'wind'
                          );

        echo "<p>We've seen all kinds of weather this month. " .
             "At the beginning of the month, we had " . $conditions[5] .
             " and " . $conditions[6] . ". Then came " .$conditions[1] .
             " with a few ". $conditions[2] . " and some " . $conditions[0] .
             ". At least we didn't get any " . $conditions[3] . " or " . $conditions[4] . ".</p>";
    ?>
  </body>
</html>
