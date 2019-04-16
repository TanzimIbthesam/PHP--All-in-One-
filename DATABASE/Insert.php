<?php 
include 'Db.php';
error_reporting(0);
if($_GET['submit']){
 $name= $_GET['Name'];
 $bloodgroup= $_GET['Bloodgroup'];
 $town= $_GET['Town'];
//  $name= $_POST['Name'];
//  $bloodgroup= $_POST['Bloodgroup'];
//  $town= $_POST['Town'];

$sql="INSERT INTO info_table(Name,Bloodgroup,Town)VALUES('$name','$bloodgroup','$town')";
$result=$conn->query($sql);
if($result){
    echo "Data inserted successfully";
}else{
    echo "Data was not inserted";
}

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    Name<br><input type="text"name="Name"placeholder="Enter Your Name"><br>
    Blood group<br><input type="text"name="Bloodgroup"placeholder="Enter Your Blood group"><br>
    Town<br><input type="text"name="Town"placeholder="Enter Your Town"><br><br>
    <input type="submit"name="submit"value="submit">
    </form>
   
   
      
</body>
</html>









