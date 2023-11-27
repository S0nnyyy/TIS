<?php

// Přísná kontrola typů pro argument $pdo, musí být objekt typu PDO
declare(strict_types=1);

function get_film_data_by_id(object $pdo, int $film_id) {

        // Příprava dotazu
        $query = "SELECT * FROM movies WHERE id = :film_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":film_id", $film_id);
        $stmt->execute();

        $filmData = $stmt->fetch(PDO::FETCH_ASSOC);

        return $filmData;
}


?>
