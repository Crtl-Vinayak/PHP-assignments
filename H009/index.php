<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Broodjes Toevoegen (:</title>
    <link rel="stylesheet" type="text/css" href="style/index.css?v<?php echo time(); ?>">
</head>
<body>
    <div>
        <h2>Bakkerij Vlecht Beheer</h2>
    </div>
    <a href="http://localhost/php_classroom/H009/overzicht.php" class="links" id="link1">Overzicht broodjes</a>
    <a href="http://localhost/php_classroom/H009/" class="links" id="link2">Broodjes toevoegen</a>
    <form action="http://localhost/php_classroom/H009/uploadHandler.php" method="POST" enctype="multipart/form-data">
        <label for="upload_files">Bestanden:</label><br>
        <input type="file" name="bestanden" id="upload_files" accept="image/*"><br>
        <label for="omschrijving">Omschrijving:</label><br>
        <input type="text" name="omschrijving" id="omschrijving"><br>
        <label for="uitvoering">Uitvoering:</label><br>
        <input type="text" name="uitvoering" id="uitvoering"><br>
        <label for="categorie">Categorie:</label><br>
        <input type="text" name="categorie" id="categorie"><br>
        <input type="submit" name="submit" value="Submit" id="submit">
    </form>
</body>
</html>
