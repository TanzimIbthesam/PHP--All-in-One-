<?php 
class FileLogger implements LoggerInterface{
    
        public function log($message){
            echo "Logging Message to file:$message";
        
}

}


?>