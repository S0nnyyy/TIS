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
function get_film_data_by_id(PDO $pdo, int $film_id) {
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

?>
