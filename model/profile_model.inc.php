<?php

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
