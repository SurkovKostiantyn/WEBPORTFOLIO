<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    include_once 'includes/autoload.php';   // загрузка классов

    include_once 'includes/classes/zapravka/Zapravka.php';

    include_once 'includes/elements/head.php';
    include_once 'includes/elements/header.php';
    include_once 'includes/elements/nav.php';

    if (isset($Engine)) {
        if ($Engine->getError()) include_once 'includes/index/error.php'; else
            include $Engine->getContentPage();
    }  else echo 'Error: Engine isn\'t set';

    include_once 'includes/elements/footer.php';