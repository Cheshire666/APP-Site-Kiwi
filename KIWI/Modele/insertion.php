<?php
require ('connexion.php');
$choix_piece=$_POST['choix_piece'];

function insertion_piece($db){
    $db->exec('INSERT INTO piece($choix_piece) VALUES($choix_piece)');
}