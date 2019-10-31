<?php

  $apen = array("", "Baviaan", "Guereza", "Langoer", "Neusaap", "Tamarin", "Brulaap",
  "Halfaap", "Mandril", "Oeakari", "Faunaap", "Hoelman", "Meerkat", "Oormaki", "Gorilla",
  "Kuifaap", "Mensaap", "Spinaap");
  sort($apen);

  $check = false;

  for($i = 0; $i < 17; $i++){
    if($_GET["checkCharacters"] == strtolower($apen[$i]) || $_GET["checkCharacters"] == strtoupper($apen[$i]) || $_GET["checkCharacters"] == $apen[$i]){
      echo "<a class=\"aap\" href=\"https://www.google.nl/search?q=" . "$apen[$i]" . "&tbm=isch \">" . "$apen[$i]" . "</a><br>";
      $check = true;
    }
  }

  if($check == false || $_GET["checkCharacters"] == "") {
    header('location: index.php?invalidValue');
    for($i = 0; $i < 17; $i++){
      echo "<a class=\"aap\" href=\"https://www.google.nl/search?q=" . "$apen[$i]" . "&tbm=isch \">" . "$apen[$i]" . "</a><br>";
    }
  }

//echo "<a class=\"aap\" href=\"https://www.google.nl/search?q=" . "$apen[$i]" . "&tbm=isch \">" . "$apen[$i]" . "</a><br>";
