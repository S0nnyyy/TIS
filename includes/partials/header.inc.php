<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';

// Function to generate the HTML for the header
function header_html(){
    $role = $_SESSION["role"];
    $roleValue = $role["role"];

    // Navbar section
    echo '<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">';
    echo '    <div class="container-fluid container"> ';
    echo '        <a class="navbar-brand" href="index.php"><img src="./img/logo/csfd.png" alt="logo" height="30">FD.cz</a>';
    echo '        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">';
    echo '            <span class="navbar-toggler-icon"></span>';
    echo '        </button>';

    // Navbar links
    echo '        <div class="collapse navbar-collapse" id="navbarText">';
    echo '            <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
    echo '                <li class="nav-item">';
    echo '                    <a class="nav-link active" aria-current="page" href="index.php">Filmy</a>';
    echo '                </li>';
    echo '                <li class="nav-item">';
    echo '                    <a class="nav-link" href="news.php">Novinky</a>';
    echo '                </li>';
    echo '                <li class="nav-item">';
    echo '                    <a class="nav-link" href="faqs.php">FAQs</a>';
    echo '                </li>';
    echo '                <li class="nav-item">';
    echo '                    <a class="nav-link" href="contact.php">Kontakt</a>';
    echo '                </li>';
    echo '            </ul>';

    // Dropdown for user actions
    echo '            <span class="navbar-text">';
    echo '                <div class="dropdown">';
    echo '                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">';
    echo '                        Jste přihlášen jako <strong>' . $_SESSION["user_username"] . '</strong>';
    echo '                    </button>';
    echo '                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">';
    // Check if the user has an admin role
    if ($roleValue === 'admin'){
        echo '<li><a class="dropdown-item" href="#">';
        echo '      <form action="includes/admin.inc.php" method="post">';
        echo '          <button class="btn btn-info" href="./">Admin Panel</button>';
        echo '      </form>';
        echo '</a>';
    }

    echo '                        </li>';
    echo '                        <li><a class="dropdown-item" href="#">';
    echo '                                <form action="includes/logout.inc.php" method="post">';
    echo '                                    <button class="btn btn-danger">Odhlasit se</button>';
    echo '                                </form>';
    echo '                            </a>';
    echo '                        </li>';
    echo '                    </ul>';
    echo '                </div>';
    echo '            </span>';
    echo '        </div>';
    echo '    </div>';
    echo '</nav>';
}

?>
