<?php
// Récupérer les datas du formulaire
$login = isset($_POST['login']) ? trim($_POST['login']) : null ;
$password = isset($_POST['password']) ?
    password_hash($_POST['password'],PASSWORD_ARGON2I) : null ;




//die($password);

// Si login vide > redirect post.php + error
if(empty($login)) {
    header('Location: post.php?error=1');
    exit();
}
// Si password vide > redirect post.php + error
// ou
// Si password != "poulpe2000" > redirect post.php + error
if(empty($password) || !password_verify("poulpe2000",$password)) {
    header('Location: post.php?error=2');
    exit();
}
// démarrage de session
session_start();

// Si tout est ok > redirect vers bienvenue.php avec affichage du login
$_SESSION['login'] = $login;
//print_r($_SESSION);
header('Location: bienvenue.php');
