
<?php

        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/index_model.inc.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

        $userUsername = $_SESSION['user_username'];

        $user = get_user_role($pdo, $userUsername);
        $_SESSION["role"] = $user;

        $films = get_Films($pdo);
        $_SESSION["films"] = $films;

?>

