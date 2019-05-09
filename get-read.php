<?php
$pseudo = isset($_GET['pseudo']) ? $_GET['pseudo'] : null ;
$age = isset($_GET['age']) ? $_GET['age'] : null;
$langages = isset($_GET['langages']) ? $_GET['langages'] : [];
$total_langages = count($langages);

//die(gettype($age)); //  ! Return string à cause du protocole HTTP

//die(is_numeric($age));
$age_valide = !empty($age) && is_numeric($age) && $age <=110 ? true : false;

//print_r($_GET);

// Cahier des charges
// >> Proposer l'achat de tutos en ligne à des utilisateurs en fonction de leurs langages préférés.

// Mettre en place un form HTML pour collecter les données du user (pseudo, age, ses langages préférés)

// Si form rempli à 100% > on affiche des produits tutos à vendre, en fonction des langages cochés. (ces produits doivent être stockés dans un tableau php > $produits. (à terme les produits proviendront d'une Base de données)

// Si le champ pseudo est vide (afficher un message d'erreur)
// Si le champ âge est vide ou bien que l'âge saisi est invalide ( sup. à 100 ou de type !integer) > afficher message d'erreur
// Si aucun langage n'est coché > afficher message d'erreur

// les messages d'erreurs sont bloquants. Dès qu'un cas est déclenché on s'arrête là. Ex: pas de pseudo et pas de langage coché > on affiche que le message d'erreur lié au  pseudo vide car c'est le premier problème rencontré.

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div.col-4 {
            float:left;
            width: 33%;
        }
        div.error {
            background: #b20023;
            color:#FFF;
            font-weight: 700;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #910019;
        }
        a.shop {
            background: #162bff;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #0a179e;
            color:#FFF;
            text-decoration: none;
        }
        a.shop:hover {
            background: #0a1476;
        }

    </style>
</head>
<body>
    <h1>Bienvenue <?= $pseudo ?> !</h1>
    <h2>Voici les tutos que nous pouvons vous proposer:</h2>
    <?php if(empty($pseudo)) :?>
    <div class="error">
        <p>Vous devez saisir un pseudo</p>
    </div>
    <?php elseif (!$age_valide ) :?>
    <div class="error">
        <p>Vous devez saisir un âge valide</p>
    </div>
    <?php elseif($total_langages ==0) :?>
    <div class="error">
        <p>Vous devez cocher au moins un langage !</p>
    </div>
    <?php endif ?>


    <?php foreach($langages as $langage) :?>
    <div class="col-4">
        <h2>tuto <?= $langage ?></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet beatae dicta est eveniet expedita facilis impedit libero minus nesciunt numquam obcaecati officiis quo quod, repudiandae similique sint, veniam vitae?</p>
        <a href="" class="shop">Acheter</a>
    </div>
    <?php endforeach; ?>


</body>
</html>

