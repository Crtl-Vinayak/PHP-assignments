<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H004/h004.1</title>
  </head>
  <body>
    <?php
      function celsiusToFahrenheit($celsius){
        $fahrenheit = $celsius * 9 / 5 + 32;
        return $fahrenheit;
      }

      function dividableBy3($num){
        $dividable;
        if($num % 3 == 0){
          $dividable = " is true";
        } else {
          $dividable = " is false";
        }
        return $dividable;
      }

      function reverseString($str){
        return strrev($str);
      }

      echo celsiusToFahrenheit(20) . "<br>";
      echo dividableBy3(6) . "<br>";
      echo reverseString("hello") . "<br>";
     ?>
  </body>
</html>
