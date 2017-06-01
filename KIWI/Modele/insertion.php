<?php
require ('connexion.php');
$choix_piece=$_POST['choix_piece'];
$id_piece=$_POST['id_piece'];
$type=$_POST['type'];
$superficie=$_POST['superficie'];
$nb_capteurs=$_POST['nb_capteurs'];
$=$_POST[''];


function insertion_piece($db){
    $db->exec('INSERT INTO piece($choix_piece) VALUES($choix_piece)');
}