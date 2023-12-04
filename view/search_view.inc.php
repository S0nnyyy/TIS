<?php

// Importujte soubor se výsledky vyhledávání
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/search_results.inc.php';

// Funkce pro zobrazení výsledků vyhledávání
function display_search(){
    // Získání výsledků vyhledávání z relace
    $results = $_SESSION["search"];

    // Zobrazení nadpisu a oddělovací čáry v centru stránky
    echo "<div class='text-center mt-3 mb-3'>";
    echo "<h2>Výsledky vyhledávání</h2>";
    echo "<hr class='my-4'>";
    echo "</div>"; // Uzavření divu text-center

    // Zobrazení výsledků vyhledávání nebo chybové zprávy
    if (!empty($results)) {
        echo "<div class='row mt-3'>";
        foreach ($results as $result) {
            echo "<div class='col-12 mb-3'>";
            echo "<div class='card h-100 d-flex flex-column'>";
            echo "<div class='card-body d-flex justify-content-between align-items-start'>";
            echo "<div>";
            echo "<h5 class='card-title'>{$result['title']}</h5>";
            echo "</div>";
            echo '<form action="includes/film.inc.php" method="get">';
            echo "<input type='hidden' name='film_id' value='{$result['id']}'>";
            echo "<button type='submit' class='btn btn-primary'>Zobrazit detail</button>";
            echo '</form>';
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        // Zobrazení chybové zprávy, pokud nebyly nalezeny žádné výsledky
        echo "<div class='alert alert-danger text-center mt-3 mb-5' role='alert'>";
        echo "Žádné výsledky nenalezeny.";
        echo "</div>";
    }
}

?>
