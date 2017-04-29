<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Loops</title>
  </head>
  <body>

    <?php
      $shapes = array("square", "circle", "triangle");

      foreach ($shapes as $value) {
        echo "$value<br>";
      }
    ?>

  </body>
</html>
