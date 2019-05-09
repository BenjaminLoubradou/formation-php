<?php

// les tableaux à indice numérique
$notes_eleves = array(12,5,2,8,12,18,13);
// autres syntaxe
$notes_eleves = [12,5,2,8,12,18,13];

// somme des notes
    $somme = array_sum($notes_eleves);
    echo "La somme des notes du tableau : $somme".PHP_EOL;
// nombre de notes
    $nombreNotes = count($notes_eleves);
    echo "Le nombre de notes du tableau : $nombreNotes".PHP_EOL;
// total de notes / nb de notes
    $moyenne = $somme / $nombreNotes;
    echo "La moyenne des notes est : $moyenne".PHP_EOL;
// afficher la meilleur note
    $bestNote = max($notes_eleves);
    echo "La meilleure note est : $bestNote".PHP_EOL;
// afficher la moins bonne
    $worstNote = min($notes_eleves);
    echo "La moins bonne note est : $worstNote".PHP_EOL;
// est ce que le tableau contient la note de 20 ?
//    if($bestNote == 20){
//        echo "Un élève a eu 20 !";
//    }

    if(!in_array(20,$notes_eleves)){
        echo "personne n'a eu 20 :(";
    }

?>
