<?php

// Přísná kontrola typů pro celý soubor
declare(strict_types=1);
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/news.inc.php';

/**
 * Funkce pro zobrazení formulářových polí pro registraci.
 *
 * @return void
 */
function display_news() {
    // Retrieve data from the session
    if (isset($_SESSION['upcoming_movies']) && !empty($_SESSION['upcoming_movies'])) {
        $movies = $_SESSION['upcoming_movies'];

        for ($i = 0; $i < count($movies); $i += 2) {
            echo '<div class="row mb-3">';
            // Display the first movie in the pair
            echo '<div class="col-md-6">';
            echo '<div class="card h-100">';
            echo '<img class="card-img-top" src="https://image.tmdb.org/t/p/w780' . $movies[$i]['poster_path'] . '" alt="' . $movies[$i]['title'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $movies[$i]['title'] . '</h5>'; // Title for the pair
            echo '<h6 class="card-subtitle mb-2 text-muted">' . $movies[$i]['release_date'] . '</h6>';
            echo '<p class="card-text">' . $movies[$i]['overview'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            // Display the second movie in the pair if available
            if ($i + 1 < count($movies)) {
                echo '<div class="col-md-6">';
                echo '<div class="card h-100">';
                echo '<img class="card-img-top" src="https://image.tmdb.org/t/p/w780' . $movies[$i + 1]['poster_path'] . '" alt="' . $movies[$i + 1]['title'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $movies[$i + 1]['title'] . '</h5>'; // Title for the pair
                echo '<h6 class="card-subtitle mb-2 text-muted">' . $movies[$i + 1]['release_date'] . '</h6>';
                echo '<p class="card-text">' . $movies[$i + 1]['overview'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            echo '</div>';
        }
    } else {
        echo 'Failed to load upcoming movies.';
    }
}

?>
