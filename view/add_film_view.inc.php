<?php

// Načtení souboru s konfigurací session
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

/**
 * Funkce pro zobrazení formuláře pro přidání filmu.
 */
function display_form_film() {
    // Základní HTML struktura pro formulář
    echo '<main class="container my-5">';
    echo '<h2>Přidat film </h2>';

    // Otevření formuláře s akcí a metodou POST
    echo '<form action="includes_add_film_action.inc.php" method="post">';

    // Pole pro zadání Anglického názvu filmu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Anglický Název</label>';
    echo '<input type="text" class="form-control" id="title" name="title" placeholder="Zadejte Anglický název filmu" required>';
    echo '</div>';

    // Pole pro zadání Českého nazvu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Český Název</label>';
    echo '<input type="text" class="form-control" id="title" name="title" placeholder="Zadejte Český název filmu" required>';
    echo '</div>';

    //url obrazek
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">URL Obrázku - Byla nastavena defaultní hodnota</label>';
    echo '<input type="text" class="form-control" id="image_url" name="image_url" placeholder="Zadejte URL adresu obrázku" value="https://i.ibb.co/27M4b0P/Sn-mek-obrazovky-2023-12-14-210901.png" required>';
    echo '</div>';

    //datum vydani
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Datum vydání filmy </label>';
    echo '<input type="date" class="form-control" id="release_date" name="release_date" placeholder="Datum vydání" required>';
    echo '</div>';

    // Pole pro zadání popisu filmu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Popis</label>';
    echo '<input type="text" class="form-control" id="description" name="description" placeholder="Zadejte popis filmu" required>';
    echo '</div>';

    // Pole pro zadání hodnocení filmu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Hodnocení</label>';
    echo '<input type="number" class="form-control" id="rating" name="rating" max="6" placeholder="Zadejte hodnocení filmu" required>';
    echo '</div>';

    // Pole pro zadání žánru filmu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Žánr</label>';
    echo '<input type="text" class="form-control" id="genre" name="genre" placeholder="Zadejte žánry filmu" required>';
    echo '</div>';

    // Pole pro zadání režiséra filmu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Režisér</label>';
    echo '<input type="text" class="form-control" id="director" name="director" placeholder="Zadejte režiséra filmu" required>';
    echo '</div>';

    // Tags
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Tagy</label>';
    echo '<input type="text" class="form-control" id="tags" name="tags" placeholder="Zadejte Tagy" required>';
    echo '</div>';
    

    // Tlačítko pro odeslání formuláře
    echo '<button type="submit" class="btn btn-primary m-3">Přidat</button>';

    // Odkaz na návrat zpět na administrační stránku
    echo '<a href="admin.php" class="btn btn-danger">Zpět</a>';

    // Uzavření formuláře
    echo '</form>';

    // Uzavření kontejneru
    echo '</main>';
}

?>
