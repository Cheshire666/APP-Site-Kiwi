<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Kiwi- FAQ </title>
    <link rel="shortcut icon" type="image/x-icon" href="../Image/kiwi.png"/>
    <link rel="stylesheet" href="../Style/FAQ.css">
    <?php
    if(!isset($_SESSION)) {
        echo '<title>Kiwi - Accueil</title>';
        include('non-client.php');
    }

    else {
        echo '<title>Kiwi - Accueil Client</title>';
        include('client.php');
    }

    ?>
<body>
<div class="TitreNP">
    <h1> FAQ </h1>
</div>
<div class="Corps">
    <div class = " ">
    </div>

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