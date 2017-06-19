<?php
require_once '../Modele/utilisateurs.php';
$resultc = mdp($db,$_SESSION['nom']) or die();
$resulta = mdpadmin($db,$_SESSION['nom']) or die();
$verifconnexion = 0;

if(isset($_SESSION['nom']) && ($_SESSION == mdpadmin($db,$resulta['nom'])) || ($_SESSION == mdpadmin($db,$resulta['nom']))) {
    $verifconnexion = 1;
}

