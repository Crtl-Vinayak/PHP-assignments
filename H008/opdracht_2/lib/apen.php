<?php

  $apen = array("", "Baviaan", "Guereza", "Langoer", "Neusaap", "Tamarin", "Brulaap",
  "Halfaap", "Mandril", "Oeakari", "Faunaap", "Hoelman", "Meerkat", "Oormaki", "Gorilla",
  "Kuifaap", "Mensaap", "Spinaap");
  sort($apen);

  for($i = 0; $i < 17; $i++){
    // if($_GET["apenList"] == $apen[$i] || $_GET["apenList"] == strtolower($apen[$i])){
    //   echo "<a class=\"aap\" href=\"https://www.google.nl/search?q=" . "$apen[$i]" . "&tbm=isch \">" . "$apen[$i]" . "</a><br>";
    // } else if ($_GET["apenList"] == "") {
    //   //nothing...
    // } else {
    //
    // }
    // if($_GET["checkCharacters"] == $apen[$i] || empty($_GET["checkCharacters"])){
    //   echo "<a class=\"aap\" href=\"https://www.google.nl/search?q=" . "$apen[$i]" . "&tbm=isch \">" . "$apen[$i]" . "</a><br>";
    // }

    // if($_GET["apenList"] == $apen[$i] && (empty($_GET["apenList"])) == false){
    //   echo "<a class=\"aap\" href=\"https://www.google.nl/search?q=" . "$apen[$i]" . "&tbm=isch \">" . "$apen[$i]" . "</a><br>";
    // } else {

      echo "<a class=\"aap\" href=\"https://www.google.nl/search?q=" . "$apen[$i]" . "&tbm=isch \">" . "$apen[$i]" . "</a><br>";
}
