<?php

// Načtení souborů pro databázi, model a kontrolér
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/comment_model.inc.php';

// Zkontrolujte, zda byl odeslán požadavek POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['comment_id'])) {
        // Získání ID komentáře ze vstupních dat
        $comment_id = $_POST['comment_id'];
            // Funkce pro smazání komentáře
        delete_comment($pdo, $comment_id);
    
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }
}

?>
