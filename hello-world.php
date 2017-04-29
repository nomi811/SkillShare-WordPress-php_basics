<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Switch statements</title>
  </head>
  <body>

    <?php
      $favoriteFood = "Pizza";

      switch ($favoriteFood) {
        case "Curry":
          echo "I Love Curry";
          break;

        case "Chinese":
          echo "I Love Chinese";
          break;

        case "Pizza":
          echo "I Love Pizza";
          break;

          default:
            echo "I don't know!";
      }

    ?>

  </body>
</html>
