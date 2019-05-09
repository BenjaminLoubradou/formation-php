<?php

$produit = ['marques'=>"Adidas",'modele'=>"Stan Smith",'prix_ht'=>55,'descritption'=>"super basket adidas",'is_online'=>true];

$produit2 = ['marques'=>"Nike",'modele'=>"Air Max",'prix_ht'=>65,'descritption'=>"super basket nike",'is_online'=>true];

$produit3 = ['marques'=>"New Balance",'modele'=>"MI373",'prix_ht'=>60,'descritption'=>"super basket new balance",'is_online'=>false];

$images = ['stan_smith.jpg','air_max.jpg','mi373.jpg'];

$produits = [$produit,$produit2,$produit3];

$tva = 19.6/100;

//print_r($produits[2]);
//die();

$img ='<img src="img/diode_rouge.jpg" alt="diode verte">';
if ($produits[2]['is_online'] === true) {

    $img= '<img src="img/diode_verte.jpg" alt="diode verte">';
}
//if ('is_online' === !true) {
//    echo '<img src="img/diode_rouge.jpg" alt="diode rouge">';
//}



// ex boucle foreach
// on apporte 2 filtres (les clés et les valeurs du tableau)

//foreach ($produit as $key => $value){
//    echo $key. ":".$value.PHP_EOL;
//}

//foreach ($produit as $key => $value){
//    echo $value.PHP_EOL;
//};
//
//foreach ($produit2 as $key => $value){
//    echo $value.PHP_EOL;
//};
//
//foreach ($produit3 as $key => $value){
//    echo $value.PHP_EOL;
//};


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
            width: 90%;
        }
        table img{
            height:30%;
            /*width:30%;*/
        }

        table,tr,th,td {
            border: 1px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Gestion des produits</h1>
    <table>
        <thead>
            <tr>
                <th>Marques</th>
                <th>Modèle</th>
                <th>Prix HT</th>
                <th>Prix TTC</th>
                <th>Desc.</th>
                <th>Photo</th>
                <th>En stock</th>
            </tr>
        </thead>
        <tbody>
            <!--<tr>
                <td><?/*= $produits[0]['marques'];*/?></td>
                <td><?/*= $produits[0]['modele'];*/?></td>
                <td><?/*= $produits[0]['prix_ht']."€";*/?></td>
                <td><?/*= $produits[0]['prix_ht']* (1 + $tva)."€";*/?></td>
                <td><?/*= substr($produits[0]['descritption'], 0, 10); */?></td>
                <td><?/*= '<img src="img/stan_smith.jpg" alt="stan smith">' */?></td>
                <td><?/*= $produits[0]['is_online'] */?></td>
            </tr>
            <tr>
                <td><?/*= $produits[1]['marques'];*/?></td>
                <td><?/*= $produits[1]['modele'];*/?></td>
                <td><?/*= $produits[1]['prix_ht']."€";*/?></td>
                <td><?/*= $produits[1]['prix_ht']* (1 + $tva)."€";*/?></td>
                <td><?/*= substr($produits[1]['descritption'], 0, 10); */?></td>
                <td><?/*= '<img src="img/air_max.jpg" alt="air max">' */?></td>
                <td><?/*= $produits[1]['is_online'] */?></td>
            </tr>
            <tr>
                <td><?/*= $produits[2]['marques'];*/?></td>
                <td><?/*= $produits[2]['modele'];*/?></td>
                <td><?/*= $produits[2]['prix_ht']."€";*/?></td>
                <td><?/*= $produits[2]['prix_ht']* (1 + $tva)."€";*/?></td>
                <td><?/*= substr($produits[2]['descritption'], 0, 10); */?></td>
                <td><?/*= '<img src="img/mi373.jpg" alt="mi373">' */?></td>
                <td><?/*= $img */?></td>
            </tr>-->
            <?php foreach($produits as $key => $p):?>
            <tr>
                <td><?= strtoupper($p['marques'])?></td>
                <td><?= $p['modele'] ?></td>
                <td><?= number_format($p['prix_ht'])."€"?></td>
                <td><?= number_format($p['prix_ht']* (1 + $tva))."€"?></td>
                <td><?= substr($p['descritption'], 0, 10) ?></td>
                <td><img src="img/<?= $images[$key]?>" alt="stan smith"></td>
                <td>
                    <img src="img/diode_<?php echo $p['is_online'] ? 'verte' : 'rouge' ?>.jpg" alt="<?= $p['is_online'] ? 'en stock' : 'épuisé'  ?>">
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>



    </table>

</body>
</html>
