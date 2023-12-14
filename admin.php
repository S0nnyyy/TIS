<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_admin.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/header.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/footer.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/view/admin_view.inc.php';


check_session();
check_admin();

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
            <?php header_html();?>
        </header>
        <main class="container">   
            <div class="container py-5 ">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4 shadow rounded">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Obsah FAQ -->
                <div class="faq_area section_padding_130" id="faq">
                        <div class="row justify-content-center ">
                            <div class="col-12 col-sm-15 col-lg-15">
                                <div class="accordion faq-accordian" id="faqAccordion">
                                    <!-- Otázka 1 -->
                                    <div class="card border-0 wow fadeInUp shadow rounded" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingOne">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Informace o serveru a PHP<span class="lni-chevron-up"></span></h6>
                                        </div>
                                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                <?php display_server_info();?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Otázka 2 -->
                                    <div class="card border-0 wow fadeInUp shadow rounded" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingTwo">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Uživatelé<span class="lni-chevron-up"></span></h6>
                                        </div>
                                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                <?php display_users_table();?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="card border-0 wow fadeInUp shadow rounded" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingThree">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Filmy<span class="lni-chevron-up"></span></h6>
                                        </div>
                                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                <?php display_movies_table_from_session();?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Otázka 4 -->
                                    <div class="card border-0 wow fadeInUp shadow rounded" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingFour">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Zprávy od uživatelů<span class="lni-chevron-up"></span></h6>
                                        </div>
                                        <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                <?php display_messages_table_from_session();?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <!--FOOTER-->
        <?php footer_html();?>
    </body>
                    <!-- Scriptování a odkazy na knihovny -->
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
