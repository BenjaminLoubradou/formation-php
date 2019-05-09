<?php
require 'session_check.php';
$cookie_etat_civil = isset($_COOKIE['etat_civil']) ? $_COOKIE['etat_civil'] : null;
$cookie_animaux = isset($_COOKIE['animaux']) ? unserialize($_COOKIE['animaux']) : null;
/*print_r($cookie_animaux);
die();*/
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
<!--// chat-->
<?php if(in_array('chat',$cookie_animaux)) :?>
    <img src="https://media.giphy.com/media/JIX9t2j0ZTN9S/giphy.gif" alt="">
<?php endif ?>

<!--// chien-->
<?php if(in_array('chien',$cookie_animaux)) :?>
    <img src="https://media.giphy.com/media/mCRJDo24UvJMA/giphy.gif" alt="">
<?php endif ?>

<!--// celibataire-->
<?php if($cookie_etat_civil == "celibataire" ) :?>
    <a href="www.meetic.fr">
        <img src="https://www.sitederencontregratuit.fr/wp-content/uploads/2017/12/banniere_meetic_blanche_300x600.gif" alt="">
    </a>
<?php endif ?>
</body>
</html>
