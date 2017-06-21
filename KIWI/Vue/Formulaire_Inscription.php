<?php session_start();
require_once '../Controleur/ajout.php'?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../Style/Inscription.css" type="text/css">
    <title>Kiwi - Formulaire d'Inscription</title>
    <div class="Deconnexion">
        <a  href="../Vue/PageAccueil.php"><button type="button" class="btn-deconnexion">Déconnexion</button></a>
    </div>
    <a href="../Vue/admin.php"><img src="../Image/Logo_Kiwi.png" id="Logo"/></a>
    <div class="Onglets">
        <a  href="../Vue/Formulaire_Inscription.php"><button type="button" class="btn-1">Inscription d'un client</button></a>
        <a  href="../Vue/SOSadmin.php"><button type="button" class="btn-3">SOS</button></a>
    </div>

    <div class="Titre">
    <h1>Formulaire d'inscription</h1>
    </div>

     <form method="post" action="../Controleur/ajout.php" class="Form">
         <ul>
             <label>Nom: </label>
             <input type="text" name="nom" id="nom"/><br>

             <label>Adresse : </label>
             <input type="text" name="adresse" id="adresse"/><br>

             <label>Téléphone : </label>
             <input type="tel" name="tel" id="tel"/><br>

             <label>Mot de passe: </label>
             <input type="password" name="MDP" id="MDP"/><br>

             <label>Confirmation du mot de passe: </label>
             <input type="password" name="MDP2" id="MDP2"/><br>

             <br><input type="submit" value="Inscription" id="submit"/>
         </ul>
     </form>
</head>
</html>

