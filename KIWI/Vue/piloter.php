<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Kiwi - Piloter</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Image/kiwi.png"/>
    <link href="../Style/piloter.css" rel="stylesheet">
    <?php include '../Vue/client.php'; ?>
</head>

<body>
<div class="TitrePiloter">
    <h1>Piloter son habitation</h1>
</div>
<div class="PremièreLigne">
    <a href="" style="text-decoration: none">
        <figure>
            <img src="../Image/Luminosité.png" height="150" width="176" class="luminosité"/>
            <figcaption> Luminosité </figcaption>
        </figure>
    </a>
    <a href="" style="text-decoration: none">
        <figure><img src="../Image/Humidité.png" height="129" width="114" class="humidité"/>
            <figcaption>Humidité </figcaption>
        </figure>
    </a>
    <a href="" style="text-decoration: none">
        <figure>
            <img src="../Image/Température.png" height="141" width="150" class="température"/>
            <figcaption> Température</figcaption>
        </figure>
    </a>
    <a href="" style="text-decoration: none">
        <figure>
            <img src="../Image/ONOff.png" height="156" width="175" class="onoff"/>
            <figcaption> On/Off </figcaption>
        </figure>
    </a>
</div>
<div class="DeuxièmeLigne">
    <a href="" style="text-decoration: none">
        <figure><img src="../Image/Stat.png" height="137" width="164" class="stat"/>
            <figcaption> Statistiques </figcaption>
        </figure>
    </a>
    <a href="" style="text-decoration: none">
        <figure><img src="../Image/Modifier.png" height="150" width="189" class="modifier"/>
            <figcaption> Modifier </figcaption>
        </figure>
    </a>
        <input type="submit" name="SOS" /> <figure><img src="../Image/SOS.png" height="120" width="173" class="sos"/>
            <figcaption> SOS </figcaption>
        </figure>
    <?php
    /*if() {

    }*/
    ?>

</div>

<div class="BandeauBas">
    <p class="LiensBas"><a href="https://fr.wikipedia.org/wiki/Foire_aux_questions" style="text-decoration: none">FAQ</a>
        <a href="../Vue/Contacts.php" style="text-decoration: none">Contact</a>
        <a href="https://fr.wikipedia.org/wiki/Steve_Jobs" style="text-decoration: none">Jobs</a></p>
    <a href="https://facebook.com" style="text-decoration: none"><img src="../Image/facebook.png"  id="LogoFB"> </a> <a href="https://twitter.com" style="text-decoration: none"><img src="../Image/twitterbird.png"  id="LogoTwi"> </a>
</div>
</body>
</html>