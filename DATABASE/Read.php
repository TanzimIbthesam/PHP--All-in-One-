<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <style>
  
    table{
        /* background-color:red; */
        border:2px solid black;
       /* border-right:2px solid black;
       color :white;
       border-collapse:none; */
      width:100px;
       
      
      
    }
    table th{
        width:50px;
        padding:10px;
        background-color:aquamarine;
        font-family:Arial;

    }
    table td{
        padding:5px;
    }
    </style>
    
</head>
<body>
<table><tr>
    <th>id</th>
    <th>Name</th>
    <th>Bloodgroup</th>
    <th>Town</th>
    <th colspan="2">Operations</th>
   </tr>
   
</html>
<?php 
$servername="localhost";
$user="root";
$pass="";
$dbname="testdb";
$conn=new mysqli($servername,$user,$pass,$dbname);

if($conn->connect_error){
    die("Connection failed").$conn->connect_error;
}else{
    echo "Connection successfully established";
}

$sql="SELECT id,Name,Bloodgroup,Town FROM info_table";

$result=$conn->query($sql);

if($result->num_rows > 0){
   
    while($row=$result->fetch_assoc()){
       echo "<tr>
       <td>".$row["id"]."</td>
       <td>".$row["Name"]."</td>
       <td>".$row["Bloodgroup"]."</td>
       <td>" .$row["Town"]."</td>
       <td><a href='Update.php?id=$row[id]&sn=$row[Name]&Blg=$row[Bloodgroup]&Twn=$row[Town]'>Edit</a></td>
       <td><a href='Delete.php?id=$row[id]&sn=$row[Name]&Blg=$row[Bloodgroup]&Twn=$row[Town]'>DELETE</a></td>
      
       </tr>"
    //    a href="update.php?id=<?php echo $res['id']
       
                    ;
    }
    echo "</table>";
}else{
    echo "0 results";
}





?>