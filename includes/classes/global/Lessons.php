<?php

class Lessons
{
    private array $list1 = array(
        array(
            "first_name" => "Noah",
            "last_name" => "M.",
            "country" => "Switzerland",
            "continent" => "Europe",
            "age" => 19,
            "language" => "C"
        ),
        array(
            "first_name" => "Anna",
            "last_name" => "R.",
            "country" => "Liechtenstein",
            "continent" => "Europe",
            "age" => 52,
            "language" => "JavaScript"
        ),
        array(
            "first_name" => "Ramon",
            "last_name" => "R.",
            "country" => "Paraguay",
            "continent" => "Americas",
            "age" => 29,
            "language" => "Ruby"
        ),
        array(
            "first_name" => "George",
            "last_name" => "B.",
            "country" => "England",
            "continent" => "Europe",
            "age" => 81,
            "language" => "C"
        )
    );

    private array $likes = array(
        [],
        ["Peter"],
        ["Jacob", "Alex"],
        ["Max", "John", "Mark"],
        ["Alex", "Jacob", "Mark", "Max"]
    );

    public function lesson1task4() : void {
        print_r(array_count_values( array_column($this->list1, 'language')));
    }

    public function getLikes(int $id = 0): string|array {
        if($id < 0 || $id > sizeof($this->likes)) {
            return 'ERROR: Wrong ID ('.$id.')';
        }
        $num = sizeof($this->likes[$id]);
        return match ($num) {
            0 => "no one likes this\n",
            1 => "".$this->likes[$id][0]." likes this\n",
            2 => "".$this->likes[$id][0]." and ".$this->likes[$id][1]." likes this\n",
            3 => "".$this->likes[$id][0].", ".$this->likes[$id][1]." and ".$this->likes[$id][2]." likes this\n",
            default => "".$this->likes[$id][0].", ".$this->likes[$id][1]." and ".($num - 2)." others likes this\n"
        };
    }

}