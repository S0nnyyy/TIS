<?php

// Kontrola, zda byl požadavek odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        // Načtení potřebných souborů a konfigurace
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/film_model.inc.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

        // Kontrola, zda byl odeslán identifikátor filmu
        if (isset($_POST["film_id"])) {
            $film_id = $_POST["film_id"];
            
            // Odstranění filmu z databáze
            remove_film_from_database($pdo, $film_id);  // upraveno pro filmy

            header("Location: ../index.php");  // upraveno pro filmy
        }
    } catch (PDOException $e) {
        // V případě chyby v dotazu vypíše chybové hlášení
        die("Query Failed: " . $e->getMessage());
    }

} else {
    // Pokud nebyl požadavek metodou POST, přesměrování na administrační stránku
    header('Location: admin.php');
    die();
}

?>
