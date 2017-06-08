<?php

require '../Modele/utilisateurs.php';
require '../Vue/editProfil.php';

$result = mdp($db,$_SESSION['nom']);

if(!empty($_POST['amdp']) && !empty($_POST['nmdp'])) {
    if (md5($_POST['amdp']) != $result['mot_de_passe']) { // Le mot de passe entré ne correspond pas à celui stocké dans la base de données client
        $erreur = '"Ancien mot de passe" ne correspond pas au mot de passe actuel';
        echo $erreur;
    } else {
        $sql = 'UPDATE client SET mot_de_passe="'.md5($_POST['nmdp']).'"';
        $db->exec($sql);
    }
}

else {
    $erreur = 'Veuillez remplir tous les champs';
    echo $erreur;
}