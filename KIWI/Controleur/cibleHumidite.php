<?php

require ('../Modele/connexion.php');
require_once('../Vue/humidite_capteurs.php');

if (isset($_POST['salon'])){
    $val= $db->prepare('SELECT * FROM donnees,piece WHERE piece.id_pièce=donnees.id_pièce AND nom_pièce="salon"AND donnees.type="humidité"    ')or die(print_r($db->errorInfo()));
    $val->execute();
    while ($tab= $val->fetch (PDO::FETCH_ASSOC)){
        ?> <tr>

            <th><?php echo $tab['date'];?></th>
            <th><?php echo $tab['valeur'];?>%</th>
            <th><?php echo $tab['nom_pièce'];?></th>


        </tr>
        <?php



    }
}
if (isset($_POST['cuisine'])){
    $val= $db->prepare('SELECT * FROM donnees,piece WHERE piece.id_pièce=donnees.id_pièce AND nom_pièce="cuisine"AND donnees.type="humidité"   ')or die(print_r($db->errorInfo()));
    $val->execute();
    while ($tab= $val->fetch (PDO::FETCH_ASSOC)){
        ?> <tr>

            <th><?php echo $tab['date'];?></th>
            <th><?php echo $tab['valeur'];?>%</th>
            <th><?php echo $tab['nom_pièce'];?></th>


        </tr>
        <?php



    }
}
if (isset($_POST['chambre'])){
    $val= $db->prepare('SELECT * FROM donnees,piece WHERE piece.id_pièce=donnees.id_pièce AND nom_pièce="chambre" AND donnees.type="humidité"  ')or die(print_r($db->errorInfo()));
    $val->execute();
    while ($tab= $val->fetch (PDO::FETCH_ASSOC)){
        ?> <tr>

            <th><?php echo $tab['date'];?></th>
            <th><?php echo $tab['valeur'];?>%</th>
            <th><?php echo $tab['nom_pièce'];?></th>


        </tr>
        <?php



    }
}
if (isset($_POST['salle_de_bain'])){
    $val= $db->prepare('SELECT * FROM donnees,piece WHERE piece.id_pièce=donnees.id_pièce AND nom_pièce="sdb" AND donnees.type="humidité"  ')or die(print_r($db->errorInfo()));
    $val->execute();
    while ($tab= $val->fetch (PDO::FETCH_ASSOC)){
        ?> <tr>

            <th><?php echo $tab['date'];?></th>
            <th><?php echo $tab['valeur'];?>%</th>
            <th><?php echo $tab['nom_pièce'];?></th>


        </tr>
        <?php



    }
}
if (isset($_POST['toilettes'])){
    $val= $db->prepare('SELECT * FROM donnees,piece WHERE piece.id_pièce=donnees.id_pièce AND nom_pièce="toilettes" AND donnees.type="humidité"  ')or die(print_r($db->errorInfo()));
    $val->execute();
    while ($tab= $val->fetch (PDO::FETCH_ASSOC)){
        ?> <tr>

            <th><?php echo $tab['date'];?></th>
            <th><?php echo $tab['valeur'];?>%</th>
            <th><?php echo $tab['nom_pièce'];?></th>


        </tr>
        <?php



    }
}
