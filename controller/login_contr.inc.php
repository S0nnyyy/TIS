<?php

declare(strict_types=1);

function is_input_empty(string $username, string $password) {
    if (empty($username) || empty($password) || !isset($_POST['botCheckInput'])) {
        return true;
    } else {
        return false;
    }
}

function is_username_wrong(bool|array $result) {
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $password, string $hashedPassword) {
    if (!password_verify($password, $hashedPassword)) {
        return true;
    } else {
        return false;
    }
}

function is_user_banned($banned) {
    if ($banned) {
        return true;
    } else {
        return false;
    }
}





?>