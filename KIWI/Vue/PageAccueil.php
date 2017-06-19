<!DOCTYPE html>
<html>

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

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style/PageAccueil.css" type="text/css">
    </head>

    <div>

        <div class="TitreNews">
            <h1>News</h1>
        </div>

        <div class="CorpsNews">
                <img src = "../../images/cuisine.jpg" alt = "Image1" id="active" />

        </div>

    </div>

        <script> //images qui défilent
            var images = ["../Image/cuisine.jpg", "../Image/travaux.jpg", "../Image/ville.jpg"];
            var i = 0;
                setInterval(function () {
                    document.getElementById('active').src = images[i];
                    i++;
                    if (i == 3)
                        i = 0;

                }, 1500);
        </script>



        <div class="BandeauBas">
            <p class="LiensBas"><a href="../Vue/FAQ.php" style="text-decoration: none">FAQ</a>
                <a href="../Vue/Contacts.php" style="text-decoration: none">Contact</a>
                <a href="MentionLegales.php" style="text-decoration: none">MentionsLégales</a></p>
                <a href="https://facebook.com" style="text-decoration: none"> <img src="../Image/facebook.png" id="LogoFB"> </a>
                <a href="https://twitter.com" style="text-decoration: none"> <img src="../Image/twitterbird.png" id="LogoTwi"> </a>
        </div>
    </body>
</html>
