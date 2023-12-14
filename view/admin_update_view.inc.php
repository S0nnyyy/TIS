<?php

// Načtení souboru s konfigurací session
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

/**
 * Funkce pro zobrazení formuláře pro úpravu uživatele.
 */
function display_update() {

    // Načtení dat uživatele z session nebo prázdného pole, pokud data neexistují
    $loadedUserData = $_SESSION['loaded_user_data'] ?? [];

    // Základní HTML struktura pro formulář
    echo '<main class="container my-5">';
    echo '<h2>Uprava uživatele - ' . ($loadedUserData['username'] ?? '') . '</h2>';
    echo '<h7 class="m-3">ID: ' . ($loadedUserData['id'] ?? '') . '</h7>';
    echo '<form action="includes/admin_update_action.inc.php" method="post">';
    echo '<input type="hidden" name="user_id" value="' . ($loadedUserData['id'] ?? '') . '">';

    // Pole pro zadání uživatelského jména
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Uživatelské jméno</label>';
    echo '<input type="text" class="form-control" id="username" name="username" placeholder="Zadejte uživatelské jméno" value="' . ($loadedUserData['username'] ?? '') . '">';
    echo '</div>';

    // Pole pro zadání emailu
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Email</label>';
    echo '<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Zadejte email" value="' . ($loadedUserData['email'] ?? '') . '">';
    echo '</div>';

    // Rozbalovací menu pro výběr role
    echo '<div class="form-group m-3">';
    echo '<label class="form-label">Role</label>';
    echo '<select class="form-select" id="role" name="role">';
    echo '<option value="user" ' . (($loadedUserData['role'] ?? '') === 'user' ? 'selected' : '') . '>User</option>';
    echo '<option value="admin" ' . (($loadedUserData['role'] ?? '') === 'admin' ? 'selected' : '') . '>Admin</option>';
    echo '</select>';
    echo '</div>';

    // Tlačítko pro odeslání formuláře
    echo '<button type="submit" class="btn btn-primary m-3">Upravit</button>';

    // Odkaz na návrat zpět na administrační stránku
    echo '<a href="admin.php" class="btn btn-danger">Zpět</a>';

    // Uzavření formuláře a kontejneru
    echo '</form>';
    echo '</main>';
}

?>
