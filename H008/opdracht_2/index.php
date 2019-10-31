<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Monkey Business</title>
    <link rel="stylesheet" type="text/css" href="style.css?v<?php echo time(); ?>">
    <link href="http://fonts.googleapis.com/css?family=Bangers" rel="stylesheet" type="text/css">
  </head>
  <body>
    <img src="resources/monkey-business.jpg" alt="monkey-business.jpg" id="monkey-business">
    <h1>select your monkey!</h1>
    <img src="resources/monkey_swings.png" alt="monkey_swings.png" id="monkey_swings">
    <form method="GET" action="result.php">
      <input type="text" name="checkCharacters">
      <input type="submit" value="Submit">
    </form>
    <div id="links"><?php
      include_once("lib/apen.php");
     ?>
   </div>
  </body>
</html>
