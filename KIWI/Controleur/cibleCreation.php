<?php

require_once('../Modele/connexion.php');
require_once ('../Modele/insertion.php');

$id_piece=$_POST['id_piece'];
$choix_piece=$_POST['choix_piece'];
$type=$_POST['type'];
$superficie=$_POST['superficie'];
$nb_capteur=$_POST['nb_capteur'];
$id_maison=$_POST['id_maison'];

if (!empty($_POST['id_piece'])&&($_POST['choix_piece'])&&($_POST['type'])&&($_POST['superficie'])&&($_POST['nb_capteur'])&&($_POST['id_maison'])){
    insertion_piece($db);
    echo 'Vous avez bien ajouté:';
    $reponse = $db->prepare('SELECT * FROM piece');
    $reponse->execute();
    $donnees = $reponse->fetch(PDO::FETCH_ASSOC);
    var_dump($donnees);

}


