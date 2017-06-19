<?php
require_once('../Modele/connexion.php');


$check = "-";
foreach($_POST["onoff"] as $checkoptions){
    $check .= $checkoptions."-";
}
echo $check;