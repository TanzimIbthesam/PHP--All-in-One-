<?php
spl_autoload_register('myAutoLoader');
function myAutoLoader($className)
{
    $path = "classes/";
    $extension = ".php";
    $fullpath = $path . $className . $extension;
    if (!file_exists($fullpath)) {
        return false;
    }
    include_once $fullpath;
}