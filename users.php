<?php session_start();?>
<head>
<title>THEPRIVATESPACE</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css" />
<script  type="text/javascript" src="js/jquery-3.1.1.min.js"> </script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/form.js"></script>

</head>
<body class="home">
<div id="wrap">
  <div id="header"> <img src="images/logo1234.jpg" />
    <div id="nav">
      <ul class="menu">
        <li ><a href="index.php">Home</a></li>
        <li><a href="articles.php">Articles</a>
          <ul class="sub-menu">
            <li><a href="#">News</a></li>
            <li><a href="#">Expositions</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">Resourses</a></li>
            <?php
            If (isset($_SESSION['login'])){
            ?>
            <li><a href="updateNews.php">Edit articles</a></li>
            <?php }
            ?>
          </ul>
        </li>
        <li><a href="contact.php">Contact</a></li>
<?php
If (isset($_SESSION['login'])){
?>
  

          <li><a href="logout.php">Log out</a></li>

        
      
            <?php
  } else { ?>

        <li><a class="myLogin">Log in</a></li>

  <?php }
  ?>
      </ul>
    </div>
  </div>





<?php 
If (isset($_SESSION['login'])){
?>
<div class="table"  >

  <?php

require_once('connection.php');

$sql='SELECT * FROM users';
$result=mysqli_query($link,$sql);
 ?>
 <table border="2" style="color:#fff;">
  <tr>
    <th>id_user</th>
    <th>login</th>
    <th>password</th>
    <th>f_name</th>
    <th>l_name</th>
    <th>group_user</th>
    <th>date_creation</th>
    <th>action</th>
  </tr>  
  <?php
 if ($result -> num_rows>0){
  while ($row=$result -> fetch_assoc()) {
    ?>
    <tr class="tr">
      <td> <?php echo $row['id_user'];?> </td>
      <td> <?php echo $row['login'];?> </td>
      <td> <?php echo $row['password'];?> </td>
      <td> <?php echo $row['f_name'];?> </td>
      <td> <?php echo $row['l_name'];?> </td>
      <td> <?php echo $row['group_user'];?> </td>
      <td> <?php echo $row['date_creation'];?> </td>
      <td> <a href="http://localhost/homepage21/deleteUser.php?id_user=<?php echo $row['id_user']?>"><img src="images/close.jpg" height=25px></a> 
       </td>
    </tr>

      <?php
  }
 } ?>

 </table>

 <a href="#"> <input class="add" type="button" value="add" style="float:right; width:10%;background-color:#00ffff"/></a>
</div>


<form class="registration" method="get" style="border: 1px solid #00E5EE;" action="http://localhost/homepage21/addUser1.php">
    <img src="images/close.jpg" class="close"/>
    <h1>Registration form</h1>
        <p>    
        <input type="text" name="f_name" placeholder="First name" required>
    </p>
        <p>    
        <input type="text" name="l_name" placeholder="Last name" required>
    </p>

    <p>    
        <input type="text" name="login" placeholder="Login" required>
    </p>
    <p>
        <input type="password" name='password' placeholder="Password" required>
    </p>
    <a href="addUser.php">
        <input type="submit" name="submit" value="Continue">
    </a>      
</form>
<?php }?>



    <div id="footer">
    <p class="copyright">Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved</p>
  </div>




</div>
</body>