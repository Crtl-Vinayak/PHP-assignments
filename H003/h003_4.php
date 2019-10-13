<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H003/h003.4</title>
    <style>
      body {
        text-align: center;
        margin: 0px;

      }
      .aapImg0 {
        width: 180px;
        height: auto;
        border: 3px solid red;
      }
      .aapImg1 {
        width: 180px;
        height: auto;
        border: 3px solid green;
      }
    </style>
  </head>
  <body>
    <?php
      for($i = 1; $i <= 9; $i++){
        if($i % 2 == 0){
          echo "<img src=\"images/aap$i.jpg\" class=\"aapImg0\">";
        } else {
          echo "<img src=\"images/aap$i.jpg\" class=\"aapImg1\">";
        }
        if($i == 5){
          echo "<br />";
        }
      }
     ?>
  </body>
</html>
