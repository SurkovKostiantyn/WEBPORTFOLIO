<?php
    $classList = scandir('classes', 0);
    for($i=0; $i < sizeof($classList); $i++){
        if (str_contains($classList[$i], '.php')){
            include_once 'classes/' . $classList[$i] . '';
        }
    }

    include_once 'templates/default/elements/head.php';
    include_once 'templates/default/elements/nav.php';

    if ($engine->getError()) { // вывод 404 страницы
        include_once 'templates/default/elements/404.php';
    } else
        include '' . $engine->getContentPage() . '';  // обработчик страниц

    include_once 'templates/default/elements/footer.php';
