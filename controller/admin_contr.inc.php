<?php

declare(strict_types=1);

function is_user_admin($user) {
    if ($user && $user['role'] == 'admin') {
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