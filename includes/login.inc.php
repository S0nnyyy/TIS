<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    //$notRobot = $_POST["botCheckInput"];


    try {
        require_once 'dbh.inc.php';
        require_once '../model/login_model.inc.php';
        require_once '../controller/login_contr.inc.php';

        // ! ERROR HANDLERS

        $errors = [];

        if (is_input_empty($username, $password)) {
            $errors["empty_input"] = "Vyplňte všechna pole!";
        }

        $result = get_user($pdo, $username);

        if (is_username_wrong($result)){
            $errors["login_incorrect"] = "Nesprávné přihlašovací údaje!";
        }

        if (!is_username_wrong($result) && is_password_wrong($password, $result["password"])){
            $errors["login_incorrect"] = "Nesprávné přihlašovací údaje!";
        }

        $ban_status = get_ban_status($pdo, $username);

        if (is_user_banned($ban_status)){
            $errors["login_incorrect"] = "Uživatel je zabanován!";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            
            header('Location: ../login.php');
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] =  htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../login.php?login=success");
        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

} else {
    header('Location: ../login.php');
    die();
}


?>

