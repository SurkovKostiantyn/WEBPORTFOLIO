<?php
    $output = sprintf("(%s) %s %s %s",
        substr($_POST['num'], 0, 3),
        substr($_POST['num'], 3, 3),
        substr($_POST['num'], 6, 2),
        substr($_POST['num'], 8, 2));
    echo("The formatted phone number: $output.");

