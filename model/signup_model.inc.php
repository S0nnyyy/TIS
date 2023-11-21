<?php

// Přísná kontrola typů pro argument $pdo, musí být objekt typu PDO
declare(strict_types=1);

/**
 * Funkce pro získání uživatelského jména z databáze na základě zadaného jména.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param string $username - Uživatelské jméno, které se má vyhledat v databázi
 * @return array|false - Asociativní pole s výsledkem nebo false, pokud uživatel není nalezen
 */
function get_username(object $pdo, string $username) {
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

/**
 * Funkce pro získání e-mailu z databáze na základě zadaného e-mailu.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param string $email - E-mail, který se má vyhledat v databázi
 * @return array|false - Asociativní pole s výsledkem nebo false, pokud e-mail není nalezen
 */
function get_email(object $pdo, string $email) {
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

/**
 * Funkce pro vytvoření nového uživatele v databázi.
 *
 * @param object $pdo - PDO objekt připojení k databázi
 * @param string $username - Uživatelské jméno nového uživatele
 * @param string $password - Heslo nového uživatele
 * @param string $email - E-mail nového uživatele
 * @return void
 */
function set_user(object $pdo, string $username, string $password, string $email) {
    $query = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email);";
    $stmt = $pdo->prepare($query);

    // Nastavení možností pro hashování hesla
    $options = [
        'cost' => 12
    ];

    // Hashování hesla
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    // Parametrizovaná vazba hodnot na přípravený dotaz
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $hashedPassword);
    $stmt->bindParam(":email", $email);

    // Provedení dotazu
    $stmt->execute();
}

?>
