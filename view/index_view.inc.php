<?php

// Načtení souboru index.inc.php
require_once 'includes/index.inc.php';

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
        echo "<p class='card-text'>{$film['description']}</p>";
        echo "</div>";
        
        // List group
        echo "<ul class='list-group list-group-flush'>";
        echo "<li class='list-group-item'>Rating: {$film['rating']}</li>";
        echo "<li class='list-group-item'>Genre: {$film['genre']}</li>";
        echo "<li class='list-group-item'>Director: {$film['director']}</li>";
        
        // Přidáme ochranu proti neexistujícím klíčům pro pole tags
        if (isset($film['tags'])) {
            $tags = explode(', ', $film['tags']);
            echo "<li class='list-group-item'>Tags: " . implode(', ', $tags) . "</li>";
        }

        echo "</ul>";

        // Card body s odkazy
        echo "<div class='card-body'>";
        echo "<a href='#' class='card-link'>Card link</a>";
        echo "<a href='#' class='card-link'>Another link</a>";
        echo "</div>";
        
        echo "</div>";
        echo "</div>";
    }

    // Zavření řádku
    echo "</div>";
}
?>
