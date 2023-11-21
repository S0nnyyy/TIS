<?php

// Kontrola, zda byl požadavek odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        // Načtení potřebných souborů a konfigurace
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/admin_update_model.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/controller/admin_update_contr.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

        // Přesměrování na stránku pro aktualizaci administrátorských informací
        if (isset($_POST['user_id'])) {
            $userId = $_POST['user_id'];
            
            $loadedUserData = get_user_data($pdo, $userId);
        
            $_SESSION['loaded_user_data'] = $loadedUserData;
        }
        
        header('Location: ../admin_update.php');
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
