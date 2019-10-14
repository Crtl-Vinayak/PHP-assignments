<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H005/beasties_resultaat</title>
  </head>
  <body>
    <?php
      //print_r($_GET);

      if($_GET["animals"] == ''){
        echo "Je moet nog een dier selecteren!";
        echo "<br>";
        echo "<a href=\"form2.html\">Terug naar het formulier</a>";
        echo "<br>";
      } else {
        // echo "dier: ";
        // echo $_GET["animals"]; echo "<br>";
        if($_GET['animals'] == "aap"){
          echo "<img src=\"images/aap.png\">";
        }
        if($_GET['animals'] == "olifant"){
          echo "<img src=\"images/olifant.png\">";
        }
        if($_GET['animals'] == "leeuw"){
          echo "<img src=\"images/leeuw.png\">";
        }
        if($_GET['animals'] == "kikker"){
          echo "<img src=\"images/kikker.png\">";
        }
      }
     ?>
  </body>
</html>
