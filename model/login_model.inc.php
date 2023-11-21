<?php

// Přísná kontrola typů pro argument $pdo, musí být objekt typu PDO
declare(strict_types=1);

/**
 * Funkce pro získání informací o uživateli z databáze na základě zadaného jména.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param string $username - Uživatelské jméno, pro které se mají získat informace
 * @return array|false - Asociativní pole s informacemi o uživateli nebo false, pokud uživatel není nalezen
 */
function get_user(object $pdo, string $username) {
    $query = "SELECT * FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

/**
 * Funkce pro získání stavu zákazu (ban) uživatele z databáze na základě zadaného jména.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param string $username - Uživatelské jméno, pro které se má získat stav zákazu
 * @return mixed - Stav zákazu (true/false) nebo null, pokud uživatel není nalezen
 */
function get_ban_status(object $pdo, string $username) {
    $query = "SELECT is_banned FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetchColumn();
    return $result;
}

?>
