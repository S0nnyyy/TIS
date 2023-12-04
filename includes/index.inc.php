<?php
// Načtení konfigurace relační proměnné session
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

// Kontrola, zda je uživatel přihlášen
if (!isset($_SESSION['user_username'])) {
    // Pokud uživatel není přihlášen, přesměruj ho na přihlašovací stránku
    header('Location: login.php');
    die();
}

// Pokud je uživatel přihlášen, získej potřebné informace
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/index_model.inc.php';

// Získání uživatelského jména z relační proměnné session
$userUsername = $_SESSION['user_username'];

// Získání role uživatele z databáze a uložení do relační proměnné session
$user = get_user_role($pdo, $userUsername);
$_SESSION["role"] = $user;

// Získání seznamu filmů a uložení do relační proměnné session
$sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'none';
$films = get_films($pdo, $sort_by);
$_SESSION["films"] = $films;
?>
