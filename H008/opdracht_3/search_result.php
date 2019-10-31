<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Wheely shop!</title>
    <link rel="stylesheet" type="text/css" href="style.css?v<?php echo time(); ?>">
  </head>
  <body>
    <div id="wheely_header">
      <img src="resources/wheely_header.jpg" alt="wheely_header" id="wheely_headerIMG">
    </div>
    <div id="form">
      <form action="search_result.php" method="GET">
        <label>Merk:</label>
        <select name="merk">
          <option>--Alle Merken--</option>
          <option>Audi</option>
          <option>Ferrari</option>
          <option>Fiat</option>
          <option>Mercedes</option>
          <option>Opel</option>
          <option>Volkswagen</option>
        </select>
        <label>Minimale prijs:</label>
        <input type="number" name="minPrijs">
        <label>Maximale prijs:</label>
        <input type="number" name="maxPrijs">
        <input type="submit" value="Submit" id="submit_button">
      </form>
    </div><?php include_once("lib/resultcontent.php");?>
  </body>
</html>
