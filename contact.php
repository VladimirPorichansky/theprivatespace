<?php session_start();?>
<head>
<title>THEPRIVATESPACE | Contact</title>
<link type="text/css" rel="stylesheet" href="styles/style.css" />
<script  type="text/javascript" src="js/jquery-3.1.1.min.js"> </script>
<script type="text/javascript" src="js/form.js"></script>

</head>
<body class="home">
<div id="wrap">
  <div id="header"> <img src="images/logo1234.jpg"/>
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
        <li class="current_page_item"><a href="contact.php">Contact</a></li>
         <?php If (isset($_SESSION['login'])){
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



  <div class="main">

    <iframe style="margin-left:50%; margin-top:5%; float:right;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.3724487898894!2d36.225657315420584!3d50.00437397941628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0e1caacda97%3A0x2c717d8cad400691!2z0KXQsNGA0LrRltCy0YHRjNC60LjQuSDQvdCw0YbRltC-0L3QsNC70YzQvdC40Lkg0YPQvdGW0LLQtdGA0YHQuNGC0LXRgiDRltC80LXQvdGWINCSLtCdLiDQmtCw0YDQsNC30ZbQvdCw!5e0!3m2!1sru!2sua!4v1479059644287" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>

    <div id="contact-details">

      <h3 class="title">Get In Touch</h3>
      <div class="post">
        <p style="width:50%;">Please use the form on this page to discuss the possibility of working with us or contact us directly with phone or email.</p>
      </div>
      <h3 style="color:#00FFFF;">Contact Details</h3>
      <h4>Phone: <span>+38 (0) 6606 954 67</span></h4>
      <h4>Fax: <span>+xx (x) 1234 xxx xxx</span></h4>
      <h4>Email: <span>vladimir.porichansky@gmail.com</span></h4>

      <h3 style="color:#00FFFF;">Contact Us</h3>

          <div id="contact-form-container">
      <form id="contact-form" method="get" action="#">
        <fieldset>
          <input id="form_name" type="text" name="name" value="Name"/>
          <input id="form_email" type="text" name="email" value="Email"/>
          <input id="form_subject" type="text" name="subject" value="Subject"/>
          <textarea id="form_message" rows="10" cols="40" name="message"></textarea>
          <input type="file" name="file" style="color:#00FFFF;"><br>
          <input id="form_submit" class="submit" type="submit" name="submit" value="Submit &raquo;" />
        </fieldset>
      </form>
    </div>
    </div>

    



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

