<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    
    try {
        require_once 'dbh.inc.php';
        require_once '../model/admin_update_model.inc.php';
        require_once '../controller/admin_update_contr.inc.php';


        header('Location: ../admin_update.php');

       
        die();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

} else {
    header('Location: ../index.php');
    die();
}


?>

