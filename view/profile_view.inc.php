<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

function display_user() {
    $userData = $_SESSION['user_data'];

    // Začátek sekce s profilem uživatele
    echo '<section class="container py-5">';
    echo '<div class="row d-flex align-items-stretch">'; // Přidáno d-flex a align-items-stretch

    echo '<div class="col-lg-4">';
    // Informace o uživatelském profilu
    echo '<div class="card mb-4">';
    echo '<div class="card-body text-center">';
    echo '<img src="./img/profile/default_avatar.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">';
    echo '<h5 class="my-3">' . $userData['username'] . '</h5>';
    echo '<div class="d-flex justify-content-center mb-2">';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    echo '</div>';

    echo '<div class="col-lg-8">';
    // Detaily o uživateli
    echo '<div class="card mb-4">';
    echo '<div class="card-body">';
    echo '<div class="row">';
    echo '<div class="col-sm-3">';
    echo '<p class="mb-0">Uživatelské jméno</p>';
    echo '</div>';
    echo '<div class="col-sm-9">';
    echo '<p class="text-muted mb-0">' . $userData['username'] . '</p>';
    echo '</div>';
    echo '</div>';
    echo '<hr>';

    echo '<div class="row">';
    echo '<div class="col-sm-3">';
    echo '<p class="mb-0">Email</p>';
    echo '</div>';
    echo '<div class="col-sm-9">';
    echo '<p class="text-muted mb-0">' . $userData['email'] . '</p>';
    echo '</div>';
    echo '</div>';
    echo '<hr>';

    echo '<div class="row">';
    echo '<div class="col-sm-3">';
    echo '<p class="mb-0">Role</p>';
    echo '</div>';
    echo '<div class="col-sm-9">';
    echo '<p class="text-muted mb-0">' . $userData['role'] . '</p>';
    echo '</div>';
    echo '</div>';
    echo '<hr>';

    echo '<div class="row">';
    echo '<div class="col-sm-3">';
    echo '<p class="mb-0">Datum vytvoření účtu</p>';
    echo '</div>';
    echo '<div class="col-sm-9">';
    echo '<p class="text-muted mb-0">' . $userData['created_at'] . '</p>';
    echo '</div>';
    echo '</div>';
    echo '<hr>';
    
    // Přidejte podobné položky pro další informace o uživateli
    echo '</div>';
    echo '</div>';

    // Status projektu
    echo '<div class="row">';
    // Přidejte kód pro status projektu zde
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
}
?>
