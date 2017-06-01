<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiwi- Nos Produits</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Image/kiwi.png"/>
<link rel="stylesheet" href="../Style/NosProduits.css">
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

        <a  href="../Vue/NosProduits.php"><button type="button" class="btn-3">Nos produits</button></a>
    </div>
</head>
<body>
<div class="TitreNP">
    <h1>Nos produits</h1>
</div>
<div class="Corps">

    <form method="post" action="../Controleur/creation.php">

        <p>
            <label>Identifiant de la pièce:</label><br>
                <input type="text" name="id_piece" id="id_piece"><br>

            <label>Choix des pièces:</label><br>
            <select name="choix_piece">
                <option value="salon">Salon</option>
                <option value="cuisine">Cuisine</option>
                <option value="chambre">Chambre</option>
                <option value="salle de bain">Salle de bain</option>
                <option value="toilettes">Toilette</option>
            </select><br>

            <label>Type de pièce:</label><br>
            <input type="text" name="type" id="type"><br>

            <label>Superficie de la pièce:</label><br>
            <input type="text" name="superficie" id="superficie"><br>

            <label>Nombre de capteur:</label><br>
            <input type="text" name="nb_capteur" id="nb_capteur"><br>

            <label>Identifiant de la maison:</label><br>
            <input type="text" name="id_maison" id="id_maison"><br>

            <input type="submit" value="Valider"/><br>
        </p>

    </form>




</div>

<form method="post" action="../Controleur/creation.php">
    <p>Choix des pièces:</p>
    <p>
        <select name="choix pièce">
            <option value="salon">Salon</option>
            <option value="cuisine">Cuisine</option>
            <option value="chambre">Chambre</option>
            <option value="salle de bain">Salle de bain</option>
            <option value="toilettes">Toilette</option>

        </select>
        <input type="submit" value="Valider"/>
    </p>

</form>

<div class="BandeauBas">
    <p class="LiensBas">
        <a href="FAQ.php" style="text-decoration: none">FAQ</a>
        <a href="../Vue/Contacts.php" style="text-decoration: none">Contact</a>
        <a href="Jobs.php" style="text-decoration: none">Jobs</a></p>
        <a href="https://facebook.com" style="text-decoration: none">   <img src="../Image/facebook.png" id="LogoFB" /></a>
        <a href="https://twitter.com" style="text-decoration: none">  <img src="../Image/twitterbird.png" id="LogoTwi"/></a>
</div>
</body>
</html>