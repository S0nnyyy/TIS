<?php

// Kontrola, zda byl formulář odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Získání hodnot z formuláře
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        
        // Načtení souborů pro databázi, model a kontrolér
        require_once 'dbh.inc.php';
        require_once '../model/login_model.inc.php';
        require_once '../controller/login_contr.inc.php';

        // ! OŠETŘENÍ CHYB

        $errors = [];

        // Kontrola prázdných vstupů
        if (is_input_empty($username, $password)) {
            $errors["empty_input"] = "Vyplňte všechna pole!";
        }

        // Získání informací o uživateli
        $result = get_user($pdo, $username);

        // Kontrola, zda je uživatelské jméno nesprávné
        if (is_username_wrong($result)){
            $errors["login_incorrect"] = "Nesprávné přihlašovací údaje!";
        }

        // Kontrola, zda je heslo nesprávné
        if (!is_username_wrong($result) && is_password_wrong($password, $result["password"])){
            $errors["login_incorrect"] = "Nesprávné přihlašovací údaje!";
        }

        // Získání stavu banu uživatele
        $ban_status = get_ban_status($pdo, $username);

        // Kontrola, zda je uživatel zabanován
        if (is_user_banned($ban_status)){
            $errors["login_incorrect"] = "Uživatel je zabanován!";
        }

        // Načtení souboru pro práci se session
        require_once 'config_session.inc.php';

        // Pokud existují chyby, uložíme je do session a přesměrujeme na přihlášení
        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            
            header('Location: ../login.php');
            die();
        }

        // Vytvoření nového ID pro session a přihlášení uživatele
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] =  htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        // Přesměrování na přihlašovací stránku s úspěšnou zprávou
        header("Location: ../login.php?login=success");
        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        // Výjimka pro případ chyby v dotazu
        die("Query Failed: " . $e->getMessage());
    }

} else {
    // Pokud formulář nebyl odeslán metodou POST, přesměrujeme na přihlašovací stránku
    header('Location: ../login.php');
    die();
}

?>
