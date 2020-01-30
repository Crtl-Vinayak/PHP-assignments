<?php
class Dbh {

    public $isWelkom = false;

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect() {
        $this->servername = "localhost";
        $this->username = "45936";
        $this->password = "ASDF9871QWERTYUI";
        $this->dbname = "45936";
        $this->charset = "utf8mb4";

        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            foreach ($pdo->query("SELECT * FROM loginGegevenz") as $row) {
                if ($_POST['email'] == $row[0] && $_POST['w8woord'] == $row[1]) {
                    echo "<p>perfectie</p><br>";
                    global $isWelkom;
                    $isWelkom = true;
                }
            }

            $pdo = null;
            //$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            echo "Connection failed: ".$e->getMessage();
            die();
        }
    }

    public function noWelkom() {
        global $isWelkom;
        if ($isWelkom == false) {
            echo "<p>Sorry, geen toegang!</p><br>";
        }
    }
}
    $object = new Dbh;
    $object->connect();
    $object->noWelkom();
    // print_r(PDO::getAvailableDrivers());