<?php
// Vložení souborů a konfigurace
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/header.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/footer.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/view/contact_view.inc.php';

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
    <main class="container">
            <div class="container py-5">
                <div class="row">
                    <div class="col">
                        <!-- Navigační breadcrumb -->
                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4 shadow rounded">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="container my-5 vh-50" id="contact">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <h1 class="mb-3">Kontaktuj nás</h1>
                            <?php contact_form_state()?>
                            <!-- Formulář pro kontakt -->
                            <form action="includes_contact.inc.php" method="post" onsubmit="return validateForm()">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="your-email" class="form-label">Uživatelské jméno</label>
                                        <!-- Uživatelské jméno zůstává nezměněno -->
                                        <input type="text" class="form-control" id="your-username" name="your-username" value="<?php echo $_SESSION["user_username"]; ?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="your-subject" class="form-label">Důvod kontaktu</label>
                                        <!-- Dropdown pro výběr důvodu kontaktu -->
                                        <select class="form-select" id="your-subject" name="your-subject" required>
                                            <option disabled selected>Vyberte důvod kontaktu</option>
                                            <option value="Technický problém">Technický problém</option>
                                            <option value="Dotaz na obsah">Dotaz na obsah</option>
                                            <option value="Návrhy a připomínky">Návrhy a připomínky</option>
                                            <option value="Reklamace">Reklamace</option>
                                            <option value="polupráce">Spolupráce</option>
                                            <option value="Ostatní">Ostatní</option>
                                            <option value="Hlášení nevhodného obsahu">Hlášení nevhodného obsahu</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="your-message" class="form-label">Zpráva</label>
                                        <!-- Placeholder pro zprávu -->
                                        <textarea class="form-control" id="your-message" name="your-message" rows="5" placeholder="Napište svou zprávu" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Tlačítko pro odeslání formuláře -->
                                                <button type="submit" class="btn btn-dark w-100 fw-bold">Odeslat</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr class="my-5">
            </div>
    </main>
    <!-- Footer -->
    <?php footer_html(); ?>
    <!-- JavaScript kód pro validaci formuláře -->
    <script>
        function validateForm() {
            var selectedOption = document.getElementById("your-subject").value;

            if (selectedOption === "Vyberte důvod kontaktu") {
                alert("Prosím, vyberte důvod kontaktu.");
                return false; // Zabraňte odeslání formuláře
            }

            return true; // Povolte odeslání formuláře, pokud je vše v pořádku
        }
    </script>
</body>

</html>

