<?php
session_start();
 $servername='localhost';
  $username='root';
 $password=''; 
 $dbname='database';


 $con=new mysqli($servername,$username,$password,$dbname);
 
 if ($con->connect_error){
 	die('error to connect');
 }
$login=$_GET['login'];
 $pass=$_GET['password'];
 $sql='SELECT * FROM users WHERE (login="'.$login.'" and password="'.$pass.'")';

 $result=$con->query($sql);
 $_SESSION['login']=$login; 
 
 if ($result->num_rows>0){
 	while($row=$result->fetch_assoc()){
		?>
		<br>
		<?php
		 $_SESSION['login'] = $login;
		 break;
 		 
 	}
 }


header("Location: http://localhost/homepage21/users.php");
exit;
?>