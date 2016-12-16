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

$sql='SELECT * FROM news';
$result=mysqli_query($link,$sql);
 ?>
 <table border="2" style="color:#fff;">
  <tr>
    <th>id_news</th>
    <th>title</th>
    <th>id_cat</th>
    <th>content</th>
    <th>url_image</th>
    <th>date_creation</th>
  </tr>  
  <?php
 if ($result -> num_rows>0){
  while ($row=$result -> fetch_assoc()) {
    ?>
    <tr class="tr">
      <td> <?php echo $row['id_news'];?> </td>
      <td> <?php echo $row['title'];?> </td>
      <td> <?php echo $row['id_cat'];?> </td>
      <td> <?php echo $row['content'];?> </td>
      <td> <?php echo $row['url_image'];?> </td>
      <td> <?php echo $row['date_creation'];?> </td>
       </td>
    </tr>

      <?php
  }
 } ?>

 </table>
</div>


<?php }?>



    <div id="footer">
    <p class="copyright">Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved</p>
  </div>



</div>
</body>