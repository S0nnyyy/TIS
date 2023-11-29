<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';

    check_session();

    // Vyhledávací logika
    if (isset($_GET['query'])) {
        $query = strtolower($_GET['query']);

        function searchMoviesByTitle($pdo, $query) {
            try {
                $stmt = $pdo->prepare('SELECT id, title FROM movies WHERE LOWER(title) LIKE :query');
                $stmt->bindValue(':query', '%' . strtolower($query) . '%', PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo 'Chyba při provádění dotazu: ' . $e->getMessage();
                exit();
            }
        }

        // Zavolejte funkci searchMoviesByTitle a uložte její výsledek do $results
        $results = searchMoviesByTitle($pdo, $query);

        // Zobrazte výsledky
        if (!empty($results)) {
            echo "Výsledky hledání:\n";
            foreach ($results as $result) {
                // Vytvořte odkaz s ID filmu a názvem filmu
                echo '<a href="movie_detail.php?id=' . $result["id"] . '">' . $result["title"] . '</a><br>';
            }
        } else {
            echo "Žádné výsledky nenalezeny.\n";
        }
    }
?>
