<?php

declare(strict_types=1);

// Funkce kontrolující, zda jsou vstupní pole prázdná
function is_input_empty(string $username, string $password) {
    // Kontrola prázdnosti uživatelského jména, hesla a existence pole pro ochranu před boty
    if (empty($username) || empty($password) || !isset($_POST['botCheckInput'])) {
        return true; // Vrací true, pokud alespoň jedno pole je prázdné nebo neexistuje pole pro ochranu před boty
    } else {
        return false; // Vrací false, pokud všechna pole jsou vyplněná
    }
}

// Funkce kontrolující, zda je zadané uživatelské jméno nesprávné (nenalezené v databázi)
function is_username_wrong(bool|array $result) {
    // Kontrola, zda výsledek dotazu není prázdný (uživatel byl nalezen)
    if (!$result) {
        return true; // Vrací true, pokud uživatel není nalezen (uživatelské jméno je nesprávné)
    } else {
        return false; // Vrací false, pokud uživatel byl nalezen (uživatelské jméno je správné)
    }
}

// Funkce kontrolující, zda je zadané heslo nesprávné (neodpovídá uloženému hashi)
function is_password_wrong(string $password, string $hashedPassword) {
    // Kontrola pomocí funkce password_verify, zda zadané heslo odpovídá uloženému hashi
    if (!password_verify($password, $hashedPassword)) {
        return true; // Vrací true, pokud heslo není správné
    } else {
        return false; // Vrací false, pokud heslo je správné
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
