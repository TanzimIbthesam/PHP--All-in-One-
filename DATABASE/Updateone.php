
 

 <?php 
 include 'Db.php';
 error_reporting(0);
 
 
 
 
 if(isset($_POST['submit'])){
     
     $id=$_GET['id'];
     $name=$_POST['Name'];
     $bloodgroup=$_POST['Bloodgroup'];
     $town=$_POST['Town'];
     
     
     
     
 $sql="UPDATE info_table SET Name='$name',Bloodgroup='$bloodgroup',Town='$town'WHERE id='$id'";
 // $result=$conn->query($sql);
 $data=mysqli_query($conn,$sql);
 if($data==true){
     echo "Data successfully updated";
 }else{
     echo "Data was not updated";
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
    
   ID<br><input type="text"name="id"value="<?php echo $_GET['id']; ?>"><br>
    Name<br><input type="text"name="Name"value="<?php echo $_GET['sn']; ?>"><br>
    Bloodgroup<br><input type="text"name="Bloodgroup"value="<?php echo $_GET['Blg']; ?>"><br>
    Town<br><input type="text"name="Town"value="<?php echo $_GET['Twn']; ?>"><br><br>
   <input type="submit"name="submit"value="Update">
 </form>
 </body>
 </html> 
 
 
 
 
 
 
 
  






