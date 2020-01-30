<?php
    class Dbh {

      private $servername;
      private $username;
      private $password;
      private $dbname;
      private $charset;

      public function connect() {
        $this->servername = "localhost";
        $this->username = "45936";
        $this->password = "ASDF9871QWERTYUI";
        $this->dbname = "45936db2";
        $this->charset = "utf8mb4";

      try {
        $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset".$this->charset;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        foreach ($pdo->query("SELECT * FROM cursist") as $row) {
          print_r($row);
          echo "<br><br>";
        }
        $pdo = null;
        //$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e){
        echo "Connection failed: ".$e->getMessage();
        die();
      }
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>H006/h006_1</title>
  </head>
  <body>
    <?php
      $object = new Dbh;
      $object->connect();
      // print_r(PDO::getAvailableDrivers());
    ?>
  </body>
</html>
