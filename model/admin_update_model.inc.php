<?php

// Funkce pro aktualizaci údajů uživatele
function update_user_data(object $pdo, int $userId, string $username, string $email, string $role) {
    // SQL dotaz pro aktualizaci údajů v tabulce users
    $query = "UPDATE users SET username = :username, email = :email, role = :role WHERE id = :userId";
    
    // Připravení a provedení připraveného dotazu
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':role', $role, PDO::PARAM_STR);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();
}

// Funkce pro získání údajů o uživateli
function get_user_data(object $pdo, int $userId) {
    // SQL dotaz pro výběr všech údajů o uživateli s daným ID
    $query = "SELECT * FROM users WHERE id = :id";
    
    // Připravení a provedení připraveného dotazu
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
    $stmt->execute();
    
    // Získání údajů o uživateli
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vrácení údajů o uživateli nebo false, pokud uživatel nebyl nalezen
    return $userData ? $userData : false;
}

?>
