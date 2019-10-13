<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H003/h003.6</title>
    <style>
      body {
        background-color: #8dcc9e;
        display: grid;
        grid-template-columns: 2fr 1fr 4fr;
        grid-template-rows: repeat(4, 1fr);
      }
      p {
        background-color: white;
        display: inline;
        margin: 0px;
        border: 1px solid gray;
      }
      .clubnum {
        grid-column: 2/3;
        margin-right: 20px;
      }
      .clubname {
        grid-column: 1/2;
      }
      .imgStyle {
        grid-column: 3/4;
        height: 20px;
        width: auto;
      }
      .imgRow1 {
        grid-column: 3/4;
        grid-row: 1/2;
      }
      .imgRow2 {
        grid-column: 3/4;
        grid-row: 2/3;
      }
      .imgRow3 {
        grid-column: 3/4;
        grid-row: 3/4;
      }
      .imgRow4 {
        grid-column: 3/4;
        grid-row: 4/5;
      }
    </style>
  </head>
  <body>
    <?php

      $aantalleden = array(25, 32, 11, 23);

      $zwemclubs = array('De spartelkuikens', $aantalleden[0], 'De waterbuffels', $aantalleden[1],
      'Plonsmderin', $aantalleden[2], 'Bommetje', $aantalleden[3]);
      $leden = array('De spartelkuikens' => $aantalleden[0], 'De waterbuffels' => $aantalleden[1],
      'Plonsmderin' => $aantalleden[2], 'Bommetje' => $aantalleden[3]);

      //swim-clip-art-jTxkydbTE.png
      //echo "<img src=\"images/swim-clip-art-jTxkydbTE.png\">";

      $i = 0;
      $className = "class=\"\"";
      $imgSrc = "src=\"images/swim-clip-art-jTxkydbTE.png\"";
      $imgAmount = "class=\"imgStyle\"";
      foreach ($zwemclubs as $zwem) {
        $i++;
        if($i % 2 == 0){
          $className = "class=\"clubnum\"";
          echo "<p $className>$zwem</p>";
        } else {
          $className = "class=\"clubname\"";
          echo "<p $className>$zwem</p>";
        }
      }

      $per5leden1 = floor($leden['De spartelkuikens'] / 5);
      $per5leden2 = floor($leden['De waterbuffels'] / 5);
      $per5leden3 = floor($leden['Plonsmderin'] / 5);
      $per5leden4 = floor($leden['Bommetje'] / 5);

      $imgPlacement = "class=\"imgRow1\"";
      echo "<div $imgPlacement>";
        for($j = $per5leden1; $j > 0; $j--){
          echo "<img $imgSrc $imgAmount>";
        }
      echo "</div>";
      $imgPlacement = "class=\"imgRow2\"";
      echo "<div $imgPlacement>";
        for($j = $per5leden2; $j > 0; $j--){
          echo "<img $imgSrc $imgAmount>";
        }
      echo "</div>";
      $imgPlacement = "class=\"imgRow3\"";
      echo "<div $imgPlacement>";
        for($j = $per5leden3; $j > 0; $j--){
          echo "<img $imgSrc $imgAmount>";
        }
      echo "</div>";
      $imgPlacement = "class=\"imgRow4\"";
      echo "<div $imgPlacement>";
        for($j = $per5leden4; $j > 0; $j--){
          echo "<img $imgSrc $imgAmount>";
        }
      echo "</div>";

     ?>
  </body>
</html>
