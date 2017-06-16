<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../Style/Inscription.css">
<head>
</head>

<body>
<?php

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
    //echo "<h1><center> Veuillez définir un mot de passe pour continuer! </center></h1>";
    include '../Vue/Formulaire_Inscription.php';
    exit();
}

if (empty($MDP2))
{
    $Message5='Veuillez confirmer votre mot de passe pour continuer!';
    //echo "<h1><center><p class='style_echo'> Veuillez confirmer votre mot de passe pour continuer! </p></center></h1>";
    include '../Vue/Formulaire_Inscription.php';
    exit();
}
if (strlen($MDP)<6){
    $Message6='Le mot de passe doit contenir au moins 6 caractères';
    include '../Vue/Formulaire_Inscription.php';
    exit();
}

if ($MDP != $MDP2)
{
    $Message7='Les mots de passe ne correspondent pas!';
    //echo "<h1><center><p style=\"color:#8b0000; \"> Les mots de passe ne correspondent pas! </p></center></h1>";
    include '../Vue/Formulaire_Inscription.php';
    exit();
}
require_once('../Modele/connexion.php');
if(strlen($MDP)>5){
    //require_once('../Modele/connexion.php');
    $db->exec('INSERT INTO client VALUES(\'$nom\', \'$adr\', \'$tel\', \'$MDP\')') or die (print_r($db->errorInfo()));
    echo "Le client a bien été ajouté à la base de donnée";
    include '../Vue/Formulaire_Inscription.php';
    exit();
}


?>
</body>
</html>