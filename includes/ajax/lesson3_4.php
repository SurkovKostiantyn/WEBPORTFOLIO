<?php
    $list1  = array (
        array (
            "first_name" => "Noah",
            "last_name" => "M.",
            "country" => "Switzerland",
            "continent" => "Europe",
            "age" => 19,
            "language" => "C"
        ),
        array (
            "first_name" => "Anna",
            "last_name" => "R.",
            "country" => "Liechtenstein",
            "continent" => "Europe",
            "age" => 52,
            "language" => "JavaScript"
        ),
        array (
            "first_name" => "Ramon",
            "last_name" => "R.",
            "country" => "Paraguay",
            "continent" => "Americas",
            "age" => 29,
            "language" => "Ruby"
        ),
        array (
            "first_name" => "George",
            "last_name" => "B.",
            "country" => "England",
            "continent" => "Europe",
            "age" => 81,
            "language" => "C"
        )
    );
    $counts = array_count_values(
        array_column($list1, 'language')
    );
    print_r($counts);
