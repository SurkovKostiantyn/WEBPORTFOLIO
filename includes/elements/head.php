<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <link rel="shortcut icon" href="/files/iconified/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/files/iconified/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/files/iconified/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/files/iconified/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/files/iconified/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/files/iconified/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/files/iconified/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/files/iconified/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/files/iconified/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/files/iconified/apple-touch-icon-180x180.png" />

    <meta name="description" content="Onix hometasks">
    <meta name="keywords" content="ONIX">
    <meta name="author" content="Surkov K">

    <?= $Engine->getTitle() ?>

    <?php
    $version = date('his');
    $theme = $Connect->getThemeName();
    echo '<link rel="stylesheet" href="/templates/'.$theme.'/css/default.css?ver=' . $version . '">';
    echo '<link rel="stylesheet" href="/templates/'.$theme.'/css/firefly.css?ver=' . $version . '">';
    ?>
    <script src="https://kit.fontawesome.com/a7c1eeb7ad.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body id="myBody">
<?php for ($i = 1; $i <= 10; $i++): ?>
    <div class="firefly"></div>
<?php endfor; ?>