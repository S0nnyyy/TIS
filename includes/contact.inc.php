<?php

// Načtení souborů pro databázi, model a kontrolér
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/contact_model.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

// Kontrola, zda byl formulář odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    try {
        
        // Získání hodnot z formuláře
        $username = $_POST['your-username'];
        $subject = $_POST['your-subject'];
        $message = $_POST['your-message'];
        
        insert_form_data($pdo, $username, $subject, $message);

        // Přidání informace o úspěchu do session
        $_SESSION['form_submission_success'] = true;

        header("Location: ../contact.php");
        die();
        
    } catch (PDOException $e) {
        // Výjimka pro případ chyby v dotazu
        die("Query Failed: " . $e->getMessage());
    }
    
} else {
    // Pokud formulář nebyl odeslán metodou POST, přesměrujeme na přihlašovací stránku
    header('Location: ../login.php');
    die();
}

?>
