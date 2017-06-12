
<?php session_start();
require ('../Modele/connexion.php');
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
<div class="Corps">

    <div class = "tab">
        <table>
            <thead>
                <tr>
                    <th>
                    Identifiant du capteur
                     </th>
                    <th>
                    Identifiant de la pièce
                     </th>
                     <th>
                    Valeurs relevées
                    </th>

                </tr>
            </thead>
            <tbody>
                <?php
                $lum= $db->prepare('SELECT * FROM capteurs')or die(print_r($db->errorInfo()));
                $lum->execute();
                while ($capteur= $lum->fetch (PDO::FETCH_ASSOC)){
                    ?> <tr>

                        <th><?php echo $capteur['id_capteur'];?></th>
                        <th><?php echo $capteur['id_pièce'];?></th>
                        <th><?php echo $capteur['valeurs_relevées'];?></th>

                    </tr>
                    <?php



                } ?>
            </tbody>


        </table>
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