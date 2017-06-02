<?php

require('../Modele/connexion.php');
require('../Modele/utilisateurs.php');

if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){ // L'utilisateur a rempli tous les champs du formulaire
    $nom = $_POST['pseudo'];

    $resultc = mdp($db,$nom);
    $resulta = mdpadmin($db,$nom);

    if(md5($_POST['mdp'])!= $resultc['mot_de_passe'] && md5($_POST['mdp'])!= $resulta['mot_de_passe']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données client
        $erreur = "Nom ou mot de passe client incorrect";
        echo $erreur;
        include '../Vue/PageAccueil.php';
    }

    elseif (md5($_POST['mdp']) == $resulta['mot_de_passe']) {     //L'utilisateur est un admin
        session_start();
        $_SESSION = $resulta;
        echo "Bienvenue M./Mme. ".$_SESSION['nom'];
        include '../Vue/admin.php';
    }

    else { // mot de passe client correct, on affiche la page d'accueil
        session_start();
        $_SESSION = $resultc;
        echo "Bienvenue M./Mme. ".$_SESSION['nom'];
        include '../Vue/PageAccueil.php';
    }
}

else { // L'utilisateur n'a pas rempli tous les champs du formulaire
    $erreur = "Veuillez remplir tous les champs";
    echo $erreur;
    include '../Vue/PageAccueil.php';

}
