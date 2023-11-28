<?php

// Načtení souborů pro databázi, model a kontrolér
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/comment_model.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

// Získání ID filmu z relační proměnné session
$film_id = $_SESSION['film_id'];

// Získání komentářů pro daný film pomocí funkce get_comments_for_movie
$comments = get_comments_for_movie($pdo, $film_id);

// Uložení komentářů do relační proměnné session pro pozdější použití
$_SESSION['comments'] = $comments;

?>
