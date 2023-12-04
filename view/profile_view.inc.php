<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';


function display_user() {
    $userData = $_SESSION['user_data'];

    // HTML kód pro jednotlivé řádky zobrazení profilu
    echo '<div class="row">';

    // Řádek s informacemi o uživateli
    echo '<div class="col-sm-3"><p class="mb-0">Full Name</p></div>';
    echo '<div class="col-sm-9"><p class="text-muted mb-0">' . $userData['username'] . '</p></div>';
    echo '<hr>';

    echo '<div class="col-sm-3"><p class="mb-0">Email</p></div>';
    echo '<div class="col-sm-9"><p class="text-muted mb-0">' . $userData['email'] . '</p></div>';
    echo '<hr>';

    echo '<div class="col-sm-3"><p class="mb-0">Address</p></div>';
    echo '<div class="col-sm-9"><p class="text-muted mb-0">' . $userData['role'] . '</p></div>';
    echo '<hr>';

    // Konec řádku s informacemi
    echo '</div>';
    echo '</div>';
}

?>