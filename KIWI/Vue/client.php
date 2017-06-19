<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Style/piloter.css">
        <div class="Deconnexion">
            <form action="../Modele/deconnexion.php" method="post">
                <p>
                    <input type="submit" value="Déconnexion" id="btn-deconnexion"/>
                </p>
            </form>
            <p><?php echo '<p>Bienvenue M./Mme. '.$_SESSION['nom']; ?> <p>
            <p><a href="../Vue/editProfil.php">Mon profil</a></p>

        </div>
        <img src="../Image/Logo_Kiwi.png" id="Logo"/>


        <div class="Onglets">
            <a  href="../Vue/QuiSommesNous.php"><button type="button" class="btn-1">Qui sommes-nous ?</button></a>
            <a  href="../Vue/piloter.php"><button type="button" class="btn-2">Piloter</button></a>
            <a  href="../Vue/Creer.php"><button type="button" class="btn-3">Création</button></a>
        </div>
    </head>
</html>