<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['username']);

    if(session_destroy()) {
        echo "<script> window.location.replace('../index.php') </script>";
        exit("logout");
    }