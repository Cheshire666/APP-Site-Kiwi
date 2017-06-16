<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Style/Inscription.css">
    <!--<img src="../Image/maison-inscription.png" id="Maison"/>-->
    <img src="../Image/Logo_Kiwi.png" id="Logo"/>
    <title>Kiwi - Formulaire d'Inscription</title>



    <div class="Onglets">
        <a  href="../Vue/QuiSommesNous.php"><button type="button" class="btn-1">Qui sommes-nous ?</button></a>
        <a  href="../Vue/piloter.php"><button type="button" class="btn-2">Piloter</button></a>
        <a  href="../Vue/Creer.php"><button type="button" class="btn-3">Création</button></a>
    </div>
</head>
<body>

<!--Titre, aligné et centré-->
<div align = "center">
<div class="TitreIns">
    <h1>Formulaire d'inscription</h1>
</div>
</div>

<!--Formulaire-->
<div align = "center">
    <div class="Formulaire">
         
 <form method="post" action="ajout.php" <br/>
     <label>Nom: <input type="text" name="nom" id="nom"  placeholder="Indiquer votre Nom"/></label><br/>
        <I><font size ="5pt" color ='red'>
                    <?php
            echo $Message1;
            ?>
                </font></I>
        <br/>
     <label>Adresse : <input type="text" name="adresse" id="adresse" placeholder="Indiquer votre Adresse" /></label><br/>
        <I><font size ="5pt" color ='red'>
                <?php
                echo $Message2;
                ?>
            </font></I>
        <br/>
     <label>Téléphone : <input type="tel" name="tel" id="tel" placeholder="Indiquer votre Téléphone"/></label><br/>
        <I><font size ="5pt" color ='red'>
                <?php
                echo $Message3;
                ?>
            </font></I>
        <br/>
     <label>Mot de passe: <input type="password" name="MDP" id="MDP" placeholder="Définir un Mot de Passe" /></label><br/>
        <I><font size ="5pt" color ='red'>
                <?php
                echo $Message4;
                ?>
            </font></I>
        <br/>
     <label>Confirmation: <input type="password" name="MDP2" id="MDP2" placeholder="Réecrire le Mot de Passe" /></label><br/>
        <I><font size ="5pt" color ='red'>
                <?php
                echo $Message5;
                echo $Message6;
                echo $Message7;
                ?>
            </font></I>
        <br/>
     <input type="submit" value="S'inscrire" id="sub"/>
 
 </form>
 </div>
</div>



<div class="BandeauBas">
    <p class="LiensBas"><a href="https://fr.wikipedia.org/wiki/Foire_aux_questions" style="text-decoration: none">FAQ</a>
        <a href="../Vue/Contacts.php" style="text-decoration: none">Contact</a>
        <a href="MentionLegales.php" style="text-decoration: none">MentionsLégales</a></p>
    <a href="https://facebook.com" style="text-decoration: none"> <img src="../Image/facebook.png" id="LogoFB"> </a>
    <a href="https://twitter.com" style="text-decoration: none"> <img src="../Image/twitterbird.png" id="LogoTwi"> </a>
</div>
</body>



</html>

