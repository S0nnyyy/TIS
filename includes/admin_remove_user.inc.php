<?php

// Kontrola, zda byl požadavek odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        // Načtení potřebných souborů a konfigurace
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/admin_model.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/controller/admin_contr.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

        // Kontrola, zda byl odeslán identifikátor uživatele
        if (isset($_POST["user_id"])) {
            $userId = $_POST["user_id"];
            
            // Odstranění uživatele z databáze
            remove_user_from_database($pdo, $userId);

            // Získání informací o všech uživatelích a uložení do session
            $users = get_users($pdo);
            $_SESSION["users"] = $users;

            // Přesměrování na administrační stránku a zobrazení tabulky uživatelů
            header("Location: ../admin.php");
            displayUsersTable();
        }
    } catch (PDOException $e) {
        // V případě chyby v dotazu vypíše chybové hlášení
        die("Query Failed: " . $e->getMessage());
    }

} else {
    // Pokud nebyl požadavek metodou POST, přesměrování na administrační stránku
    header('Location: admin.php');
    die();
}

?>
