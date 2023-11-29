<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/header.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/footer.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/view/index_view.inc.php';

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
    <body>
        <header>
            <?php header_html();?>;
        </header>
        <main class="container">
            <div class="navbar bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Řadit podle
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Název</a></li>
                                <li><a class="dropdown-item" href="#">Žánr</a></li>
                                <li><a class="dropdown-item" href="#">Hodnocení</a></li>
                            </ul>
                        </div>
                    </div>
                    <form class="d-flex" role="search" action="includes/search_results.inc.php" method="get">
    <input class="form-control me-2" type="search" name="query" placeholder="Hledat Film, osobu..." aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Vyhledat</button>
</form>
                </div>
            </div>
            <?php  display_films();?>
        </main>

        <!--FOOTER-->
        <?php footer_html();?>
    </body>
</html>

