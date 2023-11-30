<?php

// Přísná kontrola typů pro celý soubor
declare(strict_types=1);

/**
 * Funkce pro kontrolu a zobrazení chyb přihlášení.
 *
 * @return void
 */
function contact_form_state() {
    // Kontrola, zda byl formulář úspěšně odeslán
    if (isset($_SESSION['form_submission_success']) && $_SESSION['form_submission_success']) {
        // Zobrazení úspěšného odeslání formuláře
        echo '<div class="alert alert-success" role="success">' . "Formulář byl úspěšně odeslán." . '</div>';
        
        // Můžete také smazat tuto hodnotu ze session, pokud již není potřeba.
        unset($_SESSION['form_submission_success']);
    } else {
        // Zobrazení stavu, kdy formulář nebyl odeslán
        echo '<div class="alert alert-secondary" role="secondary">' . "Zatím formulář nebyl odeslán" . '</div>';
    }
}

?>
