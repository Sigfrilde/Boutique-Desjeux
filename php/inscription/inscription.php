<?php

require '../index.html'
?>



<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Inscription</title>

</head>



<body>
    <div>Inscription</div>
    <form method="post">
        <?php
//S'il y a une erreur sur le nom alors on affiche
 if (isset($er_nom)){
 ?>
        <div><?= $er_nom ?></div>
        <?php
 }
 ?>
        <input class="Nom" type="text" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>"
            required>
        <?php
 if (isset($er_prenom)){
 ?>
        <div><?= $er_prenom ?></div>
        <?php
}
 ?>
        <input type="text" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>"
            required>
        <?php
 if (isset($er_mail)){
 ?>
        <div><?= $er_mail ?></div>
        <?php
 }
 ?>
        <input type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>"
            required>
        <?php
 if (isset($er_mdp)){
 ?>
        <div><?= $er_mdp ?></div>
        <?php
 }
 ?>
        <input type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>"
            required>
        <input type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
        <button type="submit" name="inscription">Envoyer</button>
    </form>



    <!-- <form method="post">
        <?php
//S'il y a une erreur sur le nom alors on affiche
 if (isset($er_nom)){
 ?>
        <div><?= $er_nom ?></div>
        <?php
 }
 ?>
        <input type="text" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>" required>
        <?php
 if (isset($er_prenom)){
 ?>
        <div><?= $er_prenom ?></div>
        <?php
}
 ?>
        <input type="text" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>"
            required>
        <?php
 if (isset($er_mail)){
 ?>
        <div><?= $er_mail ?></div>
        <?php
 }
 ?>
        <input type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>"
            required>
        <?php
 if (isset($er_mdp)){
 ?>
        <div><?= $er_mdp ?></div>
        <?php
 }
 ?>
        <input type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>"
            required>
        <input type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
        <button type="submit" name="connexion">Envoyer</button>
    </form> -->
</body>

</html>