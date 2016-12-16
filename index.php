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


  
  <div id="featured-section">

      <div id="circles"> <a href=""><img class="first" src="images/111.jpg"/><a/> <a href=""><img src="images/121.jpg" /><a/> <a href=""><img src="images/131.jpg" /><a/><a href=""><img src="images/141.jpg" /> <a/>
      </div>

    

      <div class="slider">
        <div class="demo">
          <button class="prev"><img src="images/left.png" height=60px/></button>
          <button class="next"><img src="images/right.png" height=60px/></button>
          
          <div class="c-slider">
            <div style="display:inline-block">
              <img src="images/slider1.jpg" height=1300px/>
            </div>
            <div>
              <img src="images/slider2.jpg" height=1300px/>
            </div>
            <div >
              <img src="images/slider3.jpg" height=1300px/>
            </div>
            <div >
              <img src="images/slider4.jpg" height=1300px/>
            </div>
          </div>  

        </div>
      </div> 

  </div>


<div id="frontpage-main">
    <div id="frontpage-content">
      <h3>Quisque luctus dui pharetra</h3>
     <iframe src="https://www.youtube.com/embed/BDwxeGEeXeY" frameborder="0" allowfullscreen></iframe>
    </div>

<?php

require_once('connection.php');

$sql='SELECT * FROM `news` WHERE `id_news` = (SELECT Max(id_news) FROM `news`)';
$result=mysqli_query($link,$sql);?>

  <?php if ($result -> num_rows>0){
  while ($row=$result -> fetch_assoc()) {
    ?>
    <div id="frontpage-sidebar">
      <h3>Latest Articles</h3>
      <a class="blog-title" href="#"><?php echo $row['title'];?></a>
      <p class="meta"><?php echo $row['date_creation'];?></p>
      <p><?php echo $row['content'];?></p>
      <a class="read-more" href="#">Read More &raquo;</a> 
    </div>
<?php
  }
 } ?>

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

