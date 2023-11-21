<?php

// Kontrola, zda byl požadavek odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        // Načtení potřebných souborů a konfigurace
        require_once 'dbh.inc.php';
        require_once '../model/admin_model.inc.php';
        require_once '../view/admin_view.inc.php';
        require_once '../controller/admin_contr.inc.php';
        require_once 'config_session.inc.php';

        // Kontrola, zda byl odeslán identifikátor uživatele
        if (isset($_POST["user_id"])) {
            $userId = $_POST["user_id"];
            $username = $_SESSION["user_username"];

            // Získání stavu zákazu uživatele
            $ban_status = get_ban_status($pdo, $username);

            // Pokud bylo odesláno tlačítko pro ban, provede se zabanování uživatele
            if (isset($_POST["ban"])) {
                ban_user($pdo, $userId);
            }

            // Pokud bylo odesláno tlačítko pro odbanování, provede se odbanování uživatele
            if (isset($_POST["unban"])) {
                remove_ban_user($pdo, $userId);
            }

            // Získání informací o všech uživatelích a aktualizace session
            $users = get_users($pdo);
            $_SESSION["users"] = $users;

            // Přesměrování na administrační stránku
            header("Location: ../admin.php");
            exit();
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
