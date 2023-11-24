<?php
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

$userUsername = $_SESSION['user_username'];

$user = get_user_role($pdo, $userUsername);
$_SESSION["role"] = $user;

$films = get_Films($pdo);
$_SESSION["films"] = $films;
?>
