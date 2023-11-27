<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

function display_film() {
    $filmData = $_SESSION["film_data"];

    // HTML kód pro stránku filmu
    echo '<div class="container mt-3">';
    
    // Zpětné tlačítko
    echo '<div class="row mb-3">';
    echo '<div class="col-md-12">';
    echo '<a href="javascript:history.go(-1)" class="btn btn-primary">Zpět</a>';
    echo '</div>';
    echo '</div>';

    // Obrázek filmu na levé straně
    echo '<div class="row">';
    echo '<div class="col-md-6">';
    echo '<img src="' . $filmData['image_url'] . '" class="img-fluid" alt="' . $filmData['title'] . '">';
    echo '</div>';

    // Informace o filmu na pravé straně
    echo '<div class="col-md-6">';
    echo '<h2>' . $filmData['title'] . '</h2>';
    echo '<p>'. display_rating_stars($filmData['rating']) . '</p>';
    echo '<p>' . $filmData['description'] . '</p>';
    // Zde můžete vypsat další informace o filmu, například režisér, délka, hodnocení, atd.
    echo '<p>Director: ' . $filmData['director'] . '</p>';
    echo '<p>Žánr: ' . $filmData['genre'] . '</p>';
    echo '<p>Datum vydání: ' . $filmData['release_date'] . '</p>';
    echo '<p>Tagy: ' . $filmData['tags'] . '</p>';
    // Konec řádku s informacemi o filmu
    echo '</div>';
    echo '</div>';
    
    // Oddělovací čára nad komentáři
    echo '<div class="row mt-3">';
    echo '<div class="col-md-12">';
    echo '<hr>';
    echo '</div>';
    echo '</div>';
    
    // Místo pro komentáře
    echo '<div class="row mt-3">';
    echo '<div class="col-md-12">';
    echo '<h3>Komentáře</h3>';
    // Zde můžete vložit kód pro zobrazení komentářů (např. formulář pro přidání komentáře)
    echo '<p>Comment form or list of comments goes here...</p>';
    echo '</div>';
    echo '</div>';

    // Konec kontejneru
    echo '</div>';
}

function display_rating_stars($rating) {
    // Omezte hodnocení na rozmezí 1 až 5
    $normalized_rating = max(1, min(5, $rating));

    // Vytvořte HTML pro hodnocení a hvězdičky v jednom řádku
    $html = '<div class="rating-stars">';
    $html .= '<p class="mb-0">Hodnocení: ';
    for ($i = 1; $i <= 5; $i++) {
        if ($normalized_rating >= $i) {
            $html .= '<i class="fas fa-star"></i>';
        } else {
            $html .= '<i class="far fa-star"></i>';
        }
    }
    $html .= '</p>';
    $html .= '</div>';

    return $html;
}

?>
