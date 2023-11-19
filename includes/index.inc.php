<?php 

        require_once 'dbh.inc.php';
        require_once 'model/index_model.inc.php';
        require_once 'config_session.inc.php';
        $userUsername = $_SESSION['user_username'];

        $user = get_user_role($pdo, $userUsername);
        $_SESSION["role"] = $user;

        $films = get_Films($pdo);
        $_SESSION["films"] = $films;
?>