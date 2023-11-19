<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        require_once 'dbh.inc.php';
        require_once '../model/admin_model.inc.php';
        require_once '../view/admin_view.inc.php';
        require_once '../controller/admin_contr.inc.php';
        require_once 'config_session.inc.php';

        if (isset($_POST["user_id"])) {
            $userId = $_POST["user_id"];
            $username = $_SESSION["user_username"];
            $ban_status = get_ban_status($pdo, $username);

            if (isset($_POST["ban"])) {
                ban_user($pdo, $userId);
            }

            if (isset($_POST["unban"])) {
                remove_ban_user($pdo, $userId);
            }

            $users = get_users($pdo);
            $_SESSION["users"] = $users;
            display_users_table();
            header("Location: ../admin.php");
            exit();
        }
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

} else {
    header('Location: admin.php');
    die();
}
?>
