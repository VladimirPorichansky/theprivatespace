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
        <li class="current_page_item"><a href="index.php">Home</a></li>
        <li><a href="articles.php">Articles</a>
          <ul class="sub-menu">
            <li><a href="#">News</a></li>
            <li><a href="#">Expositions</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">Resourses</a></li>
                        <?php
            If (isset($_SESSION['login'])){
            ?>
            <li><a href="#">Edit articles</a></li>
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


$id_news=$_GET['id_news'];
  require_once('connection.php');

$sql='SELECT * FROM news WHERE id_news='.$id_news;

$result=mysqli_query($link,$sql);

?>

<div class="article">

<?php
  $row=$result -> fetch_assoc();
    ?>
  
      <img src=<?php echo $row['url_image'];?> height=90% style="float-left;">
      <p class="blog-title" href="#" style="margin-left: 19%;  margin-top: -12%;color:rgb(200,200,200);font-size:25pt;"><?php echo $row['title'];?></p>
           
      <p class="meta" style="margin-left:19%; margin-top:-1%; color:rgb(90,90,90);font-size:10pt;"><?php echo $row['date_creation'];?></p>
      <p style=" margin-left: 19%;color: rgb(30,30,30);font-size: 12pt;    margin-top: -2%;width: 65%;}"><?php echo $row['content'];?></p>



</div>








  <div id="footer">
    <p class="copyright">Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved</p>
  </div>








<form class="form" action="auth.php">
    <img src="images/close.jpg" class="close"/>
    <h1>Log in form</h1>
    <p>    
        <input type="text" name="login" placeholder="Login or email">
    </p>
    <p>
        <input type="password" name='password' placeholder="Password">
    </p>
    <p>
        <input type="submit" name="submit" value="Continue">
    </p>      
    <a class="reg" href="login.php" style="color:white;">Registration</p>
</form>
</div>
</body>

