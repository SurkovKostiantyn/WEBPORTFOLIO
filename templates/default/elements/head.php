<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php global $engine; ?>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" href="http://surkov-php.roadtoglory.ru/images/ks.ico" />
    <meta name="description" content="Onix hometasks">
    <meta name="keywords" content="ONIX">
    <meta name="author" content="Surkov K">
    <?php echo '<title>' . $engine->getTitle() . '</title>';?>
    <?php
        $version = date('his');
        echo '<link rel="stylesheet" href="templates/default/css/default.css?ver=' . $version . '">';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a7c1eeb7ad.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'templates/default/elements/header.php';?>
    <?php include 'templates/default/elements/nav.php';?>