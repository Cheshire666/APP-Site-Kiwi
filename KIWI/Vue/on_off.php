<?php session_start();
require_once('../Controleur/cibleOnOff.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiwi-ON/OFF </title>
    <link rel="shortcut icon" type="image/x-icon" href="../Image/kiwi.png"/>
    <link rel="stylesheet" href="../Style/on_off.css">
    <a href="../Vue/PageAccueil.php"><img src="../Image/Logo_Kiwi.png" id="Logo"/></a>
    <div class="Authentification">
        <form method=post action="../Controleur/cible.php">
            <h1>Espace Client</h1>
            <ul>
                <label>Login</label>
                <input type="text" name="pseudo" id="pseudo">
                <label>Mot de passe</label>
                <input type="password" name="mdp" id="mdp">
                <input type="submit" name="submit" value="Se connecter">
            </ul>
        </form>
    </div>
    </div>
    <div class="Onglets">
        <a  href="../Vue/QuiSommesNous.php"><button type="button" class="btn-1">Qui sommes-nous ?</button></a>

        <?php

        if(!isset($_SESSION)) {
            echo '<button type="button" class="btn-2">Piloter</button></a>';
        }

        else {
            echo '<a  href="../Vue/piloter.php"><button type="button" class="btn-2">Piloter</button></a>';
        }

        ?>

        <a  href="Creer.php"><button type="button" class="btn-3">Création</button></a>
    </div>
</head>
<body>
<div class="TitreNP">
    <h1> ON/OFF </h1>
</div>
<div class="Corps">

    <form method="post" action="../Controleur/cibleOnOff.php">
    <div class="bouton"<h1>Ventilateur</h1>

        <div class="onoffswitch">

            <input type="checkbox" name="onoff[]" value="on" class="onoffswitch-checkbox" id="myonoffswitch" checked>
            <label class="onoffswitch-label" for="myonoffswitch">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        </div>
    </form>
</div></br>





</div>

<div class="BandeauBas">
    <p class="LiensBas">
        <a href="../Vue/FAQ.php" style="text-decoration: none">FAQ</a>
        <a href="../Vue/Contacts.php" style="text-decoration: none">Contact</a>
        <a href="MentionLegales.php" style="text-decoration: none">MentionsLégales</a></p>
    <a href="https://facebook.com" style="text-decoration: none">   <img src="../Image/facebook.png" id="LogoFB" /></a>
    <a href="https://twitter.com" style="text-decoration: none">    <img src="../Image/twitterbird.png" id="LogoTwi"/></a>
</div>
</body>
</html>