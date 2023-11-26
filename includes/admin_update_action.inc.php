<?php
// Kontrola, zda byl požadavek odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        // Načtení potřebných souborů a konfigurace
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/admin_update_model.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/controller/admin_update_contr.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

        // Získání hodnot z formuláře
        $username = $_POST['username'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $userId = $_POST['user_id'];

        // Volání funkce pro aktualizaci uživatelských dat v databázi
        update_user_data($pdo, $userId, $username, $email, $role);

        $users = get_users($pdo);
        $_SESSION["users"] = $users;

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
