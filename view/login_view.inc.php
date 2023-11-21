<?php

// Přísná kontrola typů pro celý soubor
declare(strict_types=1);

/**
 * Funkce pro kontrolu a zobrazení chyb přihlášení.
 *
 * @return void
 */
function check_login_errors() {
    // Kontrola existence chyb v $_SESSION
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        // Výpis chyb v alert boxech
        foreach ($errors as $error) {
            echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
        }

        // Vyčištění chyb z $_SESSION po zobrazení
        unset($_SESSION["errors_login"]);
    } 
    // Kontrola úspěšného přihlášení prostřednictvím URL parametru
    else if (isset($_GET['login']) && $_GET['login'] === "success") {
        echo '<div class="alert alert-success" role="alert">Přihlášení proběhlo úspěšně!</div>';
        // Přesměrování na index.php po úspěšném přihlášení
        header('Location: index.php');
    }
}

?>
