<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Details over de Broodjes</title>
    <link rel="stylesheet" type="text/css" href="style/detail.css?v<?php echo time(); ?>">
</head>
<body>
<div id="h2Head">
    <h2>Bakkerij Vlecht Beheer</h2>
</div>
<a href="http://localhost/php_classroom/H009/overzicht.php" class="links" id="link1">Overzicht broodjes</a>
<a href="http://localhost/php_classroom/H009/" class="links" id="link2">Broodjes toevoegen</a>
<div id="rowView">
    <?php

    $dbh = new Dbh();
    $dbh -> connect();

    class Dbh {

        private $servername;
        private $username;
        private $password;
        private $dbname;
        private $charset;

        public function connect() {
            $this->servername = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "obamabakkerij";
            $this->charset = "utf8mb4";

            try {
                $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset".$this->charset;
                $pdo = new PDO($dsn, $this->username, $this->password);
                $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $counter = 0;
                foreach($pdo -> query("SELECT * FROM brood") as $row) {
                    if ($counter == $_GET["id"]) {
                        echo "<div><img src='{$row[0]}' alt='{$row[0]}'></div><br>";
                        echo "<div>{$row[1]}</div><br>";
                        echo "<div>{$row[2]}</div><br>";
                        echo "<div>{$row[3]}</div><br>";
                    }
                    $counter++;
                }
                $pdo = null;
            } catch (PDOException $e) {
                echo "Connection failed: ".$e->getMessage();
                die();
            }
        }
    }
    ?>
</div>
</body>
</html>
