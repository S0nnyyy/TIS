<?php

// Přísná kontrola typů pro argument $pdo, musí být objekt typu PDO
declare(strict_types=1);

/**
 * Funkce pro přidání komentáře do databáze.
 *
 * @param PDO $pdo - PDO objekt připojení k databázi
 * @param int $user_id - ID uživatele, který přidává komentář
 * @param int $movie_id - ID filmu, ke kterému je komentář přidáván
 * @param string $comment_text - Text komentáře
 * @return void
 */
function add_comment_to_database(PDO $pdo, int $user_id, int $movie_id, string $comment_text) {
    // Příprava SQL dotazu s ošetřením proti SQL injection
    $query = "INSERT INTO comments (user_id, movie_id, comment_text) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $user_id, PDO::PARAM_INT);
    $stmt->bindParam(2, $movie_id, PDO::PARAM_INT);
    $stmt->bindParam(3, $comment_text, PDO::PARAM_STR);
    
    $stmt->execute();
}

/**
 * Funkce pro získání komentářů k danému filmu z databáze.
 *
 * @param PDO $pdo - PDO objekt připojení k databázi
 * @param int $movie_id - ID filmu, ke kterému se hledají komentáře
 * @return array - Pole obsahující komentáře ve formě asociativního pole nebo prázdné pole, pokud nejsou žádné komentáře
 */
function get_comments_for_movie(PDO $pdo, int $movie_id) {
    $query = "SELECT c.comment_id, c.user_id, c.movie_id, c.comment_text, c.created_at, u.username
              FROM comments c
              JOIN users u ON c.user_id = u.id
              WHERE c.movie_id = :movie_id
              ORDER BY c.created_at DESC";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':movie_id', $movie_id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
