<?php

/**
 * Funkce pro aktualizaci uživatelských dat v databázi.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param string $username - Uživatelské jméno
 * @param string $email - Email uživatele
 * @param string $role - Role uživatele
 * @return void
 */
function update_user_data(object $pdo, string $username, string $email, string $role) {
    $query = "UPDATE users SET email = :email, role = :role WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':role', $role, PDO::PARAM_STR);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
}


?>