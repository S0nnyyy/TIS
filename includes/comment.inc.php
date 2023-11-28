<?php

// Kontrola, zda byl formulář odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    try {
        // Načtení souborů pro databázi, model a kontrolér
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/comment_model.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
        
        // Získání ID uživatele z relační proměnné session
        $user_id = $_SESSION["user_id"];
        
        // Získání ID filmu a textu komentáře z odeslaných dat formuláře
        $movie_id = $_POST['movie_id'];
        $comment_text = $_POST['comment_text'];
        
        // Přidání komentáře do databáze pomocí funkce add_comment_to_database
        add_comment_to_database($pdo, $user_id, $movie_id, $comment_text);
        
        // Přesměrování na předchozí stránku po úspěšném přidání komentáře
        echo '<script>window.history.go(-1);</script>';
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
