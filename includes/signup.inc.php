<?php 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once 'dbh.inc.php';
        require_once '../model/signup_model.inc.php';
        require_once '../controller/signup_contr.inc.php';

        // ! ERROR HANDLERS

        $errors = [];

        if (is_input_empty($username, $password, $email)) {
            $errors["empty_input"] = "Vyplňte všechna pole!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Neplatný email!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Uživatelské jméno je již použité!";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email je již zaregistrován!";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            
            $signupData = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;

            header('Location: ../register.php');
            die();
        }

        create_user($pdo, $username, $password, $email);
        header('Location: ../register.php?signup=success');
        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header('Location: ../register.php');
    die();
}



?>