<!DOCTYPE html>
<html lang="fr">

<head>
    <title>salut</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="index.php" method="get">
        <label for="largeur">largeur: </label>
        <input type="text" id="largeur" name="largeur" required>
        <label for="longueur">longueur: </label>
        <input type="text" id="longueur" name="longueur" required>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

<?php

$taille = $_GET["largeur"];
$taille2 = $_GET["longueur"];

    if

?>