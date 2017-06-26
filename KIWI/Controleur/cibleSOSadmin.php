<?php

session_start();
require_once '../Modele/connexion.php';
require_once '../Vue/SOSadmin.php';
$sql = 'UPDATE sos SET Etat = "RESOLU" WHERE id_SOS = "'.$_POST['idsos'].'"';
$db->exec($sql);
$sql2 = 'DELETE FROM sos WHERE Etat = "RESOLU"';
$db->exec($sql2);
echo '<script>window.alert("Le SOS a bien été supprimé")</script>';
header('location:../Vue/SOSadmin.php');
header('location:../Vue/SOSadmin.php');

