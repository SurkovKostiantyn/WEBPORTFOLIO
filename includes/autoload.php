<?php
function load_classes($class_name){
    $path_to_file = 'includes/classes/'.$class_name.'.php';
    if (file_exists($path_to_file)) {
        require_once $path_to_file;
    }
    ${$class_name} = new $class_name();

} spl_autoload_register('load_classes');

foreach (glob("includes/classes/*.php") as $filename) {
    $obj = str_replace(['includes/classes/','.php'], null, $filename);
    ${$obj} = new $obj();
}