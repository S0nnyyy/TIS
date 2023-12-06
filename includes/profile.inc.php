<?php
// Load session configuration first
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';

check_session();

// Kontrola, zda byl požadavek odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        // Načtení potřebných souborů a konfigurace
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/profile_model.inc.php';

        // Get user_id from the session
        $user_id = $_SESSION["user_id"];

        // Load user data
        $get_user_data = get_user_data($pdo, $user_id);

        // Set user data in the session
        $_SESSION['user_data'] = $get_user_data;

        // Redirect to the profile page
        header('Location: ../profile.php');
        die();
    } catch (PDOException $e) {
        // V případě chyby v dotazu vypíše chybové hlášení
        die("Query Failed: " . $e->getMessage());
    }
} else {
    // Pokud nebyl požadavek metodou POST, přesměrování na index
    header('Location: ../index.php');
    die();
}
?>
