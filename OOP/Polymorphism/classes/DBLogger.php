<?php 
class DBLogger implements LoggerInterface{
    public function log($message){
        echo "Logging Message to DB:$message";
    }
}





?>