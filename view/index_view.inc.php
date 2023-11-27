<?php

// Načtení souboru index.inc.php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/index.inc.php';

/**
 * Funkce pro zobrazení karet filmů na úvodní stránce.
 *
 * @return void
 */
function display_films() {
    // Získání pole filmů z $_SESSION
    $films = $_SESSION["films"];

    // Výpis karet filmů
    echo "<div class='row mt-5'>";
    foreach ($films as $film) {
        echo "<div class='col-md-4 mb-3'>";
        echo "<div class='card h-100' onclick='showFilmDetails({$film['id']})'>";
        echo "<img class='card-img-top' src='{$film['image_url']}' alt='{$film['title']}'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>{$film['title']}</h5>";
        echo "</div>";
    
        echo "<div class='card-body'>";
        echo '<form action="includes/film.inc.php" method="get">';
        echo '<input type="hidden" name="film_id" value="' . $film['id'] . '">';
        echo '  <button type="submit" class="btn btn-success w-100">Více</button>';
        echo '</form>';
        echo "</div>";
        
        echo "</div>";
        echo "</div>";
    }

    // Zavření řádku
    echo "</div>";
    echo "</div>";
}
?>
