<?php 

// Kontrola, zda byl formulář odeslán metodou POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Získání hodnot z formuláře
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try {
        // Načtení souborů pro databázi, model a kontrolér
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/signup_model.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/controller/signup_contr.inc.php';

        // ! OŠETŘENÍ CHYB

        $errors = [];

        // Kontrola prázdných vstupů
        if (is_input_empty($username, $password, $email)) {
            $errors["empty_input"] = "Vyplňte všechna pole!";
        }
        
        // Kontrola neplatného emailu
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Neplatný email!";
        }
        
        // Kontrola obsazeného uživatelského jména
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Uživatelské jméno je již použité!";
        }
        
        // Kontrola, zda je email již registrován
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email je již zaregistrován!";
        }

        // Načtení souboru pro práci se session
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

        // Pokud existují chyby, uložíme je do session a přesměrujeme na registraci
        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            
            $signupData = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;

            header('Location: ../register.php');
            die();
        }

        // Vytvoření uživatele a přesměrování na registraci s úspěšnou zprávou
        create_user($pdo, $username, $password, $email);
        header('Location: ../register.php?signup=success');
        header('Location: ../login.php');
        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $e) {
        // Výjimka pro případ chyby v dotazu
        die("Query Failed: " . $e->getMessage());
    }
} else {
    // Pokud formulář nebyl odeslán metodou POST, přesměrujeme na registraci
    header('Location: ../register.php');
    die();
}

?>
