<?php
require ('../Modele/connexion.php');
require_once('../Vue/luminosite_capteurs.php');

if (isset($_POST['salon'])){
    $val= $db->prepare('SELECT * FROM donnees,piece WHERE piece.id_pièce=donnees.id_pièce AND nom_pièce="salon"   ')or die(print_r($db->errorInfo()));
    $val->execute();
    while ($tab= $val->fetch (PDO::FETCH_ASSOC)){
        ?> <tr>

            <th><?php echo $tab['date'];?></th>
            <th><?php echo $tab['valeur'];?></th>
            <th><?php echo $tab['nom_pièce'];?></th>


        </tr>
        <?php



    }
}
if (isset($_POST['cuisine'])){
    $val= $db->prepare('SELECT * FROM donnees,piece WHERE piece.id_pièce=donnees.id_pièce AND nom_pièce="cuisine"   ')or die(print_r($db->errorInfo()));
    $val->execute();
    while ($tab= $val->fetch (PDO::FETCH_ASSOC)){
        ?> <tr>

            <th><?php echo $tab['date'];?></th>
            <th><?php echo $tab['valeur'];?></th>
            <th><?php echo $tab['nom_pièce'];?></th>


        </tr>
        <?php



    }
}
if (isset($_POST['chambre'])){
    $val= $db->prepare('SELECT * FROM donnees,piece WHERE piece.id_pièce=donnees.id_pièce AND nom_pièce="chambre"   ')or die(print_r($db->errorInfo()));
    $val->execute();
    while ($tab= $val->fetch (PDO::FETCH_ASSOC)){
        ?> <tr>

            <th><?php echo $tab['date'];?></th>
            <th><?php echo $tab['valeur'];?></th>
            <th><?php echo $tab['nom_pièce'];?></th>


        </tr>
        <?php



    }
}
if (isset($_POST['salle_de_bain'])){
    $val= $db->prepare('SELECT * FROM donnees,piece WHERE piece.id_pièce=donnees.id_pièce AND nom_pièce="salle_de_bain"   ')or die(print_r($db->errorInfo()));
    $val->execute();
    while ($tab= $val->fetch (PDO::FETCH_ASSOC)){
        ?> <tr>

            <th><?php echo $tab['date'];?></th>
            <th><?php echo $tab['valeur'];?></th>
            <th><?php echo $tab['nom_pièce'];?></th>


        </tr>
        <?php



    }
}
if (isset($_POST['toilette'])){
    $val= $db->prepare('SELECT * FROM donnees,piece WHERE piece.id_pièce=donnees.id_pièce AND nom_pièce="toilette"   ')or die(print_r($db->errorInfo()));
    $val->execute();
    while ($tab= $val->fetch (PDO::FETCH_ASSOC)){
        ?> <tr>

            <th><?php echo $tab['date'];?></th>
            <th><?php echo $tab['valeur'];?></th>
            <th><?php echo $tab['nom_pièce'];?></th>


        </tr>
        <?php



    }
}
