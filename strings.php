<?php
// importer un commentaire :
// include "commentaire.php";
require "commentaire.php";

$prenom = "Benjamin";
$nom = "Loubradou";
$age = 34;
$ville = "Paris";
$age_requis = 18;
$resultat = somme(2,55);

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

    <?php echo "<h1>Salut $prenom</h1>"; ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            <?php echo $ville ?>Commodi delectus doloremque ducimus eveniet odit
            officiis tempore vitae. <?php echo $nom ?>Alias aperiam cupiditate deleniti,
            deserunt distinctio illum maxime nihil nulla quaerat
            quos. Nisi!
        </p>
    <?php if($age >= $age_requis){
        echo "<h2>salut tu as l'âge requis</h2>";
        }
    ?>
    <?php if($age == $age_requis) { ?>
        <p>salut <?php echo $prenom ?>. <br>Bienvenue sur notre site !</p>
    <?php } ?>

    <?php if($age < $age_requis) : ?>
        <h4>Tu es trop petit ! Reviens plus tard !</h4>
    <?php else :?>
        <h1>Bienvenue <?php echo $prenom ?></h1>
        <p>Ville: <?= $ville ?></p>
    <?php endif
    // meilleure façon de créer une condition en php?>



</body>
</html>
