<?php
require_once('../Modele/connexion.php');

$nom = $_POST['nom'];
$adr = $_POST['adresse'];
$tel = $_POST['tel'];
$MDP = $_POST['MDP'];
$MDP2 = $_POST['MDP2'];

if (empty($nom))
{
    $Message1='Veuillez indiquer votre nom pour continuer!';
    //echo "<h1><center> Veuillez indiquer votre nom pour continuer! </center></h1>";
    include '../Vue/Formulaire_Inscription.php';
    exit();
}

if (empty($adr))
{
    $Message2='Veuillez indiquer votre adresse pour continuer!';
    //echo "<h1><center> Veuillez indiquer votre adresse pour continuer! </center></h1>";
    include '../Vue/Formulaire_Inscription.php';
    exit();
}

if (empty($tel))
{
    $Message3='Veuillez indiquer votre téléphone pour continuer!';
    //echo "<h1><center> Veuillez indiquer votre téléhone pour continuer! </center></h1>";
    include '../Vue/Formulaire_Inscription.php';
    //exit();
}

if (empty($MDP))
{
    $Message4='Veuillez définir un mot de passe pour continuer!';
    echo $Message4;
}

if (empty($MDP2))
{
    $Message5='Veuillez confirmer votre mot de passe pour continuer!';
    echo $Message5;
}
if (strlen($MDP)<6){
    $Message6='Le mot de passe doit contenir au moins 6 caractères';
    echo $Message6;
}

if ($MDP != $MDP2)
{
    $Message7='Les mots de passe ne correspondent pas!';
    echo $Message7;
}

if(strlen($MDP)>5){
    $db->exec('INSERT INTO client(nom,adresse,téléphone,mot_de_passe) VALUES("'.$_POST['nom'].'", "'.$_POST['adresse'].'", "'.$_POST['tel'].'", "'.md5($_POST['MDP']).'")') or die (print_r($db->errorInfo()));
    echo '<script language="JavaScript">window.alert("Félicitations, le client a bien été inscrit dans la base de données !")</script>';
    include '../Vue/Formulaire_Inscription.php';
}