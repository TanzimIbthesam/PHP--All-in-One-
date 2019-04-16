<?php 

$servername="localhost";
$user="root";
$password="";
$dbname="testdb";

$conn=new mysqli($servername,$user,$password,$dbname);

if($conn->connect_error){
    die("Connection error").$conn->connect_error;
 }else{
     echo "Connection established successfully";
 }





?>