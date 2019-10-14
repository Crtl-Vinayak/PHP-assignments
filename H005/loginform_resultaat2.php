<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H005/loginform_resultaat2</title>
  </head>
  <body>
    <?php

      function checkCombination($name, $password){
        $email = array('piet@worldonline.nl', 'klaas@carpets.nl', 'truushendriks@wegweg.nl');
        $wachtwoord = array('doetje123', 'snoepje777', 'arkiearkie201');
        $combination;

        if((($name == $email[0]) && ($password == $wachtwoord[0]))
        || (($name == $email[1]) && ($password == $wachtwoord[1]))
        || (($name == $email[2]) && ($password == $wachtwoord[2]))){
          echo "Welcome!";
          $combination = true;
        } else {
          echo "Sorry, geen toegang!";
          $combination = false;
        }
        return $combination;
      }

      echo "<br>" . checkCombination($_GET['email'], $_GET['wachtwoord']);

     ?>
  </body>
</html>
