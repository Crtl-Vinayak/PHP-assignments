<?php
$prices = array("a0" => 102500.00, "a1" => 108250.00, "a2" => 99500.00, "a3" => 122500.00, "a4" => 152500.00,
                "a5" => 10500.00, "a6" => 11500.00, "a7" => 82500.00, "a8" => 132700.00, "a9" => 87500.00,
                "a10" => 222650.00, "a11" => 13500.00, "a12" => 9500.00, "a13" => 19500.00, "a14" => 16340.00,
                "a15" => 18340.00, "a16" => 21670.00);

function deleteEverything() {
  echo "<script>";
  for($j = 0; $j < 17; $j++) {
    echo "var element = document.getElementById(\"a" . $j . "\");
          element.parentNode.removeChild(element);";
  }
  echo "</script>";
}
// Filter by merk.
if($_GET["merk"] == "--Alle Merken--") {
  deleteEverything();
  echo "<div class=\"imgplaceholder1\" id=\"a0\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Audi<br>Prijs : € 102500.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a1\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Audi<br>Prijs : € 108250.00</p></div>";
  echo "<div class=\"imgplaceholder3\" id=\"a2\"><p style=\"background-color: rgba(27, 82, 222, 0.7)\">Merk: Ferrari<br>Prijs : € 99500.00</p></div>";
  echo "<div class=\"imgplaceholder1\" id=\"a3\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Ferrari<br>Prijs : € 122500.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a4\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Ferrari<br>Prijs : € 152500.00</p></div>";
  echo "<div class=\"imgplaceholder3\" id=\"a5\"><p style=\"background-color: rgba(27, 82, 222, 0.7)\">Merk: Fiat<br>Prijs : € 10500.00</p></div>";
  echo "<div class=\"imgplaceholder1\" id=\"a6\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Fiat<br>Prijs : € 11500.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a7\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Mercedes<br>Prijs : € 82500.00</p></div>";
  echo "<div class=\"imgplaceholder3\" id=\"a8\"><p style=\"background-color: rgba(27, 82, 222, 0.7)\">Merk: Mercedes<br>Prijs : € 132700.00</p></div>";
  echo "<div class=\"imgplaceholder1\" id=\"a9\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Mercedes<br>Prijs : € 87500.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a10\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Mercedes<br>Prijs : € 222650.00</p></div>";
  echo "<div class=\"imgplaceholder3\" id=\"a11\"><p style=\"background-color: rgba(27, 82, 222, 0.7)\">Merk: Opel<br>Prijs : € 13500.00</p></div>";
  echo "<div class=\"imgplaceholder1\" id=\"a12\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Opel<br>Prijs : € 9500.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a13\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Opel<br>Prijs : € 19500.00</p></div>";
  echo "<div class=\"imgplaceholder3\" id=\"a14\"><p style=\"background-color: rgba(27, 82, 222, 0.7)\">Merk: Volkswagen<br>Prijs : € 16340.00</p></div>";
  echo "<div class=\"imgplaceholder1\" id=\"a15\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Volkswagen<br>Prijs : € 18340.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a16\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Volkswagen<br>Prijs : € 21670.00</p></div>";
}
if($_GET["merk"] == "Audi") {
  deleteEverything();
  echo "<div class=\"imgplaceholder1\" id=\"a0\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Audi<br>Prijs : € 102500.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a1\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Audi<br>Prijs : € 108250.00</p></div>";
}
if($_GET["merk"] == "Ferrari") {
  deleteEverything();
  echo "<div class=\"imgplaceholder1\" id=\"a2\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Ferrari<br>Prijs : € 99500.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a3\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Ferrari<br>Prijs : € 122500.00</p></div>";
  echo "<div class=\"imgplaceholder3\" id=\"a4\"><p style=\"background-color: rgba(27, 82, 222, 0.7)\">Merk: Ferrari<br>Prijs : € 152500.00</p></div>";
}
if($_GET["merk"] == "Fiat") {
  deleteEverything();
  echo "<div class=\"imgplaceholder1\" id=\"a5\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Fiat<br>Prijs : € 10500.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a6\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Fiat<br>Prijs : € 11500.00</p></div>";
}
if($_GET["merk"] == "Mercedes") {
  deleteEverything();
  echo "<div class=\"imgplaceholder1\" id=\"a7\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Mercedes<br>Prijs : € 82500.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a8\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Mercedes<br>Prijs : € 132700.00</p></div>";
  echo "<div class=\"imgplaceholder3\" id=\"a9\"><p style=\"background-color: rgba(27, 82, 222, 0.7)\">Merk: Mercedes<br>Prijs : € 87500.00</p></div>";
  echo "<div class=\"imgplaceholder1\" id=\"a10\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Mercedes<br>Prijs : € 222650.00</p></div>";
}
if($_GET["merk"] == "Opel") {
  deleteEverything();
  echo "<div class=\"imgplaceholder1\" id=\"a11\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Opel<br>Prijs : € 13500.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a12\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Opel<br>Prijs : € 9500.00</p></div>";
  echo "<div class=\"imgplaceholder3\" id=\"a13\"><p style=\"background-color: rgba(27, 82, 222, 0.7)\">Merk: Opel<br>Prijs : € 19500.00</p></div>";
}
if($_GET["merk"] == "Volkswagen") {
  deleteEverything();
  echo "<div class=\"imgplaceholder1\" id=\"a14\"><p style=\"background-color: rgba(222, 37, 27, 0.7)\">Merk: Volkswagen<br>Prijs : € 16340.00</p></div>";
  echo "<div class=\"imgplaceholder2\" id=\"a15\"><p style=\"background-color: rgba(31, 196, 40, 0.7)\">Merk: Volkswagen<br>Prijs : € 18340.00</p></div>";
  echo "<div class=\"imgplaceholder3\" id=\"a16\"><p style=\"background-color: rgba(27, 82, 222, 0.7)\">Merk: Volkswagen<br>Prijs : € 21670.00</p></div>";
}

//Filter by minimum price.
for ($i = 0; $i < 17; $i++) {
  if(isset($_GET["minPrijs"]) && $_GET["minPrijs"] != ""){
    echo "<script>";
    if($_GET["minPrijs"] > $prices["a" . "$i"]) {
      echo "var element = document.getElementById(\"a" . $i . "\");
            element.parentNode.removeChild(element);";
    }
    echo "</script>";
  }
}

//Filter by maximum price.
for ($i = 0; $i < 17; $i++) {
  if(isset($_GET["maxPrijs"]) && $_GET["maxPrijs"] != ""){
    echo "<script>";
    if($_GET["maxPrijs"] < $prices["a" . "$i"]) {
      echo "var element = document.getElementById(\"a" . $i . "\");
            element.parentNode.removeChild(element);";
    }
    echo "</script>";
  }
}
