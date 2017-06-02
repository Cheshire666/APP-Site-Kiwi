<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiwi- Jobs </title>
    <link rel="shortcut icon" type="image/x-icon" href="../Image/kiwi.png"/>
    <link rel="stylesheet" href="../Style/Jobs.css">
    <a href="PageAccueil.php"><img src="../Image/Logo_Kiwi.png" id="Logo"/></a>
    <div class="Authentification">
        <form method=post action="../Controleur/cible.php">
            <h1>Espace Client</h1>
            <ul>
                <label>Login</label>
                <input type="text" name="pseudo" id="pseudo">
                <label>Mot de passe</label>
                <input type="password" name="mdp" id="mdp">
                <input type="submit" name="submit" value="Se connecter">
            </ul>
        </form>
    </div>
    </div>
    <div class="Onglets">
        <a  href="QuiSommesNous.php"><button type="button" class="btn-1">Qui sommes-nous ?</button></a>

        <?php

        if(!isset($_SESSION)) {
            echo '<button type="button" class="btn-2">Piloter</button></a>';
        }

        else {
            echo '<a  href="piloter.php"><button type="button" class="btn-2">Piloter</button></a>';
        }

        ?>

        <a  href="Creer.php"><button type="button" class="btn-3">Création</button></a>
    </div>
</head>
<body>
<div class="TitreNP">
    <h1> Jobs </h1>
</div>
<div class="Corps">
    <div class = " ">
        <p>Le site www.kiwi.com  est une publication de TEAMG9D SARL, 10, rue de Vanves, 92130 Issy-les-moulineaux. France<Br/>
            <Br/>
            Directeur de la publication : Grégoire Mercereau<Br/>
            <Br/>
            L’ensemble des onglets présents sur Kiwi.com sont édités par TEAMG9D – S.A.R.L au capital social : 666 € R.C.S Créteil B 666 666 666 – siège social : 10, rue de Vanve 92130 Issy-les-moulineau cedex
            N° TVA intracommunautaire : FR 666 666 666 00<Br/>
            Directeur de la publication Gregoire Mercereau<Br/>
            Hébergeur : (à compléter par Domisep ou demander à notre cliente)<Br/>
            <Br/>
            Sites et pages KIWI des réseaux sociaux<Br/>
            <Br/>
            Les sites ou pages KIWI des réseaux sociaux FACEBOOK, TWITTER) sont édité par TEAMG9D SARL<Br/>
            Société à responsabilité limitées au capital de 666 €<Br/>
            <Br/>
            R.C.S Créteil 666 666 666<Br/>
            Identifiant TVA : FR 666 666 666 00<Br/>
            <Br/>
            Siège social :<Br/>
            10, rue de Vanve<Br/>
            92130 Issy-les-Moulineaux<Br/>
            Directeur de la publication : Juliette Narcy<Br/>
            Pour tout Contact : Tel : 06 74 39 52 07<Br/>
            <Br>
            Copyright Kiwi 2017/2017 Tout droits des textes et œuvres réservées.<Br/>
            Kiwi ne garantit en aucune façon l’exactitude, la précision, l’exhaustivité ou l’adéquation, des informations mises à disposition sur son site, y compris l’ensemble des liens hypertextes ou toute autre liaison informatique utilisée, directement ou indirectement, à partir de ce site.
            Le site est protégé par le droit d’auteur. L’usage de tout ou partie du site, notamment par téléchargement, reproduction, transmission ou représentation sur tous supports et par tous procédés, à d’autres fins que pour usage personnel et privé dans un but non commercial est strictement interdit.
            Les dénominations sociales, marques et signes distinctifs reproduits sur les sites sont également protégés au titre du droit des marques. La reproduction ou la représentation de tout ou partie d’un des signes précités doit faire l’objet d’une autorisation écrite préalable des titulaires des marques et signes.
            De façon générale, toute reproduction ou représentation non autorisée de marques, logos, dessins, modèles, d’œuvres littéraires, musicales, audiovisuelles, photographiques et plus généralement de tout élément susceptible d’être protégé par un droit de propriété intellectuelle accessibles sur les sites est interdite et constituerait une contrefaçon au sens des articles L335-2 et suivants du Code de la Propriété Intellectuelle, à moins que cette reproduction ou représentation ne soit exclusivement réservée à un usage strictement personnel et <Br/>
        </p>
    </div>

</div>

<div class="BandeauBas">
    <p class="LiensBas">
        <a href="FAQ.php" style="text-decoration: none">FAQ</a>
        <a href="Contacts.php" style="text-decoration: none">Contact</a>
        <a href="MentionLegales.php" style="text-decoration: none">Mention Légales</a></p>
    <a href="https://facebook.com" style="text-decoration: none">   <img src="../Image/facebook.png" id="LogoFB" /></a>
    <a href="https://twitter.com" style="text-decoration: none">  <img src="../Image/twitterbird.png" id="LogoTwi"/></a>
</div>
</body>
</html>