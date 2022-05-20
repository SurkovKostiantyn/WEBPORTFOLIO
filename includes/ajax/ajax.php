<?php

if(isset($_POST['format'])){
    echo 'Hello world!<br>' . date($_POST['format']);
}

if(isset($_POST['num'])){
    $output = sprintf("(%s) %s %s %s",
        substr($_POST['num'], 0, 3),
        substr($_POST['num'], 3, 3),
        substr($_POST['num'], 6, 2),
        substr($_POST['num'], 8, 2));
    echo("The formatted phone number: $output.");
}

if(isset($_POST['string'])){
    $count = array_count_values(str_split($_POST['string']));
    $count_keys = array_keys($count);
    $count_values = array_values($count);

    $matches = '';

    for($i=0; $i < count($count_keys); $i++) {
        if($count_keys[$i] === ' ' || $count_keys[$i] === '')
            continue;
        if($count_values[$i] == 1)
            continue;
        $matches .= 'char '.$count_keys[$i].' : '.$count_values[$i].' times <br>';
    }
    if($matches)
        echo 'Matches:<br>'.$matches;
    else echo 'No matches found!';
}

if(isset($_POST['id']) && isset($_POST['tickID']) && isset($_POST['status'])){

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