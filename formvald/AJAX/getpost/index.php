<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
//get
// $(document).ready(function(){
// $("button").click(function(){
// $.get("test.txt",function(data,status){
//  $("#test").html(data);
//  alert(status);
// })
// });
// });
//post
$(document).ready(function(){
$("input").keyup(function(){
var name=$("input").val();
$.post("suggestions.php",{
    suggestions:name
},function(data,status){
 $("#test").html(data);
});
});
});
</script>
<body>
    <input type="text"name="name">
    <p id="test"></p>
</body>
</html>