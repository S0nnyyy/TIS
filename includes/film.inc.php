<?php

// Kontrola, zda byl formulář odeslán metodou GET
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    try {
        // Načtení souborů pro databázi, model a kontrolér
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/film_model.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/controller/film_contr.inc.php';

        // Získání ID filmu z query řetězce
        $film_id = isset($_GET['film_id']) ? $_GET['film_id'] : null;

        // Pokud 'film_id' neexistuje, přesměrujte na index.php nebo jinou stránku
        if ($film_id === null) {
            header('Location: ../index.php');
            die();
        }

        // Získání filmových dat
        $film_data = get_film_data_by_id($pdo, $film_id);

        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

        // Uložení filmových dat do session
        $_SESSION['film_data'] = $film_data;
        $_SESSION['film_id'] = $film_id;

        // Přesměrování na stránku film.php
        header('Location: ../film.php');
        die();

    } catch (PDOException $e) {
        // Výjimka pro případ chyby v dotazu
        die("Query Failed: " . $e->getMessage());
    }
} else {
    // Pokud formulář nebyl odeslán metodou GET, přesměrujeme na přihlašovací stránku
    header('Location: ../index.php');
    die();
}
?>
