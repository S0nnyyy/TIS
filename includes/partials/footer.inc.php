<?php

function footer_html() {
    echo '<footer class="py-5 bg-dark w-100 text-light" data-bs-theme="dark">';
    echo '    <div class="container">';
    echo '        <ul class="nav justify-content-center border-bottom pb-3 mb-3">';
    echo '            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Filmy</a></li>';
    echo '            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Novinky</a></li>';
    echo '            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Lidé</a></li>';
    echo '            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>';
    echo '            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">O nás</a></li>';
    echo '        </ul>';
    echo '        <p class="text-center text-body-secondary">© 2023 FD.cz</p>';
    echo '    </div>';
    echo '</footer>';
}

?>