<?php

// Přísná kontrola typů pro celý soubor
declare(strict_types=1);

/**
 * Funkce pro zobrazení tabulky s informacemi o serveru a PHP, a seznamu uživatelů.
 *
 * @return void
 */
function display_users_table() {
    // Zobrazení informací o serveru a PHP
    echo '<h1>Informace o serveru a PHP</h1>';
    echo '<table class="table"><thead><tr><th scope="col">Informace</th><th scope="col">Hodnota</th></tr></thead><tbody>';
    echo '<tr><td>PHP verze</td><td>' . phpversion() . '</td></tr>';
    echo '<tr><td>Serverový software</td><td>' . $_SERVER['SERVER_SOFTWARE'] . '</td></tr>';
    echo '<tr><td>Adresa serveru</td><td>' . $_SERVER['SERVER_ADDR'] . '</td></tr>';
    echo '<tr><td>Název hostitele</td><td>' . $_SERVER['SERVER_NAME'] . '</td></tr>';
    echo '<tr><td>Adresa klienta</td><td>' . $_SERVER['REMOTE_ADDR'] . '</td></tr>';
    echo '<tr><td>Informace o serveru</td><td>' . php_uname() . '</td></tr>';
    echo '<tr><td>Verze PHP</td><td>' . phpversion() . '</td></tr>';
    echo '<tr><td>Operační systém</td><td>' . PHP_OS . '</td></tr>';
    echo '<tr><td>Architektura</td><td>' . php_uname('m') . '</td></tr>';
    echo '</tbody></table>';

    // Zobrazení seznamu uživatelů
    echo '<h1>Uživatelé</h1>';
    $users = $_SESSION["users"];
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">ID</th>';
    echo '<th scope="col">Username</th>';
    echo '<th scope="col">Email</th>';
    echo '<th scope="col">Role</th>';
    echo '<th scope="col">Registration date</th>';
    echo '<th scope="col">Is Banned</th>';
    echo '<th scope="col">Actions</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($users as $index => $user) {
        echo '<tr>';
        echo '<th scope="row">' . $user['id'] . '</th>';
        echo '<td>' . $user['username'] . '</td>';
        echo '<td>' . $user['email'] . '</td>';
        echo '<td>' . $user['role'] . '</td>';
        echo '<td>' . $user['created_at'] . '</td>';
        echo '<td>' . ($user['is_banned'] ? 'Ano' : 'Ne') . '</td>';
        echo '<td class="d-flex">';
        echo '<form action="includes/admin_update_user.inc.php" method="post" class="m-1">';
        echo '<input type="hidden" name="user_id" value="' . $user['id'] . '">';
        echo '<button type="submit" class="btn btn-success">Upravit</button>';
        echo '</form>';
        echo '<form action="includes/admin_remove_user.inc.php" method="post" class="m-1" onsubmit="return confirmDelete();">';
        echo '<input type="hidden" name="user_id" value="' . $user['id'] . '">';
        echo '<button type="submit" class="btn btn-danger">Odstranit</button>';
        echo '</form>';
        echo '<form action="includes/admin_ban_user.inc.php" method="post" class="m-1" onsubmit="return confirmBan();">';
        echo '<input type="hidden" name="user_id" value="' . $user['id'] . '">';
        
        if ($user['is_banned']) {
            echo '<button type="submit" name="unban" class="btn btn-warning">Odbanovat</button>';
        } else {
            echo '<button type="submit" name="ban" class="btn btn-warning">Zabanovat</button>';
        }
        
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

    // Definice JavaScript funkce mimo blok skriptu
    echo '<script>';
    echo 'function confirmDelete() {';
    echo '    return confirm("Opravdu chceš odstranit uživatele?");';
    echo '}';
    echo '</script>';

    echo '<script>';
    echo 'function confirmBan() {';
    echo '    return confirm("Opravdu chceš zabanovat uživatele?");';
    echo '}';
    echo '</script>';
}
?>
