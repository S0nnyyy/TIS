<?php
// Vložení souborů a konfigurace
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/header.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/footer.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/view/index_view.inc.php';

// Kontrola uživatelského sezení
check_session();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FD.cz</title>
    <link rel="icon" type="image/x-icon" href="./img/logo/csfd.png">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light bg-gradient">
    <header>
        <?php header_html(); ?>
    </header>
    <div class="container">
        <div class="mt-5"></div>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Hledáme posily do našeho teamu.</h1>
                <p class="lead my-3">Přidejte se k naší skvělé partě! Hledáme nadšené jedince, kteří budou sdílet své dovednosti a společně tvořit nezapomenutelné projekty. Staňte se součástí naší vášnivé a kreativní rodiny</p>
                <p class="lead mb-0"><a href="contact.php" class="text-white font-weight-bold">Kontaktuj nás</a></p>
            </div>
        </div>
        
        <!-- Prostor pod jumbotron -->
        <div class="mt-5"></div>

        <main class="container shadow rounded">
            <!-- Navigační panel -->
            <div class="navbar bg-body-tertiary w-100" data-bs-theme="dark">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <!-- Dropdown pro řazení -->
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Řadit podle
                            </a>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item btn btn-link sort-btn" data-sort-by="none">Bez řazení</button></li>
                                <li><button class="dropdown-item btn btn-link sort-btn" data-sort-by="name">Název</button></li>
                                <li><button class="dropdown-item btn btn-link sort-btn" data-sort-by="genre">Žánr</button></li>
                                <li><button class="dropdown-item btn btn-link sort-btn" data-sort-by="best-rating">Nejlepší hodnocení</button></li>
                                <li><button class="dropdown-item btn btn-link sort-btn" data-sort-by="worst-rating">Nejhorší hodnocení</button></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Formulář pro vyhledávání -->
                    <form class="d-flex" role="search" action="includes/search_results.inc.php" method="get">
                        <input class="form-control me-2" type="search" name="query" placeholder="Hledat Film, osobu..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Vyhledat</button>
                    </form>
                </div>
            </div>
            <!-- Zobrazení filmů -->
            <?php display_films(); ?>
        </main>

        <!-- FOOTER -->
        <?php footer_html(); ?>
    </div>
</body>
    <script>
        // Přidání skriptu pro přesměrování po kliknutí na tlačítko v dropdown menu
        document.addEventListener('DOMContentLoaded', function() {
            const sortButtons = document.querySelectorAll('.sort-btn');
            sortButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const sortBy = this.getAttribute('data-sort-by');
                    window.location.href = `index.php?sort_by=${sortBy}`;
                });
            });
        });
    </script>
</html>
