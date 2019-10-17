<?php
session_start();

// echo $_SESSION["user"]["rol"];
$users = array(
array("email" => "test@test.nl", "passw" => "test", "rol" => "Admin"),
array("email" => "klaas@carpets.nl", "passw" => "snoepje777", "rol" => "User"));

$_SESSION["checkSuccesLogin"] = false;

for($i = 0; $i < count($users); $i++){
  if (($users[$i]["email"] == $_POST["login"])
  && ($users[$i]["passw"] == $_POST["password"])){
    $_SESSION["user"] = array("email" => $_POST["login"],
                              "passw" => $_POST["password"],
                              "rol" => $users[$i]["rol"]);
    $_SESSION["checkSuccesLogin"] = true;
  }
}

if ($_SESSION["checkSuccesLogin"] == false) {
  header('location: form.php?loguit');
}


//check role
if($_SESSION["user"]["rol"] == "Admin") {
  echo "Welcome Admin"."<br>";
  echo "<a href=\"permission.php\">Admins Only Link</a><br>";
  echo "<a href=\"form.php?loguit\">Uitloggen</a><br>";
  echo "<br>";
}
if($_SESSION["user"]["rol"] == "User") {
  echo "Welcome " . $_SESSION["user"]["email"] . "<br>";
  echo "<a href=\"permission.php\">Admins Only Link</a><br>";
  echo "<a href=\"form.php?loguit\">Uitloggen</a><br>";
  echo "<br>";
}
