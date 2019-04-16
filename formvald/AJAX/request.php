<?php 
/*
The XMLHttpRequest object is used to exchange data with a server.
GET or POST?

GET is simpler and faster than POST, and can be used in most cases.

However, always use POST requests when:

A cached file is not an option (update a file or database on the server).
Sending a large amount of data to the server (POST has no size limitations).
Sending user input (which can contain unknown characters), POST is more robust and secure than GET.



*/




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
<h1>The XMLHttpRequest Object</h1>

<button type="button" onclick="loadDoc()">Request data</button>

<p id="demo"></p>


<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "demo_test.txt", true);
  xhttp.send();
}
</script>
</body>
</html>