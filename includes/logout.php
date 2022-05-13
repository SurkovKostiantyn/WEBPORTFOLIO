<?php
session_start();
if(session_destroy()) {
    header("Location: https://webportfolio.com.ua/index.php");
    exit("logout");
}