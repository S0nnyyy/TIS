<?php
    // Spuštění session, odstranění dat z session a zničení session
    session_start();
    session_unset();
    session_destroy();

    // Přesměrování na přihlašovací stránku
    header("Location: ../login.php");
    die();
?>
