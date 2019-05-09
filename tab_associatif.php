<?php

$notes_eleves = ['marie'=> 15,'ben'=> 12,'vincent'=> 14,'max'=>11];
// afficher la note de ben:
echo $notes_eleves['ben'];
// affiche 12

$notes = [15,12,14,11];
$infos_eleve = ['prenom'=>'benjamin','nom'=>'loubradou','age'=>34,"notes"=>$notes];
$infos_eleve2 = ['prenom'=>'aurelie','nom'=>'loubradou','age'=>34,"notes"=>$notes];

// 2 fctions qui permettent de parcourir un tab
    print_r($infos_eleve);
    //permet de parcourir un tab php,numérique ou associatif ( affiche suelement les valeurs )

    var_dump($infos_eleve);
    // afficher les types et la longueur de chaque valeur
    // permet de parcourir un objet

$eleves = [$infos_eleve,$infos_eleve2];
print_r($eleves);


