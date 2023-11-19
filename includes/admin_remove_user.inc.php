<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        require_once 'dbh.inc.php';
        require_once '../model/admin_model.inc.php';
        require_once '../view/admin_view.inc.php';
        require_once 'config_session.inc.php';

        if (isset($_POST["user_id"])) {
            $userId = $_POST["user_id"];
            remove_user_from_database($pdo, $userId);

            $users = get_users($pdo);
            $_SESSION["users"] = $users;

            header("Location: ../admin.php");
            displayUsersTable();
        }
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

} else {
    header('Location: admin.php');
    die();
}
?>
