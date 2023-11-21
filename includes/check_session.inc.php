<?php
// Funkce pro kontrolu session
function check_session() {
    // Pokud není nastaveno 'user_id' v session, uživatel není přihlášen
    if (!isset($_SESSION['user_id'])) {
        // Přesměrování na přihlašovací stránku
        header("Location: login.php");
        // Ukončení provádění skriptu
        exit();
    }    
}
?>
