<?php 

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $message=$_POST['message'];
    $errorEmpty=false;
    $errorEmail=false;

    if(empty($name) || empty($email) || empty($gender)){
        echo "<span class=''>Fill in the fields</span>";
        $errorEmpty=true;
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<span class='btn btn-danger'>Write in a valid email address</span>";
        $errorEmail=true;
    }else{
        echo "<span class='btn btn-success'>All you information is inserted correctly</span>";
    }

}else{
    // echo "There was an error";
}




?>
<script>
var errorEmpty="<?php echo $errorEmpty;?>";
var errorEmpty="<?php echo $errorEmail;?>";
if(errorEmpty==true){
    $("#mail-name,#mail-email,#mail-message,#mail-gender").removeClass("input-error")
}
if(errorEmail==true){
    $("#mail-email").addClass("input-error")
}
if(errorEmpty==false && errorEmail==false){
    $("#mail-name,#mail-email,#mail-message").val("");
}

</script>