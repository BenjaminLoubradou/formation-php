<?php
require 'session_check.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue <?= $_SESSION['login'] ?></h1>
    <h2>A propos de vous :</h2>
    <form action="cookie.php" method="POST">
        <div>
            <label for="etat_civil">Votre état civil : </label>
            <select name="etat_civil" id="etat_civil">
                <option value="celibataire">Célibataire</option>
                <option value="marie">Marié(e)</option>
                <option value="divorce">Divorcé(e)</option>
                <option value="veuf">Veuf/veuve</option>
                <option value="complique">C'est compliqué</option>
            </select>
        </div>
        <div>
            <h2>Quel est votre animal préféré ?</h2>
            <label>
                <input type="checkbox" value="chien" name="animaux[]">Chien
            </label>
            <label>
                <input type="checkbox" value="chat" name="animaux[]">Chat
            </label>
            <label>
                <input type="checkbox" value="poisson" name="animaux[]">Poisson
            </label>
            <label>
                <input type="checkbox" value="cheval" name="animaux[]">Cheval
            </label>
            <label>
                <input type="checkbox" value="cochon" name="animaux[]">Cochon
            </label>
        </div>
        <input type="submit">
    </form>
</body>
</html>