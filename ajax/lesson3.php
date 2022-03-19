<?php
    if(!empty($_POST['string'])){
        $count = array_count_values(str_split($_POST['string']));
        $count_keys = array_keys($count);
        $count_values = array_values($count);

        for($i=0; $i < count($count_keys); $i++) {
            if($count_keys[$i] === ' ' || $count_keys[$i] === '')
                continue;
            if($count_values[$i] == 1)
                continue;
            echo 'char '.$count_keys[$i].' : '.$count_values[$i].' times <br>';
        }
    }else{
        echo 'Error: empty string';
    }
?>