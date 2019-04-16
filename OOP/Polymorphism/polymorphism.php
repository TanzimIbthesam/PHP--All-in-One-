<?php 
 spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});
function getLogger($type){
    switch($type){
        case 'database';
        return new DBLogger();
        break;
        case 'file';
        return new DBLogger();
        break;

    }
}
$logger=getLogger('database');
$tech= new UserProfile($logger);
$tech->createUser();



?>