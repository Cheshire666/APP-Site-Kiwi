<?php session_start();

require 'client.php';
?>
<!DOCTYPE html>
<html>
<title>Kiwi - Edition du profil</title>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../Style/editProfil.css" type="text/css">
</head>

<body>

<?php echo '<h1>Nom : '.$_SESSION['nom']; ?><br><br>

    <script type="text/javascript">
        function bascule(id)
        {
            if (document.getElementById(id).style.visibility === "hidden")
                document.getElementById(id).style.visibility = "visible";
            else document.getElementById(id).style.visibility = "hidden";
        }

    </script>
<div id="bouton" onclick="bascule('header');">Modifier mon mot de passe</div>

<div id="header" onload="visibility = 'hidden'">
    <form method=post action="../Controleur/modifmdp.php">
        <ul>
            <label>Ancien mot de passe</label>
            <input type="password" name="amdp" id="amdp"><br>
            <label>Nouveau mot de passe</label>
            <input type="password" name="nmdp" id="nmdp"><br>
            <input type="submit" name="submit" value="Modifier" style="background-color: #3F95AD; border-radius: 8px; font-family: 'Dosis Medium'; font-size: large">
        </ul>
    </form>
</div>
</body>

