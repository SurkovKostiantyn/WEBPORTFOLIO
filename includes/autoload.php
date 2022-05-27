<?php
function load_classes($class_name): void{
    $path_to_file = 'includes/classes/global/'.$class_name.'.php';
    if (file_exists($path_to_file)) {
        require_once $path_to_file;
    }
} spl_autoload_register('load_classes');

foreach (glob("includes/classes/global/*.php") as $filename) {
    $obj = str_replace(['includes/classes/global/','.php'], null, $filename);
    ${$obj} = new $obj();
}

function load_other_classes($class_name):void{
    $path_to_file = 'includes/classes/users/'.$class_name.'.php';
    if (file_exists($path_to_file)) {
        require_once $path_to_file;
    }

} spl_autoload_register('load_other_classes');


