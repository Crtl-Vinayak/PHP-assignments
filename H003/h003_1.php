<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H003/h003.1</title>
  </head>
  <body>
    <?php
      $plaatjes = array("images/aap1.jpg", "images/aap2.jpg", "images/aap3.jpg", "images/aap4.jpg",
      "images/aap5.jpg", "images/aap6.jpg", "images/aap7.jpg", "images/aap8.jpg", "images/aap9.jpg",
      "images/img_0050.jpg"


      /*
      , "images/lillypilly1.jpg", "images/Maranchery_biyyam_Kayal_kandal.jpg",
      "images/weeping-elm.jpg", "images/weeping-elm0091.jpg", "images/afro8.jpg", "images/dreadlocks_03.jpg",
      "images/punk_04.jpg", "images/redhead_11.jpg"
      */

    );

      foreach ($plaatjes as $afbeelding) {
        echo "<img src=\"$afbeelding\">";
      }

    //  echo "<img src=\"images/aap\"";
    // for($num = 1; $num < 10; $num++){
    //   echo "<img src=\"images/aap$num.jpg\">";
    // }
     ?>
  </body>
</html>
