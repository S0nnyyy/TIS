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
        echo '<form action="includes/film.inc.php" method="get">';
        echo "<button type='submit' class='card h-100 btn btn-link p-0' name='film_id' value='{$film['id']}'>";
        echo "<div class='bg-image hover-zoom'>"; // Přidána třída hover-zoom
        echo "<img class='card-img-top w-100' src='{$film['image_url']}' alt='{$film['title']}'>";
        echo "</div>";
        echo "</button>";
        echo '</form>';
        echo "</div>";
    }

    // Zavření řádku
    echo "</div>";
    echo "</div>";

    // Přidání jQuery pro zoom efekt s transition a zvětšením o 3 px
    echo <<<HTML
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        .hover-zoom img {
            transition: transform 0.3s ease; /* Transition time 0.3s s efektem ease */
        }
    </style>
    <script>
        $(document).ready(function(){
            // Přidání zoom efektu na obrázek s třídou hover-zoom
            $(".hover-zoom img").hover(function(){
                $(this).css("transform", "scale(1.03) translate(3px, 3px)"); // Zvětšení obrázku na 110% s přesunutím o 3px
            }, function(){
                $(this).css("transform", "scale(1)"); // Návrat obrázku na původní velikost
            });
        });
    </script>
HTML;
}
?>
