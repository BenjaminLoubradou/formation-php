<?php

$produit = ['marque'=>'adidas',
            'modele'=>"Stan Smith",
            'prix_ht'=>55,
            'description'=>"super basket adidas",
            'is_online'=>true];

$produit2 = ['marque'=>"nike",'modele'=>'air max','prix_ht'=>65,'description'=>"super basket Nike",'is_online'=>true];

$produit3 = ['marque'=>'New Balance','modele'=>'MI373',"Basket New Balance",'prix_ht'=>75,'description'=>"super basket New Balance",'is_online'=>false];

$images =['stan_smith.jpg','air_max.jpg','ml373.jpg'];

$produits = [$produit,$produit2,$produit3];

// Ex foreach
foreach($produit as $cle=> $v) {
    echo $cle.": ".$v.PHP_EOL;
}
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
        table {
            border-collapse: collapse;
            width: 900px;

        }

        table,tr,td,th {
            border: 1px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>
<div>
    <h1>Gestion des produits</h1>
    <table>
        <thead>
            <tr>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Prix HT</th>
                <th>Prix TTC</th>
                <th>Desc.</th>
                <th>Photo</th>
                <th>En stock</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($produits as $key => $p) :?>
<!--        --><?php //print_r($p); die(); ?>
        <tr>
            <td><?php echo strtoupper($p['marque']) ?></td>
            <td><?= $p['modele']?></td>
            <td><?= number_format($p['prix_ht'],2) ?> € HT</td>
       <td><?php echo number_format($p['prix_ht']*1.2,2) ?> € TTC</td>
            <td><?php echo substr($p['description'],0,10).'...' ?></td>
            <td><img width="50" src="img/<?= $images[$key]  ?>" alt="<?= $p['modele']?>"></td>
            <td>
                <img width="16"
                     src="img/diode-<?php echo $p['is_online'] ? 'verte' : 'rouge' ?>.png" alt="<?= $p['is_online'] ? 'en stock' : 'épuisé'  ?>">
            </td>
        </tr>
        <?php endforeach ?>
        </tbody>


    </table>
</div>

</body>
</html>
