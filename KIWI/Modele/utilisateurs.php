<?php

require('connexion.php');

function mdp($db,$identifiant){
    $reponse = $db->prepare('SELECT nom,mot_de_passe FROM client WHERE nom="'.$identifiant.'"');
    $reponse->execute();
    $result = $reponse->fetch(PDO::FETCH_ASSOC);
    return $result;
}