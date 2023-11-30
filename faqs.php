<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/header.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/footer.inc.php';

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
    <main class="container">
        <!-- Breadcrumb navigace -->
        <body>
            <div class="container py-5 ">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4 shadow rounded">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Obsah FAQ -->
                <div class="faq_area section_padding_130" id="faq">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-8 col-lg-6">
                                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <h3><span>Často </span>Kladené otázky</h3>
                                    <p>Appland je úplně kreativní, lehká, čistá a super responzivní aplikace na přistávací stránce.</p>
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center ">
                            <div class="col-12 col-sm-10 col-lg-8">
                                <div class="accordion faq-accordian" id="faqAccordion">
                                    <!-- Otázka 1 -->
                                    <div class="card border-0 wow fadeInUp shadow rounded" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingOne">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Jak funguje naše aplikace?<span class="lni-chevron-up"></span></h6>
                                        </div>
                                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                <p>Naše jednoduchá a intuitivní aplikace vám umožňuje snadno vyhledávat filmy podle různých kritérií, jako jsou název, režisér, herec nebo žánr. Po rychlé registraci můžete vyjadřovat své dojmy a názory na filmy, hodnotit je a sdílet své oblíbené kousky s ostatními uživateli.</p>
                                                <p>Sledujte aktuality a novinky, abyste nezmeškali žádný filmový hit. Prohlížejte si uživatelské profily, sledujte aktivity a diskutujte o filmech na našem přátelském fóru. Možnost přizpůsobit nastavení podle svých preferencí vám zajistí personalizované filmové doporučení, které vám pomohou objevovat nové perly filmového světa.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Otázka 2 -->
                                    <div class="card border-0 wow fadeInUp shadow rounded" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingTwo">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Kolik stojí předplatné?<span class="lni-chevron-up"></span></h6>
                                        </div>
                                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                <p>Využijte jedinečnou příležitost a získejte exkluzivní přístup k naší rozsáhlé filmové knihovně pomocí předplatného! Aktuálně nabízíme možnost získat přístup k naší plné škále funkcí zcela zdarma. S předplatným získáte neomezený přístup k nejnovějším filmům, oblíbeným klasikám a exkluzivnímu obsahu.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Otázka 3 -->
                                    <div class="card border-0 wow fadeInUp shadow rounded" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingThree">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Jak mohu přidat nový film do databáze?<span class="lni-chevron-up"></span></h6>
                                        </div>
                                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                <p>Přidání nového filmu do naší databáze je snadné a rychlé. Po přihlášení do svého účtu přejděte na sekci "Přidat film". Zadejte název filmu, režiséra, rok vydání a další relevantní informace. Můžete také nahrát obrázek a přidat popis filmu. Poté stiskněte tlačítko "Odeslat" a váš film bude přidán do naší rozsáhlé filmové sbírky. Uživatelé pak mohou přidávat hodnocení a recenze. Tímto způsobem společně vytváříme komunitní filmovou databázi plnou skvělých titulů a uživatelských zkušeností.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Scriptování a odkazy na knihovny -->
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
            </body>
        </main>
        <!-- Paticka -->
        <?php footer_html(); ?>
    </body>

    </html>
