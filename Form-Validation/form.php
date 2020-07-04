<?php
require('uservalidator.php');
if (isset($_POST['submit'])) {
    $validate = new UserValidator($_POST);
    $errors = $validate->ValidateForm();
    //save data to database
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-xs">

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="border bg-indigo-500 px-4 py-8 pb-8 mb-4 h-128 w-full" method="POST">
                <div class="mb-4">
                    <h1 class="text-center text-2xl text-white">User Registration</h1>
                </div>
                <div class="mb-4">

                    <label for="" class="text-white ">Enter your Username</label>


<input type="text" name="username" id="" class="text-gray-700 rounded w-full  py-1 border-solid border-2" placeholder="Enter your username" 
       value="<?php echo $_POST['username'] ?? '' ?>">
                </div>
                <div class="errors bg-red-400 text-white text-center">

                    <?php
                    // $errors=$validate->ValidateForm();
                    echo $errors['username'] ?? ' ' ?>
                </div>
                <div class="mb-6">

                    <label for="" class="text-white ">Enter your Email</label>

  <input type="email" name="email" id="" class="text-gray-700 rounded w-full  py-1 border-solid border-2" placeholder="Enter your email" 
         value="<?php echo $_POST['email'] ?? '' ?>">
                </div>
                <div class="errors bg-red-400 text-white text-center">
                    <?php
                    // $errors=$validate->ValidateForm();
                    echo $errors['email'] ?? ' ' ?>
                </div>
                <div class="mb-4">

                    <input type="submit" name="submit" value="SEND" class="text-gray-700 rounded w-full  py-1 border-solid border-2 hover:bg-red-400" placeholder="">
                </div>

            </form>
        </div>
    </div>


    </div>
</body>

</html>
