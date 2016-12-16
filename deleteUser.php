<?php

$servername='localhost';
$database='database';
$username='root';
$password='';

$link= new mysqli($servername,$username,$password,$database);
if ($link -> connect_error){
  die('connect_error');
}

$id_user=$_GET['id_user'];

$sql="DELETE FROM users WHERE (id_user=$id_user)";

mysqli_query($link,$sql);

header("Location: http://localhost/homepage21/users.php");
exit;