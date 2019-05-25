<?php 
session_start();
include 'connect.php';
$message="";
if(isset($_POST['login'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $message='<label>All fields are required</label>';
    }else{
        $query="SELECT * FROM users WHERE username=:username AND password=:password";
        $statement=$pdo->prepare($query);
        $statement->execute(
            array(
                'username'     =>     $_POST["username"],  
                'password'     =>     $_POST["password"]  
                
            )
        );
        $count=$statement->rowCount();
        if($count>0){
            $_SESSION["username"] = $_POST["username"]; 
            header("location:index.php");
        }else{
            echo "Wrong data";
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO Login script</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
<style>
form{
    
}
.container{
    width:500px;
    /* padding:100px; */
   padding:100px;
}
</style>
</head>
<body>
<?php 
if(isset($message)){
    echo '<label class="text-danger">'.$message.'<label>';
}

?>
<div class="container">
<div class="row ">
<div class="col-md-12">
<h3>Login Form with PDO</h3>
<form method="post">
<input type="text"name="username"placeholder="Enter Your Username"class="form-control"><br>
<input type="password"name="password"placeholder="Enter Your passsword"class="form-control"><br>
<input type="submit"Value="Login"name="login"class="btn btn-info">
</form>
</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>