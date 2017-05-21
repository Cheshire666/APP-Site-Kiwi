<?php

require('../Modele/connexion.php');
require('../Modele/utilisateurs.php');

if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){ // L'utilisateur a rempli tous les champs du formulaire
    $nom = $_POST['pseudo'];

    $result = mdp($db,$nom);

    if(md5($_POST['mdp'])!=$result['mot_de_passe']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
        $erreur = "Nom ou mot de passe incorrect";
        echo $erreur;
        include '../Vue/PageAccueil.php';


    }

    else { // mot de passe correct, on affiche la page d'accueil
        $_SESSION = $result;
        echo "Bienvenue M.".$_SESSION['nom'];
        include '../Vue/PageAccueil.php';
    }
}

else { // L'utilisateur n'a pas rempli tous les champs du formulaire
    $erreur = "Veuillez remplir tous les champs";
    echo $erreur;
    include '../Vue/PageAccueil.php';

}
