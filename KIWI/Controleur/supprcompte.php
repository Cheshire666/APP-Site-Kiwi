<?php
require_once '../Modele/connexion.php';

if($_POST['mdp']==$_SESSION['mdp']) {
    $sql = 'DELETE FROM client WHERE nom ="'.$_SESSION['nom'].'"';
    $db->exec($sql);
}