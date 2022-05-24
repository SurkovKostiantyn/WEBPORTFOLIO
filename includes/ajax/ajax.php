<?php

if(isset($_POST['format'])){
    echo 'Hello world!<br>' . date($_POST['format']);
}

if(isset($_POST['timezone'])){
    $current_time_seconds = time();
    $date = new DateTime();
    $date->setTimestamp($current_time_seconds);
    $date->setTimezone(new DateTimeZone(''.$_POST['timezone']));
    echo "Current time: " . $date->format('Y-m-d H:i:s') . "\n";
    $date->modify('today midnight');
    $seconds_since_midnight = $current_time_seconds - $date->getTimestamp();
    echo "Seconds since midnight: ".$seconds_since_midnight;
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

    $start = $_POST['string'];

    print_r("Start string: ".$start."\nMatches:\n");

    foreach (mb_count_chars($start, 1) as $i => $val) {
        if($val > 1 && $i !== ' ' && $i !== '')
            echo "Symbol '".$i."' $val times.\n";
        else
            continue;
    }
}

function mb_count_chars($input): array
{
    $l = mb_strlen($input, 'UTF-8');
    $unique = array();
    for($i = 0; $i < $l; $i++) {
        $char = mb_substr($input, $i, 1, 'UTF-8');
        if(!array_key_exists($char, $unique))
            $unique[$char] = 0;
        $unique[$char]++;
    }
    return $unique;
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

