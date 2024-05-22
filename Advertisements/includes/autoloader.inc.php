<?php 

/**
 * 
 * function autoLoader
 * This function is responsible for the include section in the views. Instead of writing all the individual include to the view, it automaticly adds the path to the wanted class
 * 
 * @param string $classname The name of the required class
 * 
 * @return string $fullpath The full path of the class is included once if the file exists. If tha file does not exists it will return false
 */

spl_autoload_register('autoLoader');

function autoLoader($className) {
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}

?>