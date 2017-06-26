<?php
session_start();
require_once '../Modele/connexion.php';
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<link href="../Style/admin.css" rel="stylesheet">
<title>Kiwi - Liste des SOS</title>
<head>
    <div class="Deconnexion">
        <a  href="../Modele/deconnexion.php"><button type="button" class="btn-deconnexion">Déconnexion</button></a>
    </div>
    <a href="../Vue/admin.php"><img src="../Image/Logo_Kiwi.png" id="Logo"/></a>
    <div class="Onglets">
        <a  href="../Vue/Formulaire_Inscription.php"><button type="button" class="btn-1">Inscription d'un client</button></a>
        <a  href="../Vue/SOSadmin.php"><button type="button" class="btn-3">SOS</button></a>
    </div>
</head>

    <body>
    <br><br><table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Date</th>

        </tr>

        <?php
        $reponse = $db->prepare('SELECT id_SOS,nom,dateSOS FROM sos');
        $reponse->execute();

        while ($result= $reponse->fetch (PDO::FETCH_ASSOC)){ ?>

        <tr>
            <th><?php echo $result['id_SOS'] ?></th>
            <th><?php echo $result['nom'];?></th>
            <th><?php echo $result['dateSOS'];?></th>
        </tr>

    <?php }?>

    </table><br><br>

    <form method="post" action="../Controleur/cibleSOSadmin.php">
        <label>Identifiant d'un problème résolu :</label>
            <input type="text" name="idsos" id="idsos">
    </form>

    </body>

</html>
