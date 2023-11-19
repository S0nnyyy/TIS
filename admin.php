<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/check_session.inc.php';
require_once 'includes/partials/header.inc.php';
require_once 'includes/partials/footer.inc.php';
require_once 'view/admin_view.inc.php';

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
    <script>
</script>
</head>
    <body>
        <header>
            <?php header_html();?>;
        </header>
        <main class="container vh-100">     
            <?php display_users_table();?>
        </main>
        <!--FOOTER-->
        <?php footer_html();?>
    </body>
</html>

