<?php

// Přísná kontrola typů pro argument $pdo, musí být objekt typu PDO
declare(strict_types=1);

/**
 * Funkce pro získání všech filmů z databáze se specifikovaným řazením.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param string $sort_by - Kritérium pro řazení filmů
 * @return array - Pole obsahující všechny filmy ve formě asociativního pole nebo prázdné pole, pokud nejsou žádné filmy k dispozici
 */
function get_films(object $pdo, string $sort_by): array {
    // ... (Předchozí kód) ...

    // Zjistěte, podle čeho se má řadit
    switch ($sort_by) {
        case 'name':
            $orderBy = 'title';
            break;
        case 'rating':
            $orderBy = 'rating';
            break;
        case 'genre':
            $orderBy = 'genre';
            break;
        case 'best-rating':
            $orderBy = 'rating DESC';
            break;
        case 'worst-rating':
            $orderBy = 'rating ASC';
            break;
        case 'none':
        default:
            $orderBy = 'default_column';
    }

    // SQL dotaz pro získání filmů seřazených podle zadaného kritéria
    if ($orderBy === 'default_column') {
        $sql = "SELECT * FROM movies";
    } else {
        $sql = "SELECT * FROM movies ORDER BY $orderBy";
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Vrátit výsledky
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
?>
