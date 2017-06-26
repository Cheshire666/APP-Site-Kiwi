<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../Style/admin.css" type="text/css">
    <title>Kiwi - Administrateur</title>
    <div class="Deconnexion">
        <a  href="../Modele/deconnexion.php"><button type="button" class="btn-deconnexion">Déconnexion</button></a>
    </div>
    <img src="../Image/Logo_Kiwi.png" id="Logo"/>
    <div class="Onglets">
        <a  href="../Vue/Formulaire_Inscription.php"><button type="button" class="btn-1">Inscription d'un client</button></a>
        <a  href="../Vue/SOSadmin.php"><button type="button" class="btn-3">SOS</button></a>
    </div>
</head>
<body>
    <img src="../Image/adminpic.jpg" id="ImageAdmin">
</body>
</html>