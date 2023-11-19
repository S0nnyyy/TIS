<?php

        function get_users(object $pdo) {
            $query = "SELECT * FROM users";
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

        function remove_user_from_database(object $pdo, $userId) {
            try {
                $query = "DELETE FROM users WHERE id = :userId";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Chyba: " . $e->getMessage();
            }
        }

        
        function get_ban_status(object $pdo, string $username) {
            $query = "SELECT is_banned FROM users WHERE username = :username;";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->execute();
        
            $result = $stmt->fetchColumn();
        
            return ($result === 'true');
        
        }

        function ban_user(object $pdo, $userId) {
                $query = "UPDATE users SET is_banned = true WHERE id = :userId";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
                $stmt->execute();
        }

        function remove_ban_user(object $pdo, $userId) {
                $query = "UPDATE users SET is_banned = false WHERE id = :userId";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
                $stmt->execute();
        }

        
?>

