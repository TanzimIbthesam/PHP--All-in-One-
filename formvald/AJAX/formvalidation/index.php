<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
       $("form").submit(function(event){
           event.preventDefault();
           var name= $("#mail-name").val();
           var email= $("#mail-email").val();
           var gender= $("#mail-gender").val();
           var message= $("#mail-message").val();
           var submit= $("#mail-submit").val();
           $(".form-message").load("mail.php",{
             name: name,
             email: email,
             gender: gender,
             message: message,
            submit: name,
           });

       });
    });
    </script>
    
</head>
<body>
<div class="form">
<div class="container">
<div class="row">
<div class="col-sm">

</div>

<div class="col-sm">
<form action="mail.php"method="POST"> 
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text"id="mail-name"name="name" class="form-control" placeholder="First name">
    <label for="exampleInputEmail1">Email</label>
    <input type="email"name="email"id="mail-email" class="form-control" placeholder="Email"><br>
    <select id="mail-gender" name="gender">
      <option value="male"placeholder="male">Male</option>
      <option value="female"placeholder="female">Female</option>
    </select><br><br>
        
    <textarea name="message"id="mail-message" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea><br>
    <button type="submit" id="mail-submit"name="submit" class="btn btn-primary">Submit</button>
    <p class="form-message"></p>
    </form>
  </div>
        
  </div>
  <div class="col-sm">
  
  </div>
</div>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>