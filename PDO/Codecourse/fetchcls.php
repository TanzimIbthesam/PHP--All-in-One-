

<?php 
//Fetchclass
include 'connect.php';
class Guest{
    public $id;
    public $Name;
    public $Message;
    public $Posted;
    public $entry;

    public function __construct(){
        $this->entry=".$this->Name. posted: .$this->Message";
    }
}
$query=$pdo->query('SELECT * FROM guests');
$query->setFetchMode(PDO::FETCH_CLASS,'Guest');
while($row=$query->fetch()){
//  print_r($row);
// echo '<pre>',print_r($row),'<pre>';
echo $row->entry,'<br>';
}

?>



