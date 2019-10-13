<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H003/h003.2</title>
    <style>
      body {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php
      for($j = 0; $j < 9; $j++){
        for($i = 0; $i < $j; $i++){
          echo "*";
        }
        echo "*<br />";
      }
     ?>
  </body>
</html>
