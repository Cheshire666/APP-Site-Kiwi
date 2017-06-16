<?php
$_SESSION = array();
session_destroy();
header('../Vue/PageAccueil.php');