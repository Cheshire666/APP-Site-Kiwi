<?php session_start();
require 'client.php';

?>
<title>Kiwi - Création</title>
<body>
<div class="TitreCreation">
    <h1>Création</h1>
</div>


<div class="Corps" style="font-family: 'Boulevard Saint Denis'; font-size: 200%">

    <form method="post" action="../Controleur/cibleCreation.php">

        <p>
            <label>Identifiant de la pièce:</label>
                <input type="text" name="id_piece" id="id_piece"><br>

            <label>Choix des pièces:</label>
            <select name="choix_piece">
                <option value="salon">Salon</option>
                <option value="cuisine">Cuisine</option>
                <option value="chambre">Chambre</option>
                <option value="salle de bain">Salle de bain</option>
                <option value="toilettes">Toilette</option>
            </select><br>

            <label>Type de pièce:</label>
            <select name="type_piece">
                <option value="petite"> Petite </option>
                <option value="moyenne">Moyenne </option>
                <option value="grande"> Grande </option>
            </select><br>

            <label>Superficie de la pièce:</label>
            <input type="text" name="superficie" id="superficie"><br>

            <label>Nombre de capteur:</label>
            <input type="text" name="nb_capteur" id="nb_capteur"><br>

            <label>Identifiant de la maison:</label>
            <input type="text" name="id_maison" id="id_maison"><br><br>

            <input type="submit" value="Valider" style="
             background-color: #319cbd;
             border: 0 solid;
             border-radius: 8px;
             font-family: 'BvdStDenisLight';
             font-size: 100%;
             box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
             outline: 1px solid #e7e7e7;"/>
        </p>

    </form>


</div>



<div class="BandeauBas">
    <p class="LiensBas">
        <a href="FAQ.php" style="text-decoration: none">FAQ</a>
        <a href="../Vue/Contacts.php" style="text-decoration: none">Contact</a>
        <a href="MentionLegales.php" style="text-decoration: none">MentionsLégales</a></p>
        <a href="https://facebook.com" style="text-decoration: none">   <img src="../Image/facebook.png" id="LogoFB" /></a>
        <a href="https://twitter.com" style="text-decoration: none">  <img src="../Image/twitterbird.png" id="LogoTwi"/></a>
</div>
</body>
</html>