<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H003/h003.7</title>
    <style>
    </style>
  </head>
  <body>
    <?php
      $kappersagenda = array('9.15' => 'Mevr. Pietersen', '9.30' => 'Mevr. Willems',
                              '9.45' => '', '10.00' => 'Paul van den Broek', '10.15' => 'Karel de meeuw',
                              '10.30' => '');
      print("De volgende momenten zijn nog beschikbaar:<ul>");
      foreach ($kappersagenda as $tijd => $afspraak) {
        if($afspraak == ""){
          print("<li>".$tijd."</li>");
        }
      }
      print("</ul>");

      //Welke php-code moet ingevuld worden op de plek van  ..... => ....?
      //antwoord: $tijd => $afspraak

     ?>
  </body>
</html>
