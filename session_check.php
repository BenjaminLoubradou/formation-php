<?php
// Récupérer la session
session_start();
// vérification des données stockées dans la session.
$is_logged = isset($_SESSION['login']) ? true : false;
// si $is_logged > false > redirection post.php? + error
if($is_logged == false){
    header('Location: post.php?error=3');
    exit();
}
?>