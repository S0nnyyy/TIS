<?php

// Nastavení údajů pro připojení k databázi
$host = 'localhost';     // Adresa serveru databáze
$dbname = 'cfd';         // Název databáze
$dbusername = 'root';    // Uživatelské jméno pro přihlášení k databázi
$dbpassword = '';        // Heslo pro přihlášení k databázi

try {
    // Vytvoření instance PDO a připojení k databázi
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);

    // Nastavení režimu chybových hlášení pro PDO na výjimky
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // V případě chyby při připojování vypíšeme chybovou zprávu a ukončíme skript
    die("Connection Failed: " . $e->getMessage());
}
?>
