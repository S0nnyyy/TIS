<?php

declare(strict_types=1);

// Funkce kontrolující, zda jsou vstupní pole prázdná
function is_input_empty(string $username, string $password, string $email) {
    // Kontrola prázdnosti uživatelského jména, hesla, emailu a existence polí pro ochranu před boty
    if (empty($username) || empty($password) || empty($email) || !isset($_POST['botCheckInput'])) {
        return true; // Vrací true, pokud alespoň jedno pole je prázdné nebo neexistuje pole pro ochranu před boty
    } else {
        return false; // Vrací false, pokud všechna pole jsou vyplněná
    }
}

// Funkce kontrolující, zda je zadaný email neplatný
function is_email_invalid(string $email) {
    // Kontrola pomocí funkce filter_var s parametrem FILTER_VALIDATE_EMAIL
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true; // Vrací true, pokud je email neplatný
    } else {
        return false; // Vrací false, pokud je email platný
    }
}

// Funkce kontrolující, zda je zadané uživatelské jméno již obsazeno v databázi
function is_username_taken(object $pdo, string $username) {
    // Kontrola existence uživatelského jména v databázi pomocí funkce get_username
    if (get_username($pdo, $username)) {
        return true; // Vrací true, pokud je uživatelské jméno obsazeno
    } else {
        return false; // Vrací false, pokud uživatelské jméno není obsazeno
    }
}

// Funkce kontrolující, zda je zadaný email již registrován v databázi
function is_email_registered(object $pdo, string $email) {
    // Kontrola existence emailu v databázi pomocí funkce get_email
    if (get_email($pdo, $email)) {
        return true; // Vrací true, pokud je email registrován
    } else {
        return false; // Vrací false, pokud email není registrován
    }
}

// Funkce pro vytvoření uživatele v databázi
function create_user(object $pdo, string $username, string $password, string $email) {
    // Volání funkce set_user s potřebnými parametry pro vytvoření uživatele
    set_user($pdo, $username, $password, $email);
}

?>
