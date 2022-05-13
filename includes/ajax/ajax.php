<?php


if(isset($_POST['id']) && isset($_POST['tickID']) && isset($_POST['status'])){

    //if(!isset($_SESSION['id']))

    $con = mysqli_connect(
        'auris.cityhost.com.ua',
        'chf040afbb',
        '3e92f52678',
        'chf040afbb_maindb'
    );

    switch ($_POST['status']){
        case 0:{
            $query    = "UPDATE `todo_list` SET `todo_item_" . $_POST['tickID'] . "` = CONCAT('&check; ' , `todo_item_" . $_POST['tickID'] . "`) WHERE `todo_list`.`todo_id` = '" . $_POST['id'] . "';";
            $result   = mysqli_query($con, $query);
            break;
        }
        case 1:{
            $query    = "UPDATE `todo_list` SET `todo_item_" . $_POST['tickID'] . "` = SUBSTR(`todo_item_" . $_POST['tickID'] . "`, 9 ) WHERE `todo_list`.`todo_id` = '" . $_POST['id'] . "';";
            $result   = mysqli_query($con, $query);
            break;
        }
    }
}