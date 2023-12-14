<?php

// Přísná kontrola typů pro argument $pdo, musí být objekt typu PDO
declare(strict_types=1);

/**
 * Funkce pro získání dat o filmu z databáze na základě ID.
 *
 * @param PDO $pdo - PDO objekt připojení k databázi
 * @param int $film_id - ID filmu, pro který se mají získat data
 * @return array|false - Asociativní pole s daty o filmu nebo false, pokud film není nalezen
 */
function get_film_data_by_id(object $pdo, int $film_id) {
    // Příprava dotazu
    $query = "SELECT * FROM movies WHERE id = :film_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":film_id", $film_id, PDO::PARAM_INT);
    $stmt->execute();

    // Získání dat o filmu
    $filmData = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vrácení dat o filmu nebo false, pokud film nebyl nalezen
    return $filmData ? $filmData : false;
}

/**
 * Funkce pro odstranění filmu z databáze na základě jeho ID.
 *
 * @param PDO $pdo - PDO objekt připojení k databázi
 * @param int $filmId - ID filmu, který má být odstraněn
 */

function remove_film_from_database(PDO $pdo, int $film_id) {
    try {
        // Příprava a provedení dotazu pro odstranění filmu
        $stmt = $pdo->prepare("DELETE FROM movies WHERE id = :film_id");
        $stmt->bindParam(':film_id', $film_id, PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $e) {
        // Zpracování chyby v případě neúspěchu dotazu
        // Zde byste měli implementovat vhodné chování, například výpis nebo záznam chyby do logu
        die("Query Failed: " . $e->getMessage());
    }
}

?>
