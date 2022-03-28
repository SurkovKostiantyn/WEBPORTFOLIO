<?php
    include_once 'includes/DB.php';
    include_once 'includes/autoload.php';
    include_once 'templates/default/elements/head.php';
    include_once 'templates/default/elements/nav.php';

if (isset($Engine)) {
    if ($Engine->getError()) include_once 'templates/default/elements/404.php'; else
        include $Engine->getContentPage();
}  else echo 'Error';

    include_once 'templates/default/elements/footer.php';
