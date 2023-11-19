<?php

declare(strict_types=1);

function signup_inputs(){
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"]) ) {
        echo'<div class="mb-4">
            <label for="username" class="form-label">Uživatelské jméno</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Uživatelské jméno" value="'. $_SESSION["signup_data"]["username"] .'">
            </div>';
    } else {
        echo'<div class="mb-4">
            <label for="username" class="form-label">Uživatelské jméno</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Uživatelské jméno">
            </div>';
    }

    echo '<div class="mb-4">
        <label for="password" class="form-label">Heslo</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Heslo">
        </div>';


        if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
            echo'<div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="'. $_SESSION["signup_data"]["email"] .'">
                </div>';
        } else {
            echo'<div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>';
        }


}

function check_signup_errors() {
    if (isset($_SESSION['errors_signup'])) {

        $errors = $_SESSION['errors_signup'];
        
        foreach ($errors as $error) {
            echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<div class="alert alert-success" role="alert">Registrace proběhla úspěšně!</div>';
    }
}


?>