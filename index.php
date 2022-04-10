<?php
// Permet de savoir s'il y a une session. 
// C'est-à-dire si un utilisateur s'est connecté à votre site 
  session_start(); 
  
  // Fichier PHP contenant la connexion à votre BDD
  include('bd/connexionBD.php');
  include('homepage.html') 
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="Description"
        content="Bienvenue sur la boutique Désjeux, spécialisé dans la vente de jeux neuf et occasion">
    <meta name="keywords" content="Andor, Catan, jcc, jeux de cartes à collectionner,Yu-GI-OH!, Pokémon, 7fallen,
        Nemesis, 7 Wonders, 7 Wonders Duel, Sushi GO, Lama, Unlock, Pandemic, Les aventuriers du Rail Europe,
        Papers Dungeons,Takenoko">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Boutique Désjeux</title>
</head>


<body>



    <?php
 if(!isset($_SESSION['id'])){ // Si on ne détecte pas de session alors on verra les liens ci-dessous
?>
    <header>
        <nav>
            <a href="homepage.html">Accueil</a>
            <a href="inscription.php">Inscription</a>
            <a href="#">Contact</a>
        </nav>
        <img src="images/DESJEUX.png" alt="Logo DESJEUX">
    </header>
    <?php
}else{ // Sinon s'il y a une session alors on verra les liens ci-dessous
?>
    <a href="profil.php">Mon profil</a>
    <a href="modifier-profil.php">Modifier mon profil</a>
    <a href="deconnexion.php">Déconnexion</a>
    <?php
 }
 ?>

</body>

</html>