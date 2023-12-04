<?php

// Zahrnutí potřebných souborů
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/comment_load.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/search_results.inc.php';

// Funkce pro zobrazení detailů filmu a komentářů
function display_film() {
    $filmData = $_SESSION["film_data"];
    $comments = $_SESSION['comments'];

    // HTML kód pro stránku filmu
    echo '<div class="container mt-3">';
    
    // Tlačítko Zpět
    echo '<div class="row mb-3">';
    echo '<div class="col-md-12">';
    echo '<a href="index.php" class="btn btn-primary">Zpět</a>';
    echo '</div>';
    echo '</div>';

    // Obrázek filmu vlevo
    echo '<div class="row">';
    echo '<div class="col-md-6">';
    echo '<img src="' . $filmData['image_url'] . '" class="img-fluid" alt="' . $filmData['title'] . '">';
    echo '</div>';

    // Informace o filmu vpravo
    echo '<div class="col-md-6">';
    echo '<h2>' . $filmData['title'] . '</h2>';
    echo "<h6 class='card-title text-muted' style='font-size: smaller;'>{$filmData['czech_name']}</h6>";
    echo '<p>'. display_rating_stars($filmData['rating']) . '</p>';
    echo '<p><strong class="font-weight-bold">Přehled</strong><br>' . $filmData['description'] . '</p>';
    // Další informace o filmu (režisér, žánr, datum vydání, tagy, atd.)
    echo '<p><strong class="font-weight-bold">Režisér:</strong><br>' . $filmData['director'] . '</p>';
    echo '<p><strong class="font-weight-bold">Žánr:</strong><br>' . $filmData['genre'] . '</p>';
    echo '<p><strong class="font-weight-bold">Datum vydání:</strong><br>' . $filmData['release_date'] . '</p>';
    echo '<p><strong class="font-weight-bold">Tagy:</strong><br>' . $filmData['tags'] . '</p>';
    // Konec řádku s informacemi o filmu
    echo '</div>';
    echo '</div>';
    
    // Oddělovací čára nad komentáři
    echo '<div class="row mt-3">';
    echo '<div class="col-md-12">';
    echo '<hr>';
    echo '</div>';
    echo '</div>';
    
    // Oblast pro komentáře
    echo '<div class="row mt-3">';
    echo '<div class="col-md-12">';
    echo '<h3>Přidat komentář</h3>';
    echo '<div class="container bootdey shadow p-3 mb-5 bg-white rounded">';
    echo '<div class="col-md-12 bootstrap snippets">';
    echo '<div class="panel">';
    echo '<div class="panel-body">';
    echo '<form method="post" action="includes/comment.inc.php">';
    echo '<input type="hidden" name="movie_id" value="' . $filmData['id'] . '">'; 
    echo '<textarea class="form-control mb-3" rows="2" name="comment_text" placeholder="Jaký je tvůj názor?"></textarea>';
    echo '<div class="text-right">';
    echo '<button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-pencil fa-fw"></i> Přidat komentář</button>';
    echo '</div>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    // Oddělovací čára nad komentáři
    echo '<div class="row mt-3">';
    echo '<div class="col-md-12">';
    echo '<hr>';
    echo '</div>';
    echo '</div>';

    echo '<h3>Komentáře</h3>';

    echo '<div class="container mt-3">';
    // Styl pro skrytí šipky v dropdownu
    echo '<style>';
    echo '.dropdown-toggle::after {';
    echo '    display: none;';
    echo '}';
    echo '</style>';
    
    // Zobrazení komentářů
// Zobrazení komentářů
foreach ($comments as $comment):
    echo '<div class="row justify-content-center mb-4">';
    echo '    <div class="col-md-12 col-lg-10 col-xl-8">';
    echo '        <div class="card">';
    echo '            <div class="card-body">';         
    echo '                <div class="d-flex flex-start align-items-center">';
    echo '                    <img class="rounded-circle shadow-1-strong me-3"';
    echo '                        src="./img/profile/default_avatar.png"';
    echo '                        alt="avatar" width="60" height="60" />';
    echo '                    <div>';
    echo '                        <h6 class="fw-bold text-primary mb-1">' . $comment['username'] . '</h6>';
    echo '                        <p class="text-muted small mb-0">';
    echo '                            ' . date('M Y', strtotime($comment['created_at'])) . '';
    echo '                        </p>';
    echo '                    </div>';
    echo '                </div>';
    echo '                <p class="mt-3 mb-4 pb-2">' . $comment['comment_text'] . '</p>';
    
    // Check if the logged-in user is an admin
    $isAdmin = ($_SESSION["role"]["role"] === 'admin');
    
    // Pokud komentář patří přihlášenému uživateli nebo je admin
    if ((isset($_SESSION['user_id']) && $comment['user_id'] == $_SESSION['user_id']) || $isAdmin) {
        echo '<div class="float-end small d-flex justify-content-start">';
        echo '    <div class="dropdown">';
        echo '        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="true">';
        echo '            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>';
        echo '        </button>';
        echo '        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
        echo '    <form class="dropdown-item" method="post" action="includes/delete_comment.inc.php">';
        echo '        <input type="hidden" name="comment_id" value="' . $comment['comment_id'] . '">';
        echo '        <button class="btn btn-link" type="submit"><i class="fas fa-trash-alt me-2"></i>Odstranit Komentář</button>';
        echo '    </form>';
        echo '        </ul>';
        echo '    </div>';
        echo '</div>';
    } 
    echo '                <div class="small d-flex justify-content-start">';
    echo '                    <a href="#!" class="d-flex align-items-center me-3">';
    echo '                        <i class="far fa-thumbs-up me-2"></i>';
    echo '                        <p class="mb-0">Like</p>';
    echo '                    </a>';
    echo '                    <a href="#!" class="d-flex align-items-center me-3">';
    echo '                        <i class="far fa-comment-dots me-2"></i>';
    echo '                        <p class="mb-0">Comment</p>';
    echo '                    </a>';
    echo '                    <a href="#!" class="d-flex align-items-center me-3">';
    echo '                        <i class="fas fa-share me-2"></i>';
    echo '                        <p class="mb-0">Share</p>';
    echo '                    </a>';
    echo '                </div>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
endforeach;


    // Konec kontejneru
    echo '</div>';
}

// Funkce pro zobrazení hvězdiček hodnocení
function display_rating_stars($rating) {
    // Omezení hodnocení na rozmezí 1 až 5
    $normalized_rating = max(1, min(5, $rating));

    // HTML pro hvězdičky hodnocení v jednom řádku
    $html = '<div class="rating-stars">';
    $html .= '<p class="mb-0"><strong>Hodnocení:</strong><br>';
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
