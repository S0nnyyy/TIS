<?php
// Funkce pro kontrolu, zda je uživatel administrátor
function check_admin() {
    // Kontrola, zda je uživatel administrátor
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
            // Uživatel je administrátor, pokračujeme
            return;
        } else {
            // Pokud uživatel není administrátor, přesměrování na index
            header("Location: index.php");
            exit();
        }
    } catch (PDOException $e) {
        // V případě chyby v dotazu vypíše chybové hlášení
        die("Query Failed: " . $e->getMessage());
    }
}

