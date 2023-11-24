<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';


function echoUserProfileRows() {
    $userDataFromSession = $_SESSION['loaded_user_data'] ?? [];

    // HTML kód pro jednotlivé řádky zobrazení profilu
    echo '<div class="row">';

    // Řádek s informacemi o uživateli
    echo '<div class="col-sm-3"><p class="mb-0">Full Name</p></div>';
    echo '<div class="col-sm-9"><p class="text-muted mb-0">' . $userData['full_name'] . '</p></div>';
    echo '<hr>';

    echo '<div class="col-sm-3"><p class="mb-0">Email</p></div>';
    echo '<div class="col-sm-9"><p class="text-muted mb-0">' . $userData['email'] . '</p></div>';
    echo '<hr>';

    echo '<div class="col-sm-3"><p class="mb-0">Phone</p></div>';
    echo '<div class="col-sm-9"><p class="text-muted mb-0">' . $userData['phone'] . '</p></div>';
    echo '<hr>';

    echo '<div class="col-sm-3"><p class="mb-0">Mobile</p></div>';
    echo '<div class="col-sm-9"><p class="text-muted mb-0">' . $userData['mobile'] . '</p></div>';
    echo '<hr>';

    echo '<div class="col-sm-3"><p class="mb-0">Address</p></div>';
    echo '<div class="col-sm-9"><p class="text-muted mb-0">' . $userData['address'] . '</p></div>';
    echo '<hr>';

    // Konec řádku s informacemi
    echo '</div>';
    echo '</div>';
}

?>