<?php session_start();
require 'client.php';

?>
<title>Kiwi - Création</title>
<body>
<div class="TitreCreation">
    <h1>Création</h1>
</div>


<div class="Corps">

    <form method="post" action="../Controleur/cibleCreation.php">

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
            <select name="type_piece">
                <option value="petite"> Petite </option>
                <option value="moyenne">Moyenne </option>
                <option value="grande"> Grande </option>
            </select><br>

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