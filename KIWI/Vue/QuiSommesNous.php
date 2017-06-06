<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiwi - Qui sommes-nous ?</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Image/kiwi.png"/>
    <link rel="stylesheet" href="../Style/QuiSommesNous.css">

    <?php

    if(!isset($_SESSION)) {
        include 'non-client.php';
    }

    else {
        include 'client.php';
    }

    ?>

</head>
<body>
<div class="TitreQSN">
    <h1>Qui sommes nous?</h1>
</div>
<div class="Corps">
    <img src="../Image/ISEP.jpg" class="Imageisep"/>
</div>

<div class="BandeauBas">
    <p class="LiensBas">
        <a href="FAQ.php" style="text-decoration: none">FAQ</a>
        <a href="../Vue/Contacts.php" style="text-decoration: none">Contact</a>
        <a href="MentionLegales.php" style="text-decoration: none">MentionsLégales</a></p>
        <a href="https://facebook.com" style="text-decoration: none">   <img src="../Image/facebook.png"id="LogoFB" /></a> <a href="https://twitter.com" style="text-decoration: none">
    <img src="../Image/twitterbird.png" id="LogoTwi"/></a>
</div>
</body>
</html>