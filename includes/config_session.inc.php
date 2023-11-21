<?php

// Nastavení některých bezpečnostních opatření pro session
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

// Nastavení parametrů cookie pro session
session_set_cookie_params([
    'lifetime' => 1800,        // Doba života session v sekundách (1800 sekund = 30 minut)
    'domain' => 'localhost',   // Doména, pro kterou je cookie platná
    'path' => '/',             // Cesta, pro kterou je cookie platná
    'secure' => true,          // Použití bezpečného spojení (HTTPS)
    'httponly' => true         // Cookie dostupné pouze přes HTTP (není přístupné JavaScriptem)
]);

// Spuštění session
session_start();

// Kontrola, zda uživatel je přihlášen (má nastaveno user_id v session)
if (isset($_SESSION["user_id"])) {
    // Kontrola, zda byla poslední obnova session provedena
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id_loggedin();  // Pokud ne, provede obnovu session ID
    } else {
        // Kontrola času od poslední obnovy, pokud uplynulo více než 30 minut, provede obnovu
        $interval = 60 * 30;  // Interval 30 minut v sekundách
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id_loggedin();
        }
    }
} else {
    // Pokud uživatel není přihlášen
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id();  // Pokud ne, provede obnovu session ID
    } else {
        // Kontrola času od poslední obnovy, pokud uplynulo více než 30 minut, provede obnovu
        $interval = 60 * 30;  // Interval 30 minut v sekundách
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id();
        }
    }
}

// Funkce pro obnovu session ID, pokud je uživatel přihlášen
function regenerate_session_id_loggedin() {
    session_regenerate_id(true);  // Obnova session ID s odstraněním starého ID
    $userId = $_SESSION["user_id"];
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $userId;
    session_id($sessionId);

    $_SESSION["last_regeneration"] = time();  // Aktualizace času poslední obnovy
}

// Funkce pro obnovu session ID, pokud uživatel není přihlášen
function regenerate_session_id() {
    session_regenerate_id(true);  // Obnova session ID s odstraněním starého ID
    $_SESSION["last_regeneration"] = time();  // Aktualizace času poslední obnovy
}

?>
