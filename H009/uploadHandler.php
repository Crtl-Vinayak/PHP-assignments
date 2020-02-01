<?php

//ini_set('html_errors', 'false');
//ini_set('error_reporting', 'false');
//ini_set('display_startup_errors', 'false');
//error_reporting(0);
//ob_get_contents();
//ob_end_clean();

$isWelkom = false;
$target_dir = "uploaded_images/";
$target_file = $target_dir . $_FILES["bestanden"]["name"];
$isFileUploaded = false;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$omschrijving = "";
$uitvoering = "";
$categorie = "";

$uploadHandler = new UploadHandler();
$uploadHandler -> isFileChosen();
$uploadHandler -> isFormFilled();

/**
 * Class UploadHandler
 * @version 1.0
 * @author vinayak (:
 * @since 31/01/2020
 */
class UploadHandler {

    /**
     * this function checks if you have chosen a file from the form.
     * if have chosen a file, then the $isWelkom variable gives a value of true.
     * if you have not chosen the file, then the $isWelkom variable gives a value of false.
     */
    function isFileChosen() {
        if (!isset($_FILES["bestanden"]) || $_FILES["bestanden"]["error"] == UPLOAD_ERR_NO_FILE) {
            $GLOBALS["isWelkom"] = false;
        } else {
            $GLOBALS["isWelkom"] = true;
        }
    }

    /**
     * this function checks if you have filled every input, (except the "choose file" input).
     * if you have filled all the inputs, then $isWelkom = true, if not filled then $isWelkom = false.
     */
    function isFormFilled() {
        if (!empty($_POST["omschrijving"]) && !empty($_POST["uitvoering"]) && !empty($_POST["categorie"]) && !empty($_POST["submit"])) {
            $GLOBALS["isWelkom"] = true;
        } else {
            $GLOBALS["isWelkom"] = false;
        }

        $this -> imageStuff();

        if ($GLOBALS["isWelkom"] == false) {
            echo "<a href=\"http://localhost/php_classroom/H009/\">terug naar broodjes toevoegen</a>";
        }
    }

    /**
     * this function checks if the image are correctly uploaded.
     * it checks the following things:
     * - checks if the inputs are filled in.
     * - checks if the file size is below 0.5MB.
     * - checks if the file is a jpg/png/jpeg/gif;
     * if all conditions above are good, then the last thing will happen:
     * the file will be placed in the "uploaded_images" folder.
     * the website link will go to the "overzicht" link.
     */
    function imageStuff() {
        //checkt eerst of je alle inputs hebt ingevuld.
        if ($GLOBALS["isWelkom"] == true) {
            //checkt of dit bestand al bestaat.
            if (file_exists($GLOBALS["target_file"])) {
                $GLOBALS["isWelkom"] = false;
                echo "Sorry, bestand bestaat al.<br>";
            }
            //checkt of dit lager dan 0.5MB bestand is.
            if ($_FILES["bestanden"]["size"] > 500000) {
                $GLOBALS["isWelkom"] = false;
                echo "Sorry, bestand is veelste groot, bestand moet kleiner zijn dan 0.5MB<br>";
            }
            //checkt of dit een jpg bestand is of een png bestand of een jpeg bestand of een gif bestand is.
            if ($GLOBALS["fileType"] != "jpg"
                && $GLOBALS["fileType"] != "png"
                && $GLOBALS["fileType"] != "jpeg"
                && $GLOBALS["fileType"] != "gif") {
                $GLOBALS["isWelkom"] = false;
                echo "Sorry, je bestand is geen jpg/png/jpeg of gif.<br>";
            }
            //uiteindelijk checkt die weer of alles in orde is, als alle if statements false zijn ofwel geen echo uitvoert.
            //dan voert de laatste if statement de volgende:
            //hij zet de bestand in de "uploaded_images" folder en de website gaat gelijk naar de volgende link.
            if ($GLOBALS["isWelkom"] == true) {
                if (move_uploaded_file($_FILES["bestanden"]["tmp_name"], $GLOBALS["target_file"])) {
                    echo "file uploaded (:";
                }

                //initialeren van de 3 text inputs.
                $GLOBALS["omschrijving"] = $_POST["omschrijving"];
                $GLOBALS["uitvoering"] = $_POST["uitvoering"];
                $GLOBALS["categorie"] = $_POST["categorie"];

                $dbh = new Dbh();
                $dbh -> addInputsIntoDB();
                header("Location: http://localhost/php_classroom/H009/overzicht.php");
            }
        }
    }
}

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
            $pdo -> query("INSERT INTO Brood(imageName, description, execution, category) VALUES ('{$GLOBALS["target_file"]}', '{$GLOBALS["omschrijving"]}', '{$GLOBALS["uitvoering"]}', '{$GLOBALS["categorie"]}');");
            $pdo = null;
        } catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
            die();
        }
    }

    function addInputsIntoDB() {
        $this->connect();
    }
}