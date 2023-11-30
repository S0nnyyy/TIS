<?php

// Přísná kontrola typů pro argument $pdo, musí být objekt typu PDO
declare(strict_types=1);

/**
 * Funkce pro vložení dat z formuláře do databáze.
 *
 * @param PDO $pdo Připojení k databázi pomocí PDO.
 * @param string $username Uživatelské jméno z formuláře.
 * @param string $subject Předmět z formuláře.
 * @param string $message Zpráva z formuláře.
 * 
 * @return void
 */
function insert_form_data($pdo, $username, $subject, $message) {
    // Připravení SQL dotazu pro vložení dat do databáze
    $query = "INSERT INTO contact_form (username, subject, message) VALUES (?, ?, ?)";
    
    // Příprava a provedení připraveného dotazu s použitím předaných parametrů
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $subject, $message]);
}

?>
