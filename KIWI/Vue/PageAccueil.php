<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style/PageAccueil.css" type="text/css">

        <?php
        if(!isset($_SESSION)) {
            echo '<title>Kiwi - Accueil</title>';
            include('non-client.php');
            echo '<img src="../Image/bandeau.jpg" id="bandeau2">';
            echo '<img src="../Image/bandeau.jpg" id="bandeau3">';
        }

        else {
            echo '<title>Kiwi - Accueil Client</title>';
            include('client.php');
        }

        ?>
    </head>

    <body>
        <div class="TitreNews">
            <h1>News</h1>
        </div>
        <div class="CorpsNews">
            <img src="../Image/ImageNews.jpg" id="ImageNews"/>Le développement du site avance, merci de nous suivre dans notre aventure. -La rédaction
        </div>
        <div class="BandeauBas">
            <p class="LiensBas"><a href="https://fr.wikipedia.org/wiki/Foire_aux_questions" style="text-decoration: none">FAQ</a>
                <a href="../Vue/Contacts.php" style="text-decoration: none">Contact</a>
                <a href="Jobs.php" style="text-decoration: none">Jobs</a></p>
                <a href="https://facebook.com" style="text-decoration: none"> <img src="../Image/facebook.png" id="LogoFB"> </a>
                <a href="https://twitter.com" style="text-decoration: none"> <img src="../Image/twitterbird.png" id="LogoTwi"> </a>
        </div>
    </body>
</html>
