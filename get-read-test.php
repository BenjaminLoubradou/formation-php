<?php

//print_r($_GET);

// Cahier des charges
// >> Proposer l'achat de tutos en ligne à des utilisateurs en fonction de leurs langages préférés.

// Mettre en place en form HTML pour collecter les données de l'utilisateur (pseudo, age, ses langages préfs)

// si form rempli à 100% > on affiche des produits tutos à vendre, en fonction des langages cochés. ( ces produits doivent stockés dans un tableau php > $produits. ( A terme, les produits proviendront d'une base de données)
$pseudo = isset($_GET['pseudo']) ? $_GET['pseudo'] : null;
$age = isset($_GET['age']) ? $_GET['age'] : null;
//verifie le type de la donnée entre dans l'input age;
//die(gettype($age)); //return string à cause du protocole HTTP
//die(is_numeric($age));
$age_valide = !empty($age) && is_numeric($age) && $age <= 110 ? true : false;


$langages = isset($_GET['langages']) ? $_GET['langages'] : [];
$total_langages =
$produits = [$pseudo,$age,$langages];
print_r($produits);

// si le champ pseudo est vide (afficher un message d'erreur)

// si le champ age est vide ou bien que l'age saisi est invalide (sup. à 100 ou de type !integer)  > afficher un message d'erreur.

// si aucun langages n'est coché > afficher un message d'erreur

// les messages d'erreurs sont bloquants.
// Dès qu'un cas est déclenché, on s'arrête là.
// Ex: pas de pseudo et pas de langage coché > on affiche que le message d'erreur lié au pseudo vide car c'est le premier problème

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .col-4{
            float:left;
            width:33%;
        }

        .error{
            background:#b20023;
            color:#fff;
            font-weight:700;
            padding:10px;
            border-radius: 5px;
            border: 1px solid #910019
        }

    </style>
</head>
<body>
    <h1>Bienvenue <?= $pseudo ?></h1>
    <h2>Voici les tutaux que nous pouvons nous proposer :</h2>
    <?php if(empty($pseudo)):?>
    <div class="error">
        <p>Vous devez saisir un pseudo</p>
    </div>
    <?php elseif (empty($age) || $age_valide != true):?>
    <div class="error">
        <p>Vous devez saisir un age valide</p>
    </div>
    <?php elseif (empty($langages)):?>
    <div class="error">
        <p>Vous devez cocher un langage</p>
    </div>
    <?php endif ?>
    
    <div class="col-4">
        <h2>Langage tuto</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, at commodi             corporis facilis fugiat illum impedit ipsam iste libero necessitatibus nihil nobis           obcaecati porro  quibusdam quis, quos temporibus ut vero!
        </p>
    </div>

</body>
</html>
