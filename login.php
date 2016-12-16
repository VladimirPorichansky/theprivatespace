
<head>
<title>THEPRIVATESPACE</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css" />
<script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
<script type="text/javascript" src="js/slider.js"></script>

</head>
<body class="home">
<div id="wrap">
  <div id="header"> <img src="images/logo1234.jpg" />
    <div id="nav">
      <ul class="menu">
        <li ><a href="index.php">Home</a></li>
        <li><a href="#">Articles</a>
          <ul class="sub-menu">
            <li><a href="#">History</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Expositions</a></li>
            <li><a href="#">Training resources</a></li>
          </ul>
        </li>
        <li><a href="#">Contact</a></li>
         <li class="current_page_item"><a href="login.php" >Log in</a></li>
      </ul>
    </div>
  </div>


<form class="registration" method="get" style="display:block; position:relative; float:left; margin-top:5%;" action="http://localhost/homepage21/addUser.php">
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
    
        <input type="submit" name="submit" value="Continue"/>   
</form>
  


  <div id="footer" style="margin-top:100px">
    <p class="copyright">Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved</p>
  </div>

</div>

</body>

