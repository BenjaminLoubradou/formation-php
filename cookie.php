<?php
//vérifier la session
require 'session_check.php';

// récuperer les data du form
$etat_civil = isset($_POST['etat_civil']) ? $_POST['etat_civil'] : null;
$animaux = isset($_POST['animaux']) ? $_POST['animaux'] : null;
// créer un cookie en fonction de $etat_civil
// time() + 60s*60min*24h*360j
setcookie("etat_civil",$etat_civil,time() + 60*60*24*360);

if(count($animaux) > 0){
    //conversion du tableau en string
//    $animaux_str = implode('-',$animaux);
    $animaux_str = serialize($animaux);
    setcookie("animaux",$animaux_str,time() + 60*60*24*7);
}
header('Location:moncompte.php');
?>