<?php
// Kontrola, zda byl požadavek odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        // Načtení potřebných souborů a konfigurace
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/admin_model.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

        // Získání hodnot z formuláře pro přidání filmu
        $title = $_POST['title'];
        $description = $_POST['description'];
        $rating = $_POST['rating'];
        $genre = $_POST['genre'];
        $director = $_POST['director'];
        $release_date = $_POST['release_date'];
        $duration = null;
        $tags = $_POST['tags'];
        $image_url = $_POST['image_url'];

        // Volání funkce pro přidání filmu do databáze
        add_film_to_database($pdo, $title, $description, $rating, $genre, $director, $release_date, $duration, $tags, $image_url);

        $movies = get_movies($pdo);
        $_SESSION["movies"] = $movies;

        // Přesměrování zpět na stránku s tabulkou admin.php
        header('Location: ../admin.php');
        exit();

    } catch (PDOException $e) {
        // V případě chyby v dotazu vypíše chybové hlášení
        die("Query Failed: " . $e->getMessage());
    }

} else {
    // Pokud nebyl požadavek metodou POST, přesměrování na index
    header('Location: index.php');
    exit();
}
?>
