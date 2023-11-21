<?php

// Přísná kontrola typů pro argument $pdo, musí být objekt typu PDO
declare(strict_types=1);

/**
 * Funkce pro získání všech filmů z databáze.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @return array - Pole obsahující všechny filmy ve formě asociativního pole nebo prázdné pole, pokud nejsou žádné filmy k dispozici
 */
function get_Films(object $pdo) {
    $query = "SELECT * FROM movies";
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Funkce pro získání role uživatele z databáze na základě uživatelského jména.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param string $userUsername - Uživatelské jméno, pro které se má získat role
 * @return array|false - Asociativní pole s rolí uživatele nebo false, pokud uživatel není nalezen
 */
function get_user_role(object $pdo, string $userUsername) {
    $query = "SELECT role FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $userUsername, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $user;
}

?>
