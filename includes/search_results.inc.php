<?php

// Importujte soubory s funkcemi a konfiguracemi
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/dbh.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/model/search_model.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';

// Kontrola uživatelské relace
check_session();

// Vyhledávací logika
if (isset($_GET['query'])) {
    // Získání hledaného dotazu a převedení na malá písmena
    $query = strtolower($_GET['query']);
 
    // Volání funkce pro vyhledávání filmů podle názvu
    $results = searchMoviesByTitle($pdo, $query);
    
    // Uložení výsledků do relace pro zobrazení na stránce search.php
    $_SESSION["search"] = $results;
    
    // Přesměrování na stránku pro zobrazení výsledků vyhledávání
    header("Location: ../search.php");
}

?>
