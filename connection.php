<?php

$servername='localhost';
$database='database';
$username='root';
$password='';

$link= new mysqli($servername,$username,$password,$database);
if ($link -> connect_error){
  die('connect_error');
}
?>