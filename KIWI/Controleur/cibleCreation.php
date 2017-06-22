<?php

require_once('../Modele/connexion.php');

if (!empty($_POST['id_piece']) AND !empty($_POST['choix_piece']) AND !empty($_POST['type']) AND !empty($_POST['superficie']) AND !empty($_POST['nb_capteur']) AND !empty($_POST['id_maison'])){

    $db->exec('INSERT INTO piece VALUES("'.$_POST['id_piece'].'", "'.$_POST['choix_piece'].'", "'.$_POST['type'].'", "'.$_POST['superficie'].'", "'.$_POST['nb_capteur'].'", "'.$_POST['id_maison'].'")') or die(print_r($db->errorInfo()));
    echo '<script language="JavaScript">window.alert("Félicitations, le fomulaire a été ajouté dans la base de données !")</script>';
    include('../Vue/Creer.php');
    header('location: ../Vue/Creer.php');
}


