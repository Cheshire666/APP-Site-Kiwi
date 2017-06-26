<?php
session_start();
require_once '../Modele/connexion.php';
require_once '../Vue/piloter.php';

$sql = 'INSERT INTO sos(nom,dateSOS) VALUES("' .$_SESSION['nom']. '","' . date('y-m-d H:i:s') . '")';
$db->exec($sql);
echo '<script>window.alert("Le SOS a bien été envoyé")</script>';
header('location:../Vue/piloter.php');

