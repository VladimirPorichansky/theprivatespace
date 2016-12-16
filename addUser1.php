<?php

$servername='localhost';
$database='database';
$username='root';
$password='';

$link= new mysqli($servername,$username,$password,$database);
if ($link -> connect_error){
  die('connect_error');
}


$login = $_GET['login'];
$password = $_GET['password'];
$f_name = $_GET['f_name'];
$l_name = $_GET['l_name'];



$sql="INSERT INTO users"."(login,password,f_name,l_name)"."VALUES ('$login','$password','$f_name','$l_name')";
$result=mysqli_query($link,$sql);

header("Location: http://localhost/homepage21/users.php");
exit;



