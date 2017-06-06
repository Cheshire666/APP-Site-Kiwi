<?php
require_once ('connexion.php');
require_once ('../Controleur/cibleCreation.php');



function insertion_piece($db)
{
    $req = $db->prepare('INSERT INTO piece(:id_piece, :choix_piece,:type_piece, :superficie, :nb_capteurs, :id_maison ) VALUES(id_piece, choix_piece,type_piece, superficie, nb_capteurs, id_maison)');


    $req->bindParam(':id_piece', $_POST['id_piece']);
    $req->bindParam(':choix_piece', $_POST['choix_piece']);
    $req->bindParam(':type_piece', $_POST['type_piece']);
    $req->bindParam(':superficie', $_POST['superficie']);
    $req->bindParam(':nb_capteur', $_POST['nb_capteur']);
    $req->bindParam(':id_maison', $_POST['id_maison']);


    $result=$req->fetch(PDO::FETCH_ASSOC);
    return ($result);


}

