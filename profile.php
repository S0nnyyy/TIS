<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/header.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/footer.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/view/profile_view.inc.php';

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
            <?php header_html();?>;
        </header>
  <div class="container py-5 ">
    <div class="row"></div>
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4 shadow">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
          </ol> 
        </nav>
      </div>
    </div>
    <?php display_user();?>
        <!--FOOTER-->
        <div>
          <?php footer_html();?>
        </div>
      </body>
</html>

