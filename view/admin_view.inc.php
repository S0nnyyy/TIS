<?php

declare(strict_types=1);

/**
 * Zobrazí informace o serveru a PHP.
 *
 * @return void
 */

        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';


function display_server_info() {
    echo '<table class="table"><thead><tr><th scope="col">Informace</th><th scope="col">Hodnota</th></tr></thead><tbody>';
    echo '<tr><td>PHP verze</td><td>' . phpversion() . '</td></tr>';
    echo '<tr><td>Serverový software</td><td>' . $_SERVER['SERVER_SOFTWARE'] . '</td></tr>';
    echo '<tr><td>Adresa serveru</td><td>' . $_SERVER['SERVER_ADDR'] . '</td></tr>';
    echo '<tr><td>Název hostitele</td><td>' . $_SERVER['SERVER_NAME'] . '</td></tr>';
    echo '<tr><td>Adresa klienta</td><td>' . $_SERVER['REMOTE_ADDR'] . '</td></tr>';
    echo '<tr><td>Informace o serveru</td><td>' . php_uname() . '</td></tr>';
    echo '</tbody></table>';
}

/**
 * Zobrazí tabulku uživatelů.
 *
 * @param array $users Seznam uživatelů
 * @return void
 */
function display_users_table() {
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

    echo '<script>';
    echo 'function confirmDelete() {';
    echo '    return confirm("Opravdu chceš odstranit uživatele?");';
    echo '}';
    echo '</script>';

    echo '<script>';
    echo 'function confirmBan() {';
    echo '    return confirm("Opravdu chceš zabanovat/odbanovat uživatele?");';
    echo '}';
    echo '</script>';
}

function display_messages_table_from_session() {
        $messages = $_SESSION["messages"];


        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">ID</th>';
        echo '<th scope="col">Uživatel</th>';
        echo '<th scope="col">Předmět</th>';
        echo '<th scope="col">Zpráva</th>';
        echo '<th scope="col">Čas odeslání</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($messages as $message) {
            echo '<tr>';
            echo '<th scope="row">' . $message['id'] . '</th>';
            echo '<td>' . $message['username'] . '</td>';
            echo '<td>' . $message['subject'] . '</td>';
            echo '<td>' . $message['message'] . '</td>';
            echo '<td>' . $message['submission_time'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';

}

function display_movies_table_from_session() {
    if (isset($_SESSION['movies']) && is_array($_SESSION['movies'])) {
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">ID</th>';
        echo '<th scope="col">Název filmu</th>';
        echo '<th scope="col">Popis</th>';
        echo '<th scope="col">Hodnocení</th>';
        echo '<th scope="col">Žánr</th>';
        echo '<th scope="col">Režisér</th>';
        echo '<th scope="col">Datum vydání</th>';
        echo '<th scope="col">Délka</th>';
        echo '<th scope="col">Tagy</th>';
        echo '<th scope="col">Český název</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($_SESSION['movies'] as $movie) {
            echo '<tr>';
            echo '<th scope="row">' . $movie['id'] . '</th>';
            echo '<td>' . $movie['title'] . '</td>';
            echo '<td> Popis je příliš dlouhý, proto neni vypsán.</td>';
            echo '<td>' . $movie['rating'] . '</td>';
            echo '<td>' . $movie['genre'] . '</td>';
            echo '<td>' . $movie['director'] . '</td>';
            echo '<td>' . $movie['release_date'] . '</td>';
            echo '<td>' . $movie['duration'] . '</td>';
            echo '<td>' . $movie['tags'] . '</td>';
            echo '<td>' . $movie['czech_name'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>No movies available.</p>';
    }
}

?>
