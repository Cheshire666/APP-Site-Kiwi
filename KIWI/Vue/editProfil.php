<?php session_start();

require 'client.php';
?>

<body>
<?php
echo '<h1>Nom : '.$_SESSION['nom'];
echo '<h1>Prénom : '.$_SESSION['prenom'];
?>
</body>
