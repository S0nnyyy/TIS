<?php

/**
 * Funkce pro získání všech uživatelů z databáze.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @return array - Pole obsahující všechny uživatele ve formě asociativního pole nebo prázdné pole, pokud nejsou žádní uživatelé k dispozici
 */
function get_users(object $pdo) {
    $query = "SELECT * FROM users";
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Funkce pro získání role uživatele z databáze na základě uživatelského jména.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param string $userUsername - Uživatelské jméno, pro které se má získat role
 * @return array|false - Asociativní pole s rolí uživatele nebo false, pokud uživatel není nalezen
 */
function get_user_role(object $pdo, string $userUsername) {
    $query = "SELECT role FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $userUsername, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $user;
}

/**
 * Funkce pro odstranění uživatele z databáze na základě ID.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param int $userId - ID uživatele, který se má odstranit
 * @return void
 */
function remove_user_from_database(object $pdo, int $userId) {
    try {
        $query = "DELETE FROM users WHERE id = :userId";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Chyba: " . $e->getMessage();
    }
}

/**
 * Funkce pro získání stavu zákazu (ban) uživatele z databáze na základě uživatelského jména.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param string $username - Uživatelské jméno, pro které se má získat stav zákazu
 * @return bool - Stav zákazu (true/false)
 */
function get_ban_status(object $pdo, string $username) {
    $query = "SELECT is_banned FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetchColumn();

    return ($result === 'true');
}

/**
 * Funkce pro zabanování uživatele v databázi na základě ID.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param int $userId - ID uživatele, který se má zabanovat
 * @return void
 */
function ban_user(object $pdo, int $userId) {
    $query = "UPDATE users SET is_banned = true WHERE id = :userId";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();
}

/**
 * Funkce pro odstranění zákazu uživatele v databázi na základě ID.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param int $userId - ID uživatele, který má být odzabanován
 * @return void
 */
function remove_ban_user(object $pdo, int $userId) {
    $query = "UPDATE users SET is_banned = false WHERE id = :userId";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();
}

/**
 * Funkce pro získání všech zpráv z databáze.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @return array - Pole obsahující všechny zprávy ve formě asociativního pole nebo prázdné pole, pokud nejsou žádné zprávy k dispozici
 */
function get_messages(object $pdo) {
    $query = "SELECT * FROM contact_form";
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Funkce pro získání všech filmů z databáze.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @return array - Pole obsahující všechny filmy ve formě asociativního pole nebo prázdné pole, pokud nejsou žádné filmy k dispozici
 */
function get_movies(object $pdo) {
    $query = "SELECT * FROM movies";
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function add_film_to_database(
    object $pdo,
    string $title,
    string $description,
    int $rating,
    string $genre,
    string $director,
    string $release_date,
    ?string $duration,
    ?string $tags,
    string $image_url
) {
    try {
        // Příprava dotazu
        $query = "INSERT INTO movies (title, description, rating, genre, director, release_date, duration, tags, image_url) 
                  VALUES (:title, :description, :rating, :genre, :director, :release_date, :duration, :tags, :image_url)";

        // Příprava a provedení připraveného dotazu
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
        $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
        $stmt->bindParam(':director', $director, PDO::PARAM_STR);
        $stmt->bindParam(':release_date', $release_date, PDO::PARAM_STR);
        $stmt->bindParam(':duration', $duration, PDO::PARAM_STR);
        $stmt->bindParam(':tags', $tags, PDO::PARAM_STR);
        $stmt->bindParam(':image_url', $image_url, PDO::PARAM_STR);
        $stmt->execute();

    } catch (PDOException $e) {
        // V případě chyby v dotazu vypíše chybové hlášení
        echo "Chyba: " . $e->getMessage();
    }
}

?>
