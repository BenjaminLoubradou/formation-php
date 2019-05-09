<?php

//// Superglobale PHP
$_GET;
////
//print_r($_GET);

//echo "Bonjour ".$_GET['prenom'];
//die();
//$prenom = null ;
//if(isset($_GET['prenom'])) {
//    $prenom = $_GET['prenom'];
//}

// Equivalent Opérateur ternaire
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : null ;


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
<h1>Bienvenue <?= $prenom ?> !</h1>

<form action="get-read.php" method="GET">
    <label for="pseudo">Votre pseudo</label>
    <input type="text" name="pseudo" id="pseudo">

    <label for="age">Votre âge</label>
    <input type="text" name="age" id="age">

    <h4>Vos langages préférés</h4>
    <label>
        <input type="checkbox" name="langages[]" value="php" > PHP
    </label> <br>
    <label>
        <input type="checkbox" name="langages[]" value="js"> JS
    </label> <br>
    <label>
        <input type="checkbox" name="langages[]" value="html"> HTML
    </label> <br>
    <label>
        <input type="checkbox" name="langages[]" value="css"> CSS
    </label> <br>

    <input type="submit">
</form>

</body>
</html>
