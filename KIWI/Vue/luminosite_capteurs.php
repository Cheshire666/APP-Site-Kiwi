
<?php session_start();
require_once('../Modele/connexion.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiwi- Luminosité </title>
    <link rel="shortcut icon" type="image/x-icon" href="../Image/kiwi.png"/>
    <link rel="stylesheet" href="../Style/luminosité.css">
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
    <h1> Luminosité</h1>
</div>
<div class="choix_piece">
    <p>
    <form method="post" action="../Controleur/cibleLuminosite.php">
        <h2>
        <input type="checkbox" name="salon" id="salon" /> <label for="salon">Salon</label>
        <input type="checkbox" name="cuisine" id="cuisine" /> <label for="cuisine">Cuisine</label>
        <input type="checkbox" name="chambre" id="chambre" /> <label for="chambre">Chambre</label>
        <input type="checkbox" name="salle_de_bain" id="salle_de_bain" /> <label for="salle_de_bain">Salle de bain</label>
            <input type="checkbox" name="toilette" id="toilette" /> <label for="toilette">Toilettes</label></br>
        <input class="btnVal" type="submit" value="Valider"/><br>
        </h2>
    </form>
    </p>
</div>
    <div class = "tab">
        <table>
            <thead>
            <tr>
                <th>
                     Date
                </th>

                <th>
                    Valeurs relevées
                </th>
                <th>
                    Pièce
                </th>

            </tr>
            </thead>
            <tbody>
            <?php
            require ('../Controleur/cibleLuminosite.php');
            ?>
            </tbody>


        </table></div></br>
    </div>
</div>
<?php
$ch = curl_init();
curl_setopt(  $ch,   CURLOPT_URL,  "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=009D");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch); curl_close($ch);

echo "Raw Data:<br />"; echo("$data");
$data_tab = str_split($data,33);

echo "Tabular Data:<br />";
for($i=0, $size=count($data_tab);
    $i<$size;
    $i++){  echo "Trame $i: $data_tab[$i]<br />"; }

$trame = $data_tab[1];

 $t = substr($trame,0,1);
 $o = substr($trame,1,4);
 list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =  sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");

echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");

?>

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