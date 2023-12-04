<?php

/**
 * Funkce pro vyhledávání filmů podle názvu v databázi.
 *
 * @param PDO $pdo Připojení k databázi.
 * @param string $query Hledaný název filmu.
 * @return array Výsledky vyhledávání ve formátu asociativního pole.
 */
function searchMoviesByTitle($pdo, $query) {
    try {
        // Příprava dotazu s placeholdery pro vyhledávání filmů podle názvu
        $stmt = $pdo->prepare('SELECT id, title FROM movies WHERE LOWER(title) LIKE :query');
        
        // Vložení hledaného názvu s přidanými percenty pro wildcard
        $stmt->bindValue(':query', '%' . strtolower($query) . '%', PDO::PARAM_STR);
        
        // Spuštění dotazu
        $stmt->execute();
        
        // Vrácení výsledků ve formátu asociativního pole
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Zpracování výjimky v případě chyby v dotazu
        echo 'Chyba při provádění dotazu: ' . $e->getMessage();
        exit();
    }
}

?>
