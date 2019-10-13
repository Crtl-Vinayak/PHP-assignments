<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H003/h003.5</title>
    <style>
    </style>
  </head>
  <body>
    <?php
      $leeftijd = 65;
      if($leeftijd <= 3){
        echo "Is Gratis!";
      } else if($leeftijd <= 12){
        echo "€5,-";
      } else if($leeftijd > 12 && $leeftijd <= 65){
        echo "€10,-";
      } else {
        echo "€5,-";
      }
     ?>
  </body>
</html>
