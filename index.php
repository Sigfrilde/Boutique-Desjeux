<?php
// Permet de savoir s'il y a une session. 
// C'est-à-dire si un utilisateur s'est connecté à votre site 
session_start();

// Fichier PHP contenant la connexion à votre BDD
include('bd/connexionDB.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="0;url=homepage.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique Désjeux</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['id'])) {
    } else {
    ?>
        <a href="profil.php">Mon profil</a>
        <a href="modifier-profil.php">Modifier mon profil</a>
        <a href="deconnexion.php">Déconnexion</a>
    <?php
    }
    ?>
</body>

</html>