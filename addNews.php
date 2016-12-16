<?php

$servername='localhost';
$database='database';
$username='root';
$password='';

$link= new mysqli($servername,$username,$password,$database);
if ($link -> connect_error){
  die('connect_error');
}


$title = $_GET['title'];
$id_cat = $_GET['id_cat'];
$cotent = $_GET['content'];
$url_image = $_GET['url_image'];



$sql="INSERT INTO users"."(title,id_cat,content,url_image)"."VALUES ('$title','$id_cat','$content','$url_image')";
$result=mysqli_query($link,$sql);

header("Location: http://localhost/homepage21/updateNews.php");
exit;



