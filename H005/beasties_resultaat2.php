<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H005/beasties_resultaat2</title>
  </head>
  <body>
    <?php
        $name = $_GET['dier'];
        foreach ($name as $dier) {
          echo "<img src=\"images/$dier.png\"><br>";
        }
     ?>
  </body>
</html>
