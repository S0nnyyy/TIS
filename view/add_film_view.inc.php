<?php

// Načtení souboru s konfigurací session
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

/**
 * Funkce pro zobrazení formuláře pro úpravu filmu.
 */
function display_form_film() {

    // Načtení dat filmu z session nebo prázdného pole, pokud data neexistují
    $loadedFilmData = $_SESSION['loaded_film_data'] ?? [];

    // Základní HTML struktura pro formulář
    echo '<main class="container my-5">';
    echo '<h2>Přidat film </h2>';

    // Pole pro zadání názvu filmu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Název</label>';
    echo '<input type="text" class="form-control" id="title" name="title" placeholder="Zadejte název filmu" value="' . ($loadedFilmData['title'] ?? '') . '">';
    echo '</div>';

    // Pole pro zadání popisu filmu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Popis</label>';
    echo '<input type="text" class="form-control" id="description" name="description" placeholder="Zadejte popis filmu" value="' . ($loadedFilmData['description'] ?? '') . '">';
    echo '</div>';

    // Pole pro zadání hodnocení filmu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Hodnocení</label>';
    echo '<input type="number" class="form-control" id="rating" name="rating" max="6" placeholder="Zadejte hodnocení filmu" value="' . ($loadedFilmData['rating'] ?? '') . '">';
    echo '</div>';

    // Pole pro zadání žánru filmu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Žánr</label>';
    echo '<input type="text" class="form-control" id="genre" name="genre" placeholder="Zadejte žánry filmu" value="' . ($loadedFilmData['genre'] ?? '') . '">';
    echo '</div>';

    // Pole pro zadání režiséra filmu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Režisér</label>';
    echo '<input type="text" class="form-control" id="director" name="director" placeholder="Zadejte režiséra filmu" value="' . ($loadedFilmData['director'] ?? '') . '">';
    echo '</div>';

    // Tlačítko pro odeslání formuláře
    echo '<button type="submit" class="btn btn-primary m-3">Přidat</button>';

    // Odkaz na návrat zpět na administrační stránku
    echo '<a href="admin.php" class="btn btn-danger">Zpět</a>';

    // Uzavření formuláře a kontejneru
    echo '</main>';
}

?>
