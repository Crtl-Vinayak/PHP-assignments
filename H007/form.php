<?php
  session_start();

  if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_unset();
    session_destroy();
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H007/h007.1</title>
    <style>
      body {
        text-align: center;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: repeat(4, 1fr);
      }
      form {
        grid-column: 2/3;
        grid-row: 2/5;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-template-rows: repeat(4, 1fr);
      }
      input {
        border-radius: 5px;
        margin-top: 15px;
        margin-bottom: 15px;
        margin-left: 10px;
        margin-right: 10px;
      }
      h1 {
        grid-column: 2/3;
        grid-row: 1/2;
        font-weight: bold;
      }
      p{
        grid-column: 1/2;
      }
    </style>
  </head>
  <body>
    <h1>Cookies en Sessies</h1>

    <form action="response.php" method="POST">
      <p>Login:</p>
      <input type="text" name="login" value="" required><br>
      <p>Password:</p>
      <input type="password" name="password" value="" required><br>
      <input type="submit" name="knop" value="Submit">
    </form>

  </body>
</html>
