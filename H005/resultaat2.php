<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H005/resultaat2</title>
  </head>
  <body>
    <?php
      //print_r($_GET);

      if($_GET["inlognaam"] == ''){
        echo "Je moet nog een naam invullen!";
        echo "<br>";
        echo "<a href=\"form2.html\">Terug naar het formulier</a>";
        echo "<br>";
      } else {
        echo "inlognaam: ";
        echo $_GET["inlognaam"]; echo "<br>";
      }

      if($_GET["adres"] == ''){
        echo "Je moet nog een adres invullen!";
        echo "<br>";
        echo "<a href=\"form2.html\">Terug naar het formulier</a>";
        echo "<br>";
      } else {
        echo "adres: ";
        echo $_GET["adres"]; echo "<br>";
      }

      if($_GET["email"] == ''){
        echo "Je moet nog een email invullen!";
        echo "<br>";
        echo "<a href=\"form2.html\">Terug naar het formulier</a>";
        echo "<br>";
      } else {
        echo "email: ";
        echo $_GET["email"]; echo "<br>";
      }

      if($_GET["wachtwoord"] == ''){
        echo "Je moet nog een wachtwoord invullen!";
        echo "<br>";
        echo "<a href=\"form2.html\">Terug naar het formulier</a>";
        echo "<br>";
      }

     ?>
  </body>
</html>
