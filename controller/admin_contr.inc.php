<?php

declare(strict_types=1);

// Funkce kontrolující, zda je uživatel administrátor
function is_user_admin($user) {
    // Kontrola existence uživatele a jeho role
    if ($user && $user['role'] == 'admin') {
        return true; // Vrací true, pokud je uživatel administrátor
    } else {
        return false; // Vrací false, pokud uživatel není administrátor nebo není nalezen
    }
}

// Funkce kontrolující, zda je uživatel zabanován
function is_user_banned($banned) {
    // Kontrola hodnoty $banned, která označuje, zda je uživatel zabanován
    if ($banned) {
        return true; // Vrací true, pokud je uživatel zabanován
    } else {
        return false; // Vrací false, pokud uživatel není zabanován
    }
}

?>
