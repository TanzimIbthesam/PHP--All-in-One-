<?php 
/*
AJAX can be used to create more user-friendly and interactive searches.

AJAX Live Search
The following example will demonstrate a live search, where you get search results while you type.

Live search has many benefits compared to traditional searching:

Results are shown as you type
Results narrow as you continue typing
If results become too narrow, remove characters to see a broader result
*/
?>
<html>
<head>
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>

</body>




<!--Source code explanation:

If the input field is empty (str.length==0), the function clears the content of the livesearch placeholder and exits the function.

If the input field is not empty, the showResult() function executes the following:

Create an XMLHttpRequest object
Create the function to be executed when the server response is ready
Send the request off to a file on the server
Notice that a parameter (q) is added to the URL (with the content of the input field)
  -->