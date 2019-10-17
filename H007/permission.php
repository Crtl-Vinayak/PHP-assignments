<?php
  session_start();

  if($_SESSION["user"]["rol"] == "Admin"){
    echo "Je bent helemaal welkom.";
    echo "<br>";
  }
  if($_SESSION["user"]["rol"] == "User") {
    echo "Je hebt niet voldoende rechten om deze pagina te bezoeken.";
    echo "<br>";
  }
  echo "<br>";
  echo "<a href=\"form.php?loguit\">Terug naar de login page.</a>";

 ?>
