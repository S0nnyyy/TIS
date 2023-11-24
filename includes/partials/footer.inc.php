<?php

// Definice funkce pro generování HTML kódu patičky
function footer_html() {
    // Začátek patičky s třídami pro stylování a temným pozadím
    echo '<footer class="py-5 bg-dark w-100 text-light" data-bs-theme="dark">';
    
    // Kontejner pro obsah patičky
    echo '    <div class="container">';
    
    // Seznam navigačních odkazů zarovnaný uprostřed s oddělením spodní čarou
    echo '        <ul class="nav justify-content-center border-bottom pb-3 mb-3">';
    echo '            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Filmy</a></li>';
    echo '            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Novinky</a></li>';
    echo '            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Lidé</a></li>';
    echo '            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>';
    echo '            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">O nás</a></li>';
    echo '        </ul>';
    
    // Textový odstavec s copyright informací, zarovnaným uprostřed
    echo '        <p class="text-center text-body-secondary">© 2023 FD.cz</p>';
    
    // Konec kontejneru
    echo '    </div>';
    
    // Konec patičky
    echo '</footer>';
}

?>
