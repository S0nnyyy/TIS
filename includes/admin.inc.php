<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/admin_model.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/controller/admin_contr.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $userUsername = $_SESSION['user_username'];
        $user = get_user_role($pdo, $userUsername);

        if (is_user_admin($user)) {
            $users = get_users($pdo);
            $_SESSION["users"] = $users;
            header("Location: ../admin.php");
            exit();
        } else {
            header("Location: ../index.php");
            exit();
        }
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header('Location: index.php');
    die();
}
?>
