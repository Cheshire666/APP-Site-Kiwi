<?php
require_once('../Modele/connexion.php');

$nom = $_POST['nom'];
$adr = $_POST['adresse'];
$tel = $_POST['tel'];
$MDP = $_POST['MDP'];
$MDP2 = $_POST['MDP2'];

if (!isset($nom) OR !isset($adr) OR !isset($tel) OR !isset($MDP) OR !isset($MDP2))
{
    $Message='Veuillez remplir tous les champs';
    include '../Vue/Formulaire_Inscription.php';
    echo '<h3>'.$Message.'</h3>';
    exit();
}

elseif (isset($MDP) AND strlen($MDP)<6){
    $Message6='Le mot de passe doit contenir au moins 6 caractères';
    include '../Vue/Formulaire_Inscription.php';
    echo '<h3>'.$Message6.'</h3>';
    exit();
}

elseif ($MDP != $MDP2)
{
    $Message7='Les mots de passe ne correspondent pas';
    include '../Vue/Formulaire_Inscription.php';
    echo '<h3>'.$Message7.'</h3>';
    exit();
}

else {
    $db->exec('INSERT INTO client(nom,adresse,téléphone,mot_de_passe) VALUES("'.$_POST['nom'].'", "'.$_POST['adresse'].'", "'.$_POST['tel'].'", "'.md5($_POST['MDP']).'")') or die (print_r($db->errorInfo()));
    echo '<script language="JavaScript">window.alert("Félicitations, le client a bien été inscrit dans la base de données !")</script>';
    include '../Vue/Formulaire_Inscription.php';
    exit();
}