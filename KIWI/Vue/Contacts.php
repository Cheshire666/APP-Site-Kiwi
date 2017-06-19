<?php

session_start();
if(isset($_SESSION['nom'])) {
    include 'client.php';
}

else {
    include 'non-client.php';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kiwi- Contact </title>
    <link rel="shortcut icon" type="image/x-icon" href="../Image/kiwi.png"/>
    <link rel="stylesheet" href="../Style/Contacts.css">

<body>
<div class="TitreNP">
    <h1> Contact </h1>
</div>
<div class="Corps">
    <div class = "Map">
        <iframe src="https://www.google.com/maps/d/embed?mid=13HlwNSUCgZADmJr6rRbDe4qBiBg" width="640" height="480"></iframe>
    </div>

</div>

<div class="BandeauBas">
    <p class="LiensBas">
        <a href="FAQ.php" style="text-decoration: none">FAQ</a>
        <a href="../Vue/Contacts.php" style="text-decoration: none">Contact</a>
        <a href="MentionLegales.php" style="text-decoration: none">MentionsLégales</a></p>
        <a href="https://facebook.com" style="text-decoration: none">  <img src="../Image/facebook.png" id="LogoFB" /></a>
        <a href="https://twitter.com" style="text-decoration: none">   <img src="../Image/twitterbird.png" id="LogoTwi"/></a>
</div>
</body>
</html>