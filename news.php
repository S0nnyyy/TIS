<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/header.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/footer.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/view/news_view.inc.php';


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
    <link rel="stylesheet" href="css/faqs.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light bg-gradient">
    <header>
        <?php header_html(); ?>
    </header>
    <div class="mt-5"></div>

    <div class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">To nejaktuálnější ze světa filmu.</h1>
                <p class="lead my-3">Filmová freska s nejnovějšími trendy a zprávami z kinematografie. Nejaktuálnější svět filmu odhaluje své tajemství právě zde.</p>
            </div>
        </div>
        <div class="mt-5"></div>

        <main class="container">
            <?php display_news();?>
        </main>

        <!-- Scriptování a odkazy na knihovny -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
    <!-- Paticka -->
    <?php footer_html(); ?>
</body>

</html>
