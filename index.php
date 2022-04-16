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
    if (!isset($_SESSION['id'])) { // Si on ne détecte pas de session alors on verra les liens ci-dessous
    ?>
        <a href="inscription.php">Inscription</a> <!-- Liens de nos futures pages -->
        <a href="connexion.php">Connexion</a>

    <?php
    } else { // Sinon s'il y a une session alors on verra les liens ci-dessous
    ?>
        <a href="profil.php">Mon profil</a>
        <a href="modifier-profil.php">Modifier mon profil</a>
        <a href="deconnexion.php">Déconnexion</a>
    <?php
    }
    ?>
</body>

</html>