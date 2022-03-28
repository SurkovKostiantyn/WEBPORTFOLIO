<?php
class Lesson{
    public array $likes = array(
        [],
        ["Peter"],
        ["Jacob", "Alex"],
        ["Max", "John", "Mark"],
        ["Alex", "Jacob", "Mark", "Max"]
    );

    public function getLikes(int $id = 0): string {
        if($id < 0 || $id > sizeof($this->likes)) {
            return 'ERROR: Wrong ID ('.$id.')';
        }
        $num = sizeof($this->likes[$id]);
        return match ($num) {
            0 => 'no one likes this',
            1 => ''.$this->likes[$id][0].' likes this',
            2 => ''.$this->likes[$id][0].' and '.$this->likes[$id][1].' likes this',
            3 => ''.$this->likes[$id][0].', '.$this->likes[$id][1].' and '.$this->likes[$id][2].' likes this',
            default => ''.$this->likes[$id][0].', '.$this->likes[$id][1].' and '.($num - 2).' others likes this'
        };
   }
}