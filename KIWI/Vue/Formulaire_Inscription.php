<?php session_start();
require_once '../Controleur/ajout.php'?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../Style/admin.css" type="text/css">
    <title>Kiwi - Formulaire d'Inscription</title>
    <div class="Deconnexion">
        <a  href="../Vue/PageAccueil.php"><button type="button" class="btn-deconnexion">Déconnexion</button></a>
    </div>
    <img src="../Image/Logo_Kiwi.png" id="Logo"/>
    <div class="Onglets">
        <a  href="../Vue/Formulaire_Inscription.php"><button type="button" class="btn-1">Inscription d'un client</button></a>
        <a  href="../Vue/gestion-site.php"><button type="button" class="btn-2">Gestion du site</button></a>
        <a  href="../Vue/SOSadmin.php"><button type="button" class="btn-3">SOS</button></a>
    </div>

    <div class="Titre">
    <h1>Formulaire d'inscription</h1>
    </div>

    <div align = "center">

     <form method="post" action="../Controleur/ajout.php" class="Form">
         <ul>
             <label>Nom: </label>
             <input type="text" name="nom" id="nom"  placeholder="Indiquer votre nom"/><br>

             <label>Adresse : </label>
             <input type="text" name="adresse" id="adresse" placeholder="Indiquer votre adresse" /><br>

             <label>Téléphone : </label>
             <input type="tel" name="tel" id="tel" placeholder="Indiquer votre téléphone"/><br>

             <label>Mot de passe: </label>
             <input type="password" name="MDP" id="MDP" placeholder="Définir un mot de passe" /><br>

             <label>Confirmation: </label>
             <input type="password" name="MDP2" id="MDP2" placeholder="Confirmer le mot de passe" /><br>

             <br><input type="submit" value="Inscription" id="submit" style="
             background-color: #3F95AD;
             border: 0 solid;
             border-radius: 8px;
             font-family: 'BvdStDenisLight';
             font-size: 100%;
             box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
             outline: 1px solid #e7e7e7;"/>
         </ul>
    </div>

</head>
</html>

