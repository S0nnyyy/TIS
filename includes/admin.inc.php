<?php

// Kontrola, zda byl požadavek zaslán pomocí metody POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        // Načtení potřebných souborů a konfigurace
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/admin_model.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/controller/admin_contr.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

        // Získání role uživatele podle uživatelského jména z session
        $user = get_user_role($pdo, $_SESSION['user_username']);

        // Kontrola, zda je uživatel administrátor
        if (is_user_admin($user)) {
            // Získání informací o všech uživatelích a uložení do session
            $users = get_users($pdo);
            $_SESSION["users"] = $users;

            $messages = get_messages($pdo);
            $_SESSION["messages"] = $messages;
            
            $movies = get_movies($pdo);
            $_SESSION["movies"] = $movies;
            // Přesměrování na administrační stránku
            header("Location: ../admin.php");
            exit();
        } else {
            // Pokud uživatel není administrátor, přesměrování na index
            header("Location: ../index.php");
            exit();
        }
    } catch (PDOException $e) {
        // V případě chyby v dotazu vypíše chybové hlášení
        die("Query Failed: " . $e->getMessage());
    }
} else {
    // Pokud nebyl požadavek metodou POST, přesměrování na index
    header('Location: index.php');
    die();
}
?>
