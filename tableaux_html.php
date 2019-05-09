<?php
// Les tableaux à indice numérique
//$notes_eleves = array(12,5,6,17,12,14,13,20);
// Autre syntaxe
$notes_eleves = [12,5,6,17,12,14,13,20];
// Somme de toutes les notes
$somme_notes = array_sum($notes_eleves);
// Nombre de notes
$nb_notes = count($notes_eleves);
//$moyenne = round($somme_notes / $nb_notes,1);
$moyenne = round(array_sum($notes_eleves) / count($notes_eleves),1);
// Afficher la meilleur note
$meilleure_note = max($notes_eleves);
// Afficher la moins bonne note
$worst_note = min($notes_eleves);

//echo "somme des notes: $somme_notes".PHP_EOL;
//echo "nb de notes: $nb_notes".PHP_EOL;
//echo "La moyenne des notes est: $moyenne".PHP_EOL;




////echo "La meilleur note est ".max($notes_eleves);
//echo "La meilleur note est $meilleure_note".PHP_EOL;


echo "La moins bonne note est $worst_note".PHP_EOL;
// Est-ce que le tableau de notes contient la note maximale 20 ?
//if($meilleure_note == 20) {
//    echo "Un/e élève a eu 20 !";
//}

if(in_array(20,$notes_eleves)) {
    echo "Un/e élève a eu 20 !";
} else {
    echo "personne n'a eu 20 :(";
}

// debug
//echo "salut";

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Bienvenue dans le système de notation</h1>

<h4>La moyenne est <?php echo $moyenne ?></h4>
<!--<h4>La moyenne est --><?//= $moyenne ?><!--</h4>-->

<?php if(in_array(20,$notes_eleves)) :?>
<p style="color:green">Un / une élève a eu 20 !!!</p>

<?php else :?>
<p style="color:red">Personne n' a eu 20 :(</p>
<?php endif ?>

</body>
</html>
