<?php 

spl_autoload_register('autoLoader');

function autoLoader($className){
    $path="classes/";
    $extension=".class.php";
    $fullpath=$path.$className.$extension;

    include_once($fullpath);
}
