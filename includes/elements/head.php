<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" href="data:;base64,=">
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
<body>
<?php for ($i = 1; $i <= 10; $i++): ?>
    <div class="firefly"></div>
<?php endfor; ?>