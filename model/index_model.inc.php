<?php

declare(strict_types=1);

    function get_Films(object $pdo) {
        $query = "SELECT * FROM movies";
        $stmt = $pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function get_user_role($pdo, $userUsername) {
        $query = "SELECT role FROM users WHERE username = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $userUsername, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user;
    }
?>