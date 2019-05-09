<?php
/**
 * En vous référent à la documentation en ligne de PHP (php.net), transformer les chaines de caractères suivantes
 * selon les directives indiquées
 *
 *
 * 1_ Transformer une chaîne en majuscule en minuscule
 * 2_ Transformer en majuscule le premier caractère d'une chaîne
 * 3_ Transformer en majuscule le premier caractère de chaque mot d'une chaîne
 * 4_ Calculer le nombre de caractère présent dans une chaîne
 * 5_ Supprimer les espaces en début et fin d'une chaîne
 * 6_ Supprimer la première lettre d'une chaîne
 * 7_ Remplacer des caractères présents dans une chaîne par d'autres caractères
 *
 *
 *
 */

// exo1 :
    $str = "BENJAMIN";
    $strLow = strtolower($str);
//exo2 :
    $word = 'hello';
    $wordFirst = ucfirst($word);
//exo3 :
    $sentence = 'bonjour tout le monde!';
    $majSentence = ucwords($sentence);
//exo4 :
    $allWord = 'bonjour tout le monde!';
    $somme = strlen($allWord);
//exo5 :
    $otherWord = ' Une nouvelle phrase ';
    $clean = trim($otherWord);
//exo6 :
    $text = 'Une jolie maison';
    $delete = substr($text, 1);
//exo7 :
    $text2 = "Hello World of PHP";
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $change = str_replace($vowels, "!",$text2 );

?>

<?php
/**
 *
 * EXERCICE: rercher les fonctions "math" dans la documentation de PHP (php.net) et réaliser les opérations suivantes
 *
 *
 * 1_ Affichez la valeur absolue d'un nombre
 * 2_ Calculez la racine carré d'un nombre
 * 3_ Affichez le reste d'une division (modulo)
 * 4_ Générez un nombre aléatoire
 * 5_ Générez un nomree aléatoire entre 15 et 800
 * 6_ Arrondissez la valeur de $float
 * 7_ Arrondissez au nombre supérieur la valeur de $float
 * 8_ Arrondissez au nombre inférieur la valeur de $float
 *
 */

// exo1 :
    $number = 35;
    $valAbs = abs($number);
// exo2 :
    $number2 = 25;
    $racine = sqrt($number2);
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
    <h1>STRINGS</h1>
    <h2>EXO 1 - maj en min</h2>
    <p>Maj : <?= $str; ?> >>>> min : <?= $strLow; ?></p><br>
    <h2>EXO 2 - 1er caractere en maj</h2>
    <p>Ex : <?= $word; ?> >>>> 1ère caractère en maj : <?= $wordFirst; ?></p><br>
    <h2>EXO 3 - 1er caractere de chaque mot</h2>
    <p>Ex : <?= $sentence; ?> >>>> 1ère caractère en maj : <?= $majSentence; ?></p><br>
    <h2>EXO 4 - Calculer le nombre de caractère </h2>
    <p>Ex : <?= $allWord; ?> >>>> nombre de caractere de la phrase : <?= $somme; ?></p><br>
    <h2>EXO 5 - Supprimer les espaces en début et fin d'une chaîne</h2>
    <p>Ex : <?= $otherWord; ?> >>>> espaces supprimés :<?= $clean; ?></p><br>
    <h2>EXO 6 - Supprimer la première lettre d'une chaîne</h2>
    <p>Ex : <?= $text; ?> >>>> 1ere lettre supprimée : <?= $delete; ?></p><br>
    <h2>EXO 7 - Remplacer des caractères présents dans une chaîne par d'autres caractères</h2>
    <p>Ex : <?= $text2; ?> >>>> remplacer les voyelles : <?= $change; ?></p><br>
    <br>
    <br>

    <h1>NUMBERS</h1>
    <h2>EXO 1 - Affichez la valeur absolue d'un nombre</h2>
    <p>Ex : <?= $number; ?> >>>> valeur absolue : <?= $valAbs; ?></p><br>
    <h2>EXO 2 - Calculez la racine carré d'un nombre</h2>
    <p>Ex : <?= $number2; ?> >>>> racine : <?= $racine; ?></p><br>


</body>
</html>


