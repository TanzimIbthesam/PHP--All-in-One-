<?php
//Create an array from variables and their values:
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");
echo "<pre>";
print_r($result);
echo "</pre>";
?> 